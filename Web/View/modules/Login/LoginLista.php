









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de funcionários</title>
</head>
<body>
<h1 align="center" style="color:white">Listagem de Usuarios</h1>
<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
    <th style="color:white; font-size:15px">Excluir</th>
        <th style="color:white">Id</th>
        <th style="color:white">Nome / Editar</th>
        <th style="color:white">Usuario</th>
        <th style="color:white">Senha(Criptografada)</th>
        
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
    <td> <a style="color:red; text-decoration: none;" href="/login/delete?id=<?= $item['id'] ?>"><b> X</b> </a>  </td>
        <td style="color:white"><?= $item['id'] ?></td>
        <td><a style="text-decoration: none; color:aqua;" href="/login?id=<?= $item['id'] ?>"><b> <?= $item['nome'] ?> </b></a></td>
        <td style="color:white"><?= $item['email'] ?></td>
        <td style="color:white"><?= $item['senha'] ?></td>
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="10"><b style="color:white;font-size: 30px;">Nenhum registro encontrado.</b></td>
            </tr>
        <?php endif ?>

</table>

<br>
<br>
<center><a href="/login"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;color:white;border: 1 solid black;" >Voltar ao Login</button></a></center>

<a href="/inicio"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:white" >Voltar para página inicial</button></a>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
        text-align: center;
        background-color: #484d50;
        
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
        background-color: #2e2e2e;
    }
</style>
</body>
</html>





















































































































