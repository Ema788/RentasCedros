--
-- Base de datos: `cine2.0`
--

DROP DATABASE IF EXISTS cine2.0;
CREATE DATABASE IF NOT EXISTS cine2.0 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cine2.0;

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE `boleto` (
  `idBoleto` int(6) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `asiento` int(6) NOT NULL,
  `idUsuario` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(6) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `tipomensaje` varchar(50) NOT NULL,
  `mensaje` varchar(50) NOT NULL,
  `idUsuario` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `idPelicula` int(11) NOT NULL,
  `nombrePelicula` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idUsuarioRol` int(6) NOT NULL,
  `estatus_rol` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Activo\r\n0: Inactivo',
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `idSala` int(6) NOT NULL,
  `numAsientos` int(6) NOT NULL,
  `idSucursal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salaproyectapelicula`
--

CREATE TABLE `salaproyectapelicula` (
  `idPelicula` int(6) NOT NULL,
  `idSala` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `idSucursal` int(11) NOT NULL,
  `nombreSucursal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursalvendeboleto`
--

CREATE TABLE `sucursalvendeboleto` (
  `idVenta` int(6) NOT NULL,
  `idBoleto` int(6) NOT NULL,
  `idSucursal` int(6) NOT NULL,
  `promocion` varchar(60) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(6) NOT NULL,
  `estatus_usuario` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: Activo, 0: Inactivo',
  `nombre` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `ApellidoPaterno` varchar(50) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `imagenUsuario` int(100) NOT NULL,
  `idRol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`idBoleto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`idPelicula`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idUsuarioRol`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`idSala`),
  ADD KEY `idSucursal` (`idSucursal`);

--
-- Indices de la tabla `salaproyectapelicula`
--
ALTER TABLE `salaproyectapelicula`
  ADD KEY `idPelicula` (`idPelicula`),
  ADD KEY `idSala` (`idSala`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`idSucursal`);

--
-- Indices de la tabla `sucursalvendeboleto`
--
ALTER TABLE `sucursalvendeboleto`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idBoleto` (`idBoleto`),
  ADD KEY `idSucursal` (`idSucursal`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `idBoleto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idUsuarioRol` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `idSala` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `idSucursal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sucursalvendeboleto`
--
ALTER TABLE `sucursalvendeboleto`
  MODIFY `idVenta` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(6) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD CONSTRAINT `boleto_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `contacto_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `sala_ibfk_1` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salaproyectapelicula`
--
ALTER TABLE `salaproyectapelicula`
  ADD CONSTRAINT `salaproyectapelicula_ibfk_1` FOREIGN KEY (`idPelicula`) REFERENCES `peliculas` (`idPelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `salaproyectapelicula_ibfk_2` FOREIGN KEY (`idSala`) REFERENCES `sala` (`idSala`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursalvendeboleto`
--
ALTER TABLE `sucursalvendeboleto`
  ADD CONSTRAINT `sucursalvendeboleto_ibfk_1` FOREIGN KEY (`idBoleto`) REFERENCES `boleto` (`idBoleto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sucursalvendeboleto_ibfk_2` FOREIGN KEY (`idSucursal`) REFERENCES `sucursal` (`idSucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idUsuarioRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
