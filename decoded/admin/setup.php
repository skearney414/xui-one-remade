<?php

include 'functions.php';

$aa7ca17b42be6668 = true;
$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `users_groups`.`is_admin` = 1;');

if (0 < $b62d6460eb33ea07->get_row()['count']) {
    $aa7ca17b42be6668 = false;
}

include 'session.php';

if (!e6D500E19634D513()) {
    e72F42A93714Ba87();
}

$C402625c994f05bd = false;
if (file_exists(TMP_PATH . '.migration.status') && file_exists(TMP_PATH . '.migration.pid')) {
    $C98e11437faf4199 = file_get_contents(TMP_PATH . '.migration.pid');
    
    if (file_exists('/proc/' . $C98e11437faf4199)) {
        $C402625c994f05bd = true;
    }
}

if (isset(XUI::$rRequest['update'])) {
    if (file_exists(TMP_PATH . '.migration.log')) {
        $Ee6546c7961a39a7 = file_get_contents(TMP_PATH . '.migration.log');
        $b9f049445aa9bd5d = intval(file_get_contents(TMP_PATH . '.migration.status'));
        
        if (!$b9f049445aa9bd5d) {
            $b9f049445aa9bd5d = 1;
        }
        
        if ($b9f049445aa9bd5d == 2) {
            unlink(TMP_PATH . '.migration.options');
            unlink(TMP_PATH . '.migration.status');
            unlink(TMP_PATH . '.migration.pid');
            unlink(TMP_PATH . '.migration.log');
        }
        
        echo json_encode(['result' => true, 'status' => $b9f049445aa9bd5d, 'data' => $Ee6546c7961a39a7]);
        exit();
    } else {
        echo json_encode(['result' => false]);
        exit();
    }
}

if (isset(XUI::$rRequest['migrate'])) {
    $af280045ef711f83 = [];
    
    foreach (XUI::$rRequest as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
        if (substr($Bb672d1983256a93, 0, 8) == 'migrate#') {
            $af280045ef711f83[] = explode('#', $Bb672d1983256a93)[1];
        }
    }
    
    if (count($af280045ef711f83) == 0) {
        header('Location: ./setup');
        exit();
    }
    
    if (file_exists(TMP_PATH . '.migration.pid')) {
        $C98e11437faf4199 = intval(file_get_contents(TMP_PATH . '.migration.pid'));
        exec('kill -9 ' . $C98e11437faf4199);
    }
    
    file_put_contents(TMP_PATH . '.migration.options', json_encode($af280045ef711f83));
    unlink(TMP_PATH . '.migration.status');
    unlink(TMP_PATH . '.migration.pid');
    unlink(TMP_PATH . '.migration.log');
    shell_exec(PHP_BIN . ' ' . CLI_PATH . 'migrate.php > ' . TMP_PATH . '.migration.log 2>&1 &');
    $C402625c994f05bd = true;
}

if (isset(XUI::$rRequest['new_user']) && $aa7ca17b42be6668) {
    if ((strlen(XUI::$rRequest['password']) < 8) || (strlen(XUI::$rRequest['username']) < 8)) {
        XUI::$rRequest['new'] = 1;
        $cbcf0bbd5e139431 = STATUS_FAILURE;
    } else {
        $F647a429f8089f01 = C73Ed8D0B70Ce12f('users');
        $F647a429f8089f01['username'] = XUI::$rRequest['username'];
        $F647a429f8089f01['password'] = Deba522C14D0644C(XUI::$rRequest['password']);
        $F647a429f8089f01['email'] = XUI::$rRequest['email'];
        $F647a429f8089f01['date_registered'] = $F647a429f8089f01['last_login'] = time();
        $F647a429f8089f01['member_group_id'] = 1;
        $F647a429f8089f01['ip'] = DFaC1B11D332c193();
        $F647a429f8089f01['last_login'] = time();
        
        $Fac87d38f7786df0 = c483A3A59265139e($F647a429f8089f01);
        $B91645b8411dc88c = 'INSERT INTO `users`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
        
        if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
            $_SESSION['hash'] = $b62d6460eb33ea07->last_insert_id();
            $_SESSION['ip'] = dFaC1b11D332C193();
            $_SESSION['code'] = c9359222b3E3D256();
            $_SESSION['verify'] = md5($F647a429f8089f01['username'] . '||' . $F647a429f8089f01['password']);
            $b62d6460eb33ea07->query('UPDATE `servers` SET `server_ip` = ? WHERE `is_main` = 1 AND `server_type` = 0 LIMIT 1;', $_SERVER['SERVER_ADDR']);
            
            if ($_SESSION['code'] == 'setup') {
                header('Location: ./codes');
                exit();
            } else {
                header('Location: ./dashboard');
                exit();
            }
        } else {
            XUI::$rRequest['new'] = 1;
            $cbcf0bbd5e139431 = STATUS_FAILURE;
        }
    }
}

if (isset($_SESSION['hash'])) {
    header('Location: dashboard');
    exit();
}

$F6edd90960a3bd9d = 'Database Migration';
$cac15ca0551bffa7 = true;
include 'header.php';

$displayStyle = '';
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
    $displayStyle = ' style="display: none;"';
}

echo '<div class="wrapper boxed-layout"' . $displayStyle . '>' . "\r\n";
echo '    <div class="container-fluid">' . "\r\n\t\t";
echo '<div class="row">' . "\r\n\t\t\t";
echo '<div class="col-12">' . "\r\n\t\t\t\t";
echo '<div class="page-title-box">' . "\r\n\t\t\t\t\t";
echo '<h4 class="page-title">Database Migration</h4>' . "\r\n\t\t\t\t";
echo '</div>' . "\r\n\t\t\t";
echo '</div>' . "\r\n\t\t";
echo '</div>' . "\r\n\t\t";
echo '<div class="row">' . "\r\n\t\t\t";
echo '<div class="col-xl-12">' . "\r\n";
echo '                <div class="card-box">' . "\r\n";
echo '                    ';

if ($C402625c994f05bd) {
    echo "\t\t\t\t\t" . '<div class="col-md-12 align-self-center">' . "\r\n";
    echo '                        <div class="text-center" style="padding-top: 15px;">' . "\r\n";
    echo '                            <i class="mdi mdi-creation avatar-title font-24 text-info"></i><br/>' . "\r\n";
    echo '                            <h4 class="header-title text-info">Migrating...</h4>' . "\r\n";
    echo '                            <textarea readonly style="padding: 15px; margin-top: 20px; background: #56c2d6; color: #fff; border: 0; width: 100%; height: 300px; scroll-y: auto;" id="migration_progress"></textarea>' . "\r\n";
    echo '                            <ul class="list-inline wizard mb-4">' . "\r\n";
    echo '                                <li class="float-right">' . "\r\n";
    echo '                                    <button disabled onClick="migrateServer();" class="btn btn-info" id="migrate_button">Try Again</button>' . "\r\n";
    echo '                                </li>' . "\r\n";
    echo '                            </ul>' . "\r\n";
    echo '                        </div>' . "\r\n\t\t\t\t\t";
    echo '</div>' . "\r\n";
    echo '                    ';
} else if (isset(XUI::$rRequest['new']) && $aa7ca17b42be6668) {
    echo '                    <form action="./setup" method="POST" data-parsley-validate="">' . "\r\n";
    echo '                        <div class="row">' . "\r\n";
    echo '                            <div class="col-12">' . "\r\n";
    echo '                                ';
    
    if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_FAILURE)) {
        echo '                                <div class="alert alert-danger mb-4" role="alert">' . "\r\n";
        echo '                                    Please ensure your username and password are at least 8 characters long.' . "\r\n";
        echo '                                </div>' . "\r\n";
        echo '                                ';
    } else {
        echo '                                <div class="alert alert-info mb-4" role="alert">' . "\r\n";
        echo '                                    As you\'ve decided not to migrate a previous database, you need to create an admin account below.<br/>Choose a strong username and password or you may be susceptible to attacks.' . "\r\n";
        echo '                                </div>' . "\r\n";
        echo '                                ';
    }
    
    echo '                                <div class="form-group row mb-4">' . "\r\n";
    echo '                                    <label class="col-md-4 col-form-label" for="username">Admin Username</label>' . "\r\n";
    echo '                                    <div class="col-md-8">' . "\r\n";
    echo '                                        <input type="text" class="form-control" id="username" name="username" value="" required data-parsley-trigger="change">' . "\r\n";
    echo '                                    </div>' . "\r\n";
    echo '                                </div>' . "\r\n";
    echo '                                <div class="form-group row mb-4">' . "\r\n";
    echo '                                    <label class="col-md-4 col-form-label" for="password">Admin Password</label>' . "\r\n";
    echo '                                    <div class="col-md-8">' . "\r\n";
    echo '                                        <input type="password" class="form-control" id="password" name="password" value="" required data-parsley-trigger="change">' . "\r\n";
    echo '                                    </div>' . "\r\n";
    echo '                                </div>' . "\r\n";
    echo '                                <div class="form-group row mb-4">' . "\r\n";
    echo '                                    <label class="col-md-4 col-form-label" for="email">Email Address</label>' . "\r\n";
    echo '                                    <div class="col-md-8">' . "\r\n";
    echo '                                        <input type="text" class="form-control" id="email" name="email" value="">' . "\r\n";
    echo '                                    </div>' . "\r\n";
    echo '                                </div>' . "\r\n";
    echo '                            </div> ' . "\r\n";
    echo '                        </div> ' . "\r\n";
    echo '                        <ul class="list-inline wizard mb-4">' . "\r\n";
    echo '                            <li class="list-inline-item float-right">' . "\r\n";
    echo '                                <input name="new_user" type="submit" class="btn btn-primary" value="Create" />' . "\r\n";
    echo '                            </li>' . "\r\n";
    echo '                        </ul>' . "\r\n";
    echo '                    </form>' . "\r\n";
    echo '                    ';
} else {
    echo '                    <form action="./setup" method="POST" data-parsley-validate="">' . "\r\n";
    echo '                        <div class="row">' . "\r\n";
    echo '                            <div class="col-12">' . "\r\n";
    echo '                                <div class="alert alert-secondary mb-4" role="alert">' . "\r\n";
    echo '                                    In order to migrate your database from a previous installation of Xtream UI, ZapX (original and NXT), StreamCreed or generic Xtream Codes v2 installation, you will need to restore your migration database to the <strong>xui_migrate</strong> database as XUI will have access to it.<br/><br/>The script will then loop through all of your previously existing data and alter it to work with XUI. No logs will be migrated and some clean up may need to be done post-migration but this tool should help significantly in carrying over your data to your new panel.<br/><br/>For instructions visit the <a href="https://xui.one/billing/index.php?rp=/knowledgebase/3">XUI FAQ here</a>.<br/><br/>Once you\'re done, refresh the page.' . "\r\n";
    echo '                                </div>' . "\r\n";
    echo '                                ';
    
    $B82cee6a0ce3aa28 = false;
    $B77717332301b34a = false;
    $ede772dc4aad8c89 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', true);
    
    if ($ede772dc4aad8c89->connected) {
        $B82cee6a0ce3aa28 = true;
        
        $ede772dc4aad8c89->query('SHOW TABLES LIKE \'access_codes\';');
        if (0 < $ede772dc4aad8c89->num_rows()) {
            $B77717332301b34a = true;
        }
        
        $d353a4da8a0bb857 = [
            'reg_users'            => ['Users & Resellers', 0],
            'users'                => ['Lines - Standard, MAG & Enigma2 Devices', 0],
            'enigma2_devices'      => ['Device Info - Engima2', 0],
            'mag_devices'          => ['Device Info - MAG', 0],
            'user_output'          => ['Line Output - HLS, MPEG-TS & RTMP', 0],
            'streaming_servers'    => ['Servers - Load Balancers', 0],
            'series'               => ['TV Series', 0],
            'series_episodes'      => ['TV Episodes', 0],
            'streams'              => ['Streams - Live, Radio, Created & VOD', 0],
            'streams_sys'          => ['Stream Servers', 0],
            'streams_options'      => ['Stream Options', 0],
            'stream_categories'    => ['Stream Categories', 0],
            'bouquets'             => ['Bouquets', 0],
            'member_groups'        => ['Member Groups', 0],
            'packages'             => ['Reseller Packages', 0],
            'rtmp_ips'             => ['RTMP IP\'s', 0],
            'epg'                  => ['EPG Providers ', 0],
            'blocked_ips'          => ['Blocked IP Addresses', 0],
            'blocked_user_agents'  => ['Blocked User-Agents', 0],
            'isp_addon'            => ['Blocked ISP\'s', 0],
            'tickets'              => ['Tickets', 0],
            'tickets_replies'      => ['Ticket Replies', 0],
            'transcoding_profiles' => ['Transcoding Profile', 0],
            'watch_folders'        => ['Watch Folders', 0],
            'members'              => ['Users & Resellers', 0],
            'epg_sources'          => ['EPG Providers', 0],
            'blocked_isps'         => ['Blocked ISP\'s', 0],
            'categories'           => ['Stream Categories', 0],
            'groups'               => ['Member Groups', 0],
            'servers'              => ['Servers - Load Balancers', 0],
            'stream_servers'       => ['Stream Servers', 0]
        ];
        
        foreach (array_keys($d353a4da8a0bb857) as $b5a93f3474101e1f) {
            try {
                $ede772dc4aad8c89->query('SHOW TABLES LIKE \'' . $b5a93f3474101e1f . '\';');
                
                if (0 < $ede772dc4aad8c89->num_rows()) {
                    $ede772dc4aad8c89->query('SELECT COUNT(*) AS `count` FROM `' . $b5a93f3474101e1f . '`;');
                    $d353a4da8a0bb857[$b5a93f3474101e1f][1] = $ede772dc4aad8c89->get_row()['count'];
                }
            } catch (Exception $E0f0519e12b13b6b) {
            }
        }
        
        $c73cd8cac0bd34bf = 0;
        foreach ($d353a4da8a0bb857 as $b5a93f3474101e1f => $D4d4c14dcc76b6b3) {
            $c73cd8cac0bd34bf += $D4d4c14dcc76b6b3[1];
        }
        
        ksort($d353a4da8a0bb857);
        
        if ($B77717332301b34a) {
            echo '                                <div class="alert alert-danger mb-4" role="alert">' . "\r\n";
            echo '                                    The data restored to the xui_migrate database seems to contain tables attributed with XUI.one. You cannot migrate using this data, you need to restore it via the Databases section in the admin panel.' . "\r\n";
            echo '                                </div>' . "\r\n";
            echo '                                ';
        }
    } else {
        echo '                                <div class="alert alert-danger mb-4" role="alert">' . "\r\n";
        echo '                                    A connection to the xui_migrate database could not be made. Please ensure the database exists, if it does not, create it.' . "\r\n";
        echo '                                </div>' . "\r\n";
        echo '                                ';
    }
    
    echo '                            </div> ' . "\r\n";
    echo '                        </div> ' . "\r\n";
    
    if ($B82cee6a0ce3aa28 && !$B77717332301b34a && (0 < $c73cd8cac0bd34bf)) {
        echo '                        <div class="row">' . "\r\n";
        echo '                            <div class="col-12">' . "\r\n";
        echo '                                <div class="alert alert-secondary mb-4" role="alert">' . "\r\n";
        echo '                                    Below is a list of records found in the migration database. Please check this over and click Migrate when you\'re ready to begin. You can also uncheck tables you don\'t want to migrate.' . "\r\n";
        echo '                                </div>' . "\r\n";
        echo '                                <table class="table table-striped table-borderless mb-4">' . "\r\n";
        echo '                                    <thead>' . "\r\n";
        echo '                                        <tr>' . "\r\n";
        echo '                                            <th>Description</th>' . "\r\n";
        echo '                                            <th>Table Name</th>' . "\r\n";
        echo '                                            <th class="text-center">Records</th>' . "\r\n";
        echo '                                            <th class="text-center">Migrate</th>' . "\r\n";
        echo '                                        </tr>' . "\r\n";
        echo '                                    </thead>' . "\r\n";
        echo '                                    <tbody>' . "\r\n";
        echo '                                        ';
        
        foreach ($d353a4da8a0bb857 as $b5a93f3474101e1f => $B4a603c2a57d3acf) {
            if ($B4a603c2a57d3acf[1] > 0) {
                echo '                                        <tr>' . "\r\n";
                echo '                                            <td>';
                echo $B4a603c2a57d3acf[0];
                echo '</td>' . "\r\n";
                echo '                                            <td>';
                echo $b5a93f3474101e1f;
                echo '</td>' . "\r\n";
                echo '                                            <td class="text-center"><button type="button" class="btn btn-';
                echo 0 < $B4a603c2a57d3acf[1] ? 'info' : 'secondary';
                echo ' btn-xs waves-effect waves-light">';
                echo $B4a603c2a57d3acf[1];
                echo '</button></td>' . "\r\n";
                echo '                                            <td class="text-center">' . "\r\n";
                echo '                                                <div class="checkbox checkbox-single checkbox-info">' . "\r\n";
                echo '                                                    <input name="migrate#';
                echo $b5a93f3474101e1f;
                echo '" ';
                echo 0 < $B4a603c2a57d3acf[1] ? 'checked' : 'disabled';
                echo ' type="checkbox" class="activate">' . "\r\n";
                echo '                                                    <label></label>' . "\r\n";
                echo '                                                </div>' . "\r\n";
                echo '                                            </td>' . "\r\n";
                echo '                                        </tr>' . "\r\n";
                echo '                                        ';
            }
        }
        
        echo '                                    </tbody>' . "\r\n";
        echo '                                </table>' . "\r\n";
        echo '                            </div>' . "\r\n";
        echo '                        </div>' . "\r\n";
        echo '                        ';
    }
    
    echo '                        <div class="row">' . "\r\n";
    echo '                            <div class="col-12">' . "\r\n";
    echo '                                <ul class="list-inline wizard">' . "\r\n";
    echo '                                    ';
    
    if ($aa7ca17b42be6668) {
        echo '                                    <li class="list-inline-item">' . "\r\n";
        echo '                                        <a href="./setup?new"><button name="dont_migrate" class="btn btn-danger" type="button">Don\'t Migrate</button></a>' . "\r\n";
        echo '                                    </li>' . "\r\n";
        echo '                                    ';
    }
    
    if ($B82cee6a0ce3aa28 && !$B77717332301b34a && (0 < $c73cd8cac0bd34bf)) {
        echo '                                    <li class="list-inline-item float-right">' . "\r\n";
        echo '                                        <input name="migrate" type="submit" class="btn btn-primary" value="Migrate" />' . "\r\n";
        echo '                                    </li>' . "\r\n";
        echo '                                    ';
    }
    
    echo '                                </ul>' . "\r\n";
    echo '                            </div>' . "\r\n";
    echo '                        </div>' . "\r\n";
    echo '                    </form>' . "\r\n";
    echo '                    ';
}

echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t";
echo '</div> ' . "\r\n\t\t";
echo '</div>' . "\r\n\t";
echo '</div>' . "\r\n";
echo '</div>' . "\r\n";

include 'footer.php';

?>
