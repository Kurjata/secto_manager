# Projeto de Gestão de Chamados

Este projeto é um sistema de gestão de chamados desenvolvido em Laravel, que permite cadastrar e acompanhar o status de chamados até a sua conclusão. Este guia fornece as instruções de instalação e configuração para o ambiente de desenvolvimento usando SQLite como banco de dados para testes.

## Pré-requisitos

- PHP >= 8.0
- Composer
- SQLite (para testes)
- Git (opcional, caso o projeto esteja em um repositório Git)

## Passo a Passo de Instalação

### 1. Clonar o Repositório do Projeto
Se o projeto está versionado com Git, clone-o para o ambiente local:
```bash
git clone <URL_DO_REPOSITORIO>
cd nome_do_projeto
```

### 2. Instalar Dependências do Laravel
Use o Composer para instalar as dependências do Laravel:
```bash
composer install
```

### 3. Configurar o Arquivo .env
```bash
Duplique o arquivo .env.example para .env
```
Abra o arquivo .env e configure o banco de dados SQLite para testes:
env
Copy code

``` bash
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### 4. Gerar a Chave da Aplicação
Gere a chave de criptografia do Laravel para garantir a segurança da aplicação:
``` bash
php artisan key:generate
```

### 5. Executar Migrations
Certifique-se de que as migrations estão no diretório database/migrations e execute o comando de migration para criar as tabelas no banco de dados:
``` bash
php artisan migrate
```

### 6. Iniciar o Servidor de Desenvolvimento
```bash
php artisan serve
```


