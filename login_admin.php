<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>LAPS - Login Administrador</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.css" rel="stylesheet">
   <link href="css/elegant-icons-style.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet">
   <link href="CSS/style-responsive.css" rel="stylesheet" />
</head>
<body class="login-img3-body">
   <div class="container">
      <form class="login-form" action="modelo/login_admin.php" method="post">
         <div class="login-wrap">
            <p class="login-img">LAPS ADMIN<i class="icon_lock_alt"></i></p>
            <div class="input-group">
               <span class="input-group-addon"><i class="icon_profile"></i></span>
               <input type="text" class="form-control" name="login" id="login" placeholder="CPF" minlength="11" maxlength="11" required autofocus>
            </div>
            <div class="input-group">
               <span class="input-group-addon"><i class="icon_key_alt"></i></span>
               <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <label class="checkbox">
               <input type="checkbox" value="remember-me"> Relembrar
               <span class="pull-right"> <a href="#"> Esqueceu?</a></span>
            </label>
            <input class="btn btn-primary btn-lg btn-block"  name="entrar" id="entrar" type="submit" value = 'Login' >
            <br>
            <input class="btn btn-info btn-lg btn-block" type="button" onclick="window.open('index.php#cadastro','_parent');" value="Cadastre-se">
         </div>
      </form>
   </div>
</body>
</html>