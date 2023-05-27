@extends('landing')

@section('content')
    <div class="card border-dark mb-3"
        style="border-radius: 15px;
    box-shadow: 1px 5px 14px 3px rgba(0, 0, 0, 0.73);
    -webkit-box-shadow: 1px 5px 14px 3px rgba(0, 0, 0, 0.73);
    -moz-box-shadow: 1px 5px 14px 3px rgba(0, 0, 0, 0.73);">
        <div class="card-header pt-3" style="padding-left: 3rem; padding-right: 3rem;">
            <h4 style="font-size: 2rem;"><strong>Petunjuk Pengisian</strong></h4>
        </div>
        <div class="card-body text-dark" style="padding-left: 3rem; padding-right: 3rem; font-size: 1.5rem">
            {{-- <p class="card-text" style="font-weight: 600">Berikut ini petunjuk mengerjakan form diagnosis gangguan kesehatan mental:</p> --}}
            <ol>
                <li class="card-text list-spacing">Anda akan diberikan sejumlah pernyataan yang berkaitan dengan gejala dari
                    gangguan kesehatan mental.</li>
                <li class="card-text list-spacing">Akan ada sejumlah gejala yang yang dapat diisi jika merasa dialami.</li>
                <li class="card-text list-spacing">Harap mengisi form ini dengan kondisi yang sebenarnya dan
                    sejujur-jujurnya.</li>
                <li class="card-text list-spacing">Silahkan isi gejala yang Anda rasakan selama minimal dua minggu terakhir.
                </li>
                <li class="card-text list-spacing">Jika sudah mengisi seluruh pernyataan, harap memeriksa kembali seluruh
                    pernyataan dan selanjutnya menekan tombol diagnosa.</li>
                <li class="card-text list-spacing">Hasil deteksi dini sistem pakar akan ditampilkan.</li>
                <li class="card-text list-spacing">Hasil dari skrining dari sistem ini bersifat prediksi dan
                    direkomendasikan untuk mengonsultasikan kepada pakar yang terkait.</li>
            </ol>
        </div>
        <div class="card-footer" style="text-align: center; padding-left: 3rem; padding-right: 3rem"><a
                class="w-100 btn btn-lg btn-dark" href="/diagnosa">Mulai</a></div>
    </div>
@endsection
