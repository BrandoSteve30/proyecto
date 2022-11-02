use Euler
go

-- tablas independientes --

drop table if exists nivel
create table nivel
(
idNivel int identity primary key,
nombreNivel char(15) not null
)

drop table if exists grado
create table grado
(
idGrado int identity primary key,
nombreGrado char(15) not null
)

drop table if exists docentes
create table docentes
(
dniDocente char(8) primary key,
nombre char(50) not null,
edad char(2) not null,
telefono char(9) null,
genero char(1) not null,

constraint chk_generoDocente CHECK (genero in ('H','M'))
)

-- tablas dependientes --

drop table if exists cursos
create table cursos
(
idCurso int identity primary key,
nombreCurso char(10) not null,
dniDocente char(8) not null

constraint fk_dniDocente foreign key(dniDocente) references docentes(dniDocente)
)

drop table if exists alumnos
create table alumnos
(
dniAlumno char(8) primary key,
nombre char(50) not null,
edad char(2) not null,
telefono char(9) null,
genero char(1) not null,
idNivel int not null,
idGrado int not null,

constraint chk_generoAlumno CHECK (genero in ('H','M')),
constraint fk_Nivel foreign key(idNivel) references nivel(idNivel),
constraint fk_Grado foreign key(idGrado) references grado(idGrado)
)

drop table if exists notas
create table notas
(
nota1 int not null,
nota2 int not null,
nota3 int not null,
nota4 int not null,
nota5 int not null,
dniAlumno char(8) not null,
idCurso int not null,

constraint fk_dniAlumno foreign key(dniAlumno) references alumnos(dniAlumno),
constraint fk_idCurso foreign key(idCurso) references cursos(idCurso)
)

drop table if exists asistenciaAlumnos
create table asistenciaAlumnos
(
fecha smalldatetime default getdate(),
dniAlumno char(8) not null,

constraint fk_dniAlumnoAsistencia foreign key(dniAlumno) references alumnos(dniAlumno)
)

drop table if exists asistenciaDocentes
create table asistenciaDocentes
(
fecha smalldatetime default getdate(),
dniDocente char(8) not null,

constraint fk_dniDocenteAsistencia foreign key(dniDocente) references docentes(dniDocente)
)

drop table if exists matricula
create table matricula
(
monto smallmoney not null,
fechaRegistro smalldatetime default getdate(),
estado char(15) not null,
dniAlumno char(8) not null,

constraint fk_dniAlumnoMatricula foreign key(dniAlumno) references alumnos(dniAlumno)
)

drop table if exists pensiones
create table pensiones
(
monto smallmoney not null,
fechaPago smalldatetime default getdate(),
estado char(15) not null,
dniAlumno char(8) not null,

constraint fk_dniAlumnoPension foreign key(dniAlumno) references alumnos(dniAlumno)
)

drop table if exists pagoDocentes
create table pagoDocentes
(
monto smallmoney not null,
fechaPago smalldatetime default getdate(),
estado char(15) not null,
dniDocente char(8) not null,

constraint fk_dniDocentePago foreign key(dniDocente) references docentes(dniDocente)
)

drop table if exists album
create table album
(
codigoImg char(10) primary key,
nombreImagen char(50) not null,
titulo char(50) null,
descripcion char(255) null,
fechaRegistro smalldatetime default getdate()
)
