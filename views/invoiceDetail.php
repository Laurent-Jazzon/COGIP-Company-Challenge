<?php 
$title = 'Détail invoice';
$description = 'Détail des facture de la COGIP';

?>

<?php ob_start(); ?>

<h2>Invoice Information: </h2>

<p>Invoice Number: <?= $invoices->invoices_number?> </p>
<p>Invoices date:  <?= $invoices->invoices_date?></p>
<p>Company name:  <?= $invoices->companies_name?></p>
<p>Contact name:  <?= $invoices->contacts_firstname . ' ' . $invoices->contacts_lastname?></p>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>