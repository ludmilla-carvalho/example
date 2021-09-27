# Pinhero Neto

## Requimentos

- Composer
- Npm installer
- MySql

## Instalação

# GIT
Clonar o repositório do Bitbucket
```
git clone git@bitbucket.org:pravy_ti/pinheiro_neto_back.git

cd pinheiro_neto_back

```

# Composer
Instala as dependências e bibliotecas do PHP
```
composer install
```

# NPM
Instala as dependências e bibliotecas
```
npm install
npm run dev (desenvolvimento)
npm run prod (produção)
```

# .Env
Arquivo de configuração da aplicação
Copiar o arquivo com o seguinte comando:
```
cp .env.example .env
```
Verificar as configurações de banco de dados e demais serviços


# Banco de dados
Rodar o seguinte comando para criação das tabelas
```
php artisan migrate --seed
```
Para atualizar o banco (apenas usado em desenvolvimento)
```
php artisan migrate:fresh --seed
```


## Configurações adicionais
```
chmod 775 -R storage
php artisan storage:link
```

## Acesso ao admin

Um usuário administrador já está previamente cadastrado no banco de dados
**Login** ludmilla.carvalho@pravy.com.br
**Senha** password

## Cache
Usar somente em produção
```
php artisan config:cache
```