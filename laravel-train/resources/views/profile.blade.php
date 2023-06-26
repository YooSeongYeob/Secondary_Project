<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>회원정보</h1>

<p>이름: {{ $user->name }}</p>
<p>이메일: {{ $user->email }}</p>
</body>
</html>