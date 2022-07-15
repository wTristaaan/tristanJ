<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadPF">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="PF" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("PF");</h2>
                    <a class="btn btn-primary" href="#aPropos">C'est parti</a>
                </div>
            </div>
        </div>
    </header>
    <section class="about-section text-center" id="aPropos">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <div style="margin: 2%">
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">Portfolio</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        Mon portfolio est un site web en ligne permettant de référencer l'ensemble de mes projets.
                        <a target="_blank" href="http://lysun.fr/tristanJ">Sur cette page</a>
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
                    <img width="100%" src="./resources/assets/img/Portfolio/laravel.png" alt="laravel présentation">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Portfolio.</h4>
                        <p class="mb-0 text-black-50">Ce site web développé avec le framework <a href="https://laravel.com/" target="_blank" rel="noopener noreferrer">laravel</a> m'a permis de me familiariser avec cet environnement.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Création d'un projet laravel.</h4>
                                <p class="text-black-50 mb-0">La commande <code>composer create-project --prefer-dist laravel/laravel</code>
                                    permet de créer le squelette d'un projet laravel grâce à composer.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/creationProjet.png" alt="cmd création d'un projet laravel">
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/template.png" alt="template utilisée">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Mise en place d'un template.</h4>
                                <p class="text-black-50 mb-0">Le framework fonctionne avec le moteur de vue blade. Il faut donc adapter la template.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Blade exemple.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="php">
include('base')
                        </code>
                        <code class="html">
class="mastheadTholdi"
class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;
class="d-flex justify-content-center
class="text-center
id="tholdi" class="writeJ mx-auto my-0 text-uppercase"
class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="url('assets/img/duck.png')" alt="Duck" width="10%">
class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("PPE2")
class="btn btn-primary" href="#aPropos">C'est parti
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Configuration vps.</h4>
                                <p class="text-black-50 mb-0">Le site web doit être accessible en ligne c'est pourquoi j'ai opté pour un VPS.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://fr.wikipedia.org/wiki/Serveur_d%C3%A9di%C3%A9_virtuell">En savoir plus</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/vps.png" alt="Connexion Putty">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Connexion au VPS grâce à l'outil Putty.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code>
Host name : 219.86.162.115 //IP random
Port : 31568	//Port random
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/dns.png" alt="DNS OVH">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>DNS</h4>
                                <p class="text-black-50 mb-0">Achat d'un nom de domaine et redirection grâce aux DNS d'OVH.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Mise en production.</h4>
                                <p class="text-black-50 mb-0">Laravel dispose d'un fichier .env a la racine du projet. Il faut le paramétrer.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/env.png" alt=".env laravel">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">.env.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code>
APP_NAME=Laravel
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=http://lysun.fr

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/conf.png" alt="conf apache2">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Mise en production.</h4>
                                <p class="text-black-50 mb-0">Il faut aussi rediriger les requêtes reçues par le serveur. Il faut donc éditer un fichier .conf pour apache2.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">.conf.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code>
ServerAdmin admin@lysun.fr
ServerName lysun.fr
DocumentRoot /var/www/html/PF/public
Directory
    Options FollowSymLinks
    AllowOverride None
Directory
Directory /var/www/html/PF
    AllowOverride All
Directory

ErrorLog ${APACHE_LOG_DIR}/error.log
CustomLog ${APACHE_LOG_DIR}/access.log combined
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Mise en production.</h4>
                                <p class="text-black-50 mb-0">Le site est désormais accessible en ligne à l'adresse.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="http://lysun.fr/tristanJ">Lysun.fr.</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/index.png" alt=".env laravel">
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Portfolio/gitPF.png" alt="Portfolio Github">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4></h4>
                                <p class="text-black-50 mb-0">Le Github. Pour certaines raisons le framework a été supprimé.</p>
                                <a target="_blank" href="https://github.com/wTristaaan/tristanJ">
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