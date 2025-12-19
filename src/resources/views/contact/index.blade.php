@extends('layouts.app')

@section('content')
<div class="contact">
    <h2 class="contact__title">Contact</h2>

    <form class="form" action="contacts/confirm" method="post"
    @csrf
<div class="form__group">
        <label>お名前<span> </span></label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
        {{ $message }}
        @enderror
</div>

<div class="form__group">
        <label>性別<span> </span></label>
        <label>
        <input type="radio" name="gender" value="1" {{ old('gender') =='1' ? 'checked' : '' }}>
        男性
        </label>
        <label>
        <input type="radio" name="gender" value="2" {{ old('gender') =='2' ? 'checked' : '' }}>
        女性
        </label>
        <input type="radio" name="gender" value="3" {{ old('gender') =='3' ? 'checked' : '' }}>
        その他
        </label>
</div>

<div class="form__group">
    <label>メールアドレス<span> </span></label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
        {{ $message }}
        @enderror
</div>

<div class="form__group">
    <label>郵便番号<span> </span></label>
        <input type="text" name="postcode" value="{{ old('postcode') }}">
</div>

<div class="form__group">
    <label>建物名<span> </span></label>
        <input type="text" name="building" value="{{ old('building') }}">
</div>

<div class="form__group">
    <label>お問い合わせの種類<span> </span></label>
    <select name="category_id">
        <option value="">選択してください。</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}"
        {{ old('category_id') ==$category->id ? 'selected' : '' }}>
        {{ $category->content}}
        </option>
        @endforeach
</select>
</div>

<div class="form__group">
    <label>お問い合わせの内容<span> </span></label>
    <textarea name="detail">{{ old('detail') }}</textarea>
</div>

<div class="form__button">
    <button type="submit">確認画面</button>
</div>
</form>
</div>
@endsection









