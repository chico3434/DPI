<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php pageTitle();?></title>
    <?php headinclude();?>
  </head>
  <body>
    <nav class="navbar navbar-green navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="home.php">Home</a> 
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="cadastro.php">Cadastro</a> 
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="entrar.php">Entrar</a> 
        </div>
        <div class="navbar-header">
          <a class="navbar-brand" href="lista.php">Lista</a> 
        </div>
      </div>
    </nav>
    <div class="container">
      <?php mainContent();?>
    </div>
    <?php endinclude();?>
  </body>
</html>
