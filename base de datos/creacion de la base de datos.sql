use master
go

create database Euler
on
(
name=Euler_dat,
filename='E:\bases de datos\euler\Euler.mdf', -- esta ruta se cambia dependiendo la ubicacion donde se requiera ser creada la base de datos
size=10,
maxsize=50,
filegrowth=5
)
log on 
(
name=Euler_log,
filename='E:\bases de datos\euler\Euler.ldf', -- esta ruta se cambia dependiendo la ubicacion donde se requiera ser creada la base de datos
size=5mb,
maxsize=25mb,
filegrowth=5mb
)
go