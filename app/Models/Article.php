<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'img', 'user_id'
    ];

    //Funzioni di relazione

    public function user(){
        return $this->belongsTo(User::class);  // Stiamo dicendo che un articolo appartiene a un solo utente
    }
}
