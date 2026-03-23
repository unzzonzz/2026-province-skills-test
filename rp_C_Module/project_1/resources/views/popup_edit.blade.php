@if(!auth()->check() || auth()->user()->username != 'admin')
<script>location.href = "/"</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" placeholder="viewport">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/popup_management.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
</head>
<body>
    <x-layout.header />
    <main>
        <div class="main-inner">
            <section class="data-room">
                <div class="section-title">
                    <span class="text-1">POPUP EDIT</span>
                    <span class="text-2">팝업수정</span>
                </div>
                <form action="/popup/{{ $popup->id }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" placeholder="제목" value="{{ $popup->title }}">
                    <textarea name="content" id="" cols="30" rows="10" placeholder="내용">{{ $popup->content }}</textarea>
                    <input type="file" name="image" placeholder="이미지" value="{{ $popup->image }}">
                    <input type="date" name="start_date" placeholder="팝업시작일" value="{{ $popup->start_date }}">
                    <input type="date" name="end_date" placeholder="팝업종료일" value="{{ $popup->end_date }}">
                    <button>수정</button>
                </form>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div class="logo"><a href="index.html"><img src="/logo.png" alt="로고"></a></div>
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