<?php
$title = "Providers";
$description = "directory of all providers";
$CSS = "";
ob_start();
?>
<div class="flex flex-column justify-center">
    <h1 class="m-10 text-4xl">
        COGIP : Providers directory
    </h1>
</div>
<div class="flex flex-col p-10 justify-center">
    <!-- PROVIDERS TABLE -->
    <p class="text-xl mt-3 mb-2">Our Providers</p>
    <table class="bg-gray-200 rounded-xl">
        <thead>
            <tr class="text-left">
                <th class="pl-5 pt-5">Company name</th>
                <th class="pl-5 pt-5">Country</th>
                <th class="pl-5 pt-5">VAT Number</th>
                <th class="pl-5 pt-5">Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($providers as $provider) : ?>
                <tr>
                    <td class=" py-1 pl-5"><?= $provider->companies_name ?></td>
                    <td class="py-1 pl-5"><?= $provider->companies_country ?></td>
                    <td class="py-1 pl-5"><?= $provider->companies_vat_number ?></td>
                    <td class="py-1 pl-5"> <a href='?action=détailsProviders&id=<?= $provider->companies_id ?>'>Details</a>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php
$content = ob_get_clean();
require("template.php");
