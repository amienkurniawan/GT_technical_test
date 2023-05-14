<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Peserta extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'peserta';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'email'];

    // append data accessor

    protected $appends = ['photo_url'];
    // function accessor 

    protected function photoUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => asset('storage/' . $this->photo)
        );
    }

    public function nilai()
    {
        return $this->belongsTo(Nilai_Peserta::class, 'id_peserta', 'id');
    }
}
