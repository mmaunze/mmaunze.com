CREATE Table  (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL
)


CREATE TABLE  (
    id integer PRIMARY key auto_increment,
    descricao varchar (255) not null UNIQUE,
     float not null,
     float not null,
     float not null,
    tipo_servico integer NOT null,
    Foreign Key (tipo_servico) REFERENCES tipo_servico(id)
)