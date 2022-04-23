<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top animate__animated animate__backInDown" id="mainNav">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
        <div class="container px-4 px-lg-5">
            <div class="social d-flex justify-content-center">
                <a target="_blank" id="linkedin" class="around mx-2" href="https://fr.linkedin.com/in/tristanjoubert"><i class="fab fa-linkedin-in"></i></a>
                <a class="around mx-2" id="mail" href="mailto:t.joubert78980@gmail.com"><i class="fas fa-envelope"></i></a>
                <a target="_blank" id="git" class="around mx-2" href="https://github.com/wTristaaan?tab=repositories"><i class="fab fa-github"></i></a>
            </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link">À propos</a></li>
                    <li class="nav-item"><a class="nav-link">Projets</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="nameJOUBERT" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("Coin Coin");</h2>
                    <a class="btn btn-primary">C'est parti</a>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center" id="aPropos">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <div style="margin: 2%">
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">À propos de moi</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        Bonjour ! je suis Tristan. Ici vous trouverez tous mes travaux depuis mes débuts en 2019.
                        <a target="_blank" href="https://lemoutondesvilles.fr">Sur cette page</a>
                        vous trouverez mon premier site en ligne.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section bg-light" id="projets">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center text-center">
                <div class="col-lg-8" style="margin: 2%">
                    <h2 class="text-black mb-4 wow animate__animated animate__bounceIn">Mes projets</h2>
                    <i class="fas fa-stream fa-2x mb-2 text-black wow animate__animated animate__bounceIn"></i>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 align-items-center wow animate__animated animate__backInLeft">
                <div class="col-xl-8 col-lg-7">
                    <video loop muted="muted" class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/tholdiv2.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-xl-4 mb-4 mb-lg-5 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Tholdi</h4>
                        <p class="mb-0 text-black-50">Le site Tholdi est un projet scolaire où j'ai appris les bases de PHP.</p>
                        <a class="text-black-50 mb-0" href="tholdi.php">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 justify-content-center wow animate__animated animate__backInRight">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Le mouton des villes</h4>
                                <p class="text-black-50 mb-0">Site web conçu pour mettre en avant les produits d'un créateur.</p>
                                <a class="text-black-50 mb-0" href="mdv.php">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <video muted="muted" loop class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/mdv.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 justify-content-center wow animate__animated animate__backInLeft">
                <div class="col-lg-6">
                    <video muted="muted" loop class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/porteFolio.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-lg-6 order-lg">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-black">Portfolio</h4>
                                <p class="mb-0 text-black-50">Premier projet solo crée pour mettre en avant mes projets, et apprendre à utiliser le framework Laravel.</p>
                                <a class="text-black-50 mb-0" href="portfolio.php">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 justify-content-center wow animate__animated animate__backInRight">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>SSO</h4>
                                <p class="text-black-50 mb-0">Premier logiciel crée pour apprendre l'interface graphique du Framework .NET.</p>
                                <a class="text-black-50 mb-0" href="sso.php">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <video muted="muted" loop class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/sso.mkv" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 justify-content-center wow animate__animated animate__backInLeft">
                <div class="col-lg-6">
                    <video muted="muted" loop class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/superComptables.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-lg-6 order-lg">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-black">Supercomptable</h4>
                                <p class="mb-0 text-black-50">SuperCompatbles.fr était un site développé dans le but de trouver le comptable idéal.</p>
                                <a class="text-black-50 mb-0" href="sc.php">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 justify-content-center wow animate__animated animate__backInRight">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Tholdi sur android</h4>
                                <p class="text-black-50 mb-0">Première application mobile développée pour découvrir l'environnement android, et l'utilisation d'un web service.</p>
                                <a class="text-black-50 mb-0" href="tholdiAndroid.php">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <video muted="muted" loop class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/tholdiAndroid.mkv" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-0 justify-content-center wow animate__animated animate__backInLeft">
                <div class="col-lg-6">
                    <video muted="muted" loop class="img-fluid videoMouton">
                        <source src="./resources/assets/vid/moveDiv.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-lg-6 order-lg">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-black">Bouger une div</h4>
                                <p class="mb-0 text-black-50">Le but ici était de bouger une div dans une p age web comme une fenêtre sur n'importe quel OS.</p>
                                <a class="text-black-50 mb-0" href="moveDiv.php">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="signup" class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100 wow animate__animated animate__zoomIn animate__zoomInDown" data-wow-delay="0.5s">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Adrresse</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">3 rue de la bâte, 78980 NEAUPHLETTE FRANCE</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100 wow animate__animated animate__zoomIn animate__zoomInDown" data-wow-delay="0.7s">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Mél</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="mailto:t.joubert78980@gmail.com">t.joubert78980@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100 wow animate__animated animate__zoomIn animate__zoomInDown" data-wow-delay="1s">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Téléphone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">06.87.17.54.44</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a target="_blank" class="mx-2" href="https://twitter.com/wTristaaan"><i class="fab fa-twitter"></i></a>
                <a target="_blank" class="mx-2" href="https://www.instagram.com/tristetempsj/"><i class="fab fa-instagram"></i></a>
                <a target="_blank" class="mx-2" href="./resources/assets/img/CV_JOUBERT_Tristan.pdf"><i class="fas fa-info"></i></a>
            </div>
        </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>