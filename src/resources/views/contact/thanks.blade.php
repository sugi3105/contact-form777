@extends('layout.app')

@section('content')
<div class="thanks">
    <h2 class="thanks__title">お問い合わせありがとうございました</h2>
    <p class="thanks__text">
        内容を確認のうえ、担当者よりご連絡いたします
    </p>

    <div class="thaks__button">
        <a href="{{ route('content.index') }}>トップへ戻る</a>
    </div>
</div>
@endsection