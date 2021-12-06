<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal covid - 19</title>
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!--fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- meu css -->
    <link rel="stylesheet" href="css/estilo.css" />
  </head>

  <body>
    <main>
      <header>
        <?php
        include 'nav.php';
        ?>
      </header>

<<<<<<< HEAD
      <article class="offset-1 offset-sm-0 offset-md-1 offset-lg-0">
        <h1 class="tindex">Casos</h1>
=======
      <article class="container">
        <h1>Casos</h1>
>>>>>>> c90733fbe999db8249c469546477650fb041294d

      <div class="col-12 row g-4 justify-content-around">
      

<<<<<<< HEAD
          <section class="casos col-sm-12 col-md-7 col-lg-4 ">
            <div class="card" style="width: 20rem;">
                <img src="images/covidbrasil_275.png" class="card-img-top" alt="ao fundo da imagem a bandeira do brasil e a frente uma imagem representativa do vírus.">
=======
          <section class="casos col-sm-12 col-md-4 col-lg-4 ">
            <div class="card" style="width: 20rem;">
                <img src="images/covidbrasil_275.png" class="card-img-top" alt="...">
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                <div class="card-body">
                    <h5 class="card-header">Casos no Brasil</h5>
                    <p class="card-text">Informações sobre casos e óbitos no Brasil.</p>
                    <p>Total de casos:</p>
                    <p>22.105.872</p>
                    <p>Total de óbitos:</p>
                    <p>614.964</p>
                    <a href="casosbrasil.php" class="btn btn-dark botao">Saiba mais</a>
                </div>
            </div>
          </section>

<<<<<<< HEAD
          <section class="casos col-sm-12 col-md-7 col-lg-4 ">
            <div class="card" style="width: 20rem;">
                <img src="images/covidmundo275.png" class="card-img-top" alt="mapa mundi em azul com pontos vermelhos espalhados">
=======
          <section class="casos col-sm-12 col-md-4 col-lg-4 ">
            <div class="card" style="width: 20rem;">
                <img src="images/covidmundo275.png" class="card-img-top" alt="...">
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                <div class="card-body">
                    <h5 class="card-header">Casos no Mundo</h5>
                    <p class="card-text">Informações sobre casos e óbitos no Mundo.</p>
                    <p>Total de casos:</p>
                    <p>263.563.622 </p>
                    <p>Total de óbitos:</p>
                    <p>263.563.622 </p>
                    <a href="casosmundo.php" class="btn btn-dark botao">Saiba mais</a>
                </div>
            </div>
          </section>
        
      </div>

    </article>

     <?php
        include 'footer.php';
        ?>
    </main>
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
