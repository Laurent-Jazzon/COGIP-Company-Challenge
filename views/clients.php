<?php 
$title = 'Clients';
$description = 'Page affichant tout les clients de la GOCIP';

?>

<?php ob_start(); ?>

<table>
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Compagnie</th>
            <th>Détails</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($client_data as $client)
        {
        ?>
            <tr>
            <td><?=$client->contacts_lastname?></td>
            <td><?=$client->contacts_firstname?></td>
            <td><?=$client->contacts_email?></td>
            <td><?=$client->companies_name?></td>
            <td><a href='?action=détailsClients&id=<?=$client->contacts_id?>'>Détails</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>