<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigSetores extends Model
{
    use HasFactory;
    protected $table = 'config_setores';
    protected $fillable = ['descricao'];

    //public function configTarefas()
    //{
    //    return $this->hasMany(ConfigTarefas::class);
    //}
}
