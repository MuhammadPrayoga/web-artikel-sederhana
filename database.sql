CREATE DATABASE web_artikel;

USE web_artikel;

CREATE TABLE artikel (
  id INT(11) auto_increment,
   id_kategori INT(11) NOT NULL,
  judul VARCHAR(200) NOT NULL,
  isi TEXT,
  gambar VARCHAR(200),
  status TINYINT(1) DEFAULT 0,
  slug VARCHAR(200),
  PRIMARY KEY(id)
);


CREATE TABLE kategori (
  id_kategori INT(11) auto_increment,
  nama_kategori VARCHAR(200) NOT NULL,
  slug_kategori VARCHAR(200),
  PRIMARY KEY(id_kategori)
);

ALTER TABLE artikel 
ADD CONSTRAINT fk_kategori_artikel 
FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori);

CREATE TABLE user ( 
  id INT(11) auto_increment, 
  username VARCHAR(200) NOT NULL, 
  useremail VARCHAR(200), 
  userpassword VARCHAR(200), 
  PRIMARY KEY(id) 
);

