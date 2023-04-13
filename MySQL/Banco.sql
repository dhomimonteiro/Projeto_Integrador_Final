create database Projeto;
use Projeto;

create table Contratante
(
	id_contratante int not null auto_increment primary key,
	nome_contratante varchar(50) not null,
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

insert into Contratante
	(nome_contratante, cnpj_contratante, telefone1_contratante, telefone2_contratante, logradouro_contratante, numero_contratante,
	bairro_contratante, cidade_contratante, uf_contratante, cep_contratante, login_contratante, senha_contratante, status_contratante,
	obs_contratante)
values
	('Nestle', '52.111.969/0001-00', '(11)95606-9991', '', 'Rua Campos do Jordão', 390, 'Cabo Sul', 'Guarulhos', 'SP', '83299-953', 'Nestle@official.com', '7197', 'Ativo', ''),
	('Loja Seu Toba', '20.152.875/0001-00', '(11)95674-9290', '(11)98991-9475', 'Av Paulo Faccini', 369, 'Vila Rio de Janeiro', 'Guarulhos', 'SP', '28147-232', 'LojaSeuToba@official.com', '4685', 'Ativo', ''),
	('Americanas', '23.400.886/0001-00', '(11)97615-9818', '', 'Rua Alasca', 617, 'Pimentas', 'Guarulhos', 'SP', '69688-413', 'Americanas@official.com', '2633', 'Ativo', ''),
	('McDonalds', '68.723.957/0001-00', '(11)92357-9459', '(11)96130-9955', 'Rua Monteiro', 657, 'Taboão', 'Guarulhos', 'SP', '60686-955', 'McDonalds@official.com', '7297', 'Ativo', ''),
	('Giraffas', '47.732.631/0001-00', '(11)93462-9758', '', 'Rua da Sorte', 648, 'Inocoop', 'Guarulhos', 'SP', '72224-468', 'Giraffas@official.com', '3590', 'Ativo', '');

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
	('HTML', 'Ativo', ''),
	('CSS', 'Ativo', ''),
	('JS', 'Ativo', ''),
	('JAVA', 'Ativo', ''),
	('PHP', 'Ativo', ''),
	('SQL', 'Ativo', ''),
	('C#', 'Ativo', '');

create table Freelancer
(
	id_freelancer int not null auto_increment primary key,
	nome_freelancer varchar(50) not null,
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
	agencia_freelancer varchar(50) not null,
	contaCorrente_freelancer varchar(255) not null ,
	login_freelancer varchar(50) not null unique,
	senha_freelancer varchar(50) not null ,
	status_freelancer varchar(20) not null ,
	obs_freelancer varchar(300) null
);

insert into Freelancer
	(nome_freelancer, cpf_freelancer, rg_freelancer, celular1_freelancer, celular2_freelancer, telefone_freelancer, logradouro_freelancer,
	numero_freelancer, bairro_freelancer, cidade_freelancer, uf_freelancer, cep_freelancer, dtNascimento_freelancer, contaBancaria_freelancer,
	login_freelancer, senha_freelancer, status_freelancer, obs_freelancer)
values
	('André Moreira', '256.656.990-86', '75.123.580-98', '(11)96074-9683', '(11)93874-9116', '', 'Rua Pajé', 740, 'Cabo Norte', 'Guarulhos', 'SP', '61153-818', '01-05-1980', '256.656.990-86', 'AndreMoreira@gmail.com', '5591', 'Ativo', ''),
	('Julia Alves', '997.853.619-84', '16.720.887-15', '(11)97229-9059', '', '', 'Rua Antônio', 979, 'Piratininga', 'Guararema', 'SP', '57897-495', '15-05-1979', '997.853.619-84', 'JuliaAlves@gmail.com', '2293', 'Ativo', ''),
	('Sabrina Sato', '887.632.485-96', '89.798.369-27', '(11)90614-9332', '(11)93840-9673', '', 'Rua Conde', 392, 'São Domingos', 'Domingos', 'SP', '31415-176', '13-11-1972', '887.632.485-96', 'SabrinaSato@outlook.com', '2236', 'Ativo', ''),
	('José Maria', '762.698.648-24', '82.656.991-71', '(11)98646-9225', '(11)93252-9921', '', 'Av Bonde do Forró', 760, 'São João', 'Lindomar', 'SP', '13189-579', '28-08-1961', '762.698.648-24', 'JoseMaria@outlook.com', '4707', 'Ativo', ''),
	('Moisés Carvalho', '156.200.724-23', '57.455.985-49', '(11)96437-9300', '', '', 'Rua Casemiro', 184, 'Piracanjuba', 'São Paulo', 'SP', '87949-604', '12-05-1956', '156.200.724-23', 'MoisesCarvalho@gmail.com', '9296', 'Ativo', '');

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

insert into FreelancerLinguagem
	(id_freelancer_freelancerLinguagem, id_linguagem_freelancerLinguagem, status_freelancerLinguagem, obs_freelancerLinguagem)
values
	(1, 4, 'Ativo', ''),
	(2, 6, 'Ativo', ''),
	(3, 1, 'Ativo', ''),
	(4, 2, 'Ativo', ''),
	(5, 3, 'Ativo', ''),
	(2, 5, 'Ativo', ''),
	(3, 1, 'Ativo', ''),
	(5, 3, 'Ativo', '');

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

create table Projeto
(
	id_projeto int not null auto_increment primary key,
	id_freelancer_projeto int not null ,
	nome_projeto varchar(50) not null ,
	dtCriacao_projeto timestamp not null,
	versao_projeto varchar(20) not null,
	status_projeto varchar(20) not null,
	obs_projeto varchar(300) null,

	constraint Fk_Id_Freelancer_Projeto foreign key(id_freelancer_projeto) references Freelancer(id_freelancer)
);

insert into projeto
	(id_freelancer_projeto, nome_projeto, versao_projeto, status_projeto, obs_projeto)
values
	(1, 'Página web', '1.0', 'Ativo', '');

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