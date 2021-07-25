<?php
    require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dino's Book</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

    <div class="menuatas">
        <ul>
            <li><a href="item1.php"><b>| DINO's BOOK🦕 |</b></a></li>
            <li class="waktu">
                <?php
                    echo("<font face= cursive size=2 color=white>");
                    echo "<b>".date("l"). ", ".date("d-m-Y") .", ".date("h:i:s A")."</b>";
                    echo("</font>");
                    echo ("<br>");

                    $filecounter = "counter.txt";
                    $fl = fopen($filecounter, "r+");
                    $hit = fread($fl, filesize($filecounter));

                    echo("<font face= cursive size=2 color=lightblue><b> | ");
                    echo($hit);
                    echo(" PENGUNJUNG |");
                    echo("</b></font>");
                    fclose($fl);

                    $fl = fopen($filecounter, "w+");
                    $hit = $hit+1;
                    fwrite($fl, $hit, strlen($hit));
                    fclose($fl);
                ?>
            </li>
        </ul>
    </div>

    <div class="menu-malasngoding">
        <ul>
            <li class="dropdown"><a href="#"><h5>Home ></h5></a>
                <ul class="isi-dropdown">
                    <li><a href="item1.php">Tentang Perpustakaan</a></li>
                    <li><a href="item1.php">Daftar Buku Perpustakaan</a></li>
                </ul>
            </li>
            <li><a href="pinjambuku.php"><h5>Peminjaman Buku ></h5></a></li>
            <li><a href="kembalibuku.php"><h5>Pengembalian Buku ></h5></a></li>
        </ul>
    </div>

    <div class="welcome">
        <br><h1>SELAMAT DATANG DI PERPUSTAKAAN UMUM</h1>
        <br><h2>" DINO'S BOOK "</h2> <br>

    </div>

    <div class="awal">
        <br><h2 class="judul">🐾Perpustakaan Dino's Book</h2>
        <table>
            <br><br>
            <p>Perpustakaan Umum Dino's Book adalah tempat atau lokasi yang menghimpun koleksi buku, bahan cetakan serta rekaman lain untuk kepentingan masyarakat umum.
            Perpustakaan umum dapat di artikan juga sebagai lembaga pendidikan bagi masyarakat umum dengan menyediakan berbagai macam 
            informasi ilmu pengetahuan, budaya dan teknologi untuk meningkatkan dan memperoleh pengetahuan bagi masyarakat luas.
            </p>
            <p>Perpustakaan Umum ini menyediakan bermacam bahan koleksi bagi semua tingkatan usia mulai dari anak-anak, remaja, dewasa sampai lanjut usia, baik untuk laki-laki maupun perempuan. 
            Oleh karena itu, perpustakaan umum mempunyai nilai strategis untuk mencerdaskan kehidupan bangsa karena fungsinya melayani semua lapisan masyarakat sebagai sarana pembelajaran.
            <br><br></p>
        </table>
    </div>

    <div class="databuku">
        <br><h2 class="judul">🐾Daftar Buku Perpustakaan</h2><br><br>
        <table class="customers" method="post">
            <tr>
                <th>No.</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Jenis / Genre Buku</th>
                <th>Penerbit</th>
                <th>Jumlah Buku</th>
            </tr>
            <?php
                $ambil = mysqli_query($conn, "select * from stockbuku");
                $a = 1;
                while($data = mysqli_fetch_array($ambil)){
                $judulbuku = $data['judulbuku'];
                $kodebuku = $data['kodebuku'];
                $jenis = $data['jenisbuku'];
                $penerbit = $data['penerbit'];
                $jumlah = $data['jumlahbuku'];
            ?>
            <tr>
                <td><?=$a++;?></td>
                <td><?=$kodebuku;?></td>
                <td><?=$judulbuku;?></td>
                <td><?=$jenis;?></td>
                <td><?=$penerbit;?></td>
                <td><?=$jumlah;?></td>
            </tr>

            <?php
                };
            ?>
        </table>
        <br><br><br><br><br><br><br><br>
    </div>

    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Hikmatuz Zahra.2000018180.Teknik Informatika.UAD2021 </span>
            </div>
        </div>
    </footer>

</body>
</html>