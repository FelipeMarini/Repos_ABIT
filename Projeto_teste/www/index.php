<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <title>Home</title>
</head>

<body>
    
    <div class="main-content-home">

        <div class="acesso-box">

            <img class="logo-home" src="./img/logo.png" alt="logo da Sinditêxtil"/>   

            <h1>Bem vindo a Sindi<span>têxtil</span></h1>
            
                <form class='campo-home' action="boleto.php" method="get">
        
                    <label for="CNPJ">Insira o seu CNPJ:</label>
                    <input 
                        class="input-home" 
                        type="text" 
                        name="cnpj" 
                        placeholder="CNPJ"
                    />
                    
                    <button class="btn-home" type="submit">Entrar</button>
                
                </form>
                
            
        </div>

    </div>        


    
    <!-- <form action="welcome.php" method="get">
        
        Name GET: <input type="text" name="name"><br>
        Cnpj GET: <input type="text" name="cnpj"><br>
        
        <input type="submit">
    
    </form> -->



</body>

</html>