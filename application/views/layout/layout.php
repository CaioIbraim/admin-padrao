<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{title}</title>

    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- SideBar -->
    <link href="<?= base_url(); ?>/theme/gentelella/_jquery/bootsidemenu/BootSideMenu.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/theme/gentelella/_css/font-awesome-animation.min.css" rel="stylesheet">

    <link href="<?= base_url(); ?>theme/gentelella/_jquery/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="<?= base_url(); ?>theme/gentelella/_jquery/jquery-ui/jquery-ui.structure.css" rel="stylesheet">
    <link href="<?= base_url(); ?>theme/gentelella/_jquery/jquery-ui/jquery-ui.theme.css" rel="stylesheet">

    <link href="<?= base_url(); ?>/theme/gentelella/_css/bootstrap-multiselect.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/theme/gentelella/_css/bootstrap-select/bootstrap-select.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>/theme/gentelella/_gentelella/build/css/custom.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/theme/gentelella/_css/extras.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<style>
.input-group-btn {
    padding: 19px 12px ! imporatant;
}

.table, thead, tr, td, th{
    font-size: 10px ! important;
    border: solid #666  thin ! important;
    text-align: center;
}

.over{
    overflow: auto ! important;
    scrollbar-base-color:#fff ! important;
}

.ui-autocomplete-loading {
  background: black right center no-repeat;
}

</style>


  </head>

  <body class="nav-md " id="myBody">
    <!-- jQuery -->
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>theme/gentelella/_jquery/jquery-ui/jquery-ui.js"></script>


    <!-- Bootstrap -->
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SideBar -->
    <script src="<?= base_url(); ?>/theme/gentelella/_jquery/bootsidemenu/BootSideMenu.js"></script>
    <script src="<?= base_url(); ?>/theme/gentelella/_jquery/jquery.fullscreen.js"></script>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Scripts para utilização no site -->
    <script src="<?= base_url(); ?>/theme/gentelella/_js/utilidades.js"></script>
	<!-- ================================================== -->

    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">

              <div class="logo_menu_encolhido">
                <img src="<?= base_url(); ?>theme/gentelella/_images/brasao_dsm.png" alt="SIGSAUDE" width="45" data-toggle="tooltip" data-placement="right" class="tooltip-azul" title="Sistema: {APP_NOME}">
              </div>
              <div class="nome_sistema">
                <P>{APP_NOME}</P>
                <small>{NOME_COMPL}</small>
              </div>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">


                    {MENU}

              </div>

            </div>
            <!-- /sidebar menu -->

            <div class="sigsaude_footer_sidebar">
                            <span href="" class="site_title"><label id="mini-logo" style="display: none;"><img src="<?= base_url(); ?>theme/gentelella/_images/favicon.png" alt="SIGSAUDE" width="45" height="45"></label><span><img src="<?= base_url(); ?>theme/gentelella/_images/logotipo.png" alt="SIGSAUDE" id="logo_sigsaude" width="200" height="45"></span></span>
            </div>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">

              <a data-toggle="tooltip" data-placement="top" title="Principal" href="main">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Subir" id="btnSubir">
                <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Tela Cheia" id="btnFullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="<?= base_url(); ?>login/sair">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    <i class=" fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  	<li class="dropdown-header" style="margin-top: 10px;"><strong>Login: {LOGIN}</strong></li>
                  	<li class="dropdown-header"><strong>Perfil: {PERFIL}</strong></li>
                  	<li class="dropdown-header"><strong>OM: {OM}</strong></li>
                  	<li role="separator" class="divider"></li>
                    <li><a href="<?= base_url(); ?>login/sair"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" id="divPrincipal">

	        <div class="content" id="divAjaxPrincipal">



              <div class="row">
                 <div class="col-md-12" id="conteudo">
                   {conteudo}
                 </div>
              </div>
 	     </div>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
             {APP_VERSAO}
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    	 <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal"></button>

	        </div>
	        <div class="modal-body" >
	          <h2 id="txt-modal"></h2>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal"> &times;</button>
	        </div>
	      </div>

	    </div>
	  </div>


         <!--MANOBRAR COM OS MODAIS A PARTIR  DAQUI-->

<!-- Modal informativo sobre a ação-->
<div class="modal fade" id="ModalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" id="ok"  class="btn btn-primary" data-dismiss="modal">Sim</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal de confirmação da ação -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ação</h5>

      </div>
        <div class="modal-msg">

      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
          <a href="{url_pagina}" class="btn btn-primary" >Votar</a>
      </div>
    </div>
  </div>
</div>


   <script>
   $('document').ready(function(){

        var url = '<?=base_url();?>/pessoas/restPessoa'; //variável que busca a pessoa pra gerar a guia



         var controller     = ""; //Pego o nome do controller
         var controllerAcao = ""; //Pego a ação


      //Código para manobrar com as ações das tabelas
      $('body').delegate('.acao','click',function(){
             var acao = $(this).attr('rel');
             var id = $(this).attr('title');
             var cont = '{controller}';

             if(cont === 'Guias' && acao === 'cad'){//Verifico se o controller carregado é o de Guias e se a ação disparada é cadastrar
               $.post("{pagina}/cadastra{controller}", function(data, status){
                  $('#conteudo').html(data);//Careego o conteúdo diretamente na página
               }); return;
             }

              //Se não carrego o conteúdo via modal para melhor usabilidade

             switch(acao){
                  case 'cad':
                     controller      = 'cadastra{controller}'; //Pego o nome do controller
                     controllerAcao  = 'cadastrar'; //Pego a ação
                  break;
                  case 'alt':
                     controller      = 'altera{controller}/'+id; //Pego o nome do controller
                     controllerAcao  = 'alterar'; //Pego a ação
                  break;
                  case 'del':
                     controller      = 'deleta{controller}/'+id; //Pego o nome do controller
                     controllerAcao  = 'deletar'; //Pego a ação
                  break;
                  case 'task':
                      $.post("{pagina}/task/"+id+"", function(data, status){
                        $('#conteudo').html(data);//Carrego o conteúdo diretamente na página
                     }); return;
                  break;
                  case 'res':
                       controller    = 'reseta{controller}/'+id; //Pego o nome do controller
                       controllerAcao  = 'resetar'; //Pego a ação
                  break;
                  default :
                     controller      = 'cadastra{controller}'; //Pego o nome do controller
                     controllerAcao  = 'cadastrar'; //Pego a ação
             }
             //Abre modal de MSG
             //$('#ModalConfirm .modal-body').html('<h3>Deseja realmente '+controllerAcao+' ?</h3>');
             //$('#ModalConfirm').modal('show');

               $('#exampleModal #exampleModalLabel').html("Formulário para "+ controllerAcao);
                  $.post("{pagina}/"+controller+"", function(data, status){
                     $('#exampleModal .modal-body').html(data);
                     $('#exampleModal').modal('show');
                  });
      });

      /*
      $('#ok').click(function(){//Executa a ação atribuida ao formulário seja de alterar, deletar ou cadastrar
         $('#exampleModal #exampleModalLabel').html("Formulário para "+ controllerAcao);
            $.post("{pagina}/"+controller+"", function(data, status){
               $('#exampleModal .modal-body').html(data);
               $('#exampleModal').modal('show');
            });
      });
      */

      $('body').delegate('#btnAction','click',function(){//Dispara um evento ao clicar no botão de action do formulário principal
         var dados = $(this).closest('form').serialize();
         $.post("{pagina}/"+controllerAcao, dados, function(data, status){
             $('#exampleModal .modal-msg').html('');
             $('#exampleModal .modal-msg').append(data).fadeIn();
             //setInterval(function(){ $('#exampleModal .modal-msg').html('');},5000);
         });
      });

         $("body").delegate("#inputP",'keyup',function(){//Busca a pessoa ou o usuário para gerar a guia
            var nome = $(this).closest('div').find('input').val();

            if(nome !== ""){
               $.post(url, {nome:nome.trim()},function(data, status){

                  var d = JSON.parse(data);


                  if(d.length === 0){
                     $("#nm_pessoa").val('');
                     $("#nm_login").val('');
                     $("#id_pessoa").val('');
                     return;
                  }

                  $("#nm_pessoa").val(d[0].nm_pessoa);
                  $("#nm_login").val(d[0].nip_tit);
                  $("#id_pessoa").val(d[0].id_pessoa);



               });
               return;
            }
            $("#nm_pessoa").val('');
            $("#nm_login").val('');
            $("#id_pessoa").val('');
      });


   });
   </script>





    <script src="<?= base_url(); ?>/theme/gentelella/_js/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?= base_url(); ?>/theme/gentelella/_js/bootstrap-multiselect.js"></script>

    <!-- FastClick -->
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/nprogress/nprogress.js"></script>
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

    <!-- Chart.js -->
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url(); ?>/theme/gentelella/_gentelella/build/js/custom.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url(); ?>/theme/gentelella/_js/jquery.base64.js"></script>
    <script src="<?= base_url(); ?>/theme/gentelella/_js/jquery.btechco.excelexport.js"></script>

  </body>
</html>
