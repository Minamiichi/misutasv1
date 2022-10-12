<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Alumni;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $payments = Payment::all();
        $alumni = Alumni::count();
        $student = Student::count();
        $rooms = Room::count();
        $teachers = Teacher::count();
        $users = User::first();
        
        return view('pages.dashboard.admin.payment.index', compact('students', 'payments','alumni', 'student', 'rooms' , 'teachers', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $users = User::first();
        return view('pages.dashboard.admin.payment.create', compact('students', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentRequest $request, Student $student)
    {
        $data = $request->all();

        Payment::create($data);

        return redirect()->route('dashboard.payment.index', $student->id)->with('success', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        $students = Student::all();
        $users = User::first();
        // dd($students);

        return view('pages.dashboard.admin.payment.edit', [
            'payment' => $payment,
            'students' => $students
        ],compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Payment::find($id)->update($request->all()); 

        return redirect()->route('dashboard.payment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        
        return redirect()->route('dashboard.payment.index');
    }
}
