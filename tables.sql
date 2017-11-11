create database lea;
CREATE TABLE `Cervezas` (
  `IdTipo` int (20) Not null,
  `Nombre` varchar(30) NOT NULL unique,
  `Descripcion` varchar(30) NOT NULL,
  `PrecioXLitro` float(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `cervezas`
  ADD PRIMARY KEY (`IdTipo`);

ALTER TABLE `cervezas`
  MODIFY `IdTipo` int(20) NOT NULL AUTO_INCREMENT;

CREATE TABLE `Envases` (
  `IdTipo` int (20) Not null,
  `Nombre` varchar(30) NOT NULL unique,
  `Capacidad` float(12) NOT NULL,
  `Coeficiente` float(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `Envases`
  ADD PRIMARY KEY (`IdTipo`);
  
  ALTER TABLE `Envases`
  MODIFY `IdTipo` int(20) NOT NULL AUTO_INCREMENT;

CREATE TABLE `Usuarios` (
  `IdUser` int (20) Not null,
  `UserNombre` varchar(30) NOT NULL unique,
  `Email` varchar(60) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `Rol` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  
  ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUser`);
  
  ALTER TABLE `usuarios`
  MODIFY `IdUser` int(20) NOT NULL AUTO_INCREMENT;

  CREATE TABLE `Sucursales` (
  `IdSucursal` int (20) Not null,
  `Nombre` varchar(30) NOT NULL unique,
  `Descripcion` varchar(60) NOT NULL,
  `Ubicacion` varchar(30) NOT NULL,
  `Foto` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

  ALTER TABLE `Sucursales`
  ADD PRIMARY KEY (`IdSucursal`);
  
  ALTER TABLE `Sucursales`
  MODIFY `IdSucursal` int(20) NOT NULL AUTO_INCREMENT;

INSERT INTO `Usuarios` (`UserNombre`, `Email`,`Pass`,`Rol`) VALUES
('Laura','lausannazzar0@gmail.com','123', 'admin');

INSERT INTO `Usuarios` (`UserNombre`, `Email`,`Pass`,`Rol`) VALUES
('Leandro','leandrojesusljdmdq@hotmail.com','123456', 'admin');

INSERT INTO `Usuarios` (`UserNombre`, `Email`,`Pass`,`Rol`) VALUES
('Fulano','fulano@gmail.com','123', 'usuario');