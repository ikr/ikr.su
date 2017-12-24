<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/resume.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/resume-print.css" media="print"/>
    <title>Ivan Krechetov's Resume</title>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53380063-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
	<p id="go-up-p">
		<a id="go-up-a" href="index.html" title="Back to homepage">..</a>
	</p>

    <div id="photo-div">
        <img src="img/ikr.jpg" alt="IKR" title="Ivan Krechetov"/>
    </div>

    <p>
        Ivan Krechetov<br>
        Winterthur<br>
        ikr@ikr.su
    </p>

    <!-- converted markdown start -->

    <?php require_once dirname(__FILE__) . '/markdown.php' ?>
    <?php echo Markdown(file_get_contents(dirname(__FILE__) . '/resume_content.md')) ?>

    <!-- converted markdown end -->

    <p id="timestamp">
        <?php echo date('d.m.Y') ?>
    </p>
</body>
</html>
