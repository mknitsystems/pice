/*
SQLyog Ultimate v9.63 
MySQL - 5.6.20 : Database - pice
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pice` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pice`;

/*Table structure for table `alumno_grupo` */

DROP TABLE IF EXISTS `alumno_grupo`;

CREATE TABLE `alumno_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_grupo` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `alumno_grupo` */

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `orden` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `grupo` */

insert  into `grupo`(`id_grupo`,`nombre`,`avatar`,`orden`,`estatus`) values (1,'grupo','grupo','grupo','1'),(2,'grupo1','grupo1','grupo1','1'),(3,'grupo2','grupo2','grupo2','1'),(4,'grupo3','grupo3','grupo3','1');

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_maestro` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(256) COLLATE utf8_bin NOT NULL,
  `avatar` varchar(256) COLLATE utf8_bin NOT NULL,
  `orden` varchar(256) COLLATE utf8_bin NOT NULL,
  `estatus` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `maestro_materia` */

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `avatar` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `orden` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `estatus` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `materia` */

insert  into `materia`(`id`,`nombre`,`avatar`,`orden`,`estatus`) values (1,'materia1','materia1','materia1','1'),(2,'materia2','materia2','materia2','1'),(3,'materia3','materia3','materia3','1'),(4,'materia4','materia4','materia4','1');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ApellidoPaterno` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ApellidoMaterno` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `telefono` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Calle` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `NumeroExterior` int(6) NOT NULL,
  `NumeroInterior` int(6) NOT NULL,
  `colonia` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `municipio` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `estado` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cp` int(6) NOT NULL,
  `correo` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `usuario` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nivel` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `estatus` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`colonia`,`municipio`,`estado`,`cp`,`correo`,`usuario`,`password`,`nivel`,`estatus`) values (1,'miguel','garcia','miranda','1234567890','dfghj',10,21,'fbdsfb','sdfs','sdf',34565,'sdf@sd.com','usr1','123','1','1'),(2,'david','garcia','miranda','1234567890','sdf',12,32,'fbdv','dsf','sdf',76543,'sdf@sa.com','usr2','123','2','1'),(3,'juan','garcia','miranda','1234567890','sdfghj',10,67,'asdasdgsadg','asdsadsads','asdsadsads',12334,'usuario@usuario.com','usr3','123','2','1'),(4,'luis','garcia','miranda','1234567890','sdfghj',10,67,'asdasdgsadg','asdsadsads','asdsadsads',12334,'usuario@usuario.com','usr4','123','2','1'),(5,'gerardo','garcia','miranda','1234567890','sdfghj',10,67,'asdasdgsadg','asdsadsads','asdsadsads',12334,'usuario@usuario.com','usr5','123','3','1'),(6,'fer','garcia','miranda','1234567890','sdfghj',10,67,'asdasdgsadg','asdsadsads','asdsadsads',12334,'usuario@usuario.com','usr6','123','3','1'),(7,'wendy','garcia','miranda','1234567890','sdfghj',10,67,'asdasdgsadg','asdsadsads','asdsadsads',12334,'usuario@usuario.com','usr7','123','3','1'),(8,'sd','df','sdf','','',0,0,'','','',0,'','','','1','1'),(9,'sas','df','sdf','','',0,0,'','','',0,'','','','1','1');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
