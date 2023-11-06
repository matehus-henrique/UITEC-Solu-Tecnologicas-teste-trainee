# Teste de Emprego - Documentação

Este é um teste de emprego para a posição de desenvolvedor júnior. Neste teste, você deve criar um sistema CRUD (Create, Read, Update, Delete) para gerenciar produtos. Abaixo estão os detalhes e requisitos do teste.

## Descrição do Desafio

### Requisitos do CRUD de Produto:

1. Operações CRUD: Criação, leitura, atualização e exclusão de produtos.
2. Campos: Nome, categoria, valor, data de vencimento, quantidade em estoque e perecibilidade.
3. Frontend amigável: Interface para gerenciar produtos, incluindo formulários e listagem.
4. Backend RESTful: API para conectar o frontend ao PostgreSQL.
5. Banco de dados: Armazenamento dos produtos com tabelas e relacionamentos.



## Estrutura do Projeto

### 1. Listagem de Produtos:

Rota: /
- Permite visualizar a lista de produtos com suas informações.
- Fornece links para visualizar, editar e excluir cada produto.
- Permite a criação de um novo produto.
- 
  ![image](https://github.com/matehus-henrique/UITEC-Solu-Tecnologicas-teste-trainee/assets/53536966/69427d62-a285-4301-9aa2-543510fa10cf)



### 2. Visualizar Produto:

Rota: /products/show/{id}
- Exibe detalhes de um produto específico, incluindo seu nome, categoria, valor, data de vencimento, quantidade em estoque e se é perecível.
- Fornece links para editar ou excluir o produto.

 ![image](https://github.com/matehus-henrique/UITEC-Solu-Tecnologicas-teste-trainee/assets/53536966/5fcaae49-f8a9-4f44-ac01-9faa8406b2f4)



### 3. Editar Produto:

Rota: /products/edit/{id}
- Permite editar os campos de um produto existente, como nome, categoria, valor, data de vencimento, quantidade em estoque e perecibilidade.
- Salva as alterações no banco de dados.

 ![image](https://github.com/matehus-henrique/UITEC-Solu-Tecnologicas-teste-trainee/assets/53536966/2e16c495-bc2f-448a-8868-935b138312be)



### 4. Adicionar Produto:

Rota: /products/create
- Permite adicionar um novo produto com campos como nome, categoria, valor, data de vencimento, quantidade em estoque e perecibilidade.
- Salva o novo produto no banco de dados.

![image](https://github.com/matehus-henrique/UITEC-Solu-Tecnologicas-teste-trainee/assets/53536966/9919ee2d-7661-45d4-b540-d7dbdfac2b0f)



## Uso das Rotas

- /: Rota principal que exibe a lista de produtos e fornece opções para adicionar, visualizar, editar ou excluir produtos.
- /products/show/{id}: Rota para visualizar os detalhes de um produto específico.
- /products/edit/{id}: Rota para editar um produto existente.
- /products/create: Rota para adicionar um novo produto.

## Requisitos de Tecnologia

Certifique-se de que seu ambiente de desenvolvimento tenha as seguintes tecnologias instaladas:

- PHP - back-end
- Laravel Framework - back-end
- Banco de Dados PostgreSQL

## Como Executar o Projeto

## Como Executar o Projeto

1. Clone o repositório do projeto em seu ambiente de desenvolvimento:
 
   git clone https://github.com/matehus-henrique/UITEC-Solu-Tecnologicas-teste-trainee.git

2.  Navegue até a pasta raiz do projeto: cd nome-do-projeto
   
3. Instale as dependências do Laravel usando o Composer: composer install

4.  Configure o banco de dados no arquivo .env e execute as migrações para criar as tabelas necessárias:
    Abra o arquivo .env no diretório do projeto e configure as informações de conexão com o banco de dados, como o nome do banco de dados, o usuário e a senha.

    Depois de configurar o arquivo .env, execute as migrações para criar as tabelas necessárias no banco de dados: php artisan migrate

5. Execute o servidor de desenvolvimento do Laravel:php artisan serve
    Isso iniciará o servidor em http://localhost:8000.





