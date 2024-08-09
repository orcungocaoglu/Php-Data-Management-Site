<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Rexco Airlines</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
<style type="text/css">
  body{font-family: "Roboto",sans-serif ;}
  .sidenav {
    height: 100vh; width: 0px; position: fixed; top: 0; left: 0; padding-top: 60px; background-color: #003666; z-index: 999; transition: 0.5s; overflow-x:hidden ;}
.sidenav a{display:block; text-decoration:none; font-size:20px; color:#aaa; padding: 8px 8px 8px 35px; transition:0.3s; }
.sidenav a:hover {color: #f1f1f1;}
.sidenav .closeBtn{position: absolute; top: 0; right: 20px; font-size: 36px;}
.open {font-size: 30px; cursor: pointer;}

</style>

</head>
  <body>
<div class="sidenav" id="sidebarNav">
  <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">&times;</a>
  <a href="anasayfa.php">Anasayfa</a>
  <a href="seferler.php">Seferler</a>
  <a href="rapor.php">Raporlar</a>
  <a href="indexh.php">Hizmetlerimiz</a>
  



</div>

<span class="open" onclick="openNav()">&#9776;Open</span>
<main id="main">
<h2 id="anabaslik" style="text-align: center; color: #003666; font-size: 30px; padding: 20px; border-bottom: 2px solid #003666;">Rexco Airlines Raporları</h2>

<h2 id="baslik">$ Bazında Geçen Yıl ve Bu Yıl Rexco Airlines Satış Raporu</h2>
<div id="gelir"><h2 id="h2">Yıllık Gelir</h2>
  <h3 id="h3">$ 15.250.000</h3>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Ay', 'Geçen Yıl', 'Bu Yıl'],
      ['Ocak', 1500000, 1800000],
      ['Şubat', 1600000, 1900000],
      ['Mart', 1600000, 1800000],
      ['Nisan', 1750000, 2000000],
      ['Mayıs', 1800000, 2200000],
      ['Haziran', 2000000, 2500000],
      ['Temmuz', 2100000, 2400000],
      ['Ağustos', 2200000, 2600000],
      ['Eylül', 2000000, 2350000],
      ['Ekim', 1800000, 2000000],
      ['Kasım', 1600000, 1800000],
      ['Aralık', 1550000, 1900000],
      
    ]);

    var options = {
      chart: {
        subtitle: 'Geçen Yıl ve Bu Yılın Aylık Satış Miktarları',
      }
    };

    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script></div>
 <div id="columnchart_material" style="width: 1000px; height: 600px; bottom: 50px;"></div>


<h2 id="anabaslik">Çalışan ve Maaş Raporu</h2>
<table>
    <tr>
        <th>Departman</th>
        <th>Çalışan Sayısı</th>
        <th>Ortalama Maaş</th>
    </tr>
    <tr>
        <td>Pilot</td>
        <td>120</td>
        <td>$50,000</td>
    </tr>
    <tr>
        <td>Kabin Ekibi</td>
        <td>300</td>
        <td>$6,000</td>
    </tr>
    <tr>
        <td>Teknik Bakım</td>
        <td>50</td>
        <td>$8,000</td>
    </tr>
    <tr>
        <td>Müşteri Hizmetleri</td>
        <td>80</td>
        <td>$4,000</td>
    </tr>
</table>
<h2 id="anabaslik">Sistem Analizi Raporu</h2>
<table>
    <tr>
        <td>Hedef Kitle</td>
        <td>Rexco Airlines, geniş bir yolcu kitlesine hitap etmektedir. Şirket, seyahat eden iş adamları, turistler ve konforlu seyahat deneyimi arayan her türlü yolcuya hizmet sunmaktadır.</td>
    </tr>
    <tr>
        <td>Hizmetler</td>
        <td>Rexco Airlines, iç hat ve dış hat uçuşlarıyla birlikte özel hizmetler, yiyecek ve içecek servisi, bagaj hizmetleri ve konforlu koltuklar gibi çeşitli hizmetler sunmaktadır. Yolcuların rahat ve keyifli bir seyahat deneyimi yaşamasını hedeflemektedir.</td>
    </tr>
    <tr>
        <td>Fiyatlandırma Stratejisi</td>
        <td>Rexco Airlines, rekabetçi fiyatlandırma stratejisi benimseyerek müşterilere çeşitli fiyat aralıklarında uçuş imkanları sunmayı hedeflemektedir. Kaliteli hizmetlerin yanı sıra uygun fiyatlarla müşteri memnuniyetini artırmayı hedeflemektedir.</td>
    </tr>
    <tr>
        <td>Satış Kanalları</td>
        <td>Rexco Airlines, çevrimiçi rezervasyon platformları ve mobil uygulama üzerinden müşterilere uçuş rezervasyonu yapma imkanı sunmaktadır. Ayrıca bilet satış ofisleri ve acenteler aracılığıyla da müşteri taleplerine cevap vermektedir.</td>
    </tr>
    <tr>
        <td>Dağıtım Stratejisi</td>
        <td>Rexco Airlines, güçlü lojistik ağı ve anlaşmalı havaalanlarıyla hızlı ve güvenilir uçuşlar gerçekleştirmeyi hedeflemektedir. Yolcuların zamanında ve güvenli bir şekilde varış noktalarına ulaşmalarını sağlamaktadır.</td>
    </tr>
    <tr>
        <td>Rekabet Analizi</td>
        <td>Rexco Airlines, yenilikçi hizmetler ve müşteri odaklı yaklaşımıyla rakipleri arasından sıyrılmayı hedeflemektedir. Sürekli olarak pazarı ve rakipleri analiz ederek stratejilerini güncellemektedir.</td>
    </tr>
    <tr>
        <td>Müşteri Geri Bildirimi</td>
        <td>Rexco Airlines, müşteri memnuniyetini artırmak ve hizmet kalitesini iyileştirmek için düzenli anketler ve müşteri geri bildirimlerine önem vermektedir. Yolcuların deneyimlerini sürekli olarak geliştirmeyi amaçlamaktadır.</td>
    </tr>
</table>







</main>

<script type="text/javascript">
  
  function openNav(){
    document.getElementById("sidebarNav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
   function closeNav(){
    document.getElementById("sidebarNav").style.width = "0";
     document.getElementById("main").style.marginLeft = "0";
  }

</script>



  </body>
  </html>
