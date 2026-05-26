<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omat Nettisivut</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="tyyli.css">
    
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Kasper Suominen</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#etusivu">Etusivu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#minusta">Tietoa minusta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#yhteys">Ota yhteyttä</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header id="etusivu">
    <h1 class="display-4">Hei, Olen Kasper Suominen</h1>
    <p class="lead">Tuleva Ohjelmistokehittäjä</p>

    <a href="#yhteys" class="btn btn-light btn-lg mt-3">
        Ota yhteyttä
    </a>
</header>



<section id="minusta">
    <div class="container">

        <h2 class="text-center mb-5">Tietoa minusta</h2>

        <div class="row">

            <div class="col-md-6">
                <h3>Esittely</h3>
                <p>
                    Olen tieto- ja viestintätekniikan opiskelija.
                    Etsin harjoittelupaikkaa ensi syksylle ja olen eritysen kiinnostunut ohjelmoinnista sekä
                    web-kehityksestä.
                </p>

                <h3>Harrastukset</h3>
                <ul>
                    <li>Koodaus</li>
                    <li>Pelaaminen</li>
                    <li>Kuntosali</li>
                </ul>
                <h3>yhteystiedot</h3>
                <ul>
                    <li>Puhelin numero: 045 698 4533</li>
                    <li>GitHub: <a href="https://github.com/timipuuro">timipuuro</a></li>
                    <li>Kassu.suominen@gmail.com</li>
                </ul>
            </div>

            <div class="col-md-6">
                <h3>Koulutus</h3>

                <!-- TAULUKKO -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Vuosi</th>
                            <th>Koulutus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2025-</td>
                            <td>Ohjelmistokehittäjä kaksoistutkinto</td>
                        </tr>
                        
                        
                    </tbody>
                </table>

                <h3>Osaaminen</h3>

                <div class="d-flex flex-wrap gap-2">
                    <span class="badge bg-primary">HTML</span>
                    <span class="badge bg-success">CSS</span>
                    <span class="badge bg-warning text-dark">PHP</span>
                    <span class="badge bg-danger">C#</span>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-light">
    <div class="container">

        <h2 class="text-center mb-5">Työnäytteet</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">
                            PHP työt.
                        </p>
                        <a href="https://github.com/timipuuro/Php" class="btn btn-primary">
                            Katso projekti
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Projektityö </h5>
                        <p class="card-text">
                            Lämpö
                        </p>
                        <a href="lämpötila.html" class="btn btn-primary">
                            Katso projekti
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Html</h5>
                        <p class="card-text">
                            Html teokset github
                        </p>
                        <a href="https://github.com/timipuuro/HTML/tree/main" class="btn btn-primary">
                            Katso projekti
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- YHTEYDENOTTOLOMAKE -->
<section id="yhteys" class="bg-light">
    <div class="container">

        <h2 class="text-center mb-5">Ota yhteyttä</h2>


        <form action="mailto:kassu.suominen@gmail.com" method="post" enctype="text/plain">

            <div class="mb-3">
                <label class="form-label">Nimi</label>
                <input type="text" class="form-control" name="nimi" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Sähköposti</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Viesti</label>
                <textarea class="form-control" rows="5" name="viesti"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Lähetä
            </button>

        </form>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <p>© 2026 Kasper Suominen Nettisivu</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>