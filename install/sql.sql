/*! cria banco */
CREATE DATABASE odin;
/*! cria usuario comum do banco apenas para verificar usuarios cadastrados no sistema e lhe dá permissão de acesso apenas às tabelas específicas para esta tarefa */
GRANT SELECT, INSERT ON `odin`.`sessoes` TO 'odin'@'%';
GRANT SELECT (`usuario`, `senha`, `nivel`) ON `odin`.`usuarios` TO 'odin'@'%'; 
GRANT SELECT (`ids`, `usuario`, `senha`, `ultimoacesso`) ON `odin`.`sessoes` TO 'odin'@'%'; 
CREATE USER 'paico'@'%' IDENTIFIED BY '***';GRANT USAGE ON *.* TO 'paico'@'%' IDENTIFIED BY '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `odin`.* TO 'paico'@'%'; 
/*! tabela de usuarios cadastrados */
create table usuarios ( id int(11) auto_increment, nome varchar(50), usuario varchar(20), senha varchar(128), nivel int(1), primary key(id) );
/*! tabela de sessoes abertas */
create table sessoes ( id int(11) auto_increment, ids varchar(128), usuario varchar(20), senha varchar(128), sessao varchar(128), ultimoacesso datetime, primary key(id) );
/*! insere usuário administrador padrão na tabela */
INSERT INTO `odin`.`usuarios` (`id`, `nome`, `usuario`, `senha`, `nivel`) VALUES (NULL, 'Tiago Floriano', 'paico', 'fa38f3103751a64c615d9eb5c1b662fe7d90d6dd2694a21e5efdad3090bc3a1e7d9976f3c9a5f94bc9f1e75920d841b4ffb9f9ab9e6043a41db50117abdebbf0', '1'); 
