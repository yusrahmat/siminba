-- MySQL dump 10.11
--
-- Host: localhost    Database: siminba
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kode_barang` varchar(6) collate latin1_general_ci NOT NULL,
  `nama_barang` varchar(50) collate latin1_general_ci NOT NULL,
  `satuan` varchar(20) collate latin1_general_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY  (`kode_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES ('BR0003','Aqua Mineral','Drum',20),('BR0002','Lactocid','Liter',0),('BR0001','Lecosin','Liter',200);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `kode_customer` varchar(6) collate latin1_general_ci NOT NULL,
  `nama_customer` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `no_kontak` varchar(15) collate latin1_general_ci NOT NULL,
  `catatan` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kode_customer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('CUS001','PT. Lentera','Jl. Sempit No. 90 - Jakarta Selatan','0213334','zzzzz'),('CUS002','PT. Jagakarta','Jl. Semar No. 08 - Jakarta','0214441','wwwwwwww'),('CUS003','PT. Kobako','Jl. Juanda No. 34 - Bogor','0215671','eeee'),('CUS004','PT. Lubrix','Jl. Setia No. 45A - Bandung','02299944','rrrrrrrrrrr');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan`
--

DROP TABLE IF EXISTS `penerimaan`;
CREATE TABLE `penerimaan` (
  `no_terima` varchar(6) collate latin1_general_ci NOT NULL,
  `tanggal` varchar(10) collate latin1_general_ci NOT NULL,
  `kode_supplier` varchar(6) collate latin1_general_ci NOT NULL,
  `no_reff` varchar(10) collate latin1_general_ci NOT NULL,
  `kode_barang` varchar(6) collate latin1_general_ci NOT NULL,
  `jumlah_terima` int(11) NOT NULL,
  PRIMARY KEY  (`no_terima`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `penerimaan`
--

LOCK TABLES `penerimaan` WRITE;
/*!40000 ALTER TABLE `penerimaan` DISABLE KEYS */;
INSERT INTO `penerimaan` VALUES ('TR0003','06/01/2016','SUP002','REF00003','BR0003',50),('TR0002','06/01/2016','SUP001','REF00002','BR0002',100),('TR0001','06/01/2016','SUP001','REF00001','BR0001',200);
/*!40000 ALTER TABLE `penerimaan` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `TG_STOKUPDATE_TERIMA` AFTER INSERT ON `penerimaan` FOR EACH ROW BEGIN

 UPDATE barang SET jumlah=jumlah+NEW.jumlah_terima

 WHERE kode_barang=NEW.kode_barang;

END */;;

/*!50003 SET SESSION SQL_MODE="" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `TG_STOKUPDATE_TERIMA2` AFTER UPDATE ON `penerimaan` FOR EACH ROW BEGIN

 UPDATE barang SET jumlah=(jumlah)-(OLD.jumlah_terima - NEW.jumlah_terima)

 WHERE kode_barang=OLD.kode_barang;

END */;;

/*!50003 SET SESSION SQL_MODE="" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `TG_STOKUPDATE_TERIMA_DELETE` AFTER DELETE ON `penerimaan` FOR EACH ROW BEGIN

 UPDATE barang SET jumlah=jumlah-OLD.jumlah_terima

 WHERE kode_barang=OLD.kode_barang;

END */;;

DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;

--
-- Table structure for table `pengiriman`
--

DROP TABLE IF EXISTS `pengiriman`;
CREATE TABLE `pengiriman` (
  `no_kirim` varchar(6) collate latin1_general_ci NOT NULL,
  `tanggal_kirim` varchar(10) collate latin1_general_ci NOT NULL,
  `kode_customer` varchar(6) collate latin1_general_ci NOT NULL,
  `no_reff` varchar(10) collate latin1_general_ci NOT NULL,
  `tanggal_minta` varchar(12) collate latin1_general_ci NOT NULL,
  `kode_barang` varchar(6) collate latin1_general_ci NOT NULL,
  `jumlah_minta` int(11) NOT NULL,
  `jumlah_kirim` int(11) NOT NULL,
  PRIMARY KEY  (`no_kirim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pengiriman`
--

LOCK TABLES `pengiriman` WRITE;
/*!40000 ALTER TABLE `pengiriman` DISABLE KEYS */;
INSERT INTO `pengiriman` VALUES ('KR0001','06/02/2016','CUS001','REF00001','06/02/2016','BR0003',30,30),('KR0002','06/08/2016','CUS002','REF00002','06/07/2016','BR0002',100,100);
/*!40000 ALTER TABLE `pengiriman` ENABLE KEYS */;
UNLOCK TABLES;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `TG_STOK_KIRIM_AFTER_INSERT` AFTER INSERT ON `pengiriman` FOR EACH ROW BEGIN
 UPDATE barang SET jumlah=jumlah-NEW.jumlah_kirim
 WHERE kode_barang=NEW.kode_barang;
END */;;

/*!50003 SET SESSION SQL_MODE="" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `TG_STOK_KIRIM_AFTER_UPDATE` AFTER UPDATE ON `pengiriman` FOR EACH ROW BEGIN

 UPDATE barang SET jumlah=(jumlah)+(OLD.jumlah_kirim - NEW.jumlah_kirim)

 WHERE kode_barang=OLD.kode_barang;

END */;;

/*!50003 SET SESSION SQL_MODE="" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `TG_STOK_KIRIM_AFTER_DELETE` AFTER DELETE ON `pengiriman` FOR EACH ROW BEGIN

 UPDATE barang SET jumlah=jumlah+OLD.jumlah_kirim

 WHERE kode_barang=OLD.kode_barang;

END */;;

DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;

--
-- Table structure for table `satuan`
--

DROP TABLE IF EXISTS `satuan`;
CREATE TABLE `satuan` (
  `kode_satuan` int(11) NOT NULL auto_increment,
  `nama_satuan` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kode_satuan`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `satuan`
--

LOCK TABLES `satuan` WRITE;
/*!40000 ALTER TABLE `satuan` DISABLE KEYS */;
INSERT INTO `satuan` VALUES (1,'Pcs'),(3,'Drum'),(4,'Dus'),(5,'Liter'),(6,'Kg');
/*!40000 ALTER TABLE `satuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `kode_supplier` varchar(6) collate latin1_general_ci NOT NULL,
  `nama_supplier` varchar(50) collate latin1_general_ci NOT NULL,
  `alamat` varchar(50) collate latin1_general_ci NOT NULL,
  `no_kontak` varchar(15) collate latin1_general_ci NOT NULL,
  `catatan` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`kode_supplier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `supplier`
--

LOCK TABLES `supplier` WRITE;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` VALUES ('SUP001','PT. ALKENA','JL. SUMBA NO.77 - BANDUNG','022434','SSSSST'),('SUP002','PT. Coke-Coke','Jl. Dayak No. 14A - Cikarang Barat','0214445','hhhhhhhhh'),('SUP003','PT. Sampurna','Jl. Kalong No. 100 - Bandung','022333155','hhhhhhh');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` varchar(6) collate latin1_general_ci NOT NULL,
  `username` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(50) collate latin1_general_ci NOT NULL,
  `fullname` varchar(50) collate latin1_general_ci NOT NULL,
  `foto` varchar(50) collate latin1_general_ci NOT NULL,
  `akses` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('USR001','admin','admin','Yus Rahmat','foto/Koala.jpg','admin'),('USR002','gudang','gudang','Dadang Suradang','foto/Penguins.jpg','bag.gudang');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-10  8:34:48
