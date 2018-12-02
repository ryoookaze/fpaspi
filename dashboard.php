<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <source src="css/body.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Dashboard</title>
    <style>
        body{
            margin: 0;
            font-family: "SF Pro Display";
        }

        .sidenav {
            font-size: 20px;
            margin: 0;
            padding: 30px;
            width: 200px;
            background-color: black;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidenav a {
            display: block;
            color: white;
            padding: 20px;
            text-decoration: none;
        }

        .sidebar a.active {
            background-color: white;
            color: black;
        }

        .sidebar a.hover:not(active) {
            background-color: white;
            color: black;
        }

        .siclick {
            text-align: center;
            color: white;
        }

        .logout {
            font-size: 20px;
            margin: auto;
            font-family: "SF Pro Display";
            color: black;
            background-color: white;
            padding: 13px 30px;
            text-decoration: none;
            display: block;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            margin-top: 100%;
        }

        .table {
            margin-left: auto;
            margin-right: auto;
        }
        
        #dataanggota {
            margin-left: 300px;
            margin-right : 30px;
            font-family: "SF Pro Display";
            border-collapse: collapse;
            width: 50%;
        }

        #dataanggota td, #dataanggota th {
            border: 1px solid #ddd;
            padding: 1px;
        }

        #dataanggota tr:nth-child(even){
            background-color: black;
        }

        #dataanggota tr:hover {
            background-color: #ddd;
        }

        #dataanggota th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: black;
            color: white;
        }

    </style>
  </head>
  <body>

  <div class="sidenav">
    <h2 class="siclick">SICLICK</h2>
    <a href="">Data Anggota</a>
    <a href="">Data Inventaris</a>
    <a href="">Proyek</a>
    <a href="kalender.php">Kalender Acara</a>
    <a href="">Data Film</a>
    <a href="">Pengaturan</a>
    <button type="button" class="logout">Log Out</button>
  </div>

  <div class="table">
    <table id="dataanggota">
    <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No.KTM</th>
            <th>No.Telp</th>
            <th>Tgl.Lahir</th>
            <th>Alamat</th>
        </tr>
    </table>
        
  </div>
  </body>
</html>