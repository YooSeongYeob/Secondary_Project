<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // 요청 데이터 유효성 검사
        $request->validate([
            'seat_no' => 'required',
            'route_id' => 'required',
            'pay_amount' => 'required',
            'pay_method' => 'required',
        ]);

        // 인증된 사용자의 ID 가져오기
        $user_id = Auth::id();

        // 예매 정보 저장
        $reservation = Reservation::create([
            'seat_no' => $request->input('seat_no'),
            'route_id' => $request->input('route_id'),
            'member_id' => $user_id,
            'res_date_time' => now(),
            'pay_amount' => $request->input('pay_amount'),
            'pay_method' => $request->input('pay_method'),
        ]);

        // 예매 정보 저장 후 필요한 작업 수행
        // ...

        // 예매 정보 저장 성공 시 리디렉션 또는 응답
        return redirect()->route('reservation.show', ['id' => $reservation->id])
            ->with('success', '예매 정보가 성공적으로 저장되었습니다.');
    }
}
