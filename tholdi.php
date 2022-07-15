<?php include_once 'inc/base.inc.php' ?>
<body id="page-top">
    <header class="mastheadTholdi">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center"
            style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="tholdi" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s"
                        src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("PPE2");</h2>
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
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">Tholdi</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50">
                        Tholdi est un site web de réservation de conteneur, on y retrouve la création d'un compte, d'une
                        session PHP,
                        la réservation d'un conteneur et la création d'un devis.
                        <a target="_blank" href="http://lysun.fr/Tholdi/">Sur cette page</a>
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
                    <h2 class="text-black mb-4">Ce que j'ai fait</h2>
                    <i class="fas fa-cog fa-2x mb-2 text-black"></i>
                </div>
            </div>
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <img width="100%" src="./resources/assets/img/Tholdi/tholdiIndexFront.png" alt="Tholdi Index Front">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Création d'une application web.</h4>
                        <p class="mb-0 text-black-50">Répondant à un cahier des charges,
                            et en équipe, le but était de mettre à disposition des utilisateurs un
                            site web servant à la réservation de conteneur avec une base de données client déjà
                            existante.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Création d'un compte.</h4>
                                <p class="text-black-50 mb-0">Le cahier des charges exprimé l'idée que les utilisateurs
                                    devaient pouvoir créer leurs comptes
                                    s'ils n'étaient pas déjà présents dans la
                                    base de données.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/inscriptionFront.png"
                        alt="Tholdi inscription Front">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de l'inscription.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
include_once 'inc/base.inc.php';
include_once 'inc/nav.inc.php'

action="_inscription.traitement.php" method="post"

include_once 'inc/footer.inc.php'
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP du traitement de l'inscription.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
require_once 'inc/gestion.base.inc.php';
if(isset($_POST))
{
    $raisonSociale = htmlspecialchars($_POST['raisonSociale']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $cp = htmlspecialchars($_POST['cp']);
    $ville = htmlspecialchars($_POST['ville']);
    $adrMel = htmlspecialchars($_POST['adrMel']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $contact = htmlspecialchars($_POST['contact']);
    $login = htmlspecialchars($_POST['login']);
    $mdp = htmlspecialchars($_POST['mdp']);
    $pays = htmlspecialchars($_POST['pays']);
    creerCompte($raisonSociale, $adresse, $cp, $ville,$adrMel,$telephone, $contact, $login, $mdp, $pays);
}
header("Location: index.php");
                           </code>
                        </pre>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la fonction creerCompte().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
function creerCompte($raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $pays)
{
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $raisonSociale = $pdo->quote($raisonSociale);
        $adresse = $pdo->quote($adresse);
        $cp = $pdo->quote($cp);
        $ville = $pdo->quote($ville);
        $adrMel = $pdo->quote($adrMel);
        $telephone = $pdo->quote($telephone);
        $contact = $pdo->quote($contact);
        $login = $pdo->quote($login);
        $mdp = $pdo->quote($mdp);
        $pays = $pdo->quote($pays);
        $req = "insert into utilisateur(role,raisonSociale,adresse,cp,ville,adrMel,telephone,"
            . "contact,login,mdp,codePays)"
            . "value('USER', $raisonSociale, $adresse, $cp, $ville, $adrMel, $telephone, $contact, $login, $mdp, $pays)";
        $pdo->exec($req);
    }
}
                           </code>
                        </pre>
                    </div>
                </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/connexionTholdiFront.png"
                        alt="Tholdi connexion Front">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Connexion a un compte présent dans la base de données.</h4>
                                <p class="text-black-50 mb-0">Il était dit dans le cahier des charges que l'application devait être accessible uniquement 
                                    lorsque l'utilisateur est connecté.
                                </p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la page de connexion.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
include_once 'inc/base.inc.php';
include_once 'inc/nav.inc.php'

action="_connexion.traitement.php" method="post"

include_once 'inc/footer.inc.php'
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la page traitement de connexion.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
require_once 'inc/gestion.base.inc.php';
session_start();
if (isset($_POST['login']) && isset($_POST['mdp'])){

    $login = $_POST['login'];
    $password = $_POST['mdp'];

    $user = verification($login, $password);

    $_SESSION['user'] = $user;
    $_SESSION['panier'] = array();
    $_SESSION['reservation'] = array();

}
header("Location: index.php");
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la fonction verfication().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
function verification($login, $mdp) {
    $pdo = gestionnaireDeConnexion();
    $sql = "SELECT * ,count(*) as nb FROM utilisateur "
        . " WHERE login=:login AND mdp=:mdp";
    $prep = $pdo->prepare($sql);

    $prep->bindParam(':login', $login, PDO::PARAM_STR);
    $prep->bindParam(':mdp', $mdp, PDO::PARAM_STR);

    $prep->execute();
    $resultat = $prep->fetch();

    $prep->closeCursor();

    return $resultat;

}
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
                                <h4>Création d'un panier</h4>
                                <p class="text-black-50 mb-0">Le but ici était de faciliter la réservation de plusieurs conteneurs.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/reservationConteneurFront.png"
                        alt="Tholdi inscription Front">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la page de réservation.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
include_once 'inc/base.inc.php';
include_once 'inc/nav.inc.php'

$code = array();
$codeDesConteneurs = array();
$nomDesConteneurs = array();
$nbDesConteneurs = array();
foreach($_SESSION['panier'] as $code){
    array_push($codeDesConteneurs, $code['codeTypeContainer']);
    array_push($nomDesConteneurs, $code['libelleTypeContainer']);
    array_push($nbDesConteneurs, $code['nbConteneur']);

method="POST" action="reservationConteneur.traitement.php"

action="commande.traitement.php" method="post"

for ($i = 1; $i < sizeof($codeDesConteneurs); $i++) {
    echo 'Conteneur ', $i, ': ', $codeDesConteneurs[$i];
    echo $nomDesConteneurs[$i]; 
    echo 'x', $nbDesConteneurs[$i];
}

include_once 'inc/footer.inc.php'
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la page de traitement de réservation.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
require_once 'inc/gestion.base.inc.php';
require_once 'inc/init.php';

if(isset($_POST['nbConteneur']) && isset($_POST['numTypeContainer'])){
    $panier = [];
    $conteneurCourant = listeConteneursReserve($_POST['numTypeContainer']);
    $panier = $conteneurCourant;
    $panier['nbConteneur'] = $_POST['nbConteneur'];
    array_push($_SESSION['panier'], $panier);

}
header("location: ./reserverConteneur.php");
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la page de la fonction listeConteneurReserve().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
function listeConteneursReserve($numConteneur){
    $pdo = gestionnaireDeConnexion();
    if($pdo != null) {
        $sql = "SELECT * FROM typeContainer"
            . " WHERE numTypeContainer=:numConteneur";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(':numConteneur', $numConteneur, PDO::PARAM_STR);
        $prep->execute();
        $leConteneur = $prep->fetch();
        $prep->closeCursor();
        return $leConteneur;
    }
}
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la page traitement de la commande.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
require_once 'inc/gestion.base.inc.php';
require_once 'inc/init.php';

    $code = $_SESSION['user']['code'];
    $codeReserve = recuperationCodeResevations($code);
    creerReserver($codeReserve);
    $conteneurPanier = $_SESSION['panier'];
    $totalDevis = tarificationDevis();
    $test = sizeof($_SESSION['panier']);

        for($y = 0; $y < $test + 1 ; $y++){
            unset($_SESSION['panier'][$y]);
        }


header("location: index.php");
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la fonction recuperationCodeResevations().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
function recuperationCodeResevations($code){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null) {
        $sql = "SELECT codeReservation FROM reservation WHERE codeUtilisateur = $code ORDER BY codeReservation DESC LIMIT 1";
        $prep = $pdo->prepare($sql);
        $prep->execute();
        $codeReservation = $prep->fetch();
        $codeReservation = $codeReservation[0];

        return $codeReservation;
    }
}
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la fonction creerReserver().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
function creerReserver($codeReserve){
    $pdo = gestionnaireDeConnexion();
    $numConteneur = array();
    $numConteneurCourant = 0;
    $qtReserveCourant = 0;
    $qtReserve = array();
    if ($pdo != null) {
        for($i = 1; $i < sizeof($_SESSION['panier']); $i++){
            array_push($numConteneur, $_SESSION['panier'][$i]['numTypeContainer']);
            array_push($qtReserve, $_SESSION['panier'][$i]['nbConteneur']);
        }

        for($i = 0; $i < sizeof($numConteneur); $i++){
            $numConteneurCourant = $numConteneur[$i];
            $qtReserveCourant = $qtReserve[$i];
            $sql1 = "INSERT INTO reserver value ($codeReserve, $numConteneurCourant, $qtReserveCourant)";
            $prep = $pdo->prepare($sql1);
            $prep->execute();
        }
    }

}
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la fonction tarificationDevis().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
/**
* Function faite par Yanis Oultaf.
*/
function tarificationDevis(){
    $pdo = gestionnaireDeConnexion();
    $annee = $_SESSION['panier'][0][0] ;
    $months = $_SESSION['panier'][0][1] ;
    $days = $_SESSION['panier'][0][2];
    $lesContainers = $_SESSION['panier'];
    $trimestre = floor($trimestre = $months / 3);
    $req = "SELECT * FROM tarificationContainer";
    $pdoStatement = $pdo->query($req);
    $tarificationContainer = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    $nbTarif = count($tarificationContainer);
    $coutTotal = 0;
    $qteTotal = 0;

    $nbContainers = count($_SESSION['panier']);
    for ($i=1; $i<$nbContainers; $i=$i+1) {
        $numTypeContainer = $lesContainers[$i]['numTypeContainer'];
        $qteReserver = $lesContainers[$i]['nbConteneur'];
        $qteTotal = $qteTotal + $qteReserver;
        for ($j = 0; $j < $nbTarif; $j = $j + 1) {
            if ($numTypeContainer == $tarificationContainer[$j]['numTypeContainer']) {
                $tarif = intval($tarificationContainer[$j]['tarif']);

                if ($tarificationContainer[$j]['codeDuree'] == 'ANNEE') {
                    $coutTotal = $coutTotal + (($annee * $tarif) * $qteReserver);
                } else if ($tarificationContainer[$j]['codeDuree'] == 'TRIMESTRE') {
                    $coutTotal = $coutTotal + (($trimestre * $tarif) * $qteReserver);
                } else if ($tarificationContainer[$j]['codeDuree'] == 'JOUR') {
                    $coutTotal = $coutTotal + (($days * $tarif) * $qteReserver);
                }

            }
        }
    }
    updateDevis($coutTotal);

    return $coutTotal;
}
                           </code>
                        </pre>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Code PHP de la fonction updateDevis().</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                           <code class="php">
function updateDevis($coutTotal){
    $pdo = gestionnaireDeConnexion();
    $code = $_SESSION['user']['code'];
    $codeReservation = recuperationResevations($code);
    $req = "SELECT codeDevis FROM reservation where codeReservation = $codeReservation";
    $prep =$pdo->prepare($req);
    $prep->execute();
    $codeDevis = $prep->fetch();
    $codeDevis = $codeDevis[0];

    $sql = "UPDATE devis SET montantDevis = $coutTotal WHERE codeDevis = $codeDevis";
    $prep1 =$pdo->prepare($sql);
    $prep1->execute();

}
                           </code>
                        </pre>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/parametresTholdi.png"alt="Tholdi Changements des paramètres utilisateurs">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Changements des paramètres utilisateurs.</h4>
                                <p class="text-black-50 mb-0">Dans l'onglet "Mon Espace", l'utilisateur peut changer son nom d'utilisateur et son mot de passe.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la page de modification.</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
include_once 'inc/base.inc.php';
include_once 'inc/nav.inc.php';

echo $_SESSION['user']['login'];

include_once 'inc/footer.inc.php';
                        </code>
                    </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la page de traitement de la modification.</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
include_once 'inc/init.php';
include_once 'inc/gestion.base.inc.php';

if(isset($_POST['loginClient']) && isset($_POST['mdpClient'])) {
    $login = $_POST["loginClient"];
    $mdp = $_POST["mdpClient"];
    $pdo = gestionnaireDeConnexion();


    if ($pdo != null) {
        $loginModif = $pdo->quote($login);

        $mdpModif = $pdo->quote($mdp);


        $lastLogin = $_SESSION["user"]["login"];
        $lastLogin = $pdo->quote($lastLogin);

        $lastMdp = $_SESSION["user"]["mdp"];
        $lastMdp = $pdo->quote($lastMdp);

        $req = "update utilisateur set login = $loginModif,mdp = $mdpModif WHERE login=$lastLogin AND mdp=$lastMdp";
        $prep = $pdo->prepare($req);
        $prep->execute();
       
    }


    $_SESSION['user']['login'] = $login;
    $_SESSION['user']['mdp'] = $mdp;
}


header("location: espaceClient.php");
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Création d'un devis client.</h4>
                                <p class="text-black-50 mb-0">Dans l'onglet "Vos réservations", l'utilisateur peut supprimer ou voir ses réservations au format PDF.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/reservationTholdi.png"alt="Tholdi voir ses réservations">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la page de réservation.</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
include_once 'inc/init.php';
include_once 'inc/gestion.base.inc.php';

$reservation = recupReservationClient(); 

$jours = 0;
$mois = 0;
$annee = 0;
$montant =0;
if($reservation == null){
$_SESSION['reservation'] = 8;
header("location: reservation.php")

echo $reservation[$i]['codeReservation'];
$montant = montantDuDevis($reservation[$i]['codeReservation']);

$date = $reservation[$i]['dateDebutReservation'];

$date = getdate($date);
$jours = $date['mday'];
$mois = $date['mon'];
$annee = $date['year'];
echo $jours . '/' . $mois . '/' . $annee;

$date = $reservation[$i]['datefinReservation'];
$date = getdate($date);
$jours = $date['mday'];
$mois = $date['mon'];
$annee = $date['year'];
echo $jours . '/' . $mois . '/' . $annee;

echo $montant['montantDevis'] ;

echo $reservation[$i]['codeReservation'];

echo $reservation[$i]['codeReservation'];

include_once 'inc/footer.inc.php;
                        </code>
                    </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la fonction recupReservationClient().</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
function recupReservationClient(){
    $codeUtilisateur = $_SESSION['user']['code'];
    $reservationClient = array();
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $sql = "SELECT  RE.numTypeContainer, codeTypeContainer, libelleTypeContainer, RE.codeReservation, qteReserver, codeDevis, dateDebutReservation, datefinReservation
        FROM reservation R, reserver RE, typeContainer T
        WHERE R.codeReservation = RE.codeReservation
        AND RE.numTypeContainer = T.numTypeContainer
        AND codeUtilisateur = $codeUtilisateur GROUP BY codeReservation";
        $pdoStatement = $pdo->query($sql);
        $reservationClient = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $reservationClient;
}
                        </code>
                    </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la page de suppression.</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
require_once 'inc/gestion.base.inc.php';
require_once 'inc/init.php';

    $codeReservation = $_POST['codeReservation'];
    supprimerReservation($codeReservation);

header('Location: ./reservationClient.php');
                        </code>
                    </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la function supprimerReservation().</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
function supprimerReservation($codeReservation){
    $pdo = gestionnaireDeConnexion();
    if ($pdo != null){
        $sql = "DELETE FROM `reserver` WHERE `reserver`.`codeReservation` = $codeReservation";
        $prep =$pdo->prepare($sql);
        $prep->execute();

        $req = "DELETE FROM `reservation` WHERE `reservation`.`codeReservation` = $codeReservation";
        $prep = $pdo->prepare($req);
        $prep->execute();
    }

}
                        </code>
                    </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Code PHP de la function de création d'un PDF grâce à <a href="http://www.fpdf.org/" target="_blank" rel="noopener noreferrer">FPDF</a>.</h4>
                       <p class="mb-0 text-black-50"></p>
                    <pre>
                        <code class="php">
require ('fpdf/Devis.php');
include_once('inc/gestion.base.inc.php');
include_once('inc/init.php');

    $codeUtilisateur = $_SESSION['user']['code'];
    $reservation = recupReservationClient($codeUtilisateur);
    $codeReservation = $_POST['codeReservation'];
    $adresse = $_SESSION['user']['adresse'];
    $cp = $_SESSION['user']['cp'];
    $ville = $_SESSION['user']['ville'];
    $telephone = $_SESSION['user']['telephone'];
    $recap = recapCommande($codeReservation);
    $montant = montantDuDevis($codeReservation);


    // Instanciation de la classe dérivée
    $pdf = new Devis();
    $pdf->setCodeReservation($codeReservation);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',14);
    $pdf->Cell(139,25, 'Adresse client',0,0);
    $pdf->Text(11,51,utf8_decode($adresse));
    $pdf->Text(11,56,utf8_decode($cp));
    $pdf->Text(11,61,utf8_decode($ville));
    $pdf->Text(11,66, utf8_decode($telephone));

    $pdf->Cell(150,25, 'Adresse',0,0);
    $pdf->Text(150,51,'Moll de Llevant');
    $pdf->Text(150,56,'08039');
    $pdf->Text(150,61,'Barcelone');
    $pdf->Text(150,66,'0687175444');
    $pdf->Ln(20);

    $pdf->SetFont('Arial', 'B', 15);
    $pdf->Cell(200,100,'Recapitulation commande',0,0, 'C');
    $pdf->Ln(65);

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(10,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Numero du devis'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(48,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Numero du conteneur'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(86,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Nom du conteneur'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(124,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Code du conteneur'),1,0);
    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(162,115 ,38,10,'DF');
    $pdf->CellFitScale(38,10,utf8_decode('Quantité'),1,0);
    $pdf->Ln(10);

    foreach($recap as $col){
        foreach($col as $test){
            $pdf->CellFitScale(38,10,$test,1,0);
        }
        $pdf->Ln(10);
    }
    $pdf->Ln(90);

    $pdf->Text(150,180,'Prix TTC :');
    $pdf->Text(168,180,utf8_decode($montant['montantDevis']). ' euros');

    $pdf->Output();
                        </code>
                    </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/devisTholdi.png"
                        alt="Tholdi Github">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4></h4>
                                <p class="text-black-50 mb-0">PDF généré.</p>
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
                                <h4></h4>
                                <p class="text-black-50 mb-0">Création d'un Github pour travailler en équipe.</p>
                                <a target="_blank" href="https://github.com/wTristaaan/Tholdi"><p class="mb-0 text-black-50">Ici.</p></a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Tholdi/tholdiGit.png"
                        alt="Tholdi Github">
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>