<?php
namespace App;
class add_data
{
    function insert_record($db_info,$ip, $referer, $datatime,$site_id)
    {

    $insert = (new db($db_info[0],$db_info[1],$db_info[2],$db_info[3]))->query('insert into pcaccess (ip,referer,first_seen,last_seen, site_id) values (?,?,?,?,?)', $ip, $referer, $datatime, $datatime,$site_id);
    return $insert->affectedRows();
    }

    function update_record($db_info,$ip, $last_seen,$site_id,$record_id)
    {

        $insert = (new db($db_info[0],$db_info[1],$db_info[2],$db_info[3]))->query('update pcaccess set last_seen=? where ip=? and site_id=? and id=?', $last_seen, $ip,$site_id,$record_id);
        return $insert->affectedRows();
    }

    function varmi($db_info,$ip,$site_id,$referer)
    {

        $result = (new db($db_info[0],$db_info[1],$db_info[2],$db_info[3]))->query('SELECT * FROM pcaccess where ip=? and site_id=? and referer=?', $ip,$site_id,$referer)->fetchArray();
        return $result['id'];
    }

    function son_gorulme_zamani($db_info,$ip,$site_id,$referer)
    {
        $result = (new db($db_info[0],$db_info[1],$db_info[2],$db_info[3]))->query('select * from pcaccess where ip=? and site_id=? and referer=? order by id DESC limit 0,1 ', $ip,$site_id,$referer)->fetchArray();
        return $result['last_seen'];
    }

}
