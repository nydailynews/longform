<?php
//include('env.php');
//include(CLASS_PATH . 'class.csv.php');
include('../../class.csv.php');
$csv = new parseCSV('../data.csv');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Longform articles, 2017, by the NY Daily News</title>
    <link rel="icon" type="image/png" href="http://interactive.nydailynews.com/favicons.png">
	<!-- DEFAULT -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="apple-touch-icon" href="">
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <!-- Longform articlesS-->
    <meta name="parsely-title" content='Longform articles, 2017' />

    <!-- An index of the NY Daily News longform articles-->
    <meta name="description" content="An index of the NY Daily News longform articles published in 2017" />

    <!-- KEYWORD -->
    <meta name="keywords" content="journalism,new york city,2017" />
    <meta name="news_keywords" content="journalism,new york city,2017" />
    <meta name="parsely-tags" content="interactive" />

    <!-- LINK -->
    <link rel="canonical" href="http://interactive.nydailynews.com/longform/2017/">
    <meta property="og:url" content="http://interactive.nydailynews.com/longform/2017/" />
    <meta name="twitter:url" content="http://interactive.nydailynews.com/longform/2017/">
    <meta name="parsely-link" content="http://interactive.nydailynews.com/longform/2017/" />

    <!-- TIME -->
    <meta name="parsely-pub-date" content="2017-02-24T11:00:00Z" />

    <!-- NO NEED TO FILL -->
    <meta name="twitter:domain" content="http://interactive.nydailynews.com"/>
    <meta name="twitter:site" content="@nydailynews">
    <meta name="parsely-type" content="post" />
    <meta name="decorator" content="responsive" />
    <meta name="parsely-section" content="Interactive" />
    <meta name="parsely-author" content="Interactive" />
    <meta name="nydn_section" content="NY Daily News" />
    <meta name="robots" content="NOARCHIVE" />
    <meta name="msvalidate.01" content="02916AAC0DA8B068EFE01D721E03ED7E" />
    <meta name="p:domain_verify" content="78efe4f5c9935744af497772f68a0ee7" />
    <meta property="fb:app_id" content="107464888913" />
    <meta property="fb:admins" content="1594068001" />
    <meta property="fb:pages" content="268914272540" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="NY Daily News" />
    <meta property="article:publisher" content="https://www.facebook.com/NYDailyNews/" />
    <meta name="themeKey" content="nydailynews" />
    <meta name="mapThemeKey" content="responsive" />
    <meta name="urlPrefix" content="" />
    <meta name="staticContentPrefix" content="http://static.localedge.com/" />
    <meta name="searchBinding" content="/search" />
    <meta name="localeCountry" content="US"/>
    <meta name="localeLanguage" content="en" />

    <!-- ADOBE ANALYTICS -->
    <script src="//assets.adobedtm.com/4fc527d6fda921c80e462d11a29deae2e4cf7514/satelliteLib-c91fdc6ac624c6cbcd50250f79786de339793801.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <script data-main="http://assets.nydailynews.com/nydn/js/rh.js?r=20170405001" src="http://assets.nydailynews.com/nydn/js/require.js?r=2016LIST" defer></script>
      
    <link rel="stylesheet" type="text/css" href="http://assets.nydailynews.com/nydn/c/rh.css?r=2016LIST">
    <link rel="stylesheet" type="text/css" href="http://assets.nydailynews.com/nydn/c/ra.css?r=2016LIST">
	<link href="../css/style.css?v2" rel="stylesheet" type="text/css" />
    <script>
    var nydn = nydn || {
        "section": "NYDailyNews",
        "template": "article",
        "revision": "201609014009",
        "targetPath": document.location.pathname
    };
    </script>
    <script>
    var nydnDO = [
        { 
            'title':'xxxLongform articles, 2017xxx', 
            'link':'http://interactive.nydailynews.com/longform/2017/', 
            'p_type':'interactive', 
            'section':'interactive' }
    ];
    </script>
    
    <!-- ADS-START -->
    <script onload="nydn_ads('mta-delays');" src="/includes/template/template.js"></script>
    <!-- ADS-END -->

    <script src="/js/jquery.min.js"></script>

    <script>var nav_params = {section: 'Longform', url: 'http://interactive.nydailynews.com/longform/'};</script>
    <script src="/library/vendor-nav/vendor-include.js" defer></script>
</head>
<body id="nydailynews" data-section="nydailynews" data-subsection="NY Daily News" class="">


<!-- SITEHEADER-START -->
<header id="templateheader"></header>
<!-- SITEHEADER-END -->

<main id="ra-main"> <div id="ra-body-wrap">                    

	<h1>Longform articles, 2017</h1>
	<p>Recent selections from the NY Daily News' longform investigations and features.</p>
<?php
$prev_year = '';
foreach ( $csv->data as $key => $item ):
	if ( $item['year'] != '2017' ) continue;

	if ( $item['year'] != $prev_year ): ?>
	<h2><?php echo $item['year']; ?> longforms</h2>
<?php endif;
	echo "		<li><a href='" . $item['url'] . "'>" . $item['title'] . "</a></li>\n";
	$prev_year = $item['year'];
endforeach;
?>

<hr>
  <div class="center" style="margin-bottom: 18px">
    <span class="advertisement">ADVERTISEMENT</span>
    <div id='div-gpt-ad-1423507761396-1'>
		<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-1'); });
		</script>
    </div>
  </div>
<hr>
<hr>
  <div class="center" style="margin-bottom: 18px">
    <span class="advertisement">ADVERTISEMENT</span>
    <div id='div-gpt-ad-1423507761396-2'>
		<script>
			googletag.cmd.push(function() { googletag.display('div-gpt-ad-1423507761396-2'); });
		</script>
    </div>
  </div>
<hr>

 
  
</div>
</main>

        <!-- CUSTOM JS GOES HERE-->
		<script src="../js/jquery.sticky.js"></script>
		<script src="../js/scripts.js?v2"></script>
  </div>  

<!-- FOOTER-START -->
<footer id="rf">
    <div id="rf-header">
        <div class="rf-wrapper">
            <div class="col_2-3">
                <div id="rf-email">
                    <a href="http://link.nydailynews.com/join/4xm/newslettersignup-mobile"> 
                        <img src="http://assets.nydailynews.com/nydn/img/static/envelope.svg" alt="Sign Up"> 
                        <header>Get Daily News stories, delivered to your inbox.</header>
                        <div>Sign Up</div>
                    </a> 
                </div>
            </div>
            <div class="col_1-3 rf-follow-wrapper">
                <dl class="" id="rf-follow"> 
                    <dt>Follow Us</dt>
                    <dd><a href="https://www.facebook.com/NYDailyNews" target="_blank" class="ri-facebook">Facebook</a></dd>
                    <dd><a href="https://twitter.com/NYDailyNews" target="_blank" class="ri-twitter">Twitter</a></dd>
                    <dd><a href="https://www.instagram.com/nydailynews/" target="_blank" class="ri-instagram">Instagram</a></dd>
                    <dd><a href="https://www.pinterest.com/nydailynews/" target="_blank" class="ri-pinterest">Pinterest</a></dd>
                    <dd><a href="https://www.youtube.com/user/nydailynews" target="_blank" class="ri-youtube">YouTube</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <div id="rf-main">
        <div class="rf-wrapper">
            <div class="col_2-3 rf-links">
                <dl class="col_1-3"> 
                    <dt>Keep in Touch</dt>
                    <dd><a href="http://link.nydailynews.com/join/4xm/newslettersignup-desktop">Newsletter</a></dd>
                    <dd><a href="http://www.nydailynews.com/services/mobile">Apps</a></dd>
                    <dd class="mob-show"><a href="https://homedelivery.nydailynews.com/">Subscribe</a></dd>
                    <dd><a href="http://www.nydailynews.com/services/feeds">Feeds</a></dd>
                </dl>
                <dl class="col_1-3"> 
                    <dt>Support &amp; Contact</dt>
                    <dd class="mob-show"><a href="http://www.nydailynews.com/services/contact-us">Contact Us</a></dd>
                    <dd><a href="http://www.nydailynews.com/services/careers">Careers</a></dd>
                    <dd><a href="http://www.nydailynews.com/services/media-kit">Media Kit</a></dd>
                    <dd><a href="http://www.nydailynews.com/services/sitemap">Site Map</a></dd>
                </dl>
                <dl class="col_1-3"> 
                    <dt>Terms of Use</dt>
                    <dd><a href="http://nydailynews.adperfect.com/">Ad Choices</a></dd>
                    <dd class="mob-show"><a href="http://www.nydailynews.com/services/terms-services">Terms of Service</a></dd>
                    <dd class="mob-show"><a href="http://www.nydailynews.com/services/privacy-policy">Privacy Policy</a></dd>
                </dl>
            </div>
<!--
            <div class="col_1-3 rf-cover">
                <dl> 
                    <dt>Daily News Covers</dt>
                    <dd> <a href="http://www.nydailynews.com/new-york/nydn-front-pages-2016-gallery-1.2482879"> <img alt='NY Daily News Covers' src='http://assets.nydailynews.com/polopoly_fs/1.2806185.1474882158!/img/httpImage/image.jpg_gen/derivatives/article_750/long-live-king-september-26-2016.jpg' /> </a> </dd>
                </dl>
            </div>
-->
            <span id="rf-copyright">&copy; Copyright 2016-2017 NYDailyNews.com. All rights reserved.</span> 
        </div>
    </div>
</footer>
<div id="ra-bp">
      </div> <section id="rao">  <div id="rao-close"></div> <div id="rao-wrap"></div> </section> 
<div id="r-scripts">
    <div id="parsely-root" style="display: none">
        <span id="parsely-cfg" data-parsely-site="nydailynews.com"></span>
    </div>
    <div class="r-ad">
        <div id="div-gpt-ad-x100">
        </div>
    </div>
</div>
</body>
</html>
