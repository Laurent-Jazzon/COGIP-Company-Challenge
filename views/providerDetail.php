<?php
$title = "Provider Details";
$description = "detail of the providers";
$CSS = "";
ob_start();
?>
<div class="flex flex-column justify-center">
    <h1 class="m-10 text-4xl">
        COGIP : Provider details
    </h1>
</div>
<div class="flex flex-col p-10 justify-center">
    <!-- PROVIDERS details TABLE -->

    <table class="bg-gray-200 rounded-xl">
        <thead>
            <tr class="text-left">

                <th class="pl-5 pt-5">Company name</th>
                <th class="pl-5 pt-5">Country</th>
                <th class="pl-5 pt-5">VAT Number</th>
                <th class="pl-5 pt-5">Invoice number</th>
                <th class="pl-5 pt-5">Date of invoice</th>
                <th class="pl-5 pt-5">Firstname contact</th>
                <th class="pl-5 pt-5">Lastname contact</th>
                <th class="pl-5 pt-5">Email contact</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $provider) : ?>
            <tr>

                <td class=" py-1 pl-5"><?= $provider->companies_name ?></td>
                <td class="py-1 pl-5"><?= $provider->companies_country ?></td>
                <td class="py-1 pl-5"><?= $provider->companies_vat_number ?></td>
                <td class="py-1 pl-5"><?= $provider->invoices_number ?></td>
                <td class="py-1 pl-5"> <?= $provider->invoices_date ?></td>
                <td class="py-1 pl-5"> <?= $provider->contacts_firstname ?></td>
                <td class="py-1 pl-5"> <?= $provider->contacts_lastname ?></td>
                <td class="py-1 pl-5"> <?= $provider->contacts_email ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php
$content = ob_get_clean();
require("template.php");