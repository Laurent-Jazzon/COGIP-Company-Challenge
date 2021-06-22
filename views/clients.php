<?php
$title = 'Clients';
$description = 'Page affichant tout les clients de la GOCIP';

?>

<?php ob_start(); ?>

<div class="flex flex-column justify-center mt-10">
    <h1 class="m-10 text-4xl">
        COGIP : Clients directory
    </h1>
</div>

<div class="flex flex-col p-10 justify-center mx-20">
<p class="text-xl mt-3 mb-2">Clients:</p>
    <table class="bg-gray-200 rounded-xl mb-10">
        <thead>
            <tr class="text-left">
                <th  class="pl-5 pt-5">Firstname</th>
                <th class="pl-5 pt-5">Lastname</th>
                <th class="pl-5 pt-5">Email</th>
                <th class="pl-5 pt-5">Compagnie</th>
                <th class="pl-5 pt-5">Détails</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($client_data as $client) {
            ?>
                <tr>
                    <td  class="py-1 pl-5 w-2/6"><?= $client->contacts_lastname ?></td>
                    <td  class="py-1 pl-5 w-1/6"><?= $client->contacts_firstname ?></td>
                    <td  class="py-1 pl-5 w-1/6"><?= $client->contacts_email ?></td>
                    <td  class="py-1 pl-5 w-1/6"><?= $client->companies_name ?></td>
                    <td class="py-1 pl-5 w-1/6"><a href='?action=détailsClients&id=<?= $client->contacts_id ?>'>Détails</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>