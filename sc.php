<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadSP">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="SP" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("SuperCompatbles");</h2>
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
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">SuperComptables</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        SuperComptables.fr était un site permettant grâce à des formulaires de retrouver le comptable idéal selon vos choix.
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
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center wow animate__animated animate__backInLeft">
                <div class="col-xl-8 col-lg-7">
                    <img width="75%" src="./resources/assets/img/Sc/index.jpg" alt="index superComptables">
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Découverte du projet.</h4>
                        <p class="mb-0 text-black-50">Pour la première fois, le site sur lequel j'ai travaillé était déjà existant.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Découverte de WordPress.</h4>
                                <p class="text-black-50 mb-0">L'organisation souhaitait déployer son service vite c'est pourquoi ils ont choisi le CMS WordPress.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sc/wp.png" alt="WordPress dashboard">
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sc/gs.png" alt="GoogleSheet">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Découverte de Google Sheet.</h4>
                                <p class="text-black-50 mb-0">Les formulaires présents sur le site étaient directement reliés au GoogleSheet servant de base de données.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Exemple d'un lien JS formulaire/googleSheet.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="JavaScript">
function listMajors() {
    gapi.client.sheets.spreadsheets.values.get({
      spreadsheetId: '1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms',
        range: 'Class Data!A2:E',
    }).then(function(response) {
        var range = response.result;
      if (range.values.length > 0) {
        appendPre('Name, Major:');
        for (i = 0; i < range.values.length; i++) {
          var row = range.values[i];
            // Print columns A and E, which correspond to indices 0 and 4.
          appendPre(row[0] + ', ' + row[4]);
         }
        } else {
        appendPre('No data found.');
      }
    }, function(response) {
      appendPre('Error: ' + response.result.error.message);
    });
}

                    </code>
                </pre>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Découverte de GoogleAppScript</h4>
                                <p class="text-black-50 mb-0">Le coeur de l'application tourne autour de GoogleAppScript.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://fr.wikipedia.org/wiki/Google_Apps_Script">En savoir plus.</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/Sc/apScript.png" alt="Google App">
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Fonction permettant de créer un meeting Zoom.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="JavaScript">
//récupération de l'application par le biais des clés privées et de l'adresse mail
const ZOOM_API_KEY = 'QMVuvWIfScGUTpo4Y04-YA';
const ZOOM_API_SECRET = 'CbKmenZVoK2OMCn7USoDnvl21Qk3gqx2ZDFA';
const ZOOM_EMAIL = 't.joubert78980@gmail.com';
const invites  = [ 'wTristaan@gmail.com', 'jesuisclient@yopmail.com' ]

//récupération nde la date et de l'heure du rdv
function getDateForMeeting(e){
  var classeur = getSpreadSheet()
  var feuille_CalcMail3 = classeur.getSheetByName('CalcMail3')
  var index = getIndex(e)
  var choixRDV = feuille_CalcMail3.getRange(index, 4).getDisplayValue()
  
  if (choixRDV === "#N/A") {
    choixRDV = feuille_CalcMail3.getRange(index, 10).getDisplayValue()
  }
  var today = new Date();
  var year = choixRDV.substring(6,10)
  var month = choixRDV.substring(3,5)
  var day = choixRDV.substring(0,2)
  var hours = choixRDV.substring(11,13)
  var minutes = choixRDV.substring(14,16)
  var secondes = "00"

  var time = year + "-" + month + "-" + day + "T" + hours + ":" + minutes + ":" + secondes
  console.log(time)
  return time
}

//récupération du Token d'accès
const getZoomAccessToken = () => {
  const encode = (text) => Utilities.base64Encode(text).replace(/=+$/, '');
  const header = { alg: 'HS256', typ: 'JWT' };
  const encodedHeader = encode(JSON.stringify(header));
  const payload = {
    iss: ZOOM_API_KEY,
    exp: Date.now() + 3600,
  };
  const encodedPayload = encode(JSON.stringify(payload));
  const toSign = `${encodedHeader}.${encodedPayload}`;
  const signature = encode(
    Utilities.computeHmacSha256Signature(toSign, ZOOM_API_SECRET)
  );
  return `${toSign}.${signature}`;
};

//récupération de l'ID du compte
const getZoomUserId = () => {
  const request = UrlFetchApp.fetch('https://api.zoom.us/v2/users/', {
    method: 'GET',
    contentType: 'application/json',
    headers: { Authorization: `Bearer ${getZoomAccessToken()}` },
  });
  const { users } = JSON.parse(request.getContentText());
  const [{ id } = {}] = users.filter(({ email }) => email === ZOOM_EMAIL);
  console.log(id)
  return id;
};

//création du meeting et récupération de l'url 
const createZoomMeeting = (e) => {
  const meetingOptions = {
    topic: 'Rendez-vous superComptables.fr',
    type: 2,
    start_time: getDateForMeeting(e),
    duration: 120,
    timezone: 'Paris/Madrid',
    password: 'test',
    agenda: 'Rendez-vous superComptables.fr',
    settings: {
      auto_recording: 'none',
      mute_upon_entry: true,
      join_before_host: true,
      host_video : false,
      waiting_room : false,
      authentication_option : false,
    },
  };

  const request = UrlFetchApp.fetch(
    `https://api.zoom.us/v2/users/${getZoomUserId()}/meetings`,
    {
      method: 'POST',
      contentType: 'application/json',
      headers: { Authorization: `Bearer ${getZoomAccessToken()}` },
      payload: JSON.stringify(meetingOptions),
    }
  );
  const { join_url, id } = JSON.parse(request.getContentText());
  Logger.log(`Zoom meeting ${id} created ${join_url}`);
  const url = join_url
  return url
}
                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Fonction qui relance les comptables n'ayant pas répondu au bout de 24h.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="JavaScript">
  function relanceComptable(){
  Logger.log('Execution de la relance')

  //recupération du gsheet + recupération de la colone A et T environ 34000 lignes
  var classeur = getSpreadSheet()
  var feuille_CalcMail1 = classeur.getSheetByName('CalcMail1')
  var tableauAvecToutesLesValeurs = feuille_CalcMail1.getRange("A2:AH22").getValues();
  var feuille_Base = classeur.getSheetByName('Base')

  //suppression des lignes vides de la colone A
  var tableauAvecToutesLesValeurs_filtre = tableauAvecToutesLesValeurs.filter( function(val){
    return val != ''
    } )

  //récupération de la date du jour pour la mettre sous forme de chaine de caractères
  var dateDuJour = new Date();
  dateDuJour = dateDuJour.toString()
  dateDuJour = dateDuJour.substring(0,15)

  //récuoération de la date d'hier pour la mettre sous forme de chaine de caractères
  var dateRelance = new Date();
  dateRelance.setDate(dateRelance.getDate() - 1);
  dateRelance = dateRelance.toString()
  dateRelance = dateRelance.substring(0, 15)

  //filtre a nouveau le tableau dans le but de garder uniquement les client qui doivent être relencé 
  var tableauRelance = []
  for(var i = 0; i < tableauAvecToutesLesValeurs_filtre.length; i++){
    if(tableauAvecToutesLesValeurs_filtre[i][0].toString().substring(0,15) == dateRelance && tableauAvecToutesLesValeurs_filtre[i][11] != "Pas de résultats"){
      tableauRelance.push(tableauAvecToutesLesValeurs_filtre[i])
    }
  }

  var clients = []
  var destinataires = []
  var mails = []

  // récupère la last ligne de Base
  const col = feuille_Base.getLastColumn();
  var template = getP1Template(classeur)

  //récupération du lien de suppressionn de fiche 
  var plageLienFormUnsub = feuille_CalcMail1.getRange(18, 22)
  var urlDeSuppressionDeFiche = plageLienFormUnsub.getDisplayValue()

  // FIXE - Recuperation du lien de la page désinscription
  var plageLienFormUnsubMail = feuille_CalcMail1.getRange(18, 23)
  var urlDeDesabonnement = plageLienFormUnsubMail.getDisplayValue()
  
  //parcours le tableau des clients quii doivent être relancé, et créé un tableau avec uniquement les client et un tableau avec uniquement les comptables
  for(var i = 0; i < tableauRelance.length; i++){
    var nombreDeMails = 0
    clients.push({ salaries : tableauRelance[i][32], creation : tableauRelance[i][30], activite : tableauRelance[i][31], mission : tableauRelance[i][6], ca : tableauRelance[i][29], statut : tableauRelance[i][33], lienForm : tableauRelance[i][15]})
    for(var j = 0; j < tableauRelance[i][11].length; j++){
      if(tableauRelance[i][11][j] == "@"){
        nombreDeMails += 1
        
      }
    }
    mails.push(nombreDeMails)
    for(var k = 0; k < mails[i]; k++){
      destinataires.push({ mail : tableauRelance[i][11].split(",")[k], nomEntreprise : tableauRelance[i][12].split(",")[k], nom : feuille_Base.createTextFinder(tableauRelance[i][12].split(",")[k]).findAll().map((range) => feuille_Base.getRange(range.getRow(), 1, 1,col).getValues()[0])[0][12], prenom : feuille_Base.createTextFinder(tableauRelance[i][12].split(",")[k]).findAll().map((range) => feuille_Base.getRange(range.getRow(), 1, 1, col).getValues()[0])[0][13], lienFiche : generationUrlDeFiche(tableauRelance[i][12].split(",")[k])})
    }
  }

  //envoie de mails
  for(var i = 0; i < clients.length; i++){
    for(var j = 0; j < mails[i]; j++){
      console.log(destinataires[j])

      var lienComplet = clients[0].lienForm.replace("COMPTABLE", destinataires[j].nom +"+"+destinataires[j].prenom + "+de+" +destinataires[j].nomEntreprise)
      var templateComplet = template.corps
        .replace('MISSION', clients[0].mission)
        .replace('CA', clients[0].ca)
        .replace('NB_SALARIES', clients[0].salaries)
        .replace('ACTIVITE', clients[0].activite)
        .replace('CREATION', clients[0].creation)
        .replace('STATUT', clients[0].statut)
        .replace('GFORMURL', lienComplet)
        .replace('URLDEFICHECOMPTABLE', destinataires[j].lienFiche)
        .replace('URLDESUPPRESSIONDEFICHE', urlDeSuppressionDeFiche)
        .replace('URLDEDESABONNEMENT', urlDeDesabonnement)
        var contenuMail = {
          objet: template.objet,
          corps: templateComplet
        }
      try {
        MailApp.sendEmail(destinataires[j].mail, contenuMail.objet, contenuMail.corps)
        Logger.log(`Mail envoyé à ${destinataires[j].nomEntreprise}, mail: ${destinataires[j].mail}`)
      } catch (err) {
        Logger.log(`Erreur ${err}`)
      }
    }
  }
}

                    </code>
                </pre>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="featured-text text-center text-lg-left">
                    <h4 class="text-black">Fonction qui envoie un email de satisfaction après un rendez-vous.</h4>
                    <p class="mb-0 text-black-50"></p>
                    <pre>
                    <code class="JavaScript">
                    function review(choixRDV, client, comptable) {
  var classeur = getSpreadSheet()
  var sheet = classeur.getSheetByName('Relance')
  var mailClient = client.mail
  var mailComptable = comptable.mail
  var nomComptable = comptable.nom
  var date = new Date(getDateForReview(choixRDV))
  var heure = date.getHours()
  heure = heure + 2 
  date.setHours(heure)
  var cell = sheet.getRange('A1');
  var ct = 0;
  while ( cell.offset(ct, 0).getValue() != "" ) {
    ct++;
  }
  ct = ct + 1
  sheet.getRange("A"+ct).setValue(date);
  sheet.getRange("B"+ct).setValue(mailClient);
  sheet.getRange("C"+ct).setValue(mailComptable);
  sheet.getRange("D"+ct).setValue(nomComptable);
  triggerDeRelance(date, mailClient, mailComptable)
  console.log("Review prévu le " + date)
}

function triggerDeRelance(date) {
   ScriptApp.newTrigger("envoiMailReview") 
   .timeBased()
   .at(date)
   .create();
}

function getDateForReview(choixRDV){
  var today = new Date();
  var year = choixRDV.substring(6,10)
  var month = choixRDV.substring(3,5)
  var day = choixRDV.substring(0,2)
  var hours = choixRDV.substring(11,13)
  var minutes = choixRDV.substring(14,16)
  var secondes = "00"

  var time = year + "-" + month + "-" + day + "T" + hours + ":" + minutes + ":" + secondes
  return time
}

function envoiMailReview(){
  var classeur = getSpreadSheet()
  var sheet = classeur.getSheetByName('Relance')
  var cell = sheet.getRange('A1');
  var ct = 0;
  while ( cell.offset(ct, 0).getValue() != "" ) {
    ct++;
  }


  var emailClient = sheet.getRange(ct, 2).getDisplayValue()
  var emailComptable = sheet.getRange(ct, 3).getDisplayValue()
  console.log(emailComptable)

  try {
    MailApp.sendEmail({
      to : emailClient,
      subject : "Merci d'avoir utilisé superComptables.fr !",
      htmlBody : "div>p>Bonjour, "+ emailClient +"/p>/div>"})
    Logger.log(`Mail envoyé à ${emailClient}`)
    } catch (err) {
    Logger.log(`Erreur ${err}`)
  }

  try {
    MailApp.sendEmail({
      to : emailComptable,
      subject : "Merci d'avoir utilisé superComptables.fr !",
      htmlBody : "div>p>Bonjour, "+ emailComptable +"/p>/div>"})
    Logger.log(`Mail envoyé à ${emailComptable}`)
  } catch (err) {
    Logger.log(`Erreur ${err}`)
  }

}


                    </code>
                </pre>
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>