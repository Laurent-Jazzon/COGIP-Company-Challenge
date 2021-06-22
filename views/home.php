<?php

    $title = "home";
    $description = "home page of the cogip company";
    ob_start();
?>
<div class="flex flex-column justify-center mt-10">
    <h1 class="m-10 text-4xl">
        Welcome to the COGIP
    </h1>
</div>
<?php
    if (isset($_SESSION['Username']) AND $_SESSION['Username'] === "Jean-Christian"):  
?>
<div class="mx-20 md:p-10">
    <p class="md:text-xl mt-3 mb-2">Hello, Jean-Christian!</p>
    <p class="md:text-xl mt-3 mb-2">What do you want to do today?</p>
</div>
<div class="flex flex-row p-10 justify-center">
        <button class="text-white p-2 bg-gray-900 rounded hover:text-blue-300 mx-10"><a href="?action=addInvoices">+ New invoice</a></button>
        <button class="text-white p-2 bg-gray-900 rounded hover:text-blue-300 mx-10"><a href="?action=addCompanies">+ New company</a></button>
        <button class="text-white p-2 bg-gray-900 rounded hover:text-blue-300 mx-10"><a href="?action=addContacts">+ New contact</a></button>
</div>
<?php endif ?>

<div class="flex flex-col p-10 justify-center">
    <!-- INVOICES TABLE -->
        <p class="text-xl mb-2 mx-20">Last invoices:</p>
        <table class="bg-gray-200 rounded-xl mx-20">
            <thead>
                <tr class="text-left">
                    <th class="pl-5 pt-5 w-2/6">Invoice numbers</th>
                    <th class="pl-5 pt-5 w-2/6">Dates</th>
                    <th class="pl-5 pt-5 w-1/6">Details</th>
                </tr>
            </thead>   
            <tbody>
                <?php foreach ($invoices as $invoice):?>
                    <tr>
                        <td class="py-1 pl-5 w-2/6"><?= $invoice->invoices_number?></td>
                        <td class="py-1 pl-5 w-2/6"><?= $invoice->invoices_date?></td>
                        <td class="py-1 pl-5 w-1/6"><a href='?action=détailsInvoices&id=<?=$invoice->invoices_id?>'>Details</a></td>
                        <?php if(isset($_SESSION['Username']) AND $_SESSION['Username'] === "Jean-Christian"):?>
                            <td class="py-1 pl-5 w-2/6">
                                <form action="?action=deleteInvoiceHome" method="POST">
                                    <button type="submit" name="delInvoice" value="<?= $invoice->invoices_id?>" >
                                        <img src="public/img/trashcan.svg" alt="delete img" width="30">
                                    </button>
                                </form>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach?>
            </tbody> 
        </table>
    <!-- CONTACTS TABLE -->
        <p class="text-xl mt-3 mb-2 mx-20 mt-10">Last Contacts:</p>
        <table class="bg-gray-200 rounded-xl mx-20">
        <thead>
                <tr class="text-left">
                    <th class="pl-5 pt-5 w-2/6">Name</th>
                    <th class="pl-5 pt-5 w-2/6">Email</th>
                    <th class="pl-5 pt-5 w-1/6">Details</th>
                </tr>
            </thead>   
            <tbody>
                <?php foreach ($contacts as $contact):?>
                    <tr>
                        <td class="py-1 pl-5 w-2/6"><?= $contact->contacts_firstname." ".$contact->contacts_lastname?></td>
                        <td class="py-1 pl-5 w-2/6"><?= $contact->contacts_email?></td>
                        <td class="py-1 pl-5 w-1/6"><a href='?action=détailsContacts&id=<?=$contact->contacts_id?>'>Details</a></td>
                        <?php if(isset($_SESSION['Username']) AND $_SESSION['Username'] === "Jean-Christian"):?>
                            <td class="py-1 pl-5 w-2/6">
                                <form action="?action=deleteContactHome" method="POST">
                                    <button type="submit" name="delContact" value="<?= $contact->contacts_id?>" >
                                        <img src="public/img/trashcan.svg" alt="delete img" width="30">
                                    </button>
                                </form>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach?>
            </tbody> 
        </table>
    <!-- COMPANIES TABLE -->
        <p class="text-xl mt-3 mb-2 mx-20 mt-10">Last companies:</p>
        <table class="bg-gray-200 rounded-xl mx-20 mb-10">
            <thead>
                <tr class="text-left">
                    <th class="pl-5 pt-5 w-2/6">Name</th>
                    <th class="pl-5 pt-5 w-2/6">VAT number</th>
                    <th class="pl-5 pt-5 w-1/6">Details</th>
                </tr>
            </thead>   
            <tbody>
                <?php foreach ($companies as $company):?>
                    <tr>
                        <td class="py-1 pl-5 w-2/6"><?= $company->companies_name?></td>
                        <td class="py-1 pl-5 w-2/6"><?= $company->companies_vat_number?></td>
                        <td class="py-1 pl-5 w-1/6"><a href='?action=détailsCompany&id=<?=$company->companies_id?>'>Details</a></td>
                        <?php if(isset($_SESSION['Username']) AND $_SESSION['Username'] === "Jean-Christian"):?>
                            <td class="py-1 pl-5 w-2/6">
                                <form action="?action=deleteCompanyHome" method="POST">
                                    <button type="submit" name="delCompany" value="<?= $company->companies_id?>" >
                                        <img src="public/img/trashcan.svg" alt="delete img" width="30">
                                    </button>
                                </form>
                            </td>
                        <?php endif ?>
                    </tr>
                <?php endforeach?>
            </tbody> 
        </table>
</div>
<?php  
    $content = ob_get_clean();
    require ("template.php");
