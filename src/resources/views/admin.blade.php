@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('button')
<form action="/logout" class="header__button" method="post">
    @csrf
    <button class="header__button-text">logout</button>
</form>
@endsection

@section('content')
<div class="content">
    <div class="form__title">
        <h2 class="content-title">Admin</h2>
    </div>
    <div class="search-contact">
        <div class="search-contact__item">

        </div>
        <div class="search-contact__item">
            <div class="contact-export"></div>
            <div class="paginate">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
    <div class="contact">
        <table class="contact__table">
            <tr class="table__row">
                <th class="table__header-label">お名前</th>
                <th class="table__header-label">性別</th>
                <th class="table__header-label">メールアドレス</th>
                <th class="table__header-label">お問い合わせの種類</th>
                <th></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="table__row-item">
                <td class="contact-item">{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
                <td class="contact-item">
                    @if ($contact['gender'] == '1')
                        {{'男性'}}
                        @elseif ($contact['gender'] == '2')
                        {{'女性'}}
                        @else
                        {{'その他'}}
                        @endif
                </td>
                <td class="contact-item">{{ $contact['email'] }}</td>
                <td class="contact-item">{{ $contact['category']['content'] }}</td>
                <td class="contact-button">
                    <div class="contact-detail">
                        <a href="" class="detail__button">詳細</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection