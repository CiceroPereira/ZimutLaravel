### Pré requisitos para rodar o laravel

* Composer Instalado
* PHP 7.0.1
* Variável de ambiente do PHP


### Comandos necessários após o clone

* Copiar o conteúdo do .env.example e colorcar num novo arquivo .env
* Configurar a conexão de banco do arquivo .env

```bash
> composer dump-autoload
> composer install
> php artisan key:generate
> php artisan config:clear
> php artisan migrate
> php artisan db:seed
> php artisan cache:clear
> php artisan serve
> Abri o navegador em Localhost:8000
```
* Após os passos acima o login pode ser feito com as seguintes credenciais: email: admin@gmail.com senha: admin
