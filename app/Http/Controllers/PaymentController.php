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
use Barryvdh\DomPDF\Facade\Pdf;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->user();
        $payments = Payment::where('user_id', '=', $users->id)->get();

        return view('pages.dashboard.siswa.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.dashboard.siswa.payment.create');
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
        $user = User::first();
        // dd($students);

        return view('pages.dashboard.admin.payment.edit', [
            'payment' => $payment,
            'students' => $students
        ],compact('user'));
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

        return redirect()->route('dashboard.pembayaran');
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

    public function cetak_pdfPembayaran()
    {
        $users = auth()->user();
        $payments = Payment::where('user_id', '=', $users->id)->get();
 
    	$pdf = PDF::loadview('pages.dashboard.siswa.payment.print', compact('payments'));
    	return $pdf->download('laporan-pembayaran.pdf');
    }

    public function pembayaran(){
        $payments = Payment::all();

        return view('pages.dashboard.admin.payment.index', compact('payments'));
    }
}
