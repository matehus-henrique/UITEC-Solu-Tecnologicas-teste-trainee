<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Teste Desenvolvedor Júnior</title>
</head>
<body>
    <header class="header">
        <h1 class="title">Teste para Desenvolvedor Trainee</h1>
    </header>
    <nav class="navigation">
        <ul>
            <li><a href="#descricao">Descrição do Desafio</a></li>
            <li><a class="test-link" href="{{ route('products.create')}}">Iniciar Teste</a></li>
        </ul>
    </nav>
    <div class="container">
        <section id="descricao" class="description">
            <h2>Descrição do Desafio</h2>
            Descrição do Desafio: CRUD de Produto com Angular, TypeScript, Laravel e 
            PostgreSQL
        </section>
        <section id="teste" class="test">
            <h2>Teste de CRUD de Produto</h2>
            
                        Operações CRUD: Criação, leitura, atualização e exclusão de produtos.
            Campos: Nome, categoria, valor, data de vencimento, quantidade em estoque e perecibilidade.
            Frontend amigável: Interface para gerenciar produtos, incluindo formulários e listagem.
            Backend RESTful: API para conectar o frontend ao PostgreSQL.
            Banco de dados: Armazenamento dos produtos com tabelas e relacionamentos.
            Sugestões: Validações, boas práticas de codificação, uso de bibliotecas compatíveis e documentação.
        </section>
    </div>
</body>
</html>
