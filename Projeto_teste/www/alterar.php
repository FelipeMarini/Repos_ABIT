<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alterar.css">
    <title>Alterar</title>
</head>
<body>
    <main>

        <h1 class="cadastre">alterar dados</h1>

        <div class="cadastro-box">

           <img src="logo.png" alt="logo da Sinditêxtil" class="logo"/>


           <form class="form-flex" action="#">

              <div class="input-flex">
                    <label for="CNPJ">*CNPJ:</label>
                    <input class="input" type="text" id="CNPJ" name="cnpj"/>
              </div>
              
              <div class="input-flex">
                    <label for="RZ">*Razão Social:</label>
                    <input class="input" type="text" id="RZ" name="rz"/>
              </div>
              
              <div class="input-flex">
                    <label for="NF">*Nome Fantasia:</label>
                    <input class="input" type="text" id="NF" name="nf"/>
              </div>
              
              <div class="input-flex">
                    <label for="Data">*Data de Fundação:</label>
                    <input class="input" type="text" id="Data" name="data"/>
              </div>
              
              <div class="input-flex">
                    <label for="Capital">*Capital Social($):</label>
                    <input class="input" type="number" id="Capital" name="capital"/>
              </div>


              
              <h1 class="endereco">Endereço</h1>

              <div class="input-flex">
                    <label for="CEP">*CEP:</label>
                    <input class="input" type="text" id="CEP" name="cep"/>
              </div>

              <div class="input-flex">
                    <label for="Logr">*Logradouro:</label>
                    <input class="input" type="text" id="Logr" name="logr"/>
              </div>

              <div class="input-flex">
                    <label for="Numero">*Número:</label>
                    <input class="input" type="text" id="Numero" name="numero"/>
              </div>

              <div class="input-flex">
                    <label for="Compl">Complemento:</label>
                    <input class="input" type="text" id="Compl" name="compl"/>
              </div>

              <div class="input-flex">
                    <label for="Bairro">*Bairro:</label>
                    <input class="input" type="text" id="Bairro" name="bairro"/>
              </div>

              <div class="input-flex">
                    <label for="Cidade">*Cidade:</label>
                    <input class="input" type="text" id="Cidade" name="cidade"/>
              </div>

              <div class="input-flex">
                    <label for="Estado">*Estado:</label>
                    <input class="input" type="text" id="Estado" name="estado"/>
              </div>

              
              <h1 class="contato">Contato</h1>

              <div class="contato-flex">
                    <label for="Nome">*Nome:</label>
                    <input class="input-contato" type="text" id="Nome" name="nome"/>
              </div>

              <div class="contato-flex">
                    <label for="Email">*Email:</label>
                    <input class="input-contato" type="email" id="Email" name="email"/>
              </div>


           </form>


           <p class="text">* Campos Obrigatórios</p>


           <div class="buttons">

              <button class="btn-voltar" type="submit">Voltar</button>
              
              <button class="btn-cadastrar" type="submit">Alterar</button>

           </div>


        </div>

        </main>

</body>
</html>