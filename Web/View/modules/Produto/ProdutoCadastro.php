
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset >
        <center> <legend style="color: BLACK;">CADASTRO DE PRODUTO</legend>
            
            
            <center>  <input type="hidden" value="<?= $model->id ?>" name="id" />

            <center>  <label for="nome" style="color: white;">Nome:</label>
            <center> <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" style="background:white; color:black; height:20px;"/>

            <center> <label for="descricao" style="color: white;">Descrição:</label>
            <center> <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style="background:white; color:black; height:20px;"/>

            <center> <label for="preco" style="color: white;">Preço:</label>
            <center><input name="preco" id="preco" type="is_double" value="<?= $model->preco ?>" style="background:white; color:black; height:20px;"/>

            <br>
            <center><button type="submit"  style="background-color:white ;  height:35px; width:65px; font-size:17px;color:black">Enviar</button>

        </fieldset>
    </form>    
<br>
    <center><a href="/produto"><button style="height: 85px; width:350px; font-size:25px; background-color:white;border: 1 solid black;color:black" >Ver listagem de produtos</button></a></center>
    

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