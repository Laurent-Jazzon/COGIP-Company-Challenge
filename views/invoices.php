<?php 

    $title = "invoices";
    $description = "directory of all invoices";
    $username = "Jean-Christian";
    ob_start();
?>
<div class="flex flex-column justify-center mt-10">
    <h1 class="m-10 text-4xl">
        COGIP : Invoices directory
    </h1>
</div>
<div class="flex flex-col p-10 justify-center mx-20">
    <!-- INVOICES TABLE -->
    <p class="text-xl mt-3 mb-2">Invoices:</p>
    <table class="bg-gray-200 rounded-xl mb-10">
        <thead>
            <tr class="text-left">
                <th class="pl-5 pt-5">Invoice numbers</th>
                <th class="pl-5 pt-5">Dates</th>
                <th class="pl-5 pt-5 w-1/6">Details</th>

            </tr>
        </thead>   
        <tbody>
            <?php foreach ($invoices as $invoice):?>
                <tr>
                    <td class="py-1 pl-5 w-2/6"><?= $invoice->invoices_number?></td>
                    <td class="py-1 pl-5 w-2/6"><?= $invoice->invoices_date?></td>
                    <td class="py-1 pl-5 w-1/6"><a href='?action=détailsInvoices&id=<?=$invoice->invoices_id?>'>Details</a></td>
                    <?php if($username === "Jean-Christian" ):?>
                        <td class="py-1 pl-5 w-2/6">
                            <form action="?action=deleteInvoice" method="POST">
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
</div>
<?php  
    $content = ob_get_clean();
    require ("template.php");
