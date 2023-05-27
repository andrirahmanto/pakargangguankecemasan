@extends('landing')

@section('content')
    <main class="form-signin w-100 mt-xl-5" style="">
        <form method="post" action="/login">
            @csrf
            {{-- <img class="mb-4" src="../assets/benerinbang.png" alt="" width="200" height="200" style="margin-left: auto; margin-right: auto; display: block;"> --}}
            <h1 class="h3 mb-3 fw-normal" style="font-size: 2rem;">Sign in</h1>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required autofocus value="{{ old('email') }}">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
        </form>
        <small class="text-center d-block mt-2">Don't have an account? <a href="/register">Register</a></small>
    </main>
@endsection
