# site_takip

###test.php sayfası web sitesi gibi kayıt eklemyi sağlar.

<script src="siteaccess.js"></script>
<script>
    let site_id = 1;
    setInterval(() => veri_gonder(site_id), 5000);
</script>



### site_id takip edilmek istenen web sitesinin id numarasıdır.
### her 5 saniyede bir kullanıcının sayfada olup olmadığı kontrol edilir.


##  api_client.php dosyası json formatında istenilen sonucun veritabanından getirilmesini sağlar.

