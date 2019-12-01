<?php
//error_reporting(0);
require __DIR__ . '/vendor/autoload.php';
use App\add_data;
use App\client_data;
use App\general;
include "db_data.php";
$min_minute_check = 1;

if(!empty($_GET['site_id'])) {
    $site_id = $_GET['site_id'];
    $site_id = 1;
    $ip = (new client_data())->client_ip();
    $referer = (new client_data())->page_adress();
    $fullzaman = (new client_data())->fulldatetime();

    $varmi = (new add_data())->varmi($db_info, $ip, $site_id, $referer);

    if ($varmi == 0) {
        $cevap = (new add_data())->insert_record($db_info, $ip, $referer, $fullzaman, $site_id);
    } else {
        $son_gorulme_zamani = (new add_data())->son_gorulme_zamani($db_info, $ip, $site_id, $referer);
        $zaman_farki = (new general())->dateDifference($son_gorulme_zamani, $fullzaman);
        if ((int)$zaman_farki > (int)$min_minute_check) {
            $cevap = (new add_data())->insert_record($db_info, $ip, $referer, $fullzaman, $site_id);
        } else {
            $etkilenen = (new add_data())->update_record($db_info, $ip, $fullzaman, $site_id,$varmi);
        }
    }
}

?>
