<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
         $this->load->library('form_validation');
         $this->load->library('parser');
         $this->load->library('utilidades');
         $this->form_validation->set_error_delimiters('<div class="alert alert-warning"><strong>Atenção! </strong>', '</div>');

         //Configurando mensagens de erro
         $this->form_validation->set_message('min_length' ,  '{field} deve ter pelo menos {param} caracteres.');
         $this->form_validation->set_message('max_length' ,  '{field} deve ter até {param} caracteres.');
         $this->form_validation->set_message('required'   ,  '{field} é um campo obrigatório.');
         $this->form_validation->set_message('valid_email',  '{field} deve conter um email válido.');
         $this->form_validation->set_message('matches',      '{field} deve ser igual ao campo {param}.');
         $this->form_validation->set_message('differs',      '{field} deve ser diferente ao campo {param}.');
        

        //Verificar se o usuário está logado

        //Invoca as bibliotecas
        $this->load->library('parser');
        $this->load->library('table');



        session_start();

        if(!$_SESSION['usuario']['logado']){
            redirect($url.'login/sair', 'refresh');
        }
        $this->data['LOGIN']   = $_SESSION['usuario']['nip'];
        
        $this->data['OM']      = $_SESSION['usuario']['sg_om'];


        $this->verificaPermissao();


        //Inicia variáveis
        $this->data['title'] = ucfirst($this->uri->segment(1));
        $this->data['APP_NOME'] = 'AUX. REGULAÇÃO';
        $this->data['NOME_COMPL'] = 'Módulo Auxiliar de Administração do Sistema de Regulação';
        $this->data['APP_VERSAO'] = 'VERSÃO 1.0';
        $this->data['MENU'] = $this->montarMenu();
        
        
        //Manobra com tabelas
        $template = array('table_open' => '<table class="table" id="big_table">' );
        $this->table->set_template($template); //Gerando o template

        //PDF
        define('FPDF_FONTPATH',APPPATH .'plugins/fpdf/font/');
        require(APPPATH .'plugins/fpdf/fpdf.php');
    }

    public function verificaPermissao(){
      session_start();
      switch ($_SESSION['usuario']['perfil']) {
        case 'E':
            $_SESSION['usuario']['permissao']   = 1;
            $perfil = "EMISSOR";
          break;
          case 'A':
              $_SESSION['usuario']['permissao'] = 2;
             $perfil = "AUDITOR";
          break;
          case 'D':
              $_SESSION['usuario']['permissao'] = 3;
              $perfil = "ADMINISTRADOR - DSM";
          break;
          case 'T':
              $_SESSION['usuario']['permissao'] = 4;
              $perfil = "ADMINISTRADOR - T";
          break;
        default:
              $_SESSION['usuario']['permissao'] = 0;
              redirect('login/sair');
          break;
      }
      
      $this->data['PERFIL']  = $perfil;

    }


    /*  FUNÇÃO PARA MONTAR O MENU LATERAL  */

    public function montarMenu() {
        session_start();
        $perfil =  $_SESSION['usuario']['perfil'];
        
        $url = base_url();
        if($perfil === 'E'){
            $file = $_SERVER['DOCUMENT_ROOT'] . '/dev/admin_regulacao/data/menu_emissor.xml';
        }
        if($perfil === 'A' ){
          $file = $_SERVER['DOCUMENT_ROOT'] . '/dev/admin_regulacao/data/menu_admin.xml';
        }

        if($perfil === 'T' || $perfil === 'D'){
          $file = $_SERVER['DOCUMENT_ROOT'] . '/dev/admin_regulacao/data/menu_operador.xml';
        } 


        if (file_exists($file)) { //Verifica se o arquivo existe
            $xml = simplexml_load_file($file); // abre o arquivo xml
        } else {
            exit('ERROR:: O ARQUIVO DE CONFIGURAÇÃO DE MENUS NÃO FOI ENCONTRADO');
        }
        $menu = '<ul class="nav side-menu">';
        foreach ($xml as $link) {
            $menu .= '<li><a href="#">' . $link['nome'] . '<span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu">';
            foreach ($link as $sublink) {
                $menu .= '<li><a href=' . $url . $sublink['url'] . ' id="" onclick="">' . $sublink['nome'] . '</a></li>';
            }
            $menu .= '</ul></li>';
        }
        $menu .= '</ul>';
        return $menu;
    }




    /*
            FUNÇÃO PARA RETORNAR AS OMS NO FORMATO PARA A FUNÇÃO DE GERAR FORM
     *
     *
     *
     *
     */

    public function getOm(){
        $query = $this->db->query('SELECT id_om, sg_om from sc_audit.tb_om ');
        $p     = $query->result_array();
        $sg    = array_column($p,'sg_om');
        $id    = array_column($p,'id_om');
        return array_combine($id, $sg);
    }

     public function getOse(){
        $query = $this->db->query('SELECT id_ose, nm_ose from sc_audit.tb_ose order by nm_ose asc');
        $p     = $query->result_array();
        $sg    = array_column($p,'nm_ose');
        $id    = array_column($p,'id_ose');
        return array_combine($id, $sg);
    }
    
    
    public function getAuditor(){
        $query = $this->db->query('SELECT  
                                             sc_audit.tb_auditor.id_auditor as id,
                                             sc_audit.tb_pessoa.id_pessoa,
                                             sc_audit.tb_login.id_login,
                                             sc_audit.tb_pessoa.nm_pessoa as nm
                                     FROM sc_audit.tb_pessoa
                                         JOIN
                                          sc_audit.tb_auditor
                                          ON
                                          sc_audit.tb_auditor.id_pessoa = sc_audit.tb_pessoa.id_pessoa 
                                          JOIN
                                          sc_audit.tb_login
                                          ON
                                          sc_audit.tb_auditor.id_login = sc_audit.tb_login.id_login
                                          JOIN
                                          sc_audit.tb_om
                                          ON
                                          sc_audit.tb_login.id_om = sc_audit.tb_om.id_om
                                      ORDER BY sc_audit.tb_pessoa.nm_pessoa ASC');
        $p     = $query->result_array();
        $sg    = array_column($p,'nm');
        $id    = array_column($p,'id');
        return array_combine($id, $sg);
    }

    



     public function retornaOm(){
        $query = $this->db->query("
            WITH RECURSIVE Arvore (om) AS (
                SELECT sc_audit.tb_om.id_om
                FROM sc_audit.tb_om
                WHERE sc_audit.tb_om.sg_om =  'DSM'
                UNION ALL
                SELECT sc_audit.tb_om.id_om
                FROM sc_audit.tb_om
                INNER JOIN Arvore ON sc_audit.tb_om.id_om_sup = Arvore.om
            )  SELECT id_om , sg_om FROM Arvore INNER JOIN sc_audit.tb_om ON sc_audit.tb_om.id_om = Arvore.om ORDER BY sg_om ASC");
        $p     = $query->result_array();
        //var_dump($p);
        //die();
        return $p;
    }




     public function getPessoas($nome){
        $query = $this->db->query('SELECT id_pessoa, nm_pessoa, nip_tit, nip_vinc from sc_audit.tb_pessoa WHERE nm_pessoa ILIKE \'%'.$nome.'%\' and id_tipo_pessoa = 1 limit 1');
        $p     = $query->result_array();
        return $p;
        $sg    = array_column($p,'nm_pessoa');
        $id    = array_column($p,'id_pessoa');
        return array_combine($id, $sg);
    }

    /*
     *
     *
     *
     *
     *
     */


    //FUNÇÃO PARA GERAR FORMULÁRIOS BÁSICOS VERSÃO 0.1
    //ESTAT FUNÇÃO VISA DISPONIBILIZAR UMA FORMA PRÁTICA DE CRIAÇÃO  E PADRONIZAÇÃO DE FORMULÁRIOS
    public function gerarForm($array, $titulo, $btn, $urlAction) {

       //URL BASE

        $form = '<form id="formulario" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" method="POST" action="'.$urlAction.'">';
        for ($i = 0; $i < count($array); $i++) {
            ($array[$i]['required']) ? $span = '<span class="required"> * </span>' : $span = ''; //Verifica se é campo obrigatório
            ($array[$i]['readonly']) ? $readonly = 'readonly = readonly"' : $readonly = ''; //Verifica se é campo obrigatório
            ($array[$i]['id'])?$id = $array[$i]['id']:$id = 'none';

            $tag = $array[$i]["tag"];

            $form .= $this->$tag($id,$array[$i]["type"],$array[$i]["name"],$array[$i]["value"],$readonly,$array[$i]["titulo"],$span,$array[$i]["options"]);//recebe o código do input


        }
        $form .= '<div class="ln_solid"></div>
                           <div class="form-group">
                                   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <a id="btnAction" class="btn btn-primary">' . $btn . '</a>
                                          <a href="'.base_url().''.$this->uri->segment(1).'" class="btn btn-default" type="button">Cancelar</a>
                                   </div>
                           </div>
                   </form>
               ';
        return $form;
    }

    public function input($id = "", $type="", $name="", $value="", $readonly="",$titulo,$span,$option="" ){
       return '<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">' . $titulo . ' ' . $span . '</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="'.$id.'" class="form-control col-md-7 col-xs-12" name="' . $name . '"  type="' . $type . '" value="' . $value . '"  ' . $readonly . '>
                           </div>
                     </div>';
    }




     public function inputP($id = "", $type="", $name="", $value="", $readonly="",$titulo,$span,$option="" ){
       return '<div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">' . $titulo . ' ' . $span . '</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="input-group">
                             <input id="'.$id.'" class="form-control col-md-7 col-xs-12" name="' . $name . '"  type="' . $type . '" value="' . $value . '"  ' . $readonly . '>
                            <span class="input-group-btn">
                                 <button type="button" id="pesquisar" class="btn btn-primary">Go!</button>
                             </span>
                          </div>
                       </div>
                  </div>';
    }

    public function textarea($id = "", $type="", $name="", $value="", $readonly="",$titulo,$span,$option="" ){
       return '<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">' . $titulo . ' ' . $span . '</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <textarea class="form-control" name='.$name.'></textarea>
                           </div>
                     </div>';
    }

   public function select($id = "", $type="", $name="", $value="", $readonly="",$titulo,$span,$option="" ){
       $valor = $value;
       $selected = '';
       $select = '<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">' . $titulo . ' ' . $span . '</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <select id='.$id.' class="form-control" name='.$name.'>';
                                 foreach ($option as $key => $value) {
                                       if($key == $valor){
                                            $selected = 'selected';
                                            $select  .=   '<option value='.$key.' '.$selected.'>'.$value.'</option>';
                                            continue;
                                         }
                                          $select  .=   '<option value='.$key.'>'.$value.'</option>';
                                 }
       $select .=    '</select>
                           </div>
                     </div>';
       return $select;
    }
}
