<?php
if(isset($_POST['email'])) {
 
// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "thachvu9197@gmail.com";
$email_subject = "ホームページからお問合せが届きました。";
 
function died($error) {
// your error code can go here
echo $error."<br /><br />";
echo "確認して再度お試しください。<br /><br />";
die();
}
 
// validation expected data exists
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {
died('We are sorry, but there appears to be a problem with the form you submitted.');
}
 
$first_name = $_POST['first_name']; // required
$last_name = $_POST['last_name']; // required
$email_from = $_POST['email']; // required
$telephone = $_POST['telephone']; // not required
$comments = $_POST['comments']; // required
 
$error_message = "";
	
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
$error_message .= '入力されたメールアドレスに間違いがあります。<br />';
}
if(strlen($error_message) > 0) {
died($error_message);
}
$email_message = "お問合せの内容.\n\n";
 
function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}
 
$email_message .= "名前: ".clean_string($first_name)."\n";
$email_message .= "ふりがな: ".clean_string($last_name)."\n";
$email_message .= "メールアドレス: ".clean_string($email_from)."\n";
$email_message .= "電話番号: ".clean_string($telephone)."\n";
$email_message .= "お問合せ内容: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
	
?>
<!-- include your own success html here -->
 
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- InstanceBeginEditable name="doctitle" -->
    <meta property="og:title" content="お問い合わせ ｜WE・RENTACAR[公式ホームページ] " />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="https://www.werentacar.co.jp/contact">
	<meta property="og:site_name" content="宮古島でレンタカー予約ならWE RENTACAR"/>
	<meta property="og:image" content="https://www.werentacar/images/use.jpg"/>
	<meta property="og:description" content="WERENTACARの公式予約サイト「WERENTACAR Webサイト」のお問い合わせです。" />
	<meta name="description" content="WERENTACARの公式予約サイト「WERENTACAR Webサイト」のお問い合わせです。">
	<meta name="Keywords" content="werentacar,レンタカー,ご利用について、使い方、お支払い、ご契約、出発、ご返却、宮古島レンタカー,沖縄レンタカー,トヨタ、トヨタレンタカー、宮古島,予約,プラン,格安、宮古島観光地、宮古島旅行,宮古,宮古空港,安い、最安値,レンタカー予約">
    <title>お問い合わせ｜WE・RENTACAR[公式ホームページ]</title>
    <link rel="stylesheet" href="css/use.css">
    <link rel="stylesheet" href="css/contact.css">
<!-- InstanceEndEditable -->
    <link rel="stylesheet" href="css/template.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css" />
	<script type="text/javascript" src="js/jquery360.min.js"></script>
	<script type="text/javascript" src="js/drawer.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
    <div class="nav-bar"></div>
    <div class="nav-top">
        <div class="menu-slogan">
            <div class="logo"> 
				<div class="logo-message">
					<p>宮古島でレンタカー予約ならWE・RENTACAR</p>
                	<a href="index.html"><div class="logo-left"></div></a>
				</div>
                <div class="icon-list">
                    <div class="iconlist_i_p"><a href="tel:050-5578-2017"><i class="fas fa-phone"></i><p>電話する</p></a></div>
                    <div class="iconlist_i_p"><a href="comingsoon.html"><i class="fas fa-car"></i><p>予約する</p></a></div>
                    <div class="iconlist_i_p"><a href="contact.html"><i class="fas fa-envelope"></i><p>お問い合わせ</p></a></div>
                </div>
                <div class="hamburger-menu"> 
                    <div id="js-nav" class="navigation">
						<nav class="nav">
							<ul class="list">
								<li><a href="index.html">ホーム<i class="fas fa-angle-right"></i></a></li>
								<li><a href="flow.html">当日の流れ<i class="fas fa-angle-right"></i></a></li>
								<li><a href="use.html">ご利用について<i class="fas fa-angle-right"></i></a></li>
								<li><a href="about.html">WERENTACARについて<i class="fas fa-angle-right"></i></a></li>
								<li><a href="message.html">代表メッセージ<i class="fas fa-angle-right"></i></a></li>
								<li><a href="manage.html">経営理念<i class="fas fa-angle-right"></i></a></li>
								<li><a href="corporate.html">企業理念<i class="fas fa-angle-right"></i></a></li>
								<li><a href="credo.html">行動指針<i class="fas fa-angle-right"></i></a></li>
								<li><a href="profile.html">会社概要<i class="fas fa-angle-right"></i></a></li>
								<li><a href="question.html">よくある質問<i class="fas fa-angle-right"></i></a></li>
								<li><a href="contact.html">お問い合わせ<i class="fas fa-angle-right"></i></a></li>
								<li><a href="sitemap.html">サイトマップ<i class="fas fa-angle-right"></i></a></li>
								<li><a href="policy.html">プライバシーポリシー<i class="fas fa-angle-right"></i></a></li>
							</ul>
						</nav>
					</div>
							<!-- hamburger button -->
						<button id="js-hamburger" class="hamburger" type="button">
							<span id="js-top-line" class="top-line"></span>
							<span id="js-center-line" class="center-line"></span>
							<span id="js-bottom-line" class="bottom-line"></span>
							<p class="menu_btn">MENU</p>
						</button>
                    <!-- end hamburger button -->
                </div>
                <div class="nav-bar2">
                    <i class="fas fa-caret-right"></i><a href="sitemap.html">サイトマップ</a>
                    <i class="fas fa-caret-right"></i><a href="https://wecompany.co.jp/recruit" target="_blank">採用情報</a>
                    <i class="fas fa-caret-right"></i><a href="https://wecompany.co.jp/weGroup" target="_blank">グループ紹介</a>
                </div>
                <div class="header-btn">
                    <a href="comingsoon.html">レンタカー予約 <i class="fas fa-angle-right"></i></a>
                    <a href="contact.html">お問い合わせ <i class="fas fa-angle-right"></i></a>
                </div>
				<div class="nav-bar3">
					<p>お電話でご予約はこちら</p>
					<p><a href="tel:050-5578-2017">050-5578-2017</a></p>
					<p>営業時間: 09:00~19:00</p>
				</div>
            </div>
            <div class="menu">
                <ul class="ul-menu">
                    <li class="li-menu"><a href="index.html"><i class="fas fa-home" style="padding-right:5px;"></i>ホーム</a></li>
                    <li class="li-menu"><a href="about.html">会社情報<i class="fas fa-angle-down"></i></a>
						<div class="menu-drow">
								<ul class="drow-menu">
									<li><a href="about.html">
										<img src="images/company/about-us.jpg" width="600" height="300" alt=""/> 
										<p>会社について</p>
										</a>
									</li>
									<li><a href="message.html">
										<img src="images/company/message.jpg" width="600" height="300" alt=""/> 
										<p>代表メッセージ</p>
										</a>
									</li>
									<li><a href="manage.html">
										<img src="images/company/manage.jpg" width="600" height="300" alt=""/> 
										<p>経営理念</p>
										</a>
									</li>
									<li><a href="corporate.html">
										<img src="images/company/corporate.jpg" width="600" height="300" alt=""/> 
										<p>企業理念</p>
										</a>
									</li>
									<li><a href="credo.html">
										<img src="images/company/credo.jpg" width="600" height="300" alt=""/> 
										<p>行動指針</p>
										</a>
									</li>
									<li><a href="profile.html">
										<img src="images/company/profile.jpg" width="600" height="300" alt=""/>  
										<p>会社概要</p>
										</a>
									</li>
								</ul>
					
						</div>	
					</li>
                    <li class="li-menu"><a>車種と料金<i class="fas fa-angle-down"></i></a>
						<div class="menu-drow">
								<ul class="drow-menu">
									<li><a href="hijet.html">
										<img src="images/list-car/hizet.png" width="600" height="300" alt=""/>
										<p>ハイゼット</p>
										</a>
									</li>
									<li><a href="aqua.html">
										<img src="images/list-car/aqua.png" width="600" height="300" alt=""/>
										<p>アクア</p>
										</a>
									</li>
									<li><a href="prius.html">
										<img src="images/list-car/prius.png" width="600" height="300" alt=""/>
										<p>プリウス</p>
										</a>
									</li>
									<li><a href="priusa.html">
										<img src="images/list-car/priusa.png" width="600" height="300" alt=""/>
										<p>プリウスα</p>
										</a>
									</li>
									<li><a href="serena.html">
										<img src="images/list-car/serena.png" width="600" height="300" alt=""/>
										<p>セレナ</p>
										</a>
									</li>
									<li><a href="vellfire.html">
										<img src="images/list-car/vellfire.png" width="600" height="300" alt=""/>
										<p>ヴェルファイア</p>
										</a>
									</li>
								</ul>
						</div>
				  </li>
                    <li class="li-menu"><a href="flow.html">当日の流れ</a></li>
                    <li class="li-menu"><a href="use.html">ご利用について</a></li>
                    <li class="li-menu"><a href="question.html">よくある質問</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
<!--ーーーーーーーーーーーーーー NAV　ここまでーーーーーーーー -->
<!-- InstanceBeginEditable name="メインここから" -->
<div class="main">
    <div class="contact-top">
        <a href="index.html">ホーム</a><i class="fas fa-angle-right"></i><span>お問い合わせ</span>
    </div>
    <h1 class="title_contact">お問い合わせ</h1>
    <p class="bar">お問い合わせメールの前に</p>
    <p class="pagrap">
        お問い合わせメールの前に弊社は、お問い合わせによりいただいた <a href="security.html">個人情報の取り扱いについて</a> に基き取り扱い、適切に管理いたします。<br>
        上記「個人情報の取り扱いについて」に同意のうえ、お問い合わせください。<br>
        お問い合わせに関する回答のために、お客さまのお名前、連絡先の記入をお願いいたします。<br>
        またはお問い合せの多い質問および注意いただきたい事をまとめております。<br>
        お問い合せの前にこちらの <a href="question.html">よくある質問</a> ご確認ください。
    </p>

    <p class="bar">お問い合わせフォーム</p>
    <p class="pagrap">
        この度はWE・RENTACARのサイトをご利用いただき、ありがとうございます。 <br>
        お問い合わせ内容を以下のメールフォームへご入力ください。
    </p>

    <div class="person_info_form">
        <form name="contactform" method="post" action="send_form_email.php">
            <table class="person_info">
                <tbody>
                    <tr>
                        <td><span class="type">必須</span>お名前</td>
                        <td><input type="text" name="last_name" id="" required="required" placeholder="セイ"　></td>
                        <td><input type="text" name="first_name" id="" required="required" placeholder="メイ"></td>
                    </tr>
                    <tr>
                        <td><span class="type">必須</span>電話番号</td>
                        <td colspan="2"><input type="text" name="telephone" required="required" id="" placeholder="例) 09012341234 ハイフンなし"></td>  
                    </tr>
                    <tr>
                        <td><span class="type">必須</span>メールアドレス</td>
                        <td colspan="2"><input type="text" name="email" id="" required="required" placeholder="例) info@werentacar.co.jp"></td>  
                    </tr>
                    <tr>
                        <td>予約番号</td>
                        <td colspan="2"><input type="text" name="" id="" placeholder=""></td>  
                    </tr>
                    <tr>
                        <td><span class="type">必須</span>お問い合わせ内容</td>
                        <td colspan="2"><textarea name="comments" id="" cols="30" rows="10" required="required" placeholder="お問い合わせ内容をご入力ください"></textarea></td>  
                    </tr>
                </tbody>
            </table>
			 <div class="verify">
            <p>
				<input type="checkbox" name="" id="check"><label for="check">個人情報の取り扱いに同意します。</label>
            </p>
            <button type="submit">送信します</button>
        </div>
        </form>
       
    </div>
    <a href="javascript:" class="return-to-top"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- InstanceEndEditable -->
<!--ーーーーーーーーーーーーーー CONTACT　ここからーーーーーーーー -->
        <div class="contact">
            <div class="contact-content">
                <div class="contact-title">お問い合わせ</div>
                <p>
                    ご質問やご相談など、お電話またはメールにてお気軽にお寄せください。<br>
                    <span>予約専用ダイヤル：050-5578-2017</span><br>
                    [営業時間] 09:00-19:00
                </p>
                <a href="contact.html" class="contact-link"><i class="far fa-envelope"></i> メールでお問い合わせ</a>
            </div>
        </div>
 <!--ーーーーーーーーーーーーーー CONTACT　ここまでーーーーーーーー -->
 <!--ーーーーーーーーーーーーーー FOOTER　ここからーーーーーーーー -->
        <div class="footer">
            <div class="footer-bar">
                <a href="index.html"><img src="images/logo.png" width="1172" height="176" alt="rentacarlogo"/></a>
                <span>「 宮古島でレンタカー予約ならWE・RENTACAR 」</span>
            </div>
            <hr>
            <ul class="ul-footer footer-pc">
                <li class="ul-li-footer">
                    <p class="li-footer-title">
                        レンタカーを使う
                    </p>
                    <p class="li-footer-content">
						<a href="comingsoon.html"><i class="fas fa-angle-right"></i> レンタカーを予約</a><br>
						<a href="hijet.html"><i class="fas fa-angle-right"></i> 軽トラック</a><br>
                        <a href="aqua.html"><i class="fas fa-angle-right"></i> コンパクト</a><br>
						<a href="prius.html"><i class="fas fa-angle-right"></i> セダンA</a><br>
                        <a href="priusa.html"><i class="fas fa-angle-right"></i> セダンB</a><br>
						<a href="serena.html"><i class="fas fa-angle-right"></i> ミニバンA</a><br>
                        <a href="vellfire.html"><i class="fas fa-angle-right"></i> ミニバンB</a><br>
                        
                    </p>
                </li>
                <li class="ul-li-footer">
                    <p class="li-footer-title">
                        初めてご利用の方へ
                    </p>
                    <p class="li-footer-content">
                        <a href="use.html"><i class="fas fa-angle-right"></i> ご利用について</a><br>
                        <a href="question.html"><i class="fas fa-angle-right"></i> よくある質問 </a><br>
                        <a href="flow.html"><i class="fas fa-angle-right"></i> 当日の流れ</a><br>
                        <a href="contact.html"><i class="fas fa-angle-right"></i> お問い合わせ</a><br>
                    </p>
                </li>
                <li class="ul-li-footer">
                    <p class="li-footer-title">
                        このサイトについて
                    </p>
                    <p class="li-footer-content">
                        <a href="sitemap.html"><i class="fas fa-angle-right"></i> サイトマップ</a><br>
                        <a href="about.html"><i class="fas fa-angle-right"></i> 会社情報</a><br>
                        <a href="https://wecompany.co.jp/recruit" target="_blank"><i class="fas fa-angle-right"></i> 採用情報</a><br>
                        <a href="https://wecompany.co.jp/weGroup" target="_blank"><i class="fas fa-angle-right"></i> グループ紹介</a><br>
                        <a href="policy.html"><i class="fas fa-angle-right"></i> プライバシーポリシー</a><br>
                    </p>
                </li>
            </ul>
            <ul class="footer-smt">
				<li><a href="hijet.html"><i class="fas fa-angle-right"></i> 軽トラック</a></li>
                <li><a href="aqua.html"><i class="fas fa-angle-right"></i> コンパクト</a></li>
				<li><a href="prius.html"><i class="fas fa-angle-right"></i> セダンA</a></li>
				<li><a href="priusa.html"><i class="fas fa-angle-right"></i> セダンB</a></li>
				<li><a href="serena.html"><i class="fas fa-angle-right"></i> ミニバンA</a></li>
                <li><a href="vellfire.html"><i class="fas fa-angle-right"></i> ミニバンB</a></li>
                <li><a href="use.html"><i class="fas fa-angle-right"></i> ご利用について</a></li>
                <li><a href="question.html"><i class="fas fa-angle-right"></i> よくある質問</a></li>
                <li><a href="flow.html"><i class="fas fa-angle-right"></i> 当日の流れ</a></li>
                <li><a href="contact.html"><i class="fas fa-angle-right"></i> お問い合わせ</a></li>
                <li><a href="sitemap.html"><i class="fas fa-angle-right"></i> サイトマップ</a></li>
                <li><a href="profile.html"><i class="fas fa-angle-right"></i> 会社情報</a></li>
                <li><a href="https://wecompany.co.jp/recruit" target="_blank"><i class="fas fa-angle-right"></i> 採用情報</a></li>
                <li><a href="https://wecompany.co.jp/weGroup" target="_blank"><i class="fas fa-angle-right"></i> グループ紹介</a></li>
                <li><a href="policy.html"><i class="fas fa-angle-right"></i> プライバシーポリシー</a></li>
            </ul>
            <div class="copyright">Copyright &copy; 2021 WE・RENTACAR Co.,Ltd. All rights reserved</div>
        </div>
</body>
<!-- InstanceEnd --></html>

 
<?php
}
?>