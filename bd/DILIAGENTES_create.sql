-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-05-09 21:49:33.256

-- tables
-- Table: Agente
CREATE TABLE Agente (
    agente_user_nickname varchar(20)  NOT NULL,
    agente_reputacion varchar(300)  NOT NULL,
    agente_estado boolean  NOT NULL,
    agente_rrss varchar(50)  NOT NULL,
    agente_bio varchar(250)  NOT NULL,
    CONSTRAINT Agente_pk PRIMARY KEY (agente_user_nickname)
);

-- Table: Calificacion
CREATE TABLE Calificacion (
    califica_id serial  NOT NULL,
    califica_id_diligencia int  NOT NULL,
    califica_comentario varchar(200)  NULL,
    califica_servicio int  NOT NULL,
    califica_confianza int  NOT NULL,
    califica_diligencia int  NOT NULL,
    califica_fecha timestamp  NOT NULL,
    CONSTRAINT Calificacion_pk PRIMARY KEY (califica_id)
);

-- Table: Cliente
CREATE TABLE Cliente (
    cli_user_nickname varchar(20)  NOT NULL,
    cli_experiencia varchar(50)  NOT NULL,
    cli_profesion varchar(50)  NOT NULL,
    CONSTRAINT Cliente_pk PRIMARY KEY (cli_user_nickname)
);

-- Table: Diligencia
CREATE TABLE Diligencia (
    dil_id serial  NOT NULL,
    dil_asunto varchar(40)  NOT NULL,
    dil_archivos varchar(20)  NULL,
    dil_mensaje varchar(250)  NULL,
    dil_costo varchar(50)  NULL,
    dil_estado varchar(15)  NOT NULL,
    dil_dir_origen varchar(50)  NOT NULL,
    dil_dir_fin varchar(50)  NOT NULL,
    dil_user_cliente varchar(20)  NOT NULL,
    dil_user_agente varchar(20)  NOT NULL,
    dil_fecha timestamp  NOT NULL,
    CONSTRAINT Diligencia_pk PRIMARY KEY (dil_id)
);

-- Table: Direcciones_usuarios
CREATE TABLE Direcciones_usuarios (
    dir_user_nickname varchar(20)  NOT NULL,
    dir_direccion int  NOT NULL,
    dir_ubicacion int  NULL,
    CONSTRAINT Direcciones_usuarios_pk PRIMARY KEY (dir_user_nickname,dir_direccion)
);

-- Table: Rol
CREATE TABLE Rol (
    rol_id serial  NOT NULL,
    rol_nombre varchar(20)  NOT NULL,
    rol_fecha timestamp  NOT NULL,
    CONSTRAINT Rol_pk PRIMARY KEY (rol_id)
);

-- Table: Tipo_documento
CREATE TABLE Tipo_documento (
    tpdoc_id serial  NOT NULL,
    tpdoc_codigo varchar(10)  NOT NULL,
    tpdoc_nombre varchar(20)  NOT NULL,
    tpdoc_fecha timestamp  NOT NULL,
    CONSTRAINT Tipo_documento_pk PRIMARY KEY (tpdoc_id)
);

-- Table: Usuario
CREATE TABLE Usuario (
    user_nickname varchar(20)  NOT NULL,
    user_apellidos varchar(50)  NOT NULL,
    user_nombre varchar(50)  NOT NULL,
    user_tipodoc int  NOT NULL,
    user_documento varchar(15)  NOT NULL,
    user_telefono varchar(20)  NOT NULL,
    user_celular varchar(20)  NOT NULL,
    user_password varchar(50)  NOT NULL,
    user_email varchar(60)  NOT NULL,
    user_rol int  NOT NULL,
    user_activo boolean  NOT NULL,
    user_fecha timestamp  NOT NULL,
    user_foto varchar(50)  NOT NULL,
    CONSTRAINT Usuario_pk PRIMARY KEY (user_nickname)
);

-- foreign keys
-- Reference: Agente_Usuario (table: Agente)
ALTER TABLE Agente ADD CONSTRAINT Agente_Usuario
    FOREIGN KEY (agente_user_nickname)
    REFERENCES Usuario (user_nickname) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Cliente_Usuario (table: Cliente)
ALTER TABLE Cliente ADD CONSTRAINT Cliente_Usuario
    FOREIGN KEY (cli_user_nickname)
    REFERENCES Usuario (user_nickname) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Diligencia_Agente (table: Diligencia)
ALTER TABLE Diligencia ADD CONSTRAINT Diligencia_Agente
    FOREIGN KEY (dil_user_agente)
    REFERENCES Agente (agente_user_nickname) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Diligencia_Calificacion (table: Calificacion)
ALTER TABLE Calificacion ADD CONSTRAINT Diligencia_Calificacion
    FOREIGN KEY (califica_id_diligencia)
    REFERENCES Diligencia (dil_id) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Diligencia_Cliente (table: Diligencia)
ALTER TABLE Diligencia ADD CONSTRAINT Diligencia_Cliente
    FOREIGN KEY (dil_user_agente)
    REFERENCES Cliente (cli_user_nickname) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Direcciones_usuarios_Usuario (table: Direcciones_usuarios)
ALTER TABLE Direcciones_usuarios ADD CONSTRAINT Direcciones_usuarios_Usuario
    FOREIGN KEY (dir_user_nickname)
    REFERENCES Usuario (user_nickname) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Usuario_Rol (table: Usuario)
ALTER TABLE Usuario ADD CONSTRAINT Usuario_Rol
    FOREIGN KEY (user_rol)
    REFERENCES Rol (rol_id) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Usuario_Tipo_documento (table: Usuario)
ALTER TABLE Usuario ADD CONSTRAINT Usuario_Tipo_documento
    FOREIGN KEY (user_tipodoc)
    REFERENCES Tipo_documento (tpdoc_id) 
    ON UPDATE  CASCADE 
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

