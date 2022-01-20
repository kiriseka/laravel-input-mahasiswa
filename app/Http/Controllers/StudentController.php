<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = DB::table('students')->get();
        return view('input-nim', ['student' => $student]);
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
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $nim)
    {
        //
        $student = Student::find($nim);
        return view('detail-mahasiswa', compact('student', $student));
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $student = DB::table('students')
            ->where('nim', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('detail-mahasiswa', ['student' => $student]);
    }

    public function detail(Request $request)
    {
        $nim = $request->nim;
        $student = Student::where('nim', $nim)->first();
        // return $student;
        return view('detail-mahasiswa', compact('student', $student));
    }

    public function verifikasi(Request $request)
    {
        $nim = $request->nim;
        $student = Student::where('nim', $nim)->first();


        $student->tugas = $request->tugas;
        $student->uts = $request->uts;
        $student->uas = $request->uas;

        $total_nilai = ($student->uas * 40 / 100) + ($student->uts * 30 / 100) + ($student->tugas * 30 / 100);

        $student->total_nilai = $total_nilai;

        $student->save();
        // return $student;
        return view('verifikasi', compact('student', $student));
    }

    public function result(Request $request)
    {
        $nim = $request->nim;
        $student = Student::where('nim', $nim)->first();

        $total_nilai = $student->total_nilai;

        if ($total_nilai > 80) {
            $student->konversi_nilai = 'A';
        } elseif ($total_nilai > 70) {
            $student->konversi_nilai = 'B';
        } elseif ($total_nilai > 60) {
            $student->konversi_nilai = 'C';
        } elseif ($total_nilai > 50) {
            $student->konversi_nilai = 'D';
        } else {
            $student->konversi_nilai = 'E';
        }


        $student->save();
        // return $student;
        return view('result', compact('student', $student));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
        $nim = $request->nim;
        $student = Student::where('nim', $nim)->first();

        $student->tugas = $request->tugas;
        $student->uts = $request->uts;
        $student->uas = $request->uas;
        $student->total_nilai = $request->total_nilai;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
