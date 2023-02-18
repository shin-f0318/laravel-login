<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ログインフォーム</title>

    {{-- Style --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">

    {{-- Script --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="text-center">
    
    <form class="form-signin" action="{{ route('login') }}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>

        @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">
                <li>{{$error}}</li>
            </ul>
        @endforeach 
        
        @if(session('login_error'))
            <div class="alert alert-danger">
                {{ session('login_error') }}
            </div>
        @endif
        
        @if(session('logout'))
            <div class="alert alert-danger">
                {{ session('logout') }}
            </div>
        @endif

        <label for="inputEmail" class="sr-only">メールアドレス</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>

        <br>

        <label for="inputPassword" class="sr-only">パスワード</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">

        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    
    </form>

</body>
</html>