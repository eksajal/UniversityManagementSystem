<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Course;
use App\Models\Notice;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\Gallery;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    public function redirect()
    {

        if (Auth::id()) {

            if (Auth::user()->usertype == 'user') {

                $faculty = Faculty::paginate(3);

                $gallery = Gallery::paginate(5);

                $event = Event::paginate(1);

                $notice = Notice::paginate(1);

                $department = Department::all();

                return view('user.index', compact('faculty', 'gallery','event','notice','department'));

            } elseif (Auth::user()->usertype == 'admin') {

                $studentsCount = Student::count();

                $facultyCount = Faculty::count();

                $departmentCount = Department::count();

                $candidateCount = Contact::count();

                return view('admin.index', compact('studentsCount','facultyCount','departmentCount','candidateCount'));
            }
        } else {
            return view('/');
        }
    }


    public function add_faculty_page()
    {

        $departments = Department::all();
        $courses = Course::all();

        return view('admin.add_faculty_page', compact('departments', 'courses'));
    }

    public function create_faculty(Request $request)
    {

        $faculty = new Faculty();

        $faculty->name = $request->name;

        $faculty->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imgname = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('facultyImage', $imgname);

            $faculty->image = $imgname;
        }

        $faculty->dept_id = $request->dept_id;




        $deptid = $request->dept_id;

        $department = Department::find($deptid);

        $faculty->dept_name = $department->dept_name;



        // Handle multiple course selections
        $course_ids = $request->course_id; // Assuming this is an array
        $course_titles = Course::whereIn('id', $course_ids)->pluck('title')->toArray();

        $faculty->course_id = implode(',', $course_ids); // Store course IDs as comma-separated
        $faculty->course_title = implode(',', $course_titles); // Store course titles as comma-separated





        $faculty->save();

        return redirect()->back()->with('message', 'Faculty added Successfully!');
    }


    public function view_faculty_page()
    {

        $faculty = Faculty::all();

        return view('admin.view_faculty_page', compact('faculty'));
    }

    public function edit_faculty_page($id)
    {

        $faculty = Faculty::with('department', 'course')->find($id);


        $courses = Course::all();


        $departments = Department::all();


        return view('admin.edit_faculty_page', compact('faculty', 'courses', 'departments'));
    }

    public function update_faculty(Request $request, $id)
    {

        $faculty = Faculty::find($id);

        $faculty->name = $request->name;

        $faculty->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imgname = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('facultyImage', $imgname);

            $faculty->image = $imgname;
        }

        $faculty->dept_id = $request->dept_id;




        $deptid = $request->dept_id;

        $department = Department::find($deptid);

        $faculty->dept_name = $department->dept_name;




        // Handle multiple course selections
        $course_ids = $request->course_id; // Assuming this is an array
        $course_titles = Course::whereIn('id', $course_ids)->pluck('title')->toArray();

        $faculty->course_id = implode(',', $course_ids); // Store course IDs as comma-separated
        $faculty->course_title = implode(',', $course_titles); // Store course titles as comma-separated




        $faculty->save();

        return redirect('view_faculty_page')->with('message', 'Faculty updated Successfully!');
    }



    public function delete_faculty($id)
    {

        $faculty = Faculty::find($id);

        $faculty->delete();

        return redirect()->back()->with('message', 'Faculty deleted Successfully!');
    }

    public function add_gallery_page()
    {
        return view('admin.add_gallery_page');
    }


    public function create_gallery(Request $request)
    {

        $gallery = new Gallery();

        $gallery->intro = $request->intro;

        $gallery->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imgname = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('galleryImage', $imgname);

            $gallery->image = $imgname;
        }

        $gallery->save();

        return redirect()->back()->with('message', 'Gallery added Successfully!');
    }


    public function view_gallery_page()
    {

        $gallery = Gallery::all();

        return view('admin.view_gallery_page', compact('gallery'));
    }

    public function edit_gallery_page($id)
    {

        $gallery = Gallery::find($id);

        return view('admin.edit_gallery_page', compact('gallery'));
    }


    public function update_gallery(Request $request, $id)
    {

        $gallery = Gallery::find($id);

        $gallery->intro = $request->intro;

        $gallery->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imgname = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('galleryImage', $imgname);

            $gallery->image = $imgname;
        }

        $gallery->save();

        return redirect('view_gallery_page')->with('message', 'Gallery updated Successfully!');
    }

    public function delete_gallery($id)
    {

        $gallery = Gallery::find($id);

        $gallery->delete();

        return redirect()->back()->with('message', 'Gallery deleted Successfully!');
    }


    public function add_event_page()
    {
        return view('admin.add_event_page');
    }


    public function create_event(Request $request)
    {

        $event = new Event();

        $event->name = $request->name;

        $event->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imgname = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('eventImage', $imgname);

            $event->image = $imgname;
        }

        $event->save();

        return redirect()->back()->with('message', 'Event added Successfully!');
    }

    public function view_event_page()
    {

        $event = Event::all();

        return view('admin.view_event_page', compact('event'));
    }


    public function edit_event_page($id)
    {

        $event = Event::find($id);

        return view('admin.edit_event_page', compact('event'));
    }

    public function update_event(Request $request, $id)
    {

        $event = Event::find($id);

        $event->name = $request->name;

        $event->description = $request->description;

        $image = $request->image;

        if ($image) {

            $imgname = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('eventImage', $imgname);

            $event->image = $imgname;
        }

        $event->save();

        return redirect('view_event_page')->with('message', 'Event updated Successfully!');
    }



    public function delete_event($id)
    {

        $event = Event::find($id);

        $event->delete();

        return redirect()->back()->with('message', 'Event deleted Successfully!');
    }


    public function add_notice_page()
    {
        return view('admin.add_notice_page');
    }

    public function create_notice(Request $request)
    {

        $notice = new Notice();


        $notice->description = $request->description;


        $notice->save();


        return redirect()->back()->with('message', 'Notice added Successfully!');
    }


    public function view_notice_page()
    {

        $notice = Notice::all();

        return view('admin.view_notice_page', compact('notice'));
    }

    public function edit_notice_page($id)
    {

        $notice = Notice::find($id);

        return view('admin.edit_notice_page', compact('notice'));
    }


    public function update_notice(Request $request, $id)
    {

        $notice = Notice::find($id);



        $notice->description = $request->description;



        $notice->save();

        return redirect('view_notice_page')->with('message', 'Notice updated Successfully!');
    }

    public function delete_notice($id)
    {

        $notice = Notice::find($id);

        $notice->delete();

        return redirect()->back()->with('message', 'Notice deleted Successfully!');
    }










    public function add_dept_page()
    {
        return view('admin.add_dept_page');
    }

    public function create_dept(Request $request)
    {

        $dept = new Department();


        $dept->dept_name = $request->dept_name;


        $dept->save();


        return redirect()->back()->with('message', 'Department added Successfully!');
    }


    public function view_dept_page()
    {

        $dept = Department::all();

        return view('admin.view_dept_page', compact('dept'));
    }

    public function edit_dept_page($id)
    {

        $dept = Department::find($id);

        return view('admin.edit_dept_page', compact('dept'));
    }


    public function update_dept(Request $request, $id)
    {

        $dept = Department::find($id);



        $dept->dept_name = $request->dept_name;



        $dept->save();

        return redirect('view_dept_page')->with('message', 'Department updated Successfully!');
    }

    public function delete_dept($id)
    {

        $dept = Department::find($id);

        $dept->delete();

        return redirect()->back()->with('message', 'Department deleted Successfully!');
    }







    public function add_course_page()
    {
        $dept = Department::all();
        return view('admin.add_course_page', compact('dept'));
    }

    public function create_course(Request $request)
    {

        $course = new Course();

        $deptid = $request->dept_id;

        $dept = Department::find($deptid);

        $course->department_id = $deptid;

        $course->dept_name = $dept->dept_name;

        $course->description = $request->description;

        $course->title = $request->title;


        $course->save();


        return redirect()->back()->with('message', 'Course added Successfully!');
    }


    public function view_course_page()
    {

        $course = Course::all();

        return view('admin.view_course_page', compact('course'));
    }

    public function edit_course_page($id)
    {

        $course = Course::with('department')->find($id);

        $departments = Department::all();

        return view('admin.edit_course_page', compact('course', 'departments'));
    }


    public function update_course(Request $request, $id)
    {

        $course = Course::find($id);

        $deptid = $request->dept_id;

        $dept = Department::find($deptid);

        $course->department_id = $deptid;

        $course->dept_name = $dept->dept_name;

        $course->description = $request->description;

        $course->title = $request->title;


        $course->save();


        return redirect('view_course_page')->with('message', 'Course Updated Successfully!');
    }

    public function delete_course($id)
    {

        $notice = Course::find($id);

        $notice->delete();

        return redirect()->back()->with('message', 'Course deleted Successfully!');
    }




    public function candidate_page()
    {

        $candidates = Contact::all();

        return view('admin.candidate_page', compact('candidates'));

    }

    public function delete_candidate($id){

        $candidate = Contact::find($id);

        $candidate->delete();

        return redirect()->back()->with('message', 'Candidate deleted Successfully!');

    }

    public function email_page($id){

        $candidate = Contact::find($id);

        return view('admin.email_page', compact('candidate'));

    }

    public function send_email(Request $request){

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to($request->recipient_email)
                    ->subject('Message from Admin');
        });

        return back()->with('message', 'Email sent successfully!');

    }


    public function add_student_page(){

        $departments = Department::all();

        return view('admin.add_student_page', compact('departments'));

    }

    public function create_student(Request $request){

        $student = new Student();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->student_number = $request->student_number;
        $student->guardian_number = $request->guardian_number;
        $student->student_id = $request->student_id;
        $student->address = $request->address;

        $deptid = $request->dept_id;

        $department = Department::find($deptid);

        $student->department = $department->dept_name;

        $student->department_id = $deptid;

        $image = $request->image;

        if($image){
            $imgname = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('studentImage', $imgname);

            $student->student_img = $imgname;
        }

        $student->save();

        return redirect()->back()->with('message', 'Student added Successfully!');
    }


    public function view_student_page(){

        $students = Student::all();

        return view('admin.view_student_page', compact('students'));

    }

    public function edit_student_page($id){

        $student = Student::find($id);

        $departments = Department::all();

        return view('admin.edit_student_page' ,compact('student','departments'));
    }


    public function update_student(Request $request, $id){

        $student = Student::find($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->student_number = $request->student_number;
        $student->guardian_number = $request->guardian_number;
        $student->student_id = $request->student_id;
        $student->address = $request->address;

        $deptid = $request->dept_id;

        $department = Department::find($deptid);

        $student->department = $department->dept_name;

        $student->department_id = $deptid;

        $image = $request->image;

        if($image){
            $imgname = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('studentImage', $imgname);

            $student->student_img = $imgname;
        }

        $student->save();

        return redirect('view_student_page')->with('message', 'Student updated Successfully!');
    }


    public function delete_student($id){

        $student = Student::find($id);

        $student->delete();

        return redirect()->back()->with('message', 'Student deleted Successfully!');

    }



}
