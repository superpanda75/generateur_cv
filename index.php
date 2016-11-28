<?php

include 'View/layout.php';

    if (file_exists('generateur_cv/View/'.$content)){
        include ('generateur_cv/index.php?p='.$content);
    }
    else {
        header('Location : generateur_cv/404.html');
    }
?>