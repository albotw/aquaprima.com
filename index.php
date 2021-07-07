<?php
require_once("PHP/token.php");
session_start();
token::generate();
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mettez les bienfaits de l'eau d'orage à votre disposition">
    <title>AQUA-PRIMA</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/pure.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <div id="layout">
        <!-- Menu toggle -->
        <a href="#menu" id="menuLink" class="menu-link">
            <!-- Hamburger icon -->
            <span></span>
        </a>

        <div id="menu">
            <div class="pure-menu">
                <span class="pure-menu-heading">Menu</span>

                <ul class="pure-menu-list">
                    <li class="pure-menu-item pure-menu-selected">
                        <a href="#main" class="pure-menu-link">Accueil</a>
                    </li>
                    <li class="pure-menu-item menu-item-divided">
                        <a href="#aqualustral" class="pure-menu-link">Aqualustral</a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="#bains" class="pure-menu-link">Bains</a>
                    </li>
                    <li class="pure-menu-item ">
                        <a href="#contact" class="pure-menu-link">Contact</a>
                    </li>

                    <li class="pure-menu-item menu-item-divided">
                        <a href="#historique" class="pure-menu-link">Historique</a>
                    </li>

                    <li class="pure-menu-item">
                        <a href="#principe" class="pure-menu-link">Principe</a>
                    </li>

                    <li class="pure-menu-item">
                        <a href="#vertus" class="pure-menu-link">Vertus</a>
                    </li>

                </ul>
            </div>
        </div>

        <div id="main">
            <div class="header">
                <!--
                <h1>AQUA-PRIMA</h1>
                <h2>Les bienfaits de l'eau d'orage pour votre santé</h2> 
                -->
                <img src="IMG/Logo Aquaprima.svg" class="pure-img-responsive" id="logo" />
            </div>

            <div class="content">
                <h2 class="content-subhead titre">Bienvenue sur le site d'Aqua-Prima !</h2>
                <p>
                    Aqua-Prima, entreprise fondée en 1985, vous propose une technologie unique au monde. Résultant de la
                    fusion des tranditions les plus anciennes avec la science la plus moderne, nous vous proposons avec
                    nos produits de bénéficier des bienfaits de l'eau d'orage.
                </p>

                <h2 class="content-subhead titre" id="aqualustral">Aqualustral</h2>
                <p>
                    Nous fabriquons et commercialisons l'Aqualustral.
                    <br />
                    L'Aqualustral va vous permettre de retrouver l'équilibre énergétique optimum pour protéger au mieux votre capital santé.
                    <br />
                    L'Aqualustral 386 se compose de deux pichets d'une contenance de 1,5 Litres et de deux couvercles en grès de Puisaye tournés et cuits selon les méthodes traditionnelles.
                    La très faible consommation de courant du générateur d'éclair lumineux intégré à l'un des couvercles permet de le laisser relié en permanence au réseau électrique avec une prise de terre.
                </p>

                <div id="slideshow-container">
                    <a class="prev"><i class="fas fa-chevron-left"></i></a>
                    <div id="slideshow">
                        <img class="pure-img-responsive slide fade" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Slide 1">
                        <img class="pure-img-responsive slide fade" src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Slide 2">
                        <img class="pure-img-responsive slide fade" src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg" alt="Slide 3">
                        <img class="pure-img-responsive slide fade" src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Slide 4">
                        <div class="slidelist">
                            <a class="dot" value="1"><i class="fas fa-circle"></i></a>
                            <a class="dot" value="2"><i class="fas fa-circle"></i></a>
                            <a class="dot" value="3"><i class="fas fa-circle"></i></a>
                            <a class="dot" value="4"><i class="fas fa-circle"></i></a>
                        </div>
                    </div>
                    <a class="next"><i class="fas fa-chevron-right"></i></a>
                </div>


                <h2 class="content-subhead titre" id="bains">Bains</h2>
                <p class="message">
                    Actuellement, les bains ne sont pas disponibles car un nouveau prototype est en cours de réalisation.
                </p>

                <h2 class="content-subhead titre" id="contact">Prenez contact avec nous !</h2>
                <p>
                    Notre adresse e-mail: contact(arobase)aqua-prima(point)com <br />
                    Notre numéro de téléphone: 06 80 95 06 13
                </p>

                <p>
                    Ou sinon vous pouvez utiliser ce formulaire pour nous envoyer un message
                <form class="pure-form pure-form-aligned" id="mailform">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="nom">Nom: </label>
                            <input class="input" type="text" id="nom" />
                        </div>
                        <div class="pure-control-group">
                            <label for="prenom">Prénom: </label>
                            <input class="input" type="text" id="prenom" />
                        </div>
                        <div class="pure-control-group">
                            <label for="email">Email: </label>
                            <input class="input" type="email" id="email" required />
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="titre">Titre:</label>
                            <input name="titre" class="input" type="text" class="pure-input-1" id="titre" required />
                        </div>
                        <div class="pure-control-group">
                            <label for="message">Message:</label>
                            <textarea name="message" class="pure-input-1" required id="message"></textarea>
                        </div>

                        <div class="pure-control-group">
                            <!--
                            <label for="checkRGPD" class="pure-checkbox">
                                J'ai pris conscience que les informations que
                                je fournis ne seront utilisées que par AquaPrima a des fins commerciales et ne seront
                                pas transmises à des tiers.
                                <input type="checkbox" id="checkRGPD" />
                            </label>
                        -->
                            <button type="button" id="sendmail" class="pure-button pure-button-primary center">Envoyer</button>
                        </div>
                    </fieldset>

                </form>
                </p>

                <h2 class="content-subhead titre" id="historique">Historique</h2>
                <p>
                    L'équipe Aqua-Prima s'est basée sur plusieurs études et travaux réalisés par différents chercheurs.
                    Entre autres, les études de naturopathie de Robert Masson, les travaux du physicien français Rodolphe Lavinay qui est le premier à avoir utilisé des flashs lumineux pour donner à l'eau "habituelle" ses qualités thérapeutiques.
                    Forts de ce savoir, nous avons crée les bains thérapeutiques Aqua-Prima en 1985. Durant toutes ces années les résultats s’accumulent. nous multiplions les
                    expériences et la recherche pour aboutir à un produit disponible pour tous: l'Aqualustral.
                </p>

                <h2 class="content-subhead titre" id="principe">Principe</h2>
                <p>
                    Les anciens, conscients de l'action de la pluie d'orage et de son action énergétique, savaient s'y exposer pour se vivifier.
                    Ils stockaient cette eau dans des récipients en argile ou en grès afin de ne pas altérer sa "qualité énergétique".
                    <br />
                    L'aqualustral reprend ces principes et les rend accessibles à tous. L'eau, sollicitée par une succession d'éclairs lumineux adaptés, emmagasine (comme la pluie d'orage) et rayonne (fortement amplifiée) ce que l'on peut appeler "l'énergie vitale" ou "l'information biologique" dont les organismes vivants ont besoin pour fonctionner.
                </p>

                <h2 class="content-subhead titre" id="vertus">Vertus</h2>
                <p>
                    La consommation de l'eau d'un pichet Aqualustral réhydrate le corps en profondeur et prévient l'apparition de nombreuses maladies.
                    Les utilisateurs d'aqualustral ont constaté de multiples bienfaits, par exemple:
                <ul>
                    <li>Le renforcement des défenses immunitaires</li>
                    <li>la diminution des effets secondaires des thérapies les plus lourdes</li>
                    <li>l’assouplissement général du corps</li>
                    <li>le bien-être psychique</li>
                </ul>
                </p>
            </div>

        </div>
        <div class="footer">
            <span>Fait avec <a href="https://purecss.io/">Pure.css</a></span>
            <span>&copy; AQUA - PRIMA 2021</span>
        </div>
    </div>

    <div id="csrf_token"><?php echo token::get(); ?></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="JS/ui.js" defer></script>
    <script src="JS/pure.js" defer></script>


</body>

</html>