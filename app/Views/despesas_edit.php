<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Despesa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        h1 {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 0;
        }
        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }
        
        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
        }
        
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Editar Despesa</h1>
    <form action="<?= site_url("despesas/update/{$despesa['id']}") ?>" method="post">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="<?= $despesa['descricao'] ?>" required>
        
        <label for="valor">Valor:</label>
        <input type="number" step="0.01" name="valor" id="valor" value="<?= $despesa['valor'] ?>" required>
        
        <label for="data">Data:</label>
        <input type="date" name="data" id="data" value="<?= $despesa['data'] ?>" required>
        
        <button type="submit">Atualizar</button>
    </form>
    <a href="<?= site_url('despesas') ?>">Voltar</a>
</body>
</html>
