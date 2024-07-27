@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content-title')
<h2 class="content-title">Confirm</h2>
@endsection

@section('content')
<div class="form__title">
    <h2 class="content-title">Confirm</h2>
</div>
<div class="contact__form">
    <table class="confirm__table">
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">お名前</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p type="text" class="confirm__item">{{$contact['name']}}</p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">性別</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p type="text" class="confirm__item">
                        @if ($contact['gender'] == '1')
                        {{'男性'}}
                        @elseif ($contact['gender'] == '2')
                        {{'女性'}}
                        @else
                        {{'その他'}}
                        @endif
                    </p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">メールアドレス</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p type="text" class="confirm__item">{{$contact['email']}}</p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">電話番号</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p type="text" class="confirm__item">{{$contact['tel']}}</p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">住所</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p type="text" class="confirm__item">{{$contact['address']}}</p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">建物名</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p type="text" class="confirm__item">{{$contact['building']}}</p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group">
            <th class="confirm__label">
                <p class="confirm__label-text">お問い合わせの種類</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p class="confirm__item">{{ $category['content'] }}</p>
                </div>
            </td>
        </tr>
        <tr class="confirm__group-detail">
            <th class="confirm__label">
                <p class="confirm__label-text">お問い合わせ内容</p>
            </th>
            <td class="confirm__content">
                <div class="confirm__content-box">
                    <p class="confirm__item-detail">{{ $contact['detail'] }}</p>
                </div>
            </td>
        </tr>
    </table>
    <div class="form__button-group">
        <form action="/thanks" class="form" method="post">
            @csrf
            <div class="form__input-box">
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" />
                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" />
                <input type="hidden" class="confirm__item-input" name="gender" value="{{ $contact['gender'] }}" readonly />
                <input type="hidden" name="email" value="{{ $contact['email'] }}"/>
                <input type="hidden" name="tel" value="{{ $contact['tel'] }}"/>
                <input type="hidden" name="address" value="{{ $contact['address'] }}"/>
                <input type="hidden" name="building" value="{{ $contact['building'] }}"/>
                <input type="hidden" name="category_id" value="{{ $category['id'] }}">
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}"/>
            </div>
            <div class="form__button">
                <button class="form__button-submit">送信</button>
            </div>
        </form>
        <div class="button__reform">
            <a href="/" class="form__reform-text">修正</a>
        </div>
    </div>
</div>
@endsection