@extends('layouts.app')

@section('content')
<div class="content">
  <div class="message">
    <p>{{ __('ご意見いただきありがとうございました。') }}</p>
  </div>
  <div class="btn">
    <button type="submit" name="submit" class="top-btn">トップページへ</button>
  </div>
</div>
@endsection