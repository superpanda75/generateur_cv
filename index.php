<?php

	if(isset($_GET['page']))
    {

        if(file_exists("View/content/".$_GET['page']))
        {
            $contenu = "View/content/".$_GET['page'];
        }
        else
        {
            $contenu = "View/content/404.php";
        }
    }
    else
    {
        $contenu = "View/content/accueil.php";
    }
    require "View/layout.php";

?>
