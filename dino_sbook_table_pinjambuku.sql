
-- --------------------------------------------------------

--
-- Table structure for table `pinjambuku`
--
-- Creation: Jul 24, 2021 at 06:42 AM
--

CREATE TABLE `pinjambuku` (
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kodebuku` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlahpinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjambuku`
--

INSERT INTO `pinjambuku` (`tanggal`, `kodebuku`, `nama`, `jumlahpinjam`) VALUES
('2021-07-24 07:34:40', 112, 'Zahra', 1),
('2021-07-24 09:25:10', 112, 'Zahra', 1),
('2021-07-24 09:25:53', 321, 'Zahra', 1),
('2021-07-24 09:40:33', 567, 'Zahra', 8),
('2021-07-24 12:51:32', 280, 'Jaemin', 5);
