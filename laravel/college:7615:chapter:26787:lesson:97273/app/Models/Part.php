<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\NotExpiredScope;

class Part extends Model
{
    use HasFactory;
    protected static function booted()
    {
        static::addGlobalScope(new NotExpiredScope);
    }
    public function scopeNearToExpire($query, CarbonInterval $periodTime){
        return $query->whereBetween('expires_at', [Carbon::now(), Carbon::now()->add($periodTime)]);
    }
}
