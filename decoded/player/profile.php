<?php


goto label203;

label1:

echo "\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<a class="nav-link" data-toggle="tab" href="#tab-bouquets" role="tab" aria-controls="tab-bouquets" aria-selected="false">Bouquets</a>' . "\r\n\t\t\t\t\t\t\t\t" . '</li>' . "\r\n" . '                                ';

label2:

echo "\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t" . '<div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<input type="button" value="Profile">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<ul class="nav nav-tabs" role="tablist">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<li class="nav-item"><a class="nav-link active" id="profile-tab" data-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="true">Profile</a></li>' . "\r\n" . '                                        ';

if (!XUI::$rSettings['player_allow_bouquet']) {
	goto label85;
}

echo "\t\t\t\t\t\t\t\t\t\t" . '<li class="nav-item"><a class="nav-link" id="bouquets-tab" data-toggle="tab" href="#tab-bouquets" role="tab" aria-controls="tab-bouquets" aria-selected="false">Bouquets</a></li>' . "\r\n" . '                                        ';
goto label85;

label10:

echo "\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n";
goto label243;

label12:

echo '                <div class="tab-pane fade hide" id="tab-bouquets" role="tabpanel" aria-labelledby="bouquets-tab">' . "\r\n" . '                    <div class="row">' . "\r\n" . '                        <div class="col-12 col-lg-12">' . "\r\n" . '                            <form action="profile.php" class="profile__form" id="bouquet__form" method="POST">' . "\r\n" . '                                <input type="hidden" id="bouquet_order_array" name="bouquet_order" value="" />' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<h4 class="profile__title">Bouquet Order</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12 col-md-12 col-lg-12 col-xl-12">' . "\r\n" . '                                        <div class="profile__group">' . "\r\n" . '                                            <select multiple="" id="sort_bouquet" class="profile__input" style="min-height:250px;">' . "\r\n" . '                                                ';

foreach ($E59d0debc75e7be8['bouquet'] as $f155fef57262b32a) {
	echo '                                                <option value="';
	echo intval($f155fef57262b32a);
	echo '">';
	echo htmlentities($d6a13fdcb7303587[$f155fef57262b32a]);
	echo '</option>' . "\r\n" . '                                                ';
}

echo '                                            </select>' . "\r\n" . '                                            <ul>' . "\r\n" . '                                                <li class="move__buttons">' . "\r\n" . '                                                    <button type="button" onClick="MoveUp()"><i class="icon ion-md-arrow-dropup"></i></button>' . "\r\n" . '                                                    <button type="button" onClick="MoveDown()"><i class="icon ion-md-arrow-dropdown"></i></button>' . "\r\n" . '                                                    <button type="button" onClick="AtoZ()">A to Z</button>' . "\r\n" . '                                                    <button type="submit" class="save__button">Save Changes</button>' . "\r\n" . '                                                </li>' . "\r\n" . '                                            </ul>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                            </form>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';

label31:

goto label10;

label32:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (PLATFORM == 'xui') {
		goto label59;
	}

	echo '<optgroup label="' . $Fb9da1713bff19ce['device_name'] . '"><option value="' . $Fb9da1713bff19ce['device_key'] . '&output=hls">' . $Fb9da1713bff19ce['device_name'] . ' - HLS </option><option value="' . $Fb9da1713bff19ce['device_key'] . '">' . $Fb9da1713bff19ce['device_name'] . ' - MPEGTS</option></optgroup>';
	goto label75;

	label59:

	echo '<optgroup label="' . $Fb9da1713bff19ce['device_name'] . '"><option value="' . $Fb9da1713bff19ce['device_key'] . '?output=hls">' . $Fb9da1713bff19ce['device_name'] . ' - HLS </option><option value="' . $Fb9da1713bff19ce['device_key'] . '">' . $Fb9da1713bff19ce['device_name'] . ' - MPEGTS</option></optgroup>';

	label75:
}

echo '                                            </select>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    ';

if (!(PLATFORM == 'xui')) {
	goto label115;
}

echo '                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="profile__group">' . "\r\n" . '                                            <label class="profile__label" for="output_type">Output</label>' . "\r\n" . '                                            <select id="output_type" class="profile__input" data-toggle="select2">' . "\r\n" . '                                                <option value="" selected>Everything</option>' . "\r\n" . '                                                <option value="live">Live Streams</option>' . "\r\n" . '                                                <option value="movie">Movies</option>' . "\r\n" . '                                                <option value="created_live">Created Channels</option>' . "\r\n" . '                                                <option value="radio_streams">Radio Stations</option>' . "\r\n" . '                                                <option value="series">TV Series</option>' . "\r\n" . '                                            </select>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    ';
goto label115;

label85:

echo "\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<button class="profile__logout" type="button" onClick="doLogout()">' . "\r\n\t\t\t\t\t\t\t\t" . '<span>Logout</span>' . "\r\n\t\t\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="tab-content">' . "\r\n\t\t\t\t" . '<div class="tab-pane fade show active" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">' . "\r\n\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t" . '<div class="col-12';

if (!XUI::$rSettings['player_allow_playlist']) {
	goto label92;
}

echo ' col-lg-6';

label92:

goto label189;

label93:

$b62d6460eb33ea07->query('SELECT * FROM `devices` WHERE `copy_text` IS NULL ORDER BY `device_id` ASC;');
goto label100;

label97:

$b62d6460eb33ea07->query('SELECT * FROM `output_devices` WHERE `copy_text` IS NULL ORDER BY `device_id` ASC;');

label100:

goto label32;

label101:

include 'header.php';
echo "\t" . '<section class="section section--first section--bg" data-bg="img/pattern.png">' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<div class="section__wrap">' . "\r\n\t\t\t\t\t\t" . '<h2 class="section__title">PROFILE</h2>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</section>' . "\r\n\t" . '<div class="content">' . "\r\n\t\t" . '<div class="profile">' . "\r\n\t\t\t" . '<div class="container">' . "\r\n\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t" . '<div class="profile__content">' . "\r\n\t\t\t\t\t\t\t" . '<div class="profile__user">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="profile__meta">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<h3>Username</h3>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<span>';
echo htmlspecialchars($E59d0debc75e7be8['username']);
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">' . "\r\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<a class="nav-link active" data-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="true">Profile</a>' . "\r\n\t\t\t\t\t\t\t\t" . '</li>' . "\r\n" . '                                ';

if (!XUI::$rSettings['player_allow_bouquet']) {
	goto label2;
}

goto label1;

label115:

echo '                                </div>' . "\r\n" . '                            </form>' . "\r\n" . '                        </div>' . "\r\n" . '                        <div class="col-12 col-lg-12">' . "\r\n" . '                            <form action="#" class="profile__form">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<h4 class="profile__title">Download URL</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12 col-md-12 col-lg-12 col-xl-12">' . "\r\n" . '                                        <div class="profile__group">' . "\r\n" . '                                            <input type="text" class="profile__input" id="download_url" value="" readonly>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                            </form>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label116:

echo '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                ';

if (!XUI::$rSettings['player_allow_bouquet']) {
	goto label31;
}

goto label12;

label123:

goto label146;

label124:

$b62d6460eb33ea07->query('UPDATE `lines` SET `bouquet` = ? WHERE `id` = ?;', '[' . implode(',', $E59d0debc75e7be8['bouquet']) . ']', $E59d0debc75e7be8['id']);

if (!XUI::$rCached) {
	goto label146;
}

XUI::ccB5075c679E7314($E59d0debc75e7be8['id']);
goto label146;

label146:

$F6edd90960a3bd9d = 'Profile';
goto label101;

label148:

if (!isset(XUI::$rRequest['bouquet_order'])) {
	goto label146;
}

$Eabe10398b9ee564 = json_decode(XUI::$rRequest['bouquet_order'], true);
$E59d0debc75e7be8['bouquet'] = array_map('intval', sortArrayByArray($E59d0debc75e7be8['bouquet'], $Eabe10398b9ee564));

if (PLATFORM == 'xui') {
	goto label124;
}

$b62d6460eb33ea07->query('UPDATE `users` SET `bouquet` = ? WHERE `id` = ?;', '[' . implode(',', $E59d0debc75e7be8['bouquet']) . ']', $E59d0debc75e7be8['id']);
goto label123;

label189:

echo '">' . "\r\n\t\t\t\t\t\t\t" . '<form action="#" class="profile__form">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<h4 class="profile__title">Line Details</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12 col-md-6 col-lg-12 col-xl-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="profile__group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<label class="profile__label" for="username">Username</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<input id="username" type="text" name="username" class="profile__input" value="';
echo htmlentities($E59d0debc75e7be8['username']);
echo '" readonly>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12 col-md-6 col-lg-12 col-xl-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="profile__group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<label class="profile__label" for="password">Password</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<input id="password" type="text" name="password" class="profile__input" value="';
echo htmlentities($E59d0debc75e7be8['password']);
echo '" readonly>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12 col-md-12 col-lg-12 col-xl-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="profile__group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<label class="profile__label" for="expiry">Expiry Date</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<input id="expiry" type="text" name="expiry" class="profile__input" value="';
goto label220;

label203:

include 'functions.php';

if (!XUI::$rSettings['player_allow_bouquet']) {
	goto label146;
}

$d6a13fdcb7303587 = [];

foreach (XUI::$rBouquets as $f155fef57262b32a) {
	$d6a13fdcb7303587[$f155fef57262b32a['id']] = $f155fef57262b32a['bouquet_name'];
}

goto label148;

label220:

echo $E59d0debc75e7be8['exp_date'] ? date('l jS F Y h:i A', $E59d0debc75e7be8['exp_date']) : 'Never';
echo '" readonly>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

if (!XUI::$rSettings['player_allow_playlist']) {
	goto label116;
}

echo "\t\t\t\t\t\t" . '<div class="col-12 col-lg-6">' . "\r\n\t\t\t\t\t\t\t" . '<form action="#" class="profile__form">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<h4 class="profile__title">Playlist</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12 col-md-12 col-lg-12 col-xl-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="profile__group">' . "\r\n" . '                                            <label class="profile__label" for="download_type">Format</label>' . "\r\n" . '                                            <select id="download_type" class="profile__input" data-toggle="select2">' . "\r\n" . '                                                ';

if (PLATFORM == 'xui') {
	goto label97;
}

goto label93;

label243:

include 'footer.php';

?>