<?php
session_start();

function makeCaptcha($len = 6) {
    $letters = 'ABCDEFabcdef012345';
    $code = '';

    for ($i = 0; $i < $len; $i++) {
        $code .= $letters[rand(0, strlen($letters) - 1)];
    }

    $_SESSION['captcha'] = $code;
    return $code;
}

echo "Captcha: " . makeCaptcha();
?>
