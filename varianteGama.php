<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <title>Variante Gama</title>
</head>
<body>

    
    <header>
        
        <?php
            include 'nav.php';
            ?>

<img class="col-10 offset-1 img-fluid" src="images/bunnerGama.png" alt="na esquerda tem um fundo branco, com virus com um tom de verde, na direita tem um um fundo esverdeado indo para um azul e por cima está escrito Sintomas Covid-19 com a letra em branco">

<<<<<<< HEAD
<div class="row text-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bread">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sintomas</li>
                <li class="breadcrumb-item"><a href="varianteAlfa.php">Variante Alfa</a></li>
                <li class="breadcrumb-item"><a href="varianteBeta.php">Variante Beta</a></li>
                <li class="breadcrumb-item active" aria-current="page">Variante Gama</li> 
                <li class="breadcrumb-item"><a href="varianteDelta.php">Variante Delta</a></li>
            </ol>
        </nav>
    </div>
=======
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container py-3">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="sintomas.php">Sintomas</a></li>
                <li class="nav-item"><a class="nav-link active" href="varianteAlfa.php">Variante Alfa</a></li>
                <li class="nav-item"><a class="nav-link active" href="varianteBeta.php">Variante Beta</a></li>
                <li class="nav-item"><a class="nav-link active" href="varianteGama.php">Variante Gama</a></li>
                <li class="nav-item"><a class="nav-link active" href="varianteDelta.php">Variante Delta</a></li>
            </ul>
        </div>
    </nav>
>>>>>>> c90733fbe999db8249c469546477650fb041294d

</header>

<main class="row offset-lg-1">
    <article class="col-lg-7">
        <h2>Variante Gama</h2>

        <div class="container">
            <div class="row col-lg-9">
                
                
                <section class=" col-lg-10 offset-lg-1" >
                    <h3>Dados da variante
                    </h3>
                     <p>A variante gama foi descoberta no fim de 2020 em japoneses que voltaram do Amazonas.</p>
                     <p>Ele é bem semelhante a beta, assim carregando os mesmos tipos de principais mutações no virus e ainda contendo o risco de reinfecções .</p>
                     <p>Ela é mais transmissível, tanto que ela teve uma alta em março e abril e ainda fazendo estragos. Estudos apontam uma taxa semelhante à da alfa. Consegue escapar dos anticorpos adquiridos de contatos anteriores com as linhagem do vírus.</p>
                     <p>No Brasil pode-se calcular que ela é responsavel por novem em cada dez casos de Covid. As suas características fazem quem ela vença a concorrencia até o momento.</p>
                </section>
                

                <section  class=" col-7 col-md-7 col-lg-10 offset-lg-1">

                <h3>Referências</h3>

                <p><a href ="https://olhardigital.com.br/2021/08/19/coronavirus/covid-19-variante-alfa-beta-gama-e-delta-conheca-todas/">https://olhardigital.com.br/2021/08/19/coronavirus/covid-19-variante-alfa-beta-gama-e-delta-conheca-todas/</a></p>
                
                <p><a href ="https://www.saude.ce.gov.br/2021/08/30/alfa-beta-gama-e-delta-infectologista-explica-as-principais-diferencas-entre-as-variantes/">https://www.saude.ce.gov.br/2021/08/30/alfa-beta-gama-e-delta-infectologista-explica-as-principais-diferencas-entre-as-variantes/</a></p>

                <p><a href ="https://www.tuasaude.com/variantes-covid/">https://www.tuasaude.com/variantes-covid/</a></p>

                <p><a href ="https://saude.abril.com.br/medicina/variantes-do-coronavirus-quem-sao-e-como-se-comportam/">https://saude.abril.com.br/medicina/variantes-do-coronavirus-quem-sao-e-como-se-comportam/</a></p>

                </section>
            </div>
        </div>
    </article>

    <aside class=" offset-1 col-8 col-lg-3">
        <section>
            <h2>Sintomas</h2>
            <p>O Covid afeta de formas diferentes cada pessoa. Grandes partes das pessoas infectadas apresentará sintomas mais leves a moderados da doença e não será necessário a hospitalização</p>
            <a href="sintomas.php">Saiba mais</a>
            <hr />
        </section>

        <section>
            <h2>Variante Alfa</h2>
            <p>A variante Alfa foi a primeira a ser descoberta e, por conta disso, recebeu a primeira letra do alfabeto Grego. Foi relatada pela primeira vez em Setembro de 2020 no Reino Unido </p>
            <a href="varianteAlfa.php">Saiba mais</a>
            <hr />
        </section>

        <section>
            <h2>Variante Beta</h2>
            <p>A Variante Beta foi descoberta em Dezembro de 2020 na África do Sul. Ela possui mutação em comum com a alfa, alem de que ela possui a capacidade de estimular uma conexão com as células humanas o que pode facilitar uma evasão dos anticorpos.</p>
            <a href="varianteBeta.php">Saiba mais</a>
            
        </section>
        
    </aside>

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