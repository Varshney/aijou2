<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'companies';

    public $filterable = [
        'id',
        'name',
        'url',
    ];

    public $orderable = [
        'id',
        'name',
        'url',
        'publisher',
    ];

    protected $casts = [
        'publisher' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'url',
        'publisher',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
