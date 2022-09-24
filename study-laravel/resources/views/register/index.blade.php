@extends('layouts.main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-lg-5 text-center mt-5">
            <main class="form-registration w-100 m-auto">
                <form action="/register" method="post">
                    @csrf {{-- untuk security issue, menolak request dari website lain --}}

                    <h1 class="h3 mb-3 fw-normal">Register</h1>
        
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror " id="floatingInput" placeholder="name" value =" {{ old('name') }}" name = "name" >
                        <label for="floatingInput">Name</label>
    
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror " id="floatingInput" placeholder="username" value =" {{ old('username') }}"name = "username">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror " id="floatingInput" placeholder="email" value =" {{ old('email') }}"name = "email">
                        <label for="floatingInput">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror " id="floatingInput" placeholder="password" name = "password">
                        <label for="floatingInput">password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

        

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
                </form>

            </main>
        </div>
    </div>

    
@endsection
