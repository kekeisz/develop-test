@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="form__title">
    <h2 class="content-title">Contact</h2>
</div>
<div class="contact__form">
    <form action="/confirm" class="form" method="post">
        @csrf
        <div class="form__box">
            <div class="form__label-box--name">
                <div class="form__label">
                    <span class="form__label-title">お名前</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--nameL">
                <div class="form__input-group">
                    <input class="form__input-name" type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                </div>
            </div>
            <div class="form__input-box--nameF">
                <div class="form__input-group">
                    <input class="form__input-name" type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                </div>
            </div>
            <div class="form__message-box--nameL">
                <p class="message__error">
                    @error ('last_name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__message-box--nameF">
                <p class="message__error">
                    @error ('first_name')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__label-box--gender">
                <div class="form__label">
                    <span class="form__label-title">性別</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--gender">
                <div class="form__input-group">
                    <div class="form__input-radio">
                        <div class="form__radio-column">
                            <input class="form__input-gender" type="radio" name="gender" value="1" checked value="{{ old('gender') }}" />
                            <label for="men" class="form__radio-text">男性</label>
                        </div>
                        <div class="form__radio-column">
                            <input class="form__input-gender" type="radio" name="gender" value="2" value="{{ old('gender') }}" />
                            <label for="women" class="form__radio-text">女性</label>
                        </div>
                        <div class="form__radio-column">
                            <input class="form__input-gender" type="radio" name="gender" value="3" value="{{ old('gender') }}" />
                            <label for="others" class="form__radio-text">その他</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__message-box--gender">
                <p class="message__error">
                    @error ('gender')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__label-box--email">
                <div class="form__label">
                    <span class="form__label-title">メールアドレス</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--email">
                <div class="form__input-group">
                    <input class="form__input-email" type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
            </div>
            <div class="form__message-box--email">
                <p class="message__error">
                    @error ('email')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__label-box--tel">
                <div class="form__label">
                    <span class="form__label-title">電話番号</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--tel1">
                <div class="form__input-group">
                    <input class="form__input-tel" type="tel" name="tel1" placeholder="080" value="{{ old('tel1') }}" />
                    <span class="tel__hyphen1">-</span>
                </div>
            </div>
            <div class="form__input-box--tel2">
                <div class="form__input-group">
                    <input class="form__input-tel" type="tel" name="tel2" placeholder="1234" value="{{ old('tel2') }}" />
                </div>
            </div>
            <div class="form__input-box--tel3">
                <div class="form__input-group">
                    <span class="tel__hyphen3">-</span>
                    <input class="form__input-tel" type="tel" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
                </div>
            </div>
            <div class="form__message-box--tel1">
                <p class="message__error">
                    @error ('tel1')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__message-box--tel2">
                <p class="message__error">
                    @error ('tel2')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__message-box--tel3">
                <p class="message__error">
                    @error ('tel3')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__label-box--address">
                <div class="form__label">
                    <span class="form__label-title">住所</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--address">
                <div class="form__input-group">
                    <input class="form__input-address" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
            </div>
            <div class="form__message-box--address">
                <p class="message__error">
                    @error ('address')
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form__label-box--building">
                <div class="form__label">
                    <span class="form__label-title">建物名</span>
                </div>
            </div>
            <div class="form__input-box--building">
                <div class="form__input-group">
                    <input class="form__input-building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
            </div>
            <div class="form__label-box--content">
                <div class="form__label">
                    <span class="form__label-title">お問い合わせの種類</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--content">
                <div class="form__input-group">
                    <select name="category_id" class="form__input-content" >
                        <option disabled selected value>選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問い合わせ</option>
                        <option value="5">その他</option>
                    </select>
                </div>
                <div class="form_message-box--content">
                    <p class="message__error">
                        @error ('content')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="form__label-box--detail">
                <div class="form__label">
                    <span class="form__label-title">お問い合わせ内容</span>
                    <span class="form__label-required">※</span>
                </div>
            </div>
            <div class="form__input-box--detail">
                <div class="form__input-group">
                    <textarea class="form__input-detail" name="detail" placeholder="お問い合わせの内容をご記載ください" value="{{ old('detail') }}" ></textarea>
                </div>
                <div class="form__message-box--detail">
                    <p class="message__error">
                        @error ('detail')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="form__button-box">
                <div class="form__button">
                    <button class="form__button-submit">確認画面</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection