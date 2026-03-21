<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/reading_room.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <script>
        const reservations = @json($reservations)
    </script>
    @if(session('reserve_error'))
    <script>alert("이미 중복된 예약이 있습니다.")</script>
    @endif
    <x-layout.header />
    <main>
        <div class="main-inner">
            <section class="reading-room">
                <div class="section-title">
                    <span class="text-1">READING ROOM</span>
                    <span class="text-2">열람실예약</span>
                </div>
                <div class="seats" id="seats"></div>
                <div class="group-1">
                    <span class="text-1">0개 선택됨</span>
                    <div class="group-2 hidden">
                        <form action="/reservation" method="POST">
                            @csrf
                            <input type="hidden" name="seats">
                            <input type="date" min="{{ now()->format('Y-m-d') }}" name="reservation_date" required>
                            <input type="time" name="start_time" required>
                            <input type="time" name="end_time" required>
                            <button>예약하기</button>
                        </form>
                    </div>
                </div>
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
    <script src="./js/reading_room.js"></script>
</body>
</html>