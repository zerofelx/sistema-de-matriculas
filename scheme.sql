create table usuarios(
    ID integer not null AUTO_INCREMENT,
    username varchar(30) not null,
    cc integer(15) not null,
    psw varchar(50) not null,
    rol varchar(11) not null,
    primary key(ID)
);

insert into usuarios (username, cc, psw, rol) values('Jesus', 1000148990, '098f6bcd4621d373cade4e832627b4f6', 'super-admin');