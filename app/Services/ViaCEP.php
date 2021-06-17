<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ViaCEP
{

    //consulta CEP no via cep

    public function buscar(string $cep)
    {
        //troquei o valor fixo do cep que veio, pelo dinamico que esta vindo do cliente usando (/%s) e passando o ($cep) a frente
        $url = sprintf('https://viacep.com.br/ws/%s/json', $cep);

        $reposta = Http::get($url);

        if ($reposta->failed()) {
            return false;
        }

        $dados = $reposta->json();

        if (isset($dados['erro']) && $dados['erro'] === true) {
            return false;
        }

        return $dados;
    }
}
