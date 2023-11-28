# Projeto CRUD em PHP com PDO

Este é um projeto simples de CRUD (Create, Read, Update, Delete) em PHP usando a extensão PDO para interação com o banco de dados. O projeto permite cadastrar, visualizar, editar e excluir usuários de um banco de dados MySQL.

## Estrutura do Projeto

- **config.php**: Contém as configurações de conexão com o banco de dados.
- **cadastrar.php**: Página para cadastrar novos usuários.
- **editar.php**: Página para editar usuários existentes.
- **excluir.php**: Página para excluir usuários.
- **editar_action.php**: Lógica para processar a atualização do usuário.
- **cadastrar_action.php**: Lógica para processar o cadastro de novos usuários.
- **lista.php**: Página que lista todos os usuários cadastrados.

## Requisitos

- PHP 7.x ou superior
- Servidor web (ex: Apache, Nginx)
- Banco de dados MySQL

## Configuração

1. Configure as informações do banco de dados no arquivo `config.php`.
2. Importe o arquivo `database.sql` no seu banco de dados MySQL para criar a tabela necessária.

## Como Usar

1. Acesse `cadastrar.php` para adicionar novos usuários.
2. Acesse `lista.php` para visualizar a lista de usuários cadastrados.
3. Acesse `editar.php` para editar informações de um usuário existente.
4. Acesse `excluir.php` para excluir um usuário.

