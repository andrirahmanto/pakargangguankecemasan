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
                <?php $count = 0; ?>
                @foreach ($questions as $question)
                    <?php $count++; ?>
                    <div class="form-check">
                        <input type="hidden" name="G{{ $count }}" value="off">
                        <input class="form-check-input" type="checkbox" value="on"
                            id="flexCheckDefault{{ $count }}" name="G{{ $count }}">
                        <label class="form-check-label" for="flexCheckDefault{{ $count }}">
                            {{ $question->nama }}
                        </label>
                    </div>
                @endforeach
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Diagnosa</button>
        </form>
    </div>
@endsection
