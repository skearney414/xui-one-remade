<?php

include 'session.php';
include 'functions.php';

if (!E6D500E19634D513()) {
    E72F42a93714bA87();
}

$F6edd90960a3bd9d = 'Quick Tools';
include 'header.php';

$displayStyle = '';
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    $displayStyle = ' style="display: none;"';
}

echo '<div class="wrapper boxed-layout-ext"' . $displayStyle . '>' . "\n";
echo '    <div class="container-fluid">' . "\n\t\t";
echo '<div class="row">' . "\n\t\t\t";
echo '<div class="col-12">' . "\n\t\t\t\t";
echo '<div class="page-title-box">' . "\n";
echo '                    <div class="page-title-right">' . "\n";
echo '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t";
echo '<h4 class="page-title">Quick Tools</h4>' . "\n\t\t\t\t";
echo '</div>' . "\n\t\t\t";
echo '</div>' . "\n\t\t";
echo '</div>' . "\n";
echo '        <form action="#" method="POST">' . "\n";
echo '            <div class="row">' . "\n";
echo '                <div class="col-xl-12">' . "\n";
echo '                    <div class="card">' . "\n";
echo '                        <div class="card-body">' . "\n";
echo '                            <div id="basicwizard">' . "\n";
echo '                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n";
echo '                                    <li class="nav-item">' . "\n";
echo '                                        <a href="#general" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n";
echo '                                            <i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n";
echo '                                            <span class="d-none d-sm-inline">General</span>' . "\n";
echo '                                        </a>' . "\n";
echo '                                    </li>' . "\n";
echo '                                </ul>' . "\n";
echo '                            </div>' . "\n";
echo '                        </div>' . "\n";
echo '                    </div>' . "\n";
echo '                </div>' . "\n";
echo '            </div>' . "\n";
echo '        </form>' . "\n";
echo '    </div>' . "\n";
echo '</div>' . "\n";

include 'footer.php';

?>
