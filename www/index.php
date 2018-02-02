<?php
//include('env.php');
//include(CLASS_PATH . 'class.csv.php');
include('../class.csv.php');
$csv = new parseCSV('data.csv');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Longform articles, by the NY Daily News</title>
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
    <meta name="parsely-title" content='Longform articles' />

    <!-- An index of the NY Daily News longform articles-->
    <meta name="description" content="An index of the NY Daily News longform articles" />

    <!-- KEYWORD -->
    <meta name="keywords" content="journalism,new york city" />
    <meta name="news_keywords" content="journalism,new york city" />
    <meta name="parsely-tags" content="interactive,interactive longform" />

    <!-- LINK -->
    <link rel="canonical" href="http://interactive.nydailynews.com/longform/">
    <meta property="og:url" content="http://interactive.nydailynews.com/longform/" />
    <meta name="twitter:url" content="http://interactive.nydailynews.com/longform/">
    <meta name="parsely-link" content="http://interactive.nydailynews.com/longform/" />

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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet'>
    <script data-main="http://assets.nydailynews.com/nydn/js/rh.js?r=20170405001" src="http://assets.nydailynews.com/nydn/js/require.js?r=2016LIST" defer></script>
      
    <link rel="stylesheet" href="http://assets.nydailynews.com/nydn/c/rh.css?r=2016LIST">
    <link rel="stylesheet" href="http://assets.nydailynews.com/nydn/c/ra.css?r=2016LIST">
	<link href="css/style.css?v2" rel="stylesheet" />
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
            'title':'xxxLongform articlesxxx', 
            'link':'http://interactive.nydailynews.com/longform/', 
            'p_type':'interactive', 
            'section':'interactive' }
    ];
    </script>
    
    <!-- ADS-START -->
	<script onload="nydn_ads('mta-delays');" src="/includes/template/template.js"></script>
    <!-- ADS-END -->
    <script>var nav_params = {section: 'Longform', url: 'http://interactive.nydailynews.com/longform/'};</script>
    <script src="/library/vendor-nav/vendor-include.js" defer></script>

</head>
<body id="nydailynews" data-section="nydailynews" data-subsection="NY Daily News" class="">

<!-- SITEHEADER-START -->
<header id="templateheader"></header>
<!-- SITEHEADER-END -->

<main id="ra-main"> <div id="ra-body-wrap">                    

	<h1>Longform articles</h1>
	<p>Recent selections from the NY Daily News' longform investigations and features.</p>
<?php
$prev_year = '';
foreach ( $csv->data as $key => $item ):
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
        <script src="/js/jquery.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/scripts.js?v2"></script>
  </div>  

<!-- FOOTER-START -->
<footer id="templatefooter"></footer>
<!-- FOOTER-END -->
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
