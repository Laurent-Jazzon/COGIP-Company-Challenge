<?php 
$title = 'Create a new invoice';
$description = 'Page permettant la création d\'une nouvelle facture COGIP';
?>

<?php ob_start(); ?>

<main class="w-2/3 flex flex-col justify-center m-auto" >
        <h1 class="font-bold text-gray-800 text-3xl pb-12 m-auto">Create a new invoice</h1>

        <form action="?action=createInvoices" method="post">

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="number">Invoice Number</label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="number" value="" placeholder="#########">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="date">Invoice Date</label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="date" value="" placeholder="YYYY-MM-DD">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">Company</label>
                        <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="company" id="company">
                        <?php foreach ($names as $name) : ?>
                                <option value="<?php echo $name->companies_id?>"><?php echo $name->companies_name?></option>
                        <?php endforeach ?>
                        </select>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="contact">Contact person regarding the invoice</label>
                        <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="contact" id="contact">
                        <?php foreach ($contacts_names as $contacts_name):?>
                                <option value="<?php echo $contacts_name->contacts_id?>"> <?php echo $contacts_name->contacts_firstname . ' ' . $contacts_name->contacts_lastname?></option>
                        <?php endforeach?>
                        </select>
                </div>

                <div class="w-full flex justify-center">
                        <button class="px-24 mt-4 bg-gray-900 text-white font-bold py-2 hover:text-blue-300 rounded" type="submit" name="button" value="submit">Submit</button>
                </div>
        </form>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>