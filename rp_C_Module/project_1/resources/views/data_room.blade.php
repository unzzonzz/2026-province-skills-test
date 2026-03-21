<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/data_room.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <x-layout.header />
    <main>
        <div class="main-inner">
            <section class="data-room">
                <div class="section-title">
                    <span class="text-1">DATA ROOM</span>
                    <span class="text-2">자료실</span>
                </div>
                <div class="books">
                    @foreach($books as $book)
                    <div class="book">
                        <img src="" alt="책 표지">
                        <div class="text-area">
                            <div class="name">{{ $book->name }}</div>
                            <div class="author">{{ $book->author }}</div>
                            <div class="price">{{ number_format($book->price) }}원</div>
                            <div class="publication-date">발행년도: {{ $book->publication_date }}</div>
                            <div class="rent-able">{{ $book->is_rented ? '대출 중' : '대출 가능' }} ({{ Carbon\Carbon::now()->addDays(10)->format('Y-m-d') }}까지)</div>
                            <form action="data_room/{{ $book->id }}/rent" method="POST">
                                @csrf
                                <button>대출하기</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
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
</body>
</html>