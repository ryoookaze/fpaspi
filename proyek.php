<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Proyek</title>
        <script src="javascript/proyek.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .column {
            float: left;
            width: 50%;
            padding: 10px;
        }

        .row {
            padding-top : 30px;
            margin-left : 300px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .pilihidentitas {
            position: relative;
            font-family: "SF Pro Display";
        }

        .pilihidentitas select {
            display: none;
        }

        .select-selected {
            background-color: DodgerBlue;
        }

        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        .select-items div,.select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
            user-select: none;
        }

        .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        .select-hide {
            display: none;
        }

        .select-items div:hover, .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
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

<div class="row">
    
    <div class="column">
        <div class="nama-pemohon">
            <div class="col-name">
                <label for="nama-pemohon">Nama Pemohon</label> 
            </div>
            <div class="form">
                <input type="text" id="nama-pemohon" name="namapemohon" placeholder="Nama Pemohon">
            </div>
        </div>    
    </div>

    
    <div class="column">
        <div class="email">
            <div class="col-name">
                <label for="nama-pemohon">Email</label> 
            </div>
            <div class="form">
                <input type="text" id="nama-pemohon" name="namapemohon" placeholder="Email">
            </div>
        </div>    
    </div>

    <div class="column">
        <div class="email">
            <div class="col-name">
                <label for="identitas">Jenis Identitas</label>
            </div>
            <div class="custom-select">
                <select>
                    <option value="0">KTM</option>
                    <option value="1">KTP</option>
                    <option value="2">SIM</option>
                </select>
            </div>
        </div>
    </div>
</div>
    </body>
</html>