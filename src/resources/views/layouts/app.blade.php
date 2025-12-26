<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">Contact Form</h1>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
</body>
</html>