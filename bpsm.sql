-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 01:03 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(5) NOT NULL,
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_EmailAddr` varchar(50) NOT NULL,
  `Admin_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Admin_EmailAddr`, `Admin_Password`) VALUES
(101, 'Aziah binti Anual', 'aziah@melaka.gov.my', 'aacaa08c0199f26bb94a337e8aa85df9'),
(102, 'Suyanti binti Mohd Isa', 'suyanti@melaka.gov.my', '9c7f3f209adff1686d08b5b87ce94a9f'),
(103, 'Muhammad Izzat bin Zainal', 'm.izzat@melaka.gov.my', '751cb3f4aa17c36186f4856c8982bf27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(100) NOT NULL,
  `Category_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`) VALUES
(1, 'JKMM'),
(2, 'PAN'),
(3, 'PBT'),
(4, 'BBN');

-- --------------------------------------------------------

--
-- Table structure for table `chief`
--

CREATE TABLE `chief` (
  `Chief_ID` int(100) NOT NULL,
  `Chief_IC` varchar(100) NOT NULL,
  `Chief_Name` varchar(255) NOT NULL,
  `Chief_Position` varchar(255) NOT NULL,
  `Chief_Grade` varchar(255) NOT NULL,
  `Chief_ContactNo` varchar(20) NOT NULL,
  `Chief_EmailAddr` varchar(255) NOT NULL,
  `Chief_Password` varchar(50) NOT NULL,
  `Department_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chief`
--

INSERT INTO `chief` (`Chief_ID`, `Chief_IC`, `Chief_Name`, `Chief_Position`, `Chief_Grade`, `Chief_ContactNo`, `Chief_EmailAddr`, `Chief_Password`, `Department_ID`) VALUES
(19, '8888888888888', 'encik mohd nazri bin aziz', 'ketua Pembantu Tadbir', 'N22', '0196810031', 'mohd.nazri@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 1),
(22, '120845295834', 'PUAN NURALIZA BINTI MOHD YUSOFF', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', '012435565', 'nuraliza@melaka.gov.my', 'cf4986dead355ef96278e0c6e36ee226', 4),
(23, '0', 'encik norizan bin hamsah', 'pegawai tadbir', 'n41', '0162087579', 'norizan_h@melaka.gov.my', 'cf4986dead355ef96278e0c6e36ee226', 2),
(24, '0', 'puan NUR MASTIKAH binti malek', 'pembantu tadbir', 'n19', '166569726', 'mastikah@melaka.gov.my', 'cf4986dead355ef96278e0c6e36ee226', 3),
(25, '0', 'puan hayyu binti sharrudin', 'pegawai tadbir', 'n41', '126822253', 'hayyu@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 31),
(26, '123456789', 'encik zulkifly bin hj tamby omar', 'pegawai tadbir', 'n41', '123535092', 'zulkifly@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 21),
(27, '0', 'puan nurul fazrina binti anis azurin', 'pegawai tadbir', 'n41', '142101395', 'fazrina@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 22),
(28, '0', 'encik baharuddin bin gappar', 'penolong pegawai tadbir', 'n32', '1139988546', 'baharuddin@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 51),
(29, '0', 'encik bakhtiar bin zainal', 'pegawai tadbir', 'n41', '176263704', 'bakhtiar@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 39),
(30, '0', 'puan siti nor faizah binti mohamad kassim', 'pegawai tadbir', 'n41', '126537290', 'sitinorfaizah@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 49),
(31, '0', 'puan nurazlin binti ahmad', 'penolong setiausaha kerajaan', 'n41', '173434106', 'nurazlinahmad@melaka.gov.my', 'cf4986dead355ef96278e0c6e36ee226', 5),
(32, '0', 'puan noor hafizah binti md sidek', 'pembantu tadbir', 'n19', '176260471', 'norhafizah.sidek@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 52),
(33, '0', 'puan siti aida binti hj omar', 'pegawai tadbir', 'n41', '197589200', 'siti.aida@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 6),
(34, '0', 'puan fatin fashareena binti misrom', 'pegawai tadbir', 'n41', '134244114', 'fashareena@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 37),
(35, '0', 'encik mohd khaidir bin mokhtar', 'pembantu tadbir', 'n19', '166269574', 'khaidir@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 48),
(36, '0', 'encik lim sze koon', 'penolong pegawai tadbir', 'n29', '166085258', 'szekoon@melaka.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 8),
(37, '2147483647', 'haszlinda binti zainal abidin', 'pembantu hal ehwal islam', 'n41', '0196304839', 'haszlinda@maim.gov.my', '325a2cc052914ceeb8c19016c091d2ac', 27),
(38, '0', 'NURHUDAH BINTI MOHD BASHIR', 'Penolong Pegawai Tadbir', 'N29', '-', 'nurhudah@melaka.gov.my', 'cf4986dead355ef96278e0c6e36ee226', 7);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_ID` int(10) NOT NULL,
  `Course_Name` varchar(255) NOT NULL,
  `Course_Organizer` varchar(255) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Total_Days` int(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Staff_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_ID`, `Course_Name`, `Course_Organizer`, `Start_Date`, `End_Date`, `Total_Days`, `Place`, `Staff_ID`) VALUES
(1, 'BENGKEL PENGEMASKINIAN SISTEM ePSM KAKITANGAN MAIM BAGI TAHUN 2020 SIRI 5', '-', '2020-01-24', '2020-01-24', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 81),
(2, 'KURSUS KAUNSELING DALAM PERKHIDMATAN AWAM TAHAP 1 (KRISIS/KEDUKAAN/TRAUMA) UNTUK TEAM MAIM BAGI TAHUN 2020', '-', '2020-01-30', '2020-02-01', 3, 'KEM PERMATA RESORT, ALOR GAJAH, MELAKA', 81),
(3, 'BENGKEL PENGEMASKINIAN SASARAN KERJA TAHUNAN MELALUI APLIKASI HRMIS TAHUN 2020 SIRI 4', '-', '2020-03-05', '2020-03-05', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 81),
(4, 'BENGKEL PENGEMASKINIAN MyPORTFOLIO MELALUI APLIKASI HRMIS BAGI PETUNJUK PENILAIAN PRESTASI (KPI) TAHUN 2020 SIRI 5', '-', '2020-07-14', '2020-07-14', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 81),
(5, 'BENGKEL PENGEMASKINIAN LAPORAN NILAIAN PRESTASI TAHUNAN (LNPT) MELALUI APLIKASI HRMIS BAGI PETUNJUK PENILAIAN PRESTASI (KPI) TAHUN 2020 SESI 1', '-', '2020-10-19', '2020-10-19', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 81),
(7, 'PROGRAM JOM EKSA SIHAT #WHEEL OF FITNESS CHALLENGE PERINGKAT MAJLIS AGAMA ISLAM MELAKA BAGI TAHUN 2020', '-', '2020-10-28', '2020-10-28', 1, 'LOBI UTAMA MAJLIS AGAMA ISLAM MELAKA', 81),
(8, 'KURSUS PENGURUSAN KEWANGAN: SMARTbelanja@LPPKN', '-', '2020-10-26', '2020-10-26', 1, 'BILIK SEMINAR PEJABAT LPPKN MELAKA, KOTA FESYEN, MITC, AYER KEROH, MELAKA', 81),
(9, 'BENGKEL PENGEMASKINIAN SISTEM ePSM KAKITANGAN MAIM BAGI TAHUN 2020 SIRI 3', '-', '2020-01-22', '2020-01-22', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 82),
(10, 'BENGKEL PENGEMASKINIAN SASARAN KERJA TAHUNAN MELALUI APLIKASI HRMIS TAHUN 2020 SIRI 2', '-', '2020-03-03', '2020-03-03', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 82),
(11, 'BENGKEL PENGEMASKINIAN MyPORTFOLIO MELALUI APLIKASI HRMIS BAGI PETUNJUK PENILAIAN PRESTASI (KPI) TAHUN 2020 SIRI 2', '-', '2020-07-08', '2020-07-08', 1, 'BILIK MESYUARAT ARAS 1, PUSAT ISLAM, MAJLIS AGAMA ISLAM MELAKA', 82),
(12, 'Bengkel Penetapan Pencapaian 2019 Dan Way Foward 2020', 'BPSM, JKMM', '2020-01-08', '2020-01-10', 3, 'Chorus Hotel Kuala Lumpur', 84),
(13, 'Program Retreat Pengurusan Jabatan Pengangkutan Jalan Malaysia Tahun 2020', 'JPJ Malaysia', '2020-01-11', '2020-01-14', 3, 'Akademi JPJ Malaysia, Ayer Molek, Melaka', 85),
(14, 'Program Perhimpunan Setia Jpj Bulan Januari 2020', 'JPJ Malaysia', '2020-01-23', '2020-01-23', 1, 'Dewan Kementerian Pengangkutan Malaysia, Putrajaya', 85),
(15, 'Bengkel Pemantapan Dan Penambahbaikan Bagi Penyelaras & Juruaudit Dalaman Eksa Jabatan Ketua Menteri Melaka Tahun 2020', 'Bahagian Pengurusan Sumber Manusia', '2020-05-10', '2020-05-10', 1, 'Hotel AMES', 83),
(16, 'Mesyuarat Pemantapan Strategik Bahagian Pengurusan Sumber Manusia, Jabatan Ketua Menteri Melaka Tahun 2020', 'BPSM, JKMM', '2020-10-16', '2020-10-18', 3, 'Bukit Gambang, Resort City, Pahang', 8),
(17, 'Mesyuarat Pemantapan Strategik Bahagian Pengurusan Sumber Manusia, Jabatan Ketua Menteri Melaka Tahun 2020', 'BPSM, JKMM', '2020-10-16', '2020-10-18', 3, 'Bukit Gambang, Resort City, Pahang', 6),
(18, 'Kursus Pemantapan Sistem Pengurusan Keselamatan Maklumat Iso/Iec 27001:2013 Bagi Juruaudit Dalam Dan Penyelaras Iso Jabatan Ketua Menteri Melakatahun 2020', 'BKK, JKMM', '2020-10-13', '2020-10-13', 0, 'HOTEL NOVOTEL, MELAKA', 86),
(19, 'Kursus Imbangi Kerjaya Dan Keluarga (Parenting@Work) Siri 3', 'LPPKN', '2020-09-30', '2020-09-30', 1, 'LPPKN', 87),
(20, 'Klinik Penyediaan Risalah Perkhidmatan-Perkhidmatan Utama Agensi Sektor Awam', 'MAMPU', '2020-02-19', '2020-02-21', 3, 'Kompleks Setia Perdana, Putrajaya', 88),
(21, 'Kursus Pemantapan Sistem Pengurusan Keselamatan Maklumat Iso/Iec 27001:2013', 'JKMM', '2020-10-13', '2020-10-13', 1, 'Hotel Novotel', 89);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_ID` int(100) NOT NULL,
  `Department_Name` varchar(255) NOT NULL,
  `Category_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Department_Name`, `Category_ID`) VALUES
(1, 'Badan Kawal Selia Air', 1),
(2, 'Bahagian Teknologi Maklumat & Komunikasi', 1),
(3, 'Bahagian Khidmat Pengurusan', 1),
(4, 'Bahagian Pengurusan Sumber Manusia', 1),
(5, 'Bahagian Komunikasi Korporat', 1),
(6, 'Bahagian Koridor Infrastruktur dan Impak Sosial', 1),
(7, 'Bahagian Audit Dalam dan Siasatan Awam', 1),
(8, 'Bahagian Promosi Pelancongan', 1),
(9, 'Jabatan Mufti Negeri Melaka', 2),
(10, 'Jabatan Perancang Bandar dan Desa Negeri Melaka', 2),
(11, 'Jabatan Kerja Raya Melaka', 2),
(12, 'Jabatan Kebajikan Masyarakat Negeri Melaka', 2),
(13, 'Jabatan Perkhidmatan Veterinar Negeri Melaka', 2),
(14, 'Jabatan Pengairan dan Saliran Negeri Melaka', 2),
(15, 'Jabatan Perhutanan Negeri Melaka', 2),
(16, 'Jabatan Pertanian Negeri Melaka', 2),
(17, 'Jabatan Pendakwaan Syariah Negeri Melaka', 2),
(18, 'Jabatan Agama Islam Melaka', 2),
(19, 'Lembaga Perumahan Melaka', 4),
(20, 'Mahkamah Syariah Negeri Melaka', 2),
(21, 'Majlis Sukan Negeri', 1),
(22, 'Majlis Pembangunan Pulau-Pulau Melaka', 1),
(23, 'Majlis Bandaraya Melaka Bersejarah', 3),
(24, 'Majlis Perbandaran Alor Gajah', 3),
(25, 'Majlis Perbandaran Jasin', 3),
(26, 'Majlis Perbandaran Hang Tuah Jaya', 3),
(27, 'Majlis Agama Islam Negeri Melaka', 4),
(28, 'Pejabat Setiausaha Kerajaan Negeri', 1),
(29, 'Pejabat Setiausaha Kerajaan (Pengurusan)', 1),
(30, 'Pejabat Setiausaha Kerajaan (Pembangunan)', 1),
(31, 'Pejabat Ketua Menteri', 1),
(32, 'Pejabat Pengarah Tanah dan Galian Negeri Melaka', 2),
(33, 'Pejabat Daerah dan Tanah Melaka Tengah', 2),
(34, 'Pejabat Daerah dan Tanah Alor Gajah', 2),
(35, 'Pejabat Daerah dan Tanah Jasin', 2),
(36, 'Pejabat TYT Yang di-Pertuan Negeri Melaka', 2),
(37, 'Pejabat Pemantauan dan Pelaksanaan Negeri', 1),
(38, 'jabatan Kewangan dan Perbendaharaan Negeri Melaka', 2),
(39, 'Perbadanan Ketua Menteri', 1),
(40, 'Perbandaran Kemajuan Tanah Adat Melaka', 4),
(41, 'Perbadanan Kemajuan Negeri Melaka', 4),
(42, 'Perbadanan Pembangunan Sungai dan Pantai Melaka', 4),
(43, 'Perbadanan Teknologi Hijau Melaka', 4),
(44, 'Perbadanan Bioteknologi Melaka', 4),
(45, 'Perbadanan Perpustakaan Awam Negeri Melaka', 4),
(46, 'Perbadanan Stadium Melaka', 4),
(47, 'Perbadanan Muzium Melaka', 4),
(48, 'Pusat Sumber', 1),
(49, 'Tabung Amanah Pendidikan Negeri Melaka', 1),
(50, 'Unit Perancang Ekonomi Negeri', 1),
(51, 'Unit Dewan dan MMKN', 1),
(52, 'Unit Integriti', 1),
(53, 'Unit Kerajaan Tempatan', 1),
(54, 'Yayasan Melaka', 4),
(55, 'Bahagian Khidmat Musaadah', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(100) NOT NULL,
  `Staff_Name` varchar(255) DEFAULT NULL,
  `Staff_Position` varchar(255) DEFAULT NULL,
  `Staff_Grade` varchar(255) DEFAULT NULL,
  `Staff_Group` varchar(255) DEFAULT NULL,
  `Chief_ID` int(10) DEFAULT NULL,
  `Department_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Staff_Position`, `Staff_Grade`, `Staff_Group`, `Chief_ID`, `Department_ID`) VALUES
(5, 'ENCIK ZUKHAIRI BIN ARUN', 'PENOLONG SETIAUSAHA, PEGAWAI TADBIR DAN DIPLOMATIK', 'M48', 'PENGURUSAN & PROFESIONAL', 22, 4),
(6, 'PUAN MAZIAH BINTI ZAINAL', 'PENOLONG PEGAWAI TADBIR', 'N32', 'SOKONGAN 2', 22, 4),
(7, 'PUAN MARYAWATY BINTI PUNGUT @ MUHAMMAD TAJUDDIN', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N22', 'SOKONGAN 2', 22, 4),
(8, 'PUAN ZALIZA BINTI SARJUNI', 'PENOLONG PEGAWAI TADBIR', 'N32', 'SOKONGAN 2', 22, 4),
(9, 'PUAN NOR HANISAH BINTI ISMAIL', 'PENOLONG PEGAWAI TEKNOLOGI MAKLUMAT', 'FA29', 'PELAKSANA', 22, 4),
(10, 'PUAN NORAINI BINTI TAWEL', 'SETIAUSAHA BAHAGIAN, PEGAWAI TADBIR DAN DIPLOMATIK', 'M54', 'PENGURUSAN & PROFESIONAL', 22, 4),
(12, 'PUAN NUR ISZATI BINTI NOORDIN', 'PENGURUS KEBUDAYAAN', 'n41', 'pengurusan & profesional', 36, 8),
(13, 'ENCIK WEE JUANN LEE', 'PENOLONG PENGURUS  KEBUDAYAAN', 'b32', 'sokongan 1', 36, 8),
(14, 'CIK NORAZLINA BINTI MAT HASIM', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'n17', 'sokongan 2', 36, 8),
(15, 'PUAN NOOR FAEZAH BINTI MOHAMAD', 'PEMBANTU EHWAL EKONOMI', 'E17', 'SOKONGAN 2', 36, 8),
(16, 'ENCIK SAARI BIN BASIRON', 'PENGURUS BESAR', 'N41', 'PENGURUSAN & PROFESIONAL', 36, 8),
(17, 'PUAN MARSITAH BINTI OTHMAN', 'PENOLONG PEGAWAI TADBIR', 'n36', 'sokongan 1', 19, 1),
(18, 'PUAN AZIAN AZAWATI BINTI ABDULLAH', 'PEGAWAI TADBIR DAN DIPLOMATIK', 'm48', 'PENGURUSAN & PROFESIONAL', 19, 1),
(19, 'PUAN LATIFAH BTE ABD. LATIP', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 19, 1),
(20, 'PUAN NORHAFIZAH BINTI OTHMAN @ SEMAN', 'PENOLONG PEGAWAI SIASATAN/PEGAWAI SIASATAN', 'P42', 'PENGURUSAN & PROFESIONAL', 19, 1),
(21, 'PUAN LINDA BINTI ALI', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 19, 1),
(22, 'PUAN NOOR HAFIZAH BINTI MD SIDEK', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI) ', 'N19', 'SOKONGAN 1', 19, 1),
(23, 'PUAN NOORAIN BINTI TONGPANG', 'PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 19, 1),
(24, 'PUAN SITI HAJAR BINTI ABD RAHMAN', 'PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 19, 1),
(25, 'CIK AMILIA AZHANI BINTI ABDUL AZIZ', 'PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 19, 1),
(26, 'ENCIK KHAIRULZAMANI BIN SHATAR', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 19, 1),
(27, 'ENCIK AUGUSTINHO AHMAD FAHRI', 'PENOLONG PEGAWAI TADBIR', 'N29', 'SOKONGAN 1', 19, 1),
(28, 'ENCIK ABDUL RAHMAN BIN AHMAD', 'PEMBANTU OPERASI', 'N11', 'SOKONGAN 2', 19, 1),
(29, 'ENCIK MOHD SHUKOR BIN DOBOT', 'PEMANDU KENDERAAN', 'H11', 'SOKONGAN 2', 19, 1),
(30, 'PUAN NORHAFIZA BINTI MOHD NOOR', 'PEMBANTU EHWAL EKONOMI', 'E17', 'SOKONGAN 2', 36, 8),
(31, 'ENCIK ALI BIN EMBI', 'AHLI MUZIK ', 'B19', 'SOKONGAN 1', 36, 8),
(32, 'ENCIK SAZALI BIN MOHD SANI', 'ARTIS BUDAYA (PENYANYI)', 'B19', 'SOKONGAN 1', 36, 8),
(33, 'ENCIK HAIRI BIN IBRAHEM', 'AHLI MUZIK', 'B19', 'SOKONGAN 1', 36, 8),
(34, 'ENCIK SUHAIMI BIN BERAHIM', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 36, 8),
(35, 'PUAN NOR ADILA BINTI ZAINULDIN', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(36, 'ENCIK NOR AZMI BIN MOHD SAID', 'AHLI MUZIK', 'b19', 'sokongan 1', 36, 8),
(37, 'ENCIK GHAZALI BIN AHMAD', 'AHLI MUZIK', 'b19', 'sokongan 1', 36, 8),
(38, 'ENCIK LIM SZE KOON', 'PENOLONG PEGAWAI TADBIR', 'n29', 'sokongan 1', 36, 8),
(39, 'PUAN ASMALIANA BINTI ASHARI', 'PENGURUS PENYELIDIKAN DAN PERANCANGAN STRATEGI', 'n44', 'pengurusan & profesional', 36, 8),
(40, 'PUAN INTAN ZURINAH BINTI ZULKIFLI', 'PEMBANTU EHWAL EKONOMI', 'E17', 'sokongan 2', 36, 8),
(41, 'ENCIK NAZRI BIN MAHAT', 'PEMBANTU OPERASI', 'n1', 'sokongan 2', 36, 8),
(42, 'PUAN NOORHAYATI BINTI SAHLAN', 'PENGURUS MICE', 'E41', 'PENGURUSAN & PROFESIONAL', 36, 8),
(43, 'PUAN LIM SWEE KIANG', 'PENGURUS PROMOSI DOMESTIK, PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 36, 8),
(44, 'ENCIK MOHD ZAHIRUDIN BIN ROSNAN', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N17', 'SOKONGAN 2', 36, 8),
(45, 'PUAN KINTAN BINTI YAAKUB', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N17', 'SOKONGAN 2', 36, 8),
(46, 'ENCIK AZRULNIZAM BIN MOHD', 'PENOLONG AKAUNTAN', 'W29', 'SOKONGAN 1', 36, 8),
(47, 'PUAN ROSNITA BINTI ABDULLAH SANI', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 36, 8),
(48, 'ENCIK MOHD RUSTAM BIN JOHARI', 'ARTIS BUDAYA (PENARI', 'B19', 'SOKONGAN 1', 36, 8),
(49, 'ENCIK AMIN BIN SYID', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(50, 'CIK SITI AISHAH BINTI ZAKARIA', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(51, 'PUAN MARIYAMMA A/P MANICKAM', 'PENOLONG PEGAWAI TADBIR', 'N29', 'SOKONGAN 1', 36, 8),
(52, 'ENCIK MOHD FAUZI BIN MOHAMAD', 'AHLI MUZIK GRED', 'B19', 'SOKONGAN 1', 36, 8),
(53, 'PUAN EE MOI HONG', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 36, 8),
(54, 'PUAN AZURA BINTI AHMAD', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 36, 8),
(55, 'ENCIK MUHAMMAD HARDI BIN IDRIS', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N19', 'SOKONGAN 1', 36, 8),
(56, 'ENCIK NOOR AIMAN BIN ALI SHODIKIN', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(57, 'PUAN WAN MARIATI BINTI W SOHAK', 'PENGURUS KOMUNIKASI', 'N41', 'PENGURUSAN & PROFESIONAL', 36, 8),
(58, 'ENCIK AZMAN BIN SAMAD', 'KETUA MUZIK', 'B29', 'SOKONGAN 1', 36, 8),
(59, 'ENCIK ROSLI BIN HAMZAH', 'PEMANDU KENDERAAN', 'R3', 'SOKONGAN 2', 36, 8),
(60, 'PUAN NURUL KHASSHIDAH BINTI JAILUDIN', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(61, 'ENCIK ABDUL SAMAT BIN AB.WAHAB', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI)', 'N17', 'SOKONGAN 2', 36, 8),
(62, 'PUAN DEWI ZULIANA BINTI DZULKEFLI', 'ARTIS BUDAYA (PENARI) ', 'B19', 'SOKONGAN 1', 36, 8),
(63, 'PUAN NORAINI BINTI OTHMAN', 'ARTIS BUDAYA (PENYANYI)', 'B19', 'SOKONGAN 1', 36, 8),
(64, 'ENCIK RAMLAN BIN MOHD ALI', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI) ', 'N19', 'SOKONGAN 1', 36, 8),
(65, 'ENCIK C GANGKATHRAN A/L CHINNIAH', 'PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 36, 8),
(66, 'CIK WAN EZRA NURAIN BINTI M.WARI', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(67, 'PUAN DAYANG SYARFA SYAZANA BINTI DATU SHADAN', 'ARTIS BUDAYA (PENYANYI)', 'B19', 'SOKONGAN 1', 36, 8),
(68, 'ENCIK MOHAMMAD HAFIDZ BIN SAFAR', 'AHLI MUZIK', 'B19', 'SOKONGAN 1', 36, 8),
(69, 'ENCIK MOHD FAKHROOL BIN KAMARUDIN', 'AHLI MUZIK', 'B19', 'SOKONGAN 1', 36, 8),
(70, 'ENCIK MUHAMMAD HAZIM BIN KAMSAH', 'PEMBANTU OPERASI', 'N11', 'SOKONGAN 2', 36, 8),
(71, 'CIK ROZILAH BINTI ABDUL RAHMAN', 'PEREKA TARI ', 'B29', 'SOKONGAN 1', 36, 8),
(72, 'CIK AFIZAH BINTI AHMAD SAHARI', 'ARTIS BUDAYA (PENARI) ', 'B19', 'SOKONGAN 1', 36, 8),
(73, 'ENCIK MUHAMMAD FITRI BIN JOHARI', 'ARTIS BUDAYA (PENYANYI)', 'B19', 'SOKONGAN 1', 36, 8),
(74, 'ENCIK MUHAMAD NUR SAFIQ BIN ROSSIDI', 'PEMBANTU OPERASI', 'N11', 'SOKONGAN 2', 36, 8),
(75, 'ENCIK TUAN MOHAMAD IZWAN BIN TUAN MAT', 'ARTIS BUDAYA', 'B19', 'SOKONGAN 1', 36, 8),
(76, 'CIK NOR FATEHAH ARIKA BINTI SANUSI', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(77, 'ENCIK MUHAMMAD NAZREEN BIN SHAMSUL BOHARI', 'PENGURUS ACARA', 'N41', 'PENGURUSAN & PROFESIONAL', 36, 8),
(78, 'ENCIK RIDHWAN BIN SABA', 'PEMBANTU TADBIR (PERKERANIAN/OPERASI) ', 'N19', 'SOKONGAN 1', 36, 8),
(79, 'ENCIK ABANG MOHAMMAD HADI BIN SAPIEE @ ABANG SHAFIE', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(80, 'CIK NUR SAIDATUL ATIRA BINTI MOHD NAWAWI', 'ARTIS BUDAYA (PENARI)', 'B19', 'SOKONGAN 1', 36, 8),
(81, 'EMBI BIN OMAR', 'JURUTEKNIK ELEKTRIK', 'j19', 'sokongan 1', 37, 27),
(82, 'ERWIN BIN ABU HASAN', 'PEMBANTU HAL-EHWAL ISLAM', 'S22', 'SOKONGAN 1', 37, 27),
(83, 'ENCIK NORIZAN BIN HAMSAH', 'PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 23, 2),
(84, 'PUAN Siti Nurirdawaty Omar', 'Pegawai Ehwal Ekonomi', 'E44', 'PENGURUSAN & PROFESIONAL', 23, 2),
(85, 'DATO SHAMSUDIN BIN SHARIF', 'KETUA ICT ', 'JUSA C', 'Pengurusan Tertinggi', 23, 2),
(86, 'SITI AIDA BINTI HJ. OMAR', 'PEGAWAI TADBIR', 'N41', 'PENGURUSAN & PROFESIONAL', 33, 6),
(87, 'NUR ADILA BINTI AHMAD', 'PEGAWAI KHIDMAT PELANGGAN ', 'N19', 'SOKONGAN 1', 31, 5),
(88, 'ENCIK Hafizuddin Bin Husin', 'Pembantu Tadbir', 'N19', 'SOKONGAN 1', 24, 3),
(89, 'NURHUDAH BINTI MOHD BASHIR', 'Penolong Pegawai Tadbir', 'N29', 'SOKONGAN 1', 38, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `chief`
--
ALTER TABLE `chief`
  ADD PRIMARY KEY (`Chief_ID`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_ID`),
  ADD KEY `Staff_ID` (`Staff_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD KEY `Chief_ID` (`Chief_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chief`
--
ALTER TABLE `chief`
  MODIFY `Chief_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chief`
--
ALTER TABLE `chief`
  ADD CONSTRAINT `chief_ibfk_1` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Category_ID`) REFERENCES `category` (`Category_ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`Chief_ID`) REFERENCES `chief` (`Chief_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
