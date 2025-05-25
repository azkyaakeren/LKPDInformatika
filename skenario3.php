<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Andi</title>
    <style>
        body {
            text-align: center;
            background-color: #CCCCFF;
        }

        .container h2 {
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        table {
            width: 50%;
            background-color: white;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
        }

        th, td {
            padding: 10px;
            border: 2px solid black; 
            color: rgb(0, 0, 0);
        }

        th {
            background-color:rgb(127, 240, 255);
        }

        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>--- Alifianisa (02) & Azka Azkiya (06) ---</h3>

    <div class="container">
        <h2>Jadwal Andi</h2>

        <table border="1">
            <thead> 
                <tr> <th>List Jadwal Andi</th> </tr> 
                <table>
            <thead> 
                <tr> 
                    <th>Jam</th>
                    <th>Kegiatan</th>
                </tr> 
            </thead>
            <tbody>
                <tr> <td>04.45 - 04.55</td> <td>Andi bangun tidur & sholat subuh</td> </tr>
                <tr> <td>04.55 – 05.15</td> <td>Andi mandi dan siap-siap menggunakan seragam sekolah</td> </tr>
                <tr> <td>05.15 – 05.20</td> <td>Andi menyiapkan peralatan sekolah</td> </tr>
                <tr> <td>05.20 – 05.30</td> <td>Andi membantu ibu menyiapkan sarapan</td> </tr>
                <tr> <td>05.30 – 05.40</td> <td>Andi sarapan pagi</td> </tr>
                <tr> <td>05.40 – 06.00</td> <td>Andi menunggu bapak yang sedang siap-siap</td> </tr>
                <tr> <td>06.00 – 06.15</td> <td>Andi berangkat sekolah</td> </tr>
                <tr> <td>06.15 – 07.00</td> <td>Andi sampai di sekolah & menunggu bel masuk berbunyi</td> </tr>
                <tr> <td>07.00 – 15.30</td> <td>Andi sedang pelajaran di sekolah</td> </tr>
                <tr> <td>15.30 – 15.45</td> <td>Andi pulang sekolah</td> </tr>
                <tr> <td>15.45 - 15.55</td> <td>Andi disuruh ibu membeli bumbu dapur</td> </tr>
                <tr> <td>15.55 – 16.05</td> <td>Andi siap-siap untuk mengaji</td> </tr>
                <tr> <td>16.05 – 16.35</td> <td>Andi sedang mengaji</td> </tr>
                <tr> <td>16.35 – 17.05</td> <td>Andi menghafal dialog untuk festival</td> </tr>
                <tr> <td>17.05 – 17.35</td> <td>Andi chattingan bersama Raya yang berada di Arab</td> </tr>
                <tr> <td>17.35 – 18.00</td> <td>Andi istirahat</td> </tr>
                <tr> <td>18.00 – 18.05</td> <td>Andi shalat Maghrib</td> </tr>
                <tr> <td>18.05 – 18.20</td> <td>Andi makan malam bersama keluarga</td> </tr>
                <tr> <td>18.20 – 20.20</td> <td>Andi belajar</td> </tr>
                <tr> <td>20.20 – 20.25</td> <td>Andi shalat Isya</td> </tr>
                <tr> <td>20.25 – 21.05</td> <td>Andi ngobrol dengan keluarga</td> </tr>
                <tr> <td>21.05 - 04.45</td> <td>Andi tidur</td> </tr>
            </tbody>
        </table>

        <br>

        <?php
        $jam = date("00.00");
        $tugas = false;
        $chattingan = false;
        $dialog = false;
        $pelajaran = false;

        if ($jam >= "04.45.00" && $jam < "04.55.00") {
            echo("$jam = Andi bangun tidur & sholat subuh");
        } elseif ($jam >= "04.55.00" && $jam < "05.15.00") {
            echo("$jam = Andi mandi dan siap siap menggunakan seragam sekolah");
        } elseif ($jam >= "05.15.00" && $jam < "05.20.00") {
            echo("$jam = Andi menyiapkan peralata-peralatan sekolah ");
        } elseif ($jam >= "05.20.00" && $jam < "05.30.00") {
            echo("$jam = Andi membantu ibu menyiapkan sarapan");
        } elseif ($jam >= "05.30.00" && $jam < "05.40.00") {
            echo("$jam = Andi sarapan pagi");
        } elseif ($jam >= "05.30.00" && $jam < "05.40.00") {
            echo("$jam = Andi menunggu bapak yang sedang siap siap");
        } elseif ($jam >= "06.00.00" && $jam < "06.15.00") {
            echo("$jam = Andi berangkat sekolah di anter bapak ");
        } elseif ($jam >= "06.15.00" && $jam < "07.00.00") {
            echo("$jam = Andi sampai di sekolah & menunggu bel masuk berbunyi ");
        } elseif ($jam >= "07.00.00" && $jam < "15.30.00") {
            if ($pelajaran) {
                echo("$jam = Andi sedang pelajaran di sekolah");
            } else {
                echo("$jam = Jika Guru andi tidak masuk kelas, maka andi jam kosong");
            }
        } elseif ($jam >= "15.30.00" && $jam < "15.45.00") {
            echo("$jam = Andi Pulang sekolah");
        } elseif ($jam >= "15.45.00" && $jam < "15.55.00") {
            echo("$jam = Andi Membeli bumbu dapur yang di suruh ibu");
        } elseif ($jam >= "15.55.00" && $jam < "16.05.00") {
            echo("$jam = Andi siap siap untuk mengaji");
        } elseif ($jam >= "16.05.00" && $jam < "16.35.00") {
            echo("$jam = Andi sedang mengaji");
        } elseif ($jam >= "16.35.00" && $jam < "17.05.00") {
            if ($dialog) {
                echo("$jam = Andi sedang menghafal dialog untuk festival");
            } else {
                echo("$jam = Jika Andi tidak menghafal dialog, maka Andi dapat chatting dengan raya lebih lama");
            }
        } elseif ($jam >= "17.05.00" && $jam < "17.35.00") {
            if ($chattingan) {
                echo("$jam = Andi sedang chattingan dengan raya yang ada di arab");
            } else {
                echo("$jam = Jika Andi tidak chattingan dengan raya, maka Andi dapat menghafal dialog lebih lama");
            }
        } elseif ($jam >= "17.35.00" && $jam < "18.00.00") {
            echo("$jam = Andi sedang istirahat");
        } elseif ($jam >= "18.00.00" && $jam < "18.05.00") {
            echo("$jam = Andi sedang Shalat Maghrib");
        } elseif ($jam >= "18.05.00" && $jam < "18.20.00") {
            echo("$jam = Andi sedang makan malam");
        } elseif ($jam >= "18.20.00" && $jam < "20.20.00") {
            if ($tugas) {
                echo("$jam =Andi Mengerjakan Tugas");
            } else {
                echo("$jam = Jika Andi tidak mengerjakan tugas, maka Andi dapat mengobrol lebih lama dengan keluarga");
            }
        } elseif ($jam >= "20.20.00" && $jam < "20.25.00") {
            echo("$jam = Andi Sholat isya");
        } elseif ($jam >= "20.25.00" && $jam < "21.05.00") {
            echo("$jam = Andi Ngobrol dengan keluarga");
        } elseif ($jam >= "21.05.00" && $jam < "22.05.00") {
            echo("$jam = Andi rebahan");
        } elseif ($jam >= "22.05.00" || $jam < "04.45.00") {
            echo("$jam = Andi udah bobok");
        } else {
            echo("$jam = Andi udah bobok");
        }
        ?>
    </div>
</body>
</html>
