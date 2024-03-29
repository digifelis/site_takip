<?php
header("Content-Type:application/json");
require __DIR__ . '/vendor/autoload.php';

include "db_data.php";

if (!empty($_GET['day']) and !empty($_GET['site_id']))
{
    $numberOfDay = $_GET['day'];
    $site_id = $_GET['site_id'];

    $istekData = site_get_data($numberOfDay,$site_id);
    if (empty($istekData))
    {
        response(TRUE, "Out of Range", NULL);
    } else
    {
        response(FALSE, "", $istekData);
    }

} else
{
    response(400, "Invalid Request", NULL);
}

function response($status, $status_message, $data)
{
    header("HTTP/1.1 " . $status);
    $response['error'] = $status;
    $response['message'] = $status_message;
    $response['data'] = $data;
    $json_response = json_encode($response);
    echo $json_response;
}

function site_get_data($numberOfDay,$site_id)
{
     global $db_info;
    $date_start = (new App\client_data())->fulldatetime();
    $date_finish = (new App\general())->find_prev_date($date_start,$numberOfDay);
    return (new App\get_data())->general_statistics($db_info,$site_id,$date_finish,$date_start);
}
