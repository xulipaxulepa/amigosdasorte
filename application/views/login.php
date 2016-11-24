
<?php
if($this->session->userdata('email') != '' || $this->session->userdata('email') != NULL):
    redirect("inicio/");
endif;
$erroAlert = '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta htpp-equiv="Contente-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema de Acesso - Login</title>

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script src="<?php echo base_url('lib/jquery/jquery-2.1.4.min.js') ?>"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('lib/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('lib/bootstrap/css/signin.css') ?>">
    <script src="<?php echo base_url('lib/bootstrap/js/bootstrap.min.js') ?>"></script>
    <style type="text/css">
        #banner{
            background-color: #d9534f;
            color: white;
            height: 50px;
            border-radius: 5px;
            font-weight: bold;
            padding-top: 0px;
            margin: 0px;

        }
        img{
            width: 32px;
            height: 32px;
        }
    </style>
</head>

<body>
<body>

<div class="container-fluid">

    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
        <?php
        if ($this->session->flashdata('usuarioinvalido')):
            echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_DANGER);
            echo IconsUtil::getIcone(IconsUtil::ICON_REMOVE)  . ' ' . $this->session->flashdata('usuarioinvalido');
            echo ModMensagemUtil::getCloseAlertMensagem();
            //echo ModMensagemUtil::getAlertMensagemClose(ModMensagemUtil::ALERT_WARNING);
            //echo IconsUtil::getIcone(IconsUtil::ICON_ALERT)  . ' Verifique se o tipo de acesso correponde ao seu perfil de usuário.';
            //echo ModMensagemUtil::getCloseAlertMensagem();
            //$erroAlert = 'form-group has-warning has-feedback';
        endif;
        ?>
        <div class="panel panel-success" >
            <div class="panel-heading">
                <div class="panel-title">Sistema Solidário| Login</div>

            </div>

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="<?php echo base_url('usuario/login') ?>">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <?php echo form_input(array('id' => 'inputEmail', 'type' => 'email', 'name' => 'email', 'class' => 'form-control', 'placeholder' => 'Usuário', 'required'=>'', 'autofocus'=>''), set_value('email'));?>
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
                    </div>

                    <div class="input-group">
                        <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                            </label>
                        </div>
                    </div>


                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls text-right">
                            <button type="submit" id="btn-login" href="#" class="btn btn-success btn-block">Login  </button>
                            <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
