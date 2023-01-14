<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vous souhaitez obtenir un visuel sur le Web ou augmenter votre chiffre d'affaire, contactez DevShivan avec vos idées, nous allons ensemble les transformer en site web à votre image et à vos besoins !">
    <title>Page Contact - Laurent Nicolini - DevShivan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style.css">
    <!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.devshivan.com/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '1']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.devshivan.com/matomo.php?idsite=1&amp;rec=1" style="border:0;" alt="" /></p></noscript>
<!-- End Matomo Code -->
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top bg-white">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand"><img class ="logo d-inline-block align-text-center rounded-circle" src="..\Images\logo_devshivan.png" alt="Logo DevShivan Développeur" title="DevShivan Développeur" height="100" width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.html#projets">
                        <li class="nav-item">Mes Projets</li>
                    </a>
                    <a class="nav-link" href="cv.html">
                        <li class="nav-item">Mon CV</li>
                    </a>
                    <a class="nav-link" href="contact.php">
                        <li class="nav-item">Contact</li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
    <section class=" container mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Une question? Un devis? Nous pouvons papoter!</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">N'hésitez surtout pas à me laisser un message pour toutes demandes (questions, recrutement, devis, faire connaissance...), j'y répondrai très rapidement.</p>

        <div class="row">

            <div class="col-md-9 mb-md-0 mb-5">
                <!-- Retourne un message d'erreur si il manque des informations dans le formulaire -->
                <?php if(array_key_exists('errors',$_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                <?php unset($_SESSION['errors']); endif; ?>

                <!-- Renvoie un message de succès si le message a bien été envoyé -->
                <?php if(array_key_exists('success',$_SESSION)): ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['success']; ?>
                    </div>
                <?php unset($_SESSION['success']); endif; ?>

                <form class="form-floating" id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="md-form mb-2">
                                <label for="floatingInput" class="">Votre nom</label>
                                <input type="text" id="floatingInput" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form mb-2">
                                <label for="floatingInput" class="">Votre email</label>
                                <input type="email" id="floatingInput" name="email" class="form-control" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-2">
                                <label for="floatingInput" class="">Sujet de la question</label>
                                <input type="text" id="floatingInput" name="subject" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="message">Votre message</label>
                                <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                            </div>

                        </div>
                    </div>

                    <br/>
                    <div class="text-center text-md-left">
                        <button class="btn btn-primary" type="submit">Envoyer votre message</button>
                    </div>
                </form>
            </div>

            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><img src="../Images/map.png" alt="Adresse" srcset="">
                        <p>33340 Lesparre-Medoc</p>
                    </li>

                    <li><img src="../Images/phone.png" alt="Télephone" srcset="">
                        <p>---</p>
                    </li>

                    <li><img src="../Images/mail.png" alt="Email" srcset="">
                        <p>contact@devshivan.com</p>
                    </li>
                </ul>
            </div>

        </div>

    </section>
    <footer class="py-3 my-4 bg-light">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
                <a href="index.html" class="nav-link px-2 text-muted">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="index.html#expertise" class="nav-link px-2 text-muted">Expertise</a>
            </li>
            <li class="nav-item">
                <a href="index.html#projets" class="nav-link px-2 text-muted">Projets</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link px-2 text-muted">Contact</a>
            </li>
        </ul>
        <div class="d-flex justify-content-between">
            <p class="text-center text-muted">© 2022 DevShivan</p>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex px-4 me-5">
                <li class="ms-3"><a class="text-muted" href="https://twitter.com/Dev_Shivan" target="_blank"><img src="../Images/twitter-icon.png" class="bi" width="30" height="30"></img></a></li>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>