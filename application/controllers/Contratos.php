<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contratos extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Datatables');

        $this->load->database();
        $this->data['url_pagina'] = base_url().''.$this->uri->segment(1);

    }

    //Função default
    public function index() {


        $this->table->set_heading(array('OSE','Numero do contrato','Inicio','Fim','Status','Auditor','Editar'));

        //Setar o número de colunas
        $this->data['columns']   =  'null,null,null,null,null,null,null';

        //Setar o coteúdo que deverá ser apresentado
        $this->data['pagina'] = 'contratos';
        $this->data['controller'] = 'Contratos';
        $this->data['table'] = $this->table->generate();
        $this->data['conteudo'] = $this->parser->parse('telas/tabelas', $this->data, true);
        $this->parser->parse('layout/layout', $this->data);
    }

    //Função para gerar datatables
    public function dtable(){
      $this->datatables
        ->select('sc_audit.tb_ose.nm_ose,
                  sc_audit.tb_contrato.nu_contrato,
                  sc_audit.tb_contrato.dt_inicio,
                  sc_audit.tb_contrato.dt_fim,
                  sc_audit.tb_contrato.ck_status,
                  sc_audit.tb_pessoa.nm_pessoa,
                  sc_audit.tb_contrato.id_contrato')
        ->from('sc_audit.tb_contrato')
        ->join('sc_audit.tb_auditor', 'sc_audit.tb_contrato.id_auditor = sc_audit.tb_auditor.id_auditor')
        ->join('sc_audit.tb_pessoa', 'sc_audit.tb_pessoa.id_pessoa = sc_audit.tb_auditor.id_pessoa')
        ->join('sc_audit.tb_ose', 'sc_audit.tb_ose.id_ose = sc_audit.tb_contrato.id_ose')
        ->edit_column('id_contrato', '<a href="#" class="acao" rel="alt" title="$1" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>', 'id_contrato');

      echo $this->datatables->generate();
    }

     public function ArrayForm($dados = NULL){
      //Função para gerar os elementos do formulário dinamicamente
        $arrayForm = array();

        $p = $dados;

        //var_dump($p); die();

        if($p !== NULL){

           $arrayForm = array(
                array(
                    "name"     => "id_contrato",
                    "titulo"   => "",
                    "tag"      => "input",
                    "value"    => $p[0]["id_contrato"],
                    "type"     => "hidden",
                    "required" => false,
                    "readonly" => true
                ),
                array(
                    "name"     => "nu_contrato",
                    "titulo"   => "Número",
                    "tag"      => "input",
                    "value"    => $p[0]["nu_contrato"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "dt_inicio",
                    "titulo"   => "Inicio",
                    "tag"      => "input",
                    "value"    => $p[0]["dt_inicio"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
               array(
                    "name"     => "dt_fim",
                    "titulo"   => "Fim",
                    "tag"      => "input",
                    "value"    => $p[0]["dt_fim"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "ck_status",
                    "titulo"   => "Status",
                    "tag"      => "select",
                    "options"  => array("H" => "Habilitado","D" => "Desabilitado"), //Passar um array com as oms,
                    "value"    => $p[0]["ck_status"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "id_om",
                    "titulo"   => "Om",
                    "tag"      => "select",
                    "options"  => parent::getOm(), //Passar um array com as oms
                    "value"    => $p[0]["id_om"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "id_ose",
                    "titulo"   => "OSE",
                    "tag"      => "select",
                    "options"  => parent::getOse(), //Passar um array com as oms
                    "value"    => $p[0]["id_ose"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "id_auditor",
                    "titulo"   => "Auditor",
                    "tag"      => "select",
                    "options"  => parent::getAuditor(), //Passar um array com as oms
                    "value"    => $p[0]["id_auditor"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                )

            );

            return $arrayForm;
        }




            $arrayForm = array(
                array(
                    "name"     => "nu_contrato",
                    "titulo"   => "Número",
                    "tag"      => "input",
                    "value"    => $p[0]["nu_contrato"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "dt_inicio",
                    "titulo"   => "Inicio",
                    "tag"      => "input",
                    "value"    => $p[0]["dt_inicio"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
               array(
                    "name"     => "dt_fim",
                    "titulo"   => "Fim",
                    "tag"      => "input",
                    "value"    => $p[0]["dt_fim"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "ck_status",
                    "titulo"   => "Status",
                    "tag"      => "select",
                    "options"  => array("H" => "Habilitado","D" => "Desabilitado"), //Passar um array com as oms,
                    "value"    => $p[0]["ck_status"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "id_om",
                    "titulo"   => "Om",
                    "tag"      => "select",
                    "options"  => parent::getOm(), //Passar um array com as oms
                    "value"    => $p[0]["id_om"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "id_ose",
                    "titulo"   => "OSE",
                    "tag"      => "select",
                    "options"  => parent::getOse(), //Passar um array com as oms
                    "value"    => $p[0]["id_ose"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                ),
                array(
                    "name"     => "id_auditor",
                    "titulo"   => "Auditor",
                    "tag"      => "select",
                    "options"  => parent::getAuditor(), //Passar um array com as oms
                    "value"    => $p[0]["id_auditor"],
                    "type"     => "text",
                    "required" => true,
                    "readonly" => false
                )
            );



      return $arrayForm;
    }


    //Funções para apresentação de formulário
    public function cadastraContratos() {

        $tituloForm             =   'Formulário de cadastro de Contratos';
        $acao                   =   'Cadastrar';
        $link                   =   base_url().''.$this->uri->segment(1).'/'.$acao;
        $this->data['form']     =   parent::gerarForm($this->ArrayForm(), $tituloForm, $acao, $link); //CHAMADA DA FUNÇÃO PARA GERAR FORMULÁRIOS
        $this->data['acao']     =   $acao;
        $this->data['link']     =   $link;
        $this->data['conteudo'] =   $this->parser->parse('telas/formulario', $this->data);
    }



    //Function para retornar os usuários
    private  function retornaContratos($id){
         //die();
         return $query = $this->db->query('SELECT * FROM sc_audit.tb_contrato WHERE sc_audit.tb_contrato.id_contrato = '.$id.' ')->result_array();

    }

    //

    public function alteraContratos($id) {
       //Utilizar o id
       //FAZER MELHORIAS PARA GERAR OS FORMULÁRIOS AUTOMATICAMENTE
        $this->load->model('Crud_Model', 'p');
        $p = $this->retornaContratos($id);
        if (count($p) > 0) {
            $tituloForm             =   'Formulário para alteração de dados da guia';
            $acao                   =   'Alterar';
            $link                   =   base_url().''.$this->uri->segment(1).'/'.$acao;
            $this->data['form']     =   parent::gerarForm($this->ArrayForm($p), $tituloForm, $acao, $link); //CHAMADA DA FUNÇÃO PARA GERAR FORMULÁRIOS
            $this->data['acao']     =   $acao;
            $this->data['link']     =   $link;
            return  $this->data['conteudo'] =   $this->parser->parse('telas/formulario', $this->data);
        }
        $this->data['ERRO'] = 'A informação passada não foi encontrada';
        return $this->parser->parse('errors/html/error_php', $this->data);
    }


    public function deletaContratos($id) {
       //Utilizar o id
       //FAZER MELHORIAS PARA GERAR OS FORMULÁRIOS AUTOMATICAMENTE
        $this->load->model('Guias_Model', 'p');
        $p = $this->retornaUsuarios($id);
        if (count($p) > 0) {
            $tituloForm             =   'Formulário para exclusão de dados da guia';
            $acao                   =   'Deletar';
            $link                   =   base_url().''.$this->uri->segment(1).'/'.$acao;
            $this->data['form']     =   parent::gerarForm($this->ArrayForm($p), $tituloForm, $acao, $link); //CHAMADA DA FUNÇÃO PARA GERAR FORMULÁRIOS
            $this->data['acao']     =   $acao;
            $this->data['link']     =   $link;
            return  $this->data['conteudo'] =   $this->parser->parse('telas/formulario', $this->data);
        }
        $this->data['ERRO'] = 'A informação passada não foi encontrada';
        return $this->parser->parse('errors/html/error_php', $this->data);
    }



    //Funções para CRUD com banco de dados
    public function deletar(){
       $this->verificaFormulario();
       //excluir usuário da tabela login pelo id_pessoa
       $dados = $this->input->post();
       $this->load->model('Crud_model', 'p');
       $query = $this->p->delete('id_login',$dados['id_login'],'sc_audit.tb_login');
       $this->data['msg']      = 'Dados deletados com sucesso';
       $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
    }

     public function alterar(){
         if(!$this->verificaFormulario()){
           return FALSE;
        }
        $dados = $this->input->post();
        $this->load->model('Crud_model', 'p');
        //Verifico se o número do contrato informado já existe
        $verificar = $this->p->select_where('nu_contrato',$dados['nu_contrato'],'sc_audit.tb_contrato');
        if($verificar[0]['id_contrato'] !== $dados['id_contrato']){
            $this->data['strong']       = "Atenção!";
            $this->data['alert']        = "warning";
            $this->data['msg']          = 'O número do contrato informado já existe.';
            return  $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
        }
        $dados['dt_log'] = date("Y-m-d h:i:sa");
        $query = $this->p->update('id_contrato',$dados['id_contrato'],$dados,'sc_audit.tb_contrato');
        $this->data['strong']   = "Operação efetuada com sucesso!";
        $this->data['alert']    = "success";
        $this->data['msg']      = 'Dados alterados com sucesso';
        $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
        //$this->parser->parse('layout/layout', $this->data);
    }

     public function cadastrar(){
        if(!$this->verificaFormulario()){
           return FALSE;
        }
        $dados = $this->input->post();
        $this->load->model('Crud_model', 'p');
        $v = $this->p->select_where('nu_contrato',$dados['nu_contrato'], 'sc_audit.tb_contrato');
        if(count($v) === 0){
            $dados['dt_log'] = date("Y-m-d h:i:sa");
            $query = $this->p->insert($dados,'sc_audit.tb_contrato');
            $this->data['strong'] = "Operação efetuada com sucesso!";
            $this->data['alert']  = "success";
            $this->data['msg']    = 'Dados cadastrados com sucesso';
            return  $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
        }
            $this->data['strong'] = "Atenção!";
            $this->data['alert']  = "warning";
            $this->data['msg']    = 'O contrato informado já possui cadastro';
            $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
     }


     public function verificaFormulario(){
         //Tratando erros
         $this->form_validation->set_rules('nu_contrato', 'Número do contrato', 'trim|required|max_length[15]|min_length[5]');
         $this->form_validation->set_rules('dt_inicio', 'Inicio', 'trim|required|max_length[20]|min_length[8]');
         $this->form_validation->set_rules('dt_fim', 'Fim', 'trim|required|differs[dt_inicio]');
         $this->form_validation->set_rules('id_om', 'Om', 'trim|required');
         $this->form_validation->set_rules('id_ose', 'OSE', 'trim|required');
         $this->form_validation->set_rules('id_auditor', 'Auditor', 'trim|required');
         $this->form_validation->set_rules('ck_status', 'Status', 'trim|required|max_length[1]');

         if ($this->form_validation->run() == FALSE)
         {
           $this->data['ERRO'] = 'A informação passada não foi encontrada';
           $this->parser->parse('errors/html/error_php', $this->data);
           return  FALSE;
         }
         return TRUE;
     }



    ///Função para imprimir PDF
    public function imprimeContratos($id){

      $this->load->model('Guias_model', 'p');
      $p = $this->p->get_guia($id);

        $pdf = new FPDF('p','mm','A4');
        $pdf -> AddPage();
        $pdf -> setDisplayMode ('fullpage');

         if(count($p) > 0){
            $pdf -> setFont ('times','B',10);
            $pdf -> cell(0,10, utf8_decode("INFORMAÇÕES"),1,1);
            $pdf -> write(10,$p[0]["nu_guia"]);
            return  $pdf -> output ('I','detalhes-'.strtolower($p[0]["nu_guia"]).'.pdf');
         }

         $pdf -> setFont ('times','B',20);
         $pdf -> cell(200,30,utf8_decode("Informações"),0,1);

         $pdf -> setFont ('times','B','20');
         $pdf -> write (10,utf8_decode("Nenhuma informação encontrada"));

         return  $pdf -> output ('I','NI.pdf');
     }

}
