-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 03:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preswa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(6) CHARACTER SET latin1 NOT NULL,
  `nama_admin` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username_admin` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password_admin` varchar(50) CHARACTER SET latin1 NOT NULL,
  `akses_level` enum('1','2','3') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `akses_level`) VALUES
('ADM000', 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1'),
('ADM002', 'Wakasek', 'wakasek', '289bed0325c26d04da9ba999fb6c4defd8ab76f6', '2'),
('ADM003', 'Wali Kelas', 'walikelas', '289bed0325c26d04da9ba999fb6c4defd8ab76f6', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bidang`
--

CREATE TABLE `tbl_bidang` (
  `id_bidang` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_bidang` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bidang`
--

INSERT INTO `tbl_bidang` (`id_bidang`, `nama_bidang`) VALUES
('B001', 'Ilmiah/Penalaran/Akademik'),
('B002', 'Lainnya'),
('B003', 'Minat Khusus'),
('B004', 'Olahraga'),
('B005', 'Sains'),
('B006', 'Seni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ekskul`
--

CREATE TABLE `tbl_ekskul` (
  `id_ekskul` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_ekskul` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jumlah_siswa` varchar(3) CHARACTER SET latin1 NOT NULL,
  `id_guru` varchar(4) CHARACTER SET latin1 NOT NULL,
  `pelatih` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ekskul`
--

INSERT INTO `tbl_ekskul` (`id_ekskul`, `nama_ekskul`, `jumlah_siswa`, `id_guru`, `pelatih`) VALUES
('E001', 'Kerohanian Islam Putra', '30', 'G023', '-'),
('E002', 'Diluar Ekstrakurrikuler', '-', 'G018', '-'),
('E003', 'Taekwondo', '30', 'G024', 'Fadjar'),
('E004', 'OSIS', '30', 'G019', '-'),
('E005', 'Pramuka Putra', '30', 'G007', '-'),
('E006', 'Pramuka Putri', '30', 'G020', '-'),
('E007', 'K I R', '30', 'G021', '-'),
('E008', 'Kerohanian Islam Putri', '30', 'G022', '-'),
('E009', 'Basket', '30', 'G024', 'Galana Yusuf'),
('E010', 'Bolla Volley', '30', 'G024', 'Didi Suryadi,S.Pd'),
('E011', 'Bulutangkis', '30', 'G024', 'Andrias,S.Pd'),
('E012', 'Seni Tari', '30', 'G030', 'Revi Restiani Janwar,S.Pd '),
('E013', 'PMR', '30', 'G038', '-'),
('E014', 'Paskibra', '30', 'G039', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gelar`
--

CREATE TABLE `tbl_gelar` (
  `id_gelar` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_gelar` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gelar`
--

INSERT INTO `tbl_gelar` (`id_gelar`, `nama_gelar`) VALUES
('0001', 'Juara Harapan I'),
('0002', 'Juara Harapan II'),
('0003', 'Juara Harapan III'),
('0004', 'Juara I'),
('0005', 'Juara II'),
('0006', 'Juara III'),
('0007', 'Medali Emas'),
('0008', 'Medali Perak'),
('0009', 'Medali Perunggu'),
('0010', 'Terbaik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nip_guru` varchar(18) CHARACTER SET latin1 NOT NULL,
  `nama_guru` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kontak_guru` varchar(13) CHARACTER SET latin1 NOT NULL,
  `status_jabatan` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip_guru`, `nama_guru`, `kontak_guru`, `status_jabatan`) VALUES
('G004', '012345678901234567', 'Faruq Abdul Aziz, S.Pd.', '08', 'Guru Mapel'),
('G005', '123456789012345678', 'Neneng Hendriyani, M.Pd', '08', 'Guru Mapel'),
('G006', '234567890123456789', 'Yulia Astuti, S.Pd.', '08', 'Guru Mapel'),
('G007', '345678901234567890', 'Rifki Akbar Riyadi, S.Pd.', '08', 'Guru Mapel'),
('G009', '567890123456789012', 'Yanti Widyanti, S.Pt.', '08', 'Guru Mapel'),
('G010', '678901234567890123', 'Yulianti, M.Pd.', '08', 'Guru Mapel'),
('G011', '789012345678901234', 'Mardwitanti Laras, S.Pd.', '08', 'Guru Mapel'),
('G012', '890123456789012345', 'Jesi Wailan Arum, S.Pd.', '08', 'Guru Mapel'),
('G013', '901234567890123456', 'Citra Ayu Ningrum, S.Pd.', '08', 'Guru Mapel'),
('G014', '101234567890123456', 'Rana Nur Ghaida, S.Pd.', '08', 'Guru Mapel'),
('G015', '112345678901234567', 'Sanuri Fanyansen, S.Pd.', '08', 'Guru Mapel'),
('G016', '345678901234567890', 'Zefanya Andrean', '08', 'Guru Mapel'),
('G017', '999999999999', 'Yeni Bandriyani, SE', '08', 'Guru Mapel'),
('G018', '888888888888', 'Evi Sukenti, S.Pd.', '08', 'Guru Mapel'),
('G019', '777777777777', 'Amsori, S.Pd.', '08', 'Guru Mapel'),
('G020', '555555555555', 'Huda Lina Hapsari,S.Pd ', '08', 'Guru Mapel'),
('G021', '444444444444', 'Tri Handayani, ', '08', 'Guru Mapel'),
('G022', '333333333333', 'Jayanti Saputri,S.PdI', '08', 'Guru Mapel'),
('G023', '222222222222', 'H. Sutardi,S.Ag', '08', 'Guru Mapel'),
('G024', '111111111111', 'Wanda Eka Prasetya,S.Pd', '08', 'Guru Mapel'),
('G025', '011111111111', 'Liwah Lidyawati, S.Sos,M.Pd.', '08', 'Guru Mapel'),
('G026', '022222222222', 'Citra Puji Rahmani, M.Pd.', '08', 'Guru Mapel'),
('G027', '033333333333', 'Maria Fransisca Corina, M.Pd', '08', 'Guru Mapel'),
('G028', '044444444444', 'Novariyanti, S.Pd.', '08', 'Guru Mapel'),
('G029', '055555555555', 'Resti Novalia, S.Pd.', '08', 'Guru Mapel'),
('G030', '066666666666', 'Rahma Dewi Hartati, M.Pd.', '08', 'Guru Mapel'),
('G031', '077777777777', 'Dra. Imas Suryani', '08', 'Guru Mapel'),
('G032', '088888888888', 'Dra. Elis Sukarsih', '08', 'Guru Mapel'),
('G033', '099999999999', 'Revi Restiani Janwar, S.Pd.', '08', 'Guru Mapel'),
('G034', '00111111111', 'Metta Restutiani, M.Pd.', '08', 'Guru Mapel'),
('G035', '002222222222', 'Inggit Yuani, S.Pd.', '08', 'Guru Mapel'),
('G036', '003333333333', 'Dina Ardianti,S.Pd., M.Si.', '08', 'Guru Mapel'),
('G037', '004444444444', 'Sri Hastuti, M.Pd.', '08', 'Guru Mapel'),
('G038', '0100100011', 'Wasmiyati,S.Pd', '08', 'Guru Mapel'),
('G039', '0200200022', 'Afela Grasiani,S.Pd', '08', 'Guru Mapel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` varchar(4) CHARACTER SET latin1 NOT NULL,
  `level_kelas` enum('X','XI','XII') CHARACTER SET latin1 NOT NULL,
  `nama_kelas` varchar(20) CHARACTER SET latin1 NOT NULL,
  `id_guru` varchar(4) CHARACTER SET latin1 NOT NULL,
  `kapasitas` varchar(3) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `level_kelas`, `nama_kelas`, `id_guru`, `kapasitas`) VALUES
('K002', 'X', 'X IPS 1', 'G004', '36'),
('K003', 'X', 'X IPS 2', 'G005', '36'),
('K004', 'X', 'X IPS 3', 'G006', '36'),
('K005', 'X', 'X IPS 4', 'G007', '36'),
('K006', 'X', 'X IPS 5', 'G017', '36'),
('K007', 'X', 'X MIPA 1', 'G009', '36'),
('K008', 'X', 'X MIPA 2', 'G010', '36'),
('K009', 'X', 'X MIPA 3', 'G011', '36'),
('K010', 'X', 'X MIPA 4', 'G012', '36'),
('K011', 'X', 'X MIPA 5', 'G013', '36'),
('K012', 'X', 'X MIPA 6', 'G012', '36'),
('K013', 'X', 'X MIPA 7', 'G015', '36'),
('K014', 'XI', 'XI IPS 1', 'G024', '36'),
('K015', 'XI', 'XI IPS 2', 'G025', '36'),
('K016', 'XI', 'XI IPS 3', 'G026', '32'),
('K017', 'XI', 'XI IPS 4', 'G027', '36'),
('K018', 'XI', 'XI IPS 5', 'G028', '36'),
('K019', 'XI', 'XI MIPA 1', 'G029', '36'),
('K020', 'XI', 'XI MIPA 2', 'G030', '36'),
('K021', 'XII', 'XII IPS 1', 'G031', '36'),
('K022', 'XII', 'XII IPS 2', 'G035', '32'),
('K023', 'XII', 'XII IPS 3', 'G032', '35'),
('K024', 'XII', 'XII IPS 4', 'G033', '35'),
('K025', 'XII', 'XII IPS 5', 'G034', '34'),
('K026', 'XII', 'XII MIPA 1', 'G036', '36'),
('K027', 'X', 'XII MIPA 2', 'G037', '36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `id_kota` varchar(6) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `id_provinsi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`id_kota`, `nama_kota`, `id_provinsi`) VALUES
('010100', 'Kab. Kepulauan Seribu', '010000'),
('016000', 'Kota Jakarta Pusat', '010000'),
('016100', 'Kota Jakarta Utara', '010000'),
('016200', 'Kota Jakarta Barat', '010000'),
('016300', 'Kota Jakarta Selatan', '010000'),
('016400', 'Kota Jakarta Timur', '010000'),
('020500', 'Kab. Bogor', '020000'),
('020600', 'Kab. Sukabumi', '020000'),
('020700', 'Kab. Cianjur', '020000'),
('020800', 'Kab. Bandung', '020000'),
('021000', 'Kab. Sumedang', '020000'),
('021100', 'Kab. Garut', '020000'),
('021200', 'Kab. Tasikmalaya', '020000'),
('021400', 'Kab. Ciamis', '020000'),
('021500', 'Kab. Kuningan', '020000'),
('021600', 'Kab. Majalengka', '020000'),
('021700', 'Kab. Cirebon', '020000'),
('021800', 'Kab. Indramayu', '020000'),
('021900', 'Kab. Subang', '020000'),
('022000', 'Kab. Purwakarta', '020000'),
('022100', 'Kab. Karawang', '020000'),
('022200', 'Kab. Bekasi', '020000'),
('022300', 'Kab. Bandung Barat', '020000'),
('022500', 'Kab. Pangandaran', '020000'),
('026000', 'Kota Bandung', '020000'),
('026100', 'Kota Bogor', '020000'),
('026200', 'Kota Sukabumi', '020000'),
('026300', 'Kota Cirebon', '020000'),
('026500', 'Kota Bekasi', '020000'),
('026600', 'Kota Depok', '020000'),
('026700', 'Kota Cimahi', '020000'),
('026800', 'Kota Tasikmalaya', '020000'),
('026900', 'Kota Banjar', '020000'),
('030100', 'Kab. Cilacap', '030000'),
('030200', 'Kab. Banyumas', '030000'),
('030300', 'Kab. Purbalingga', '030000'),
('030400', 'Kab. Banjarnegara', '030000'),
('030500', 'Kab. Kebumen', '030000'),
('030600', 'Kab. Purworejo', '030000'),
('030700', 'Kab. Wonosobo', '030000'),
('030800', 'Kab. Magelang', '030000'),
('030900', 'Kab. Boyolali', '030000'),
('031000', 'Kab. Klaten', '030000'),
('031100', 'Kab. Sukoharjo', '030000'),
('031200', 'Kab. Wonogiri', '030000'),
('031300', 'Kab. Karanganyar', '030000'),
('031400', 'Kab. Sragen', '030000'),
('031500', 'Kab. Grobogan', '030000'),
('031600', 'Kab. Blora', '030000'),
('031700', 'Kab. Rembang', '030000'),
('031800', 'Kab. Pati', '030000'),
('031900', 'Kab. Kudus', '030000'),
('032000', 'Kab. Jepara', '030000'),
('032100', 'Kab. Demak', '030000'),
('032200', 'Kab. Semarang', '030000'),
('032300', 'Kab. Temanggung', '030000'),
('032400', 'Kab. Kendal', '030000'),
('032500', 'Kab. Batang', '030000'),
('032600', 'Kab. Pekalongan', '030000'),
('032700', 'Kab. Pemalang', '030000'),
('032800', 'Kab. Tegal', '030000'),
('032900', 'Kab. Brebes', '030000'),
('036000', 'Kota Magelang', '030000'),
('036100', 'Kota Surakarta', '030000'),
('036200', 'Kota Salatiga', '030000'),
('036300', 'Kota Semarang', '030000'),
('036400', 'Kota Pekalongan', '030000'),
('036500', 'Kota Tegal', '030000'),
('040100', 'Kab. Bantul', '040000'),
('040200', 'Kab. Sleman', '040000'),
('040300', 'Kab. Gunung Kidul', '040000'),
('040400', 'Kab. Kulon Progo', '040000'),
('046000', 'Kota Yogyakarta', '040000'),
('050100', 'Kab. Gresik', '050000'),
('050200', 'Kab. Sidoarjo', '050000'),
('050300', 'Kab. Mojokerto', '050000'),
('050400', 'Kab. Jombang', '050000'),
('050500', 'Kab. Bojonegoro', '050000'),
('050600', 'Kab. Tuban', '050000'),
('050700', 'Kab. Lamongan', '050000'),
('050800', 'Kab. Madiun', '050000'),
('050900', 'Kab. Ngawi', '050000'),
('051000', 'Kab. Magetan', '050000'),
('051100', 'Kab. Ponorogo', '050000'),
('051200', 'Kab. Pacitan', '050000'),
('051300', 'Kab. Kediri', '050000'),
('051400', 'Kab. Nganjuk', '050000'),
('051500', 'Kab. Blitar', '050000'),
('051600', 'Kab. Tulungagung', '050000'),
('051700', 'Kab. Trenggalek', '050000'),
('051800', 'Kab. Malang', '050000'),
('051900', 'Kab. Pasuruan', '050000'),
('052000', 'Kab. Probolinggo', '050000'),
('052100', 'Kab. Lumajang', '050000'),
('052200', 'Kab. Bondowoso', '050000'),
('052300', 'Kab. Situbondo', '050000'),
('052400', 'Kab. Jember', '050000'),
('052500', 'Kab. Banyuwangi', '050000'),
('052600', 'Kab. Pamekasan', '050000'),
('052700', 'Kab. Sampang', '050000'),
('052800', 'Kab. Sumenep', '050000'),
('052900', 'Kab. Bangkalan', '050000'),
('056000', 'Kota Surabaya', '050000'),
('056100', 'Kota Malang', '050000'),
('056200', 'Kota Madiun', '050000'),
('056300', 'Kota Kediri', '050000'),
('056400', 'Kota Mojokerto', '050000'),
('056500', 'Kota Blitar', '050000'),
('056600', 'Kota Pasuruan', '050000'),
('056700', 'Kota Probolinggo', '050000'),
('056800', 'Kota Batu', '050000'),
('060100', 'Kab. Aceh Besar', '060000'),
('060200', 'Kab. Pidie', '060000'),
('060300', 'Kab. Aceh Utara', '060000'),
('060400', 'Kab. Aceh Timur', '060000'),
('060500', 'Kab. Aceh Tengah', '060000'),
('060600', 'Kab. Aceh Barat', '060000'),
('060700', 'Kab. Aceh Selatan', '060000'),
('060800', 'Kab. Aceh Tenggara', '060000'),
('061100', 'Kab. Simeulue', '060000'),
('061200', 'Kab. Bireuen', '060000'),
('061300', 'Kab. Aceh Singkil', '060000'),
('061400', 'Kab. Aceh Tamiang', '060000'),
('061500', 'Kab. Nagan Raya', '060000'),
('061600', 'Kab. Aceh Jaya', '060000'),
('061700', 'Kab. Aceh Barat Daya', '060000'),
('061800', 'Kab. Gayo Lues', '060000'),
('061900', 'Kab. Bener Meriah', '060000'),
('062000', 'Kab. Pidie Jaya', '060000'),
('066000', 'Kota Sabang', '060000'),
('066100', 'Kota Banda Aceh', '060000'),
('066200', 'Kota Lhokseumawe', '060000'),
('066300', 'Kota Langsa', '060000'),
('066400', 'Kab. Sabussalam', '060000'),
('070100', 'Kab. Deli Serdang', '070000'),
('070200', 'Kab. Langkat', '070000'),
('070300', 'Kab. Karo', '070000'),
('070400', 'Kab. Simalungun', '070000'),
('070500', 'Kab. Dairi', '070000'),
('070600', 'Kab. Asahan', '070000'),
('070700', 'Kab. Labuhan Batu', '070000'),
('070800', 'Kab. Tapanuli Utara', '070000'),
('070900', 'Kab. Tapanuli Tengah', '070000'),
('071000', 'Kab. Tapanuli Selatan', '070000'),
('071100', 'Kab. Nias', '070000'),
('071500', 'Kab. Mandailing Natal', '070000'),
('071600', 'Kab. Toba Samosir', '070000'),
('071700', 'Kab. Nias Selatan', '070000'),
('071800', 'Kab. Pak pak Bharat', '070000'),
('071900', 'Kab. Humbang Hasudutan', '070000'),
('072000', 'Kab. Samosir', '070000'),
('072100', 'Kab. Serdang Bedagai', '070000'),
('072200', 'Kab. Batubara', '070000'),
('072300', 'Kab. Padang Lawas utara', '070000'),
('072400', 'Kab. Padang Lawas', '070000'),
('072500', 'Kab. Labuhan Batu Utara', '070000'),
('072600', 'Kab. Labuhan Batu Selatan', '070000'),
('072700', 'Kab. Nias Barat', '070000'),
('072800', 'Kab. Nias Utara', '070000'),
('076000', 'Kota Medan', '070000'),
('076100', 'Kota Binjai', '070000'),
('076200', 'Kota Tebing Tinggi', '070000'),
('076300', 'Kota Pematang Siantar', '070000'),
('076400', 'Kota Tanjung Balai', '070000'),
('076500', 'Kota Sibolga', '070000'),
('076600', 'Kota Padang Sidempuan', '070000'),
('076700', 'Kota Gunung Sitoli', '070000'),
('080100', 'Kab. Agam', '080000'),
('080200', 'Kab. Pasaman', '080000'),
('080300', 'Kab. Lima Puluh Koto', '080000'),
('080400', 'Kab. Solok', '080000'),
('080500', 'Kab. Padang Pariaman', '080000'),
('080600', 'Kab. Pesisir Selatan', '080000'),
('080700', 'Kab. Tanah Datar', '080000'),
('080800', 'Kab. Sawahlunto/ Sijunjung', '080000'),
('081000', 'Kab. Kepulauan Mentawai', '080000'),
('081100', 'Kab. Solok Selatan', '080000'),
('081200', 'Kab. Dharmas Raya', '080000'),
('081300', 'Kab. Pasaman Barat', '080000'),
('086000', 'Kota Bukittinggi', '080000'),
('086100', 'Kota Padang', '080000'),
('086200', 'Kota Padang Panjang', '080000'),
('086300', 'Kota Sawah Lunto', '080000'),
('086400', 'Kota Solok', '080000'),
('086500', 'Kota Payakumbuh', '080000'),
('086600', 'Kota Pariaman', '080000'),
('090100', 'Kab. Kampar', '090000'),
('090200', 'Kab. Bengkalis', '090000'),
('090400', 'Kab. Indragiri Hulu', '090000'),
('090500', 'Kab. Indragiri Hilir', '090000'),
('090800', 'Kab. Pelalawan', '090000'),
('090900', 'Kab. Rokan Hilir', '090000'),
('091000', 'Kab. Siak', '090000'),
('091100', 'Kab. Kuantan Singingi', '090000'),
('091400', 'Kab. Rokan Hulu', '090000'),
('091500', 'Kab. Kepulauan Meranti', '090000'),
('096000', 'Kota Pekanbaru', '090000'),
('096200', 'Kota Dumai', '090000'),
('100100', 'Kab. Batang Hari', '100000'),
('100200', 'Kab. Bungo', '100000'),
('100300', 'Kab. Sarolangun', '100000'),
('100400', 'Kab. Tanjung Jabung Barat', '100000'),
('100500', 'Kab. Kerinci', '100000'),
('100600', 'Kab. Tebo', '100000'),
('100700', 'Kab. Muaro Jambi', '100000'),
('100800', 'Kab. Tanjung Jabung Timur', '100000'),
('100900', 'Kab. Merangin', '100000'),
('106000', 'Kota Jambi', '100000'),
('106100', 'Kab. Sungai Penuh', '100000'),
('110100', 'Kab. Musi Banyu Asin', '110000'),
('110200', 'Kab. Ogan Komering Ilir', '110000'),
('110300', 'Kab. Ogan Komering Ulu', '110000'),
('110400', 'Kab. Muara Enim', '110000'),
('110500', 'Kab. Lahat', '110000'),
('110600', 'Kab. Musi Rawas', '110000'),
('110700', 'Kab. Banyuasin', '110000'),
('110800', 'Kab. Ogan Komering Ulu Timur', '110000'),
('110900', 'Kab. Ogan Komering Ulu Selatan', '110000'),
('111000', 'Kab. Ogan Ilir', '110000'),
('111100', 'Kab. Empat Lawang', '110000'),
('111200', 'Kab. Penukal Abab Lematang Ilir', '110000'),
('111300', 'Kab. Musi Rawas Utara', '110000'),
('116000', 'Kota Palembang', '110000'),
('116100', 'Kota Prabumulih', '110000'),
('116200', 'Kota Lubuk Linggau', '110000'),
('116300', 'Kota Pagar Alam', '110000'),
('120100', 'Kab. Lampung Selatan', '120000'),
('120200', 'Kab. Lampung Tengah', '120000'),
('120300', 'Kab. Lampung Utara', '120000'),
('120400', 'Kab. Lampung Barat', '120000'),
('120500', 'Kab. Tulang Bawang', '120000'),
('120600', 'Kab. Tenggamus', '120000'),
('120700', 'Kab. Lampung Timur', '120000'),
('120800', 'Kab. Way Kanan', '120000'),
('120900', 'Kab. Pasawaran', '120000'),
('121000', 'Kab. Tulang Bawang Barat', '120000'),
('121100', 'Kab. Mesuji', '120000'),
('121200', 'Kab. Pringsewu', '120000'),
('121300', 'Kab. Pesisir Barat', '120000'),
('126000', 'Kota Bandar Lampung', '120000'),
('126100', 'Kota Metro', '120000'),
('130100', 'Kab. Sambas', '130000'),
('130200', 'Kab. Pontianak', '130000'),
('130300', 'Kab. Sanggau', '130000'),
('130400', 'Kab. Sintang', '130000'),
('130500', 'Kab. Kapuas Hulu', '130000'),
('130600', 'Kab. Ketapang', '130000'),
('130800', 'Kab. Bengkayang', '130000'),
('130900', 'Kab. Landak', '130000'),
('131000', 'Kab. Sekadau', '130000'),
('131100', 'Kab. Melawi', '130000'),
('131200', 'Kab. Kayong Utara', '130000'),
('131300', 'Kab. Kuburaya', '130000'),
('136000', 'Kota Pontianak', '130000'),
('136100', 'Kota Singkawang', '130000'),
('140100', 'Kab. Kapuas', '140000'),
('140200', 'Kab. Barito Selatan', '140000'),
('140300', 'Kab. Barito Utara', '140000'),
('140400', 'Kab. Kotawaringin Timur', '140000'),
('140500', 'Kab. Kotawaringin Barat', '140000'),
('140600', 'Kab. Katingan', '140000'),
('140700', 'Kab. Seruyan', '140000'),
('140800', 'Kab. Sukamara', '140000'),
('140900', 'Kab. Lamandau', '140000'),
('141000', 'Kab. Gunung Mas', '140000'),
('141100', 'Kab. Pulang Pisau', '140000'),
('141200', 'Kab. Murung Raya', '140000'),
('141300', 'Kab. Barito Timur', '140000'),
('146000', 'Kota Palangka Raya', '140000'),
('150100', 'Kab. Banjar', '150000'),
('150200', 'Kab. Tanah Laut', '150000'),
('150300', 'Kab. Barito Kuala', '150000'),
('150400', 'Kab. Tapin', '150000'),
('150500', 'Kab. Hulu Sungai Selatan', '150000'),
('150600', 'Kab. Hulu Sungai Tengah', '150000'),
('150700', 'Kab. Hulu Sungai Utara', '150000'),
('150800', 'Kab. Tabalong', '150000'),
('150900', 'Kab. Kota Baru', '150000'),
('151000', 'Kab. Balangan', '150000'),
('151100', 'Kab. Tanah Bumbu', '150000'),
('156000', 'Kota Banjarmasin', '150000'),
('156100', 'Kota Banjarbaru', '150000'),
('160100', 'Kab. Pasir', '160000'),
('160200', 'Kab. Kutai Kartanegara', '160000'),
('160300', 'Kab. Berau', '160000'),
('160400', 'Kab. Bulongan', '160000'),
('160700', 'Kab. Malinau', '160000'),
('160800', 'Kab. Nunukan', '160000'),
('160900', 'Kab. Kutai Barat', '160000'),
('161000', 'Kab. Kutai Timur', '160000'),
('161100', 'Kab. Penajam Paser Utara', '160000'),
('161200', 'Kab. Mahakam Ulu', '160000'),
('165400', 'Kab. Tanah Tidung', '160000'),
('166000', 'Kota Samarinda', '160000'),
('166100', 'Kota Balikpapan', '160000'),
('166200', 'Kota Tarakan', '160000'),
('166300', 'Kota Bontang', '160000'),
('170100', 'Kab. Bolaang Mongondaw', '170000'),
('170200', 'Kab. Minahasa', '170000'),
('170300', 'Kab. Kep. Sangihe', '170000'),
('170400', 'Kab. Kepulauan Talaud', '170000'),
('170500', 'Kab. Minahasa Selatan', '170000'),
('170600', 'Kab. Minahasa Utara', '170000'),
('170800', 'Kab. Bolaang Mongondow Utara', '170000'),
('170900', 'Kab. Kepulauan Sitaro', '170000'),
('171000', 'Kab. Minahasa Tenggara', '170000'),
('171100', 'Kab. Bolaang Mongondaw Timur', '170000'),
('171200', 'Kab. Bolaang Mongondaw Selatan', '170000'),
('176000', 'Kota Manado', '170000'),
('176100', 'Kota Bitung', '170000'),
('176200', 'Kota Tomohon', '170000'),
('176300', 'Kota. Kotamobagu', '170000'),
('180100', 'Kab. Banggai Kepulauan', '180000'),
('180200', 'Kab. Donggala', '180000'),
('180300', 'Kab. Parigi Mautong', '180000'),
('180400', 'Kab. Banggai', '180000'),
('180500', 'Kab. Buol', '180000'),
('180600', 'Kab. Toli-Toli', '180000'),
('180700', 'Kab. Marowali', '180000'),
('180800', 'Kab. Poso', '180000'),
('180900', 'Kab. Tojo Una-Una', '180000'),
('181000', 'Kab. Sigi', '180000'),
('181100', 'Kab. Banggai Laut', '180000'),
('181200', 'Kab. Morowali Utara', '180000'),
('186000', 'Kota Palu', '180000'),
('190100', 'Kab. Maros', '190000'),
('190200', 'Kab. Pangkajene Kepulauan', '190000'),
('190300', 'Kab. Gowa', '190000'),
('190400', 'Kab. Takalar', '190000'),
('190500', 'Kab. Jeneponto', '190000'),
('190600', 'Kab. Barru', '190000'),
('190700', 'Kab. Bone', '190000'),
('190800', 'Kab. Wajo', '190000'),
('190900', 'Kab. Soppeng', '190000'),
('191000', 'Kab. Bantaeng', '190000'),
('191100', 'Kab. Bulukumba', '190000'),
('191200', 'Kab. Sinjai', '190000'),
('191300', 'Kab. Selayar', '190000'),
('191400', 'Kab. Pinrang', '190000'),
('191500', 'Kab. Sidenreng Rappang', '190000'),
('191600', 'Kab. Enrekang', '190000'),
('191700', 'Kab. Luwu', '190000'),
('191800', 'Kab. Tana Toraja', '190000'),
('192400', 'Kab. Luwu Utara', '190000'),
('192600', 'Kab. Luwu Timur', '190000'),
('192700', 'Kab. Toraja Utara', '190000'),
('196000', 'Kota Makassar', '190000'),
('196100', 'Kota Pare-Pare', '190000'),
('196200', 'Kota Palopo', '190000'),
('200100', 'Kab. Konawe', '200000'),
('200200', 'Kab. Muna', '200000'),
('200300', 'Kab. Buton', '200000'),
('200400', 'Kab. Kolaka', '200000'),
('200500', 'Kab. Konawe Selatan', '200000'),
('200600', 'Kab. Wakatobi', '200000'),
('200700', 'Kab. Bombana', '200000'),
('200800', 'Kab. Kolaka Utara', '200000'),
('200900', 'Kab. Konawe Utara', '200000'),
('201000', 'Kab. Buton Utara', '200000'),
('201100', 'Kab. Kolaka Timur', '200000'),
('201200', 'Kab. Konawe Kepulauan', '200000'),
('201300', 'Kab. Muna Barat', '200000'),
('201400', 'Kab. Buton Selatan', '200000'),
('201600', 'Kab. Buton Tengah', '200000'),
('206000', 'Kota Kendari', '200000'),
('206100', 'Kota Baubau', '200000'),
('210100', 'Kab. Maluku Tengah', '210000'),
('210200', 'Kab. Maluku Tenggara', '210000'),
('210300', 'Kab. Buru', '210000'),
('210400', 'Kab. Maluku Tenggara Barat', '210000'),
('210500', 'Kab. Seram Bagian Barat', '210000'),
('210600', 'Kab. Seram Bagian Timur', '210000'),
('210700', 'Kab. Kepulauan Aru', '210000'),
('210800', 'Kab. Maluku Barat Daya', '210000'),
('210900', 'Kab. Buru Selatan', '210000'),
('216000', 'Kota Ambon', '210000'),
('216100', 'Kota. Tual', '210000'),
('220100', 'Kab. Buleleng', '220000'),
('220200', 'Kab. Jembrana', '220000'),
('220300', 'Kab. Tabanan', '220000'),
('220400', 'Kab. Badung', '220000'),
('220500', 'Kab. Gianyar', '220000'),
('220600', 'Kab. Klungkung', '220000'),
('220700', 'Kab. Bangli', '220000'),
('220800', 'Kab. Karang Asem', '220000'),
('226000', 'Kota Denpasar', '220000'),
('230100', 'Kab. Lombok Barat', '230000'),
('230200', 'Kab. Lombok Tengah', '230000'),
('230300', 'Kab. Lombok Timur', '230000'),
('230400', 'Kab. Sumbawa', '230000'),
('230500', 'Kab. Dompu', '230000'),
('230600', 'Kab. Bima', '230000'),
('230700', 'Kab. Sumbawa Barat', '230000'),
('230800', 'Kab. Lombok Utara', '230000'),
('236000', 'Kota Mataram', '230000'),
('236100', 'Kota Bima', '230000'),
('240100', 'Kab. Kupang', '240000'),
('240300', 'Kab. Timor Tengah Selatan', '240000'),
('240400', 'Kab. Timor Tengah Utara', '240000'),
('240500', 'Kab. Belu', '240000'),
('240600', 'Kab. Alor', '240000'),
('240700', 'Kab. Flores Timur', '240000'),
('240800', 'Kab. Sikka', '240000'),
('240900', 'Kab. Ende', '240000'),
('241000', 'Kab. Ngada', '240000'),
('241100', 'Kab. Manggarai', '240000'),
('241200', 'Kab. Sumba Timur', '240000'),
('241300', 'Kab. Sumba Barat', '240000'),
('241400', 'Kab. Lembata', '240000'),
('241500', 'Kab. Rote-Ndao', '240000'),
('241600', 'Kab. Manggarai Barat', '240000'),
('241700', 'Kab. Nagakeo', '240000'),
('241800', 'Kab. Sumba Tengah', '240000'),
('241900', 'Kab. Sumba Barat Daya', '240000'),
('242000', 'Kab. Manggarai Timur', '240000'),
('242100', 'Kab. Sabu Raijua', '240000'),
('242200', 'Kab. Malaka', '240000'),
('246000', 'Kota Kupang', '240000'),
('250100', 'Kab. Jayapura', '250000'),
('250200', 'Kab. Biak Numfor', '250000'),
('250300', 'Kab. Yapen Waropen', '250000'),
('250700', 'Kab. Merauke', '250000'),
('250800', 'Kab. Jayawijaya', '250000'),
('250900', 'Kab. Nabire', '250000'),
('251000', 'Kab. Paniai', '250000'),
('251100', 'Kab. Puncak Jaya', '250000'),
('251200', 'Kab. Mimika', '250000'),
('251300', 'Kab. Boven Digoel', '250000'),
('251400', 'Kab. Mappi', '250000'),
('251500', 'Kab. Asmat', '250000'),
('251600', 'Kab. Yahukimo', '250000'),
('251700', 'Kab. Pegunungan Bintang', '250000'),
('251800', 'Kab. Tolikara', '250000'),
('251900', 'Kab. Sarmi', '250000'),
('252000', 'Kab. Keerom', '250000'),
('252600', 'Kab. Waropen', '250000'),
('252700', 'Kab. Supiori', '250000'),
('252800', 'Kab. Memberamo Raya', '250000'),
('252900', 'Kab. Nduga', '250000'),
('253000', 'Kab. Lanny Jaya', '250000'),
('253100', 'Kab. Membramo Tengah', '250000'),
('253200', 'Kab. Yalimo', '250000'),
('253300', 'kab. Puncak', '250000'),
('253400', 'Kab. Dogiyai', '250000'),
('253500', 'Kab. Deiyai', '250000'),
('253600', 'Kab. Intan Jaya', '250000'),
('256000', 'Kota Jayapura', '250000'),
('260100', 'Kab. Bengkulu Utara', '260000'),
('260200', 'Kab. Rejang Lebong', '260000'),
('260300', 'Kab. Bengkulu Selatan', '260000'),
('260400', 'Kab. Muko-muko', '260000'),
('260500', 'Kab. Kepahiang', '260000'),
('260600', 'Kab. Lebong', '260000'),
('260700', 'Kab. Kaur', '260000'),
('260800', 'Kab. Seluma', '260000'),
('260900', 'Kab. Bengkulu Tengah', '260000'),
('266000', 'Kota Bengkulu', '260000'),
('270100', 'Kab. Pulau Taliabu', '270000'),
('270200', 'Kab. Halmahera Tengah', '270000'),
('270300', 'Kab. Halmahera Barat', '270000'),
('270400', 'Kab. halmahera Utara', '270000'),
('270500', 'Kab. Halmahera Selatan', '270000'),
('270600', 'Kab. Halmahera Timur', '270000'),
('270700', 'Kab. Kepulauan Sula', '270000'),
('270800', 'Kab. Kepulauan Morotai', '270000'),
('276000', 'Kota Ternate', '270000'),
('276100', 'Kota Tidore Kepulauan', '270000'),
('280100', 'Kab. Pandeglang', '280000'),
('280200', 'Kab. Lebak', '280000'),
('280300', 'Kab. Tangerang', '280000'),
('280400', 'Kab. Serang', '280000'),
('286000', 'Kota Cilegon', '280000'),
('286100', 'Kota Tangerang', '280000'),
('286200', 'Kota Serang', '280000'),
('286300', 'Kota tangerang Selatan', '280000'),
('290100', 'Kab. Bangka', '290000'),
('290200', 'Kab. Belitung', '290000'),
('290300', 'Kab. Bangka Tengah', '290000'),
('290400', 'Kab. Bangka Barat', '290000'),
('290500', 'Kab. Bangka Selatan', '290000'),
('290600', 'Kab. Belitung Timur', '290000'),
('296000', 'Kota Pangkalpinang', '290000'),
('300100', 'Kab. Boalemo', '300000'),
('300200', 'Kab. Gorontalo', '300000'),
('300300', 'Kab. Pohuwato', '300000'),
('300400', 'Kab. Bone Bolango', '300000'),
('300500', 'Kab. Gorontalo Utara', '300000'),
('306000', 'Kota Gorontalo', '300000'),
('310100', 'Kab. Bintan', '310000'),
('310200', 'Kab. Karimun', '310000'),
('310300', 'Kab. Natuna', '310000'),
('310400', 'Kab. Lingga', '310000'),
('310500', 'Kab. Kepulauan Anambas', '310000'),
('316000', 'Kota Batam', '310000'),
('316100', 'Kota Tanjungpinang', '310000'),
('320100', 'Kab. Fak-Fak', '320000'),
('320200', 'Kab. Kaimana', '320000'),
('320300', 'Kab. Teluk Wondama', '320000'),
('320400', 'Kab. Teluk Bintuni', '320000'),
('320500', 'Kab. Manokwari', '320000'),
('320600', 'Kab. Sorong Selatan', '320000'),
('320700', 'Kab. Sorong', '320000'),
('320800', 'Kab. Raja Ampat', '320000'),
('320900', 'Kab. Tambrauw', '320000'),
('321000', 'Kab. Maybrat', '320000'),
('321100', 'Kab. Pegunungan Arfak', '320000'),
('321200', 'Kab. Manokwari Selatan', '320000'),
('326000', 'Kota Sorong', '320000'),
('330100', 'Kab. Mamuju', '330000'),
('330200', 'Kab. Mamuju Utara', '330000'),
('330300', 'Kab. Polewali Mamasa', '330000'),
('330400', 'Kab. Mamasa', '330000'),
('330500', 'Kab. Majene', '330000'),
('330600', 'Kab. Mamuju Tengah', '330000'),
('340100', 'Kab. Malinau', '340000'),
('340200', 'Kab. Bulungan', '340000'),
('340300', 'Kab. Tana Tidung', '340000'),
('340500', 'Kab. Nunukan', '340000'),
('346000', 'Kota Tarakan', '340000'),
('999999', 'Luar Negeri', '999999');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organisasi`
--

CREATE TABLE `tbl_organisasi` (
  `id_organisasi` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_organisasi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jabatan_dalam_organisasi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `persetujuan_walikelas` enum('0','1','2') CHARACTER SET latin1 NOT NULL,
  `persetujuan_wakasek` enum('0','1','2') CHARACTER SET latin1 NOT NULL,
  `periode_mulai` int(4) NOT NULL,
  `periode_akhir` int(4) NOT NULL,
  `bukti_sertif` varchar(30) NOT NULL,
  `nis_siswa` varchar(9) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_organisasi`
--

INSERT INTO `tbl_organisasi` (`id_organisasi`, `nama_organisasi`, `jabatan_dalam_organisasi`, `persetujuan_walikelas`, `persetujuan_wakasek`, `periode_mulai`, `periode_akhir`, `bukti_sertif`, `nis_siswa`) VALUES
('O001', 'tes', 'tes', '1', '1', 2020, 2022, 'Sertifikat-220612031331.jpeg', '212210001'),
('O002', 'osis', 'Ketua', '1', '1', 2020, 2021, 'Sertifikat-220612053227.jpg', '212210001'),
('O003', 'Pramuka', 'Wakil Ketua', '2', '2', 2020, 2021, 'Sertifikat-220614050429.png', '212210001'),
('O004', 'Pramuka', 'Bendahara', '1', '1', 2019, 2020, 'Sertifikat-220618010745.png', '212210001'),
('O005', 'MPK', 'Wakil Ketua', '0', '0', 2020, 2021, 'Sertifikat-220618015237.jpeg', '212210001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prestasi`
--

CREATE TABLE `tbl_prestasi` (
  `id_prestasi` varchar(4) CHARACTER SET latin1 NOT NULL,
  `id_kelas` varchar(4) CHARACTER SET latin1 NOT NULL,
  `jenis_prestasi` enum('Akademik','Non Akademik') CHARACTER SET latin1 NOT NULL,
  `id_tingkat` varchar(4) CHARACTER SET latin1 NOT NULL,
  `id_bidang` varchar(4) CHARACTER SET latin1 NOT NULL,
  `id_gelar` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_pembina` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_ekskul` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_kegiatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tempat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_provinsi` varchar(6) CHARACTER SET latin1 NOT NULL,
  `id_kota` varchar(6) CHARACTER SET latin1 NOT NULL,
  `persetujuan_walikelas` enum('0','1','2') CHARACTER SET latin1 NOT NULL,
  `persetujuan_wakasek` enum('0','1','2') CHARACTER SET latin1 NOT NULL,
  `penyelenggara` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jumlah_sekolah` varchar(4) CHARACTER SET latin1 NOT NULL,
  `jumlah_peserta` varchar(4) CHARACTER SET latin1 NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `bukti_sertif` varchar(30) NOT NULL,
  `bukti_kegiatan` varchar(30) NOT NULL,
  `nis_siswa` varchar(9) NOT NULL,
  `level_kelas` enum('X','XI','XII') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prestasi`
--

INSERT INTO `tbl_prestasi` (`id_prestasi`, `id_kelas`, `jenis_prestasi`, `id_tingkat`, `id_bidang`, `id_gelar`, `nama_pembina`, `id_ekskul`, `nama_kegiatan`, `tempat`, `id_provinsi`, `id_kota`, `persetujuan_walikelas`, `persetujuan_wakasek`, `penyelenggara`, `jumlah_sekolah`, `jumlah_peserta`, `waktu_pelaksanaan`, `bukti_sertif`, `bukti_kegiatan`, `nis_siswa`, `level_kelas`) VALUES
('P001', 'K002', 'Akademik', 'T003', 'B005', '0009', 'Citra Ayu Ningrum, S.Pd.	', 'E002', 'Olimpiade Sains Indonesia', 'Gedung Walikota Bogor', '020000', '026100', '0', '0', 'Kemendikbudristek', '102', '102', '2021-04-14', 'Sertifikat-220625050820.png', 'Kegiatan-220625050820.png', '212210001', 'X'),
('P002', 'K002', 'Non Akademik', 'T006', 'B004', '0008', 'Faruq Abdul Aziz, S.Pd.', 'E003', 'Kejuaraan Taekwondo', 'SMAN 1 Cibinong', '020000', '020500', '1', '1', 'SMAN 1 Cibinong', '4', '4', '2022-01-11', 'Sertifikat-220625052456.png', 'Kegiatan-220625052456.png', '212210001', 'X'),
('P004', 'K002', 'Akademik', 'T006', 'B001', '0005', 'Asep S.Pd', 'E002', 'OSN Fisika 2021', 'sma 4 cibinong', '020000', '026100', '1', '1', 'sma 4 cibinong', '1', '6', '2022-07-07', 'Sertifikat-220708094001.png', 'Kegiatan-220708094001.jpg', '212210001', 'X'),
('P005', 'K003', 'Akademik', 'T003', 'B001', '0006', '-', 'E002', 'a', 'a', '020000', '020500', '0', '0', 'a', '10', '20', '2022-07-01', 'Sertifikat-220717081216.png', 'Kegiatan-220717081216.png', '212210289', 'X'),
('P006', 'K019', 'Non Akademik', 'T003', 'B004', '0005', '-', 'E010', 'b', 'b', '020000', '020500', '0', '0', 'b', '15', '30', '2022-06-24', 'Sertifikat-220717223751.png', 'Kegiatan-220717223751.png', '202110001', 'X'),
('P007', 'K020', 'Akademik', 'T003', 'B001', '0001', '-', 'E002', 'c', 'c', '020000', '020500', '0', '0', 'c', '8', '24', '2022-06-01', 'Sertifikat-220717223922.png', 'Kegiatan-220717223922.png', '202110001', 'X'),
('P008', 'K023', 'Non Akademik', 'T003', 'B006', '0004', '-', 'E012', 'd', 'd', '020000', '020500', '0', '0', 'd', '8', '40', '2022-07-08', 'Sertifikat-220717224557.png', 'Kegiatan-220717224557.png', '192010325', 'X'),
('P009', 'K005', 'Non Akademik', 'T003', 'B002', '0005', 'e', 'E014', 'e', 'e', '020000', '026100', '0', '0', 'e', '5', '100', '2022-05-12', 'Sertifikat-220717225221.png', 'Kegiatan-220717225221.png', '212210361', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` varchar(6) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
('010000', 'Prov. D.K.I. Jakarta'),
('020000', 'Prov. Jawa Barat'),
('030000', 'Prov. Jawa Tengah'),
('040000', 'Prov. D.I. Yogyakarta'),
('050000', 'Prov. Jawa Timur'),
('060000', 'Prov. Aceh'),
('070000', 'Prov. Sumatera Utara'),
('080000', 'Prov. Sumatera Barat'),
('090000', 'Prov. Riau'),
('100000', 'Prov. Jambi'),
('110000', 'Prov. Sumatera Selatan'),
('120000', 'Prov. Lampung'),
('130000', 'Prov. Kalimantan Barat'),
('140000', 'Prov. Kalimantan Tengah'),
('150000', 'Prov. Kalimantan Selatan'),
('160000', 'Prov. Kalimantan Timur'),
('170000', 'Prov. Sulawesi Utara'),
('180000', 'Prov. Sulawesi Tengah'),
('190000', 'Prov. Sulawesi Selatan'),
('200000', 'Prov. Sulawesi Tenggara'),
('210000', 'Prov. Maluku'),
('220000', 'Prov. Bali'),
('230000', 'Prov. Nusa Tenggara Barat'),
('240000', 'Prov. Nusa Tenggara Timur'),
('250000', 'Prov. Papua'),
('260000', 'Prov. Bengkulu'),
('270000', 'Prov. Maluku Utara'),
('280000', 'Prov. Banten'),
('290000', 'Prov. Bangka Belitung'),
('300000', 'Prov. Gorontalo'),
('310000', 'Prov. Kepulauan Riau'),
('320000', 'Prov. Papua Barat'),
('330000', 'Prov. Sulawesi Barat'),
('340000', 'Prov. Kalimantan Utara'),
('999999', 'Luar Negeri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis_siswa` varchar(9) CHARACTER SET latin1 NOT NULL,
  `nama_siswa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_kelas` varchar(20) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET latin1 NOT NULL,
  `alamat_siswa` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tahun_angkatan` varchar(4) CHARACTER SET latin1 NOT NULL,
  `kontak_siswa` varchar(13) CHARACTER SET latin1 NOT NULL,
  `passw_siswa` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis_siswa`, `nama_siswa`, `id_kelas`, `jenis_kelamin`, `alamat_siswa`, `tahun_angkatan`, `kontak_siswa`, `passw_siswa`) VALUES
('192010001', 'ADITYA SANDY ERYANSYAH', 'K026', 'L', 'Jl.Y', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('192010037', 'AFIFAH SALSABILAH', 'K027', 'P', 'Jl.Z', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('192010253', 'ALVINA YUNITA', 'K021', 'P', 'Jl.T', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('192010289', 'AHMAD SYAFIQ', 'K022', 'L', 'Jl.U', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('192010325', 'ADINDA PUTRI SALSABILAH', 'K023', 'P', 'Jl.V', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('192010361', 'ADILAH SHABRINA EFENDI', 'K024', 'P', 'Jl.W', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('192010397', 'ADZKA HERMAWAN', 'K025', 'L', 'Jl.X', '2020', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110001', 'ABDURRAHMAN ARIFIN', 'K019', 'L', 'Jl.R', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110037', 'ADILA CAHAYANI', 'K020', 'P', 'Jl.S', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110253', 'ABELLE RINDU PAJOUW', 'K014', 'P', 'Jl.N', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110325', 'ADINDA AFRILIA PUTERI', 'K017', 'P', 'Jl.P', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110361', 'ARDI ANGGARA', 'K018', 'L', 'Jl.Q', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110397', 'ADHAN RAKHA PERMANA', 'K016', 'L', 'Jl.M', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('202110430', 'ADHITYA KOMARA', 'K015', 'L', 'Jl.O', '2021', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210001', 'AGIL NAUFAL RAMADHAN', 'K007', 'L', 'Jl.F', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210037', 'ADIKHA PUTRA RAMADHAN', 'K008', 'L', 'Jl.G', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210073', 'AFRIANA ALAMSAH', 'K009', 'L', 'Jl.H', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210109', 'ACHMAD RIZKY EKA SYAPUTRA', 'K010', 'L', 'Jl.I', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210145', 'AGASTYAN ZULFINTORIS', 'K011', 'L', 'Jl.J', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210181', 'AHMAD RIDWAN', 'K012', 'L', 'Jl.K', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210217', 'AMRIYANA FADILLAH', 'K013', 'L', 'Jl.L', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210253', 'ADLI ABIDI EFENDI', 'K002', 'L', 'Jl. A', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210289', 'ALTHAF HANAN ALFARIZA', 'K003', 'P', 'Jl.B', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210325', 'ABDULAH AZZAM', 'K004', 'L', 'Jl.C', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210361', 'AHMAD MU`AFA WAHYU HIBBATULLAH', 'K005', 'L', 'Jl.D', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31'),
('212210397', 'ADI RENDI SAPUTRA', 'K006', 'L', 'Jl.E', '2022', '08', 'b11e68710c555942ac5b46555f887a956f1d3e31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tingkat`
--

CREATE TABLE `tbl_tingkat` (
  `id_tingkat` varchar(6) CHARACTER SET latin1 NOT NULL,
  `nama_tingkat` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tingkat`
--

INSERT INTO `tbl_tingkat` (`id_tingkat`, `nama_tingkat`) VALUES
('T001', 'Internasional'),
('T002', 'Nasional'),
('T003', 'Daerah/Provinsi'),
('T004', 'Kabupaten/Kota'),
('T005', 'Kecamatan'),
('T006', 'SMAN 4 Cibinong');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(4) CHARACTER SET latin1 NOT NULL,
  `nama_user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username_user` varchar(20) CHARACTER SET latin1 NOT NULL,
  `password_user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `akses_level` enum('1','2') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username_user`, `password_user`, `akses_level`) VALUES
('U000', 'user', 'user', '12dea96fec20593566ab75692c9949596833adc9', '1'),
('U001', 'suci', 'sucibila', 'da9ef6d5321ed22f803bd4389bf22fabad15c89e', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_bidang`
--
ALTER TABLE `tbl_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tbl_ekskul`
--
ALTER TABLE `tbl_ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `tbl_gelar`
--
ALTER TABLE `tbl_gelar`
  ADD PRIMARY KEY (`id_gelar`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tbl_organisasi`
--
ALTER TABLE `tbl_organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `tbl_prestasi`
--
ALTER TABLE `tbl_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis_siswa`);

--
-- Indexes for table `tbl_tingkat`
--
ALTER TABLE `tbl_tingkat`
  ADD PRIMARY KEY (`id_tingkat`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
