<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='<?= $description?>'>
    <link href="https://unpkg.com/tailwindcss@^2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <title><?= $title ?></title>
</head>
<body class="flex flex-col justify-between h-screen">
<header>
<nav class="p-6 bg-gray-900">
    <div class="flex flex-col md:flex-row items-center">
        <div class="flex flex-row mx-6 mb-3 md:mt-0">
            <img class="mr-2" src="public/img/jean_mich.svg" alt="logo cogip" width="60">
            <p class="text-3xl text-white mt-4">COGIP</p>
        </div>

        <div class="text-lg text-white ">
            <a href="?action=home"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 rounded hover:text-blue-300">
                Home
            </a>
            <a href="?action=invoices"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 rounded hover:text-blue-300">
                Invoices
            </a>

            <a href="?action=companies"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 rounded hover:text-blue-300">
                Companies
            </a>
            <a href="?action=contacts"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 rounded hover:text-blue-300">
                Contacts
            </a>
            <a href="?action=clients"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 rounded hover:text-blue-300">
                Clients
            </a>
          
            <a href="?action=providers"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 bg-blue-400 rounded hover:text-gray-800">
                Providers
             </a>
            <?php if (empty($_SESSION['Active'])) {
                echo '
                <a href="?action=login"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 bg-blue-400 rounded hover:text-gray-800">
                Login
            </a>';
            }else {
                echo '
                <a href="?action=logout"
                class="block py-2 px-4 mx-2 lg:mx-8 lg:inline-block lg:mt-0 bg-blue-400 rounded hover:text-gray-800">
                Logout
            </a>';            }
        ?>

        </div>
    </div>
</nav>

</header>
<main>
    <?=$content?>
</main>
<footer class="p-6 bg-gray-900 shadow-lg">
    <div>
        <h2 class="text-3xl text-center text-white mt-2">
            Vive la COGIP !
        </h2>
    </div>
    <div class="flex flex-row justify-center ">
        <i class="fab fa-facebook-square text-3xl text-center text-white mt-3 mx-3"></i>
        <i class="fab fa-twitter-square text-3xl text-center text-white mt-3 mx-3"></i>
        <i class="fab fa-youtube text-3xl text-center text-white mt-3 mx-3"></i>
    </div>
</footer>
</body>
</html>