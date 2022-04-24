<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário LP4</title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/formulário/home"><img src="assets/img/logo-menu.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <fieldset>
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/formulário/home">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/formulário/login">Login <img src="assets/img/enter.png" class="icone"></a>
                </li>
              </ul>
            </div>
          </fieldset>
        </div>
      </nav>
    </header>
    <article>
    <?php
      include 'routes/routes.php';      
        ?>
    </article>
    <footer class="row row-cols-5 py-5 my-5 border-top bg-dark">
    <div class="container">
      <p class="text-muted">© Formulário LP4 2022</p>
      <a class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <img src="assets/img/liberta.png">
          <img class="mx-auto" src="assets/img/liberta.png">
      </a>
    </div>
  </footer>
</body>
</html>