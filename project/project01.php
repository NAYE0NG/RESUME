<!DOCTYPE html>
<html lang="ko">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"
    />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <link rel="stylesheet" href="../css/import.css">
    <!--script type="text/javascript" src="../js/script.js"></script-->
</head>

<body>
    <nav class='mv-scroll'>
        <div id='wrap-menu' class='mv-scroll'>
            <p>HOME</p>
            <p>ABOUT</p>
            <p>PROJECT</p>
            <p>CONTACT</p>
        </div>
    </nav>
    <section id='wrap-explain'>
        <article id='wrap-topinfo'>
            <div id='proj-route'>
                <p class='in_bl f_l'>PROJECT &nbsp;&nbsp;>&nbsp;&nbsp; PROJECT LIST &nbsp;&nbsp;>&nbsp;&nbsp;</p>
                <!--여기에 PHP 변수 넣을거임-->
                <P class='in_bl f_l'>PUBLIDAY</P>
            </div>
            <div id='proj-summary'>
                <p>PUBLIDAY</p>
                <p>Web and Mobile App</p>
                <table>
                    <tr>
                        <td class='summarytxt'>&middot; 기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;간 </td>
                        <td>2017년 03월 - 2017년 09월</td>
                    </tr>
                    <tr>
                        <td>&middot; 소&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;속 </td>
                        <td>팀 / 웹, 서버 개발</td>
                    </tr>
                    <tr>
                        <td>&middot; 설&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;명</td>
                        <td>미디어 파일(동영상, 음성파일)을 큐알코드로 변환하여 출력해주는 웹, 모바일 어플리케이션 </td>
                    </tr>
                    <tr>
                        <td>&middot; 동작환경</td>
                        <td>Web Browser, Android</td>
                    </tr>
                    <tr>
                        <td>&middot; 개발환경</td>
                        <td>Google Ouath 2.0 ,HTML5, CSS, Javascript, PHP, AWS, SQL, Android</td>
                    </tr>
                </table>
            </div>
        </article>
        <article id='wrap-allinfo'>
            <div id='outline'>
                <p>요구사항</p>
                <ul>
                    <li>[서버]
                    </li>
                    <li>- AWS에 대한 이해
                    </li>
                    <li>- 리눅스 환경(centOS)에서의 서버환경 설정</li>
                    <li style='margin-top: 8px;'>[웹]
                    </li>
                    <li>- Google Ouath 2.0 : 토큰을 이용한 로그인 처리의 이해
                    </li>
                    <li>- 웹 페이지의 동작방식에 대한 이해를 바탕으로 한 설계
                    </li>
                    <li style='margin-top: 8px;'>[데이터베이스]</li>
                    <li>- 데이터베이스 구조와 명령어에 대한 이해
                    </li>
                    <li>- 대용량 데이터(미디어 파일)처리에 대한 고민
                    </li>
                </ul>
            </div>
            <div id='solution'>
                <p>과정</p>
                <p>처음 날씨정보를 출력하는 크롬확장프로그램을 만들기 위해 생각했던 방법은 두 가지가 있었다. 첫째는 네이버(혹은 기타 웹사이트)의 실시간 현재위치의 날씨정보 페이지를 통째로 가져와 필요한 날씨정보가
                    들어있는 영역만 남기는 방법, 두 번째는 웹브라우저가 제공하는 geolocation API를 이용해 얻은 위치정보를 바탕으로 날씨정보를 조회하는 방법이 있다. Json파싱과 Ajax
                    통신을 공부하고 있던 터라 두번째 방법으로 앱을 제작하기로 했다. 다행히도 Weatherground에서 무료로 날씨정보를 제공하고 있어 이를 이용하게 되었고 Ajax 통신을 이해하는데
                    도움이 되었다.</p>
            </div>
            <div id='proj-images'>
                <P>실행화면</P>
                <img src='../img/publiday.JPG' />
            </div>

            <div id='links'>
                <p>소스코드 및 링크</p>
                <ul>
                    <li>- 소스파일 : https://github.com/NAYE0NG/PUBLIDAY_WEB</li>
                    <li>- 웹 사이트 : http://publiday.co.kr</li>
                </ul>
            </div>
            <div id='reference'>
                <P>참고사이트</P>
                <ul>
                    <li>- 생활코딩 : https://opentutorials.org/course/2473/16571</li>
                </ul>
            </div>
            <div id='addexplain'></div>
        </article>
    </section>
    <footer>여긴 아래ㅇㅇㅇ</footer>
</body>

</html>