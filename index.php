<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><img src="img/MILYNE_brand_usage_#1_created_by_logaster.png" alt="logo">Milyne's PortFolio</title>

    <!-- Link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Link fontawesome icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Link Swiper's CSS-->
    <link rel="stylesheet" type="text/css" href="packages/swiper-bundle.min.css">

    <!-- Link to CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!--Header comprenant la navbar / menu --------------------->
    <header class="header">
        <!--navigation----------------->
        <nav class="navbar">
        <!--bars-icon-------------------->
            <!--<div class="toggle"></div>-->
            <!--logo----------------->
            <figure>
                <a href="#formation" class="logo">Milyne</a>
                <figcaption class="subtitle">Développeuse Web Junior</figcaption>
            </figure>
            <!--menu-------------------------->
            <ul class="menu">
                <li><a class="active" href="#">Réalisations</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#contact">Contactez-moi</a></li>
            </ul>
        </nav>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <!--permets le responsive de la barre de navigation en créant un burger menu (toggle navigation) ----------------------->
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <!-- Menu principal --------------------------->
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="#">Réalisations<span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Formation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contactez-moi</a></li>
                </ul>
            </div>
        </nav> -->

    </header>
    <!-- Swiper -->
    <section class="swiper-container">
        <div class="swiper-wrapper">
            <!-- projet 1 : Node JS application "To do list"--------------------------------------->
            <div class="swiper-slide" style="background-image:url(img/landscape_1920.jpg)">
                <!-- Main-slider-box------------------>
                <section class="slider-box">
                    <!-- top section------------------------------>
                    <div class="top-section">
                        <!--name---------------------------->
                        <a href="pages/todolist.html" target="_blank">
                            <div class="name">
                                <h1>Projet "TO DO LIST"</h1>
                                <p>Petite application réalisé en NodeJS</p>
                            </div>
                        </a>
                        <!-- détails------------------------->
                        <div class="details">
                            <p>A travers, cette mini-application, je réalise une "to-do-list" avec les fonctionnalitées suivantes:
                                <ul>
                                    <li><i class="fas fa-plus-circle"></i>La possibilité d'ajouter une tâche.</li>
                                    <li><i class="fas fa-pen-alt"></i>Une modification à faire? Bien sûre!</li>
                                    <li><i class="fas fa-minus-circle"></i>Et enfin la suppression de celle-ci.</li>
                                </ul>
                            </p>
                        </div>
                        <!--picture ou graphique---------------------------------->
                        <a href="pages/todolist.html" target="_blank" class="picture"><img src="img/list_320_transp.png" class="rounded-circle"></a>
                    </div>
                    <!-- bottom-section-------------------->
                    <div class="bottom-section">
                        <!--left-side------------------------>
                        <div class="left-side">
                            <!--follow-section--------------------->
                            <div class="follow">
                                <h1>Suivez-moi</h1>
                                <!--social-icons------------>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/marie-emelyne-horatius-3b8b74106" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://github.com/Myline1991" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                            <div class="updloadCv">
                                <h1>CV téléchargeable</h1>
                                <!--file-upload-icons------------>
                                <div class="resume">
                                    <a href="file/CV-marie-emelyne-horatius-developpeur-web-junior.pdf" download="CV"><i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--right-side : techno utilisé pour le projet ------------------------>
                        <div class="right-side">
                            <div>
                                <div class="techno">
                                    <h1>Compétences utilisées pour ce projet : </h1>
                                </div>
                                <div class="portfolio">
                                    <!--1-------------------------------->
                                    <div class="p-img"><i class="fab fa-html5"></i></div>
                                    <!--2-------------------------------->
                                    <div class="p-img"><i class="fab fa-css3-alt"></i></div>
                                    <!--3-------------------------------->
                                    <div class="p-img"><i class="fab fa-bootstrap"></i></div>
                                    <!--4-------------------------------->
                                    <div class="p-img"><i class="fab fa-node"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- projet 2 : Site web: "Lang'Asie" (en cours) --------------------------------------->
            <div class="swiper-slide" style="background-image:url(img/landscape_1920.jpg)">
                <!-- Main-slider-box------------------>
                <section class="slider-box">
                    <!-- top ------------------------------>
                    <div class="top-section">
                        <!--name---------------------------->
                        <a href="pages/langasie.html" target="_blank">
                            <div class="name">
                                <h1>Projet "Lang'Asie"</h1>
                                <p>Projet de fin de formation, en cours de réalisation.</p>
                            </div>
                        </a>
                        <!-- détails------------------------->
                        <div class="details">
                            <p>Site web permettant de créer des lexiques personnalisés.</p>
                            <p>Passionnée par l'Asie et les langues, je réalise un site web permettant de créer des listes de vocabulaire dans 3 langues au choix (chinois, coréen et japonais).</p>
                        </div>
                        <!--picture ou graphique---------------------------------->
                        <a href="pages/langasie.html" target="_blank" class="picture"><img src="img/pandaR.png" class="rounded-circle"></a>
                    </div>
                    <!-- bottom-section-------------------->
                    <div class="bottom-section">
                        <!--left-side------------------------>
                        <div class="left-side">
                            <!--follow-section--------------------->
                            <div class="follow">
                                <h1>Suivez-moi</h1>
                                <!--social-icons------------>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/marie-emelyne-horatius-3b8b74106" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://github.com/Myline1991" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                            <div class="updloadCv">
                                <h1>CV téléchargeable</h1>
                                <!--file-upload-icons------------>
                                <div class="resume">
                                    <a href="file/CV-marie-emelyne-horatius-developpeur-web-junior.pdf" download="CV"><i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--right-side------------------------>
                        <div class="right-side">
                            <div>
                                <div class="techno">
                                    <h1>Compétences utilisées pour ce projet : </h1>
                                </div>
                                <div class="portfolio">
                                    <!--1-------------------------------->
                                    <div class="p-img"><i class="fab fa-html5"></i></div>
                                    <!--2-------------------------------->
                                    <div class="p-img"><i class="fab fa-css3-alt"></i></div>
                                    <!--3-------------------------------->
                                    <div class="p-img"><i class="fab fa-bootstrap"></i></div>
                                    <!--4-------------------------------->
                                    <div class="p-img"><i class="fab fa-js-square"></i></div>
                                    <!--5-------------------------------->
                                    <div class="p-img"><i class="fab fa-php"></i></div>
                                    <!--6------------------------------->
                                    <div class="p-img"><i class="fab fa-symfony"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- projet 3 : Application mobile du site web 'Lang'Asie --------------------------------------->
            <div class="swiper-slide" style="background-image:url(img/landscape_1920.jpg)">
                <!-- Main-slider-box------------------>
                <section class="slider-box">
                    <!-- top ------------------------------>
                    <div class="top-section">
                        <!--name---------------------------->
                        <a href="pages/reactnative.html" target="_blank">
                            <div class="name">
                                <h1>Projet "Application mobile"</h1>
                                <p>Application réalisé avec REACT-NATIVE</p>
                            </div>
                        </a>
                        <!-- détails------------------------->
                        <div class="details">
                            <p>Cette application est en lien avec le site web, réel exercice pratique, je reproduis le projet "Lang'Asie" en version mobile.</p>
                        </div>
                        <!--picture ou graphique---------------------------------->
                        <a href="pages/reactnative.html" target="_blank" class="picture"><img src="img/icon_320_transp.png" class="rounded-circle"></a>
                    </div>
                    <!-- bottom-section-------------------->
                    <div class="bottom-section">
                        <!--left-side------------------------>
                        <div class="left-side">
                            <!--follow-section--------------------->
                            <div class="follow">
                                <h1>Suivez-moi</h1>
                                <!--social-icons------------>
                                <div class="social">
                                    <a href="https://www.linkedin.com/in/marie-emelyne-horatius-3b8b74106" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://github.com/Myline1991" target="_blank"><i class="fab fa-github"></i></a>
                                </div>
                            </div>
                            <div class="updloadCv">
                                <h1>CV téléchargeable</h1>
                                <!--file-upload-icons------------>
                                <div class="resume">
                                    <a href="file/CV-marie-emelyne-horatius-developpeur-web-junior.pdf" download="CV"><i class="fas fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--right-side : techno utilisé dans le projet ------------------------>
                        <div class="right-side">
                            <div>
                                <div class="techno">
                                    <h1>Compétences utilisées pour ce projet : </h1>
                                </div>
                                <div class="portfolio">
                                    <!--1-------------------------------->
                                    <div class="p-img"><i class="fab fa-js-square"></i></div>
                                    <!--2-------------------------------->
                                    <div class="p-img"><i class="fab fa-react"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-black">points</div>
        <!-- Add Arrows -->
        <div class="button-container">
            <div class="button"><div class="swiper-button-next swiper-button-white"></div></div>
            <div class="button"><div class="swiper-button-prev swiper-button-white"></div></div>
        </div>
    </section>

    <!-- Parcours professionnel -->
    <section class="professionnel">
        <div class="savoir-plus">
                <p id="formation">En savoir <i class="fas fa-plus-circle"></i>?</p>
        </div>
        <div class="next">
            <p><img src="img/alphabet-2001975_640.png" class="image-flottante" alt="image flottante"/>eb développeur en herbe, je prépare le titre professionnel de <span class="developer">"développeur web et web mobile"</span> à Next Formation. Cet apprentissage intensif se finalise avec un stage de 2 mois au sein d'une entreprise à partir du 2 novembre 2020 au 4 janvier 2021. Je vous invite à me contacter pour plus d'informations sur mes compétences et mes aspirations professionnelles.</p>
        </div>
        <div class="formation">
            <h2>Ma formation</h2>
            <ul>
                <li><strong>Titre professionnel développeur web et web mobile</strong></li>
                <li>Centre Next Formation</li>
                <li>Depuis le 06 juin 2020 - en cours</li>
            </ul>
        </div>
    </section>

    <!-- Contactez-moi -->
    <div class="back-contact">
        <form id="contact" action="contact.php" method="post">
            <div class="form-title">
                <h1>Contactez-moi</h1>
                <p>Vous pouvez m'adresser votre message, ci-dessous, pour des suggestions d'améliorations ou des encouragements !</p>
            </div>
            <div class="form-top">
                <input type="text" name="nom" value="" placeholder="Entrez votre nom ici"/>
                <input type="text" name="mail" value="" placeholder="@" />
            </div>
            <div class="form-bottom">
                <textarea type="text" name="message" value="" placeholder="Entrez votre message ici..."></textarea>
                <input class="send-form" type="submit" name="envoyer" value="Envoyer" />
            </div>
        </form>
    </div>

    <footer>
        <p class="copyright">&copy Myline.com - 2020 - <?php echo DateTime('Y') ?></p>
    </footer>

    <!-- link to Swiper JS -->
    <script type="text/javascript" src="packages/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="js/swiper.js"></script>

    <!-- Link to JQuery, Jpopper et JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
