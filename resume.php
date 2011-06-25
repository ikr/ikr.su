<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/resume.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/resume-print.css" media="print"/>
    <title>Ivan Krechetov's Resume</title>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-8547526-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</head>

<body>
    <a id="github-ribbon" href="http://github.com/ikr">
        <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://d3nwyuy0nl342s.cloudfront.net/img/4c7dc970b89fd04b81c8e221ba88ff99a06c6b61/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub"/>
    </a>

	<p id="go-up-p">
		<a id="go-up-a" href="index.html" title="Back to homepage">..</a>
	</p>

    <div id="photo-div">
        <img src="img/ikr.jpg" alt="IKR" title="Ivan Krechetov"/>
    </div>

    <!-- converted markdown start -->

    <?php require_once dirname(__FILE__) . '/markdown.php' ?>
    <?php echo Markdown(file_get_contents(dirname(__FILE__) . '/resume_content.md')) ?>

    <!-- converted markdown end -->

    <p id="timestamp">25.06.2011</p>
</body>
</html>