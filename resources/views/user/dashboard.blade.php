@extends('landing')

@section('content')

    {{-- <h1 class="mb-5" style="text-align: center">Hello, {{ $user->username }}!</h1> --}}
    @if ($listPenyakit != null)
        <div class="sicknessdiv">
            <h3>Hasil deteksi dini gangguan kecemasan ({{ sizeof($listPenyakit) }}): </h3>
            <ul class="list-group" style="border: 1px solid black;">
                @foreach ($listPenyakit as $penyakit)
                    <li class="list-group-item" style="">{{ $penyakit }}</li>
                @endforeach
            </ul>
            <div class="alert alert-warning alert-dismissible fade show my-2" role="alert">
                <i class="bi bi-info-circle-fill"></i> Hasil skrining yang dikeluarkan merupakan pra diagnosis dan
                <strong>tidak dapat dijadikan diagnosis.</strong> Silakan menghubungi psikolog untuk diagnosis akhir.
            </div>
        </div>
    @else
        <div class="diagnosediv" style="">
            <h3 style="padding-bottom: 1rem">You haven't diagnose!</h3>
            <a href="/diagnosa" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Diagnose</a>
        </div>
    @endif
@endsection
