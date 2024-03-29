<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// veza sa predstavom
use App\Models\Predstava;

class Reditelj extends Model
{
    use HasFactory;

    protected $fillable = [
        'imeReditelja',
        'prezimeReditelja',
        'godine'
    ];


    public function predstave(){
        return $this->hasMany(Predstava::class);
    }

}
