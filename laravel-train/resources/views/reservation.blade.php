<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>승차권 예매</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="{{ route('reservations.store') }}">
    @csrf

    <div>
        <label for="seat_no">좌석번호</label>
        <input type="text" name="seat_no" id="seat_no" required>
    </div>

    <div>
        <label for="route_id">노선</label>
        <select name="route_id" id="route_id" required>
            @foreach ($routes as $route)
                <option value="{{ $route->route_id }}">{{ $route->station_start }} - {{ $route->station_end }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="pay_amount">지불금액</label>
        <input type="number" name="pay_amount" id="pay_amount" required>
    </div>

    <div>
        <label for="pay_method">지불방법</label>
        <select name="pay_method" id="pay_method" required>
            <option value="0">카드</option>
            <option value="1">현금</option>
            <option value="2">이체</option>
        </select>
    </div>
    
    <button type="submit">예매하기</button>
</form>
</body>
</html>