<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
<<<<<<< HEAD
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
=======
>>>>>>> c90733fbe999db8249c469546477650fb041294d
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/estilo.css" type="text/css" />
    <title>Contato</title>
  </head>
  <body>

    <header>
      <nav>
          <?php
          include 'nav.php';
          ?>
      </nav>
  </header>

    <main>
        <div class="container">
            <div class="row">
                
                <form class="col-10 col-md-6 col-lg-6 offset-1 offset-md-3 offset-lg-3 " >
                    <fieldset>
                        <legend>Formulário de contato</legend>
                        <p>
                            <label class="form-label">Nome: <input name="nome" class="form-control" size="60" /></label>
                        </p>
                        <p>
                            <label class="form-label">E-mail: <input type="email" class="form-control" size="60" /></label>
                        </p>
                        <p>
                            <label for="assunto" class="form-label">Assunto: </label>
                            <select id="assunto" class="form-select" name="assunto">
                                <option value="1" selected>Selecione</option>
                                <option value="2">Sugestões</option>
                                <option value="3">Informações</option>
                                <option value="4">Reclamações</option>
                                <option value="5">Outros</option>
                            </select>
                        </p>
                        
                        <p>Digite a mensagem:</p>
                        <p><textarea class="form-control" rows="10" maxlength="500"></textarea></p>
                        
                        <p><button class=" botao btn btn-primary">Enviar</button></p>
                    </fieldset>
                 </form>

            </div>
            
        </div>
</main>
<<<<<<< HEAD
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
></script>
=======

>>>>>>> c90733fbe999db8249c469546477650fb041294d
      <?php
        include 'footer.php';
      ?>
  </body>
</html>
