<?php
/*
   ./www/index.php
   DISPATCHER CENTRAL
*/

// 1. Initialisation de l'application 
   $zonePrincipale = '';

// 2. Chargement du routeur qui hydrate $zonePrincipale
   require_once '../app/routers.php';

// 3. Chargement du template qui affiche $zonePrincipale dans le code HTML
   require_once '../app/views/template/index.php';