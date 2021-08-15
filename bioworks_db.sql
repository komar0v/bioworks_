/*
SQLyog Ultimate
MySQL - 10.4.17-MariaDB : Database - bioworks_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `evaluasi_non_tes_tbl` */

DROP TABLE IF EXISTS `evaluasi_non_tes_tbl`;

CREATE TABLE `evaluasi_non_tes_tbl` (
  `id_evaluasi_non_tes` varchar(200) NOT NULL,
  `judul_evaluasi` text DEFAULT NULL,
  `author_evaluasi` varchar(200) DEFAULT NULL,
  `status_evaluasi` text DEFAULT NULL,
  `jenis_evaluasi` text DEFAULT NULL,
  PRIMARY KEY (`id_evaluasi_non_tes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `evaluasi_tes_tbl` */

DROP TABLE IF EXISTS `evaluasi_tes_tbl`;

CREATE TABLE `evaluasi_tes_tbl` (
  `id_evaluasi_tes` varchar(200) NOT NULL,
  `judul_evaluasi` text DEFAULT NULL,
  `author_evaluasi` varchar(200) DEFAULT NULL,
  `batas_pengerjaan` datetime DEFAULT NULL,
  `status_evaluasi` text DEFAULT NULL,
  PRIMARY KEY (`id_evaluasi_tes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `guru_tbl` */

DROP TABLE IF EXISTS `guru_tbl`;

CREATE TABLE `guru_tbl` (
  `user_id` varchar(200) NOT NULL,
  `nip_guru` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `jawaban_evaluasi_non_tes_tbl` */

DROP TABLE IF EXISTS `jawaban_evaluasi_non_tes_tbl`;

CREATE TABLE `jawaban_evaluasi_non_tes_tbl` (
  `id_jawaban` varchar(200) NOT NULL,
  `id_evaluasi_non_tes` varchar(200) DEFAULT NULL,
  `id_pertanyaan` varchar(200) DEFAULT NULL,
  `id_murid` varchar(200) DEFAULT NULL,
  `jawaban_skala` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `jawaban_evaluasi_tes_essay_murid_tbl` */

DROP TABLE IF EXISTS `jawaban_evaluasi_tes_essay_murid_tbl`;

CREATE TABLE `jawaban_evaluasi_tes_essay_murid_tbl` (
  `id_jawaban` varchar(200) NOT NULL,
  `id_evaluasi_tes` varchar(200) DEFAULT NULL,
  `id_soal` varchar(200) DEFAULT NULL,
  `id_murid` varchar(200) DEFAULT NULL,
  `jawaban_murid` text DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `jawaban_evaluasi_tes_pg_murid_tbl` */

DROP TABLE IF EXISTS `jawaban_evaluasi_tes_pg_murid_tbl`;

CREATE TABLE `jawaban_evaluasi_tes_pg_murid_tbl` (
  `id_jawaban` varchar(200) NOT NULL,
  `id_evaluasi_tes` varchar(200) NOT NULL,
  `id_soal` varchar(200) DEFAULT NULL,
  `id_murid` varchar(200) DEFAULT NULL,
  `jawaban_murid` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_jawaban`,`id_evaluasi_tes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `materi_tbl` */

DROP TABLE IF EXISTS `materi_tbl`;

CREATE TABLE `materi_tbl` (
  `id_materi` varchar(200) NOT NULL,
  `penulis_materi` varchar(200) NOT NULL,
  `judul_materi` text DEFAULT NULL,
  `konten_materi` text DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `murid_tbl` */

DROP TABLE IF EXISTS `murid_tbl`;

CREATE TABLE `murid_tbl` (
  `user_id` varchar(200) NOT NULL,
  `nis_murid` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `nilai_evaluasi_non_tes_murid` */

DROP TABLE IF EXISTS `nilai_evaluasi_non_tes_murid`;

CREATE TABLE `nilai_evaluasi_non_tes_murid` (
  `id_nilai_evalnontes` varchar(200) NOT NULL,
  `id_evaluasi_non_tes` varchar(200) DEFAULT NULL,
  `id_murid` varchar(200) DEFAULT NULL,
  `nilai_akhir` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_evalnontes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `nilai_evaluasi_tes_murid` */

DROP TABLE IF EXISTS `nilai_evaluasi_tes_murid`;

CREATE TABLE `nilai_evaluasi_tes_murid` (
  `id_nilai_evaltes` varchar(200) NOT NULL,
  `id_evaluasi_tes` varchar(200) DEFAULT NULL,
  `id_murid` varchar(200) DEFAULT NULL,
  `nilai_pg` varchar(200) DEFAULT NULL,
  `nilai_essay` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_evaltes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `pertanyaan_evaluasi_non_tes_tbl` */

DROP TABLE IF EXISTS `pertanyaan_evaluasi_non_tes_tbl`;

CREATE TABLE `pertanyaan_evaluasi_non_tes_tbl` (
  `id_evaluasi_non_tes` varchar(200) NOT NULL,
  `id_pertanyaan` varchar(200) NOT NULL,
  `pertanyaan` text DEFAULT NULL,
  PRIMARY KEY (`id_evaluasi_non_tes`,`id_pertanyaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `soal_essay_evaluasi_tes_tbl` */

DROP TABLE IF EXISTS `soal_essay_evaluasi_tes_tbl`;

CREATE TABLE `soal_essay_evaluasi_tes_tbl` (
  `id_evaluasi_tes` varchar(200) NOT NULL,
  `id_soal` varchar(200) NOT NULL,
  `pertanyaan_soal` text DEFAULT NULL,
  `jawaban_benar` text DEFAULT NULL,
  PRIMARY KEY (`id_evaluasi_tes`,`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `soal_pg_evaluasi_tes_tbl` */

DROP TABLE IF EXISTS `soal_pg_evaluasi_tes_tbl`;

CREATE TABLE `soal_pg_evaluasi_tes_tbl` (
  `id_evaluasi_tes` varchar(200) NOT NULL,
  `id_soal` varchar(200) NOT NULL,
  `pertanyaan_soal` text DEFAULT NULL,
  `opsi_a` text DEFAULT NULL,
  `opsi_b` text DEFAULT NULL,
  `opsi_c` text DEFAULT NULL,
  `opsi_d` text DEFAULT NULL,
  `opsi_e` text DEFAULT NULL,
  `jawaban_benar` text DEFAULT NULL,
  PRIMARY KEY (`id_evaluasi_tes`,`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `user_tbl` */

DROP TABLE IF EXISTS `user_tbl`;

CREATE TABLE `user_tbl` (
  `user_id` varchar(200) NOT NULL,
  `user_name` varchar(500) DEFAULT NULL,
  `user_pass` varchar(500) DEFAULT NULL,
  `user_level` text DEFAULT NULL,
  `namalengkap_user` text DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
