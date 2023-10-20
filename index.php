<?php session_start();?>
<html>
<head>
    <meta charset="UTF-8">
    <title>liste de films</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">

        <a href="/mvcTest/HomeController/show" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold uppercase">liste film</a><br>
        <span class="text-xs text-grey-dark">Créer ta liste de film</span>

    </div>
    <div class="sm:mb-0 self-center">
        <?php if ($_SESSION['email']!= null) {
            echo '
                 <a href="/mvcTest/MovieController/create" class="text-md no-underline text-black hover:underline transition ml-2 px-1">Ajouter un film</a>
                 <a href="/mvcTest/MovieController/show" class="text-md no-underline text-grey-darker hover:underline transition ml-2 px-1">Ma liste</a>
                 <a href="/mvcTest/UserController/logout" class="text-md no-underline text-red-400 hover:underline transition ml-2 px-1"> '.$_SESSION['email'].'<span class="material-symbols-outlined">logout</span></a>
            ';
        }
        else {
            echo '
            <a href="/mvcTest/UserController/signup" class="text-md no-underline text-white bg-blue-800 rounded p-2 hover:bg-blue-900 transition hover:text-blue-dark ml-2 px-1">Se connecter</a>
            <a href="/mvcTest/UserController/create" class="text-md no-underline text-blue-800 rounded p-2 transition hover:text-blue-900 hover:bg-slate-200 hover:text-blue-dark ml-2 px-1">S\'inscrire</a>
        ';
        }
        ?>
        <!-- <a href="/two" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">About Us</a> -->

        <!-- </div> -->

    </div>
</nav>
<?php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
if (isset($_GET['action']) && !empty($_GET['action'])) {

    $params = explode("/", $_GET['action']);
    if ($params [0] != "") {
        $controller = $params[0];
        $action = $params [1] ?? 'Library';
        $controllerFile = ROOT . 'controller/' . $controller . '.php';


        if (file_exists($controllerFile)) {

            require_once($controllerFile);
            if (function_exists($action)) {
                if (isset($params [2]) && isset ($params [3])) {
                    $action($params [2], $params [3]);
                } elseif
                (isset ($params[2])) {
                    $action($params [2]);
                } else {
                    $action();
                }
            } else {
                header('HTTP / 1.0 404 Not Found');
                require_once('views/error/404.html');
            }
        } else {
            header('HTTP / 1.0 404 Not Found');
            require_once('views/error/404.html');
        }
    }
} else {
    require_once('controller/HomeController.php');

}
?>
</body>
</html>

