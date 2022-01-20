@extends('layouts.main')

@section('container')

    <div class="row d-flex align-content-center position-absolute top-50 start-50 translate-middle">
        <div class="col-6">

            <div
                class="container-fluid d-flex flex-column align-content-center justify-content-center align-middle position-relative main-box mt-5 pt-3 text-center">

                <div class="row">
                    <h1 class=" mt-5 ">INPUT NIM</h1>
                </div>
                <div class="row">


                    @foreach ($student as $p)
                        <form action="{{ url('/detail') . '/' . $p->nim }}" method="POST" class="mb-5 mt-5 pb-5">
                    @endforeach
                    @csrf
                        <div class="mt-5 mb-3 mx-auto col-7 ">
                            <input type="number" class="form-control form-input-kode text-center" name="nim" id="nim"
                                placeholder="Masukkan NIM">
                        </div>
                        <div class="mb-3 mt-5">
                            <button class="btn btn-oke" type="submit">OK</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
