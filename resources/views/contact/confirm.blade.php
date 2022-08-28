@extends('layouts.app')

@section('content')
<div class="content">
  <h1>内容確認</h1>
  <div>
    <form method="POST" action="/contact/thanks">
      @csrf

      <div class="form-item">
        <label for="last-name" class="form-item-name">お名前</label>
        <div>
          <p>{{ $input['name'] }}</p>
        </div>
      </div>

      <div class="form-item">
        <label for="gender" class="form-item-gender">性別</label>
        <div>
          <p>{{ $input['gender'] }}</p>
        </div>
      </div>

      <div class="form-item">
        <label for="email" class="form-item-email">メールアドレス</label>
        <div>
          <p>{{ $input['email'] }}</p>
        </div>
      </div>

      <div class="form-item">
        <label for="postcode" class="form-item-post">郵便番号</label>
        <div>
          <p>{{ $input['postcode'] }}</p>
        </div>
      </div>

      <div class="form-item">
        <label for="address" class="form-item-address">住所</label>
        <div>
          <p>{{ $input['address'] }}</p>
        </div>
      </div>

      <div class="form-item">
        <label for="building-name" class="form-item-building">建物名</label>
        <div>
          <p>{{ $input['building'] }}</p>
        </div>
      </div>


      <div class="form-item">
        <label for="contact" class="form-item-contact">ご意見</label>
        <div>
          <p>{!! nl2br(htmlspecialchars($input['contact'], ENT_QUOTES, 'UTF-8')) !!}</p>
        </div>
      </div>

      <div>
        <div class="btn">
          <button type="submit" name="submit" class="send-btn">送信</button>
        </div>
        <div class="back">  
          <a href="/contact">修正する</a>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection