/*
SQLyog Enterprise - MySQL GUI v6.15
MySQL - 5.5.5-10.0.17-MariaDB : Database - escuela
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `escuela`;

USE `escuela`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `anio_periodo_fiscal` */

DROP TABLE IF EXISTS `anio_periodo_fiscal`;

CREATE TABLE `anio_periodo_fiscal` (
  `anio_fiscal` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `periodo_fiscal` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`anio_fiscal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `calendario` */

DROP TABLE IF EXISTS `calendario`;

CREATE TABLE `calendario` (
  `id_cal` int(20) NOT NULL AUTO_INCREMENT,
  `concepto_cal` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'FERIADOS | DIAS LIBRES',
  `fec_cal` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_grado` int(20) NOT NULL,
  `id_seccion` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_cal`,`id_grado`),
  UNIQUE KEY `id_cal` (`id_cal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `calificaciones` */

DROP TABLE IF EXISTS `calificaciones`;

CREATE TABLE `calificaciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_eval` int(10) DEFAULT NULL,
  `cedula_est` int(20) DEFAULT NULL,
  `calificacion` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `porcentaje` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `descripciones` */

DROP TABLE IF EXISTS `descripciones`;

CREATE TABLE `descripciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_desc` int(20) DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abreviacion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grupo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `estudiantes` */

DROP TABLE IF EXISTS `estudiantes`;

CREATE TABLE `estudiantes` (
  `cedula_est` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `matricula_est` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre1_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre2_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido2_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacionalidad_est` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'V',
  `direccion_est` text COLLATE utf8_spanish_ci,
  `fec_nac_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `peso_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estatura_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `camisa_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pantalon_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zapato_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_grado` int(20) DEFAULT NULL,
  `id_seccion` int(20) DEFAULT NULL,
  `fec_insc_est` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto_est` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula_rep` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_rep` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_rep` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo_rep` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacionalidad_rep` varchar(1) COLLATE utf8_spanish_ci DEFAULT 'V',
  `telef_rep` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telef_emerg_rep` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto_rep` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cedula_est`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `grados_secciones` */

DROP TABLE IF EXISTS `grados_secciones`;

CREATE TABLE `grados_secciones` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_grado` int(20) DEFAULT NULL,
  `desc_grado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abrev_grado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_seccion` int(20) DEFAULT NULL,
  `desc_seccion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mencion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `horarios` */

DROP TABLE IF EXISTS `horarios`;

CREATE TABLE `horarios` (
  `id_hor` int(20) NOT NULL AUTO_INCREMENT,
  `id_mat` int(20) DEFAULT NULL,
  `dia` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id_hor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `inasistencias` */

DROP TABLE IF EXISTS `inasistencias`;

CREATE TABLE `inasistencias` (
  `cedula_est` int(20) DEFAULT NULL,
  `justificado` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `motivo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_asig` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `institucion` */

DROP TABLE IF EXISTS `institucion`;

CREATE TABLE `institucion` (
  `codigo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rif` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `materias` */

DROP TABLE IF EXISTS `materias`;

CREATE TABLE `materias` (
  `id_mat` int(20) NOT NULL AUTO_INCREMENT,
  `desc_mat` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_grado` int(20) DEFAULT NULL,
  `id_seccion` int(20) DEFAULT NULL,
  `nivel` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cedula_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora_ini` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  PRIMARY KEY (`id_mat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `mensajes` */

DROP TABLE IF EXISTS `mensajes`;

CREATE TABLE `mensajes` (
  `id_msj` int(250) NOT NULL AUTO_INCREMENT,
  `id_emisor` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_prof` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_rep` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_adm` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dateTime` datetime DEFAULT NULL,
  `text` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id_msj`,`id_emisor`),
  UNIQUE KEY `id_msj` (`id_msj`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `permisologia` */

DROP TABLE IF EXISTS `permisologia`;

CREATE TABLE `permisologia` (
  `niv_acs_usr` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `bol_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `bol_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `bol_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `bol_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `bol_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `cal_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `cal_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `cal_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `cal_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `cal_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `est_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `est_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `est_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `est_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `est_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ina_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ina_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ina_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ina_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ina_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ret_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ret_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ret_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ret_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `ret_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `men_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `hor_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `hor_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `hor_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `hor_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `hor_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `pla_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `pla_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `pla_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `pla_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `pla_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `per_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `per_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `per_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `per_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `per_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `gra_agr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `gra_edi` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `gra_eli` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `gra_ind` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `gra_ver` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  PRIMARY KEY (`niv_acs_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `planificacion` */

DROP TABLE IF EXISTS `planificacion`;

CREATE TABLE `planificacion` (
  `id_eval` int(20) NOT NULL AUTO_INCREMENT,
  `objetivo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `desc_eval` text COLLATE utf8_spanish_ci,
  `ponderacion` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `porcentaje` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_mat` int(20) DEFAULT NULL,
  `id_lapso` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_eval`),
  UNIQUE KEY `id_eval` (`id_eval`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `profesores` */

DROP TABLE IF EXISTS `profesores`;

CREATE TABLE `profesores` (
  `cedula_prof` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre1_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre2_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido1_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido2_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telef_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fec_nac_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nacionalidad_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto_prof` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cedula_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `retardos` */

DROP TABLE IF EXISTS `retardos`;

CREATE TABLE `retardos` (
  `cedula_est` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fec_ret` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `horar_ret` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_asig` int(20) NOT NULL,
  PRIMARY KEY (`cedula_est`,`id_asig`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `codg_usr` int(11) NOT NULL DEFAULT '0',
  `apel_usr` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nomb_usr` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fec_ins_usr` date NOT NULL DEFAULT '0000-00-00',
  `codg_grp` int(11) NOT NULL DEFAULT '0',
  `login_usr` varchar(20) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `pass_usr` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email_usr` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ulti_acs_usr` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `activo_usr` varchar(2) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'NO',
  `niv_acs_usr` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`codg_usr`),
  KEY `FOREIGN_1` (`codg_grp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
