<?php 
$title = 'Détail clients';
$description = 'Détail d\'un contact de la GOCIP';

?>

<?php ob_start(); ?>
<div class="bg-gray-200 flex flex-col mx-20 p-10 rounded-xl">
    <h2 class="text-lg font-bold">Contact informations: </h2>

    <p>Firstname: <?=$contacts->contacts_firstname?></p>
    <p>Lastname:  <?=$contacts->contacts_lastname?></p>
    <p>Email:     <?=$contacts->contacts_email?></p>
    <p>Company:     <?=$contacts->companies_name?></p>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>