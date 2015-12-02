<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Delete Database Demo</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="contact">
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <br><th>User Name</th>
                    <th>User Email</th</br>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user_list as $key =>$user) { ?>
                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo $user->user_name; ?></td>
                        <td><?php echo $user->user_email; ?></td>

                        <td><a href="<?php echo base_url() . "deleteuser/delete_user/" . $user->id; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>