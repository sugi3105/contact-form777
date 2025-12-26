@extends('layouts.app')

@section('content')
<div class="contact">
    <h2>お問い合わせ</h2>

    <form class="form" action="{{ route('contact.confirm') }}" method="post">
    @csrf
<div class="form__group">
        <label>お名前</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <p class="error">{{ $errors->first('name') }}</p>
</div>

<div class="form__group">
        <label>性別</label>
        <label>
        <input type="radio" name="gender" value="1" @checked(old('gender') == '1' )>
        男性
        </label>
        <label>
        <input type="radio" name="gender" value="2" @checked(old('gender') == '2' )>
        女性
        </label>
        <input type="radio" name="gender" value="3" @checked(old('gender') == '3' )>
        その他
        </label>
        <p class="error">{{ $errors->first('gender') }}</p>
</div>

<div class="form__group">
    <label>メールアドレス</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <p class="error">{{ $errors->first('email') }}</p>
</div>

<div class="form__group">
    <label>電話番号</label>
        <input type="text" name="tel" value="{{ old('tel') }}">
        <p class="error">{{ $errors->first('tel') }}</p>
</div>

<div class="form__group">
    <label>郵便番号</label>
        <input type="text" name="postcode" value="{{ old('postcode') }}">
         <p class="error">{{ $errors->first('postcode') }}</p>
</div>

<div class="form__group">
    <label>住所</label>
        <input type="text" name="address" value="{{ old('address') }}">
        <p class="error">{{ $errors->first('address') }}</p> 
</div>

<div class="form__group">
    <label>建物名</label>
        <input type="text" name="building" value="{{ old('building') }}">
        
</div>

<div class="form__group">
    <label>お問い合わせの種類</label>
    <select name="category_id">
        <option value="">選択してください</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">
        {{ old('category_id') == $category->id ? 'selected' : '' }}>
        {{ $category->content}}
        </option>
        @endforeach
</select>
        <p class="error">{{ $errors->first('category_id') }}</p> 
</div>

<div class="form__group">
    <label>お問い合わせの内容</label>
    <textarea name="detail">{{ old('detail') }}</textarea>
    <p class="error">{{ $errors->first('datail') }}</p>     
</div>

<div class="form__button">
    <button type="submit">確認画面へ</button>
</div>
</form>
</div>
@endsection









