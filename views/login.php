<?php 
$title = 'Login';
$description = 'Page de connection à la GOCIP';
$CSS = '';
?>

<?php ob_start(); ?>

<div class="container ml-8">
    <form action="" method="post" name="Login_Form">

        <label for="inputUsername" class="sr-only">Username</label>
        <input 
            class= "rounded px-4 py-3 m-3 focus:outline-none lg:w-1/6 w-full border focus:outline-none shadow"
            name="Username"     
            type="username" 
            id="inputUsername" 
            maxlength = "20"
            placeholder="Username"
            onpaste="return false"
            required 
            autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input 
        class= "rounded px-4 py-3 m-3 focus:outline-none lg:w-1/6 w-full border focus:outline-none shadow"
            name="Password" 
            type="password" 
            id="inputPassword" 
            placeholder="Password" 
            required>
        
            <button class="mx-12 px-4 py-3 text-xl bg-gray-900 text-white shadow hover:translate-x-1" name="Submit" value="Login" type="submit">Sign in</button>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>