-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-05-2010 a las 10:25:25
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT=0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `stockcontrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de Cargo',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece el Cargo',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre del Cargo',
  `descripcion` text collate utf8_unicode_ci NOT NULL COMMENT 'Descripcion del Cargo',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si el cargo fue eliminado',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `cargo_unique` (`idEmpresa`,`nombre`),
  KEY `cargo_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Cargos de empleados';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la Categoria',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Categoria',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre de la Categoria',
  `descripcion` text collate utf8_unicode_ci NOT NULL COMMENT 'Descripcion de la Categoria',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si la Categoria fue eliminada',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `categoria_unique` (`idEmpresa`,`nombre`),
  KEY `categoria_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Categorias principales de producto';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Cliente',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece el Cliente',
  `numero` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Numero de Cliente',
  `dni` varchar(30) collate utf8_unicode_ci NOT NULL COMMENT 'DNI del Cliente',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre del Cliente',
  `apellido` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Apellido del Cliente',
  `ciudad` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Cuidad del Cliente',
  `direccion` text collate utf8_unicode_ci NOT NULL COMMENT 'Direccion del Cliente',
  `telefono` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Telefono del Cliente',
  `fechaNacimiento` date NOT NULL COMMENT 'Fecha de Nacimiento del Cliente',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si el Cliente fue eliminado',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `cliente_unique` (`idEmpresa`,`numero`),
  KEY `cliente_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Clientes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la Venta',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Venta',
  `idEmpleado` int(10) unsigned NOT NULL COMMENT 'Empleado que realizo la Venta',
  `idCliente` int(10) unsigned NOT NULL COMMENT 'Cliente al que se le realizo la Venta',
  `numero` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Numero de Venta (Numero de Factura)',
  `fecha` date NOT NULL COMMENT 'Fecha de la Venta',
  `idFormaPagoCompra` int(10) unsigned NOT NULL COMMENT 'Forma de pago en que se realizo la Venta',
  `cantidadCuotas` int(10) unsigned NOT NULL COMMENT 'Cantidad de cuotas en la que se realizo la Venta',
  `precioCuota` decimal(10,2) unsigned NOT NULL COMMENT 'Precio por cuotas en que se realizo la Venta',
  `porcentajeIncremento` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de imcremento en que se realizo la Venta',
  `intervaloPagos` int(10) unsigned NOT NULL COMMENT 'Intervalo en dias entre pagos',
  `fechaInicio` date NOT NULL COMMENT 'Fecha de inicio de los pagos',
  `anticipo` decimal(10,2) unsigned NOT NULL COMMENT 'Monto de anticipo',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si la Venta fue eliminada',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `compra_unique` (`idEmpresa`,`numero`),
  KEY `compra_x_empresa` (`idEmpresa`),
  KEY `compra_x_forma_pago_compra` (`idFormaPagoCompra`),
  KEY `compra_x_cliente` (`idCliente`),
  KEY `compra_x_empleado` (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Compras';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_cancelada`
--

CREATE TABLE `compra_cancelada` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la Cancelacion',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Cancelacion',
  `idCompra` int(10) unsigned NOT NULL COMMENT 'Venta cancelada',
  `importeCompra` decimal(10,2) unsigned NOT NULL COMMENT 'Importe de la venta',
  `importeAbonado` decimal(10,2) unsigned NOT NULL COMMENT 'Importe ya abonado',
  `importeDevuelto` decimal(10,2) unsigned NOT NULL COMMENT 'Importe devuelto',
  `porcentajeRetenido` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de retencion sobre el importe de la venta',
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `compra_cancelada_unique` (`idEmpresa`,`idCompra`),
  KEY `compra_cancelada_x_empresa` (`idEmpresa`),
  KEY `compra_cancelada_x_compra` (`idCompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Compras canceladas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_detalle`
--

CREATE TABLE `compra_detalle` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Detalle',
  `idCompra` int(10) unsigned NOT NULL COMMENT 'Venta a la que pertenece el detalle de la venta',
  `idProducto` int(10) unsigned NOT NULL COMMENT 'Producto vendido',
  `cantidad` int(10) unsigned NOT NULL COMMENT 'Cantidad de items vendidos del producto',
  `precioUnitario` decimal(10,2) unsigned NOT NULL COMMENT 'Precio final por unidad de producto',
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `compra_detalle_producto_unique` (`idCompra`,`idProducto`),
  KEY `compra_detalle_x_compra` (`idCompra`),
  KEY `compra_detalle_x_producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Detalles de compra';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corredor`
--

CREATE TABLE `corredor` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `idEmpresa` int(10) unsigned NOT NULL,
  `idProveedor` int(10) unsigned NOT NULL,
  `codigo` varchar(255) collate utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) collate utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) collate utf8_unicode_ci NOT NULL,
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `corredor_unique` (`idEmpresa`,`idProveedor`,`codigo`),
  KEY `corredor_x_empresa` (`idEmpresa`),
  KEY `corredor_x_proveedor` (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Corredores';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Empleado',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece el Empleado',
  `numero` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Numero de Empleado',
  `dni` varchar(15) collate utf8_unicode_ci NOT NULL COMMENT 'DNI del Empleado',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre del Empleado',
  `apellido` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Apellido del Empleado',
  `direccion` text collate utf8_unicode_ci NOT NULL COMMENT 'Direccion del Empleado',
  `telefono` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Telefono del Empleado',
  `idCargo` int(10) unsigned NOT NULL COMMENT 'Cargo del Empleado',
  `idTipoUsuario` int(10) unsigned NOT NULL COMMENT 'Tipo de Usuario que es el Empleado',
  `username` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre de Usuario del Empleado',
  `password` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Contraseña del Empleado',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si el Empleado fue eliminado',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `empleado_unique` (`idEmpresa`,`numero`),
  KEY `empleado_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Empleados';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la Empresa',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre de la Empresa',
  `cuit` varchar(30) collate utf8_unicode_ci NOT NULL COMMENT 'CUIT de la Empresa',
  `direccion` text collate utf8_unicode_ci NOT NULL COMMENT 'Direccion de la Empresa',
  `telefono` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Telefono de la Empresa',
  `email` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Email de la Empresa',
  `counterIdFactura` int(10) unsigned NOT NULL COMMENT 'Contador para el ID de Factura',
  `counterIdFacturaTemporal` int(10) unsigned NOT NULL COMMENT 'Contador para el ID de la Factura Temporal',
  `counterNroFactura` int(10) unsigned NOT NULL COMMENT 'Contador para el Numero de Factura',
  `maxLoginAttempts` int(10) unsigned NOT NULL COMMENT 'Cantiad maxima de intentos de inicio de sesion',
  `porcentajeRetencion` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de retencio por defecto',
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `cuit` (`cuit`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Empresas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago_compra`
--

CREATE TABLE `forma_pago_compra` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de Forma de Pago para la Venta',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Forma de Pago para la Venta',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre de la Forma de Pago para la Venta',
  `descripcion` text collate utf8_unicode_ci NOT NULL COMMENT 'Descripcion de la Forma de Pago para la Venta',
  `cantidadCuotas` int(10) unsigned NOT NULL COMMENT 'Cantidad de Cuotas',
  `porcentajeIncremento` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de Incremento',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si la Forma de Pago para la Venta fue eliminada',
  PRIMARY KEY  (`id`),
  KEY `forma_pago_compra_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Formas de pago para la venta';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forma_pago_venta`
--

CREATE TABLE `forma_pago_venta` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de Forma de Pago para la Venta',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Forma de Pago para la Venta',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre de la Forma de Pago para la Venta',
  `descripcion` text collate utf8_unicode_ci NOT NULL COMMENT 'Descripcion de la Forma de Pago para la Venta',
  `cantidadCuotas` int(10) unsigned NOT NULL COMMENT 'Cantidad de Cuotas',
  `porcentajeIncremento` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de Incremento',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si la Forma de Pago para la Venta fue eliminada',
  PRIMARY KEY  (`id`),
  KEY `forma_pago_venta_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Formas de pago para la venta';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_cliente`
--

CREATE TABLE `pago_cliente` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Pago del Cliente',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece el Pago del Cliente',
  `idVenta` int(10) unsigned NOT NULL COMMENT 'Venta pagada por el cliente',
  `idEmpleado` int(10) unsigned NOT NULL COMMENT 'Empleado que recibio el pago',
  `idCliente` int(10) unsigned NOT NULL COMMENT 'Cliente que realizo el pago',
  `fecha` date NOT NULL COMMENT 'Fecha del pago',
  `cantidad` int(10) unsigned NOT NULL COMMENT 'Cantidad de cuotas pagadas a la vez',
  `monto` decimal(10,2) unsigned NOT NULL COMMENT 'Monto abonado',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si el pago del cliente fue eliminado',
  PRIMARY KEY  (`id`),
  KEY `pago_cliente_x_empresa` (`idEmpresa`),
  KEY `pago_cliente_x_venta` (`idVenta`),
  KEY `pago_cliente_x_empleado` (`idEmpleado`),
  KEY `pago_cliente_x_cliente` (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Pagos realizados por los clientes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_proveedor`
--

CREATE TABLE `pago_proveedor` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Pago del Cliente',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece el Pago del Cliente',
  `idCompra` int(10) unsigned NOT NULL COMMENT 'Venta pagada por el cliente',
  `idEmpleado` int(10) unsigned NOT NULL COMMENT 'Empleado que recibio el pago',
  `idProveedor` int(10) unsigned NOT NULL COMMENT 'Proveedor al que se le realiza el pago',
  `idCorredor` int(10) unsigned NOT NULL COMMENT 'Cliente que realizo el pago',
  `fecha` date NOT NULL COMMENT 'Fecha del pago',
  `cantidad` int(10) unsigned NOT NULL COMMENT 'Cantidad de cuotas pagadas a la vez',
  `monto` decimal(10,2) unsigned NOT NULL COMMENT 'Monto abonado',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si el pago del cliente fue eliminado',
  PRIMARY KEY  (`id`),
  KEY `pago_proveedor_x_empresa` (`idEmpresa`),
  KEY `pago_proveedor_x_empleado` (`idEmpleado`),
  KEY `pago_proveedor_x_compra` (`idCompra`),
  KEY `pago_proveedor_x_corredor` (`idCorredor`),
  KEY `pago_proveedor_x_proveedor` (`idProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Pagos realizados a los proveedores';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Producto',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece el Producto',
  `codigo` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Codigo del Producto',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre del Producto',
  `descripcion` text collate utf8_unicode_ci NOT NULL COMMENT 'Descripcion del Producto',
  `precioLista` decimal(10,2) unsigned NOT NULL COMMENT 'Precio de lista del Producto',
  `ganancia` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de ganancia sobre el precio de lista del Producto',
  `impuesto` decimal(10,2) unsigned NOT NULL COMMENT 'Impuesto sobre el precio de lista del Producto',
  `idSubcategoria` int(10) unsigned NOT NULL COMMENT 'Categoria/Subcategoria del Producto',
  `stockActual` int(10) unsigned NOT NULL COMMENT 'Stock actual del Producto',
  `stockMinimo` int(10) unsigned NOT NULL COMMENT 'Stock minimo del Producto',
  `stockMaximo` int(10) unsigned NOT NULL COMMENT 'Stock maximo del Producto',
  `imagen` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Imagen del Producto',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si el Producto fue eliminado',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `producto_unique` (`id`,`idEmpresa`),
  KEY `producto_x_empresa` (`idEmpresa`),
  KEY `producto_x_subcategoria` (`idSubcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Productos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provee`
--

CREATE TABLE `provee` (
  `idProveedor` int(10) unsigned NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`idProveedor`,`idProducto`),
  KEY `idProducto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `idEmpresa` int(10) unsigned NOT NULL,
  `cuit` varchar(30) collate utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL,
  `descripcion` text collate utf8_unicode_ci NOT NULL,
  `cuidad` varchar(255) collate utf8_unicode_ci NOT NULL,
  `direccion` text collate utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) collate utf8_unicode_ci NOT NULL,
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `proveedor_unique` (`idEmpresa`,`cuit`),
  KEY `proveedor_x_empresa` (`idEmpresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Proveedores';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la subcategoria',
  `idCategoria` int(10) unsigned NOT NULL COMMENT 'Categoria a la que pertenece la subcategoria',
  `nombre` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Nombre de la Categoria',
  `descripcion` text collate utf8_unicode_ci NOT NULL COMMENT 'Descripcion de la Categoria',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si la subcategoria fue eliminada',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `subcategoria_unique` (`idCategoria`,`nombre`),
  KEY `subcategoria_x_categoria` (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Subcategorias de productos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la Venta',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Venta',
  `idEmpleado` int(10) unsigned NOT NULL COMMENT 'Empleado que realizo la Venta',
  `idCliente` int(10) unsigned NOT NULL COMMENT 'Cliente al que se le realizo la Venta',
  `numero` varchar(255) collate utf8_unicode_ci NOT NULL COMMENT 'Numero de Venta (Numero de Factura)',
  `fecha` date NOT NULL COMMENT 'Fecha de la Venta',
  `idFormaPagoVenta` int(10) unsigned NOT NULL COMMENT 'Forma de pago en que se realizo la Venta',
  `cantidadCuotas` int(10) unsigned NOT NULL COMMENT 'Cantidad de cuotas en la que se realizo la Venta',
  `precioCuota` decimal(10,2) unsigned NOT NULL COMMENT 'Precio por cuotas en que se realizo la Venta',
  `porcentajeIncremento` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de imcremento en que se realizo la Venta',
  `intervaloPagos` int(10) unsigned NOT NULL COMMENT 'Intervalo en dias entre pagos',
  `fechaInicio` date NOT NULL COMMENT 'Fecha de inicio de los pagos',
  `anticipo` decimal(10,2) unsigned NOT NULL COMMENT 'Monto de anticipo',
  `eliminado` tinyint(1) unsigned NOT NULL default '0' COMMENT 'Indica si la Venta fue eliminada',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `venta_unique` (`idEmpresa`,`numero`),
  KEY `venta_x_empresa` (`idEmpresa`),
  KEY `venta_x_empleado` (`idEmpleado`),
  KEY `venta_x_cliente` (`idCliente`),
  KEY `venta_x_forma_pago_venta` (`idFormaPagoVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Ventas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_cancelada`
--

CREATE TABLE `venta_cancelada` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID de la Cancelacion',
  `idEmpresa` int(10) unsigned NOT NULL COMMENT 'Empresa a la que pertenece la Cancelacion',
  `idVenta` int(10) unsigned NOT NULL COMMENT 'Venta cancelada',
  `importeVenta` decimal(10,2) unsigned NOT NULL COMMENT 'Importe de la venta',
  `importeAbonado` decimal(10,2) unsigned NOT NULL COMMENT 'Importe ya abonado',
  `importeDevuelto` decimal(10,2) unsigned NOT NULL COMMENT 'Importe devuelto',
  `porcentajeRetenido` decimal(10,2) unsigned NOT NULL COMMENT 'Porcentaje de retencion sobre el importe de la venta',
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `venta_cancelada_unique` (`idEmpresa`,`idVenta`),
  KEY `venta_cancelada_x_empresa` (`idEmpresa`),
  KEY `venta_cancelada_x_venta` (`idVenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Ventas canceladas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id` int(10) unsigned NOT NULL auto_increment COMMENT 'ID del Detalle',
  `idVenta` int(10) unsigned NOT NULL COMMENT 'Venta a la que pertenece el detalle de la venta',
  `idProducto` int(10) unsigned NOT NULL COMMENT 'Producto vendido',
  `cantidad` int(10) unsigned NOT NULL COMMENT 'Cantidad de items vendidos del producto',
  `precioUnitario` decimal(10,2) unsigned NOT NULL COMMENT 'Precio final por unidad de producto',
  `eliminado` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `venta_detalle_producto_unique` (`idVenta`,`idProducto`),
  KEY `venta_detalle_x_venta` (`idVenta`),
  KEY `venta_detalle_x_producto` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Detalles de venta';

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `cargo_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`id`),
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`idFormaPagoCompra`) REFERENCES `forma_pago_compra` (`id`);

--
-- Filtros para la tabla `compra_cancelada`
--
ALTER TABLE `compra_cancelada`
  ADD CONSTRAINT `compra_cancelada_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `compra_cancelada_ibfk_2` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`);

--
-- Filtros para la tabla `compra_detalle`
--
ALTER TABLE `compra_detalle`
  ADD CONSTRAINT `compra_detalle_ibfk_1` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `compra_detalle_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `corredor`
--
ALTER TABLE `corredor`
  ADD CONSTRAINT `corredor_ibfk_5` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `corredor_ibfk_6` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`id`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `forma_pago_compra`
--
ALTER TABLE `forma_pago_compra`
  ADD CONSTRAINT `forma_pago_compra_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `forma_pago_venta`
--
ALTER TABLE `forma_pago_venta`
  ADD CONSTRAINT `forma_pago_venta_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `pago_cliente`
--
ALTER TABLE `pago_cliente`
  ADD CONSTRAINT `pago_cliente_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `pago_cliente_ibfk_2` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `pago_cliente_ibfk_3` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`id`),
  ADD CONSTRAINT `pago_cliente_ibfk_4` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `pago_proveedor`
--
ALTER TABLE `pago_proveedor`
  ADD CONSTRAINT `pago_proveedor_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `pago_proveedor_ibfk_2` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `pago_proveedor_ibfk_3` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`id`),
  ADD CONSTRAINT `pago_proveedor_ibfk_4` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`id`),
  ADD CONSTRAINT `pago_proveedor_ibfk_5` FOREIGN KEY (`idCorredor`) REFERENCES `corredor` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`idSubcategoria`) REFERENCES `subcategoria` (`id`);

--
-- Filtros para la tabla `provee`
--
ALTER TABLE `provee`
  ADD CONSTRAINT `provee_ibfk_1` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`id`),
  ADD CONSTRAINT `provee_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_6` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `venta_ibfk_7` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`id`),
  ADD CONSTRAINT `venta_ibfk_8` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `venta_ibfk_9` FOREIGN KEY (`idFormaPagoVenta`) REFERENCES `forma_pago_venta` (`id`);

--
-- Filtros para la tabla `venta_cancelada`
--
ALTER TABLE `venta_cancelada`
  ADD CONSTRAINT `venta_cancelada_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `venta_cancelada_ibfk_2` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`id`);

--
-- Filtros para la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `venta_detalle_ibfk_3` FOREIGN KEY (`idVenta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `venta_detalle_ibfk_4` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`id`);

COMMIT;
