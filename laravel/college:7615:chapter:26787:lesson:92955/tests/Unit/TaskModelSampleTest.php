<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Models\Task;

class TaskModelSampleTest extends TestCase
{
    public function testTableName()
    {
        $this->assertEquals(
            'tasks_table',
            $this->getProtectedPropertyValue(new Task, 'table')
        );
    }

    private function getProtectedPropertyValue($obj, $prop) {
        $reflection = new \ReflectionClass($obj);
        $property = $reflection->getProperty($prop);
        $property->setAccessible(true);

        return $property->getValue($obj);
    }
}
