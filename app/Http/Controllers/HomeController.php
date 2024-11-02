<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Department;
use App\Models\Event;
use App\Models\Faculty;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {

        $faculty = Faculty::paginate(3);

        $gallery = Gallery::paginate(5);

        $event = Event::paginate(1);

        $notice = Notice::paginate(1);

        $department = Department::all();

        return view('user.index', compact('faculty', 'gallery', 'event', 'notice', 'department'));
    }

    public function department_page()
    {

        $department = Department::all();

        return view('user.department_page', compact('department'));
    }

    public function dept_details_page($id)
    {

        $department = Department::find($id);

        $course = $department->courses;

        $faculty = $department->faculties()->paginate(3);

        return view('user.dept_details_page', compact('department', 'course', 'faculty'));
    }



    public function search(Request $request)
    {
        $query = $request->input('query');

        // Initialize empty collections
        $faculty = collect();
        $department = collect();
        $notice = collect();
        $course = collect();
        $event = collect();
        $gallery = collect();

        if ($query) {
            // Fetch data only if there is a query
            $faculty = Faculty::where('name', 'like', "%{$query}%")->get();
            $department = Department::where('dept_name', 'like', "%{$query}%")->get();
            $notice = Notice::where('description', 'like', "%{$query}%")->get();
            $course = Course::where('title', 'like', "%{$query}%")->get();
            $event = Event::where('name', 'like', "%{$query}%")->get();
            $gallery = Gallery::where('intro', 'like', "%{$query}%")->get();
        }



        // Pass all data to the view
        return view('user.index', [
            'faculty' => $faculty,
            'department' => $department,
            'notice' => $notice,
            'course' => $course,
            'event' => $event,
            'gallery' => $gallery,
        ]);
    }



    public function contact(Request $request)
    {

        $contact = new Contact();

        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;

        $contact->ssc_gpa = $request->ssc_gpa;

        $contact->hsc_gpa = $request->hsc_gpa;

        $contact->message = $request->message;

        $image = $request->candidate_img;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->candidate_img->move('candidateImage', $imagename);

            $contact->candidate_img = $imagename;
        }

        $contact->save();

        return redirect()->back()->with('message', 'Apply request sent Successfully!');
    }


    public function gallery_page()
    {

        $gallery = Gallery::all();

        return view('user.gallery_page', compact('gallery'));
    }


    public function contact_page()
    {

        return view('user.contact_page');
    }


    public function about_page()
    {

        return view('user.about_page');
    }


    public function notice_page()
    {

        $notice = Notice::all();

        return view('user.notice_page', compact('notice'));
    }

    public function achievement_page()
    {

        return view('user.achievement_page');
    }


    public function faculty_page()
    {

        $faculty = Faculty::all();

        $department = Department::all();

        return view('user.faculty_page', compact('faculty', 'department'));
    }


    public function faculty_details_page($id)
    {

        $department = Department::find($id);

        $course = $department->courses;

        $faculty = $department->faculties()->paginate(3);

        return view('user.faculty_details_page', compact('department', 'course', 'faculty'));
    }


    public function course_page()
    {

        $department = Department::all();

        return view('user.course_page', compact('department'));
    }


    public function course_details_page($id)
    {

        $department = Department::find($id);

        $course = $department->courses;

        $faculty = $department->faculties;

        return view('user.course_details_page', compact('department', 'course', 'faculty'));
    }


    public function helpline_page()
    {

        return view('user.helpline_page');
    }


    public function student_page()
    {

        $totalStudents = Student::count();

        $departments = Department::withCount('students')->get();

        return view('user.student_page', compact('departments', 'totalStudents'));
    }



    public function evaluation(){

        if(Auth::id()){

            if(Auth::user()->usertype == 'user'){

                $department = Department::all();

                return view('user.evaluation_page', compact('department'));

            }

        }

        return view('auth.login');

    }


    public function evaluate_faculty_page($id){

        
        $department = Department::find($id);

        $course = $department->courses;

        $faculty = $department->faculties()->paginate(3);

        return view('user.evaluate_faculty_page', compact('department', 'course', 'faculty'));

    }



}
