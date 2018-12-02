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

### Implementação

*O sistema possui 4 view: Login, Cadastro, edição e Listagem. Foram criadas duas migrations uma para usuário(apenas admin) e uma para pessoa física. O admin foi criado através de uma seed do laravel. O laravel fornece automaticamente as rotas e controllers para fins de autenticação, e estas não foram customizadas. Para a view de cadastro, foram feitas validações(cpf) através das requests, com o auxilio de plugins. Esta view tratá da inserção de pessoa física, que por sua vez possui uma Migration, uma Model, uma Request e um Controller. Na sua model é chamada uma trait que foi criada para a criação dos uuid's. Ao preencher o formulário corretamente o método Store do PessoaController será chamado através de um POST para a url /inserir, ao salvar os dados no banco, o usuário é redirecionado para a home com uma mensagem de sucesso. Na view de listagem é chamado o método Index de pessoa controller, através de um GET na url /index passando um array com todos os dados existentes na tabela de pessoa física, com paginação(10 elementos por página).Na mesma view, para cada dado, a exclusão é feita através de um POST, passando o id da pessoa física a ser excluída na url listar/delete/{id}. A lógica de exclusão corresponde ao método Destroy de PessoaController. Na edição, que também é feita a partir da view de listagem, foram criados 2 métodos no pessoa controller. O primeiro(edit) é chamado através de um GET passando o id da pessoa física para a url /editar/{id}, este método chama a view de edição(identica a home) com os campos do formulário já preenchidos. Feitas as alterações nos campos do formulário da view de inserção, o usuário será redirecionado para a mesma url /editar/{id}, porém através de um POST. Feito isto ele será redirecionado à view de listagem.
