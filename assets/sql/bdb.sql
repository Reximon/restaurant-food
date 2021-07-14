CREATE DATABASE IF NOT EXISTS restaurant;

USE restaurant;
CREATE TABLE comidas (
    id          int(10) auto_increment not null,
    plato       varchar(100) not null,
    condimentos varchar(50),
    precio      int(10),
    stock       int(255) not null,
    PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE usuarios (
    id          int(10) auto_increment not null,
    nombre      varchar(100) not null,
    apellidos   varchar(150),    
    email       varchar(150) not null,
    password    varchar(100) not null,
    fecha      date,
    PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE encargos (
    id          int(10) auto_increment not null,
    usuario_id  int(10) not null,
    comida_id   int(10) not null,    
    fecha       date,
    PRIMARY KEY(id),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (comida_id) REFERENCES comidas(id)
)ENGINE=InnoDB;

CREATE TABLE pedidos (
    id          int(10) auto_increment not null,
    personas    int not null,
    horas       time,
    fecha       date not null,
    PRIMARY KEY(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- RELLENAR DATOS

-- Comida

INSERT INTO comidas VALUES(null, 'Hélices con Tomate', 'Tomate', 15, 100);
INSERT INTO comidas VALUES(null, 'Sopa de Guisantes y Ajo', 'Guisantes y Ajo', '10', 100);
INSERT INTO comidas VALUES(null, 'Ensalada Especial', 'Pollo', 13, 100);
INSERT INTO comidas VALUES(null, 'Dados de Pasta con Ensalada', 'Ensalada', 8, 300);
INSERT INTO comidas VALUES(null, 'Sopa de Apio', 'Apio', 10, 50);
INSERT INTO comidas VALUES(null, 'Ensalada César', 'Pollo', 13, 50);

-- Usuario

INSERT INTO usuarios VALUES(null, 'Crisitan', 'Cornielle', 'adm', 'cristian@cristian.com',CURDATE());

