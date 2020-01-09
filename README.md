## Projeto processo seletivo GG educacional - API

Projeto criado utilizando o ambiente de desenvolvimento <a href="https://laradock.io" target="_blank">Laradock.</a>

Para executar o projeto é necessário subir os containers do php e do mysql do laradock (dentro da pasta 'laradock'):

```
docker-compose up -d nginx mysql
```
<strong>Ao executar o projeto pela primeira vez é necessário acessar o container para executar as migrations e as seeds.</strong>

Para rodar comandos dentro do container (como composer install, comandos do artisan, etc) utilizar o seguinte comando:

```
docker-compose exec workspace bash
```

Atualize as bibliotecas do projeto que estão no composer (dentro do container workspace:

```
composer install
```

Para rodar o banco do projeto execute o seguinte comando (talvez precise criar a database grancursos):

```
php artisan migrate --seed
```

## Funcionamento do projeto

Por ser uma API o projeto não tem telas para gerenciamento dos dados, apenas disponibiliza os serviços para serem consumidos por aplicações externas.

É possivel acessar uma pequena documentação da API criada a partir do <a href="https://swagger.io/" target="_blank">swagger</a> para verificar os serviços disponíveis, bem como executar testes nos mesmos.

O endereço da documentação da API pode variar de acordo com as configurações do servidor, no ambiente do laradock padrão é possível acessa-lá pelo seguinte endereço:

```
http://localhost/api/documentation
```


![alt text](https://raw.githubusercontent.com/danieldrduarte/gg-web/master/img/1.png)
