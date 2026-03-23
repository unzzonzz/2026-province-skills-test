<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    @foreach($popups as $popup)
    <div class="popup-overlay admin-popup">
        <div class="content">
            <img src="{{ asset('storage/' . $popup->image) }}" alt="팝업 이미지">
            <div class="text-area">
                <div class="text-1">{{ $popup->title }}</div>
                <div class="text-2">{!! nl2br($popup->content) !!}</div>
            </div>
            <div class="popup-bottom"><div class="close">닫기</div></div>
        </div>
    </div>
    @endforeach
    <input type="checkbox" id="firstPopup" hidden checked>
    <div class="popup-overlay first-popup" hidden>
        <div class="content">
            <img src="assets/images/images (1).png" alt="">
            <div class="text-area">
                <div class="text-1">2025년 지방기능경기대회 참가원서 접수 공고사항을 아래 같이 알려드립니다.</div>
                <div class="text-2">
                    □ 접수기간 : 2025. 1. 13.(월) ～ 1. 24.(금) 18:00 마감 [12일간]<br>
                    □ 대상직종 : 웹디자인및개발 등 48개 직종<br>
                    □ 접수방법 : 마이스터넷 홈페이지 인터넷 접수
                </div>
            </div>
            <div class="popup-bottom"><label for="firstPopup">닫기</label></div>
        </div>
    </div>
    <x-layout.header />
    <main>
        <section class="visual">
            <div class="slide-cover">
                <div class="slide"><img src="assets/images/images (44).jpg" alt=""><div class="text-area">
                    <div class="category">LIBRARY</div>
                    <div class="content-1">지식이 숨쉬는 곳,<br>스킬스북도서관</div>
                    <div class="content-2">숙련기술인과 함께 성장하는 도서관</div>
                </div></div>
                <div class="slide"><img src="assets/images/images (62).jpg" alt=""><div class="text-area">
                    <div class="category">PROGRAM</div>
                    <div class="content-1">다채롭고 특별한 문화 경험과<br>다양한 프로그램</div>
                    <div class="content-2">월간 강연, 전시, 북콘서트를 만나보세요</div>
                </div></div>
                <div class="slide"><img src="assets/images/images (42).jpg" alt=""><div class="text-area">
                    <div class="category">BOOKS</div>
                    <div class="content-1">사서가 추천하는 이달의 도서</div>
                    <div class="content-2">당신을 사로잡을 한 권의 책을 발견하세요</div>
                </div></div>
            </div>
            <div class="status-bar"></div>
        </section>
        <div class="main-inner">
            <div class="section-group">
                <section class="news">
                    <div class="section-title">
                        <span class="text-1">LIBRARY NEWS</span>
                        <span class="text-2">도서관 소식</span>
                    </div>
                    <div class="section-content">
                        <input type="radio" name="news-tab" id="tab1" hidden checked>
                        <input type="radio" name="news-tab" id="tab2" hidden>
                        <input type="radio" name="news-tab" id="tab3" hidden>
                        <div class="tabs">
                            <label for="tab1"><div class="tab tab1">일반공지</div></label>
                            <label for="tab2"><div class="tab tab2">행사안내</div></label>
                            <label for="tab3"><div class="tab tab3">채용공지</div></label>
                        </div>
                        <div class="news-container">
                            <div class="news tab1">
                                <span class="text-1">더운 여름 힘내요 – 연구정보실 개실 6주년 기념이벤트 당첨자 발표</span>
                                <span class="text-2">2024-08-08</span>
                            </div>
                            <div class="news tab1">
                                <span class="text-1">더운 여름 힘내요 – 연구정보실 개실 6주년 기념이벤트</span>
                                <span class="text-2">2024-07-24</span>
                            </div>
                            <div class="news tab1">
                                <span class="text-1">연구자를 위한 텍스트 마이닝(심화) 교육생 모집 안내</span>
                                <span class="text-2">2024-07-17</span>
                            </div>
                            <div class="news tab1">
                                <span class="text-1">「실감체험관」 전국민 소문내기 이벤트 당첨자 발표</span>
                                <span class="text-2">2024-06-10</span>
                            </div>
                            <div class="news tab1">
                                <span class="text-1">디지털인문학과 네트워크 분석 교육생 모집 안내</span>
                                <span class="text-2">2024-05-14</span>
                            </div>
                            <div class="news tab1">
                                <span class="text-1">스킬스북도서관 -「청년 디지털 봉사단 ‘잇(IT)다’5기」- 최종 합격자 발표</span>
                                <span class="text-2">2024-05-10</span>
                            </div>
                            <div class="news tab2">
                                <span class="text-1">2024년 제9회 「월간 인문학을 만나다」 강연 안내</span>
                                <span class="text-2">2024-08-08</span>
                            </div>
                            <div class="news tab2">
                                <span class="text-1">「스킬스북도서관이 간식박스 쏩니다!」7월 당첨 발표</span>
                                <span class="text-2">2024-08-07</span>
                            </div>
                            <div class="news tab2">
                                <span class="text-1">별 헤는 「실감체험관」이벤트</span>
                                <span class="text-2">2024-07-25</span>
                            </div>
                            <div class="news tab2">
                                <span class="text-1">2024년 제8회 「월간 인문학을 만나다」 강연 안내</span>
                                <span class="text-2">2024-07-15</span>
                            </div>
                            <div class="news tab2">
                                <span class="text-1">스킬스북도서관이 간식박스 쏩니다!</span>
                                <span class="text-2">2024-07-02</span>
                            </div>
                            <div class="news tab2">
                                <span class="text-1">2024년 제7회 「월간 인문학을 만나다」 강연 안내</span>
                                <span class="text-2">2024-07-01</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">2024년 사서직 공무원 경력경쟁채용 필기시험 정답가안 공개 및 이의제기 안내</span>
                                <span class="text-2">2024-08-03</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">스킬스북도서관 공무직 근로자(미화) 채용 서류전형 합격자 및 면접전형 공고</span>
                                <span class="text-2">2024-08-02</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">2024년도 사서직 공무원 경력경쟁채용 필기시험 일정 ‧ 장소 및 응시자 준수사항 공고</span>
                                <span class="text-2">2024-07-26</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">스킬스북도서관 공무직 근로자(미화) 채용공고(재재공고)</span>
                                <span class="text-2">2024-07-24</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">스킬스북도서관 국가서지과 공무직 근로자 채용 최종 합격자 공고</span>
                                <span class="text-2">2024-07-18</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">스킬스북도서관 국가서지과 기간제 근로자(휴직대체) 채용 최종합격자 공고</span>
                                <span class="text-2">2024-07-16</span>
                            </div>
                            <div class="news tab3">
                                <span class="text-1">스킬스북도서관 국가서지과 공무직 근로자 채용 서류전형(1차) 합격자 발표 및 면접시험(2차) 계획 공고</span>
                                <span class="text-2">2024-07-05</span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="quick">
                    <div class="section-title">
                        <span class="text-1">QUICK</span>
                        <span class="text-2">자주찾는 메뉴</span>
                    </div>
                    <div class="menus">
                        <div class="menu">
                            <i class="fa fa-book-open"></i>
                            <span class="text-1">도서대출</span>
                        </div>
                        <div class="menu">
                            <i class="fa fa-book"></i>
                            <span class="text-1">도서반납</span>
                        </div>
                        <div class="menu">
                            <i class="fa fa-chair"></i>
                            <span class="text-1">좌석예약</span>
                        </div>
                        <div class="menu">
                            <i class="fa fa-book-reader"></i>
                            <span class="text-1">희망도서신청</span>
                        </div>
                        <div class="menu">
                            <i class="fa fa-robot"></i>
                            <span class="text-1">AI추천도서</span>
                        </div>
                        <div class="menu">
                            <i class="fa fa-laptop"></i>
                            <span class="text-1">전자도서관</span>
                        </div>
                    </div>
                </section>
            </div>
            <section class="program">
                <div class="section-title">
                    <span class="text-1">PROGRAM</span>
                    <span class="text-2">프로그램</span>
                </div>
                <input type="checkbox" name="program" id="program1" hidden>
                <input type="checkbox" name="program" id="program2" hidden>
                <input type="checkbox" name="program" id="program3" hidden>
                <input type="checkbox" name="program" id="program4" hidden>
                <input type="checkbox" name="program" id="program5" hidden>
                <input type="checkbox" name="program" id="program6" hidden>
                <input type="checkbox" name="program" id="program7" hidden>
                <input type="checkbox" name="program" id="program8" hidden>
                <div class="popup-overlay program-1">
                    <div class="content">
                        <div class="popup-top">피아니스트 김미정과 함께하는 힐링 클래식</div>
                        <div class="popup-content"><img src="./assets/program/1.jpg" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program1">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-2">
                    <div class="content">
                        <div class="popup-top">도란도란] 나를 찾아가는 마음챙김 그림책테라피</div>
                        <div class="popup-content"><img src="./assets/program/2.png" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program2">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-3">
                    <div class="content">
                        <div class="popup-top">신흥어울마당작은]2024년 하반기 프로그램 ' 뚝딱 한국사</div>
                        <div class="popup-content"><img src="./assets/program/3.jpg" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program3">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-4">
                    <div class="content">
                        <div class="popup-top">[수주](성인)마을미디어 교육생 모집</div>
                        <div class="popup-content"><img src="./assets/program/4.png" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program4">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-5">
                    <div class="content">
                        <div class="popup-top">나를 치유하는 명화</div>
                        <div class="popup-content"><img src="./assets/program/5.jpg" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program5">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-6">
                    <div class="content">
                        <div class="popup-top">[문화가 있는 날] 푸른 하늘이 좋아요</div>
                        <div class="popup-content"><img src="./assets/program/6.jpg" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program6">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-7">
                    <div class="content">
                        <div class="popup-top">책 속에서 사람을 만나다 </div>
                        <div class="popup-content"><img src="./assets/program/7.jpg" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program7">닫기</label></div>
                    </div>
                </div>
                <div class="popup-overlay program-8">
                    <div class="content">
                        <div class="popup-top">서울 문화의 밤(8월) 행사 - 국지승 그림책 작가와 방구석 북토크</div>
                        <div class="popup-content"><img src="./assets/program/8.jpg" alt="팝업이미지"></div>
                        <div class="popup-bottom"><label for="program8">닫기</label></div>
                    </div>
                </div>
                <div class="programs">
                    <label for="program1">
                        <div class="program">
                            <img src="./assets/program/1.jpg" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">피아니스트 김미정과 함께하는 힐링 클래식</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program2">
                        <div class="program">
                            <img src="./assets/program/2.png" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">도란도란] 나를 찾아가는 마음챙김 그림책테라피</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program3">
                        <div class="program">
                            <img src="./assets/program/3.jpg" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">신흥어울마당작은]2024년 하반기 프로그램 ' 뚝딱 한국사'</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program4">
                        <div class="program">
                            <img src="./assets/program/4.png" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">[수주](성인)마을미디어 교육생 모집</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program5">
                        <div class="program">
                            <img src="./assets/program/5.jpg" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">나를 치유하는 명화</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program6">
                        <div class="program">
                            <img src="./assets/program/6.jpg" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">[문화가 있는 날] 푸른 하늘이 좋아요!</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program7">
                        <div class="program">
                            <img src="./assets/program/7.jpg" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">책 속에서 사람을 만나다 </span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                    <label for="program8">
                        <div class="program">
                            <img src="./assets/program/8.jpg" alt="팝업이미지">
                            <div class="content-1">
                                <span class="text-1">서울 문화의 밤(8월) 행사 - 국지승 그림책 작가와 방구석 북토크</span>
                                <span class="text-2">자세히 보기</span>
                            </div>
                        </div>
                    </label>
                </div>
            </section>   
            <section class="schedule">
                <div class="section-title">
                    <span class="text-1">SCHEDULE</span>
                    <span class="text-2">행사달력</span>
                </div>
                <div class="group-1">
                    <div class="content-1">2026년 4월</div>
                    <div class="group-2">
                        <select name="" id="">
                            <option value="">2025년</option>
                            <option value="" selected>2026년</option>
                            <option value="">2027년</option>
                        </select>
                        <select name="" id="">
                            <option value="">1월</option>
                            <option value="">2월</option>
                            <option value="">3월</option>
                            <option value="" selected>4월</option>
                            <option value="">5월</option>
                            <option value="">6월</option>
                            <option value="">7월</option>
                            <option value="">8월</option>
                            <option value="">9월</option>
                            <option value="">10월</option>
                            <option value="">11월</option>
                            <option value="">12월</option>
                        </select>
                    </div>
                </div>
                <div class="calendar">
                    <div class="weeks">
                        <div class="week">월</div>
                        <div class="week">화</div>
                        <div class="week">수</div>
                        <div class="week">목</div>
                        <div class="week">금</div>
                        <div class="week">토</div>
                        <div class="week">일</div>
                    </div>
                    <div class="cells">
                        <div class="cell">
                            
                        </div>
                        <div class="cell">
                            
                        </div>
                        <div class="cell">
                            <div class="day">1</div>
                            <div class="content-2">전시[책피는숙련도서관] 4월 북큐레이션</div>
                        </div>
                        <div class="cell">
                            <div class="day">2</div>
                        </div>
                        <div class="cell">
                            <div class="day">3</div>
                            <div class="content-2">전시[책피는숙련도서관] 4월 북큐레이션</div>
                        </div>
                        <div class="cell">
                            <div class="day">4</div>
                        </div>
                        <div class="cell">
                            <div class="day">5</div>
                        </div>
                        <div class="cell">
                            <div class="day">6</div>
                            <div class="content-2">휴관 정기휴관일</div>
                        </div>
                        <div class="cell">
                            <div class="day">7</div>
                        </div>
                        <div class="cell">
                            <div class="day">8</div>
                        </div>
                        <div class="cell">
                            <div class="day">9</div>
                        </div>
                        <div class="cell">
                            <div class="day">10</div>
                            <div class="content-2">숙련기술인과의 만남</div>
                        </div>
                        <div class="cell">
                            <div class="day">11</div>
                        </div>
                        <div class="cell">
                            <div class="day">12</div>
                        </div>
                        <div class="cell">
                            <div class="day">13</div>
                            <div class="content-2">휴관정기휴관일</div>
                        </div>
                        <div class="cell">
                            <div class="day">14</div>
                        </div>
                        <div class="cell">
                            <div class="day">15</div>
                        </div>
                        <div class="cell">
                            <div class="day">16</div>
                        </div>
                        <div class="cell">
                            <div class="day">17</div>
                            <div class="content-2">행사 책읽는 숙련광장</div>
                            <div class="content-2">행사 기능 책마당</div>
                            <div class="content-2">행사 책읽는 숙련기술</div>
                            <div class="content-2">전시 [책피는 숙련기술도서관] 4월 북큐레이션</div>
                        </div>
                        <div class="cell">
                            <div class="day">18</div>
                        </div>
                        <div class="cell">
                            <div class="day">19</div>
                        </div>
                        <div class="cell">
                            <div class="day">20</div>
                            <div class="content-2">휴관정기휴관일</div>
                        </div>
                        <div class="cell">
                            <div class="day">21</div>
                            <div class="content-2">행사 숙련기술 책마당</div>
                            <div class="content-2">행사 책읽는 맑은냇가</div>
                            <div class="content-2">행사 책읽는 숙련광장</div>
                            <div class="content-2">전시 [책피는 숙련기술도서관] 4월 북큐레이션</div>
                        </div>
                        <div class="cell">
                            <div class="day">22</div>
                        </div>
                        <div class="cell">
                            <div class="day">23</div>
                        </div>
                        <div class="cell">
                            <div class="day">24</div>
                        </div>
                        <div class="cell">
                            <div class="day">25</div>
                        </div>
                        <div class="cell">
                            <div class="day">26</div>
                        </div>
                        <div class="cell">
                            <div class="day">27</div>
                        </div>
                        <div class="cell">
                            <div class="day">28</div>
                        </div>
                        <div class="cell">
                            <div class="day">29</div>
                        </div>
                        <div class="cell">
                            <div class="day">30</div>
                        </div>
                        <div class="cell">

                        </div>
                        <div class="cell">

                        </div>
                        <div class="cell">

                        </div>
                    </div>
                </div>
            </section>
            <section class="recommand">
                <input type="radio" name="pagination" id="page1" hidden checked>
                <input type="radio" name="pagination" id="page2" hidden>
                <div class="section-title">
                    <span class="text-1">RECOMMANDED BOOK</span>
                    <span class="text-2">추천도서</span>
                </div>
                <div class="books">
                    <div class="group-3">
                        <div class="book">
                            <img src="./assets/추천도서/추천도서1.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">나에게 나다움을 주기로 했다 : 나다움을 찾아가는 다섯 가지 마음 습관</span>
                                <span class="text-2">지은이 : 고정욱</span>
                            </div>
                        </div>
                        <div class="book">
                            <img src="./assets/추천도서/추천도서2.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">여름이 반짝</span>
                                <span class="text-2">지은이 : 김수빈 </span>
                            </div>
                        </div>
                        <div class="book">
                            <img src="./assets/추천도서/추천도서3.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">사랑 한 꼬집을 넣으면</span>
                                <span class="text-2">지은이 : 배리 팀스</span>
                            </div>
                        </div>
                        <div class="book">
                            <img src="./assets/추천도서/추천도서4.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">정말 정말 소리 지르고 싶어!</span>
                                <span class="text-2">지은이 : 사이먼 필립</span>
                            </div>
                        </div>
                        <div class="book">
                            <img src="./assets/추천도서/추천도서5.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">힐빌리의 노래 : 위기의 가정과 문화에 대한 회고</span>
                                <span class="text-2">지은이 : J.D 밴스</span>
                            </div>
                        </div>
                        <div class="book">
                            <img src="./assets/추천도서/추천도서6.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">(허영만의) 커피 한잔 할까요?</span>
                                <span class="text-2">지은이 : 허영만</span>
                            </div>
                        </div>
                    </div>
                    <div class="group-3">
                        <div class="book">
                            <img src="./assets/추천도서/추천도서7.jpg" alt="">
                            <div class="text-area">
                                <span class="text-1">두더지의 여름: 김상근 그림책</span>
                                <span class="text-2">지은이 : 김상근</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group-1">
                    <div class="group-2">
                        <div class="pagination page-1">
                            <label for=""><div class="button">←</div></label>
                            <div class="content-1"><span class="text-1">1</span>&nbsp;/ 2</div>
                            <label for="page2"><div class="button">→</div></label>
                        </div>
                        <div class="pagination page-2">
                            <label for="page1"><div class="button">←</div></label>
                            <div class="content-1"><span class="text-1">2</span>&nbsp;/ 2</div>
                            <label for=""><div class="button">→</div></label>
                        </div>
                        <div class="page-disabled"></div>
                    </div>
                </div>  
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div class="logo"><a href="/"><img src="./logo.png" alt="로고"></a></div>
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
    <script>
        const popups = document.querySelectorAll('.admin-popup')

        popups.forEach(popup => {
            popup.style.display = 'flex'
            popup.querySelector('.close').onclick = () => popup.remove()
        })
    </script>
</body>
</html>