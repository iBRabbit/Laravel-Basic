@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-4 text-center mt-5">

            @if(session() -> has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <form>
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
        
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
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