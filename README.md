Código-fonte das lives sobre [Laravel Master Week]().<br>

## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 20 ou superior - Conferir a versão: node -v
* GIT -Cnferir a instalação: git -v
* MySQL 8 ou superior - Conferir a versão: mysql --version

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo ".env" as credenciais do banco de dados.<br>

Instalar as dependências do PHP.
```
composer install
```

Gerar a chave no arquivo ".env" - APP_KEY.
```
php artisan key:generate
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as migrations para criar a base de dados e as tabelas.
```
php artisan migrate
```

Executar as seed para cadastrar registro de teste.
```
php artisan db:seed
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Executar as blibliotecas Node.js.
```
npm run dev
```

Acessar o conteúdo criado com Laravel.
```
http://127.0.0.1:8000
```

Usuário: cesar@celke.com.br<br>
Senha: 123456A#

## Sequencia para criar o projeto
Criar o projeto com Laravel.
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Acessar o conteúdo criado com Laravel.
```
http://127.0.0.1:8000
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as blibliotecas Node.js.
```
npm run dev
```

Instalar o framework Bootstrap.
```
npm i --save bootstrap @popperjs/core
```

Instalar o sass.
```
npm i --save-dev sass
```

Criar a Controller
```
php artisan make:controller NomeController
```
```
php artisan make:controller UserController
```

Criar a View.
```
php artisan make:view nome
```
```
php artisan make:view users/show
```

Executar as migration para criar a base de dados e as tabelas.
```
php artisan migrate
```

Criar Seed para cadastrar registro de teste.
```
php artisan make:seeder NomeSeeder
```
```
php artisan make:seeder UserSeeder
```

Executar as seed para cadastrar registro de teste.
```
php artisan db:seed
```

## Como usar o GitHub

Inicializar um novo repositório Git.
```
git init
```

Adicionar todos os arquivos modificados no staging area - área de preparação.
```
git add .
```

Commit representa um conjunto de alterações.
```
git commit -m "Base do projeto"
```

Verificar em qual branch está.
```
git branch
```

Renomear a branch atual no Git para main.
```
git branch -M main
```

Adicionar um repositório remoto ao repositório local.
```
git remote add origin https://github.com/celkecursos/Laravel-Master-Week.git
```

Enviar os commits locais para um repositório remoto.
```
git push -u origin main
```