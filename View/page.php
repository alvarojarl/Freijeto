<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <style media="screen">
      .background{
        background-color: green;
      }
      .caixaInput{
        margin-left: 100%;
        margin-right: 100%
      }
      .adjust{
        align-content: center;
        background-color: red;
        margin-left: 60vh;
        margin-right: 60vh;
      }
      .jumbotron{
        text-align: center;
        background-color: rgba(187, 55, 50, 0.5);
      }
    </style>
    <title>Teste</title>
  </head>
  <body>
    <div class="jumbotron">
      <h1>Maximazed</h1>
    </div>
    <div class="adjust">
      <form class="" action="../Control/control.php" method="post">
          <div class="background">
            <input type="text" name="nameFarm" value="" placeholder="Nome">
          </div>
          <div class="">
            <input type="text" name="socialState" value="" placeholder="Razão Social">
          </div>
          <div class="">
            <input type="text" name="city" value="" placeholder="Cidade">
          </div>
          <div class="">
            <input type="text" name="CNPJ" value="" placeholder="CNPJ">
          </div>
          <div class="">
            <input type="text" name="CEP" value="" placeholder="CEP">
          </div>
          <div class="">
            <input type="text" name="telephone" value="" placeholder="Telefone">
          </div>
          <div class="">
            <input type="text" name="email" value="" placeholder="E-mail">
          </div>
          <div class="">
            <input type="submit" name="" value="Submit">
          </div>
        </form>
      </div>
    <footer class="page-footer font-small blue">
    </footer>
  </body>
</html>
