@extends('layouts.app')

@section('content')
<div class="content">
  <h1>お問い合わせ</h1>
  <div>
    <form method="POST" action="/contact/confirm">
      @csrf

      <div class="form-item">
        <label for="name" class="form-item-name">お名前 <span class=content-required>※</span></label>
        <div class="error">
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        </div>
          <input id="last-name" type="text" name="name" value="{{ old('name') }}" autofocus class="form-item-input">
          <input id="first-name" type="text" name="name" value="{{ old('name') }}" autofocus class="form-item-input">
      </div>

      <div class="form-item">
        <label for="gender" class="form-item-gender">性別<span class=content-required>※</span></label>
        <div class="error">
        @error('gender')
        <p>{{ $message }}</p>
        @enderror
      </div>
        <div>
          <input id="gender" type="radio" name="gender" value="{{ old('gender') }}" autofocus>
          <label class="form-gender-label" for="radio">男性</label>
          <input id="gender" type="radio" name="gender" value="{{ old('gender') }}" autofocus>
          <label class="form-gender-label" for="radio">女性</label>
        </div>
      </div>

      <div class="form-item">
        <label for="email" class="form-item-email">メールアドレス <span class=content-required>※</span></label>
        <div class="error">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        </div>
          <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus class="form-item-input">
      </div>

      <div class="form-item">
        <label for="postcode" class="form-item-post">郵便番号<span class=content-required>※</span></label>
        <div class="error">
        @error('postcode')
        <p>{{ $message }}</p>
        @enderror
        </div>
        <span class=content-post>〒</span>
        <input id="postcode" type="text" name="postcode" value="{{ old('postcode') }}" autofocus class="form-item-input">
      </div>

      <div class="form-item">
        <label for="address" class="form-item-address">住所<span class=content-required>※</span></label>
        <div class="error">
        @error('address')
        <p>{{ $message }}</p>
        @enderror
        </div>
          <input id="address" type="text" name="address" value="{{ old('address') }}" autofocus class="form-item-input">
      </div>

      <div class="form-item">
        <label for="building" class="form-item-building">建物名</label>
          <input id="building" type="text" name="building" value="{{ old('building') }}" autofocus class="form-item-input">
      </div>

      <div class="form-item">
        <label for="contact" class="form-item-contact isMsg">ご意見<span class=content-required>※</span></label>
        <div class="error">
        @error('contact')
        <p>{{ $message }}</p>
        @enderror
        </div>
          <textarea id="contact" name="contact" class="form-item-textarea">{{ old('contact') }}</textarea>
      </div>

      <div>
        <div class="btn">
          <button type="submit" class="comfirmation-btn">確認</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection