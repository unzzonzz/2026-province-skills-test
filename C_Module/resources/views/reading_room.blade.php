<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/data_room.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="login-popup" hidden>
    <div class="login-popup-background">
        <div class="login-popup">
            <div class="popup-top">
                <h3>로그인</h3>
                <label for="login-popup"><div class="button">닫기</div></label>
            </div>
            <form action="">
                <div class="group horizontal">
                    <p>아이디</p>
                    <input type="text" name="id">
                </div>
                <div class="group horizontal">
                    <p>비밀번호</p>
                    <input type="password" name="password">
                </div>
                <button class="login-button">Login</button>
            </form>
        </div>
    </div>
    <x-layout.header />
    <main>
        <div class="main inner">
            <section>
                <div class="section-title">
                    <div class="small-text">READING ROOM</div>
                    <div class="main-text">열람실 예약</div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer inner">
            <div class="footer-top">
                <div class="group-flex">
                    <a href="/"><div class="logo"><img src="./logo.png" alt=""></div></a>
                    <div class="group">
                        <b>스킬스북도서관</b>
                        <p>인천시 부평구 무네미로 448번길 77 한국산업인력공단 글로벌숙련기술진흥원</p>
                        <p><b>1644-8000</b> 운영시간(평일) 09:00~18:00</p>
                    </div>
                </div>
                <div class="group sns">
                    <p>FOLLOW US</p>
                    <div class="sns">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-github-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom"><p>COPYRIGHTⓒ 2016 HRDKOREA</p></div>
        </div>
    </footer>
</body>
</html>