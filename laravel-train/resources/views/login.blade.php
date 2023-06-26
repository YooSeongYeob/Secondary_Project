<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>로그인</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('login.submit') }}">
    @csrf

    <div>
        <label for="email">이메일</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">비밀번호</label>
        <input type="password" name="password" id="password" required>
    </div>

    <button type="submit">로그인</button>
</form>
</body>
</html>