<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoodleController extends Controller
{
    // Token for web-service
    public $token = '19376e28dfcd823d876023a9662a0982';

    // Base begining of url
    public $url = 'http://localhost/webservice/rest/server.php?wstoken=';

    public function users(){
        $response = Http::get($this->url . $this->token . '&wsfunction=tool_dataprivacy_get_users&moodlewsrestformat=json&query');
        $users_data = $response->json();

        return view('users', compact('users_data'));
    }

    public function courses(){
        $response = Http::get($this->url . $this->token . '&wsfunction=core_course_get_courses&moodlewsrestformat=json');
        $courses_data = $response->json();

        // Deleting first item (this is not the course)
        array_shift($courses_data);
        
        return view('courses', compact('courses_data'));
    }

    public function users_grades($course_id){
        $response = Http::get($this->url . $this->token . '&wsfunction=gradereport_user_get_grades_table&moodlewsrestformat=json&courseid=' . $course_id);
        $users_grades_data = $response->json()['tables'];

        $course_name = Http::get($this->url . $this->token . '&wsfunction=core_course_get_courses&moodlewsrestformat=json&options[ids][0]=' . $course_id)->json()[0]['fullname'];

        return view('grades', compact('users_grades_data', 'course_name'));
    }
}
