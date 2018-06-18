<?php
class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
                $this->load->library('parser');
	}

	public function index() {
          $this->data['msg']  = ''; // Inicia a variável MSG
          $this->data['titulo']  = 'Sistema de regulação';
          $this->parser->parse('login/login', $this->data);
    }

    public function logar(){
       
    	$dados = $this->input->post();
    	(!empty($dados['nm_senha']))?$dados['nm_senha'] = md5($dados['nm_senha']):die('Preencha a senha corretamente');//Verifica se a senha foi preenchida
        $this->load->model('Crud_model', 'p');

        $v = $this->p->select_where('nm_login',$dados['nm_login'], 'sc_audit.tb_login'); //Verifico se o login informado existe

         
        if($dados['nm_senha'] !== $v[0]['nm_senha']){
           $this->data['msg']  = 'A senha informada está incorreta.';
           $this->data['titulo']  = 'Sistema de regulação';
	   return $this->parser->parse('login/login', $this->data);
        }
        
        if(count($v) === 0){
					$this->data['msg']  = 'Nenhuma informação encontrada';
					$this->data['titulo']  = 'Sistema de regulação';
					return $this->parser->parse('login/login', $this->data);
        }


        $query = $this->db->query("SELECT * FROM sc_audit.tb_login WHERE nm_login = '".$dados['nm_login']."' ");
        $v = $query->result_array();
        
        $sg = $this->db->query('select sg_om from sc_audit.tb_om where id_om = '.$v[0]['id_om'].' ')->result_array();
        
        

        session_start();

        $_SESSION['usuario']['nip']         = $v[0]['nm_login'];                  // 13129040
        $_SESSION['usuario']['perfil']      = $v[0]['perfil'];                   // E | A | T | D | M
        $_SESSION['usuario']['id']          = $v[0]['id_login'];                // 1291
        
        $_SESSION['usuario']['om']          = $v[0]['id_om'];                  // DSM -- OM vinculada ao perfil do usuário
        $_SESSION['usuario']['sg_om']       = $sg[0]['sg_om'];
        
        
        
        $_SESSION['usuario']['datahora']    = date("Y-m-d H:i:s");            // 2016-09-16 16:04:32
        $_SESSION['usuario']['logado']      = TRUE;

         redirect('/main', 'refresh');

    }

    public function sair(){
				session_start();
				session_destroy();
				redirect('/login', 'refresh');
    }
}
