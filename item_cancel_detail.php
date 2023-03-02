<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/item_cancel_detail.css">
    <link rel="stylesheet" href="./css/response.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body>
    <header id="headerType2">
        <div>
            <p>취소 / 교환 / 반품 상세</p>
            <div class="headerIcoWrap">
                <a href="./bottom_gnb_mypage_member.php" class="icoLeftArrow"><span class="hide">뒤로가기</span></a>
                <div class="headerIco">
                    <a href="./search.php" class="icoSearch"><span class="hide">검색아이콘</span></a>
                    <a href="./shoppingbag.php" class="icoShoppingbag"><span class="hide">쇼핑백아이콘</span></a>
                </div>
            </div>
        </div>
    </header>
    <div class="itemErrorTitle">
        <h3></h3>
        <p></p>
        <span class="cancelDate">2022.11.01</span>
    </div>
    <div class="itemWrap returnRequest "><!-- 취소완료:cancelComplete , 반품요청:returnRequest , 반품접수:returnReceipt , 반품완료:returnComplete , 반품보류:returnHold -->
        <div class="itemThum">
            <a href="">
                <img src="./img/Frame 2642.png" alt="">
            </a>
            <div class="itemText">
                <div class="state"></div>
                <div class="brandItemName">
                    <span class="brandName">CHATELAINE</span><span class="itemName">브러쉬 립조직 하이넥 티셔츠</span>
                </div>
                <div class="itemOpt">
                    <span class="color">블랙</span> / <span class="size">S</span> / <span class="count">1개</span>
                </div>
                <div class="itemPrice">147,000원</div>
            </div>
        </div>
        <button></button>
        <div class="cancelReason">
            <p></p>
            <span>Lorem ipsum dolor sit amet consectetur. Tristique posuere cras odio diam consequat dignissim </span>
        </div>
    </div>
    <div class="refundPrice">
        <div class="refundTitle">
            <h3>환불금액</h3>
            <span class="ic_arrow"></span>
        </div>
        <div class="refundContent">
            <div class="refundContentTop">
                <div class="allItemPrice">
                    <div class="allItemPrice_l">총 상품금액</div>
                    <div class="allItemPrice_r">127,000원</div>
                </div>
                <div class="shippingPay">
                    <div class="shippingPay_l">배송비</div>
                    <div class="shippingPay_r">0원</div>
                </div>
                <div class="couponSale">
                    <div class="couponSale_l">할인쿠폰 사용</div>
                    <div class="couponSale_r ">-5,000원</div>
                </div>
                <div class="savingPoint">
                    <div class="savingPoint_l">적립금 사용</div>
                    <div class="savingPoint_r">0원</div>
                </div>
            </div>
            <div class="refundContentBottom">
                <div class="finalPrice">
                    <div class="finalPrice_l">총 환불금액</div>
                    <div class="finalPrice_r">
                        <span class="finalPriceNum">122,000원</span>
                        <span class="finalSavingPoint">총 적립예정 금액 2,700원</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="refundMethod">
        <div class="refundMethodTitle">
            <h3>환불수단</h3>
            <span class="ic_arrow"></span>
        </div>
        <div class="refundMethodContent">
            <div class="refundMethodContent_l">총 환불금액</div>
            <div class="refundMethodContent_r">
                <span class="refundMethodContent_r_t">환불예정일</span>
                <span class="refundMethodContent_r_b">반품 완료 후 영업일 기준 3~5일</span>
            </div>
        </div>
    </div>
    <div class="notice">
        <div class="noticeTitle">
            <div class="noticeTitle_l">
                <img src="./img/ic-notice.png" alt="">
                <p>취소/반품/교환 안내</p>
            </div>
            <div class="noticeTitle_r">
                <span class="ic_arrow"></span>
            </div>
        </div>
        <div class="noticeGreyBox">
            <p>- 결제 완료 이후 품절/결품이 발생한 경우, 고객님께 문자 서비스를 통해 품절/결품 안내를 드리고 있으며, '마이페이지 > 주문배송조회'에서도 품절/결품 여부를 확인하실 수 있습니다.</p>
            <p>- 품절/결품된 주문상품은 품절/결품 문자 서비스 안내 후 자동취소해 드리며, 재결제가 필요한 경우 추가 안내 드립니다.</p>
        </div>
    </div> 
</body>
<script>
    $('.refundTitle>.ic_arrow').click(function(){
        $(this).toggleClass('on');
        $('.refundContent').toggleClass('on')
    })

    $('.refundMethodTitle>.ic_arrow').click(function(){
        $(this).toggleClass('on');
        $('.refundMethodContent').toggleClass('on')
    })

    $('.noticeTitle_r>.ic_arrow').click(function(){
        $(this).toggleClass('on');
        $('.notice>.noticeGreyBox').toggleClass('on')
    })

    $('.cancelComplete').siblings('.itemErrorTitle').children('h3').text('취소완료')
    $('.cancelComplete').siblings('.itemErrorTitle').children('p').text('취소 확정일')
    $('.cancelComplete').find('.state').text('취소완료')
    $('.cancelComplete').find('button').css("display","none")
    $('.cancelComplete').find('.cancelReason').children('p').text('취소사유')
    $('.cancelComplete').siblings('.refundMethod').css("display","none")//cancelComplete

    $('.returnRequest').siblings('.itemErrorTitle').children('h3').text('반품요청')
    $('.returnRequest').siblings('.itemErrorTitle').children('p').css("display","none")
    $('.returnRequest').siblings('.itemErrorTitle').children('span').css("display","none")
    $('.returnRequest').find('.cancelReason').children('p').text('반품사유')
    $('.returnRequest').find('button').css("display","none")
    $('.returnRequest').find('.state').text('반품요청')//returnRequest

    $('.returnReceipt').siblings('.itemErrorTitle').children('h3').text('반품접수')
    $('.returnReceipt').siblings('.itemErrorTitle').children('p').css("display","none")
    $('.returnReceipt').siblings('.itemErrorTitle').children('span').css("display","none")
    $('.returnReceipt').find('.cancelReason').children('p').text('반품사유')
    $('.returnReceipt').find('button').text('배송조회')
    $('.returnReceipt').find('.state').text('반품접수')//returnReceipt

    $('.returnComplete').siblings('.itemErrorTitle').children('h3').text('반품완료')
    $('.returnComplete').siblings('.itemErrorTitle').children('p').text('반품 확정일')
    $('.returnComplete').find('.cancelReason').children('p').text('반품사유')
    $('.returnComplete').find('button').text('배송조회')
    $('.returnComplete').find('.state').text('반품완료')//returnComplete

    $('.returnHold').siblings('.itemErrorTitle').children('h3').text('반품보류')
    $('.returnHold').siblings('.itemErrorTitle').children('p').css("display","none")
    $('.returnHold').siblings('.itemErrorTitle').children('span').css("display","none")
    $('.returnHold').find('.cancelReason').children('p').text('반품사유')
    $('.returnHold').find('button').text('문의하기')
    $('.returnHold').find('.state').text('반품보류')//returnHold


</script>
</html>