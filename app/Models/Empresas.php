<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $table = 'empresas';
    protected $fillable = ['user_id', 'fantasia', 'razao', 'cnpj', 'email', 'atividade', 'rua', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado', 'ddd', 'telefonePrincipal', 'telefoneSecundario', 'inscricaoMunicipal', 'inscricaoEstadual', 'cnae'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function atividades()
    {
        return $this->hasMany(Atividades::class);
    }

    public function configSetores()
    {
        return $this->hasMany(ConfigSetores::class);
    }

    public function configAtividades()
    {
        return $this->belongsTo(ConfigAtividades::class);
    }

    public function financeiroReceber()
    {
        return $this->hasMany(FinanceiroReceber::class);
    }

    public function financeiroPagar()
    {
        return $this->hasMany(FinanceiroPagar::class);
    }
}
