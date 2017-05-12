-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-05-09 21:49:33.256

-- foreign keys
ALTER TABLE Agente
    DROP CONSTRAINT Agente_Usuario;

ALTER TABLE Cliente
    DROP CONSTRAINT Cliente_Usuario;

ALTER TABLE Diligencia
    DROP CONSTRAINT Diligencia_Agente;

ALTER TABLE Calificacion
    DROP CONSTRAINT Diligencia_Calificacion;

ALTER TABLE Diligencia
    DROP CONSTRAINT Diligencia_Cliente;

ALTER TABLE Direcciones_usuarios
    DROP CONSTRAINT Direcciones_usuarios_Usuario;

ALTER TABLE Usuario
    DROP CONSTRAINT Usuario_Rol;

ALTER TABLE Usuario
    DROP CONSTRAINT Usuario_Tipo_documento;

-- tables
DROP TABLE Agente;

DROP TABLE Calificacion;

DROP TABLE Cliente;

DROP TABLE Diligencia;

DROP TABLE Direcciones_usuarios;

DROP TABLE Rol;

DROP TABLE Tipo_documento;

DROP TABLE Usuario;

-- End of file.

