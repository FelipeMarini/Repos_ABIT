<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/boleto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet"> 
    <title>Boleto</title>
</head>
<body>

   <?php

   $cnpj = $_GET["cnpj"];

   $url = "https://brasilapi.com.br/api/cnpj/v1/".$cnpj;

   $curl = curl_init($url);

   curl_setopt($curl, CURLOPT_URL, $url);

   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

   $response = curl_exec($curl);

   curl_close($curl);

   $dados = json_decode($response);

   ?>

      <main>

        <div class="dados-box">

           <h1>dados da empresa</h1>

           <div class="container-flex">
              
              <div class="dados">
                    <ul class="list">
                       <li class="cnpj">CNPJ: <?php echo $dados->cnpj;?></li>
                       <li>Razão Social: <?php echo $dados->razao_social;?></li>
                       <li>Endereço: <?php echo $dados->logradouro;?></li>
                       <li>Capital Social: <?php echo $dados->capital_social;?></li>
                    </ul>
              </div>
              
              
              <div class="alterar">
                    <img class="logo" src="./img/logo.png" alt="logo da Sinditêxtil"/>
                    <button class="btn-gerar" type="submit">Gerar Boleto</button>
              </div>
           
           
           </div>

           <p class="text">Geraremos um boleto do valor da contribuição assistencial de sua empresa, de acordo com a legislação vigente.</p>

           <button class="btn-alterar" type="submit">Alterar Dados</button>

        </div>

      </main>

   </body>

</html>