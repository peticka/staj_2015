<div id="contact">
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
    <?php

    $this->load->helper("form");

    echo $message;

    echo validation_errors();

    echo form_open("site/send_email");

    echo form_label("Name: ", "fullName");
    $data = array(
        "name" => "fullName",
        "id" => "fullName",
        "value" => set_value("fullName")
    );
    echo form_input($data);

    echo form_label("Email: ", "email");
    $data = array(
        "name" => "email",
        "id" => "email",
        "value" => ""
    );
    echo form_input($data);

    echo form_label("Phone: ", "phone");
    $data = array(
        "name" => "phone",
        "id" => "phone",
        "value" => ""
    );
    echo form_input($data);

    echo form_label("Message: ", "message");
    $data = array(
        "name" => "message",
        "id" => "message",
        "value" => set_value("message")
    );
    echo form_textarea($data);

    echo form_submit("contactSubmit", "Send!");

    echo form_close();

    ?>
    <script>
        CKEDITOR.replace( 'message' );
    </script>
    <br><script src='https://www.google.com/recaptcha/api.js'></script>
    <div class="g-recaptcha" data-sitekey="6LcaLRITAAAAAF7XGk56WCrBFlZzYq1FnIRMSUS-"></div>

</div>
