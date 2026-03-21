<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/mypage.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <x-layout.header />
    <main>
        <div class="main-inner">
            <section class="mypage">
                <div class="section-title">
                    <span class="text-1">MY PAGE</span>
                    <span class="text-2">마이페이지</span>
                </div>
            </section>
            <section class="reading-room">
                <div class="section-title">
                    <span class="text-1">READING ROOM</span>
                    <span class="text-2">열람실예약현황</span>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>좌석번호</th>
                            <th>예약일</th>
                            <th>시작시간</th>
                            <th>종료시간</th>
                            <th>예약자 아이디</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                            <td>@foreach($reservation->seats as $seat) {{ $seat }}번 @endforeach</td>
                            <td>{{ $reservation->reservation_date }}</td>
                            <td>{{ $reservation->start_time }}</td>
                            <td>{{ $reservation->end_time }}</td>
                            <td>{{ $reservation->user_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div class="logo"><a href="index.html"><img src="./logo.png" alt="로고"></a></div>
                <div class="content-1">
                    <span class="text-1">스킬스북도서관</span>
                    <span class="text-2">인천시 부평구 무네미로 448번길 77 한국산업인력공단 글로벌숙련기술진흥원</span>
                    <span class="text-3"><span class="text-4">1644-8000</span> 운영시간(평일) 09:00~18:00</span>
                </div>
                <div class="content-2">
                    <div class="text-5">FOLLOW US</div>
                    <div class="sns-content">
                        <div class="sns"><i class="fab fa-facebook-square"></i></div>
                        <div class="sns"><i class="fab fa-instagram-square"></i></div>
                        <div class="sns"><i class="fab fa-youtube-square"></i></div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="text-6">COPYRIGHTⓒ 2016 HRDKOREA</div>
            </div>
        </div>
    </footer>
</body>
</html>