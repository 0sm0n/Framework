@extends('index')

@yield('title', 'Страница авторизации')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('login') }}" method="POST">
                    @if(session()->has('errorSuccess'))
                        <div class="alert alert-danger">{{ session()->get('errorSuccess') }}</div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваше почта</label>
                        <input type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               id="inputEmail"
                               name="email"
                               aria-describedby="invalidEmail">
                        @error('email')
                        <div id="invalidEmail" class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваше пароль</label>
                        <input type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="inputPassword"
                               name="password"
                               aria-describedby="invalidPassword">
                        @error('password')
                        <div id="invalidPassword" class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Авторизация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
