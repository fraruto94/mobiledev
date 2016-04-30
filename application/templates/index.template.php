<?php
    defined('__BLIMP__') or die('Acces interdit');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blimp</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/blimp.css">
    </head>
    
    <body>
        
        <header id="page-header">
            <div class="conteneur">
                <img src="images/blimp-logo.png" alt="blimp logo"/>
            </div>
        </header>
        
        <section id="login-box">
            <div class="conteneur">
                <?php $this->insertView(); ?>
            </div>
        </section>
        
        <main>
            <section id="images">
                <div class="conteneur">
                    <div>
                        <img src="images/stylots.jpg" alt="coordination"/>
                        <div class="image-text">
                            <div class="titre" id="coordination">
                                <span>coor</span><span>dina</span><span>tion</span>
                            </div>
                            <div class="descrition">
                                Blimp est l'outil ultime de coordination pour un groupe de personnes.
                            </div>
                        </div>
                    </div><div>
                        <img src="images/sourire.jpg" alt="simplification"/>
                        <div class="image-text">
                            <div class="titre" id="simplification">
                                <span>simp</span><span>lific</span><span>ation</span>
                            </div>
                            <div class="descrition">
                                Blimp est l'outil ultime de coordination pour un groupe de personnes.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="description">
                <div class="conteneur">
                    <ul>
                        <li class="bloc33">
                            <img src="images/like.png" alt="like"/>
                            <h2>Simple</h2>
                            <p>Blimp est une plateforme très simple d'utilisation. Son interface très intuitive rend toutes les actions à portée de tous. Son interface consistante ne nécessite aucune formation pour être prise en main.</p>
                        </li>
                        <li class="bloc33">
                            <img src="images/couronne.png" alt="couronne"/>
                            <h2>Efficace</h2>
                            <p>Grâce à Blimp, l'organisation d'actions sera beaucoup plus efficace. Ne perdez plus de temps en mails et coups de fils. Blimp est là pour vous faciliter la vie.</p>
                        </li>
                        <li class="bloc33">
                            <img src="images/groupe.png" alt="groupe"/>
                            <h2>Indispensable</h2>
                            <p>Blimp est l'outil indispensable pour coordonner un groupe de personnes sur une action. Quels que soient votre nombre et l'objet de votre groupe, Blimp est la solution qui vous rendra la vie plus simple au quotidien.</p>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        
        <footer id="page-footer" class="clear">
            <div class="conteneur"> 
                <ul>
                    <li class="bloc25">                        
                        <h2>Dev. Web</h2>                                                
                        <ul>
                            <li><a href="http://www.php.net/">PHP.net</a></li>
                            <li><a href="http://www.w3schools.com/">W3Schools</a></li>
                            <li><a href="http://www.alsacreations.com/">Alsacr&eacute;ation</a></li>
                            <li><a href="http://www.grafikart.fr/">GrafikArt</a></li>
                        </ul>
                    </li>
                    <li class="bloc25">                        
                        <h2>Frameworks / CMS</h2>
                        <ul>
                            <li><a href="https://www.joomla.org/">Joomla</a></li>
                            <li><a href="http://framework.zend.com/">Zend Framework</a></li>
                            <li><a href="http://symfony.com/">Symfony</a></li>
                            <li><a href="https://www.drupal.org/">Drupal</a></li>
                            <li><a href="https://fr.wordpress.org/">Wordpress</a></li>
                        </ul>
                    </li>
                    <li class="bloc25">
                        <h2>Graphisme</h2>
                        <ul>
                            <li><a href="http://www.rockettheme.com/">Rocket Theme</a></li>
                            <li><a href="http://www.shutterstock.com/">Shutterstock</a></li>
                            <li><a href="http://kudakurage.com/ligature_symbols/">Ligature Symbols</a></li>
                        </ul>
                    </li>                    
                    <li class="bloc25">                        
                        <h2>Outillage</h2>                                                
                        <ul>
                            <li><a href="https://netbeans.org/">Netbeans</a></li>
                            <li><a href="https://www.apachefriends.org/fr/index.html">XAMPP</a></li>
                            <li><a href="https://www.google.fr/chrome/browser/desktop/">Google Chrome</a></li>
                            <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
                            <li><a href="https://jquery.com/">jQuery</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </footer>
        
    </body>
    
</html>

