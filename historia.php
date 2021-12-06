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
    <!-- fontes -->
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
        <h1 class="tindex">Histórico da pandemia de COVID-19</h1>
        <p class="p">
          Em 31 de dezembro de 2019, a Organização Mundial da Saúde (OMS) foi
          alertada sobre vários casos de pneumonia na cidade de Wuhan, província
          de Hubei, na República Popular da China. Tratava-se de uma nova cepa
          (tipo) de coronavírus que não havia sido identificada antes em seres
          humanos.
        </p>
        <p class="p">
          Uma semana depois, em 7 de janeiro de 2020, as autoridades chinesas
          confirmaram que haviam identificado um novo tipo de coronavírus. Os
          coronavírus estão por toda parte. Eles são a segunda principal causa
          de resfriado comum (após rinovírus) e, até as últimas décadas,
          raramente causavam doenças mais graves em humanos do que o resfriado
          comum.
        </p>
        <p class="p">
          Ao todo, sete coronavírus humanos (HCoVs) já foram identificados sendo
          o mais recente, o novo coronavírus, que recebeu o nome de SARS-CoV-2.
          Esse novo coronavírus é responsável por causar a doença COVID-19.
        </p>

        <h2 class="tindex">Emergência de Saúde Pública de Importância Internacional</h2>
        <p class="p">
          Em 30 de janeiro de 2020, a OMS declarou que o surto do novo
          coronavírus constitui uma Emergência de Saúde Pública de Importância
          Internacional (ESPII) – o mais alto nível de alerta da Organização,
          conforme previsto no Regulamento Sanitário Internacional. Essa decisão
          buscou aprimorar a coordenação, a cooperação e a solidariedade global
          para interromper a propagação do vírus.
        </p>
        <p class="p">
          É a sexta vez na história que uma Emergência de Saúde Pública de
          Importância Internacional é declarada, sendo de responsabilidade do
          diretor-geral da OMS essa decisão após consultar um comitê de
          especialistas.
        </p>
        <p class="p">
          Esse comitê dá um parecer ao diretor-geral sobre as medidas
          recomendadas a serem promulgadas em caráter emergencial. Essas
          Recomendações Temporárias incluem medidas de saúde a serem
          implementadas para prevenir ou reduzir a propagação mundial de doenças
          e evitar interferências desnecessárias no comércio e tráfego
          internacional.
        </p>
        <p class="p">
          Em 11 de março de 2020, a COVID-19 foi caracterizada pela OMS como uma
          pandemia.
        </p>
        <p class="p">
          O termo “pandemia” se refere à distribuição geográfica de uma doença e
          não à sua gravidade. A designação reconhece que, no momento, existem
          surtos de COVID-19 em vários países e regiões do mundo.
        </p>

        <h4 class="tindex">Referências</h4>
        <p class="p">Ultimo acesso em: 01/12/2021.</p>
        <p class="p">
          <a
            href="https://www.paho.org/pt/covid19/historico-da-pandemia-covid-19"
            >https://www.paho.org/pt/covid19/historico-da-pandemia-covid-19</a
          >
        </p>
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
