<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTDR | Acceuil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran|Montserrat|Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="shortcut icon" href="media/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="contenuPage" id="top">
        <nav id="nav">
            <a class="logo" id="hautdepage2"><i>UTDR</i></a> <!-- Logo -->
            <input id="menu-btn" type="checkbox"/> <!-- Le bouton pour dérouler le menu -->
            <label id="menu-icon" for="menu-btn"><span id="navicon"></span></label> 
            <ul id="menu"> <!-- Le menu en lui même, étant soit en ligne, soit en colonne -->
                <li><a id="hautdepage">Accueil</a></li>
                <li><a id="reglement">Règlement</a></li>
                <li><a id="faqbas">FAQ</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>  
        <header id="headerIndex">
            <div id="carousel" class="owl-carousel owl-theme"> <!-- Structure du carousel, simplifiée grace à plugin Owl Carousel -->
                <div class="item"><img src="media/feudecamp.png" alt=""></div>
                <div class="item"><img src="media/interieur.png" alt=""></div>
                <div class="item"><img src="media/regles.png" alt=""></div>    
            </div>
            <div id="contenu">
                <article>
                    <h1>Bienvenue sur le serveur UTDR !</h1>
                    <p><i>(Serveur minecraft du wiki Undertale / Deltarune)</i></p>  
                </article>
            </div>
        </header>
        <div id="contenusite">
            <?php
                $color = "orange";
                $statut = "Il y a une erreur dans le code ! Contactez Théo#2422.";
                $fp = @fsockopen("109.239.146.90", "26965", $errno, $errstr, 1);
                if($fp >= 1){ 
                    $color = "green";
                    $statut = "Le serveur est en ligne !";
                }
                else{
                    $color = "red";
                    $statut = "Le serveur est éteint :c";
                }
            ?> 
            <section id="infos">
                <p>Ip : utdr.nitroserv.eu <i title="<?php echo $statut; ?>" class="material-icons" style="color: <?php echo $color; ?>;">fiber_manual_record</i></p>
                <p>Version : 1.14.<b>2</b></p>
            </section>
            <section id="regles">
                <h1>Règlement :</h1>
                <ol>
                    <li>De manière générale, les règles présentes sur le discord du wiki s’appliquent aussi sur le serveur. À savoir des règles de bonne entente ! Donc sois sympa envers les autres joueurs ! </li>
                    <li>Le grief (action de détruire / dégrader la construction d’autrui sans son accord) ainsi que le vol sont tout simplement interdits, sous peine d’un bannissement immédiat et définitif.</li>
                    <li>Si vous avez une question, ou que vous voyez un comportement nocif au serveur, n’hésitez pas à contacter l’administration que ce soit sur le serveur ou directement sur discord. Cela évite que des personnes du staff soient tout le temps connectées sur le serveur à surveiller si quelque chose se passe mal au lieu de juste s’amuser !</li>
                    <li>De préférence, ne vivez pas trop éloigné des autres joueurs. Nous sommes une communauté, ce serait dommage de ne pas se croiser ! Il y a déjà un projet de petite ville en construction juste à côté du spawn, alors n’hésitez pas à vous y installer !</li>
                    <li>De plus nous favorisons tout type d’entraide envers les autres joueurs ! Alors n’hésitez pas à partager vos ressources ou faire du commerce / troc entre vous !</li>
                    <li>L’équipe d’animation du discord est aussi de la partie dans le serveur ! Des animations seront donc à prévoir (mini-jeux, tournois, évènements coopératifs) et des structures permettant d’organiser ce genre d'événements seront mise à disposition dans les  prochains jours. Vous serez libre de les utiliser en dehors des événements (bien sûr, en respectant toute les règles ci-dessus) ! N’hésitez pas aussi à nous soumettre vos idées ! (Pour vous tenir au courant des prochains évènements, aller voir le chanel #planning-animations et n’hésitez pas à demander à un admin le rôle pingAMine !</li>
                    <li>Respectez l’environnement et le paysage ! Le monde de Minecraft est bien beau, alors ne le dégradez pas ! Par exemple quand vous coupez un arbre, enlevez l’intégralité de son feuillage ! Et si vous pouvez pensez à planter !</li>
                </ol>
            </section>
            <section id="faq">
                <h1>FAQ :</h1>
                <ul>
                    <li><h2>Quelle est l'ip du serveur ?</h2>C'est utdr.nitroserv.eu !</li>
                    <li><h2>Le serveur est en quelle version ? Pourquoi ?</h2>Il est en 1.14.2 pour le moment, mais attendez-vous à ce qu'il passe assez vite en 1.14.3 !</li>
                    <li><h2>Je peux être admin ?</h2>Bien sûr ! Je te laisse remplir ce petit formulaire en cliquant <a href="contact.html">ici</a> !</li>
                </ul>
            </section>
        </div>
    </div>
    <footer>
        <p>© 2019 - Fait par <a href="https://www.theomigeat.com/">Théo</a> !</p>
    </footer>
</body>
<script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script> <!-- Permet de préciser que l'on utilise Jquerry -->
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script> <!-- Charge le plugin de Owl Carousel -->
    <script>
        var owl = $('.owl-carousel'); 
        owl.owlCarousel({
            items:1, //Précise qu'une seule image est affiché à la fois à l'écran
            loop:true, //Fait en sorte que le carousel "tourne sur lui même"
            autoplay:true, //Active la lecture automatique
            autoplayTimeout: 6000, //Passe à l'image suivante en 7000ms 
            autoplayHoverPause:false, //Enlève le fait de pouvoir mettre en pause le carousel en passant la souris dessus
            dots: false, //Enlève le menu de navigation situé par défault en bas
            smartSpeed: 2000 //Règle la vitesse de défilement sur 2000ms
        });
    </script>
    <script>
            window.onscroll = () => {
            const nav = document.querySelector('#nav');
            if(this.scrollY <= 50) nav.className = ''; else nav.className = 'scroll';
           
            const nav2 = document.querySelector('#menu');
            if(this.scrollY <= 50) nav2.className = ''; else nav2.className = 'scroll';
                };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function (){
            $("#hautdepage").click(function(){
                $('html, body').animate({
                    scrollTop: $("#top").offset().top
                }, 500);
            });
        });

        $(document).ready(function (){
            $("#hautdepage2").click(function(){
                $('html, body').animate({
                    scrollTop: $("#top").offset().top
                }, 500);
            });
        });

        $(document).ready(function (){
            $("#reglement").click(function(){
                $('html, body').animate({
                    scrollTop: $("#regles").offset().top
                }, 600);
            });
        });

        $(document).ready(function (){
            $("#faqbas").click(function(){
                $('html, body').animate({
                    scrollTop: $("#faq").offset().top
                }, 700);
            });
        });
    </script>
</html>