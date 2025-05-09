<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class NotExpiredScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $currentTime = Carbon::now();
        return $builder->where('expires_at', '>', $currentTime->toDateTimeString());
    }
}
