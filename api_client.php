<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title></title>
</head>
<body>

<h2>website statistics</h2>
<form  action="" method="POST">
    <div>
        <select name="count_day">
            <option>Select Day interval</option>
            <option value="30" selected>Last 30 days</option>
            <option value="60">Last 60 days</option>
        </select>
    </div>

    <div>
        <select name="web_site_id">
            <option>Select Web site Id</option>
            <option value="1" selected>web site 1</option>
            <option value="2">web site 2</option>
        </select>
    </div>

    <button type="submit" name="submit">Submit</button>
</form>
<p>&nbsp;</p>
<h3>
    <?php
    if (isset($_POST['submit']))
    {
        $count_day = $_POST['count_day'];
        $site_id = $_POST['web_site_id'];
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $url = "http://localhost/site_takip/benim_kod/statistics.php?day=" . $count_day . '&site_id='. $site_id;
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        echo $response;

    }
    ?>
</h3>

</body>
</html>