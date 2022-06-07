<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>
<body>

<h1 align="center" style="color:white" >Listagem de Produto</h1>
<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
        <th style="color:white; font-size:15px">Excluir</th>
        <th style="color:white">Id</th>
        <th style="color:white">Nome / Editar</th>
        <th style="color:white">Descrição</th>
        <th style="color:white">Preço</th>
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a style="color:red; text-decoration: none;" href="/produto/delete?id=<?= $item['id'] ?>"><b> X</b> </a>  </td>
        <td style="color:black"><?= $item['id'] ?></td>
        <td><a style="text-decoration: none; color:aqua;" href="/produto/form?id=<?= $item['id'] ?>"><b> <?= $item['nome'] ?> </b></a></td>
        <td style="color:black"><?= $item['descricao'] ?></td>
        <td style="color:black">R$<?= $item['preco'] ?></td>
        
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
            <td colspan="10"><b style="font-size: 30px; color:black">Nenhum registro encontrado.</b></td>
            </tr>
        <?php endif ?>

</table>

<br>
<br>
<center><a href="/produto/form"><button style="height: 85px; width:350px; font-size:25px; background-color:white;border: 1 solid black;color:black" >Adicionar mais produtos</button></a></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:white;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:black" >Voltar para página inicial</button></a>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
        text-align: center;
        background-color: gray;
        
        
        
        
        
    }
    h1{
        font-size: 35;
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        background-color:  #5966AB;
        
    }
</style>
</body>
</html>