<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Bad Request</title>
    <meta name="description" content="jQuery Terminal: Bad Request"/>
    <link rel="shortcut icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://unpkg.com/optparse/lib/optparse.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/jcubic/static/js/wcwidth.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css"/>
    <script src="https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js"></script>
    <script>var code = 400</script>
    <script src="https://terminal.jcubic.pl/js/json-rpc.js"></script>
    <script src="https://unpkg.com/jquery.terminal/js/less.js?nocache=2"></script>
    <script src="https://terminal.jcubic.pl/js/terminal.error.js?nocache=2"></script>
    <link rel="stylesheet" href="https://terminal.jcubic.pl/css/error.css?nocache=2"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="jQuery Terminal Bad Request"/>
    <meta property="og:description" content="jQuery plugin for Command Line applications. Automatic JSON-RPC, custom object or a function. History, Authentication, Bash Shortcuts. Tab completion."/>
    <meta property="og:url" content="https://terminal.jcubic.pl<?=$_SERVER['REQUEST_URI']?>"/>
    <meta property="og:site_name" content="JQuery Terminal Emulator Plugin"/>
    <meta property="og:image" content="https://terminal.jcubic.pl/icon_big.png"/>

    <meta name="twitter:image" content="https://terminal.jcubic.pl/icon_big.png"/>
    <meta name="twitter:image:alt" content="Stylized Terminal Prompt '>_'"/>
    <meta name="twitter:title" content="jQuery Terminal Bad Request"/>
    <meta name="twitter:description" content="jQuery plugin for Command Line applications. Automatic JSON-RPC, custom object or a function. History, Authentication, Bash Shortcuts. Tab completion."/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@jcubic"/>
    <meta name="twitter:creator" content="@jcubic"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <div id="term"></div>
    <? if ($_SERVER["HTTP_HOST"] != "localhost" && !isset($_GET['track'])): ?>
    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//piwik.jcubic.pl/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '3']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->
    <noscript>
    <!-- Matomo Image Tracker-->
    <img src="https://piwik.jcubic.pl/matomo.php?idsite=3&amp;rec=1" style="border:0" alt="" />
    <!-- End Matomo -->
    </noscript>
    <? endif; ?>
</body>
</html>
