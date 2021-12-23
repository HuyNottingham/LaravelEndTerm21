<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffSalesView extends Model{
    use HasFactory;
    protected $table = 'staffsalesview';
    protected $fillable = [
        'id',
        'name',
        'avatar',
        'birthday',
        'address',
        'position',
        'salary',
        'sales',
        'bonus',
        'total'
    ];
}