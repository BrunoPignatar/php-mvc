<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <form action="/signin/save" method="post">
        <fieldset>

            <legend style=" color:white">Cadastro do Usuários</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome" style="color: white;">Nome:</label>
            <input name="nome" id="nome" type="text" style="background:black; color:white; height:20px;" />

            <label for="email" style="color: white;">Email:</label>
            <input name="email"  id="email"  type="text" style="background:black; color:white; height:20px;" />

            <label for="senha" style="color: white;">Senha:</label>
            <input name="senha" id="senha" type="password" style="background:black; color:white; height:20px;" />
            <br>
            <button type="submit" style="background-color:black ; height:35px; width:100px; font-size:17px;color:white">Cadastrar</button>

            <div style="display: flex;">
            <a href="/login"><p style="color: white;font-size: 8; margin-right: 10px;">Login</p></a>
            <a href="/login"><p style="color: white;font-size: 8; margin-left: 10px;">Esqueci a senha</p></a>
            </div>
        </fieldset>
    </form>

<style>
        body{
            background-color: #003f69;
        }
        


    </style>

</body>
</html>