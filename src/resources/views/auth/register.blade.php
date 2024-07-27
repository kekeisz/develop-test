@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
<div class="header__button">
    <a href="/login" class="header__button-text">login</a>
</div>
@endsection

@section('content')
<div class="content">
    <div class="form__title">
        <h2 class="content-title">Register</h2>
    </div>
    <div class="register-form">
        <form action="/register" class="form" method="post">
        @csrf
            <div class="form__row">
                <p class="form__label">お名前</p>
            </div>
            <div class="form__row">
                <input type="text" class="form__input" name="name" value="{{ old('name') }}" placeholder="例:山田 太郎">
            </div>
            <div class="form__row">
                <p class="form__message">
                    @error ('name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
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
                    登録
                </button>
            </div>
        </form>
    </div>
</div>
@endsection