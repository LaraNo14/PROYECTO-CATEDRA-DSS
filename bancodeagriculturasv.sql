-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-03-2024 a las 01:59:39
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancodeagriculturasv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

DROP TABLE IF EXISTS `auditoria`;
CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `usuario_realizado` varchar(55) DEFAULT NULL,
  `tipo_accion` enum('inicio_sesion','registro_usuario','consulta','insercion','actualizacion','eliminacion') DEFAULT NULL,
  `tabla_afectada` varchar(55) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `direccion_ip` varchar(45) DEFAULT NULL,
  `cliente` varchar(55) DEFAULT NULL,
  `resultado_accion` enum('exito','error') DEFAULT NULL,
  `detalles` text,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasbancarias`
--

DROP TABLE IF EXISTS `cuentasbancarias`;
CREATE TABLE IF NOT EXISTS `cuentasbancarias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `numero_cuenta` varchar(20) DEFAULT NULL,
  `saldo` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_cuenta` (`numero_cuenta`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

DROP TABLE IF EXISTS `movimientos`;
CREATE TABLE IF NOT EXISTS `movimientos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cuenta_bancaria` int DEFAULT NULL,
  `tipo_movimiento` enum('deposito','retiro','transferencia') DEFAULT NULL,
  `monto` decimal(15,2) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_cuenta_bancaria` (`id_cuenta_bancaria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
CREATE TABLE IF NOT EXISTS `prestamos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `monto` decimal(15,2) DEFAULT NULL,
  `interes` decimal(5,2) DEFAULT NULL,
  `estado` enum('en_espera','aprobado','rechazado') DEFAULT NULL,
  `cuota_mensual` decimal(15,2) DEFAULT NULL,
  `años_pago` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

DROP TABLE IF EXISTS `sucursales`;
CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `gerente_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  KEY `gerente_id` (`gerente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `ubicacion`, `gerente_id`) VALUES
(1, 'Jonathan Bank', 'Cojutepeque', 2020),
(2, 'Ezequiel business ', 'San Salvador', 1100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `nombre_usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(55) DEFAULT NULL,
  `tipo_usuario` enum('cliente','dependiente','cajero','gerente_sucursal','gerente_general') DEFAULT NULL,
  `estado` enum('activo','inactivo') DEFAULT 'activo',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `nombre_usuario` (`nombre_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `nombre_usuario`, `contrasena`, `tipo_usuario`, `estado`) VALUES
(1, 'Ezequiel Campos', 'rolandoezequiel45@gmail.com', 'ezequiel', '1234', 'cliente', 'activo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
