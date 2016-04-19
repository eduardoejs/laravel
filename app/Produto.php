<?php

namespace EJS;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao'];
    
    public function avaliacoes()
    {
        return $this->hasMany('EJS\AvaliacaoProduto');
    }
    
    public function tags()
    {
        return $this->belongsToMany('EJS\Tag');
    }
}
