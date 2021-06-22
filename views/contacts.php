<?php 
    $title = "contacts";
    $description = "directory of all contacts";
    $username = "Jean-Christian";
    ob_start();
?>

<div class="flex flex-column justify-center mt-10">
    <h1 class="m-10 text-4xl">
        COGIP : Contacts directory
    </h1>
</div>
<div class="flex flex-col p-10 justify-center mx-20">
    <!-- PEOPLE TABLE -->
        <p class="text-xl mt-3 mb-2">Contacts:</p>
        <table class="bg-gray-200 rounded-xl mb-10">
            <thead>
                <tr class="text-left">
                    <th class="pl-5 pt-5">Name</th>
                    <th class="pl-5 pt-5">Email</th>
                    <th class="pl-5 pt-5">Details</th>
                </tr>
            </thead>   
            <tbody>
                <?php foreach ($contacts as $contact):?>
                    <tr>
                        <td class="py-1 pl-5 w-2/6"><?= $contact->contacts_firstname." ".$contact->contacts_lastname?></td>
                        <td class="py-1 pl-5 w-2/6"><?= $contact->contacts_email?></td>
                        <td class="py-1 pl-5 w-1/6"><a href='?action=détailsContacts&id=<?=$contact->contacts_id?>'>Details</a></td>
                        <td class="py-1 pl-5 w-2/6">
                                <form action="?action=deleteContact" method="POST">
                                    <button type="submit" name="delContact" value="<?= $contact->contacts_id?>" >
                                        <img src="public/img/trashcan.svg" alt="delete img" width="30">
                                    </button>
                                </form>
                            </td>
                        <?php if($username === "Jean-Christian" ):?>
                            <td class="py-1 pl-5 w-2/6"><button><img src="public/img/trashcan.svg" alt="delete img" width="30"></button></td>
                        <?php endif ?>
                    </tr>
                <?php endforeach?>
            </tbody> 
        </table>
</div>
<?php  
    $content = ob_get_clean();
    require ("template.php");