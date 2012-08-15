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
    <a href="https://github.com/ikr"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>

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

    <p id="timestamp">
        <?php echo date('d.m.Y') ?>
    </p>
</body>
</html>