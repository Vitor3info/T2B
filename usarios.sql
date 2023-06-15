create table usuarios (
    ID int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
    login Varchar(30),
    senha Varchar(40),
Primary key(ID)) ENGINE = MyISAM;