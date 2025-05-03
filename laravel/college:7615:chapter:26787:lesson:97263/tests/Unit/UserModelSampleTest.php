<?php

namespace Tests\Unit;

use App\Models\User;
use Carbon\Carbon;
use Tests\TestCase;

class UserModelSampleTest extends TestCase
{
    public function test_premium_until_type()
    {
        $user = new User([
            'name' => 'Quera',
            'email' => 'laravel@quera.ir',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'
        ]);
        $time = time();
        $user->premium_until = $time;
        $this->assertEquals(Carbon::createFromTimestamp($time), $user->premium_until);
    }
}
