
-- --------------------------------------------------------

--
-- Table structure for table `kembalibuku`
--
-- Creation: Jul 24, 2021 at 06:42 AM
--

CREATE TABLE `kembalibuku` (
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kodebuku` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlahkembali` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kembalibuku`
--

INSERT INTO `kembalibuku` (`tanggal`, `kodebuku`, `nama`, `jumlahkembali`) VALUES
('2021-07-24 09:36:49', 567, 'Zahra', 1),
('2021-07-24 09:40:03', 567, 'Zahra', 4),
('2021-07-24 12:52:05', 280, 'Jaemin', 3);
