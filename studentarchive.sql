
create database if not exists `studentarchive`;

USE `studentarchive`;



DROP TABLE IF EXISTS `mst_admin`;


create table `register`
(
 `name` varchar(20),
 `password` varchar(20),
 `phonenumber` int(10),
 `email` varchar(20)
);

create table `contact`
(
 `name` varchar(20),
 `email` varchar(20),
 `query` varchar(50)
);


insert into `register`(`name`,`password`,`phonenumber`,`email`) values('NRIPESH TOPPO','1234',7305175623,'nripeshtoppo@gmail.com');


insert into `contact`(`name`,`email`,`query`) values('NRIPESH TOPPO','nripeshtoppo@gmail.com','Who is the Administrator');
