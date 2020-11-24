create database receipts;
ALTER DATABASE receipts CHARACTER SET = utf8 COLLATE utf8_general_ci;
use receipts;
create table records ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username TEXT NOT NULL, userid TEXT NOT NULL, filename TEXT NOT NULL, filetype TEXT NOT NULL, fileprice FLOAT NOT  NULL, isfinished BOOLEAN DEFAULT 0 NOT NULL, uploadtime TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
alter table records default character set utf8;