<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    use HasFactory;

    //Define os campos que podem ser gravados
    protected $fillable = ['nome_completo', 'cpf', 'email', 'telefone', 'complemento', 'logradouro', 'numero', 'bairro', 'cidade', 'estado', 'cep', 'codigo_ibge', 'foto_usuario'];

    //Define  os campos que serão usados na serialização/os campos visiveis na aplicação
    protected $visible = ['nome_completo', 'cidade', 'foto_usuario', 'reputacao'];

    //Adiciona campos na serialização
    protected $appends = ['reputacao'];

    //Monta a imagem do usuario
    public function getFotoUsuarioAttribute(string $valor)
    {
        return config('app.url') . '/' . $valor;
    }

    //Retorna a reputação randomica
    public function getReputacaoAttribute($valor)
    {
        return mt_rand(1, 5);
    }

    //Busca diaristas por código ibge
    static public function buscaPorCodigoIbge(int $codigoIbge)
    {
        return self::where('codigo_ibge', $codigoIbge)->limit(6)->get();
    }


    //Retorna a quantidade de diaristas
    static public function quantidadePorCodigoIbge(int $codigoIbge)
    {
        $quantidade = self::where('codigo_ibge', $codigoIbge)->count();

        return $quantidade > 6 ? $quantidade - 6 : 0;
    }
}
