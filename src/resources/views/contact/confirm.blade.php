@extends('layout.app')

@section('content')
<div class="confirm">
    <h2 class="confirm__title">Confirm</h2>

    <form class="form" action="/contact/store" method="post">
        @csrf

        <div class="confirm__group">
            <p class="confirm__lavel">お名前</p>
            <p class="confirm__value">{{ $contact['name'] }}</p>
            <input type="hidden" name="name" value="{{ $contact['name']  }}">
        </div>
        <div class="confirm__group">
            <p class="confirm__lavel">性別</p>
            <p class="confirm__value">
                @if ($contact['gender'] == 1) 男性
                @elself ($contact['gender'] == 2) 女性
                @else その他
                @endif
            </p>
            <input type="hidden" name="gender" value="{{ $content['gender'] }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">メールアドレス</p>
            <p class="confirm__value">{{ $contact['email'] }}</p>
            <input type="hidden" name="email" value="{{ $contact['email']  }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">電話番号</p>
            <p class="confirm__value">{{ $contact['tel'] }}</p>
            <input type="hidden" name="tel" value="{{ $contact['tel']  }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">郵便番号</p>
            <p class="confirm__value">{{ $contact['postcode'] }}</p>
            <input type="hidden" name="postcode" value="{{ $contact['postcode']  }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">住所</p>
            <p class="confirm__value">{{ $contact['address'] }}</p>
            <input type="hidden" name="address" value="{{ $contact['address']  }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">建物名</p>
            <p class="confirm__value">{{ $contact['building_name'] }}</p>
            <input type="hidden" name="building_name" value="{{ $contact['building_name']  }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">お問い合わせの種類</p>
            <p class="confirm__value">{{ $category->content'] }}</p>
            <input type="hidden" name="category_id" value="{{ $contact['category_id']  }}">
        </div>

        <div class="confirm__group">
            <p class="confirm__lavel">お問い合わせ内容</p>
            <p class="confirm__value">{{ $contact['detail'] }}</p>
            <input type="hidden" name="detail" value="{{ $contact['detail']  }}">
        </div>

        <div class="confirm__button">
            <button type="submit">送信</button>
        </div>
    </form>

    <form class="form" action="/contact/index" method="get">
        <button type="submit">修正</button>
    </form>
</div>
@endsection
        
        
        
        
