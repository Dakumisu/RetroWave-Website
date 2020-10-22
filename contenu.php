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
    <script src="./data/js/cursor.js"></script>
    <script src="./data/js/loader.js"></script>
    <script src="./data/js/music.js"></script>
    <link rel="icon" href="favicon.png" />
</head>

<body class="body--contenu">

    <div class="cursor"></div>

    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <audio class="music--audio" src="./data/music/siames-summer-nights.mp3"></audio>
    <div class="music--container">
        <svg version="1.1" class="music__on show" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
            style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
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

        <svg version="1.1" class="music__off hide" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
            style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="currentColor">
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

    <div class="link link-contenu">
        <a href="./index.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Accueil
        </a>
    </div>

    <section class="container">
        <section class="container--slide_1">
            <div id="vidéo_accueil">
                <img src="./data/img/vw.gif" alt="image de fond">
            </div>
        </section>


        <div class="split_slide split_slide--trait split_slide--trait_1"></div>
        <svg class="split_slide--triangle split_slide--triangle_1" viewBox="0 0 67 83" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5 83L4.48815 50L62.5119 50L33.5 83Z" />
            <path d="M33.5 44L4.48815 11L62.5119 11L33.5 44Z" />
        </svg>
        <div class="split_slide split_slide--trait split_slide--trait_2"></div>


        <section class="container--slide container--slide_2">
            <h5>This is RetroWave</h5>
            <div class="content_texte">
                <p class="text text-1">
                    La synthwave, également appelée retrowave, est un genre musical et artistique ayant émergé au
                    début des années 2010, influencé par la musique et les films des années 1980. En 2005, le musicien
                    français David
                    Grellier se lance dans la musique sous le nom de College. En 2008, il sort un EP intitulé Teenage
                    Color
                    qui, par sa structure, sa progression d'accords et son caractère sonore, est très caractéristique de
                    la
                    synthwave, et peut être considéré comme un point de départ du genre actuel. Dans une entrevue,
                    Grellier
                    explique que sa musique s'inspire « des soaps des années '80 et d'un esthétisme que j'adore tout
                    particulièrement : la couleur, les images, les films et le soleil – les images de Los Angeles, de
                    Chicago et de toutes les autres villes [...] qui continuent à me fasciner. » En 2011, il fait
                    paraître
                    l'album Northern Council et la même année A Real Hero avec Electric Youth, qui est présent dans le
                    film Drive, ce qui attirera davantage d'attention du public envers la musique synthwave.
                </p>
            </div>
            <div class="background">
                <div id="filtre">
                    <img src="./data/img/retrowave_bg.png" alt="image de fond">
                </div>
            </div>
        </section>


        <div class="split_slide split_slide--trait split_slide--trait_3"></div>
        <svg class="split_slide--triangle split_slide--triangle_2" viewBox="0 0 67 83" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5 83L4.48815 50L62.5119 50L33.5 83Z" />
            <path d="M33.5 44L4.48815 11L62.5119 11L33.5 44Z" />
        </svg>
        <div class="split_slide split_slide--trait split_slide--trait_4"></div>


        <section class="container--slide container--slide_3">
            <img class="vroum" src="./data/img/voiture.png" alt="voiture">
            <div class="content_texte">
                <p class="text text-2">Musicalement, la synthwave s'inspire de la new wave et des films, des dessins
                    animés et des
                    émissions de télévision issus des années 1980. Des compositeurs tels que Tangerine Dream,
                    Vangelis et John Carpenter, sont fréquemment cités comme influences. Le style est
                    principalement instrumental, et se compose le plus souvent d'éléments sonores issus des années
                    1980 comme les batteries électroniques et les basses de synthétiseur analogique. Cependant, la
                    synthwave utilise également des éléments modernes, comme les lignes de basses side-chain, issus
                    des genres modernes de musique électronique comme l'electro house.</p>
                <p class="text text-3">Esthétiquement, la synthwave donne souvent une perspective rétro-futuriste,
                    imitant la
                    science-fiction et les films des années 1980 . Des exemples de cette esthétique sont
                    utilisés dans des films ou des séries tels que Tron : L'Héritage, Drive, Blade Runner, Time
                    Out ou Stranger Things ainsi que des jeux vidéo tels que Power Drive 2000, Grand Theft
                    Auto: Vice City, Hotline Miami (les bandes originales des deux opus comptent des artistes
                    phares de la Synthwave comme Scattle, Mega Drive, Perturbator ou encore Carpenter Brut) ou Far
                    Cry 3: Blood Dragon.</p>
            </div>
            <div class="background">
                <div id="filtre">
                    <img src="./data/img/retrowavecar_bg.png" alt="image de fond">
                </div>
            </div>

        </section>

        <div class="split_slide split_slide--trait split_slide--trait_5"></div>
        <svg class="split_slide--triangle split_slide--triangle_3" viewBox="0 0 67 83" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M33.5 83L4.48815 50L62.5119 50L33.5 83Z" />
            <path d="M33.5 44L4.48815 11L62.5119 11L33.5 44Z" />
        </svg>
        <div class="split_slide split_slide--trait split_slide--trait_6"></div>


        <section class="container--slide container--footer">
            <h2 style="font-size: 3vh;">Nous contacter</h2>
            <form action="" method="POST">
                <div class="form1">
                    <div class="col">
                        <div class="inputbox">
                            <input type="text" name="" required="required">
                            <span class="text">Nom</span>
                            <span class="line"></span>
            <div class="container--footer_form">

                <h2>Nous contacter</h2>
                <form action="" method="POST">
                    <div class="form1">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="" required="required">
                                <span class="text">Nom</span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inputbox">
                                <input type="email" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}"
                                    name="mail" required="required">
                                <span class="text">E-mail</span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form1">
                        <div class="col">
                            <div class="inputbox">
                                <input type="text" name="objet" required="required">
                                <span class="text">Objet</span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="inputbox textarea">
                                <textarea rows="8" name="msg" placeholder=""></textarea>
                                <span class="text">Message</span>
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form1">
                    <div class="col">
                        <input type="submit" value="Envoyer">
                    </div>
                </div>
            </form>

            <div class="login-box">
                <h2 style="font-size: 2vh;">Nous contacter</h2>
                <form action="" method="POST">
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Nom</label>
                    </div>
                    <div class="user-box">
                        <input type="email" name="" required="">
                        <label>E-mail</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Objet</label>
                    </div>
                    <div class="user-box">
                        <input type="text" name="" required="">
                        <label>Message</label>
                    <div class="form1">
                        <div class="col col__button">
                            <button name="send" class="text">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Submit
                            </button>
                        </div>
                    </div>
                </form>

                <?php
            if (isset($_POST['send'])) {
                $destinataire = "dakumisu.psd@gmail.com";
                $objet = "Objet : " . $_POST['objet'];
                $mail = "Provenant de : " . $_POST['mail'];
                $msg = $_POST['msg'];
                if (isset($msg) && isset($objet) && isset($mail) && $msg != '' && $objet != '' && $mail != '') {
                    mail($destinataire, $objet, $msg, $mail);
                    echo '<p>Votre message a bien été envoyé !</p>';
                } else {
                    echo "<p>Votre message n'a pas pu être envoyé, réessayez !</p>";
                }
            }
            ?>
            </div>
        </section>
    </section>

</body>

</html>