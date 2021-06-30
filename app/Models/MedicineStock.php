<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineStock extends Model
{
    use HasFactory;

    protected $table= 'medicine_stocks';

    protected $primaryKey = 'medicine_stock_id';

    protected $fillable = [
        'medicine_id',
        'stock_amount',
        'expiry_date'
    ]

    public function medicine(){
        return $this->belongsTo(Medicine::class);
    }
}
