<?php $title = "Tarifsr"; ?>

<?php ob_start(); ?>

<div id="tarifs">
    <p>En cours de rédaction</p>
</div>
    
<?php
    $content = ob_get_clean(); 

    require_once('template.php');
?>