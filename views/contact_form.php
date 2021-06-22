<?php 
$title = 'Create a new contact';
$description = 'Page permettant la création d\'un nouveau contact COGIP';
?>

<?php ob_start(); ?>

<main class="w-2/3 flex flex-col justify-center m-auto" >
        <h1 class="font-bold text-gray-800 text-3xl pb-12 m-auto">Create a new contact</h1>

<form action="?action=createContact" method="post">

    <div class="px-3 mb-6 md:mb-0">
    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="firstname">First Name</label>
    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="firstname" value="">
    </div>
    
    <div class="px-3 mb-6 md:mb-0">
    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="lastname">Last Name</label>
    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" type="text" name="lastname" value="">
    </div>

    <div class="px-3 mb-6 md:mb-0">
    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="email">Email</label>
    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"  type="text" name="email" value="">
    </div>

    <div class="px-3 mb-6 md:mb-0">
    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">Company</label>
    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" name="company" id="company">
    <?php foreach ($names as $name) : ?>
            <option value="<?php echo $name->companies_id?>"><?php echo $name->companies_name?></option>
    <?php endforeach ?>
    </select>
    </div>

    <div class="w-full flex justify-center">
        <button class="px-24 mt-4 bg-gray-900 text-white font-bold py-2 hover:text-blue-300 rounded" type="submit" name="button" value="submit">Submit</button>
    </div>
</form>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>