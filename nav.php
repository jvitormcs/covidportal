<img
          class="img-fluid"
          src="images/header2.png"
          alt="imagem de fundo"
          width="1920px"
        />
<nav class="navbar navbar-expand-lg bg-primary-color" id="navbar">
          <div class="container py-3">
            <a class="navbar-brand <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { echo("disabled ");} ?>" href="index.php">
              <img class="logo" src="images/pac_logo.png" alt="Logo" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbar-items"
              aria-controls="navbar-items"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-items">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') { echo("disabled ");} ?>
                    aria-current="page"
                    href="index.php"
                  >
                    Início
                  </a>
                </li>
                <li class="nav-item dropdown">
<<<<<<< HEAD
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"role="button" aria-expanded="false">Covid-19</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'casos.php') { echo("disabled ");} ?>" href="casos.php">Casos</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'prevencao.php') { echo("disabled ");} ?>" href="prevencao.php">Prevenção</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'vacinacao.php') { echo("disabled ");} ?>" href="vacinacao.php">Vacinas</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'sintomas.php') { echo("disabled ");} ?>" href="sintomas.php">Sintomas</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'testes.php') { echo("disabled ");} ?>" href="testes.php">Testes</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"role="button" aria-expanded="false">Os Pôneis</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'politica.php') { echo("disabled ");} ?>" href="politica.php">Política de Privacidade</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'contato.php') { echo("disabled ");} ?>" href="contato.php">Contato</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'quemsomos.php') { echo("disabled ");} ?>" href="quemsomos.php">Quem Somos</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Saiba mais</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'historia.php') { echo("disabled ");} ?>" href="historia.php">História</a></li>
                    <li><a class="dropdown-item <?php if(basename($_SERVER['PHP_SELF']) == 'noticias.php') { echo("disabled ");} ?>" href="noticias.php">Notícias</a></li>
=======
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Covid-19</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="casos.php">Casos</a></li>
                    <li><a class="dropdown-item" href="prevencao.php">Prevenção</a></li>
                    <li><a class="dropdown-item" href="vacinacao.php">Vacinação</a></li>
                    <li><a class="dropdown-item" href="sintomas.php">Sintomas</a></li>
                    <li><a class="dropdown-item" href="testes.php">Testes</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Os Pôneis</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="politica.php">Política de Privacidade</a></li>
                    <li><a class="dropdown-item" href="contato.php">Contato</a></li>
                    <li><a class="dropdown-item" href="quemsomos.php">Quem Somos</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Saiba mais</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="historia.php">História</a></li>
                    <li><a class="dropdown-item" href="noticias">Notícias</a></li>
>>>>>>> c90733fbe999db8249c469546477650fb041294d
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>