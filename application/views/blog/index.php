<div id="content">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Blog</title>
</head>
<body id="blog_entry" onload="">
<h2>All Blog Posts</h2>
<?php
echo $this->pagination->create_links();
foreach ($query as $entry) {  ?>
    <div class="blog_text">
        <h2><a href="<?php echo site_url('/blog/entry/'.rawurlencode($entry->blog_title)); ?>"><?php echo $entry->blog_title; ?></a></h2>
        <span class="metadata"><?php echo $entry->blog_author; ?></span>
        <p><?php echo $entry->blog_text; ?></p>
    </div>

<?php }  ?>

</body>
<html>
    </div>