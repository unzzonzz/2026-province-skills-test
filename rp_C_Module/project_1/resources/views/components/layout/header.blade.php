@if(session('login_error'))
<script>alert("{{ session('login_error') }}")</script>
@endif
@if(session('not_login'))
<script>alert("로그인 후 이용하실 수 있습니다.")</script>
@endif
@error('username')
<script>alert("{{ $message }}")</script>
@enderror
<input type="checkbox" id="login" hidden>
<div class="popup-overlay login">
    <div class="content">
        <div class="popup-top"><span class="text-1">로그인</span></div>
        <div class="popup-content">
            <form action="/login" method="POST">
                @csrf
                <input type="text" name="username" placeholder="아이디" required>
                <input type="text" name="password" placeholder="비밀번호" required>
                <button>Log In</button>
            </form>
        </div>
        <div class="popup-bottom"><label for="login">닫기</label></div>
    </div>
</div>
<input type="checkbox" id="register" hidden>
<div class="popup-overlay register">
    <div class="content">
        <div class="popup-top"><span class="text-1">회원가입</span></div>
        <div class="popup-content">
            <form action="/register" method="POST">
                @csrf
                <input type="text" name="username" placeholder="아이디" required>
                <input type="text" name="password" placeholder="비밀번호" required>
                <input type="text" name="name" placeholder="이름" required>
                <button>회원가입</button>
            </form>
        </div>
        <div class="popup-bottom"><label for="register">닫기</label></div>
    </div>
</div>
<header>
    <div class="header-inner">
        <div class="logo"><a href="/"><img src="./logo.png" alt="로고"></a></div>
        <nav class="main">
            <ul>
                <li>
                    <input type="text">
                    <a href="#">도서관소개 <div class="icon"><div class="bar-1"></div><div class="bar-2"></div></div></a>
                    <ul>
                        <li><a href="introduce">도서관소개</a></li>
                        <li><a href="#">도서관현황</a></li>
                    </ul>
                </li>
                <li>
                    <input type="text">
                    <a href="#">도서자료실 <div class="icon"><div class="bar-1"></div><div class="bar-2"></div></div></a>
                    <ul>
                        <li><a href="data_room">자료실</a></li>
                        <li><a href="reading_room">열람실예약</a></li>
                    </ul>
                </li>
                <li>
                    <input type="text">
                    <a href="#">회원서비스 <div class="icon"><div class="bar-1"></div><div class="bar-2"></div></div></a>
                    <ul>
                        <li><a href="#">회원가입</a></li>
                        <li><a href="mypage">마이페이지</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">도서검색</a>
                </li>
                <li>
                    <input type="text">
                    <a href="#">도서관리자 <div class="icon"><div class="bar-1"></div><div class="bar-2"></div></div></a>
                    <ul>
                        <li><a href="#">신규도서등록</a></li>
                        <li><a href="#">대출/열람실 업무조회</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="auth">
            <ul>
                @guest
                <li><label for="login"><div class="content-1">로그인</div></label></li>
                <li><label for="register"><div class="content-1">회원가입</div></label></li>
                @endguest
                @auth
                <li><span class="text-1">{{ auth()->user()->name }}({{ auth()->user()->username }})</span></li>
                <li><form action="/logout" method="POST">@csrf<button class="content-1">로그아웃</button></form></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>