<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewView extends Model{
    use HasFactory;
    protected $table = 'reviewview';
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'name',
        'avatar',
        'rate',
        'review',
        'date'
    ];
}