<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Part;
use App\Scopes\NotExpiredScope;
use Carbon\Carbon;
use Carbon\CarbonInterval;

class PartScopesSampleTest extends TestCase
{
    public function test_near_to_expire_scope()
    {
        Carbon::setTestNow(now());
        $interval = CarbonInterval::seconds(1800);
        $expectedResult = Part::withoutGlobalScope(NotExpiredScope::class)
            ->whereBetween('expires_at', [now(), now()->add($interval)])
            ->get();
        $actualResult = Part::withoutGlobalScope(NotExpiredScope::class)
            ->nearToExpire($interval)
            ->get();
        $this->assertCount(count($expectedResult), $actualResult);
        $this->assertEquals($expectedResult, $actualResult);
    }
}
