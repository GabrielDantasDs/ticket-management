
<p> Ticket Management </p>

## About Project

This is a very simple project to management support tickets.

The system is compound by the follow entitites:
- Tickets (main entity)
- Categories
- Situations (can be read like "status")

Ticket and Categories have the four CRUD operations.

Situations are hard coded, with the follow possible values:
- Novo -> When ticket is fresh new.
- Pendente -> When ticket are is process to be resolved.
- Resolvido -> When ticket is already resolved.

The EDR diagram representation of the relation between system entities:

![EDR representation of system entities relation](https://github.com/GabrielDantasDs/ticket-management/blob/master/public/uml.png)

**Requirements to build an run**
- Laravel 11.9 >
- PHP 8.2 >
- Mysql 8.0

** Development Machine specs ** 
- Intel i5 7th gen
- 20GB of RAM memory
- 500GB sdd storage
- Linux Ubuntu 22.04.4 LTS
- 64 bits arc

**Steps to build and run Project**
In a linux/MacOs terminal or WSL2 in windows: 
 1. Run: composer install
 2. Setup your env, define the database credentials
 3. Run DB migrations: php artisan migrate
 4. Run DB seeder: php artisan db:seed, this is will seed your database with pre defined records in Situations table
 5. Set up your server, run: php artisan serve

**Before Start**
1. In specificantion documents i dont find informations about possible categories, thenfore when you start system there none, you will need create your owns before create a ticket.

**About Development**
- This project use blade for frontend, so is basically html and css.
- Using OOP here is not really necessary, Eloquent models can handle with almost all operations, but i try include some concepts of OOP when manipulate Tickets objects.

****************************************************************************

Gerenciamento de Tickets
Sobre o Projeto

Este é um projeto simples para gerenciamento de tickets de suporte.

O sistema é composto pelas seguintes entidades:

    Tickets (entidade principal)
    Categorias
    Situações (podem ser interpretadas como "status")

Os Tickets e Categorias possuem operações completas de CRUD.

As Situações são codificadas diretamente, com os seguintes valores possíveis:

    Novo -> Quando o ticket é recém-criado.
    Pendente -> Quando o ticket está em processo de resolução.
    Resolvido -> Quando o ticket foi resolvido.

Diagrama EDR de Representação das Relações entre Entidades do Sistema:

![Representação em EDR](https://github.com/GabrielDantasDs/ticket-management/blob/master/public/uml.png)
Requisitos para Compilar e Executar

    Laravel 11.9 ou superior
    PHP 8.2 ou superior
    MySQL 8.0

Especificações da Máquina de Desenvolvimento

    Intel i5 7ª Geração
    20GB de Memória RAM
    Armazenamento SSD de 500GB
    Linux Ubuntu 22.04.4 LTS
    Arquitetura de 64 bits

Passos para Compilar e Executar o Projeto

No terminal Linux/MacOS ou usando o WSL2 no Windows:

    Execute: composer install
    Configure seu arquivo .env e defina as credenciais do banco de dados.
    Execute as migrações do banco de dados: php artisan migrate
    Popule o banco de dados: php artisan db:seed - isso vai preencher a tabela de Situações com registros pré-definidos.
    Configure o servidor executando: php artisan serve

Antes de Começar

Nos documentos de especificação, não havia informações sobre as possíveis categorias. Portanto, ao iniciar o sistema, não haverá categorias definidas. Você precisará criar suas próprias categorias antes de criar um ticket.
Sobre o Desenvolvimento

Este projeto utiliza Blade para o frontend, então é basicamente HTML e CSS. Embora o uso de programação orientada a objetos (POO) não seja estritamente necessário aqui, pois os modelos Eloquent lidam com a maioria das operações, tentei incluir alguns conceitos de POO ao manipular objetos de Tickets.
