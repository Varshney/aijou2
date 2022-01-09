<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'games';

    public $orderable = [
        'id',
        'name',
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'publisher.name',
    ];

    public $filterable = [
        'id',
        'name',
        'platform.name',
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'developer.name',
        'publisher.name',
    ];

    protected $fillable = [
        'name',
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'publisher_id',
    ];

    protected $dates = [
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function platform()
    {
        return $this->belongsToMany(Platform::class);
    }

    public function getEuReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setEuReleaseDateAttribute($value)
    {
        $this->attributes['eu_release_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getNaReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setNaReleaseDateAttribute($value)
    {
        $this->attributes['na_release_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getJpmReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setJpmReleaseDateAttribute($value)
    {
        $this->attributes['jpm_release_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function developer()
    {
        return $this->belongsToMany(Company::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Company::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
