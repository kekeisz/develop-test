@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('button')
<div class="header__button">
    <a href="/register" class="header__button-text">register</a>
</div>
@endsection

@section('content')
<div class="content">
    <div class="form__title">
        <h2 class="content-title">Login</h2>
    </div>
    <div class="register-form">
        <form action="/login" class="form" method="post">
        @csrf
            <div class="form__row">
                <p class="form__label">メールアドレス</p>
            </div>
            <div class="form__row">
                <input type="email" class="form__input" name="email" value="{{ old('email') }}" placeholder="例:text@example.com">
            </div>
            <div class="form__row">
                <p class="form__message">
                    @error ('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__row">
                <p class="form__label">パスワード</p>
            </div>
            <div class="form__row">
                <input type="password" class="form__input" name="password" value="{{ old('password') }}" placeholder="例:coachtech1106">
            </div>
            <div class="form__row">
                <p class="form__message">
                    @error ('password')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__button">
                <button class="form__button-submit">
                    ログイン
                </button>
            </div>
        </form>
    </div>
</div>
@endsection