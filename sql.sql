create schema bdCaptura;
use bdCaptura;

create table dados (

	id int (11) primary key not null auto_increment,
    nome varchar (80) not null,
    email varchar (80)

)