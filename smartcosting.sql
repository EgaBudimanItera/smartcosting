/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.21 : Database - smartcosting
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`smartcosting` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `smartcosting`;

/*Table structure for table `bahanbaku` */

DROP TABLE IF EXISTS `bahanbaku`;

CREATE TABLE `bahanbaku` (
  `idbb` varchar(10) NOT NULL,
  `namabb` varchar(30) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idbb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahanbaku` */

insert  into `bahanbaku`(`idbb`,`namabb`,`satuan`) values ('R00001','bHan 1','Unit');

/*Table structure for table `biayabb` */

DROP TABLE IF EXISTS `biayabb`;

CREATE TABLE `biayabb` (
  `idbiayabb` int(11) NOT NULL AUTO_INCREMENT,
  `idproduksi` varchar(12) DEFAULT NULL,
  `idbb` varchar(10) DEFAULT NULL,
  `jumlahbiaya` double DEFAULT NULL,
  `statusbb` enum('0','1') DEFAULT '0' COMMENT '0=awal,1=tambahan',
  PRIMARY KEY (`idbiayabb`),
  KEY `FK_biayabb` (`idbb`),
  KEY `FK_biayabb1` (`idproduksi`),
  CONSTRAINT `FK_biayabb` FOREIGN KEY (`idbb`) REFERENCES `bahanbaku` (`idbb`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_biayabb1` FOREIGN KEY (`idproduksi`) REFERENCES `produksi` (`idproduksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `biayabb` */

/*Table structure for table `biayatkl` */

DROP TABLE IF EXISTS `biayatkl`;

CREATE TABLE `biayatkl` (
  `idbiayatkl` int(11) NOT NULL AUTO_INCREMENT,
  `idproduksi` varchar(12) DEFAULT NULL,
  `idtkl` varchar(10) DEFAULT NULL,
  `jumlahtkl` double DEFAULT NULL,
  `statustkl` enum('0','1') DEFAULT '0' COMMENT '0=awal,1=tambahan',
  PRIMARY KEY (`idbiayatkl`),
  KEY `FK_biayatkl` (`idtkl`),
  KEY `FK_biayatkl3` (`idproduksi`),
  CONSTRAINT `FK_biayatkl` FOREIGN KEY (`idtkl`) REFERENCES `tenagakerjalangsung` (`idtkl`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_biayatkl3` FOREIGN KEY (`idproduksi`) REFERENCES `produksi` (`idproduksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `biayatkl` */

/*Table structure for table `bop` */

DROP TABLE IF EXISTS `bop`;

CREATE TABLE `bop` (
  `idbop` int(11) NOT NULL AUTO_INCREMENT,
  `idproduksi` varchar(12) DEFAULT NULL,
  `idop` varchar(10) DEFAULT NULL,
  `jumlahbop` double DEFAULT NULL,
  `statusbop` enum('0','1') DEFAULT NULL COMMENT '0=awal,1=akhir',
  PRIMARY KEY (`idbop`),
  KEY `FK_bop` (`idop`),
  KEY `FK_bop2` (`idproduksi`),
  CONSTRAINT `FK_bop` FOREIGN KEY (`idop`) REFERENCES `op` (`idop`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_bop2` FOREIGN KEY (`idproduksi`) REFERENCES `produksi` (`idproduksi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bop` */

/*Table structure for table `op` */

DROP TABLE IF EXISTS `op`;

CREATE TABLE `op` (
  `idop` varchar(10) NOT NULL,
  `namaop` varchar(30) DEFAULT NULL,
  `keterangan` enum('0','1') DEFAULT NULL COMMENT '0=tetap,1=variabel',
  PRIMARY KEY (`idop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `op` */

insert  into `op`(`idop`,`namaop`,`keterangan`) values ('O00001','BOP 1','0'),('O00002','BOP 2','1');

/*Table structure for table `produk` */

DROP TABLE IF EXISTS `produk`;

CREATE TABLE `produk` (
  `idproduk` varchar(5) NOT NULL,
  `namaproduk` varchar(30) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produk` */

insert  into `produk`(`idproduk`,`namaproduk`,`satuan`,`jumlah`) values ('P0001','Produk 1','Unit',NULL);

/*Table structure for table `produksi` */

DROP TABLE IF EXISTS `produksi`;

CREATE TABLE `produksi` (
  `idproduksi` varchar(12) NOT NULL,
  `tglmulai` date DEFAULT NULL,
  `tglakhir` date DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `idproduk` varchar(10) DEFAULT NULL,
  `jumlhprosesawal` int(11) DEFAULT NULL,
  `jumlproduksi` int(11) DEFAULT NULL,
  `jumlselesai` int(11) DEFAULT NULL,
  `jumlprosesakhir` int(11) DEFAULT NULL,
  `pbbprosesawal` int(11) DEFAULT NULL,
  `ptklprosesawal` int(11) DEFAULT NULL,
  `pbopprosesawal` int(11) DEFAULT NULL,
  `pbbprosesakhir` int(11) DEFAULT NULL,
  `ptklprosesakhir` int(11) DEFAULT NULL,
  `pbopprosesakhir` int(11) DEFAULT NULL,
  `bbbprosesawal` double DEFAULT NULL,
  `btklprosesawal` double DEFAULT NULL,
  `bbopprosesawal` double DEFAULT NULL,
  `bbbtambahan` double DEFAULT NULL,
  `btkltambahan` double DEFAULT NULL,
  `bboptambahan` double DEFAULT NULL,
  `biayaunit` double DEFAULT NULL,
  `statusproduksi` enum('0','1','2') DEFAULT '0' COMMENT '0=mulai produksi,1=selesai,2=transfer kebulan depan',
  `jumlrencana` double DEFAULT '0',
  `jumlprosesawal` double DEFAULT '0',
  PRIMARY KEY (`idproduksi`),
  KEY `FK_produksi` (`idproduk`),
  CONSTRAINT `FK_produksi` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `produksi` */

insert  into `produksi`(`idproduksi`,`tglmulai`,`tglakhir`,`bulan`,`tahun`,`idproduk`,`jumlhprosesawal`,`jumlproduksi`,`jumlselesai`,`jumlprosesakhir`,`pbbprosesawal`,`ptklprosesawal`,`pbopprosesawal`,`pbbprosesakhir`,`ptklprosesakhir`,`pbopprosesakhir`,`bbbprosesawal`,`btklprosesawal`,`bbopprosesawal`,`bbbtambahan`,`btkltambahan`,`bboptambahan`,`biayaunit`,`statusproduksi`,`jumlrencana`,`jumlprosesawal`) values ('P00001','2020-04-09',NULL,'04','2020','P0001',NULL,0,0,0,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0',3000,0);

/*Table structure for table `tenagakerjalangsung` */

DROP TABLE IF EXISTS `tenagakerjalangsung`;

CREATE TABLE `tenagakerjalangsung` (
  `idtkl` varchar(10) NOT NULL,
  `namatkl` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idtkl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tenagakerjalangsung` */

insert  into `tenagakerjalangsung`(`idtkl`,`namatkl`) values ('T00001','TKL 1');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(30) DEFAULT NULL,
  `userPassword` varchar(150) DEFAULT NULL,
  `userHakakses` enum('Admin','Pimpinan','Teller') DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (1,'admin','admin','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
