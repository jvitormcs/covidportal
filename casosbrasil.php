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

      <article class="container">
<<<<<<< HEAD
        <h1 class="tindex">Casos e Óbitos no Brasil</h1>
=======
        <h1>Casos e Óbitos no Brasil</h1>
>>>>>>> c90733fbe999db8249c469546477650fb041294d

        <p class="p">
          Gráficos são grandes ferramentas de divulgação de informação de dados
          e uma maneira de ilustrar a situação vivida no momento.
        </p>
        <p class="p">
          O Brasil é um país de grande extensão territorial, mas com regiões com
          realidades diferentes em questão de hábitos de vida e em relação ao
          sistema de saúde local. Assim acabam mostrando realidades diferentes
          da pandemia.
        </p>

<<<<<<< HEAD
        <img class="img-fluid" src="images/casosacumulados.png" alt="gráfico com cor verde informando a quantidade de casos de forma geral" />
=======
        <img class="img-fluid" src="images/casosacumulados.png" alt="" />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
        <p class="sm">Fonte: https://covid.saude.gov.br/</p>
        <p class="p">
          Os dados divulgados mostram um perfil generalizado sobre a situação do
          país. Desse modo se faz necessário uma análise mais detalhada por
          regiões.
        </p>
<<<<<<< HEAD
        <h2 class="tindex">Casos Acumulados / Estados</h2>
        <img class="img-fluid" src="images/casosacumulados2.png" alt="gráfico com cor verde informando a quantidade de casos em cada estado do brasil" />
=======
        <h2>Casos Acumulados / Estados</h2>
        <img class="img-fluid" src="images/casosacumulados2.png" alt="" />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
        <p class="sm">Fonte: https://covid.saude.gov.br/</p>
        <p class="p">
          Neste gráfico temos a curva acumulada de casos pela data de
          notificação em cada estado brasileiro.
        </p>
        <p class="p">
          Pode-se observar que o estado de São Paulo se destaca em número de
          casos notificados e difere muito dos demais estados.
        </p>

<<<<<<< HEAD
        <h2 class="tindex">Óbitos no Brasil</h2>
        <img class="img-fluid" src="images/obitosacumulados.png" alt="gráfico com cor verde informando a quantidade de óbitos de forma geral" />
        <p class="sm">Fonte: https://covid.saude.gov.br/</p>

        <h2 class="tindex">Óbitos Acumulados / Estados</h2>
        <img class="img-fluid" src="images/obitosacumulados2.png" alt="gráfico com cor verde informando a quantidade de óbitos em cada estado" />
=======
        <h2>Óbitos no Brasil</h2>
        <img class="img-fluid" src="images/obitosacumulados.png" alt="" />
        <p class="sm">Fonte: https://covid.saude.gov.br/</p>

        <h2>Óbitos Acumulados / Estados</h2>
        <img class="img-fluid" src="images/obitosacumulados2.png" alt="" />
>>>>>>> c90733fbe999db8249c469546477650fb041294d
        <p class="sm">Fonte: https://covid.saude.gov.br/</p>
        <p class="p">
          Nos dados sobre óbitos acumulados por estado fica mais evidente as
          diferenças citadas
        </p>
      </article>

      <section class="container">
        <h2>Casos e Óbitos / Região</h2>
        <p></p>
        <table class="container table table-hover">
          <thead>
            <tr>
<<<<<<< HEAD
              <th>Local</th>
              <th>Casos</th>
              <th>Óbitos</th>
              <th>Atualização</th>
=======
              <th colspan="2"></th>
              <th colspan="2">Casos</th>
              <th colspan="3">Óbitos</th>
              <th scope="col">Atualização</th>
>>>>>>> c90733fbe999db8249c469546477650fb041294d
            </tr>
          </thead>
          <tbody>
            <tr class="table table-active">
<<<<<<< HEAD
              <th>Brasil</th>
              <td>22.105.872</td>
              <td >614.964</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th>Centro-Oeste</th>
              <td >2.383.155</td>
              <td >59.015</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th>Sul</th>
              <td>4.305.063</td>
              <td>96.945</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th>Norte</th>
              <td>1.890.960</td>
              <td>47.180</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th>Nordeste</th>
              <td>4.911871</td>
              <td>119.157</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th>Sudeste</th>
              <td>8.614.823</td>
              <td>292.667</td>
=======
              <th colspan="2">Brasil</th>
              <td colspan="2">22.105.872</td>
              <td colspan="3">614.964</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th colspan="2">Centro-Oeste</th>
              <td colspan="2">2.383.155</td>
              <td colspan="3">59.015</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th colspan="2">Sul</th>
              <td colspan="2">4.305.063</td>
              <td colspan="3">96.945</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th colspan="2">Norte</th>
              <td colspan="2">1.890.960</td>
              <td colspan="3">47.180</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th colspan="2">Nordeste</th>
              <td colspan="2">4.911871</td>
              <td colspan="3">119.157</td>
              <td>01/12/2021</td>
            </tr>
            <tr>
              <th colspan="2">Sudeste</th>
              <td colspan="2">8.614.823</td>
              <td colspan="3">292.667</td>
>>>>>>> c90733fbe999db8249c469546477650fb041294d
              <td>01/12/2021</td>
            </tr>
          </tbody>
        </table>
        <p class="sm">Fonte: https://covid.saude.gov.br/</p>
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
