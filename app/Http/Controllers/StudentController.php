<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class StudentController extends Controller
{
    public function get_all_student()
    {
        $students = Student::all();

        return view('students.student_manage', compact('students'));
    }

    public function get_student_by_id($id)
    {
        $student = Student::find($id);
        return view('students.student_edit',compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student=Student::find($id);
        $student->fullname =  $request->get('fullname');
        $student->birthday = $request->get('birthday');
        $student->address = $request->get('address');
        $student->save();
        return redirect('/')->with('success', 'Student updated.');
    }
}
