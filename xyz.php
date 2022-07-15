<?php include_once 'inc/base.inc.php' ?>

<body id="page-top">
    <header class="mastheadXyz">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" style="position: relative;top: -120px;">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 id="xyz" class="writeJ mx-auto my-0 text-uppercase"></h1>
                    <img class="wow animate__animated animate__shakeY animate__infinite" data-wow-delay="9s" src="./resources/assets/img/duck.png" alt="Duck" width="10%">
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Console.WriteLine("xyz");</h2>
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
                        <h2 class="text-white mb-4 wow animate__animated animate__backInLeft">Xyz projet !</h2>
                        <i class="fas fa-info fa-2x mb-2 text-white wow animate__animated animate__backInRight"></i>
                    </div>
                    <p class="text-white-50 wow animate__animated animate__backInLeft">
                        Xyz est un site web conçu pour apprendre le web scraping. Il sert à trouver n'importe quelle musique sur internet.
                        <a target="_blank" href="http://lysun.fr/xyz/">Sur cette page</a>
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
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center wow animate__animated animate__backInLeft">
                <div class="col-xl-8 col-lg-7">
                    <div class="col-xl-8 col-lg-7">
                        <img width="100%" src="./resources/assets/img/xyz/xyzMastHead.png" alt="XYZ index">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">XYZ.</h4>
                        <p class="mb-0 text-black-50">L'application web est développée en HTML/CSS, JS et PHP. Ce dernier lance des scripts JS grâce
                            à la fonction <a href="https://www.php.net/manual/fr/function.exec.php" target="_blank" rel="noopener noreferrer">exec()</a> de PHP.
                            En utilisant <a href="https://github.com/puppeteer/puppeteer" target="_blank" rel="noopener noreferrer">puppeteer</a> les scripts renvoient les informations demandées.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Le web scraping</h4>
                                <p class="text-black-50 mb-0">Le web scraping (parfois appelé harvesting) est une technique d'extraction du contenu de sites Web, via un script ou un programme, dans le but de le transformer pour permettre son utilisation dans un autre contexte.</p>
                                <a class="text-black-50 mb-0" target="_blank" href="https://fr.wikipedia.org/wiki/Web_scraping">En savoir plus.</a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/xyz/xyzWebScrap.jpg" alt="Scrap illustration">
                </div>
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/xyz/xyzSpotifyGoogle.PNG" alt="Recherche Google">
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4>Recherche Google.</h4>
                                <p class="text-black-50 mb-0">Puppeteer avec <a href="https://www.chromium.org/chromium-projects/" target="_blank" rel="noopener noreferrer">chromium</a> effectue cette recherche et récupère les liens Spotify.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Scraping de Google.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="Javascript">
/**
 * Envoie puppeteer sur Google pour récupérer des liens Youtube et Spotify
 */
const argv = require('minimist')(process.argv.slice(2));
const puppeteer = require("puppeteer");
const accurate = argv.accurate;
const playlistUrl = argv.playlistUrl;
if(accurate === "true"){
    var ytSearch = argv.ytUrl.replace("'", '"').slice(0,-1) + '"' + "&tbm=vid";
    var spSearch = argv.spUrl.replace("'", '"').slice(0,-1) + '"' + "+track";
}else{
    var ytSearch = argv.ytUrl;
    var spSearch = argv.spUrl;
}
(async () => {
    const browser = await puppeteer.launch({ headless: true, args: ['--no-sandbox', '--disable-setuid-sandbox']});
    const page = await browser.newPage();
    await page.goto(ytSearch, {waitUntil: 'load', timeout: 0});
    await page.click("#W0wltc");
    await page.waitForSelector('#rcnt')
    const getYtUrls = await page.evaluate(() => {
        const aTags = document.querySelectorAll("a");
        let aSrcs = [];
        for (let i = 0; i < aTags.length; i++) {
            if(aTags[i].getAttribute("href") == null){
                //
            }else{
                if(aTags[i].getAttribute("href").startsWith("https://www.youtube.com/watch?v=")){
                    aSrcs.push(aTags[i].getAttribute("href"))
                }
            }
        }
        return aSrcs[0];
    });
    await page.goto(spSearch, {waitUntil: 'load', timeout: 0});
    await page.waitForSelector('#rcnt')
    const getSpUrls = await page.evaluate(() => {
        const aTags = document.querySelectorAll("a");
        let aSrcs = [];
        for (let i = 0; i < aTags.length; i++) {
            if(aTags[i].getAttribute("href") == null){
                //
            }else{
                if(aTags[i].getAttribute("href").startsWith("https://open.spotify.com/track")){
                    aSrcs.push(aTags[i].getAttribute("href"))
                }
            }
        }
        return aSrcs[0];
    });
    await page.goto(playlistUrl, {waitUntil: 'load', timeout: 0});
    await page.waitForSelector('#rcnt')
    const getplaylistUrls = await page.evaluate(() => {
        const aTags = document.querySelectorAll("a");
        let aSrcs = [];
        for (let i = 0; i < aTags.length; i++) {
            if(aTags[i].getAttribute("href") == null){
                //
            }else{
                if(aTags[i].getAttribute("href").startsWith("https://open.spotify.com/playlist/" || aTags[i].getAttribute("href").startsWith("https://open.spotify.com/album/"))){
                    aSrcs.push(aTags[i].getAttribute("href"))
                }
            }
        }
        return aSrcs[0];
    });
    console.log(getYtUrls);
    console.log(getSpUrls);
    console.log(getplaylistUrls);
    await browser.close();
})();
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
                                <h4>Puppeteer.</h4>
                                <p class="text-black-50 mb-0">Puppeteer étant un <a href="https://fr.wikipedia.org/wiki/Navigateur_headless" target="_blank" rel="noopener noreferrer">navigateur headless</a>.
                                    Il nous permet aussi d'effectuer des actions telles que des cliques etc. Et donc on l'utilise pour cliquer et télécharger la musique voulue, ainsi que récupérer le titre et les auteurs.</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/xyz/xyzSpDownloader.png" alt="Menu">
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">Utilisation spotify-downloader.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="javascript">
/**
 * Envoie puppeteer sur https://spotify-downloader.com/ pour télécharger le song donné en paramètre
 */

const argv = require('minimist')(process.argv.slice(2));
const puppeteer = require("puppeteer");
const path = require('path');
const spUrl = argv.spUrl;

function delay(time) {
    return new Promise(function(resolve) { 
        setTimeout(resolve, time)
    });
 }
 
(async () => {
    const browser = await puppeteer.launch({ headless: true, args: ['--no-sandbox', '--disable-setuid-sandbox']});
    const page = await browser.newPage();
    await page.goto("https://spotify-downloader.com/", {waitUntil: 'load', timeout: 0});
    await page.click("#link",{ clickCount: 3 });
    await page.keyboard.press('Backspace');
    await page.type("#link", spUrl);
    await page.click("#submit");
    await page.waitForSelector('#result > article > footer > button')
    await page.click("#result > article > footer > button");
    const client = await page.target().createCDPSession()
        await client.send('Page.setDownloadBehavior', {
            behavior: 'allow',
            downloadPath: path.resolve('./mp3'),
        })
    const musicName = await page.evaluate(() => {
        const aTag = document.querySelector("#result > article > h2");
        return aTag.innerHTML;
    });
    const artistName = await page.evaluate(() => {
        const aTag = document.querySelector("#result > article > p");
        return aTag.innerHTML;
    });
    console.log(musicName);
    console.log(artistName);
    await page.on('response', (response)=>{ 
        console.log(response.url());
    });
    await page.waitForResponse((response) => {
        return response.url().startsWith(`https://i.scdn.co/image/`) && response.status() === 200;
    });
    await delay(3000);
    browser.close();
})();
                        </code>
                    </pre>
                    </div>
                </div>
            </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="featured-text text-center text-lg-left">
                        <h4 class="text-black">En cas d'erreurs.</h4>
                        <p class="mb-0 text-black-50"></p>
                        <pre>
                       <code class="javascript">
/**
 * En cas d'erreurs, le script télécharge le son depuis Youtube. Même principe que pour Spotify.
 */
const argv = require('minimist')(process.argv.slice(2));
const puppeteer = require("puppeteer");
const path = require('path');
const ytUrl = argv.ytUrl;

function delay(time) {
    return new Promise(function(resolve) { 
        setTimeout(resolve, time)
    });
 }

 (async () => {
    const browser = await puppeteer.launch({ headless: true, args: ['--no-sandbox', '--disable-setuid-sandbox']});
    const page = await browser.newPage();
    await page.goto("https://notube.io/fr/youtube-app-v19", {waitUntil: 'load', timeout: 0});
    await page.type('#keyword', ytUrl);
    await page.waitForSelector('#submit-button')
    if ((await page.$('#submit-button')) !== null) {
        await delay(1000);
        await page.click("#submit-button");
    }
    await delay(2500);
    let pages = await browser.pages();
    if(pages[2] != null){
        await pages[2].close();
    }else{
        //
    } 
    if(await page.$("#main > section > div > p > div > div > div > div > iframe") == null){
        await page.waitForSelector('#downloadButton');
        if ((await page.$('#downloadButton')) !== null) {
            const url = await page.evaluate(() => {
                const aTag = document.querySelector("#downloadButton").getAttribute("href");
                return aTag;
            });
            console.log(url);
        }
    }else{
        await page.goto("https://fr.onlinevideoconverter.pro/30/youtube-converter-mp3", {waitUntil: 'load', timeout: 0});
        await page.type("#texturl", ytUrl);
        await page.click("#convert1");
        await page.waitForSelector("#download-720-MP4");
        const client = await page.target().createCDPSession()
        await client.send('Page.setDownloadBehavior', {
            behavior: 'allow',
            downloadPath: path.resolve('./mp3'),
        });
        await page.click("#download-720-MP4");
        await delay(2500);
        let newPages = await browser.pages();
        if(newPages[2] != null){
            await newPages[2].close();
        }else{
            //
        }
        if(newPages[1].on('dialog', async dialog => {dialog.message() })){
            await page.goto("https://video-to-mp3-converter.com/fr8", {waitUntil: 'load', timeout: 0});
            await page.type("#convertForm > input", ytUrl);
            await page.click("#convertForm > div.form-footer > div > button");
            await delay(2500);
            let newNewPages = await browser.pages();
            if(newNewPages[2] != null){
                await newNewPages[2].close();
            }else{
                //
            }
            await page.waitForSelector("#__layout > div > main > section.preview > div > div:nth-child(1) > ul > li:nth-child(1) > button")
            await page.click("#__layout > div > main > section.preview > div > div:nth-child(1) > ul > li:nth-child(1) > button");
            await delay(2000);
            await page.waitForSelector("#__layout > div > main > section.top-content > div.orange-wave-back > div > div > div > div > a")
            await delay(2000);
            const downloadUrl = await page.evaluate(() => {
                aTag = document.querySelector("#__layout > div > main > section.top-content > div.orange-wave-back > div > div > div > div > a");
                return aTag.getAttribute("href");
            })
            await page.goto(downloadUrl);
        }else{
            const downloadUrl = await page.waitForResponse((response) => {
                return response.url().startsWith(`https://fr.onlinevideoconverter.pro/api/storage/`) && response.status() === 200;
            });
            console.log(downloadUrl.url());
        }
        
    }
    await browser.close();
})();

                        </code>
                    </pre>
        </div>
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-white text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4></h4>
                                <p class="text-black-50 mb-0">Plus d'informations sur Github.</p>
                                <a target="_blank" href="https://github.com/wTristaaan/xyz"><p class="mb-0 text-black-50">Ici.</p></a>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img width="100%" src="./resources/assets/img/xyz/xyzGithub.png"
                        alt="Tholdi Github">
                </div>
            </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; JOUBERT Tristan &#169; 2017 - <?php echo $today = date("Y"); ?>
    </footer>
</body>