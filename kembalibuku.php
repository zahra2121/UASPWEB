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

    <div class="databuku2">
        <!--Tombol Pinjam Buku -->
        <br><div class="content">
            <label class="modal-open modal-label" for="modal-open"><p>Kembalikan Buku</p></label>
            <input type="radio" name="modal" value="open" id="modal-open" class="modal-radio">
        
            <div class="modal">
            <label class="modal-label overlay"><input type="radio" name="modal" value="close" class="modal-radio"/></label>

            <!--Modal Pinjam Buku -->
            <div class="content">
                <div class="top">
                <br><h2>Pengembalian Buku </h2><br>
                <label class="modal-label close-btn">
                    <input type="radio" name="modal" value="close" class="modal-radio"/>
                </label>
                </div>
                 
                <div>
                    <form method="post">
                        <select name="kodebukunya" class="form-control">
                            <?php
                                $ambilsemuadatanya = mysqli_query($conn, "SELECT * FROM stockbuku");
                                while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
                                    $namabarangnya = $fetcharray['judulbuku'];
                                    $idbarangnya = $fetcharray['kodebuku'];
                            ?>
                            <option value="<?=$idbarangnya;?>"><?=$namabarangnya;?></option>

                            <?php
                                }
                            ?>
                        </select><br>
                        <input type="text" id="nama" name="namaorg" placeholder="Nama Peminjam .." required>
                        <input type="number" id="jumlah" name="qty" placeholder="Jumlah Buku" required><br>
                        <button type="submit" class="tombol" name="addkembali">Submit</button>
                    </form>
                </div>
            </div>
            </div>  
        </div>
        <br><h2 class="judul">🐾Pengembalian Buku</h2><br><br>
        <table class="customers">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Judul Buku</th>
                <th>Kode Buku</th>
                <th>Nama Peminjam</th>
                <th>Jumlah Kembali</th>
            </tr>

            <?php
                $ambil = mysqli_query($conn, "select * from kembalibuku m, stockbuku s where s.kodebuku = m.kodebuku");
                $a = 1;
                while($data = mysqli_fetch_array($ambil)){
                    $judul = $data['judulbuku'];
                    $kode = $data['kodebuku'];
                    $tanggal = $data['tanggal'];
                    $nama = $data['nama'];
                    $qty = $data['jumlahkembali'];
            ?>
            <tr>
                <td><?=$a++;?></td>
                <td>
                <?php
                    echo date('d ', strtotime($tanggal));
                    $month = date('F', strtotime($tanggal));
                    switch ($month) {
                        case 'January':
                            echo "Januari";
                            break;
                        case 'February':
                            echo "Februari";
                            break;
                        case 'March':
                            echo "Maret";
                            break;
                        case 'April':
                            echo "April";
                            break;
                        case 'May':
                            echo "Mei";
                            break;
                        case 'June':
                            echo "Juni";
                            break;
                        case 'July':
                            echo "Juli";
                            break;
                        case 'August':
                            echo "Agustus";
                            break;
                        case 'September':
                            echo "September";
                            break;
                        case 'October':
                            echo "Oktober";
                            break;
                        case 'November':
                            echo "November";
                            break;
                        default:
                            echo "Desember";
                        }
                        echo date(' Y', strtotime($tanggal));
                        echo ", Pukul ";
                        echo date('H.i', strtotime($tanggal));
                        echo " WIB";  
                ?>
                </td>
                <td><?=$judul;?></td>
                <td><?=$kode;?></td>
                <td><?=$nama;?></td>
                <td><?=$qty;?></td>
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