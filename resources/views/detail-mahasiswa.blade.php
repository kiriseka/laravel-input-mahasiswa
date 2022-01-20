@extends('layouts.main')

@section('container')


    <div class="container-fluid position-absolute top-50 start-50 translate-middle">
        <div class="row d-flex flex-row ">
            {{-- Detail Mahasiswa --}}
            <div class="col-4 offset-2">

                <div
                    class="container-fluid d-flex flex-column align-content-center justify-content-center align-middle position-relative main-box mt-5 pt-3 text-center">

                    <div class="row">
                        <h1 class=" mb-5 ">DETAIL MAHASISWA</h1>
                    </div>
                    <div class="row text-start">
                        <div class="col offset-1">
                            <table class="detail">
                                <tr>
                                    <td>
                                        <span>Nomor Induk Mahasiswa</span>

                                        <h5>{{ $student['nim'] }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Nama Mahasiswa</span>

                                        <h5>{{ $student['nama'] }}</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Kelas</span>
                                        <h5>{{ $student['kelas'] }}</h5>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Detail Mahasiswa --}}


            {{-- Input Nilai --}}
            <div class="col-4 ">

                <div
                    class="container-fluid d-flex flex-column align-content-center justify-content-center align-middle position-relative main-box mt-5 pt-5 text-center">

                    <div class="row">
                        <h1 class="">INPUT NILAI</h1>
                    </div>
                    <div class="row">
                        <div class="col offset-1">

                            <form action="{{ url('/verifikasi') . '/' . $student['nim'] }}" method="POST"
                                class="mb-2 text-start">

                                @csrf

                                <input type="hidden" id="nim" name="nim" value="{{ $student['nim'] }}">

                                <div class="mb-3">
                                    <label for="" class="form-label text-start">Nilai Tugas</label>
                                    <div class=" col-7 ">
                                        <input type="number" class="form-control form-input-kode  c " name="tugas"
                                            id="tugas" placeholder="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label text-start">Nilai UTS</label>
                                    <div class=" col-7 ">
                                        <input type="number" class="form-control form-input-kode " name="uts"
                                            id="uts" placeholder="">
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="" class="form-label ">Nilai UAS</label>
                                    <div class=" col-7 ">
                                        <input type="number" class="form-control form-input-kode " name="uas"
                                            id="uas" placeholder="">
                                    </div>
                                </div>



                                <div class="mb-3 mt-5 text-center">
                                    <button class="btn btn-oke" type="submit">OK</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            {{-- End Input Nilai --}}

        </div>

    </div>

@endsection
