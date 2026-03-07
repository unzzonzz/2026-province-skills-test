=== B-Module 개발 완료 안내 ===

[파일 구조]
B-Module/
├── index.html         ← 메인 페이지
├── introduce.html     ← 도서관소개 서브페이지
├── logo.png           ← 로고 (생성됨)
├── css/
│   └── style.css      ← 전체 스타일시트
├── images/            ← 제공된 이미지 폴더 (원본 그대로 사용)
├── 추천도서/           ← 제공된 추천도서 폴더 (원본 그대로 사용)
├── 프로그램/           ← 제공된 프로그램 폴더 (원본 그대로 사용)
└── social/            ← 소셜 아이콘 폴더 (원본 그대로 사용)

[주의]
이 폴더를 원본 B-Module 폴더에 있는 images/, 추천도서/, 프로그램/, social/ 폴더와 합쳐서 사용하세요.
실제 경기 환경(XAMPP)에서는 C:\xampp\htdocs\ 안에 넣으세요.

[구현된 기능]
✅ 안내 팝업 (CSS animation)
✅ 헤더 + GNB 네비게이션 (드롭다운 CSS hover)
✅ 로그인 팝업 (CSS :target)
✅ 비주얼 슬라이드 (3장, 3초, CSS animation, 마우스오버 정지)
✅ 슬라이드 progress-bar
✅ 도서관 소식 탭 (CSS radio 방식, 일반공지/행사안내/채용공지)
✅ 자주 찾는 메뉴 (6가지 아이콘 메뉴)
✅ 프로그램 영역 (8개, hover 확대/축소, 팝업)
✅ 행사 달력 (2026년 4월 초기표시, schedule.txt 반영)
✅ 추천도서 슬라이드 (7권, 이전/다음 버튼, CSS radio)
✅ 푸터 (로고, 연락처, SNS 4개, 저작권)
✅ 도서관 소개 서브페이지 (탭, 통계, 타임라인, 갤러리, 동적효과)
✅ 반응형 (480px~768px)
✅ JavaScript 미사용 (CSS only)
✅ 모든 img에 alt, title 속성

