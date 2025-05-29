<?php

include 'session.php';
include 'functions.php';

if (!e6D500E19634D513()) {
    E72F42A93714bA87();
}

$F6edd90960a3bd9d = 'Encoding Queue';
include 'header.php';

$displayStyle = '';
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    $displayStyle = ' style="display: none;"';
}

echo '<div class="wrapper"' . $displayStyle . '>' . "\n";
echo '    <div class="container-fluid">' . "\n\t\t";
echo '<div class="row">' . "\n\t\t\t";
echo '<div class="col-12">' . "\n\t\t\t\t";
echo '<div class="page-title-box">' . "\n";
echo '                    <div class="page-title-right">' . "\n";
echo '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t";
echo '<h4 class="page-title">Encoding Queue</h4>' . "\n\t\t\t\t";
echo '</div>' . "\n\t\t\t";
echo '</div>' . "\n\t\t";
echo '</div>     ' . "\n\t\t";
echo '<div class="row">' . "\n\t\t\t";
echo '<div class="col-12">' . "\n\t\t\t\t";
echo '<div class="card">' . "\n\t\t\t\t\t";
echo '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t";
echo '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t";
echo '<thead>' . "\n\t\t\t\t\t\t\t\t";
echo '<tr>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Position</th>' . "\n";
echo '                                    <th>Stream</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th>Server</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Status</th>' . "\n";
echo '                                    <th class="text-center">Added</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t";
echo '</tr>' . "\n\t\t\t\t\t\t\t";
echo '</thead>' . "\n\t\t\t\t\t\t\t";
echo '<tbody></tbody>' . "\n\t\t\t\t\t\t";
echo '</table>' . "\n\t\t\t\t\t";
echo '</div>' . "\n\t\t\t\t";
echo '</div>' . "\n\t\t\t";
echo '</div>' . "\n\t\t";
echo '</div>' . "\n\t";
echo '</div>' . "\n";
echo '</div>' . "\n";

include 'footer.php';

?>
