<?php


goto label176;

label1:

echo $_['send_message'];
echo '</option>' . "\r\n" . '                            <option value="cut_off">';
echo $_['close_portal'];
echo '</option>' . "\r\n" . '                            <option value="reset_stb_lock">';
echo $_['reset_stb_lock'];
goto label18;

label10:

echo '</td>' . "\r\n" . '                                    <td class="text-center" id="cost_credits">0</td>' . "\r\n" . '                                    <td class="text-center" id="remaining_credits">0</td>' . "\r\n" . '                                </tr>' . "\r\n" . '                            </tbody>' . "\r\n" . '                        </table>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-md-12">' . "\r\n" . '                        <button class="btn btn-info waves-effect waves-light" style="width:100%;" type="button" onClick="submitCredits();" id="credits_submit">Adjust Credits</button>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";

label11:

echo '<div class="modal fade bs-type-modal-center" tabindex="-1" role="dialog" aria-labelledby="typeLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-sm">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="typeLabel">Manage Lines</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    ';

if (!$db0a61ef32b89a27['create_line']) {
	goto label80;
}

echo '                    <div class="col-md-12">' . "\r\n" . '                        <a href="lines"><button type="button" class="btn btn-dark" style="width:100%">User Lines</button></a>' . "\r\n" . '                    </div>' . "\r\n" . '                    ';
goto label80;

label18:

echo '</option>' . "\r\n" . '                        </optgroup>' . "\r\n" . '                    </select>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="col-12" style="margin-top:20px;display:none;" id="send_msg_form">' . "\r\n" . '                    <div class="form-group row mb-4">' . "\r\n" . '                        <div class="col-md-12">' . "\r\n" . '                            <textarea id="message" name="message" class="form-control" rows="3" placeholder="';
echo $_['enter_a_custom_message'];
echo '..."></textarea>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="form-group row mb-4">' . "\r\n" . '                        <label class="col-md-9 col-form-label" for="reboot_portal">';
echo $_['reboot_on_confirmation'];
echo '</label>' . "\r\n" . '                        <div class="col-md-3">' . "\r\n" . '                            <input name="reboot_portal" id="reboot_portal" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="col-12" style="margin-top:20px;display:none;" id="play_channel_form">' . "\r\n" . '                    <div class="form-group row mb-4">' . "\r\n" . '                        <label class="col-md-3 col-form-label" for="selected_channel">';
goto label62;

label26:

echo '                            <option value="reload_portal">';
echo $_['reload_portal'];
echo '</option>' . "\r\n" . '                            <option value="reboot">';
echo $_['reboot_device'];
echo '</option>' . "\r\n" . '                            <option value="send_msg">';
goto label1;

label34:

echo '<div class="modal fade bs-whois-modal-center" tabindex="-1" role="dialog" aria-labelledby="whoisLabel" aria-hidden="true" style="display: none;">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="whoisLabel"></h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table class="table mb-0" id="whois-table">' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">GEOLOCATION</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Continent</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Country</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">City</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Postcode</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Lat Lng</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">ISP</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">ISP Name</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Organisation</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">AS Number</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row" class="bg-secondary text-center text-white" colspan="2">LOCALE</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Timezone</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th scope="row">Local Time</th>' . "\r\n" . '                            <td></td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";

if (!$db0a61ef32b89a27['allow_download']) {
	goto label171;
}

echo '<div class="modal fade downloadModal" role="dialog" aria-labelledby="downloadLabel" aria-hidden="true" style="display: none;" data-username="" data-password="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="downloadModal">Download Playlist</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <label class="col-md-4 col-form-label" for="download_type">Format</label>' . "\r\n" . '                    <div class="col-8">' . "\r\n" . '                        <select id="download_type" class="form-control" data-toggle="select2">' . "\r\n" . '                            ';
$b62d6460eb33ea07->query('SELECT * FROM `output_devices` ORDER BY `device_id` ASC;');
goto label90;

label44:

if (!$db0a61ef32b89a27['create_sub_resellers']) {
	goto label11;
}

echo '<div class="modal fade creditsModal" role="dialog" aria-labelledby="creditsLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="creditsModal"></h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="alert alert-danger" role="alert" id="indirect">' . "\r\n" . '                    This user does not directly report to you, by adding credits you will be spending your own credits and not the credits of this users\' owner.' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <label class="col-md-8 col-form-label" for="credits">Adjust Credits (+ / -)</label>' . "\r\n" . '                    <div class="col-md-4">' . "\r\n" . '                        <input type="text" class="form-control text-center" id="credits" onkeypress="return isNumberKey(event)" name="credits" value="" autocomplete="off">' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-md-12">' . "\r\n" . '                        <input type="text" class="form-control" id="credits_reason" name="credits_reason" placeholder="Reason for Adjustment..." value="" autocomplete="off">' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-md-12">' . "\r\n" . '                        <table class="table table-striped table-borderless" id="credits-cost">' . "\r\n" . '                            <thead>' . "\r\n" . '                                <tr>' . "\r\n" . '                                    <th class="text-center">My Credits</th>' . "\r\n" . '                                    <th class="text-center">Adjustment Cost</th>' . "\r\n" . '                                    <th class="text-center">Remaining Credits</th>' . "\r\n" . '                                </tr>' . "\r\n" . '                            </thead>' . "\r\n" . '                            <tbody>' . "\r\n" . '                                <tr>' . "\r\n" . '                                    <td class="text-center" id="total_credits" data-credits="';
echo intval($E59d0debc75e7be8['credits']);
echo '">';
echo number_format($E59d0debc75e7be8['credits'], 0);
goto label10;

label62:

echo $_['channel'];
echo '</label>' . "\r\n" . '                        <div class="col-md-9">' . "\r\n" . '                            <select id="selected_channel" name="selected_channel" class="form-control" data-toggle="select2" style="width:100%;"></select>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-footer">' . "\r\n" . '                <button disabled id="message_submit" type="button" class="btn btn-primary waves-effect">';
echo $_['send_event'];
echo '</button>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";

label68:

goto label44;

label69:

echo '                    <div class="col-md-12">' . "\r\n" . '                        <a href="enigmas"><button type="button" class="btn btn-dark" style="width:100%">Enigma Devices</button></a>' . "\r\n" . '                    </div>' . "\r\n" . '                    ';

label70:

goto label200;

label71:

if (!$db0a61ef32b89a27['can_view_vod']) {
	goto label79;
}

echo '                            <option value="play_channel">';
echo $_['play_channel'];
echo '</option>' . "\r\n" . '                            ';

label79:

goto label26;

label80:

if (!$db0a61ef32b89a27['create_mag']) {
	goto label85;
}

echo '                    <div class="col-md-12">' . "\r\n" . '                        <a href="mags"><button type="button" class="btn btn-dark" style="width:100%">MAG Devices</button></a>' . "\r\n" . '                    </div>' . "\r\n" . '                    ';

label85:

if (!$db0a61ef32b89a27['create_enigma']) {
	goto label70;
}

goto label69;

label90:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if ($Fb9da1713bff19ce['copy_text']) {
		goto label122;
	}

	echo '<optgroup label="' . $Fb9da1713bff19ce['device_name'] . '"><option value="' . $Fb9da1713bff19ce['device_key'] . '?output=hls">' . $Fb9da1713bff19ce['device_name'] . ' - HLS </option><option value="' . $Fb9da1713bff19ce['device_key'] . '">' . $Fb9da1713bff19ce['device_name'] . ' - MPEGTS</option><option value="' . $Fb9da1713bff19ce['device_key'] . '?output=rtmp">' . $Fb9da1713bff19ce['device_name'] . ' - RTMP</option></optgroup>';
	goto label168;

	label122:

	echo '<optgroup label="' . $Fb9da1713bff19ce['device_name'] . '"><option data-text="' . str_replace('"', '\\"', $Fb9da1713bff19ce['copy_text']) . '" value="' . $Fb9da1713bff19ce['device_key'] . '?output=hls">' . $Fb9da1713bff19ce['device_name'] . ' - HLS </option><option data-text="' . str_replace('"', '\\"', $Fb9da1713bff19ce['copy_text']) . '" value="' . $Fb9da1713bff19ce['device_key'] . '">' . $Fb9da1713bff19ce['device_name'] . ' - MPEGTS</option><option data-text="' . str_replace('"', '\\"', $Fb9da1713bff19ce['copy_text']) . '" value="' . $Fb9da1713bff19ce['device_key'] . '?output=rtmp">' . $Fb9da1713bff19ce['device_name'] . ' - RTMP</option></optgroup>';

	label168:
}

echo '                        </select>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <label class="col-md-4 col-form-label" for="output_type">Limit Output</label>' . "\r\n" . '                    <div class="col-8">' . "\r\n" . '                        <select id="output_type" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n" . '                            <option value="live">Live Streams</option>' . "\r\n" . '                            <option value="movie">Movies</option>' . "\r\n" . '                            <option value="created_live">Created Channels</option>' . "\r\n" . '                            <option value="radio_streams">Radio Stations</option>' . "\r\n" . '                            <option value="series">TV Series</option>' . "\r\n" . '                        </select>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="form-group row">' . "\r\n" . '                    <div class="col-12">' . "\r\n" . '                        <div class="input-group">' . "\r\n" . '                            <input type="text" class="form-control" id="download_url" value="">' . "\r\n" . '                            <div class="input-group-append">' . "\r\n" . '                                <button class="btn btn-warning waves-effect waves-light" type="button" onClick="copyDownload();"><i class="mdi mdi-content-copy"></i></button>' . "\r\n" . '                                <button class="btn btn-info waves-effect waves-light" type="button" onClick="doDownload();" id="download_button" disabled><i class="mdi mdi-download"></i></button>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";

label171:

if (!$db0a61ef32b89a27['create_mag']) {
	goto label68;
}

goto label192;

label176:

if (!(count(get_included_files()) == 1)) {
	goto label186;
}

exit();

label186:

if (!$db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label34;
}

echo '<div class="modal fade bs-streams-modal-center" tabindex="-1" role="dialog" aria-labelledby="streamViewLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-lg">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable" class="table table-striped table-borderless mb-0" style="width:100%;">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th></th>' . "\r\n" . '                            <th></th>' . "\r\n" . '                            <th></th>' . "\r\n" . '                            <th>Server</th>' . "\r\n" . '                            <th>Clients</th>' . "\r\n" . '                            <th>Uptime</th>' . "\r\n" . '                            <th>Actions</th>' . "\r\n" . '                            <th></th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td colspan="8" class="text-center">Loading information...</td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-live-modal-center" tabindex="-1" role="dialog" aria-labelledby="liveViewLabel" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <table id="datatable-live" class="table table-striped table-borderless mb-0" style="width:100%;">' . "\r\n" . '                    <thead>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <th class="text-center">ID</th>' . "\r\n" . '                            <th class="text-center">Quality</th>' . "\r\n" . '                            <th>Line</th>' . "\r\n" . '                            <th>Stream</th>' . "\r\n" . '                            <th>Player</th>' . "\r\n" . '                            <th>ISP</th>' . "\r\n" . '                            <th class="text-center">IP</th>' . "\r\n" . '                            <th class="text-center">Duration</th>' . "\r\n" . '                            <th class="text-center">Output</th>' . "\r\n" . '                            <th class="text-center">Kill</th>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </thead>' . "\r\n" . '                    <tbody>' . "\r\n" . '                        <tr>' . "\r\n" . '                            <td colspan="10" class="text-center">Loading live connections...</td>' . "\r\n" . '                        </tr>' . "\r\n" . '                    </tbody>' . "\r\n" . '                </table>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";
goto label34;

label192:

echo '<div class="modal fade messageModal" role="dialog" aria-labelledby="messageModal" aria-hidden="true" style="display: none;" data-id="">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title" id="messageModal">';
echo $_['mag_event'];
echo '</h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <div class="col-12">' . "\r\n" . '                    <select id="message_type" class="form-control" data-toggle="select2" >' . "\r\n" . '                        <option value="" selected>';
echo $_['select_an_event'];
echo ':</option>' . "\r\n" . '                        <optgroup label="">' . "\r\n" . '                            ';
goto label71;

label200:

echo '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n" . '<div class="modal fade bs-programme" tabindex="-1" role="dialog" aria-labelledby="programmeLabel" aria-hidden="true" style="display: none;">' . "\r\n" . '    <div class="modal-dialog modal-dialog-centered modal-md">' . "\r\n" . '        <div class="modal-content">' . "\r\n" . '            <div class="modal-header">' . "\r\n" . '                <h4 class="modal-title"><span id="programmeLabel"></span> &nbsp;<small><span id="programmeStart"></span></small></h4>' . "\r\n" . '                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="modal-body">' . "\r\n" . '                <p class="sub-header" id="programmeDescription"></p>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '    </div>' . "\r\n" . '</div>';

?>