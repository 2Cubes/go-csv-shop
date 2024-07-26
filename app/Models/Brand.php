<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    /**
     * Атрибуты, которые могут быть массово назначены.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Определяет отношение с товарами.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
