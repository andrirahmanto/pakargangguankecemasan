@extends('landing')

@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <main class="form-registration w-100 mt-xl-5" style="">
        {{-- <img class="mb-4" src="../assets/benerinbang.png" alt="" width="200" height="200" style="margin-left: auto; margin-right: auto; display: block;"> --}}
        <h1 class="h3 mb-3 fw-normal" style="font-size: 2rem;">Make your account</h1>

        <form action="/register" method="post">
            @csrf
            <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('username') is-invalid @enderror" name="username" placeholder="Name" required autofocus>
                <label for="username">Username</label>
                @error('username')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="name@example.com" required>
                <label for="email">Email address</label>
                @error('email')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
            </div>
            <div class="form-floating">
                <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" min="0" placeholder="0" required>
                <label for="age">Age</label>
                @error('age')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
            </div>
            <div class="gender">
                <input type="radio" class="@error('password') is-invalid @enderror" name="gender" id="male" value="male" required>
                <label for="male">Male</label>
                @error('male')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
                <input type="radio" class="@error('password') is-invalid @enderror" name="gender" id="female" value="female">
                <label for="female">Female</label>
                @error('female')
                    <label class="invalid-feedback mb-1" role="alert">
                        <strong>{{ $message }}</strong>
                    </label>
                @enderror
            </div>

            <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
        </form>
        <small class="text-center d-block mt-2">Already have an account? <a href="/login">Login</a></small>
    </main>
@endsection
