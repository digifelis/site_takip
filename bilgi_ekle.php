<?php
require __DIR__ . '/vendor/autoload.php';
include "db_data.php";
$min_minute_check = 1;

if(!empty($_GET['site_id'])) {
    $site_id = $_GET['site_id'];
    $site_id = 1;
    $ip = (new App\client_data())->client_ip();
    $referer = (new App\client_data())->page_adress();
    $fullzaman = (new App\client_data())->fulldatetime();

    $varmi = (new App\add_data())->varmi($db_info, $ip, $site_id, $referer);

    if ($varmi == 0)
    {
        $cevap = (new App\add_data())->insert_record($db_info, $ip, $referer, $fullzaman, $site_id);
    } else {
        $son_gorulme_zamani = (new App\add_data())->son_gorulme_zamani($db_info, $ip, $site_id, $referer);
        $zaman_farki = (new App\general())->dateDifference($son_gorulme_zamani, $fullzaman);
        if ((int)$zaman_farki > (int)$min_minute_check) {
            $cevap = (new App\add_data())->insert_record($db_info, $ip, $referer, $fullzaman, $site_id);
        } else {
            $etkilenen = (new App\add_data())->update_record($db_info, $ip, $fullzaman, $site_id,$varmi);
        }
    }
}
