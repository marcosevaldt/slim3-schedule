# Slim 3 + Doctrine

Para criação desta aplicação foi utilizado Slim 3 MicroFramework, para modelagem
do banco de dados foi utilizado o Doctrine, e para renderização das view o Twig.


## Instalação
Após clonar este repositório:
* Não esquecer de instalar os componentes com composer install
* `Adicionar permissão de escrita para todo o diretório/subdiretório de /cache/`
* Importar o banco de dados que está em `dump/`, arquivo init.sql
* Ajustar em `app/settings` os dados de conexão ao banco de dados
* Já está com os proxies do doctrine dentro de `cache/proxies`, porém se for necessário, executar o comando
`php vendor/bin/doctrine orm:generate-proxies` dentro da raíz.


## Organização da aplicação
* `app`: Aplicação
* `app/src`: Todas clases dentro do namespace 'App'
* `app/templates`: Arquivos de template do Twig
* `cache/twig`: Pasta de arquivos de cache do twig
* `log`: Arquivos de Log
* `public`: Pasta webroot da aplicação
* `dump`: Pasta que contém o dump do banco de dados MySQL

## Arquivos importantes
* `public/index.php`: Arquivo de entrada da aplicação
* `app/settings.php`: Arquivo de configuração da aplicação.
* `app/dependencies.php`: Serviços/DIC
* `app/middleware.php`: Middleware da aplicação
* `app/routes.php`: Todas as rotas da aplicação


## Informações gerais sobre o sistema
* Dados de acesso: login: `admin@admin.com`, senha: `123456`.
* Esta aplicação está dividida em dois níveis de permissão: `admin` e `convidado`.
* Novos usuários serão criados como convidado por padrão, e só terão acesso ao agendamento das salas e verificação dos seus agendamentos.
* O usuário admin, tem acesso ao CRUD das salas, e do CRUD dos usuários bem como pode agendar e verificar seus agendamentos.
