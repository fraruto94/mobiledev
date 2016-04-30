<?php
    defined('__BLIMP__') or die('Acces interdit');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blimp</title>
        <meta charset="UTF-8">
        <link href="library/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/application.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
        <script src="library/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="library/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript"></script>

        <header>
            
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                          <img src="images/blimp-logo-small.png" alt=""/>
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Mes Participations</a>
                        </li>
                        <li>
                            <a href="#">Actions</a>
                        </li>
                        <li>
                            <a href="#">Utilisateurs</a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patate<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">Se Déconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <div class="container">
                <div class="col-md-9 col-sm-9 page-header">
                    <?php $this->insertView(); ?>
                
                </div>
                
                <div class="col-md-3 col-sm-3">
                    <nav class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">Raccourcis</h2>
                        </div> 
                        <ul class="panel-body list-unstyled">
                            <li><a href="#">Ajouter action</a></li>
                            <li><a href="#">Ajouter utilisateur</a></li>
                            <li><a href="#">Actions passées</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </main>
        
    </body>
</html>


