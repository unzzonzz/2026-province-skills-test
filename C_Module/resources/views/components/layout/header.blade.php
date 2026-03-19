@error('username')
    @if($message === 'UNIQUE_ERROR')<script>alert('이미 존재하는 아이디입니다.')</script>@endif
@enderror
@if(session('LOGIN_ERROR'))
    <script>alert('{{ session("LOGIN_ERROR") }}')</script>
@endif
<input type="checkbox" id="register-popup" hidden>
<div class="register-popup-background">
    <div class="register-popup">
        <div class="popup-top">
            <h3>회원가입</h3>
            <label for="register-popup"><div class="button">닫기</div></label>
        </div>
        <form action="/register" method="POST">
            @csrf
            <div class="group horizontal">
                <p>아이디</p>
                <input type="text" name="username" required>
            </div>
            <div class="group horizontal">
                <p>이름</p>
                <input type="text" name="name" required>
            </div>
            <div class="group horizontal">
                <p>비밀번호</p>
                <input type="password" name="password">
            </div>
            <button class="login-button">회원가입</button>
        </form>
    </div>
</div>
<input type="checkbox" id="login-popup" hidden>
<div class="login-popup-background">
    <div class="login-popup">
        <div class="popup-top">
            <h3>로그인</h3>
            <label for="login-popup"><div class="button">닫기</div></label>
        </div>
        <form action="/login" method="POST">
            @csrf
            <div class="group horizontal">
                <p>아이디</p>
                <input type="text" name="username" required>
            </div>
            <div class="group horizontal">
                <p>비밀번호</p>
                <input type="password" name="password">
            </div>
            <button class="login-button">Login</button>
        </form>
    </div>
</div>
<header>
  <div class="header inner">
      <a href="/"><div class="logo"><img src="./logo.png" alt="로고"></div></a>
      <nav class="menu">
          <ul>
              <li>
                  <input type="text" class="focus-input">
                  <a href="#">도서관소개 <div class="icon"></div></a>
                  <ul class="menu-active">
                      <li><a href="introduce">도서관소개</a></li>
                      <li><a href="library-state">도서관현황</a></li>
                  </ul>
              </li>
              <li>
                  <input type="text" class="focus-input">
                  <a href="#">도서자료실 <div class="icon"></div></a>
                  <ul class="menu-active">
                      <li><a href="data-room">자료실</a></li>
                      <li><a href="reading-room">열람실예약</a></li>
                  </ul>
              </li>
              <li>
                  <input type="text" class="focus-input">
                  <a href="#">회원서비스 <div class="icon"></div></a>
                  <ul class="menu-active">
                      <li><a href="#">회원가입</a></li>
                      <li><a href="#">마이페이지</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#">도서검색</a>
              </li>
              <li>
                  <input type="text" class="focus-input">
                  <a href="#">도서관리자 <div class="icon"></div></a>
                  <ul class="menu-active">
                      <li><a href="#">신규도서등록</a></li>
                      <li><a href="#">대출/열람실 업무조회</a></li>
                  </ul>
              </li>
          </ul>
      </nav>
      <nav class="auth">
          <ul>
            @guest
                <label for="login-popup"><li><div class="button">로그인</div></li></label>
                <label for="register-popup"><li><div class="high-light button">회원가입</div></li></label>
            @endguest
            @auth
                <li><div class="text">{{ auth()->user()->name }}({{ auth()->user()->username }})</div></li>
                <li>
                    <form action="logout" method="POST">
                        @csrf    
                        <button class="button">로그아웃</button>
                    </form>
                </li>
            @endauth
          </ul>
      </nav>
  </div>
</header>