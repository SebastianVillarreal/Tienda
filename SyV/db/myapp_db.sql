/*
 Navicat Premium Data Transfer

 Source Server         : MYSQLLOCAL
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : myapp_db

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 15/05/2021 16:08:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for acceso_modulos
-- ----------------------------
DROP TABLE IF EXISTS `acceso_modulos`;
CREATE TABLE `acceso_modulos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(255) NULL DEFAULT NULL,
  `id_usuario` int(255) NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `hora` time(6) NULL DEFAULT NULL,
  `activo` int(255) NULL DEFAULT NULL,
  `usuario` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 86 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of acceso_modulos
-- ----------------------------
INSERT INTO `acceso_modulos` VALUES (1, 1, 1, '2021-05-15', '15:42:53.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (2, 1, 1, '2021-05-15', '15:45:07.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (3, 1, 1, '2021-05-15', '15:49:29.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (4, 1, 1, '2021-05-15', '15:49:44.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (5, 1, 1, '2021-05-15', '15:50:00.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (6, 2, 1, '2021-05-15', '15:50:09.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (7, 2, 1, '2021-05-15', '15:50:10.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (8, 2, 1, '2021-05-15', '15:50:17.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (9, 2, 1, '2021-05-15', '15:50:21.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (10, 2, 1, '2021-05-15', '15:50:21.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (11, 2, 1, '2021-05-15', '15:50:22.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (12, 2, 1, '2021-05-15', '15:50:26.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (13, 2, 1, '2021-05-15', '15:50:26.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (14, 2, 1, '2021-05-15', '15:50:55.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (15, 2, 1, '2021-05-15', '15:50:55.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (16, 1, 1, '2021-05-15', '15:50:57.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (17, 1, 1, '2021-05-15', '15:54:35.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (18, 2, 1, '2021-05-15', '15:54:42.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (19, 2, 1, '2021-05-15', '15:54:42.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (20, 1, 1, '2021-05-15', '15:54:44.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (21, 3, 1, '2021-05-15', '15:54:44.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (22, 3, 1, '2021-05-15', '15:54:45.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (23, 3, 1, '2021-05-15', '15:55:25.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (24, 3, 1, '2021-05-15', '15:55:32.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (25, 3, 1, '2021-05-15', '15:55:32.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (26, 3, 1, '2021-05-15', '15:55:52.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (27, 3, 1, '2021-05-15', '15:55:54.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (28, 3, 1, '2021-05-15', '15:55:54.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (29, 3, 1, '2021-05-15', '15:56:05.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (30, 3, 1, '2021-05-15', '15:56:08.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (31, 3, 1, '2021-05-15', '15:56:08.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (32, 3, 1, '2021-05-15', '15:56:25.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (33, 3, 1, '2021-05-15', '15:56:29.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (34, 3, 1, '2021-05-15', '15:56:29.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (35, 1, 1, '2021-05-15', '15:56:38.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (36, 8, 1, '2021-05-15', '15:56:43.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (37, 8, 1, '2021-05-15', '15:56:43.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (38, 1, 1, '2021-05-15', '15:56:57.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (39, 6, 1, '2021-05-15', '15:56:58.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (40, 6, 1, '2021-05-15', '15:56:59.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (41, 1, 1, '2021-05-15', '15:57:03.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (42, 7, 1, '2021-05-15', '15:57:04.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (43, 7, 1, '2021-05-15', '15:57:04.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (44, 7, 1, '2021-05-15', '15:57:09.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (45, 7, 1, '2021-05-15', '15:57:09.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (46, 7, 1, '2021-05-15', '15:57:11.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (47, 7, 1, '2021-05-15', '15:57:11.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (48, 7, 1, '2021-05-15', '15:57:12.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (49, 7, 1, '2021-05-15', '15:57:12.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (50, 7, 1, '2021-05-15', '15:57:14.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (51, 7, 1, '2021-05-15', '15:57:14.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (52, 1, 1, '2021-05-15', '15:57:15.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (53, 7, 1, '2021-05-15', '15:57:17.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (54, 7, 1, '2021-05-15', '15:57:17.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (55, 1, 1, '2021-05-15', '15:57:18.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (56, 5, 1, '2021-05-15', '15:57:19.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (57, 5, 1, '2021-05-15', '15:57:19.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (58, 1, 1, '2021-05-15', '15:57:23.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (59, 6, 1, '2021-05-15', '15:57:24.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (60, 6, 1, '2021-05-15', '15:57:24.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (61, 1, 1, '2021-05-15', '15:57:29.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (62, 6, 1, '2021-05-15', '15:57:54.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (63, 6, 1, '2021-05-15', '15:57:54.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (64, 6, 1, '2021-05-15', '15:57:58.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (65, 6, 1, '2021-05-15', '15:58:03.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (66, 6, 1, '2021-05-15', '15:58:03.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (67, 1, 1, '2021-05-15', '15:58:11.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (68, 1, 1, '2021-05-15', '16:00:33.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (69, 1, 1, '2021-05-15', '16:02:00.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (70, 1, 1, '2021-05-15', '16:03:02.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (71, 1, 1, '2021-05-15', '16:03:59.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (72, 1, 1, '2021-05-15', '16:04:21.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (73, 1, 1, '2021-05-15', '16:04:23.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (74, 1, 1, '2021-05-15', '16:04:24.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (75, 1, 1, '2021-05-15', '16:04:49.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (76, 1, 1, '2021-05-15', '16:05:05.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (77, 1, 1, '2021-05-15', '16:06:00.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (78, 1, 1, '2021-05-15', '16:06:15.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (79, 1, 1, '2021-05-15', '16:06:41.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (80, 1, 1, '2021-05-15', '16:06:47.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (81, 1, 1, '2021-05-15', '16:07:50.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (82, 1, 1, '2021-05-15', '16:07:57.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (83, 2, 1, '2021-05-15', '16:07:58.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (84, 2, 1, '2021-05-15', '16:07:58.000000', 1, 1);
INSERT INTO `acceso_modulos` VALUES (85, 1, 1, '2021-05-15', '16:08:00.000000', 1, 1);

-- ----------------------------
-- Table structure for categorias_modulos
-- ----------------------------
DROP TABLE IF EXISTS `categorias_modulos`;
CREATE TABLE `categorias_modulos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(0) NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categorias_modulos
-- ----------------------------
INSERT INTO `categorias_modulos` VALUES (1, 'Administración y Seguridad', 'Agrupa los módulos de seguridad y permisos del sistema.', '2021-05-15', '15:50:26', 1, 1);

-- ----------------------------
-- Table structure for detalle_perfil
-- ----------------------------
DROP TABLE IF EXISTS `detalle_perfil`;
CREATE TABLE `detalle_perfil`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil` int(255) NULL DEFAULT NULL,
  `id_modulo` int(255) NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `hora` time(6) NULL DEFAULT NULL,
  `activo` int(255) NULL DEFAULT NULL,
  `usuario` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle_perfil
-- ----------------------------
INSERT INTO `detalle_perfil` VALUES (1, 1, 1, '2019-12-07', '12:00:00.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (2, 1, 2, '2019-12-07', '12:00:00.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (3, 1, 3, '2019-12-07', '12:00:00.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (4, 1, 4, '2019-12-07', '12:00:00.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (5, 1, 5, '2021-05-15', '15:55:32.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (6, 1, 6, '2021-05-15', '15:55:54.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (7, 1, 7, '2021-05-15', '15:56:08.000000', 1, 1);
INSERT INTO `detalle_perfil` VALUES (8, 1, 8, '2021-05-15', '15:56:29.000000', 1, 1);

-- ----------------------------
-- Table structure for detalle_usuario
-- ----------------------------
DROP TABLE IF EXISTS `detalle_usuario`;
CREATE TABLE `detalle_usuario`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `solo_sucursal` int(11) NULL DEFAULT 1,
  `registros_propios` int(11) NULL DEFAULT 1,
  `solo_lectura` int(11) NULL DEFAULT 1,
  `fecha` date NOT NULL,
  `hora` time(0) NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detalle_usuario
-- ----------------------------
INSERT INTO `detalle_usuario` VALUES (10, 1, 1, 0, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (11, 1, 2, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (12, 1, 3, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (13, 1, 4, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (14, 1, 5, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (15, 1, 6, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (16, 1, 7, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);
INSERT INTO `detalle_usuario` VALUES (17, 1, 8, 1, 1, 1, 1, '2021-05-15', '15:58:03', 1, 1);

-- ----------------------------
-- Table structure for modulos
-- ----------------------------
DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre_carpeta` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `panel_control` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `icono` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tema` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(0) NOT NULL,
  `activo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of modulos
-- ----------------------------
INSERT INTO `modulos` VALUES (1, 'Panel de Control', 'mPanelControl', 'Utilizada como pagina de inicio, es el acceso a todos los demás modulos permitidos para el usuario logueado', 0, 0, '', '', '2021-05-15', '00:00:00', 1, 1);
INSERT INTO `modulos` VALUES (2, 'Categoría Módulos', 'mCategoriaModulos', 'Permite registrar las categorias que almacenaran los módulos.', 1, 1, 'ion ion-hammer', '', '2021-05-15', '00:00:00', 1, 1);
INSERT INTO `modulos` VALUES (3, 'Módulos', 'mModulos', 'Permite agregar modulos al sistema', 1, 1, 'ion ion-hammer', '', '2021-05-15', '00:00:00', 1, 1);
INSERT INTO `modulos` VALUES (4, 'Perfiles', 'mPerfiles', 'Permite agregar perfiles al sistema', 1, 1, ' ion ion-person', '', '2021-05-15', '00:00:00', 1, 1);
INSERT INTO `modulos` VALUES (5, 'Detalle Perfil', 'mDetallePerfil', 'Permite administrar los permisos por perfil', 1, 1, ' ion ion-person', '', '2021-05-15', '15:55:32', 1, 1);
INSERT INTO `modulos` VALUES (6, 'Personal', 'mPersonal', 'Permite agregar los usuarios que podran usar el sistema', 1, 1, ' ion ion-person-add', '', '2021-05-15', '15:55:54', 1, 1);
INSERT INTO `modulos` VALUES (7, 'Permisos Por Usuario', 'mPermisosUsuario', 'Permite administrar los permisos por usuario', 1, 1, ' ion ion-person', '', '2021-05-15', '15:56:08', 1, 1);
INSERT INTO `modulos` VALUES (8, 'Mis Datos', 'mMisDatos', 'Permite modificar los datos del usuario', 0, 1, ' ion ion-person', '', '2021-05-15', '15:56:29', 1, 1);

-- ----------------------------
-- Table structure for perfiles
-- ----------------------------
DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE `perfiles`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `activo` int(255) NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `hora` time(6) NULL DEFAULT NULL,
  `id_usuario` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of perfiles
-- ----------------------------
INSERT INTO `perfiles` VALUES (1, 'Administrador', 1, '2021-05-15', '14:30:54.000000', 1);

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ap_paterno` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ap_materno` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `correo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `domicilio` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `activo` int(255) NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `hora` time(6) NULL DEFAULT NULL,
  `id_usuario` int(255) NULL DEFAULT NULL,
  `telefono` varchar(0) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES (1, 'Kevin Alexis', 'Uriegas', 'Lopez', 'kevin@correo.com', 'Linares', 1, '2021-05-15', '15:58:03.000000', 1, '');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_persona` int(255) NULL DEFAULT NULL,
  `usuario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_perfil` int(255) NULL DEFAULT NULL,
  `activo` int(255) NULL DEFAULT NULL,
  `fecha` date NULL DEFAULT NULL,
  `hora` time(6) NULL DEFAULT NULL,
  `id_usuario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 1, 'admin', '25f9e794323b453885f5181f1b624d0b', 1, 1, '2021-05-15', '14:30:33.000000', '1');

SET FOREIGN_KEY_CHECKS = 1;
