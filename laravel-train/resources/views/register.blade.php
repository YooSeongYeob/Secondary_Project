<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>회원가입</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('register.submit') }}">
    @csrf

    <div>
        <label for="name">이름</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="email">이메일</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">비밀번호</label>
        <input type="password" name="password" id="password" required>
    </div>

    <div>
        <label for="password_confirmation">비밀번호 확인</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
    </div>

    <button type="submit">회원가입</button>
</form>
</body>
</html>