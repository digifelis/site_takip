<?php


namespace App;


class general
{
    function dateDifference($date_1 , $date_2 , $differenceFormat = '%i' )
    {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);

        $interval = date_diff($datetime1, $datetime2);

        return $interval->format($differenceFormat);

    }
    function find_prev_date($baslangic_tarihi,$fark=30,$tur='day')
    {
        $q = '-'.$fark.' '.$tur;
        // '-1 day'
        $cevir = strtotime($q,strtotime($baslangic_tarihi));
        return date("Y-m-d H:i:s",$cevir);
    }

}