<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title> Uso de máscara </title>
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
                <li class="breadcrumb-item active" aria-current="page">Máscara</li>
                <li class="breadcrumb-item"><a href="higienizacao.php">Higienização</a></li>
                <li class="breadcrumb-item"><a href="isolamento.php"> Isolamento</a></li>
                <li class="breadcrumb-item"><a href="transmissao.php">Transmissão</a></li>
            </ol>
        </nav>
    </div>

    <h1 class="text-center">Uso de máscara</h1>
    <main class="container">



        <article>

            <p>O uso de máscara facial, incluindo as de tecido, é fortemente recomendado para toda a população em ambientes coletivos, em especial no transporte público e em eventos e reuniões, como forma de proteção individual, reduzindo o risco potencial de exposição do vírus especialmente de indivíduos assintomáticos.</p>

            <p>As máscaras não devem ser usadas por crianças menores de 2 anos ou pessoas que tenham dificuldade para respirar, estejam inconscientes, incapacitadas ou que tenham dificuldade de remover a máscara sem ajuda. Recomenda-se lavar as mãos antes de colocar a máscara, colocando-a sobre o nariz e a boca, prendendo-a sob o queixo.</p>

            <p> A pessoa deve ajustar a máscara confortavelmente pelas laterais do rosto, e certificar-se que consegue respirar normalmente. As máscaras não devem ser colocadas em volta do pescoço ou na testa, e ao tocá-la, deve-se lavar as mãos com água e sabão ou álcool em gel 70% para desinfecção. Para pessoas sintomáticas recomenda-se o uso de máscaras cirúrgicas como controle da fonte.</p>
        </article>
        <div class="row marcador align-items-center">
            <div class="col mx-auto text-center">
                <img src="images/mask.png" class="img-fluid margem" alt="ilustração de como usar a máscara certo" width="800" height="500" />
            </div>
        </div>

    </main>

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
