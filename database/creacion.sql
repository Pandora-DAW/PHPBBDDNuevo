

create database seneca
character set latin1
collate latin1_spanish_ci;

use seneca;

drop user if exists'seneca@%';

-- crea un usuario llamado seneca que puede conectar desde cualquier direccion IP
create user 'seneca'@'%' identified by '1234';

-- Damos permiso al usuario para realizar cualquier sentencia en la base de datos seneca
grant all PRIVILEGES on seneca.* to 'seneca'@'%';

CREATE TABLE alumnos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(30) not null,
    apellido1 varchar(30) not null ,
    apellido2 VARCHAR(30),
    fecha_nac DATE,
    email VARCHAR(100)
);

CREATE TABLE asignaturas (
    id INT UNSIGNED auto_increment PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    tipo Enum("TRONCAL", "OBLIGATORIA", "OPTATIVA"),
    creditos FLOAT DEFAULT 6 check(creditos>0),
    curso TINYINT UNSIGNED     
);
