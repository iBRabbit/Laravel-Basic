@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4 text-center mt-5">

            @if(session() -> has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if(session() -> has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <form action = "/login" method = "post">

                    @csrf

                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror }}" value = "{{ old('email') }}"id="email" placeholder="name@example.com" autofocus required name = "email">
                        <label for="email">Email address</label>

                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name = "password">
                        <label for="password">Password</label>

                        <div class="invalid-feedback">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
        
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                </form>

                <small class = "mt-2">Not registered? Please <a href="/register">Register Now!</a></small>
            </main>
        </div>
    </div>

    
@endsection
