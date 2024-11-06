CREATE TABLE Products (
    id int NOT NULL AUTO_INCREMENT,
    Nombre varchar(255) NOT NULL,
    Precio decimal,
    Stock int,
    PRIMARY KEY (id)
);


INSERT INTO `productos`(`Nombre`, `Precio`, `Stock`) VALUES ('Celular',350,11);
INSERT INTO `productos`(`Nombre`, `Precio`, `Stock`) VALUES ('Mouse',260,11);
INSERT INTO `productos`(`Nombre`, `Precio`, `Stock`) VALUES ('Teclado',550,11);
INSERT INTO `productos`(`Nombre`, `Precio`, `Stock`) VALUES ('Monitor',2500,11)