@extends('landing')

@section('content')
    <div class="diagnosa">
        <form action="/hasildiagnosa" method="post">
            @csrf
            <h4 class="mb-4" style="font-size: 2rem;"><strong>Jika anda mengalami gejala-gejala berikut, harap
                    untuk
                    dipilih.</strong></h4>
            <hr />
            <div class="row" style="overflow: auto; height:600px;">
                <div class="form-check">
                    @foreach ($questions as $question)
                        <label>
                            <input class="form-check-input" type="checkbox" name="selected_questions[]"
                                value="{{ $question->diagnosis }}">
                            {{ $question->nama }}
                        </label>
                        <br>
                    @endforeach
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Diagnosa</button>
        </form>
    </div>
@endsection
