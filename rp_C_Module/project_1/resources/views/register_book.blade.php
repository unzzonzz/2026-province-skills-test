@if(!auth()->check() || auth()->user()->username != 'admin')
<script>location.href = "/"</script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" placeholder="viewport">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/register_book.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <x-layout.header />
    <main>
        <div class="main-inner">
            <section class="data-room">
                <div class="section-title">
                    <span class="text-1">REGISTER BOOK</span>
                    <span class="text-2">신규도서등록</span>
                </div>
                <form action="book/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="author" placeholder="author">
                    <input type="text" name="publisher" placeholder="publisher">
                    <input type="file" accept=".jpg, .jpeg, .png" name="image" placeholder="image">
                    <input type="text" name="publication_date" placeholder="publication_date">
                    <input type="number" name="price" placeholder="price">
                    <button>등록</button>
                </form>
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