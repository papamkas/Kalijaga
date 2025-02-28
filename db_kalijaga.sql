-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_kalijaga
CREATE DATABASE IF NOT EXISTS `db_kalijaga` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_kalijaga`;

-- Dumping structure for table db_kalijaga.detail_pemesanan
CREATE TABLE IF NOT EXISTS `detail_pemesanan` (
  `id_detail_pemesanan` varchar(50) NOT NULL,
  `id_pemesanan` varchar(50) DEFAULT NULL,
  `id_meja` varchar(50) DEFAULT NULL,
  `id_makanan` varchar(50) DEFAULT NULL,
  `id_minuman` varchar(50) DEFAULT NULL,
  `qty` int NOT NULL,
  `total_harga` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_detail_pemesanan`),
  KEY `id_pemesanan` (`id_pemesanan`),
  KEY `id_meja` (`id_meja`),
  KEY `id_makanan` (`id_makanan`),
  KEY `id_minuman` (`id_minuman`),
  CONSTRAINT `detail_pemesanan_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`),
  CONSTRAINT `detail_pemesanan_ibfk_2` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id_meja`),
  CONSTRAINT `detail_pemesanan_ibfk_3` FOREIGN KEY (`id_makanan`) REFERENCES `menu` (`id`),
  CONSTRAINT `detail_pemesanan_ibfk_4` FOREIGN KEY (`id_minuman`) REFERENCES `menu` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kalijaga.detail_pemesanan: ~0 rows (approximately)

-- Dumping structure for table db_kalijaga.kategori_menu
CREATE TABLE IF NOT EXISTS `kategori_menu` (
  `id_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `jenis` enum('makanan','minuman') DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kalijaga.kategori_menu: ~0 rows (approximately)

-- Dumping structure for table db_kalijaga.meja
CREATE TABLE IF NOT EXISTS `meja` (
  `id_meja` varchar(50) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `status` enum('avail','closed') DEFAULT 'avail',
  PRIMARY KEY (`id_meja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kalijaga.meja: ~0 rows (approximately)

-- Dumping structure for table db_kalijaga.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` varchar(50) NOT NULL,
  `nama_menu` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `id_kategori` varchar(50) DEFAULT NULL,
  `stock` int NOT NULL,
  `status` enum('Available','Habis') DEFAULT 'Available',
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_menu` (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kalijaga.menu: ~0 rows (approximately)

-- Dumping structure for table db_kalijaga.pemesanan
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` varchar(50) NOT NULL,
  `id_meja` varchar(50) DEFAULT NULL,
  `nama_pemesan` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status` enum('pending','dikerjakan','selesai') DEFAULT 'pending',
  `total_harga` varchar(50) DEFAULT NULL,
  `waktu_pemesanan` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `metode_pembayaran` enum('cash','cashless') DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`),
  KEY `id_meja` (`id_meja`),
  CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id_meja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kalijaga.pemesanan: ~0 rows (approximately)

-- Dumping structure for table db_kalijaga.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('kasir','admin') DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_kalijaga.user: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
