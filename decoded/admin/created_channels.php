<?php

include 'session.php';
include 'functions.php';

if (!e6d500E19634d513()) {
    E72f42A93714ba87();
}

$F6edd90960a3bd9d = 'Created Channels';
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
echo '<h4 class="page-title">Created Channels</h4>' . "\n\t\t\t\t";
echo '</div>' . "\n\t\t\t";
echo '</div>' . "\n\t\t";
echo '</div>     ' . "\n\t\t";
echo '<div class="row">' . "\n\t\t\t";
echo '<div class="col-12">' . "\n\t\t\t\t";
echo '<div class="card">' . "\n\t\t\t\t\t";
echo '<div class="card-body" style="overflow-x:auto;">' . "\n";

$collapseClass = $Ebb0b63f7c597ba4 ? 'collapse' : '';
echo '                        <div id="collapse_filters" class="' . $collapseClass . ' form-group row mb-4">' . "\n";
echo '                            <div class="col-md-2">' . "\n";
echo '                                <input type="text" class="form-control" id="stream_search" value="';
if (isset(XUI::$rRequest['search'])) {
    echo htmlspecialchars(XUI::$rRequest['search']);
}
echo '" placeholder="Search Channels...">' . "\n";
echo '                            </div>' . "\n";
echo '                            <div class="col-md-3">' . "\n";
echo '                                <select id="stream_server_id" class="form-control" data-toggle="select2">' . "\n";
echo '                                    <option value="" selected>All Servers</option>' . "\n";
echo '                                    <option value="-1"';
if (isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == -1)) {
    echo ' selected';
}
echo '>No Servers</option>' . "\n";
echo '                                    ';

foreach (c6A90BFcd425EB63() as $Ec379295dc7029e6) {
    echo '                                    <option value="';
    echo $Ec379295dc7029e6['id'];
    echo '"';
    if (isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id'])) {
        echo ' selected';
    }
    echo '>';
    echo $Ec379295dc7029e6['server_name'];
    echo '</option>' . "\n";
    echo '                                    ';
}

echo '                                </select>' . "\n";
echo '                            </div>' . "\n";
echo '                            <div class="col-md-3">' . "\n";
echo '                                <select id="stream_category_id" class="form-control" data-toggle="select2">' . "\n";
echo '                                    <option value="" selected>All Categories</option>' . "\n";
echo '                                    <option value="-1"';
if (isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -1)) {
    echo ' selected';
}
echo '>No Categories</option>' . "\n";
echo '                                    ';

foreach (f769e3f0C739D1A6('live') as $Dbcac322b4274e46) {
    echo '                                    <option value="';
    echo $Dbcac322b4274e46['id'];
    echo '"';
    if (isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id'])) {
        echo ' selected';
    }
    echo '>';
    echo $Dbcac322b4274e46['category_name'];
    echo '</option>' . "\n";
    echo '                                    ';
}

echo '                                </select>' . "\n";
echo '                            </div>' . "\n";
echo '                            <div class="col-md-2">' . "\n";
echo '                                <select id="stream_filter" class="form-control" data-toggle="select2">' . "\n";
echo '                                    <option value="';
if (!isset(XUI::$rRequest['filter'])) {
    echo ' selected';
}
echo '>No Filter</option>' . "\n";

echo '                                    <option value="1"';
if (isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1)) {
    echo ' selected';
}
echo '>Online</option>' . "\n";
echo '                                    <option value="2"';
if (isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2)) {
    echo ' selected';
}
echo '>Stopped</option>' . "\n";
echo '                                    <option value="3"';
if (isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3)) {
    echo ' selected';
}
echo '>Creating</option>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<option value="4"';
if (isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4)) {
    echo ' selected';
}
echo '>Transcoding</option>' . "\n";
echo '                                </select>' . "\n";
echo '                            </div>' . "\n";
echo '                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>' . "\n";
echo '                            <div class="col-md-1">' . "\n";
echo '                                <select id="stream_show_entries" class="form-control" data-toggle="select2">' . "\n";
echo '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
    echo '                                    <option';
    
    if (isset(XUI::$rRequest['entries'])) {
        if (XUI::$rRequest['entries'] == $C17543903e9aa6ae) {
            echo ' selected';
        }
    } elseif ($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae) {
        echo ' selected';
    }
    
    echo ' value="';
    echo $C17543903e9aa6ae;
    echo '">';
    echo $C17543903e9aa6ae;
    echo '</option>' . "\n";
    echo '                                    ';
}

echo '                                </select>' . "\n";
echo '                            </div>' . "\n";
echo '                        </div>' . "\n\t\t\t\t\t\t";
echo '<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t";
echo '<thead>' . "\n\t\t\t\t\t\t\t\t";
echo '<tr>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">ID</th>' . "\n";
echo '                                    <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th>Name</th>' . "\n";
echo '                                    ';

if ($f1dcaed925076e67['streams_grouped'] == 1) {
    echo "\t\t\t\t\t\t\t\t\t" . '<th>Servers</th>' . "\n";
    echo '                                    ';
} else {
    echo '                                    <th>Server</th>' . "\n\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Clients</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Uptime</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Player</th>' . "\n\t\t\t\t\t\t\t\t\t";
echo '<th class="text-center">Channel Info</th>' . "\n\t\t\t\t\t\t\t\t";
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
