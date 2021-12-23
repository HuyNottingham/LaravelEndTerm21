<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportOrderView extends Model{
    use HasFactory;
    protected $table = 'importorderview';
    protected $fillable = [
        'id',
        'date',
        'total',
        'partner',
        'status'
    ];
}