@extends('landing')

@section('content')
    <div class="editdiv">
        <h1 class="h3 mb-3 fw-normal">Edit Gejala</h1>
        <form action="/update/{{ $gejala->id }}" method="post" style="padding: 1rem">
            @csrf
            <div class="form-floating" style="padding-bottom: 10px">
                <input type="text" class="form-control rounded-top @error('username') is-invalid @enderror" name="gejala"
                    placeholder="{{$gejala->nama}}" required value="{{$gejala->nama}}" autofocus>
                <label for="username">Gejala</label>
                @error('username')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Edit</button>
        </form>
    </div>
@endsection
