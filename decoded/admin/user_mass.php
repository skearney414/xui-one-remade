<?php


goto label104;

label1:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <label class="col-md-1 col-form-label text-center" for="reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();">CLEAR</button></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="filter" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">Active</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">Disabled</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label12;
	}

	echo ' selected';

	label12:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleUsers()">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-mass" class="table table-borderless mb-0" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n" . '                                                        <th>Username</th>' . "\r\n" . '                                                        <th>Owner</th>' . "\r\n" . '                                                        <th class="text-center">IP</th>' . "\r\n" . '                                                        <th class="text-center">Status</th>' . "\r\n" . '                                                        <th class="text-center">Type</th>' . "\r\n" . '                                                        <th class="text-center">Credits</th>' . "\r\n" . '                                                        <th class="text-center">Users</th>' . "\r\n" . '                                                        <th class="text-center">Lines</th>' . "\r\n" . '                                                        <th class="text-center">MAGs</th>' . "\r\n" . '                                                        <th class="text-center">Enigmas</th>' . "\r\n" . '                                                        <th class="text-center">Last Login</th>' . "\r\n" . '                                                        <th class="text-center">Actions</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To mass edit any of the below options, tick the checkbox next to it and change the input value.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="owner_id" name="c_owner_id">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="owner_id">Owner</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="owner_id" id="owner_id" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                            <option value="0">No Owner</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (b36ce90e79fb0e76() as $De48bf4d3fb2f3d2) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $De48bf4d3fb2f3d2['id'];
	echo '">';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label73;

label34:

$F6edd90960a3bd9d = 'Mass Edit Users';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label92;
}

echo ' style="display: none;"';
goto label92;

label53:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Mass edit of users was successfully executed!' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label54:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" name="users_selected" id="users_selected" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-group mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Users</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#package-override" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flower-tulip mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Package Override</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-selection">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_search" value="" placeholder="Search Users...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n" . '                                                <select id="reseller_search" class="form-control" data-toggle="select2">' . "\r\n" . '                                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = bA89228DC958cE05(intval(XUI::$rRequest['owner']))))) {
	goto label122;
}

echo '                                                    <option value="';
goto label113;

label73:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="member_group_id" name="c_member_group_id">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="member_group_id">Member Group</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="member_group_id" id="member_group_id" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (Ad052a625C6ac011() as $fb719dae9595b9fa) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($fb719dae9595b9fa['group_id']);
	echo '">';
	echo $fb719dae9595b9fa['group_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="reseller_dns" name="c_reseller_dns">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="reseller_dns">Reseller DNS</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled type="text" class="form-control" id="reseller_dns" name="reseller_dns" value="">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="status" data-type="switch" name="c_status">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="status">Enabled</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled name="status" id="status" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="package-override">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="alert alert-info" role="alert">' . "\r\n" . '                                                    Leave the override cell blank to disable package override for the selected package.<br/>All packages are displayed below, however the users you have selected may not have access to a particular package.' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">#</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Package</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Credits</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Override</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label123;

label92:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Mass Edit Users <small id="selected_count"></small></h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label54;
}

goto label53;

label104:

include 'session.php';
include 'functions.php';

if (E6d500E19634D513()) {
	goto label112;
}

E72F42a93714Ba87();

label112:

goto label34;

label113:

echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
echo '</option>' . "\r\n" . '                                                    ';

label122:

goto label1;

label123:

foreach (d8c8284136938eF0() as $cc386f9ba082650e) {
	goto label146;

	label129:

	goto label162;

	label131:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($cc386f9ba082650e['official_credits']);
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td align="center">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input class="form-control text-center orinput" onkeypress="return isNumberKey(event)" name="override_';
	echo intval($cc386f9ba082650e['id']);
	echo '" type="text" value="" style="width:100px; display: inline;" class="text-center" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label129;

	label146:

	if (!$cc386f9ba082650e['is_official']) {
		goto label129;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($cc386f9ba082650e['id']);
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $cc386f9ba082650e['package_name'];
	goto label131;

	label162:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n" . '                                                <div class="custom-control col-md-12 custom-checkbox text-center" style="margin-top:20px;">' . "\r\n" . '                                                    <input type="checkbox" class="custom-control-input" id="c_override" data-name="override" data-type="override" name="c_override">' . "\r\n" . '                                                    <label class="custom-control-label" for="c_override">Tick this box to apply the above package override to all selected users.</label>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_user" type="submit" class="btn btn-primary" value="Mass Edit" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label166;

label166:

include 'footer.php';

?>