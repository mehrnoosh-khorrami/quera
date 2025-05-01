<?php

namespace Tests\Unit;

use App\Repositories\CourseStatsRepository;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CourseStatsRepositorySampleTest extends TestCase
{
    public function testGetCourseFinishers()
    {
        $expectedResult = collect(
            DB::select(
                DB::raw(
                    'SELECT
                      course_id,
                      user_id
                    FROM passed_assignments
                    JOIN assignments
                      ON passed_assignments.assignment_id = assignments.id
                    JOIN courses
                      ON courses.id = assignments.course_id
                    JOIN (SELECT
                      courses.id,
                      COUNT(*) AS assignments_count
                    FROM assignments
                    JOIN courses
                      ON assignments.course_id = courses.id
                    GROUP BY courses.id) AS x
                      ON x.id = assignments.course_id
                    GROUP BY course_id,
                             user_id,
                             required_percent,
                             x.assignments_count
                    HAVING (COUNT(*) / assignments_count * 100) >= required_percent
                    ORDER BY course_id, user_id'
                )
            )
        );

        $this->assertEquals($expectedResult, CourseStatsRepository::getCourseFinishers());
    }
}
