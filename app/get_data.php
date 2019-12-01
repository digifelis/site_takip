<?php


namespace App;


class get_data
{
    function general_statistics($db_info, $site_id, $date_start,$date_finish)
    {
        $bilgiler = (new db($db_info[0],$db_info[1],$db_info[2],$db_info[3]))->query('SELECT  site_id, referer,count(*) as toplam_sayi FROM pcaccess where site_id=? and last_seen between "'.$date_start.'" and "'.$date_finish.'" group by referer',$site_id)->fetchAll();
        $sonuc = array();
        foreach ($bilgiler as $bilgi) {
            $sonuc[$bilgi['referer']] = array(
                'count'     =>  $bilgi['toplam_sayi']
            );

        }
        return $sonuc;
    }
}
