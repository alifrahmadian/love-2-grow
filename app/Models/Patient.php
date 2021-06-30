<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $primaryKey = 'patient_id';
    // protected $foreignKey = 'user_id';

    protected $fillable = [
        'user_id',
        'full_name',
        'nickname',
        'gender',
        'date_of_birth',
        'gestation',
        'birth_weight',
        'food_allergy',
        'drug_allergy',
        'other_allergy',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
