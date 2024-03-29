<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// veza sa predstavom
use App\Models\Predstava;


class Glumac extends Model
{
    use HasFactory;

    protected $fillable = [
        'imeGlumca',
        'prezimeGlumca',
        'opisUloge'
    ];

    public function predstave(){
        return $this->hasMany(Predstava::class);
    }
}
