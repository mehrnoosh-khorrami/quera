<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;


    class CourseStatsRepository
    {
        public static function getCourseFinishers()
        {
            $subQuery = DB::table('assignments')
                ->join('courses', 'assignments.course_id', '=', 'courses.id')
                ->select('courses.id', DB::raw('COUNT(*) AS assignments_count'))
                ->groupBy('courses.id');
    
            $model = DB::table('passed_assignments')
                ->join('assignments', 'passed_assignments.assignment_id', '=', 'assignments.id')
                ->join('courses', 'courses.id', '=', 'assignments.course_id')
                ->joinSub($subQuery, 'x', function ($join) {
                    $join->on('x.id', '=', 'assignments.course_id');
                })
                ->select(['course_id', 'user_id'])
                ->groupBy(['course_id', 'user_id', 'required_percent', 'x.assignments_count'])
                ->having('required_percent', '<=', DB::raw('COUNT(*) / assignments_count * 100'))
                ->orderBy('course_id', 'asc')
                ->orderBy('user_id', 'asc')
                ->get();
            return $model;
        }
    }