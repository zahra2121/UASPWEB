
-- --------------------------------------------------------

--
-- Table structure for table `stockbuku`
--
-- Creation: Jul 24, 2021 at 05:24 AM
--

CREATE TABLE `stockbuku` (
  `kodebuku` int(11) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `jenisbuku` varchar(25) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jumlahbuku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockbuku`
--

INSERT INTO `stockbuku` (`kodebuku`, `judulbuku`, `jenisbuku`, `penerbit`, `jumlahbuku`) VALUES
(112, 'Aku dan Awan', 'Novel', 'Azuralee', 8),
(567, 'Kelinci dan Harimau', 'Cerita Anak', 'Sophiebook', 30),
(710, 'Anatomi Manusia', 'Ensiklopedia', 'Summerry', 19),
(321, 'Pulang', 'Novel', 'Tere Liye', 19),
(333, 'Nanti Kita Cerita Tentang Hari ini', 'Novel', 'Michellacp', 21),
(211, 'Bumi dan Isinya', 'Ensiklopedia', 'Dodostore', 20),
(219, 'Pandai Membaca dan Menulis', 'Buku Anak', 'Erlangga', 20),
(255, 'Snow Ball', 'Cerita Anak', 'Azuralee', 20),
(280, 'Apa itu Magma?', 'Ensiklopedia', 'Sophiebook', 18),
(777, 'Matematika Ilmu Menyenangkan', 'Buku Anak', 'Erlangga', 20);
