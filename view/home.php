<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<p>Hello</p>

<?php 
    $content = ob_get_clean(); 
    
    require_once("template.php"); 
?>