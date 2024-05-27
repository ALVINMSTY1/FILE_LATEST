<!DOCTYPE html>
<html lang="en"><head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>KSC MEMBERSHIP SYSTEM</title>

		<!-- KSC -->
		<link rel="icon" href="./images/logoksc.png" type="image/x-icon">

		<!-- Dashboard Styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
				background-image: url("./assets/pics/ksc1.jpg");
				background-color: green;
				background-repeat: no-repeat;
				background-position: center;
				background-size: 1800px 1100px;
				height: 700px;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
			    backdrop-filter: blur(10px);
				max-width: 900px;
				margin: auto;
				padding: 20px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		

        
		<div class="invoice-box">
			<table>
				<tbody><tr class="top">
					<td colspan="2">
						<table>
							<tbody><tr>
								<td class="title">
									<img src="./images/KSC.png" alt="Company logo" style="width: 100%; max-width: 300px">
								</td>


							</tr>
						</tbody></table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tbody><tr>
								<td style="display: flex; justify-content: center;">
								    
								    <nav class="header__nav">
                                    <div class="header__nav--item">
								    
								    <button id="ok" style="background-color: #03AC13; padding: 20px; color: white; font-size: 20px;" onclick="location.href='https://kscmembership.000webhostapp.com/login.php';">LOGIN/SIGN UP</button>&nbsp;
								    
								    
									
								    <button style="background-color: #03AC13; padding: 20px; color: white; font-size: 20px;" onclick="location.href='https://kscmembership.000webhostapp.com/new_scan.php';">SCAN CARD</button>&nbsp;
								    
								    
								    
								    <button style="background-color: #03AC13; padding: 20px; color: white; font-size: 20px;" onclick="location.href='https://kscmembership.000webhostapp.com/new.php';">OUR WEBSITE</button><br>
								    
								    </div>
								    
								    </nav>
								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
			</tbody></table>
		</div>
	<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&amp;utm_campaign=000_logo&amp;utm_medium=website&amp;utm_content=footer_img"><img src="https://www.000webhost.com/static/default.000webhost.com/images/powered-by-000webhost.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var i=n[o];" "==i.charAt(0);)i=i.substring(1);if(0==i.indexOf(e))return i.substring(e.length,i.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0];if(null!=wordpressAdminBody&¬ification.length>0&&null!=mainContent && new Date().toISOString().slice(0, 10) > '2023-10-29' && new Date().toISOString().slice(0, 10) < '2023-11-27'){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; display: flex; justify-content: center; width: 100%; }} .web-hosting-90-off-image {max-width: 90%;} .content-wrapper {min-height: 454px; display: flex; flex-direction: column; justify-content: center; z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 4px 0 rgba(255, 69, 70, 0.2); max-width: 350px; border: 0; border-radius: 3px; background-color: #ff4546 !important; padding: 15px 55px !important; font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: 600; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: #d10303 !important;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Claim deal</button>',(notification=notification[0]).setAttribute("style","padding-bottom: 0; padding-top: 5px; background-color: #040713; background-size: cover; background-repeat: no-repeat; color: #ffffff; border-left-color: #040713;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="The Biggest Ever <span style='color: #FF5C62;'>Black Friday</span> Sale<div style='font-size: 16px;line-height: 24px;font-weight: 400;margin-top: 12px;'><div style='display: flex;justify-content: flex-start;align-items: center;'><img src='https://www.000webhost.com/static/default.000webhost.com/images/generic/green-check-mark.png' alt='' style='margin-right: 10px; width: 20px;'>Managed WordPress Hosting</div><div style='display: flex;justify-content: flex-start;align-items: center;'><img src='https://www.000webhost.com/static/default.000webhost.com/images/generic/green-check-mark.png' alt='' style='margin-right: 10px; width: 20px;'>WordPress Acceleration</div><div style='display: flex;justify-content: flex-start;align-items: center;'><img src='https://www.000webhost.com/static/default.000webhost.com/images/generic/green-check-mark.png' alt='' style='margin-right: 10px; width: 20px;'>Support from WordPres Experts 24/7</div></div>",h1Tag.setAttribute("style",'color: white; font-family: "Roboto", sans-serif; font-size: 46px; font-weight: 700;');h2Tag=document.createElement("H2");h2Tag.innerHTML="<span style='font-size: 20px'>$</span>2.49<span style='font-size: 20px'>/mo</span>",h2Tag.setAttribute("style",'color: white; margin: 10px 0 0 0; font-family: "Roboto", sans-serif; font-size: 60px; font-weight: 700; line-height: 1;'),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="<span style='text-decoration:line-through; font-size: 14px; color:#727586'>$11.99.mo</span><br>+ 2 Months Free",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 20px; font-weight: 700; margin: 0 0 15px; 0');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper" style="height: 90%"><img class="web-hosting-90-off-image" src="https://www.000webhost.com/static/default.000webhost.com/images/sales/bf2023/hero.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0]}else if(null!=wordpressAdminBody&¬ification.length>0&&null!=mainContent){var bulletPoints = mainContent.getElementsByTagName('li');var replacement=['Increased performance (up to 5x faster) - Thanks to Hostinger’s WordPress Acceleration and Caching solutions','WordPress AI tools - Creating a new website has never been easier','Weekly or daily backups - Your data will always be safe','Fast and dedicated 24/7 support - Ready to help you','Migration of your current WordPress sites to Hostinger is automatic and free!','Try Premium Web Hosting now - starting from $1.99/mo'];for (var i=0;i<bulletPoints.length;i++){bulletPoints[i].innerHTML = replacement[i];}}</script>



</body></html>