<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Атрибуты, которые могут быть массово назначены.
     *
     * @var array
     */
    protected $fillable = [
        'sku',
        'name',
        'description',
        'price',
        'stock',
        'brand_id',
        'category_id',
    ];

    /**
     * Атрибуты, которые должны быть кастованы в типы.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * Уникальность значения поля SKU.
     *
     * @var array
     */
    public static $rules = [
        'sku' => 'required|unique:products,sku|max:50',
        'name' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'price' => 'nullable|numeric',
        'stock' => 'nullable|integer',
    ];

    /**
     * Определяет отношение с брендом.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Определяет отношение с категорией.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
