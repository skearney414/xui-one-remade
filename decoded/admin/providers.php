<?php

include 'session.php';
include 'functions.php';

if (!E6D500e19634d513()) {
    e72f42A93714bA87();
}

$F6edd90960a3bd9d = 'Stream Providers';
include 'header.php';

$displayStyle = '';
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    $displayStyle = ' style="display: none;"';
}

echo '<div class="wrapper"' . $displayStyle . '>' . "\n";
echo '    <div class="container-fluid">' . "\n\t\t";
echo '<div class="row">' . "\n\t\t\t";
echo '<div class="col-12">' . "\n\t\t\t\t";
echo '<div class="page-title-box">' . "\n\t\t\t\t\t";
echo '<div class="page-title-right">' . "\n";
echo '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t";
echo '<h4 class="page-title">Stream Providers</h4>' . "\n\t\t\t\t";
echo '</div>' . "\n\t\t\t";
echo '</div>' . "\n\t\t";
echo '</div>' . "\n\t\t";
echo '<div class="row">' . "\n\t\t\t";
echo '<div class="col-12">' . "\n\t\t\t\t";

if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
    echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t";
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t";
    echo '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t";
    echo '</button>' . "\n\t\t\t\t\t";
    echo 'Provider has been added to the database and will be periodically scanned.' . "\n\t\t\t\t";
    echo '</div>' . "\n\t\t\t\t";
}

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t";
echo '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t";
echo '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t";
echo '<thead>' . "\n\t\t\t\t\t\t\t\t";
echo '<tr>' . "\n";
echo '                                    <th class="text-center">';
echo $_['id'];
echo '</th>' . "\n";
echo '                                    <th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th>Provider</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Username</th>' . "\n";
echo '                                    <th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Streams</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Movies</th>' . "\n";
echo '                                    <th class="text-center">Series</th>' . "\n";
echo '                                    <th class="text-center">Expires</th>' . "\n";
echo '                                    <th class="text-center">Last Changed</th>' . "\n";
echo '                                    <th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t";
echo '</tr>' . "\n\t\t\t\t\t\t\t";
echo '</thead>' . "\n\t\t\t\t\t\t\t";
echo '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (getStreamProviders() as $A2ff75fed18f4512) {
    $ba2d146bb5a55097 = json_decode($A2ff75fed18f4512['data'], true);
    
    if (!$A2ff75fed18f4512['enabled']) {
        $b9f049445aa9bd5d = '<i class="text-secondary fas fa-square"></i>';
    } else if ($A2ff75fed18f4512['enabled'] && $A2ff75fed18f4512['status']) {
        $b9f049445aa9bd5d = '<i class="text-success fas fa-square"></i>';
    } else {
        $b9f049445aa9bd5d = '<i class="text-danger fas fa-square"></i>';
    }
    
    echo '                                    <tr id="provider-';
    echo $A2ff75fed18f4512['id'];
    echo '">' . "\n";
    echo '                                        <td class="text-center">';
    echo $A2ff75fed18f4512['id'];
    echo '</td>' . "\n";
    echo '                                        <td class="text-center">';
    echo $b9f049445aa9bd5d;
    echo '</td>' . "\n";
    echo '                                        <td>';
    echo $A2ff75fed18f4512['name'];
    echo '<br/><small>';
    echo $A2ff75fed18f4512['ip'];
    echo ':';
    echo $A2ff75fed18f4512['port'];
    echo '</small></td>' . "\n";
    echo '                                        <td class="text-center">';
    echo $A2ff75fed18f4512['username'];
    echo '</td>' . "\n";
    echo '                                        <td class="text-center">' . "\n";
    echo '                                        ';
    
    if ($ba2d146bb5a55097['max_connections'] > 0) {
        $E65328c8afa8e30a = 'success';
        if (($ba2d146bb5a55097['max_connections'] * 0.75) < $ba2d146bb5a55097['active_connections']) {
            $E65328c8afa8e30a = 'danger';
        } else if (($ba2d146bb5a55097['max_connections'] * 0.5) < $ba2d146bb5a55097['active_connections']) {
            $E65328c8afa8e30a = 'warning';
        }
        
        echo '<a href="streams?search=' . urlencode(strtolower($A2ff75fed18f4512['ip'])) . '&filter=1"><button type="button" class="btn btn-' . $E65328c8afa8e30a . ' btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['active_connections'], 0) . ' / ' . number_format($ba2d146bb5a55097['max_connections'], 0) . '</button></a>';
    } else {
        echo '<a href="streams?search=' . urlencode(strtolower($A2ff75fed18f4512['ip'])) . '&filter=1"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['active_connections'], 0) . ' / &infin;</button></a>';
    }
    
    echo '                                        </td>' . "\n";
    echo '                                        <td class="text-center">' . "\n";
    echo '                                        ';
    
    if ($ba2d146bb5a55097['streams'] > 0) {
        echo '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['streams'], 0) . '</button>';
    } else {
        echo '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['streams'], 0) . '</button>';
    }
    
    echo '                                        </td>' . "\n";
    echo '                                        <td class="text-center">' . "\n";
    echo '                                        ';
    
    if ($ba2d146bb5a55097['movies'] > 0) {
        echo '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['movies'], 0) . '</button>';
    } else {
        echo '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['movies'], 0) . '</button>';
    }
    
    echo '                                        </td>' . "\n";
    echo '                                        <td class="text-center">' . "\n";
    echo '                                        ';
    
    if ($ba2d146bb5a55097['series'] > 0) {
        echo '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['series'], 0) . '</button>';
    } else {
        echo '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['series'], 0) . '</button>';
    }
    
    echo '                                        </td>' . "\n";
    echo '                                        <td class="text-center">';
    echo $ba2d146bb5a55097['exp_date'] == -1 ? 'Unknown' : ($ba2d146bb5a55097['exp_date'] ? date('Y-m-d', $ba2d146bb5a55097['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $ba2d146bb5a55097['exp_date']) . '</small>' : 'Never');
    echo '</td>' . "\n";
    echo '                                        <td class="text-center">';
    echo $A2ff75fed18f4512['last_changed'] ? date('Y-m-d', $A2ff75fed18f4512['last_changed']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $A2ff75fed18f4512['last_changed']) . '</small>' : 'Never';
    echo '</td>' . "\n";
    echo '                                        <td class="text-center">' . "\n";
    echo '                                            <div class="btn-group">' . "\n";
    echo '                                                <a href="provider?id=';
    echo $A2ff75fed18f4512['id'];
    echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil"></i></button></a>' . "\n";
    echo '                                                <button type="button" title="Force Reload" class="tooltip btn btn-light waves-effect waves-light btn-xs" onClick="api(';
    echo $A2ff75fed18f4512['id'];
    echo ', \'reload\');"><i class="mdi mdi-refresh"></i></button>' . "\n";
    echo '                                                <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
    echo $A2ff75fed18f4512['id'];
    echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n";
    echo '                                            </div>' . "\n";
    echo '                                        </td>' . "\n";
    echo '                                    </tr>' . "\n\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t";
echo '</table>' . "\n\t\t\t\t\t";
echo '</div> ' . "\n\t\t\t\t";
echo '</div> ' . "\n\t\t\t";
echo '</div>' . "\n\t\t";
echo '</div>' . "\n\t";
echo '</div>' . "\n";
echo '</div>' . "\n";

include 'footer.php';

?>
