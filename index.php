<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="---------------------------[RetroWave description]---------------------------" />
    <meta name="keywords" content="mmi2,projet-2020-2021,retrowave" />
    <meta name="viewport" content="user-scalable=yes, width=device-width" />
    <meta name="author" content="Alexandre Gattefossé & Killian Druguet" />
    <meta name="publisher" content="IUT DE TARBES - MMI" />
    <title>RetroWave's Trend</title>
    <link rel="stylesheet" href="./data/css/main.css" type="text/css" />
    <script src="./data/js/jquery-3.5.1.min.js"></script>
    <script src="./data/js/popup.js"></script>
    <script src="./data/js/cursor.js"></script>
    <script src="./data/js/loader.js"></script>
    <script src="./data/js/music.js"></script>
    <link rel="icon" href="favicon.png" />
</head>

<body data-barba="wrapper">

    <!-- <div class="load-container">
        <div class="loading-screen"></div>
    </div> -->

    <div class="cursor"></div>

    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <!-- <div class="loader-container">
        <svg version="1.1" class="loader" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
          <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
            <animateTransform 
               attributeName="transform" 
               attributeType="XML" 
               type="rotate"
               dur="1s" 
               from="0 50 50"
               to="360 50 50" 
               repeatCount="indefinite" />
        </path>
      </svg>
    </div> -->

    <audio class="music--audio" src="./data/music/siames-summer-nights.mp3"></audio>
    <div class="music--container">
        <svg version="1.1" class="music__on show" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
            <g>
                <path d="M262.78,57.853c-5.042-2.556-11.091-2.059-15.65,1.284l-116.54,85.462H15c-8.284,0-15,6.716-15,15V352.4
			c0,8.284,6.716,15,15,15h115.59l116.54,85.462c2.622,1.924,5.738,2.904,8.872,2.904c2.313,0,4.637-0.535,6.778-1.62
			c5.043-2.555,8.221-7.728,8.221-13.38V71.233C271.001,65.58,267.823,60.408,262.78,57.853z M241,411.165l-96.629-70.861
			c-2.573-1.887-5.68-2.904-8.871-2.904H30V174.599h105.5c3.19,0,6.298-1.018,8.871-2.904L241,100.833V411.165z" />
                <path d="M445.913,256.002l61.693-61.693c5.858-5.857,5.858-15.355,0-21.213c-5.857-5.857-15.355-5.857-21.213,0L424.7,234.789
			l-61.693-61.693c-5.857-5.857-15.355-5.857-21.213,0c-5.858,5.857-5.858,15.355,0,21.213l61.693,61.693l-61.693,61.693
			c-5.858,5.857-5.858,15.355,0,21.213c2.929,2.929,6.768,4.393,10.606,4.393c3.838,0,7.678-1.465,10.606-4.393l61.693-61.693
			l61.693,61.693c2.929,2.929,6.768,4.393,10.606,4.393c3.838,0,7.678-1.465,10.606-4.393c5.858-5.857,5.858-15.355,0-21.213
			L445.913,256.002z" />
            </g>
        </svg>
        <svg version="1.1" class="music__off hide" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
            <g>
                <path d="M262.8,57.9c-5-2.6-11.1-2.1-15.6,1.3l-116.5,85.5H15c-8.3,0-15,6.7-15,15v192.8c0,8.3,6.7,15,15,15h115.6l116.5,85.5
			            c2.6,1.9,5.7,2.9,8.9,2.9c2.3,0,4.6-0.5,6.8-1.6c5-2.6,8.2-7.7,8.2-13.4V71.2C271,65.6,267.8,60.4,262.8,57.9z M241,411.2
                        l-96.6-70.9c-2.6-1.9-5.7-2.9-8.9-2.9H30V174.6h105.5c3.2,0,6.3-1,8.9-2.9l96.6-70.9V411.2z" />
                <path d="M439.9,57L439.9,57c-3.9-6.7-12.4-9-19.1-5.1l-96.1,55.5c-6.7,3.9-9,12.4-5.1,19.1v0c3.9,6.7,12.4,9,19.1,5.1l96.1-55.5
	                    C441.5,72.3,443.8,63.7,439.9,57z" />
                <path d="M439.9,455L439.9,455c-3.9,6.7-12.4,9-19.1,5.1l-96.1-55.5c-6.7-3.9-9-12.4-5.1-19.1v0c3.9-6.7,12.4-9,19.1-5.1l96.1,55.5
	                    C441.5,439.7,443.8,448.3,439.9,455z" />
                <path d="M350.2,256L350.2,256c0-7.7,6.3-14,14-14l111,0c7.7,0,14,6.3,14,14l0,0c0,7.7-6.3,14-14,14l-111,0
	                    C356.5,270,350.2,263.7,350.2,256z" />
            </g>
        </svg>
    </div>

    <div class="infos">
        <h2 id="a_propos">?</h2>
        <svg class="popup__close hide" width="143" height="147" viewBox="0 0 143 147" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <g filter="url(#filter0_d)">
                <path d="M104.951 54.6003L60.3503 131.85L15.75 54.6003L104.951 54.6003Z" fill="currentColor" />
            </g>
            <defs>
                <filter id="filter0_d" x="0.75" y="0.975281" width="141.501" height="145.875" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                    <feOffset />
                    <feGaussianBlur stdDeviation="7.5" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0.98 0 0 0 0 1 0 0 0 0 0 0 0 0 0.8 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                </filter>
            </defs>
        </svg>

        <svg class="popup__open show" width="113" height="117" viewBox="0 0 113 117" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M89.9506 39.6003L45.3503 116.85L0.750003 39.6003L89.9506 39.6003Z" fill="currentColor" />
        </svg>

        <section class="container-popup hide">
            <div class="left-side">
                <div class="titre">
                    <!--<h2>RetroWave's Trending</h2>-->
                </div>
                <div class="theme">
                    <h3>Le projet</h3>
                    <p>Ce site a été réalisé dans le cadre d'un projet en MMI à Tarbes. Après avoir réalisé notre
                        maquette, le site été développé dans les langages CSS, HTML, et JavaScript. Nous avons tenter de
                        créer un maximum d'animations en CSS.</p>
                </div>
                <div class="roles">
                    <h3>Roles</h3>
                    <ol>
                        <li>Recherches du contenu</li>
                        <li>Maquettage</li>
                        <li>
                            <ul>Développement Web
                                <li>Intégration HTML</li>
                                <li>Intégration CSS</li>
                                <li>Intégration JS</li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <div class="maquette">
                    <table>
                        <tr>
                            <th>
                                <a href="pdf.php?url=./data/img/maquette.pdf" download="Maquette_Retrowave.pdf">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Télécharger la maquette</a>
                                <?php
                                $fichier = $_GET["url"];
                                header('Content-Type: application/pdf');
                                header('Content-Disposition: attachment; filename="nom.pdf"');
                                $pdf = file_put_contents($temp, file_get_contents($fichier));
                                echo $pdf;
                                ?>
                            </th>
                        </tr>
                    </table>
                </div>
                <!-- <button style="margin-left: 30%; margin-top: 10%;">Télécharger la maquette</button> -->
            </div>
            <div class="right-side">
                <div class="right-side_container">
                    <div class="wrapper">
                        <div class="inner">
                            <div class="card card--1">
                                <img src="./data/img/alex.jpg" alt="alex">
                                <div class="content">
                                    <h2>Alex Gattefossé</h2>
                                    <h3>UI/UX, Design</h3>
                                    <p>
                                        Développement page d'acceuil (HTML, CSS, JS), maquettage, modification du
                                        curseur,
                                        intégration de la musique, loader et HTML/CSS/JS page principale,
                                        responsive. </p>
                                </div>
                            </div>
                            <div class="card card--2">
                                <img src="./data/img/kiki.png" alt="kikinou">
                                <div class="content">
                                    <h2>Killian Druguet</h2>
                                    <h3>Design</h3>
                                    <p>
                                        HTML/CSS de la 2e page, Maquettage, recherche du contenu, finitions
                                        CSS de la page d'accueil, réalisations de GIF sur After Effects, responsive.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <button class="active first"></button>
                        <button class="second"></button>
                    </div>
                </div>
            </div>

        </section>

    </div>

    <div class="logo-wrapper">
        <h1 class="title_retro" data-text="RetroWave's">RetroWave's</h1>
        <h2 class="title_trend" data-text="Trending">Trending</h2>
    </div>

    <img class="bg--mountains" src="./data/img/bg.svg" alt="background">

    <div class="link">
        <a href="./contenu.php">
            Découvrez la tendance
        </a>
    </div>


    <div id="bg" class="event-horizon">
        <div id="plane-wrapper">
            <div id="plane">
                <div id="segments">
                    <div id="horizontal-lines">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <div id="vertical-lines">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>