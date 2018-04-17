<!DOCTYPE HTML>

<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <?php
    function Age($date_naissance)
    {
        $am = explode('/', $date_naissance);

        $an = explode('/', date('d/m/Y'));


        if(($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0])))
            return $an[2] - $am[2];

        return $an[2] - $am[2] - 1;
    }
    $datenaiss = '24/07/1989';
    $age = Age($datenaiss);
    ?>
    <title>Baptiste FESSARD</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
            <h1 id="title">Baptiste FESSARD</h1>
            <p>Analyste programmeur</p>
            <p><?php echo $age.' ans';?></p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

            -->
            <ul>
                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Introduction</span></a></li>
                <li><a href="#experience" id="experience-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Expériences professionnelle</span></a></li>
                <li><a href="#portfolio" id = "portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-book">Portfolio</span></a></li>
                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">A propos de moi</span></a></li>
                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>

            </ul>
        </nav>

    </div>

    <div class="bottom">

        <!-- Social Icons -->
        <ul class="icons">
            <li><a href="https://www.linkedin.com/in/baptiste-fessard-8b37a189/ " class="icon fa-linkedin" target="_blank"><span class="label">Linkedin</span></a></li>
            <li><a href="https://github.com/bfessard" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
            <li><a href="mailto:baptistefessard@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
            <li><a href="#contact" class="icon fa-map-marker"><span class="label">Adresse</span></a></li>
            <li><a href="#contact" class="icon fa-mobile-phone"><span class="label">Téléphone</span></a></li>



        </ul>

    </div>

</div>

<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">

            <header>
                <h2 class="alt">Bienvenue !</h2>
                <p>Technicien de laboratoire depuis 2012, je souhaite aujourd'hui me reconvertir dans le secteur de l'informatique.<br/> Intégrant une école en alternance en Septembre 2018,le
                    <a href="https://www.cesi-alternance.fr/formation/informatique_numerique/infcdl-developpeur_informatique_en_alternance" target="_blank">CESI</a>, je recherche actuellement un poste
                    en tant que développeur.
                    <br/>  </p>
            </header>

            <footer>
                <a href="#experience" class="button scrolly">Mon expérience</a>
            </footer>

        </div>
    </section>

    <!-- Expérience -->
    <section id="experience" class="two">
        <div class="container">

            <header>
                <h2>Expériences professionnelle</h2>
            </header>

            <p>Mes expériences m'ont permis d'obtenir une maitrise des différentes étapes de développement d'un projet.</p>

            <div class="row">
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <h4>Avril 2017 - Juillet 2017</h4> <br/>
                        <a href="http://www.sunchemical.com/" class="image fit" target="_blank"><img src="images/510_main.jpg" alt="" /></a>
                        <header>
                            <h2>Laboratoire recherche et développement encres </h2>
                        </header>
                    </article>
                </div>
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <h4>Juin 2014 - Avril 2017</h4> <br/>
                        <a href="http://www.mader-group.com/" class="image fit" target="_blank"><img src="images/Maeder.png" alt="" /></a>
                        <header>
                            <h2>Laboratoire recherche et développement secteur électrotechnique</h2>
                            <p>Développement d'une nouvelle gamme de vernis d'imprégnation pour pièces automobiles</p>

                        </header>
                    </article>
                </div>
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <h4>Juillet 2012 - Novembre 2013</h4> <br/>
                        <a href="http://fr.ppgrefinish.com/fr/" class="image fit" target="_blank"><img src="images/PPG_Logo.svg.png" alt="" /></a>
                        <header>
                            <h2>Laboratoire recherche et développement encres et vernis</h2>
                            <h4>Conception d'une nouvelle gamme d'encres destinée à l'emballage métallique.</h4>

                        </header>
                    </article>
                </div>


            </div>

            <h2>Stages</h2>
            <div class="row">
                <div class="6u 12u$(mobile)">
                    <article class="item">
                        <h4>2012</h4>
                        <a href="http://www.sacolor.fr/" class="image fit" target="_blank"><img src="images/SACOLOR.JPG" alt="" /></a>
                        <header>
                            <h2>Laboratoire innovation</h2>
                            <h4>Conception et formulation d’une nouvelle gamme d’encre à faible migration</h4>
                        </header>
                    </article>
                </div>
                <div class="6u 12u$(mobile)">
                    <article class="item">
                        <h4>2010</h4>
                        <a href="http://fr.ppgrefinish.com/fr/" class="image fit" target="_blank"><img src="images/PPG_Logo.svg.png" alt="" /></a>
                        <header>
                            <h2>Laboratoire recherche et développement encres et vernis</h2>
                            <h4>Mise en place d'un appareil de mesure</h4>
                        </header>
                    </article>
                </div>
            </div>

        </div>

        <footer>
            <a href="download/CV%20FESSARD%20BAPTISTE.pdf" class="button">Obtenir mon CV</a>
        </footer>
    </section>
    <!-- Portfolio -->
    <section id="portfolio" class="three">
        <div class="container">
            <header>
                <h2>Portfolio</h2>
            </header>
            <div class="row">
                <div class="6u 12u$(mobile)">
                    <article class="item">
                        <h3>Mes voyages</h3>
                        <a href="baptistefessard.fr/mesvoyages" class="image fit" target="_blank"><img src="images/mesvoyages.JPG" alt="" /></a>
                        <header>
                            <p> Affiche sur une carte les photos des pays et villes que j'ai visité lors de mes différents voyages. <br/>
                                <strong>langage utilisé : PHP, JavaScript </strong></p>
                        </header>
                    </article>
                </div>
                <div class="6u 12u$(mobile)">
                    <article class="item">
                        <h3>Outil de commande </h3>
                        <a href="download/Commande%20fourniture%20v4.xlsm" class="image fit" target="_blank"><img src="images/Excel.png" alt="" /></a>
                        <header>
                            <p>Développé lors de mon expérience chez mader, cet outil génère et automatise les commandes de fournitures pour les différents laboratoires. <br/>
                            <strong>langage utilisé : Visual Basic for Application </strong> </p>
                        </header>

                    </article>

                </div>
            </div>
        </div>

    </section>

    <!-- About Me -->
    <section id="about" class="four">
        <div class="container">

            <header>
                <h2>A propos de moi</h2>
            </header>
            <div class="row">
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <h2>Dîplomes</h2> <br/>
                        <a href="" class="image fit"><img src="images/universite_rouen_cover.png" alt="" /></a>
                        <header>
                            <a href="http://iutrouen.univ-rouen.fr/licence-professionnelle-chimie-analytique-controle-qualite-environnement-alt--543183.kjsp?RH=1384876502207" target="_blank">2012 : Licence professionnelle chimie</a><br/>
                            <a href="http://sciences-techniques.univ-rouen.fr/licence-chimie-543232.kjsp"target="_blank"> 2012 : Licence chimie </a> <br/>
                            <a href="http://iutrouen.univ-rouen.fr/dut-chimie-351509.kjsp"target="_blank">2010: DUT chimie</a>
                        </header>
                    </article>
                </div>
                <div class="8u 12u$(mobile)">
                    <article class="item">
                        <h2>Compétences</h2>
                        <header>
                            <table>
                                <tr>
                                    <td><strong>Langages informatique : </strong></td>
                                </tr>
                                <tr>
                                    <td>PHP - MySQL - HTML - CSS</td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td><strong>Logiciel : </strong></td>
                                </tr>
                                <tr>
                                    <td>PhpStorm</td>
                                </tr>
                            </table>
                        </header>
                    </article>
                </div>

        </div>
    </section>
    <!-- world map voyage-->

				<!-- Contact -->
					<section id="contact" class="five">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>
                            <div class="row">
                                <div class="4u 12u$(mobile)">
                                    <article class="item">
                                        <a href="mailto:baptistefessard@gmail.com" class="icon fa-envelope"></a> </br>
                                        <a href="mailto:baptistefessard@gmail.com" class="container">baptistefessard@gmail.com</a>
                                    </article>
                                </div>
                                <div class="2u 12u$(mobile)">
                                    <article class="item">
                                        <a href="callto:0652122675" class="icon fa-phone"></a></br>
                                        <a href="callto:0652122675">06.52.12.26.75</a>
                                    </article>
                                </div>
                                <div class="3u 12u$(mobile)">
                                    <article class="item">
                                        <a href="skype:baptistefessard@hotmail.com?add" class="icon fa-skype"></a> </br>
                                        <a href="skype:baptistefessard@hotmail.com?add" >baptiste fessard</a>
                                    </article>
                                </div>
                                <div class="3u 12u$(mobile)">
                                    <article class="item">
                                        <a href="" class="icon fa-map-marker"></a> </br>
                                        210B rue du général de Gaulle</br>27910 Perriers sur Andelle

                                    </article>
                                </div>
                             </div>


								<!-- Social Icons -->
                                <!--


									<td><a href="" class="icon fa-map-marker"><span class="label">Linkedin</span></a></td>


									<td><a href="skype:baptistefessard@hotmail.com?add" >baptiste fessard</a></td>
									<td>210B rue du général de Gaulle</br>27910 Perriers sur Andelle</td>
								</tr>

							</table> -->
						</div>

			</div>
<!--
<section id="voyage" class="five">
    <?//php include('../mon_site_photo/index.php'); ?>
</section>
-->
		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
