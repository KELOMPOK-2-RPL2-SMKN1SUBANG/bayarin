<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $students   = Student::orderBy('first_name', 'ASC')->paginate(10);
        $count      = Student::get()->count();

        return view('vendor.students.index', [
            'students' => $students,
            'count'    => $count
        ]);

        return view('vendor.students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('vendor.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'name'          => 'nullable',
            'nisn'          => 'required|numeric',
            'nis'           => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender'        => 'required',
            'classroom'     => 'required',
            'phone_number'  => 'required|numeric',
            'email'         => 'required|email',
            'address'       => 'required'
        ]);

        $data = [];
        foreach ($request->all() as $key => $value) {
            $data[$key] = $value;
        }

        $data['name'] = $data['first_name'] . " " . $data['last_name'];

        Student::create($data);

        return redirect('/students/create')->with('status', 'Student data was successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('vendor.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student): View
    {
        $classrooms = [
            1,
            2
        ];

        $genders    = [
            'Male',
            'Female'
        ];

        return view('vendor.students.edit', [
            'model'         => $student,
            'classrooms'    => $classrooms,
            'genders'       => $genders
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'name'          => 'nullable',
            'nisn'          => 'required|numeric',
            'nis'           => 'required|numeric',
            'date_of_birth' => 'required|date',
            'gender'        => 'required',
            'classroom'     => 'required',
            'phone_number'  => 'required|numeric',
            'email'         => 'required|email',
            'address'       => 'required'
        ]);

        $data = [];
        foreach ($request->all() as $key => $value) {
            $data[$key] = $value;
        }

        $data['name'] = $data['first_name'] . " " . $data['last_name'];

        $student->update($data);

        return redirect('/students')->with('status', 'Student data has been changed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        return redirect('/students');
    }
}
