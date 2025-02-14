@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration ">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">   
              @csrf       
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>                  
                @enderror

              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Userame</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>                  
                @enderror
              </div>

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@gmail.com" required value="{{ old('email') }}">
                <label for="email">Email Address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                  
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password"  required >
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                  
                @enderror
              </div>
          
              
              <button class="w-100 py-2 btn btn-primary mt-3" type="submit">Register</button>
             
            </form>

            <small class="d-block text-center mt-3">All ready registered? <a href="/login">Login</a></small>
        </main>       
    </div>
</div>

@endsection