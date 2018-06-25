<!--

Designed & developed by Artur Mędrygał

amedrygal@heseya.com

Copyright 2018

-->
<!DOCTYPE HTML>
<html lang=”pl”>
    <head>
        <title>Artur Mędrygał - FrontEnd Developer | Bydgoszcz</title>
        <?php $rand = rand(0,999999); ?>
        <meta charset="UTF-8">
        <meta name="description" content="Witryny internetowe idealnie dopasowane do klienta. Artur Mędrygał - FrontEnd Developer z Bydgoszczy" />
        <meta name="keywords" content="strony internetowe, witryny internetowe, heseya, artur, mędrygał, bydgoszcz, www, html, css, javascript, http, https, website, webdesign, frontend, developer, web developer, frontend developer" />
		<meta name="theme-color" content="#252c37" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="Shortcut icon" href="img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500&amp;subset=latin-ext" rel="stylesheet" >
        <link rel="stylesheet" href="css/app.css?<?php echo $rand; ?>" />
    </head>
    <body>
        
        <nav class="nav">
            <div class="toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li><a href="#about" onclick="menu(true)">O mnie</a></li>
                <li><a href="#skills" onclick="menu(true)">Umiejętności</a></li>
                <li><a href="#portfolio" onclick="menu(true)">Portfolio</a></li>
                <li><a href="#contact" onclick="menu(true)">Kontakt</a></li>
            </ul>
        </nav>
        
        <header class="introduction">
            <div class="introduction__box">
                <h1 class="name">Artur <span>Mędrygał</span></h1>
                <h2>Front<span>End</span> Developer</h2>
            </div>
            <img src="img/logo.png" alt="" class="introduction__logo">
        </header>

        <section id="about" class="about">
            <h3>O mnie</h3>
            <p class="soft-text">Posiadam <em>ponad 2 letnie doświadczenie</em> jako freelancer w pracy zarówno w większych komercyjnych projektach jak i mniejszych stronach wizytówkach. Nie straszne są dla mnie nowe wyzwania, czy technologię. Zawsze staram się dopieścić projekt w <em>najmniejszych szczegółach</em>.</p>
            <p class="soft-text">Zajmuję się tworzeniem całej <em>front-end'owej</em> części witryny, najczęściej od projektu do realizacji. Oferuję również możliwość utworzenia strony na podstawie projektu w PSD.</p>
            <a href="#contact" class="btn btn--primary">Skontaktuj się!</a>
        </section>

        <section id="skills" class="image-bg image-bg--img">
            <h3>Umiejętności</h3>
            <div class="skills-wrapper">
                <div class="skill">HTML5</div>
                <div class="skill">CSS3</div>
                <div class="skill">JavaScript / ES6</div>
                <div class="skill">GIT</div>
                <div class="skill">Responsive Web Design</div>
                <div class="skill">jQuery</div>
                <div class="skill">Search Engine Optimalization</div>
                <div class="skill">BEM</div>
                <div class="skill">Gulp</div>
                <div class="skill">Język angielski</div>
                <div class="skill">SCSS</div>
                <div class="skill">Object Oriented Programming</div>
            </div>
        </section>

        <section id="portfolio" class="image-bg image-bg--pattern">
            <h3>Portfolio</h3>
            <div class="portfolio hes-gallery">

                <div class="project">
                    <div class="project__about">
                        <h4>Depth</h4>
                        <h5>Sklep internetowy</h5>
                        <p class="soft-text">Sklep internetowy producenta street-wear'owej biżuterii.</p>
                        <p class="soft-text">Responsywna witryna o minimalistycznym akcencie wykonana ze starannością o najmniejsze detale i z troską o łatwość użytkowania.</p>
                        <a href="https://kupdepth.pl" target="_blank" class="btn btn--primary">Zobacz na żywo!</a>
                    </div>
                    <img src="img/projects/depth.png" alt="Depth" data-subtext="Depth" class="project__img">
                </div>

                <div class="project">
                    <div class="project__about">
                        <h4>Heseya</h4>
                        <h5>Strona wizytówka</h5>
                        <p class="soft-text">Strona internetowa dla spółki zajmującej się tworzeniem systemów i stron internetowych.</p>
                        <p class="soft-text">Projekt jest prostą stroną wizytówką urozmaiconą przy pomocy animacji CSS. Jest w pełni responsywny i semantyczny, a także plasuje się wysoko w wyszukiwarce Google.</p>
                        <a href="https://heseya.com" target="_blank" class="btn btn--primary">Zobacz na żywo!</a>
                    </div>
                    <img src="img/projects/heseya.png" alt="Heseya" data-subtext="Heseya" class="project__img">
                </div>

                <div class="project">
                    <div class="project__about">
                        <h4>Kamduo</h4>
                        <h5>Sklep internetowy</h5>
                        <p class="soft-text">Sklep internetowy dla firmy meblarskiej.</p>
                        <p class="soft-text">FrontEnd witryny był przygotowywany do wdrożenia jako pełnoprawny system zakupowy w oparciu o graficzne mapy odnośników.</p>
                        <a href="https://kamduo.pl" target="_blank" class="btn btn--primary">Zobacz na żywo!</a>
                    </div>
                    <img src="img/projects/kamduo.png" alt="Kamduo" data-subtext="Kamduo" class="project__img">
                </div>

                <div class="project">
                    <div class="project__about">
                        <h4>Marked by Fate</h4>
                        <h5>Strona wizytówka</h5>
                        <p class="soft-text">Witryna silnika papierowego RPG'a Marked By Fate.</p>
                        <p class="soft-text">Projekt wymagał zaprojektowania wyglądu od podstaw, tak by zapewniał możliwość wygodnego przejrzenia załej zawartej na stronie treści.</p>
                        <a href="https://mbf.gravehand.com/" target="_blank" class="btn btn--primary">Zobacz na żywo!</a>
                    </div>
                    <img src="img/projects/mbf.png" alt="Marked by Fate" data-subtext="Marked by Fate" class="project__img">
                </div>

                <div class="project">
                    <div class="project__about">
                        <h4>Artur Mędrygał</h4>
                        <h5>Strona wizytówka</h5>
                        <p class="soft-text">Moja osobista strona portfolio.</p>
                        <p class="soft-text">Założeniem była przejrzystość witryny i klarowna treść oraz minimalizm. Chciałem aby moja prywatna strona nie tylko mówiła o mnie, ale również była przyjemna dla oka.</p>
                        <a href="http://amedrygal.pl" target="_blank" class="btn btn--primary">Zobacz na żywo!</a>
                    </div>
                    <img src="img/projects/amedrygal.png" alt="Artur Mędrygał" data-subtext="Artur Mędrygał" class="project__img">
                </div>

            </div>
        </section>

        <section class="contact" id="contact">
            <h3>Kontakt</h3>
            <small class="soft-text">Czekam na Twoją wiadomość!</small>
            <div class="social-wrapper">
                <a href="https://www.facebook.com/artur.medrygal" target="_blank" class="social"><img src="img/logos/fb.png" alt="Facebook"></a>
                <a href="https://www.linkedin.com/in/artur-m%C4%99dryga%C5%82-633455162/" target="_blank" class="social"><img src="img/logos/linkedin.png" alt="Linkedin"></a>
                <a href="https://www.behance.net/medrygal_artur" target="_blank" class="social"><img src="img/logos/behance.png" alt="Behance"></a>
                <a href="https://github.com/demtario" target="_blank" class="social"><img src="img/logos/github.png" alt="GitHub"></a>
                <a href="mailto:medrygal.artur@gmail.com" class="social"><img src="img/logos/mail.png" alt="E-mail"></a>
            </div>
        </section>

        <footer>
            Copyright 2018 | <span class="primary">Artur Mędrygał</span> | Photo from <a href="https://www.pexels.com/" target="_blank">Pexels</a>
        </footer>
        
        <script type="text/javascript" src="js/scripts.js?<?php echo $rand; ?>"></script>
        <script src="https://api.heseya.com/hesgallery/hes-gallery.js"></script>
        <script>
            HesGallery.setOptions({
                disableScrolling: true,
                minResolution: 544
            })
        </script>
    </body>
</html>