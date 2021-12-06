<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title> Higienização </title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
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
                <li class="breadcrumb-item active" aria-current="page">Higienização</li>
                <li class="breadcrumb-item"><a href="isolamento.php"> Isolamento</a></li>
                <li class="breadcrumb-item"><a href="transmissao.php">Transmissão</a></li>
            </ol>
        </nav>
    </div>


    <h1 class="text-center">Higienização</h1>
    <main class="container">


        <p>A higienização das mãos é a medida isolada mais efetiva na redução da disseminação de doenças de transmissão respiratória.Além disso, A limpeza domiciliar de ambientes que contêm pessoas infectadas e em ambiente isolado deve seguir recomendações especiais. A seguir são indicados alguns cuidados:</p>



        <div class="container">

            <div class="col d-flex align-items-start">
                <i class="bi bi-hand-thumbs-up" ></i>
                <div>
                    <h4 class="fw-bold mb-0">Dica 1</h4>
                    <p>Evite criar salpicos e spray ao limpar.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <i class="bi bi-hand-thumbs-up" ></i>
                <div>
                    <h4 class="fw-bold mb-0">Dica 2</h4>
                    <p>Preferir o uso de tecidos descartáveis na limpeza quando possível.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <i class="bi bi-hand-thumbs-up" ></i>
                <div>
                    <h4 class="fw-bold mb-0">Dica 3</h4>
                    <p>Aplique solução sanitizante.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <i class="bi bi-hand-thumbs-up" ></i>
                <div>
                    <h4 class="fw-bold mb-0">Dica 4</h4>
                    <p> Lave a superfície com água e sabão e seque-a.</p>
                </div>
            </div>


        </div>
        <p class="fonte"> Fontes:https://www.gov.br/saude/pt-br/coronavirus/como-se-proteger | http://covid19.cff.org.br/higienizacao-domiciliar-de-superficies-contaminadas/ </p>

    </main>


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
