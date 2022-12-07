<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cyber extends Model
{
    use HasFactory;

    protected $table = "tb_cyber";
    
    protected $primaryKey='ID';

    protected $fillable = [
        'Usuario',
        'NumeroCompu',
        'Tiempo',
    ];

    public function getCyber(){
        return cyber::all();
    }

    public function getCyberID($id){
        return cyber::find($id);
    }

}
