<?php
$title = "Company Details";
$description = "detail of the companies";
ob_start();
?>
<div class="flex flex-column justify-center">
    <h1 class="m-10 text-4xl">
        COGIP : Company details
    </h1>
</div>
<div class="flex flex-col p-10 justify-center">
    <!-- PROVIDERS details TABLE -->

    <div class="bg-gray-200 flex flex-col mx-20 p-10 rounded-xl">
    <h2 class="text-lg font-bold">Contact informations: </h2>

    <p>Name:        <?=$companies->companies_name?></p>
    <p>VAT_Number:  <?=$companies->companies_vat_number?></p>
    <p>Invoices:</p>
    <ul>
    <?php foreach ($invoices as $invoice): ?>
        <li><?= $invoice->invoices_number?></li>
    <?php endforeach?>
    </ul>
    <p>Employes:</p>
    <ul>
    <?php foreach ($contacts as $Employes): ?>
        <li><?= $Employes->contacts_firstname .' '. $Employes->contacts_lastname ?></li>
    <?php endforeach?>
    </ul>
</div>
<?php
$content = ob_get_clean();
require("template.php");