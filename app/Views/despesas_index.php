<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Despesas</title>
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
        
        a {
            display: inline-block;
            text-align: center;
            margin: 10px 10px 10px 0;
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            border-radius: 3px;
        }

        .edit-button {
            background-color: #32CD32; /* Verde */
        }

        .delete-button {
            background-color: #FF0000; /* Vermelho */
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        
        th, td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #007BFF;
            color: #fff;
        }
        
        td:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Despesas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($despesas as $despesa): ?>
                <tr>
                    <td><?= $despesa['id'] ?></td>
                    <td><?= $despesa['descricao'] ?></td>
                    <td><?= $despesa['valor'] ?></td>
                    <td><?= $despesa['data'] ?></td>
                    <td>
                        <a href="<?= site_url("despesas/edit/{$despesa['id']}") ?>" class="edit-button">Editar</a>
                        <a href="<?= site_url("despesas/delete/{$despesa['id']}") ?>" onclick="return confirm('Excluir?')" class="delete-button">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= site_url('despesas/create') ?>">Adicionar</a>
</body>
</html>
