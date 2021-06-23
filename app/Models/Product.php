<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Product extends Model
{
    use HasFactory;

    const NORMAL_TYPE = 'normal';
    const REFRIGERATOR_type = 'refrigerator';
    const PRODUCT_TYPE = [
        self::NORMAL_TYPE,
        self::REFRIGERATOR_type
    ];

    public static function getProductType(): array
    {
        return self::PRODUCT_TYPE;
    }

    public static function getNormalType(): string
    {
        return self::NORMAL_TYPE;
    }

    public static function getRefrigeratorType(): string
    {
        return self::REFRIGERATOR_type;
    }

}
