<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php pageTitle();?></title>
    <?php headinclude();?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
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
          <div class="navbar-header">
            <i class="fas fa-user text-primary"></i>
            <p id="usuarioLogado" class="navbar-brand text-primary"><?php getUsuarioLogado(); ?></p>
            <button id="btn-sair" onclick="mostrarPergunta(1)" class="btn btn-danger">Sair</button>
          </div>
      </div>
    </nav>
    <div class="container">
      <?php mainContent();?>
    </div>
    <div class="msg">
      <div class="alert pergunta">
        <p>Realmente deseja sair?</p>
        <a class="btn btn-success" href="sair.php">Sim</a>
        <button onclick="mostrarPergunta(0)" class="btn btn-danger">Não</button>
      </div>
    </div>
    <script>
      function init(){
        $('.msg').hide();
        var usuario = $('#usuarioLogado').html();
        console.log(usuario);        
        
        if(usuario == 'Desconectado'){
          $('#btn-sair').attr('disabled', 'disabled');
        }
      }
      function mostrarPergunta(resp){
        if(resp==1){
          $('.msg').show();
        }else{
          $('.msg').hide();
        }
      }
      init();
    </script>
    <?php endinclude();?>
  </body>
</html>
