<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffView extends Model{
    use HasFactory;
    protected $table = 'staffview';
    protected $fillable = [
        'id',
        'password',
        'email',
        'name',
        'avatar',
        'birthday',
        'address',
        'phone',
        'workingday',
        'position',
        'salary',
        'bonus'
    ];
}