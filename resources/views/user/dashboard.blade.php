@extends('landing')

@section('content')

    {{-- <h1 class="mb-5" style="text-align: center">Hello, {{ $user->username }}!</h1> --}}
    @if ($listPenyakit != null)
        <div class="sicknessdiv">
            <h3>Hasil deteksi dini gangguan kecemasan ({{ sizeof($listPenyakit) }}): </h3>
            <ul class="list-group" style="border: 1px solid black;">
                @foreach ($listPenyakit as $penyakit)
                    @if ($penyakit['count'] != 0)
                        <li class="list-group-item">
                            {{ $penyakit['nama'] }} ({{ $penyakit['count'] }}/{{ $penyakit['total'] }})
                            <span class="bi bi-info-circle-fill fs-8 list-group-info-button"></span>
                            <span class="details" style="display: none;">
                                <br>
                                <br>
                                @if ($penyakit['nama'] == 'Gangguan Panik')
                                    Gangguan Panik adalah suatu kondisi psikologis yang ditandai dengan serangan panik yang
                                    tiba-tiba dan tak terduga, disertai dengan gejala fisik yang kuat dan perasaan ketakutan
                                    yang berlebihan. Selama serangan panik, seseorang dapat mengalami gejala seperti detak
                                    jantung yang cepat, sensasi sesak napas, gemetar, berkeringat, dan perasaan kehilangan
                                    kendali. Serangan panik seringkali terjadi tanpa ada ancaman nyata atau penyebab yang
                                    jelas,
                                    yang membuat individu merasa khawatir akan serangan berulang di masa depan. Gangguan
                                    Panik
                                    dapat mempengaruhi kehidupan sehari-hari seseorang dan membatasi aktivitas sosial serta
                                    fisik mereka. Pengobatan yang tepat, seperti terapi kognitif-perilaku dan penggunaan
                                    obat-obatan, dapat membantu mengurangi frekuensi dan keparahan serangan panik serta
                                    meningkatkan kualitas hidup individu yang mengalami Gangguan Panik.
                                @endif
                                @if ($penyakit['nama'] == 'Fobia Spesifik')
                                    Fobia Spesifik adalah suatu kondisi kecemasan yang ditandai dengan ketakutan yang
                                    berlebihan
                                    dan persisten terhadap objek, situasi, atau aktivitas tertentu. Pada Fobia Spesifik,
                                    individu mengalami kecemasan yang intens saat berhadapan dengan objek atau situasi yang
                                    menjadi fobia mereka, seperti takut pada hewan tertentu, takut terbang, takut pada
                                    ketinggian, atau takut pada darah. Ketakutan yang dialami berlebihan dan melebihi respon
                                    yang proporsional terhadap ancaman yang sebenarnya. Fobia Spesifik dapat mengganggu
                                    kehidupan sehari-hari individu dan membatasi aktivitas mereka, karena mereka cenderung
                                    menghindari objek atau situasi yang memicu kecemasan. Terapi perilaku, seperti terapi
                                    desensitisasi sistematis atau terapi kognitif-perilaku, biasanya digunakan untuk
                                    membantu
                                    individu mengatasi fobia dan mengurangi gejala kecemasan yang terkait.
                                @endif
                                @if ($penyakit['nama'] == 'Gangguan Kecemasan Menyeluruh')
                                    Gangguan Kecemasan Menyeluruh, atau dikenal juga sebagai Generalized Anxiety Disorder
                                    (GAD)
                                    ,
                                    adalah suatu kondisi mental yang ditandai dengan kecemasan yang berlebihan, kronis, dan
                                    sulit untuk dikendalikan. Pada Gangguan Kecemasan Menyeluruh, individu cenderung merasa
                                    khawatir secara terus-menerus dan berlebihan terhadap berbagai aspek kehidupan, termasuk
                                    masalah keuangan, pekerjaan, kesehatan, dan hubungan sosial. Kecemasan yang dialami
                                    bersifat
                                    menyeluruh dan tidak terfokus pada satu objek atau situasi tertentu. Individu dengan GAD
                                    sering kali mengalami gejala fisik seperti ketegangan otot, mudah lelah, gangguan tidur,
                                    konsentrasi yang terganggu, dan rasa gelisah yang berlebihan. Gangguan Kecemasan
                                    Menyeluruh
                                    dapat memengaruhi kualitas hidup seseorang dan membatasi kemampuan mereka untuk
                                    menjalani
                                    kehidupan sehari-hari dengan tenang dan produktif. Terapi psikoterapi, terapi perilaku
                                    kognitif, dan penggunaan obat-obatan antianxiety atau antidepresan dapat digunakan dalam
                                    pengelolaan dan pengobatan Gangguan Kecemasan Menyeluruh.
                                @endif
                                @if ($penyakit['nama'] == 'Fobia Sosial')
                                    Fobia Sosial, juga dikenal sebagai Social Anxiety Disorder (SAD), adalah suatu kondisi
                                    psikologis di mana seseorang mengalami ketakutan yang berlebihan dan persisten terhadap
                                    situasi sosial atau perhatian orang lain. Individu dengan Fobia Sosial cenderung merasa
                                    khawatir akan dinilai atau dievaluasi negatif oleh orang lain, sehingga mereka
                                    menghindari
                                    atau mengalami kecemasan yang intens saat berada dalam situasi sosial seperti berbicara
                                    di
                                    depan umum, berinteraksi dengan orang baru, atau berpartisipasi dalam aktivitas sosial.
                                    Ketakutan yang dialami dapat berdampak signifikan pada kehidupan sehari-hari, membatasi
                                    kegiatan sosial, pendidikan, dan karir seseorang. Terapi kognitif-perilaku dan terapi
                                    kelompok dapat digunakan untuk membantu individu mengatasi Fobia Sosial, sementara
                                    penggunaan obat-obatan tertentu seperti beta blocker atau antidepresan dapat membantu
                                    mengurangi gejala kecemasan yang terkait.
                                @endif
                            </span>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="alert alert-warning alert-dismissible fade show my-2" role="alert">
                <i class="bi bi-info-circle-fill"></i> Hasil skrining yang dikeluarkan merupakan pra diagnosis dan
                <strong>tidak dapat dijadikan diagnosis.</strong> Silakan menghubungi psikolog untuk diagnosis akhir.
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.list-group-item').click(function() {
                    $(this).find('.details').toggle();
                });
            });
        </script>
    @else
        <div class="diagnosediv" style="">
            <h3 style="padding-bottom: 1rem">You haven't diagnose!</h3>
            <a href="/diagnosa" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Diagnose</a>
        </div>
    @endif
@endsection
