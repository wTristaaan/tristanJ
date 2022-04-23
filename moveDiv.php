<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadMoveDiv">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="moveDiv" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("Move a Div !");</h2>
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
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">Move a div</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                    Pour le portfolio d'une amie, je l'ai aidé à développer une fonction Javascript permettant de bouger une div comme n'importe quelle fenêtre d'un explorateur de fichier.
                        <a target="_blank" href="http://lysun.fr/Portfolio">Sur cette page</a>
                        vous trouverez le site en ligne.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section bg-light" id="projets">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center text-center">
                <div class="col-lg-8" style="margin: 2%">
                    <h2 class="text-black mb-4 wow animate__animated animate__bounceIn">Ce que j'ai fait</h2>
                    <i class="fas fa-cog fa-2x mb-2 text-black wow animate__animated animate__bounceIn"></i>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <img width="100%" src="./resources/assets/img/moveDiv/cliqueAndDrag.png" alt="Index MDV">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Bouger une div.</h4>
                        <p class="mb-0 text-black-50">Il a fallu trouver une astuce pour permettre de déclencher une fonction grâce à un clique et au mouvement de la souris.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Fonction slide.</h4>
                                <p class="text-black-50 mb-0">La fonction slide() permet à l'objet que l'on souhaite bouger de suivre le mouvement de la souris.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/moveDiv/slide.png" alt="fonction slide()">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code js de la fonction slide().</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="js">
/* dragging an element for smooth movement */
/* glessement de l'élément pour un mouvement fluid */
function slide(e) {

    /* give mouse position of element --> + 250 to let mouse at top of window */
    /* donne la postion de la souris à l'élément --> +  250 pour laisser la souris en haut de la fenêtre */
    folder.style.top = e.clientY +250 + 'px';
    folder.style.left = e.clientX + 'px';
    newPosition(e);
}
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/moveDiv/newposition.png" alt="fonction newposition()">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Une fois que l'utilisateur relâche la souris, l'élément doit rester à sa place.</h4>
                                <p class="text-black-50 mb-0">C'est pourquoi nous avons mis en place une nouvelle fonction.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code js de la fonction newPosition().</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="js">
/* new postion of element */
/* nouvelle position de l'élément */
function newPosition(r) {
    /* get sinus of position */
    /* obtient le sinus de la postion */
    x = 400 * Math.sin(r),
    /* get cosinus of position */
    /* obtine le cosinus de la postion */
    y = 400 * Math.cos(r);

    /* add new position calculed to element */
    /* ajoute la nouvelle position à l'élément */
    folder.style.left = x + 'px';
    folder.style.top = y + 'px';
}
                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/moveDiv/moveDivGit.png" alt="moveDiv Github">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4></h4>
                                <p class="text-black-50 mb-0">Création d'un Github pour travailler en équipe.</p>
                                <a href="https://github.com/wTristaaan/moveADiv.git">
                                    <p class="mb-0 text-black-50">Ici.</p>
                                </a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>