<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guias extends MY_Controller {

   protected $p; //Variável para verificar o perfil do usuário; ::Melhoria por esta variável na classe pai
   protected $om;

   
   function getOm() {
      return $this->om;
   }

   function setOm($om) {
      $this->om = $om;
   }


   public function __construct() {
      
        parent::__construct();
        
        $this->load->library('Datatables');

        $this->load->database();
        $this->data['url_pagina'] = base_url().''.$this->uri->segment(1);

        session_start();
        $this->p = $_SESSION['usuario']['permissao'] ;
        if($this->p == 2  ){
           redirect('login/sair', 'refresh');
        }
    }

    //Função default
    public function index() {
        $this->data['pagina'] = 'guias';
        $this->data['controller'] = 'Guias';
        $this->data['conteudo'] = $this->parser->parse('telas/guias/filtro', $this->data, true);
        $this->parser->parse('layout/layout', $this->data);
    }

    
    //Carregar a tabela
        public function tabela() {
        
        $this->data['id_om']  = $this->input->post('om');
        $this->data['status'] = $this->input->post('st');
        $this->data['nip']    = $this->input->post('np');
           
        
        
        //Verificar se o NIP informado é válido
        (is_numeric ( $this->data['nip'] ))?NULL:die('<div class="col-md-12 col-sm-12 col-xs-12" id="a" >    
                                                            <div class="alert alert-warning">
                                                               <strong>Atenção!</strong> Informe um NIP válido.
                                                             </div>
                                                      </div>');
        //Final da verificação do NIP
        
        
        
        
        $this->table->set_heading(array('OM','Nome','NIP do Titular','Numero da Guia','Contrato','Status','Tipo da Guia','C.CID','CID','Imprimir'));
        //Setar o número de colunas
        $this->data['columns']   =  'null,null,null,null,null,null,null,null,null,null';
      
        //Setar o coteúdo que deverá ser apresentado
        $this->data['pagina'] = 'guias';
        $this->data['controller'] = 'Guias';
        $this->data['table'] = $this->table->generate();
        echo  $this->parser->parse('telas/guias/tabelas', $this->data, true);
    }
    
    //Função para gerar datatables
    public function dtable(){
      $om =  $this->input->post('id_om'); 
      $st =  $this->input->post('status');
      $np =  $this->input->post('nip');
      $this->guias($om, $st, $np);
    }
    
    protected function guias($om, $st, $np){
      //Cria a datatable de acordo com o perfil passado
          $this->datatables
        ->select('    sc_audit.tb_om.sg_om,
                      sc_audit.tb_pessoa.nm_pessoa,
                      sc_audit.tb_pessoa.nip_tit,
                      sc_audit.tb_guia.nu_guia,
                      sc_audit.tb_contrato.nu_contrato,
                      sc_audit.tb_status.nm_status,
                      sc_audit.tb_tipo_guia.ds_tipo_guia,   
                      sc_audit.tb_cid.cd_cid,
                      sc_audit.tb_cid.ds_cid,
                      sc_audit.tb_guia.id_guia')
             ->from('sc_audit.tb_guia')
             ->join('sc_audit.tb_usuario_ssm', 'sc_audit.tb_guia.id_usuario_ssm = sc_audit.tb_usuario_ssm.id_usuario_ssm')
             ->join('sc_audit.tb_pessoa', 'sc_audit.tb_pessoa.id_pessoa =  sc_audit.tb_usuario_ssm.id_pessoa')
             ->join('sc_audit.tb_om', 'sc_audit.tb_guia.id_om_resp = sc_audit.tb_om.id_om')
             ->join('sc_audit.tb_cid', 'sc_audit.tb_cid.id_cid = sc_audit.tb_guia.id_cid')
             ->join('sc_audit.tb_contrato', 'sc_audit.tb_contrato.id_contrato = sc_audit.tb_guia.id_contrato')
             ->join('sc_audit.tb_status', 'sc_audit.tb_status.id_status = sc_audit.tb_guia.id_status')
             ->join('sc_audit.tb_tipo_guia', 'sc_audit.tb_tipo_guia.id_tipo_guia = sc_audit.tb_guia.id_tipo_guia')
             ->edit_column('id_guia', '<a href="http://localhost/dev/ws_regulacao/guia-imprimir/pdf/$1" target="_blank" class="print" rel="print"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>', 'id_guia');
    
             //Filtro 
              if($om !== "0"){
                 $this->datatables->where('sc_audit.tb_guia.id_om_resp', $om); 
              }
              
              if($st !== "0"){
                 $this->datatables->where('sc_audit.tb_guia.id_status', $st); 
              }
              
              if($np !== "0"){
                 $o = $this->db->query(" select id_usuario_ssm from sc_audit.tb_usuario_ssm where id_pessoa in (select id_pessoa from sc_audit.tb_pessoa  where nip_tit = '$np' ) ")->result_object();
                 $array = [];
                 for($i = 0; $i < count($o); $i++){
                    array_push($array, $o[$i]->id_usuario_ssm);
                 }
                 $r = implode("' ,'", $array);
                 $np = "'".$r."'";
                 $this->datatables->where('sc_audit.tb_guia.id_usuario_ssm in ('.$np.') ');
              }
              
          echo $this->datatables->generate();
    }

    //Funções para apresentação de formulário
    public function cadastraGuias() {

        $tituloForm             =   'Formulário de cadastro de Usuarios';
        $acao                   =   'Cadastrar';
        $link                   =   base_url().''.$this->uri->segment(1).'/'.$acao;

        //Retornar lista de OMs
        $this->data['om'] = parent::retornaOm(); // Busca todas
        $this->data['guia_internacao']       =   $this->parser->parse('telas/guias/guias_internacao', $this->data, true); //Chama o html das guias de internação
        $this->data['guia_ambulatorial']     =   $this->parser->parse('telas/guias/guias_ambulatorial', $this->data, true); //Chama o HTML das guias ambulatoriais
        $this->data['form']     =   $this->parser->parse('telas/guias/main', $this->data, true);//parent::gerarForm($this->ArrayForm(), $tituloForm, $acao, $link); //CHAMADA DA FUNÇÃO PARA GERAR FORMULÁRIOS
        $this->data['acao']     =   $acao;
        $this->data['link']     =   $link;
        $this->data['conteudo'] =   $this->parser->parse('telas/formulario', $this->data);
    }

    //Function para retornar os usuários
    private  function retornaGuias($id){
         $query = $this->db->query('SELECT "sc_audit"."tb_guia"."id_guia",
                                                "sc_audit"."tb_om"."sg_om",
                                                "sc_audit"."tb_guia"."nu_guia",
                                                "sc_audit"."tb_cid"."cd_cid",
                                                "sc_audit"."tb_cid"."ds_cid",
                                                "sc_audit"."tb_contrato"."nu_contrato",
                                                "sc_audit"."tb_pessoa"."nm_pessoa",
                                                "sc_audit"."tb_status"."nm_status"
                                         FROM   "sc_audit"."tb_guia"
                                         JOIN   "sc_audit"."tb_usuario_ssm"
                                         ON     "sc_audit"."tb_guia"."id_usuario_ssm" = "sc_audit"."tb_usuario_ssm"."id_usuario_ssm"
                                         JOIN   "sc_audit"."tb_pessoa"
                                         ON     "sc_audit"."tb_pessoa"."id_pessoa" =  "sc_audit"."tb_usuario_ssm"."id_pessoa"
                                         JOIN   "sc_audit"."tb_om"
                                         ON     "sc_audit"."tb_guia"."id_om_resp" = "sc_audit"."tb_om"."id_om"
                                         JOIN   "sc_audit"."tb_cid"
                                         ON     "sc_audit"."tb_cid"."id_cid"  = "sc_audit"."tb_guia"."id_cid"
                                         JOIN   "sc_audit"."tb_contrato"
                                         ON     "sc_audit"."tb_contrato"."id_contrato" = "sc_audit"."tb_guia"."id_contrato"
                                         JOIN   "sc_audit"."tb_status"
                                         ON     "sc_audit"."tb_status"."id_status" = "sc_audit"."tb_guia"."id_status"
                                         ORDER BY "id_guia", "sg_om" ASC
                                         WHERE "id_guia" = '.$id.'
                                         LIMIT 10
                                    ');
        return $query->result_array();
    }
    
    public function task($id){
       
        $tituloForm             =   'Formulário de cadastro de Usuarios';
        $acao                   =   'Cadastrar';
        $link                   =   base_url().''.$this->uri->segment(1).'/'.$acao;

        //Retornar lista de OMs
        $this->data['om']                    =   parent::retornaOm(); // Busca todas
        $this->data['form']                  =   $this->parser->parse('telas/guias/guias_internacao', $this->data, true);
        $this->data['acao']                  =   $acao;
        $this->data['link']                  =   $link;
        $this->data['conteudo']              =   $this->parser->parse('telas/formulario', $this->data);
    }
    
    public function alteraGuias($id) {
       //Utilizar o id
       //FAZER MELHORIAS PARA GERAR OS FORMULÁRIOS AUTOMATICAMENTE
        $this->load->model('Crud_Model', 'p');

        $p = $this->retornaUsuarios($id);

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


    public function deletaGuias($id) {
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
       //excluir usuário da tabela login pelo id_pessoa
       $dados = $this->input->post();
       $this->load->model('Crud_model', 'p');
       $query = $this->p->delete('id_login',$dados['id_login'],'sc_audit.tb_login');
       $this->data['msg'] = 'Dados deletados com sucesso';
       $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
    }

     public function alterar(){
        $dados = $this->input->post();
        $this->load->model('Crud_model', 'p');
        $query = $this->p->update('id_login',$dados['id_login'],$dados,'sc_audit.tb_login');
        $this->data['msg'] = 'Dados alterados com sucesso';
        $this->data['conteudo'] = $this->parser->parse('telas/msg', $this->data);
        //$this->parser->parse('layout/layout', $this->data);
    }

     public function cadastrar(){
        $dados = $this->input->post();
        //$this->load->model('Crud_model', 'p');

        var_dump($dados);
        
     }
     
  
}
