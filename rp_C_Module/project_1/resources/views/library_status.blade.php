<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스킬스북도서관</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/library_status.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>
<body>
    <x-layout.header />
    <main>
        <div class="main-inner">
            <section class="gallery">
                <div class="section-title">
                    <span class="text-1">LIBRARY STATUS</span>
                    <span class="text-2">도서관 현황</span>
                </div>
                <div class="map-container"></div>
                <div class="controls">
                    <input type="text" id="searchInput" placeholder="도서관명을 입력해주세요.">
                    <select name="" id="sortSelect">
                        <option value="">시도명 (오름차순)</option>
                        <option value="desc">자료수(도서) (내림차순)</option>
                        <option value="asc">자료수(도서) (오름차순)</option>
                    </select>
                </div>
                <div class="table-section">
                    <table>
                        <thead>
                            <tr>
                                <th>시도명</th>
                                <th>도서관명</th>
                                <th>시군구명</th>
                                <th>도서관유형</th>
                                <th>휴관일</th>
                                <th>평일운영시작시각</th>
                                <th>평일운영종료시각</th>
                                <th>열람좌석수</th>
                                <th>자료수(도서)</th>
                                <th>대출가능권수</th>
                                <th>대출가능일수</th>
                                <th>소재지도로명주소</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
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
    <div class="tooltip"></div>
    <script type="module" src="/js/library_status.js"></script>
</body>
</html>