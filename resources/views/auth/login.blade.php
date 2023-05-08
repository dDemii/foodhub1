@extends('layouts.app')

@section('content')
<body class="body-login2">
    <div id="app">

    <div class="container-login2">
        <div class="row ">
            
                <div class="col align-self-center">
                    <h2 class="login-fh2">Food<span>Hub</span></h2>        

                    <h1 class="login-h12">Satisfy Your<br>Cravings In<br>A Click!</h1>
                </div>

                    <div class="card col col-custom-login2">
                        <div class="card-header">

                            <h1 class="login-header2 my-sm-3">Member Login</h1>

                        </div>

                        <div class="card-body mx-auto">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">

                                    <div class="col-auto">
                                        <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mb-3">

                                    <div class="col-auto">
                                        <input id="password" type="password" placeholder="Password (6+ Characters)" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="row mx-auto">

                                <div class="d-flex justify-content-between align-items-center mb-3">

<button type="submit" class="btn btn-outline-lig2">
    {{ __('Login') }}
</button>

<span>or</span>

<a class="navbar-brand fw-bold log2" href="{{ route('register') }}">
    Sign Up
</a>
</p>
                                    

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection
