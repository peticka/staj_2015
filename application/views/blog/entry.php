<div id="content">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title><?php echo $post->blog_title; ?> - Blog</title>
</head>
<body id="blog_entry" onload="">

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-share-button" data-href="http://www.blog/index.php/blog/entry/petq.php" data-layout="button_count"></div>

<h2><?php echo $post->blog_title; ?></h2>
<span class="metadata"><?php echo $post->blog_author; ?></span>
<p><?php echo $post->blog_text; ?></p>

<br><a href="blog/">Back to Blog</a></br>
</body>
<html>
</div>
