create database Projeto;
use Projeto;

create table Contratante
(
	id_contratante int not null auto_increment primary key,
	nome_contratante varchar(50) not null,
    img_contratante longblob null,
	cnpj_contratante char(18) not null unique,
	telefone1_contratante char(14) not null,
	telefone2_contratante char(14) null,
	logradouro_contratante varchar(50) not null,
	numero_contratante int not null,
	bairro_contratante varchar(50) not null,
	cidade_contratante varchar(50) not null,
	uf_contratante char(2) not null,
	cep_contratante char(9) not null,
	login_contratante varchar(50) not null unique,
	senha_contratante varchar(50) not null,
	status_contratante varchar(20) not null,
	obs_contratante varchar(255) null
);
drop table Contratante;
insert into Contratante
	(nome_contratante, cnpj_contratante, telefone1_contratante, telefone2_contratante, logradouro_contratante, numero_contratante,
	bairro_contratante, cidade_contratante, uf_contratante, cep_contratante, login_contratante, senha_contratante, status_contratante,
	obs_contratante)
values
	('Loja Seu Toba', '20.152.875/0001-00', '(11)95674-9290', '(11)98991-9475', 'Av Paulo Faccini', 369, 'Vila Rio de Janeiro', 'Guarulhos', 'SP', '28147-232', 'LojaSeuToba@official.com', '4685', 'Ativo', ''),
	('Americanas', '23.400.886/0001-00', '(11)97615-9818', '', 'Rua Alasca', 617, 'Pimentas', 'Guarulhos', 'SP', '69688-413', 'Americanas@official.com', '2633', 'Ativo', ''),
	('McDonalds', '68.723.957/0001-00', '(11)92357-9459', '(11)96130-9955', 'Rua Monteiro', 657, 'Taboão', 'Guarulhos', 'SP', '60686-955', 'McDonalds@official.com', '7297', 'Ativo', ''),
	('Giraffas', '47.732.631/0001-00', '(11)93462-9758', '', 'Rua da Sorte', 648, 'Inocoop', 'Guarulhos', 'SP', '72224-468', 'Giraffas@official.com', '3590', 'Ativo', '');
    
select * from contratante;
select * from freelancer;

create table Linguagem
(
	id_linguagem int not null auto_increment primary key,
	nome_linguagem varchar(25) not null unique,
	status_linguagem varchar(20) not null,
	obs_linguagem varchar(255) null
);

insert into Linguagem
	(nome_linguagem, status_linguagem, obs_linguagem)
values
    ('HTML', 'Ativo', '');

select * from Linguagem order by id_linguagem;

create table Freelancer
(
	id_freelancer int not null auto_increment primary key,
	nome_freelancer varchar(50) not null,
    img_freelancer longblob null,
	cpf_freelancer char(14) not null unique,
	rg_freelancer varchar(25) not null unique,
	celular1_freelancer char(14) not null,
	celular2_freelancer char(14) null ,
	telefone_freelancer char(14) null ,
	logradouro_freelancer varchar(50) not null ,
	numero_freelancer int not null ,
	bairro_freelancer varchar(50) not null ,
	cidade_freelancer varchar(50) not null ,
	uf_freelancer char(2) not null ,
	cep_freelancer char(9) not null ,
	dtNascimento_freelancer date not null ,
	banco_freelancer varchar(50) not null,
	agencia_freelancer varchar(5) not null,
	contaCorrente_freelancer varchar(20) not null ,
	login_freelancer varchar(50) not null unique,
    email_freelancer varchar(255) not null unique,
	senha_freelancer varchar(50) not null ,
    area_freelancer varchar(20) not null,
	status_freelancer varchar(20) not null ,
	obs_freelancer varchar(300) null
);
update projeto set status_projeto = 'Em andamento'
                  where id_projeto = '1';
ALTER TABLE Freelancer
ADD COLUMN area_freelancer text not null AFTER login_freelancer;

select * from freelancer;
select * from Projeto;

select * from freelancer where area_freelancer = Fullstack;
update freelancer set area_freelancer = 'Front-end' where id_freelancer = 16;

SELECT nome_freelancer FROM freelancer WHERE nome_freelancer LIKE '%E%';

select * from contratante;
select * from projeto;

select Freelancer.nome_freelancer,Freelancer.obs_freelancer,FreelancerLinguagem.id_freelancerLinguagem, FreelancerLinguagem.id_freelancer_freelancerLinguagem, 
FreelancerLinguagem.id_linguagem_freelancerLinguagem from FreelancerLinguagem
INNER JOIN Freelancer on FreelancerLinguagem.id_freelancer_freelancerLinguagem = Freelancer.id_freelancer;

insert into Freelancer
	(nome_freelancer, cpf_freelancer, rg_freelancer, celular1_freelancer, celular2_freelancer, telefone_freelancer, logradouro_freelancer,
	numero_freelancer, bairro_freelancer, cidade_freelancer, uf_freelancer, cep_freelancer, dtNascimento_freelancer, banco_freelancer,
	agencia_freelancer, contaCorrente_freelancer,login_freelancer, senha_freelancer, status_freelancer, obs_freelancer)
values
	('André Moreira', '256.656.990-86', '75.123.580-98', '(11)96074-9683', '(11)93874-9116', '', 'Rua Pajé', 740, 'Cabo Norte', 'Guarulhos', 'SP', '61153-818', '1980-05-01', 'Banco do Brasil', '59285', '194029842','AndreMoreira@gmail.com', '5591', 'Ativo', ''),
	('Julia Alves', '997.853.619-84', '16.720.887-15', '(11)97229-9059', '', '', 'Rua Antônio', 979, 'Piratininga', 'Guararema', 'SP', '57897-495', '1979-10-15', 'Banco do Brasil','82749', '194029841', 'JuliaAlves@gmail.com', '2293', 'Ativo', ''),
	('Sabrina Sato', '887.632.485-96', '89.798.369-27', '(11)90614-9332', '(11)93840-9673', '', 'Rua Conde', 392, 'São Domingos', 'Domingos', 'SP', '31415-176', '1972-11-13', 'Banco do Brasil', '74840', '194029840','SabrinaSato@outlook.com', '2236', 'Ativo', ''),
	('José Maria', '762.698.648-24', '82.656.991-71', '(11)98646-9225', '(11)93252-9921', '', 'Av Bonde do Forró', 760, 'São João', 'Lindomar', 'SP', '13189-579', '1961-08-20', 'Banco do Brasil', '80229', '194029843', 'JoseMaria@outlook.com', '4707', 'Ativo', ''),
	('Moisés Carvalho', '156.200.724-23', '57.455.985-49', '(11)96437-9300', '', '', 'Rua Casemiro', 184, 'Piracanjuba', 'São Paulo', 'SP', '87949-604', '1956-05-15', 'Banco do Brasil', '92749', '194029844', 'MoisesCarvalho@gmail.com', '9296', 'Ativo', '');
    
select date_format(dtNascimento_freelancer, '%d-%m-%Y'), nome_freelancer from freelancer;

select * from freelancer;
alter table freelancer
add column email_freelancer varchar(255) not null AFTER login_freelancer;

 DELETE FROM  FreelancerLinguagem
 WHERE id_freelancer_freelancerLinguagem = 5;

drop table freelancer;

create table TipoPagamento
(
	id_tipoPagamento int not null auto_increment primary key,
	nome_tipoPagamento varchar(50) not null unique,
	parcela_tipoPagamento int not null ,
	status_tipoPagamento varchar(20) not null ,
	obs_tipoPagamento varchar(300) null
);

insert into TipoPagamento
	(nome_tipoPagamento, parcela_tipoPagamento, status_tipoPagamento, obs_tipoPagamento)
values
	('À vista', 1, 'Ativo', ''),
	('Parcelado2x', 2, 'Ativo', ''),
	('Parcelado3x', 3, 'Ativo', ''),
	('Parcelado4x', 4, 'Ativo', '');

create table FreelancerLinguagem
(
	id_freelancerLinguagem int not null auto_increment primary key,
	id_freelancer_freelancerLinguagem int not null ,
	id_linguagem_freelancerLinguagem int not null ,
	status_freelancerLinguagem varchar(20) not null ,
	obs_freelancerLinguagem varchar(300) null,

	constraint Fk_Id_Freelancer_FreelancerLinguagem foreign key(id_freelancer_freelancerLinguagem) references Freelancer(id_freelancer),
	constraint Fk_Id_Linguagem_FreelancerLinguagem foreign key(id_linguagem_freelancerLinguagem) references Linguagem(id_linguagem)
);

drop table freelancerLinguagem;

select linguagem.nome_linguagem from freelancerlinguagem
inner join linguagem on freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem;

select freelancerlinguagem.id_freelancerLinguagem, freelancerlinguagem.id_freelancer_freelancerLinguagem, 
freelancerlinguagem.id_linguagem_freelancerLinguagem, Linguagem.nome_linguagem, freelancer.nome_freelancer from freelancerlinguagem
INNER JOIN Linguagem on  freelancerlinguagem.id_linguagem_freelancerLinguagem = Linguagem.id_linguagem
INNER JOIN Freelancer on freelancerlinguagem.id_freelancer_freelancerLinguagem = freelancer.id_freelancer
where freelancerlinguagem.id_linguagem_freelancerLinguagem = 5 or freelancerlinguagem.id_linguagem_freelancerLinguagem = 3;

select * from freelancerlinguagem;
select * from Contratante;

insert into FreelancerLinguagem
	(id_freelancer_freelancerLinguagem, id_linguagem_freelancerLinguagem, status_freelancerLinguagem, obs_freelancerLinguagem)
values
	(4, 23,'Ativo', ''),
	(4, 3, 'Ativo', ''),
    (4, 22, 'Ativo', '');

select * from linguagem;

create table Contrato
(
	id_contrato int not null auto_increment primary key,
	id_contratante_contrato int not null,
	id_freelancer_contrato int not null,
	id_funcionario_contrato int not null,
	id_projeto_contrato int not null,
	id_tipoPagamento_contrato int not null,
	dtEmissão_contrato timestamp not null ,
	valor_contrato decimal(10,2) not null,
	lucro_contrato decimal(10,2) not null,
	descricao_contrato varchar(300) not null,
	status_contrato varchar(20) not null,
	obs_contrato varchar(300) null,

	constraint Fk_Id_Contratante_Contrato foreign key(id_contratante_contrato) references Contratante(id_contratante),
	constraint Fk_Id_Freelancer_Contrato foreign key(id_freelancer_contrato) references Freelancer(id_freelancer),
	constraint Fk_Id_Funcionario_Contrato foreign key (id_funcionario_contrato) references Funcionarios(id_funcionario),
	constraint FK_Id_Projeto_Contrato foreign key (id_projeto_contrato) references Projeto (id_projeto),
	constraint FK_Id_tipoPagamento_contrato foreign key (id_tipoPagamento_contrato) references TipoPagamento(id_tipoPagamento) 
);

drop table Contrato;

create table Projeto
(
	id_projeto int not null auto_increment primary key,
	id_freelancer_projeto int null,
    id_contratante_projeto int not null,
    id_linguagem_projeto int not null,
	nome_projeto varchar(50) not null ,
    img_projeto longblob null,
	dtCriacao_projeto timestamp not null,
	versao_projeto varchar(20) not null,
    descricao_projeto text not null,
	status_projeto varchar(20) not null,
	obs_projeto varchar(300) null,

	constraint Fk_Id_Freelancer_Projeto foreign key(id_freelancer_projeto) references Freelancer(id_freelancer),
	constraint Fk_Id_Contratante_Projeto foreign key (id_contratante_projeto) references Contratante (id_contratante),
    constraint Fk_Id_Linguagem_Projeto foreign key (id_linguagem_projeto) references Linguagem (id_linguagem)
);

select * from projeto;
SELECT * from projeto where status_projeto = 'Em espera' and id_linguagem_projeto = 1;
SELECT * FROM projeto
where id_linguagem_projeto in (
    SELECT freelancerLinguagem.id_linguagem_freelancerLinguagem
    FROM freelancerLinguagem where freelancerLinguagem.id_freelancer_freelancerLinguagem = 1
);

select projeto.nome_projeto, projeto.descricao_projeto, projeto.status_projeto, projeto.versao_projeto, contratante.nome_contratante,
contratante.img_contratante, linguagem.nome_linguagem from projeto
INNER JOIN Contratante on Projeto.id_contratante_projeto = Contratante.id_contratante
INNER JOIN linguagem on projeto.id_linguagem_projeto = linguagem.id_linguagem where id_linguagem_projeto in (
    SELECT freelancerLinguagem.id_linguagem_freelancerLinguagem
    FROM freelancerLinguagem where freelancerLinguagem.id_freelancer_freelancerLinguagem = 1
);

drop table projeto;
insert into projeto
	(id_contratante_projeto, id_linguagem_projeto, nome_projeto,img_projeto, versao_projeto,descricao_projeto, status_projeto, obs_projeto)
values
	(5, 7,'Sistema Desktop', '', '0.0','Melhorar nossa aplicação web com C# WinForms', 'Em espera', '');

SELECT projeto.nome_projeto, projeto.img_projeto, projeto.descricao_projeto, projeto.status_projeto, contratante;
select * from linguagem;
select * from contratante;
select * from freelancer;
select * from projeto;
select projeto.nome_projeto, projeto.descricao_projeto, projeto.status_projeto, projeto.versao_projeto, contratante.nome_contratante,
contratante.img_contratante, linguagem.nome_linguagem from projeto
INNER JOIN Contratante on Projeto.id_contratante_projeto = Contratante.id_contratante
INNER JOIN Freelancer on projeto.id_freelancer_projeto = freelancer.id_freelancer
INNER JOIN linguagem on projeto.id_linguagem_projeto = linguagem.id_linguagem where projeto.id_freelancer_projeto = 1;

create table Portfolio_Freelancer
(
	id_projeto_porfolio int not null auto_increment primary key,
    nome_projeto_portfolio varchar(255) not null,
    id_freelancer_portfolio int not null,
    img_projeto_portfolio longblob not null,
    link_projeto_portfolio text null,
    status_projeto_portfolio varchar(50) not null,
    obs_projeto_portfolio varchar(255) null,
    
    constraint FK_ID_Freelancer_Portfolio foreign key(id_freelancer_portfolio) references Freelancer(id_freelancer)
);

drop table Portfolio_Freelancer;
select * from Portfolio_freelancer;
drop table Projeto;
select * from projeto;

create table Historico
(
	id_historico int not null auto_increment primary key,
	id_contratante_historico int not null,
	id_freelancer_historico int not null,
	id_projeto_historico int not null,
	dtAlteracao_historico  timestamp not null,
	status_historico varchar(20) not null,
	obs_historico varchar(300) null,

	constraint Fk_Id_Contratante_Historico foreign key(id_contratante_historico) references Contratante(id_contratante),
	constraint Fk_Id_Freelancer_Historico foreign key(id_freelancer_historico) references Freelancer(id_freelancer),
	constraint Fk_Id_Projeto_Historico foreign key(id_projeto_historico) references Projeto(id_projeto)
);

drop table historico;

create table Funcionarios 
(
	id_Funcionario int not null auto_increment primary key,
	nome_Funcionario varchar(50) not null,
	cpf_Funcionario varchar(14) not null unique,
	login_Funcionario varchar(50) not null unique,
	senha_Funcionario varchar(50) not null,
	celular1_funcionario char(14) not null,
	celular2_funcionario char(14) null,
	logradouro_funcionario varchar(50) not null,
	numero_funcionario int not null,
	bairro_funcionario varchar(50) not null,
	cidade_funcionario varchar(50) not null,
	uf_funcionario char(2) not null,
	cep_funcionario char(9) not null,
	status_Funcionario varchar(50) not null,
	obs_Funcionario varchar(255) null
);

insert into Funcionarios
(nome_Funcionario, cpf_Funcionario,login_Funcionario,senha_Funcionario,celular1_funcionario,celular2_funcionario,logradouro_funcionario,
numero_funcionario,bairro_funcionario,cidade_funcionario,uf_funcionario,cep_funcionario,status_Funcionario,obs_Funcionario)
value
('Administrador','000.000.000=00','Admin','123','(11)90000-0000','','00000','000','00000','000000','AD','00000-000','Ativo','');

select * from projeto;

create table reviewFreelancer
(
	id_review int not null auto_increment primary key,
    id_freelancer_review int not null,
    id_contratante_review int not null,
    nota_review int not null,
    comentario_review text not null,
    data_review timestamp not null,
    status_review varchar(20) not null,
    obs_review varchar(255) null,
    
    constraint FK_Id_Freelancer_ReviewFreelancer foreign key (id_freelancer_review) references Freelancer (id_freelancer),
    constraint FK_Id_Contratante_ReviewFreelancer foreign key (id_contratante_review) references Contratante (id_contratante)
);

select * from reviewFreelancer;
select * from freelancer;
select * from contratante;
select reviewFreelancer.id_review, freelancer.nome_freelancer, contratante.nome_contratante, contratante.img_contratante, reviewFreelancer.nota_review, 
reviewFreelancer.comentario_review from reviewFreelancer
inner join Freelancer on reviewFreelancer.id_freelancer_review = freelancer.id_freelancer
inner join Contratante on reviewFreelancer.id_contratante_review = contratante.id_contratante
where id_freelancer = 1;

insert into reviewFreelancer
(id_freelancer_review, id_contratante_review,nota_review, comentario_review, status_review, obs_review)
values
(2, 4, 5, 'Excelente trabalho!', 'Ativo', '');

select * from reviewFreelancer;
select * from freelancer;
select * from contratante;

drop table reviewFreelancer;

create table review_table
(
	review_id int not null auto_increment primary key,
    user_name varchar(200) not null,
    user_rating int not null,
    user_review text not null,
    cadastro_review timestamp not null
);

select * from review_table;

drop table review_table;
select * from projeto;
create table MandarProposta
(
id_mandarproposta int not null auto_increment primary key,
id_contratante_mandarproposta int not null,
id_freelancer_mandarproposta int not null,
id_projeto_mandarproposta int not null,
datacriacao_mandarproposta timestamp not null,
descricao_mandarproposta varchar(255) not null ,

constraint Fk_Id_Contratante_mandarproposta foreign key(id_contratante_mandarproposta) references Contratante(id_contratante),
constraint Fk_Id_Freelancer_mandarproposta foreign key(id_freelancer_mandarproposta) references Freelancer(id_freelancer),
constraint Fk_Id_Projeto_mandarproposta foreign key(id_projeto_mandarproposta) references Projeto(id_projeto)
);

select * from MandarProposta;