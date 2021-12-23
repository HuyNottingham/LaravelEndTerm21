<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPerformer extends Model{
    use HasFactory;
    protected $table = 'orderperformer';
    protected $fillable = [
        'id',
        'staff_id',
        'order_id'
    ];
}