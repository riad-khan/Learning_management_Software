<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Course;
use App\Models\User\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


//        $data=[];
//
//        $data = Cache::remember('user_schedules', 22 * 60, function () {

            $courses=[];

            $enroll_courses = User::find(Auth::user()->id)->enrollCourses;

            $course = [];

            foreach ($enroll_courses as $enroll_course) {
                $course['course_title']=$enroll_course->course_id;
                $schedules = Course::find($enroll_course->course_id)->schedules;

                $all_schedules=[];

                foreach ($schedules as $schedule) {

                    $schedule->button=true;
                    $schedule->button_text="Go To Course";
                    $schedule->button_url="http://127.0.0.1:8000/test";
                    array_push($all_schedules,$schedule);
                }



                $course['schedules']=$all_schedules;
                array_push($courses,$course);
            }
//            return  $courses;
//        });

        return response()->json($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
