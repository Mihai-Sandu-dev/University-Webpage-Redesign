<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if ($lang === 'ro') {
    header('Location: ro/index.php');
} else {
    header('Location: en/index.php');
}
exit();


//check for the system language
?>