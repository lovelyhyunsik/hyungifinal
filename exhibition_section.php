<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAUHAUS</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/brand_page.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/common.js"></script>

</head>

<body>
    <div id="main_page">
        <?php include("./common.php/btn_gotop.php");?>
        <header id="header">
            <div class="headerTop">
                <h1 class="logo"><a href="./index.php"><span class="hide">바우하우스</span></a></h1>
                <div>
                    <a class="icoSearch" href="./search.php"><span class="hide">검색아이콘</span></a>
                    <a class="icoAlarm" href="./alarm.php"><span class="hide">알람아이콘</span><span class="numberTag">10</span></a>
                    <a class="icoShoppingbag" href="./shoppingbag.php"><span class="hide">쇼핑백아이콘</span><span class="numberTag">10</span></a>
                </div>
            </div>
            <h2 class="hide">메인메뉴</h2>
            <nav class="headerGnb">
                <ul>
                    <li><a href="./index.php">홈</a></li>
                    <li><a href="./best_section.php">베스트</a></li>
                    <li><a href="./exhibition_section.php" class='on'>기획전/혜택</a></li>
                    <li><a href="./magazine_section.php">매거진</a></li>
                </ul>
            </nav>
        </header>
        <nav id="bottomGnb">
            <ul>
                <li>
                    <a href="./bottom_gnb_menu.php" class="icoMenu">
                        <img src="./img/ic-menu.png" alt="하단메뉴아이콘">
                        <p>메뉴</p>
                    </a>
                </li>
                <li>
                    <a href="./index.php" class="icoHome">
                        <img src="./img/ic-home-active .png" alt="하단홈아이콘">
                        <p>홈</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_recent.php" class="icoRecent">
                        <img src="./img/ic-recent.png" alt="하단최근아이콘">
                        <p>최근 본</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_like.php" class="icoLike">
                        <img src="./img/ic-blike.png" alt="하단'좋아요'아이콘">
                        <p>찜</p>
                    </a>
                </li>
                <li>
                    <a href="./bottom_gnb_mypage_member.php" class="icoMypage">
                        <img src="./img/ic-my.png" alt="하단마이페이지아이콘">
                        <p>마이</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="sectionArea">
            <section id="exhibitionSection">
                <div class="swiper first-slide auto-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/exhibition_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>2022</p>
                                            <p>스프링 컬렉션</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>바우하우스 단독할인 + 10% 쿠폰</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/exhibition_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>2022</p>
                                            <p>스프링 컬렉션</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>바우하우스 단독할인 + 10% 쿠폰</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide slide_text_wrap">
                            <a href="">
                                <img src="./img/slide/exhibition_visual.png" alt="">
                                <div class="slide_text">
                                    <div class="slide_text_container">
                                        <div class="slide_text_middle">
                                            <p>2022</p>
                                            <p>스프링 컬렉션</p>
                                        </div>
                                        <div class="slide_text_bottom">
                                            <p>바우하우스 단독할인 + 10% 쿠폰</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="exhibitionCategoryTab">
                    <div class="exhibitionCategoryTabWrap">
                        <div class="exhibitionCategoryTabnav">
                            <ul>
                                <li><a href="#tab01">전체</a></li>
                                <li><a href="#tab02">아우터</a></li>
                                <li><a href="#tab03">상의</a></li>
                                <li><a href="#tab04">하의</a></li>
                                <li><a href="#tab05">스커트</a></li>
                                <li><a href="#tab06">골프웨어</a></li>
                                <li><a href="#tab07">가방</a></li>
                                <li><a href="#tab08">모자</a></li>
                                <li><a href="#tab09">신발</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="exhibitionCategoryTabcontent">
                        <div id="tab01" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab02" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab03" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab04" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab05" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab06" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab07" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab08" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="tab09" class="tab">
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img1.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img2.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                            <div class="exhContentBox">
                                <a href="./exhibition_detail.php">
                                    <img src="./img/exhibition_tab_img3.png" alt="">
                                    <div class="textBox">
                                        <div class="textTop">CHATELAINE</div>
                                        <div class="textMiddle">인기상품 단독 프리오더 15% 세일!</div>
                                        <div class="textBottom">2022.04.12 - 2022.08.31</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include("./common.php/footer.php");?>
    </div>
</body>
<script>
    $('.exhibitionCategoryTabnav>ul>li>a').click(function () {
        $('.exhibitionCategoryTabcontent > div').hide().filter(this.hash).fadeIn();
        $('.exhibitionCategoryTabnav>ul>li>a').removeClass('on');
        $(this).addClass('on');
        return false;
    }).filter(':eq(0)').click();//exhibition섹션 안에 tab처리
</script>

</html>