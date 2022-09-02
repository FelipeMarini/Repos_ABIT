const queryString = window.location.search;
        
console.log(queryString);

const urlParams = new URLSearchParams(queryString);

console.log(urlParams);


const numero = urlParams.get('cnpj')


    async function FetchData() {

        try {
            const response = await fetch(`https://brasilapi.com.br/api/cnpj/v1/${numero}`, {
                method: 'GET',
                credentials: 'same-origin'
            });
            const dados = await response.json();
            return dados;
        } 
        catch (error) {
            console.error(error);
        }
    }

    async function ShowData() {
        
        var resposta = await FetchData();
        
        var data = [resposta.cnpj, resposta.razao_social, resposta.logradouro, resposta.capital_social];

        console.log(data)

        document.getElementById("CNPJ").innerHTML = `CNPJ: ${data[0]}`;
        document.getElementById("RZ").innerHTML = `Razão Social: ${data[1]}`;
        document.getElementById("END").innerHTML = `Endereço: ${data[2]}`;
        document.getElementById("CS ").innerHTML = `Capital Social: ${data[3]}`;

    }

    ShowData()

