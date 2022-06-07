<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <form action="/funcionario/save" method="post">
        <fieldset>
        <center><legend style=" color:black">CADASTRO DE FUNCIONÁRIOS</legend>

        <center><input type="hidden" value="<?= $model->id ?>" name="id" />

        <center> <label for="nome" style="color: black;">Nome:</label>
            <center> <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" style="background:white; color:black; height:20px;" />

            <center>  <label for="rg" style="color: black;">RG:</label>
            <center> <input name="rg" id="rg" type="number" value="<?= $model->rg ?>" style="background:white; color:balck; height:20px;" />

            <center> <label for="cpf" style="color: black;">CPF:</label>
            <center> <input name="cpf" id="cpf" type="number" value="<?= $model->cpf ?>" style="background:white; color:balck; height:20px;" />

            <center> <label for="data_nascimento" style="color: black;">Data Nascimento:</label>
            <center> <input name="data_nascimento" id="data_nascimento" type="date" value="<?= $model->data_nascimento ?>" style="background:white; color:black; height:20px;" />

            <center><label for="email" style="color: black;">E-mail:</label>
            <center><input name="email" id="email" type="email" value="<?= $model->email ?>" style="background:white; color:black; height:20px;" />

            <center><label for="telefone" style="color: black;">Telefone:</label>
            <center><input name="telefone" id="telefone" type="tel" value="<?= $model->telefone ?>" style="background:white; color:black; height:20px;" />

            <center><label for="endereco" style="color: black;">Endereço:</label>
            <center><input name="endereco" id="endereco" type="text" value="<?= $model->endereco ?>" style="background:white; color:balck; height:20px;"/>
            <br>
            <center><button type="submit" style="background-color:white ; height:35px; width:65px; font-size:17px;color:black">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/funcionario"><button style="height: 85px; width:350px; font-size:25px; background-color:white;border: 1 solid black;color:black" >Ver listagem de funcionários</button></a></center>

    <a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:white;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:black" >Voltar para página inicial</button></a>

<style>
        body{
            background-color:  #5966AB;
        }
        


    </style>

</body>
</html>