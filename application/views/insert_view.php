<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>

<div id="contact">
    <?php echo form_open('insert_ctrl'); ?>
    <h1>New Post</h1>
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
    <?php if (isset($message)) { ?>
        <br>A new blog post was inserted successfully<br>
    <?php } ?>
    <?php echo form_label('Title:'); ?> <?php echo form_error('btitle'); ?>
    <?php echo form_input(array('id' => 'btitle', 'name' => 'btitle')); ?><br>

    <br><?php echo form_label('Text:'); ?> <?php echo form_error('btext'); ?>
    <?php echo form_textarea(array('id' => 'btext', 'name' => 'btext')); ?><br>

    <br> <?php echo form_label('Author:'); ?> <?php echo form_error('bauthor'); ?>
    <?php echo form_input(array('id' => 'bauthor', 'name' => 'bauthor')); ?><br>

    <br><?php echo form_label('Date:'); ?> <?php echo form_error('bdate'); ?>
    <?php echo form_input(array('id' => 'bdate', 'name' => 'bdate')); ?><br>

    <br><?php echo "<input type='file' name='userfile' size='20' />"; ?><br>
    <br><?php echo "<input type='submit' name='submit' value='Submit' /> ";?>

    <?php echo "</form>"?>

    <?php echo form_close(); ?><br/>
    <script>
        CKEDITOR.replace( 'btext' );
    </script>
</div>
</body>
</html>