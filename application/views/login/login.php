<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{titulo}</title>

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

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>/theme/gentelella/_gentelella/build/css/custom.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/theme/gentelella/_css/extras.css" rel="stylesheet">

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="post" action="<?= base_url(); ?>login/logar">
              <h3>Acessar Sistema</h3>
              <div>
                  <input type="text" name="nm_login" class="form-control" placeholder="Login" required="" />
              </div>
              <div>
                <input type="password" name="nm_senha" class="form-control" placeholder="Senha" required="" />
              </div>
              <div>
                <button class="btn btn-default submit">Logar</button>

              </div>

              <div class="clearfix"></div>
                {msg}

            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
