<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meetup extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'meetups';

    protected $dates = [
        'time_start',
        'time_end',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'registration_url',
        'blurb',
        'topics',
        'time_start',
        'time_end',
        'timezone',
        'duration',
        'is_bootcamp',
        'reg_is_open',
        'covid_status_form',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getTimeStartAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeStartAttribute($value)
    {
        $this->attributes['time_start'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getTimeEndAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setTimeEndAttribute($value)
    {
        $this->attributes['time_end'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}

