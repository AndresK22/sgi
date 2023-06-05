@extends('layout.index')

@section('title', 'SGI Farmacia Don Evelio')

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/lg.png') }}" style="max-width: 50%;max-height: 40px" alt="">
                Farmacia Don Evelio
            </a> 
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endsection


@section('content')

    @if (session('status'))
        <div class="row">
            <div class="col">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <p>{{ session('status') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (session('alert'))
        <div class="row">
            <div class="col">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <p>{{ session('alert') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card d-flex flex-column align">
                <div class="card-body">
                    <h4 class="card-title text-center mb-5"><b>Iniciar sesión</b></h4>

										<form action="{{ route('login.login') }}" method="POST">
											<!-- Email input -->
											@csrf

                        <div class="form-outline mb-5">
                            <input id="email" name="email" type="email" value="{{ old('email') }}"
                                class="form-control" required>
                            <label class="form-label" for="form2Example1">Correo Electronico</label>
                            @if ($errors->has('email'))
                                @error('email')
                                    <span class="helper-text">{{ $message }}</span>
                                @enderror
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-5">

                            <input id="password" name="password" type="password" class="form-control" required>
                            <label class="form-label" for="password">Contrase&ntilde;a</label>
                            @if ($errors->has('password'))
                                @error('password')
                                    <span class="helper-text">{{ $message }}</span>
                                @enderror
                            @endif
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-1">
                            <div class="col d-flex justify-content-center">

                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit" name="action">Ingresar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>





@endsection
