<?php

namespace EJS;

use Illuminate\Database\Eloquent\Model;

class AvaliacaoProduto extends Model
{
    protected $fillable = ['produto_id', 'nota', 'comentario'];
    
    public function produto()
    {
        return $this->belongsTo('EJS\Produto');
    }
}
