
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, initial-scale=1.0">

    <title>Rexco Airlines</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
    <style>

         table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #003666;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #003666;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: rgba(0, 54, 102, 0.7);
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }

        td {
            background-color: rgba(0, 54, 102, 0.2);
            transition: background-color 0.3s;
        }

        tr:hover td {
            background-color: rgba(0, 54, 102, 0.4);
        }
        body {
            background-color: #f2f2f2;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        body{font-family: "Roboto",sans-serif ;}
  .sidenav {
    height: 100vh; width: 0px; position: fixed; top: 0; left: 0; padding-top: 60px; background-color: #003666; z-index: 999; transition: 0.5s; overflow-x:hidden ;}
.sidenav a{display:block; text-decoration:none; font-size:20px; color:#aaa; padding: 8px 8px 8px 35px; transition:0.3s; }
.sidenav a:hover {color: #f1f1f1;}
.sidenav .closeBtn{position: absolute; top: 0; right: 20px; font-size: 36px;}
.open {font-size: 30px; cursor: pointer;}
   nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
        }

        #main {
            padding: 20px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #003666;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #003666;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background-color: rgba(0, 54, 102, 0.7);
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }

        td {
            background-color: rgba(0, 54, 102, 0.2);
            transition: background-color 0.3s;
        }

        tr:hover td {
            background-color: rgba(0, 54, 102, 0.4);
        }
    </style>


    </head>
  <body>
<div class="sidenav" id="sidebarNav">
  <a href="javascript:void(0)" class="closeBtn" onclick="closeNav()">&times;</a>
  <a href="anasayfa.html">Anasayfa</a>
  <a href="seferler.php">Seferler</a>
  <a href="rapor.html">Raporlar</a>
  <a href="indexh.html">Hizmetlerimiz</a>
  <a href="iletisim.php">İletişim</a>
</div>

<span class="open" onclick="openNav()">&#9776; Open</span>
<main id="main">

<h2 style="text-align: center; color: #003666; font-size: 30px; padding: 20px; border-bottom: 2px solid #003666;">Sefer Bilgileri</h2>



<table>
        <tr>
            <th>Sefer Tarihi</th>
            <th>Yolcu Sayısı</th>
            <th>Kalkış Yeri</th>
            <th>Varış Yeri</th>
            
        <th></th>
        <th></th>
        <th></th>
        </tr>
        <tr>
            <td><input type="date" value=""></td>
            <td><input type="text" value=""></td>
            <td><input type="text" value=""></td>
            <td><input type="text" value=""></td>
        
            <td><button class="button" onclick="saveData(this)">Veri Kaydet</button></td>
            <td><button class="button" onclick="deleteData(this)">Veri Sil</button></td>
            <td><button class="button" onclick="editData(this)">Veri Düzenle</button></td>
        </tr>
        <!-- Diğer satırlar da aynı yapıda devam edebilir -->
    </table>

</form>
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