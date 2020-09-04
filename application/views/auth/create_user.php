<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/assets/images/favicon.png">    
    <link rel="stylesheet" href="/assets/styles/bootstrap4/bootstrap.min.css">
</head>
<body>
          
  <div class="container">
    <div class="row justify-content-center" style="margin-top: 100px;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h1><?php echo lang('create_user_heading');?></h1>
            <p><?php echo lang('create_user_subheading');?></p>

            <div id="infoMessage"><?php echo $message;?></div>

            <?php echo form_open("auth/create_user");?>

                  <p>
                        <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                        <?php echo form_input($first_name);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                        <?php echo form_input($last_name);?>
                  </p>
                  
                  <?php
                  if($identity_column!=='email') {
                      echo '<p>';
                      echo lang('create_user_identity_label', 'identity');
                      echo '<br />';
                      echo form_error('identity');
                      echo form_input($identity);
                      echo '</p>';
                  }
                  ?>

                  <p>
                        <?php echo lang('create_user_company_label', 'company');?> <br />
                        <?php echo form_input($company);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_email_label', 'email');?> <br />
                        <?php echo form_input($email);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_phone_label', 'phone');?> <br />
                        <?php echo form_input($phone);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_password_label', 'password');?> <br />
                        <?php echo form_input($password);?>
                  </p>

                  <p>
                        <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                        <?php echo form_input($password_confirm);?>
                  </p>


                  <p><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-success"');?></p>

            <?php echo form_close();?>
      </div>
    </div>
  </div>

</body>
</html>
