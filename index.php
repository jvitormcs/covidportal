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
      <article class="container">
        <h1 class="tindex text-center">Seções</h1>
        <div class="col-12">
          <div class="col-12">
            <div class="row g-4">
              <section class="mg col-12 col-md-4">
                <img src="images/cas.png" alt="painel de casos de covid" class="img-fluid" />
=======
      <article class="indexa">
        <div class="container col-12">
          <h2 class="tindex">Portal Covid-19 Previna-se!</h2>
          <div class="col-12">
            <div class="row g-4">
              <section class="mg col-12 col-md-4">
                <img
                  src="images/casos255.png"
                  alt="#"
                  class="img-fluid"
                  width="255px"
                  height="255px"
                />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                <h3>Casos</h3>
                <p><a href="casos.php"class ="btn btn-dark botao">Saiba mais</a></p>
              </section>
              <section class="mg col-12 col-md-4">
<<<<<<< HEAD
                <img src="images/va.png" alt="desenho de variante de covid" class="img-fluid" />
=======
                <img
                  src="images/variantes255.png"
                  alt="#"
                  class="img-fluid"
                  width="255px"
                  height="255px"
                />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                <h3>Variantes</h3>
                <p><a href="varianteAlfa.php"class ="btn btn-dark botao">Saiba mais</a></p>
              </section>
              <section class="mg col-12 col-md-4">
<<<<<<< HEAD
                <img src="images/vac.png" alt="vacina de covid" class="img-fluid" />
                <h3>Vacinas</h3>
                <p><a href="vacinacao.php"class ="btn btn-dark botao">Saiba mais</a></p>
              </section>
              <section class="mg col-12 col-md-4">
                <img src="images/prev.png" alt="pessoa lavando as mãos" class="img-fluid" />
=======
                <img
                  src="images/vacinacao255.png"
                  alt="#"
                  class="img-fluid"
                  width="255px"
                  height="255px"
                />
                <h3>Vacinação</h3>
                <p>Saiba mais</p>
              </section>
              <section class="mg col-12 col-md-4">
                <img
                  src="images/unknown.png"
                  alt="#"
                  class="img-fluid"
                  width="255px"
                  height="255px"
                />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                <h3>Prevenção</h3>
                <p><a href="prevencao.php"class ="btn btn-dark botao">Saiba mais</a></p>
              </section>
              <section class="mg col-12 col-md-4">
<<<<<<< HEAD
                <img src="images/si.png" alt="pessoa medindo a febre de mulher" class="img-fluid" />
=======
                <img
                  src="images/unknown.png"
                  alt="#"
                  class="img-fluid"
                  width="255px"
                  height="255px"
                />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                <h3>Sintomas</h3>
                <p><a href="sintomas.php"class ="btn btn-dark botao">Saiba mais</a></p>
              </section>
              <section class="mg col-12 col-md-4">
                <img src="images/nd.png" alt="casal passeando na rua de máscara" class="img-fluid" />
                <h3>Notícias</h3>
                <p><a href="noticias.php"class ="btn btn-dark botao">Saiba mais</a></p>
              </section>
            </div>
          </div>
        </div>
      </article>

      <section class="ban">
        <div class="container">
          <div class="col-12 row">
            <div class="imgvirus col-12 col-md-5" id="info-banner">
              <img
                src="images/ca.png"
                alt="imagem de menino sendo vacinado"
                class="img-fluid"
              />
            </div>
            <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
              <div class="row">
                <section class="col-12">
                  <h2>Óbitos  e imunizados</h2>
                  <p>
                    Aqui temos uma prévia dos números de obitos e imunizados. 
                  </p>
                </section>
                <div class="col-12 row" id="info-numbers">
                  <section class="col-5">
                    <h3>263.563.622</h3>
                    <p>Óbitos</p>
                  </section>
                  <section class="col-5">
                    <h3>7.864.123.038</h3>
                    <p>Imunizados</p>
                  </section>
                </div>
                <div class="col-12">
<<<<<<< HEAD
                  <a class="btn btn-dark" href="casos.php">Saiba Mais</a>
=======
                  <a class="btn btn-dark" href="casos.php" >Saber Mais</a>
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

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
