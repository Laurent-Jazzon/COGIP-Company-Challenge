<?php 
$title = 'Create a new company';
$description = 'Page permettant la création d\'une nouvelle companie COGIP';
?>

<?php ob_start(); ?>

<main class="w-2/3 flex flex-col justify-center m-auto" >
        <h1 class="font-bold text-gray-800 text-3xl pb-12 m-auto">Create a new company</h1>

        <form action='?action=createCompanies' method='post'>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company_name">Company Name</label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="company_name" value="">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="country">Country</label>
                        <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="country">
                                <option>Belgium</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>Moon</option>
                                <option>Neverland</option>
                                <option>Nowhere</option>
                                <option>Nederlands</option>
                                <option>Germany</option>
                                <option>In the Summertime</option>
                        </select>
                </div>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="vat">VAT Number</label>
                        <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="vat" value="" placeholder="BE###########">
                </div>

                <div class="px-3 mb-6 md:mb-0">
                        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company_type">Company Type</label>
                        <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="company_type" id="company_type">
                        <?php foreach ($companies_types as $companies_type):?>
                        <option value="<?php echo $companies_type->types_id?>"> <?php echo $companies_type->types_type?></option>
                        <?php endforeach?>
                        </select>
                </div>
                
                <div class="w-full flex justify-center">
                        <button class="px-24 mt-4 bg-gray-900 text-white font-bold py-2 hover:text-blue-300 rounded" type="submit" name="buttonSubmitCompanie" value="buttonSubmitCompanie">Submit</button>
                </div>
        </form>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>