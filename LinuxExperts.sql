create database LinuxExperts;
use LinuxExperts;

create table prof (
	nm_prof varchar(30) not null,
    email_prof varchar(254) not null,
    cpf_prof char(14) not null
);

create table aluno (
    nm_alu varchar(30) not null,
    email_alu varchar(254) not null,
    cpf_alu char(14) not null
);

create table avaliacao (
	alu_not varchar(30) not null,
    not_mont int(3) not null,
    not_teo int(3) not null,
    not_proj int(3) not null,
    not_terminal int(3) not null
);

create table frequencia (
	alu_freq varchar(30) not null,
    frequencia int(3) not null
);

insert into aluno values ("Kawan",  "kawan.silva23@etec.sp.gov.br", "149.412.580-37");
insert into aluno values ("André",  "andre.lima23@etec.sp.gov.br", "542.411.900-06");
insert into aluno values ("Guilherme",  "gui.luiz23@etec.sp.gov.br", "701.960.350-58");
insert into aluno values ("Bruno",  "bruno.gaffo23@etec.sp.gov.br", "167.520.570-10");
insert into aluno values ("Kaiqui",  "kaiqui.silva23@etec.sp.gov.br", "896.567.940-01");

insert into avaliacao values ("Kawan", 85, 70, 90, 100);
insert into avaliacao values ("André", 90, 60, 100, 85);
insert into avaliacao values ("Guilherme", 80, 75, 98, 80);
insert into avaliacao values ("Bruno", 70, 50, 60, 80);
insert into avaliacao values ("Kaiqui", 80, 75, 60, 40);

insert into frequencia values ("Kawan", 195);
insert into frequencia values ("André", 175);
insert into frequencia values ("Guilherme", 160);
insert into frequencia values ("Bruno", 140);
insert into frequencia values ("Kaiqui", 185);

select * from aluno;
select * from avaliacao;
select * from frequencia;
select * from prof;