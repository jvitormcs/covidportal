<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title> Isolamento </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;700;900&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/estilo.css" type="text/css" />

</head>

<body>
    <header>
        <?php
        include 'nav.php';
        ?>
    </header>

    <div class="row text-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bread">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="prevencao.php">Prevenção</a></li>
                <li class="breadcrumb-item"><a href="mascara.php">Máscara</a></li>
                <li class="breadcrumb-item"><a href="higienizacao.php">Higienização</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Isolamento</li>
                <li class="breadcrumb-item"><a href="transmissao.php">Transmissão</a></li>
            </ol>
        </nav>
    </div>

    <h1 class="text-center">Isolamento</h1>
    <article class="container">


        <div class=" row align-items">
            <div class="col-sm-12 col-md-3 col-lg-3">

                <section class="card border-light mb-3 " style="max-width: 18rem;">
                    <div class="card-header">Distanciamento social</div>
                    <div class="card-body">
                        <h5 class="card-title">Pelo menos 1m</h5>
                        <p class="card-text">Recomenda-se a manutenção de uma distância física mínima de pelo menos 1 metro de outras pessoas, especialmente daquelas com sintomas respiratórios e um grande número de pessoas (aglomerações) tanto ao ar livre quanto em ambientes fechados.</p>
                    </div>
                </section>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <section class="card border-light mb-3 " style="max-width: 18rem;">
                    <div class="card-header">Distanciamento social</div>
                    <div class="card-body">
                        <h5 class="card-title">Limitar interação</h5>
                        <p class="card-text">Limitar o contato próximo entre pessoas infectadas e outras pessoas é importante para reduzir as chances de transmissão do SARS-CoV-2. Principalmente durante a pandemia, devem ser adotados procedimentos que permitam reduzir a interação entre as pessoas com objetivo de diminuir a velocidade de transmissão do vírus.</p>
                    </div>
                </section>
            </div>

            <div class=" col-sm-12 col-md-3 col-lg-3">
                <section class="card border-light mb-3 col" style="max-width: 18rem;">
                    <div class="card-header">Distanciamento social</div>
                    <div class="card-body">
                        <h5 class="card-title">Boa ventilação</h5>
                        <p class="card-text">Garantir uma boa ventilação em ambientes internos também é uma medida importante para prevenir a transmissão em ambientes coletivos. Segundo o CDC19 e a OMS20, aglomerações representam um risco alto para disseminação do SARSCoV-2. Para isso, considera-se o aglomerado de várias pessoas num mesmo local, onde se torna difícil para as pessoas permanecerem a pelo menos um metro de distância entre elas.</p>
                    </div>
                </section>
            </div>

            <div class="col-sm-12 col-md-3 col-lg-3">
                <section class="card border-light mb-3 col" style="max-width: 18rem;">
                    <div class="card-header">Distanciamento social</div>
                    <div class="card-body">
                        <h5 class="card-title">Menos tempo de interação</h5>
                        <p class="card-text">Quanto mais pessoas interagem durante este tipo de evento e quanto mais tempo essa interação durar, maior o risco potencial de infecção e disseminação do vírus SARS-CoV-2. Lugares ou ambientes que favorecem a aglomeração de pessoas devem ser evitados durante a pandemia.</p>
                    </div>
           
        
        </section>
    </div>
</div>
    </article>
    
    <p class="fonte"> Fonte:https://www.gov.br/saude/pt-br/coronavirus/como-se-proteger </p>


    <?php
    include 'footer.php';
    ?>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
></script>

</body>

</html>
