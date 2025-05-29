<?php

include 'functions.php';

if (file_exists(TMP_PATH . '.migration.first')) {
    header('Location: setup');
    exit();
}

if (isset($_SESSION['hash'])) {
    header('Location: dashboard');
    exit();
}

session_start();

$d741c98ae96b4809 = in_array(C9359222b3E3D256(), ['setup', 'rescue']);
if ($d741c98ae96b4809) {
    $f1dcaed925076e67['recaptcha_enable'] = false;
}

$b38e11ffdc6a3abb = dfAc1b11D332C193();

if (0 < intval($f1dcaed925076e67['login_flood'])) {
    $b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `login_logs` WHERE `status` = \'INVALID_LOGIN\' AND `login_ip` = ? AND TIME_TO_SEC(TIMEDIFF(NOW(), `date`)) <= 86400;', $b38e11ffdc6a3abb);
    
    if ($b62d6460eb33ea07->num_rows() == 1) {
        if (intval($f1dcaed925076e67['login_flood']) <= intval($b62d6460eb33ea07->get_row()['count'])) {
            API::f7e2383F47283CB7(['ip' => $b38e11ffdc6a3abb, 'notes' => 'LOGIN FLOOD ATTACK']);
            exit();
        }
    }
}

$cbcf0bbd5e139431 = null;
if (isset(XUI::$rRequest['login'])) {
    $B9869413eae86beb = API::E10E6f46945857eB(XUI::$rRequest, $d741c98ae96b4809);
    $cbcf0bbd5e139431 = $B9869413eae86beb['status'];
    
    if ($cbcf0bbd5e139431 == STATUS_SUCCESS) {
        if (c9359222B3e3d256() == 'setup') {
            header('Location: codes');
            exit();
        }
        
        if (0 < strlen(XUI::$rRequest['referrer'])) {
            $C7c58dad8ae2bc6c = basename(XUI::$rRequest['referrer']);
            
            if (substr($C7c58dad8ae2bc6c, 0, 6) == 'logout') {
                $C7c58dad8ae2bc6c = 'dashboard';
            }
            
            header('Location: ' . $C7c58dad8ae2bc6c);
            exit();
        } else {
            header('Location: dashboard');
            exit();
        }
    }
}

echo '<!DOCTYPE html>' . "\n";
echo '<html lang="en">' . "\n";
echo '    <head>' . "\n";
echo '        <meta charset="utf-8" />' . "\n";
echo '        <title data-id="login">XUI | ';
echo $_['login'];
echo '</title>' . "\n";
echo '        <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
echo '        <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\n";
echo '        <link rel="shortcut icon" href="assets/images/favicon.ico">' . "\n\t\t";
echo '<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />' . "\n";
echo '        ';

if (isset($_COOKIE['theme']) && ($_COOKIE['theme'] == 1)) {
    echo "\t\t" . '<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />' . "\n";
    echo '        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />' . "\n";
    echo '        ';
} else {
    echo '        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />' . "\n";
    echo '        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />' . "\n";
    echo '        ';
}

echo '        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />' . "\n\t\t";
echo '<style>' . "\n";
echo '        .g-recaptcha {' . "\n";
echo '            display: inline-block;' . "\n";
echo '        }' . "\n";
echo '        .vertical-center {' . "\n";
echo '            margin: 0;' . "\n";
echo '            position: absolute;' . "\n";
echo '            top: 50%;' . "\n";
echo '            -ms-transform: translateY(-50%);' . "\n";
echo '            transform: translateY(-50%);' . "\n";
echo '            width: 100%;' . "\n";
echo '        }' . "\n\t\t";
echo '</style>' . "\n";
echo '    </head>' . "\n";

echo '    <body class="bg-animate';
if (isset($_COOKIE['hue']) && (0 < strlen($_COOKIE['hue'])) && in_array($_COOKIE['hue'], array_keys($f1b18060c577d4da))) {
    echo '-' . $_COOKIE['hue'];
}
echo '">' . "\n";
echo '        <div class="body-full navbar-custom">' . "\n";
echo '            <div class="account-pages vertical-center">' . "\n";
echo '                <div class="container">' . "\n";
echo '                    <div class="row justify-content-center">' . "\n";
echo '                        <div class="col-md-8 col-lg-6 col-xl-5">' . "\n";
echo '                            <div class="text-center w-75 m-auto whiteout">' . "\n";
echo '                                <span><img src="assets/images/logo.png" height="80px" alt=""></span>' . "\n";
echo '                                <p class="text-muted mb-4 mt-3"></p>' . "\n";
echo '                            </div>' . "\n";
echo '                            ';

if (isset($cbcf0bbd5e139431)) {
    if ($cbcf0bbd5e139431 == STATUS_FAILURE) {
        echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n";
        echo '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n";
        echo '                                ';
        echo $_['login_message_1'];
        echo '                            </div>' . "\n";
        echo '                            ';
    } else if ($cbcf0bbd5e139431 == STATUS_INVALID_CODE) {
        echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n";
        echo '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n";
        echo '                                ';
        echo $_['login_message_2'];
        echo '                            </div>' . "\n";
        echo '                            ';
    } else if ($cbcf0bbd5e139431 == STATUS_NOT_ADMIN) {
        echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n";
        echo '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n";
        echo '                                ';
        echo $_['login_message_3'];
        echo '                            </div>' . "\n";
        echo '                            ';
    } else if ($cbcf0bbd5e139431 == STATUS_DISABLED) {
        echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n";
        echo '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n";
        echo '                                ';
        echo $_['login_message_4'];
        echo '                            </div>' . "\n";
        echo '                            ';
    } else if ($cbcf0bbd5e139431 == STATUS_INVALID_CAPTCHA) {
        echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n";
        echo '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n";
        echo '                                ';
        echo $_['login_message_5'];
        echo '                            </div>' . "\n";
        echo '                            ';
    }
}

echo '                            <form action="./login" method="POST" data-parsley-validate="">' . "\n";
echo '                                <div class="card">' . "\n";
echo '                                    <div class="card-body p-4">' . "\n";
echo '                                        <input type="hidden" name="referrer" value="';
echo htmlspecialchars(XUI::$rRequest['referrer']);
echo '" />' . "\n";
echo '                                        <div class="form-group mb-3" id="username_group">' . "\n";
echo '                                            <label for="username">';
echo $_['username'];
echo '</label>' . "\n";
echo '                                            <input class="form-control" autocomplete="off" type="text" id="username" name="username" required data-parsley-trigger="change" placeholder="">' . "\n";
echo '                                        </div>' . "\n";
echo '                                        <div class="form-group mb-3">' . "\n";
echo '                                            <label for="password">';
echo $_['password'];
echo '</label>' . "\n";
echo '                                            <input class="form-control" autocomplete="off" type="password" required data-parsley-trigger="change" id="password" name="password" placeholder="">' . "\n";
echo '                                        </div>' . "\n";
echo '                                        ';

if ($f1dcaed925076e67['recaptcha_enable']) {
    echo '                                        <h5 class="auth-title text-center" style="margin-bottom:0;">' . "\n";
    echo '                                            <div class="g-recaptcha" data-callback="recaptchaCallback" id="verification" data-sitekey="';
    echo $f1dcaed925076e67['recaptcha_v2_site_key'];
    echo '"></div>' . "\n";
    echo '                                        </h5>' . "\n";
    echo '                                        ';
}

echo '                                    </div>' . "\n";
echo '                                </div>' . "\n";
echo '                                <div class="form-group mb-0 text-center">' . "\n";
echo '                                    <button style="border:0" class="btn btn-info ';

if (isset($_COOKIE['hue']) && (0 < strlen($_COOKIE['hue'])) && in_array($_COOKIE['hue'], array_keys($f1b18060c577d4da))) {
    echo 'bg-animate-' . $_COOKIE['hue'];
} else {
    echo 'bg-animate-info';
}

echo ' btn-block" type="submit" id="login_button" name="login"';

if ($f1dcaed925076e67['recaptcha_enable']) {
    echo ' disabled';
}

echo '>';
echo $_['login'];
echo '</button>' . "\n";
echo '                                </div>' . "\n";
echo '                            </form>' . "\n";
echo '                        </div>' . "\n";
echo '                    </div>' . "\n";
echo '                </div>' . "\n";
echo '            </div>' . "\n";
echo '        </div>' . "\n";

echo '        <script src="assets/js/vendor.min.js"></script>' . "\n";
echo '        <script src="assets/libs/parsleyjs/parsley.min.js"></script>' . "\n";
echo '        <script src="assets/js/app.min.js"></script>' . "\n\t\t";

if ($f1dcaed925076e67['recaptcha_enable']) {
    echo "\t\t" . '<script src="https://www.google.com/recaptcha/api.js" async defer></script>' . "\n\t\t";
    echo '        <script>' . "\n";
    echo '        function recaptchaCallback() {' . "\n";
    echo '            $(\'#login_button\').removeAttr(\'disabled\');' . "\n";
    echo '        };' . "\n";
    echo '        </script>' . "\n";
}

echo '    </body>' . "\n";
echo '</html>';

?>
