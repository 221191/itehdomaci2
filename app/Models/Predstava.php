<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// veza sa rediteljem
use App\Models\Reditelj;
// veza sa glumcem
use App\Models\Glumac;
class Predstava extends Model
{
    use HasFactory;

    protected $fillable = [
        'sifraPredstave',
        'imePredstave',
        'reditelj_id'
    ];


    public function reditelj(){
        return $this->belongsTo(Reditelj::class);
    }

    public function glumci(){
        return $this->hasMany(Glumac::class);
    }
}
