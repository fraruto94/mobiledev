<?php
    defined('__BLIMP__') or die('Acces interdit');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Template A</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Template A</h1>
        <div style="border:1px solid black;min-height: 80px;">
            <!-- ZONE DE CONTENU -->
            <?php $this->insertView(); ?>
        </div>
    </body>
</html>

