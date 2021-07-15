<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>header</title>
    </head>
    <body>
    <?php
        echo "" . $_GET['subject'] . $_GET['web'];
    ?>
        <div class="menu">
            <ul>
                <a href="pages/onderwerp1.php"><li>Hond</li></a>
                <a href="pages/onderwerp2.php"><li>Onkunde</li></a>
                <a href="pages/onderwerp3.php"><li></li></a>
            </ul>
        </div>
    </body>
</html>

