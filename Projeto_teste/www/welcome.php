<html>
    <body>

        Welcome <?php echo $_GET["name"]; ?> <br>

        Your CNPJ via GET method is: <?php echo $_GET["cnpj"]; ?> <br>

        <br>
        
        <?php

            $cnpj = $_GET["cnpj"];

            $url = "https://brasilapi.com.br/api/cnpj/v1/".$cnpj;

            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_URL, $url);

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);

            curl_close($curl);

            $dados = json_decode($response);

            echo "Cnpj: $dados->cnpj<br>";
            echo "Endereço: $dados->logradouro<br>";
            echo "Capital Social: $dados->capital_social<br>";
            echo "Razão Social: $dados->razao_social<br>";

        ?>

    </body>

</html> 