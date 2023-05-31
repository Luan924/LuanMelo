<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page">
        <div class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" id="senha" placeholder="Digite seu e-mail" />
            <a href="/">Ainda nao tenho conta</a>
            <input type="button" onclick="logar()" value="Acessar" class="btn" />
</div>
    </div>

    <script>
        function logar(){
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;

            if(email = "luan924@gmail.com" && senha = "1234"){
                window.location = "pagina.php";
            }else{
                alert("Err");
            }
        }
    </script>

</body>
</html>