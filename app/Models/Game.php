<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Game extends Model implements HasMedia
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;

    public $table = 'games';

    public $orderable = [
        'id',
        'name',
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'kr_release_date',
        'publisher.name',
    ];

    public $filterable = [
        'id',
        'name',
        'platform.name',
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'kr_release_date',
        'developer.name',
        'publisher.name',
    ];

    protected $appends = [
        'boxart',
    ];

    protected $dates = [
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'kr_release_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'eu_release_date',
        'na_release_date',
        'jpm_release_date',
        'kr_release_date',
        'publisher_id',
        'store_amazon',
        'store_ea',
        'store_epic_games_store',
        'store_gog',
        'store_humble_bundle',
        'store_microsoft',
        'store_playstation',
        'store_steam',
        'store_ubisoft',
        'store_nintendo_e_shop',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $thumbnailWidth  = 50;
        $thumbnailHeight = 50;

        $thumbnailPreviewWidth  = 120;
        $thumbnailPreviewHeight = 120;

        $this->addMediaConversion('thumbnail')
            ->width($thumbnailWidth)
            ->height($thumbnailHeight)
            ->fit('crop', $thumbnailWidth, $thumbnailHeight);
        $this->addMediaConversion('preview_thumbnail')
            ->width($thumbnailPreviewWidth)
            ->height($thumbnailPreviewHeight)
            ->fit('crop', $thumbnailPreviewWidth, $thumbnailPreviewHeight);
    }

    public function getBoxartAttribute()
    {
        return $this->getMedia('game_boxart')->map(function ($item) {
            $media = $item->toArray();
            $media['url'] = $item->getUrl();
            $media['thumbnail'] = $item->getUrl('thumbnail');
            $media['preview_thumbnail'] = $item->getUrl('preview_thumbnail');

            return $media;
        });
    }

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

    public function getKrReleaseDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setKrReleaseDateAttribute($value)
    {
        $this->attributes['kr_release_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
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
