

<?php
$login = array(
'name'=> 'login',
'id'=> 'login',
'value' => set_value('login'),
'maxlength'=> 80,
'size'=> 30,
);
if ($login_by_username AND $login_by_email) {
$login_label = 'Email or login';
} else if ($login_by_username) {
$login_label = 'Username';
} else {
$login_label = 'Email';
}
$password = array(
'name'=> 'password',
'id'=> 'password',
'size'=> 30,
);
$remember = array(
'name'=> 'remember',
'id'=> 'remember',
'value'=> 1,
'checked'=> set_value('remember'),
'style' => 'margin:0;padding:0',
);
$captcha = array(
'name'=> 'captcha',
'id'=> 'captcha',
'maxlength'=> 8,
);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v4.6</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container">

<?php echo form_open($this->uri->uri_string()); ?>

<div class="form-group">
<?php echo form_label($login_label, $login['id']); ?>
<?php echo form_input($login, '', 'class="form-control"'); ?>
<small class="form-text text-muted"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']]) ? $errors($login['name']) : ''; ?></small>
</div>
<div class="form-group">
<?php echo form_label('Password', $password['id']); ?>
<?php echo form_password($password, '', 'class="form-control"'); ?>
<small class="form-text text-muted"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors($password['name']) : ''; ?></small>
</div>
<div class="form-group form-check">
<?php echo form_checkbox($remember, '1', TRUE,'', 'class="form-check-input"'); ?>
<?php echo form_label('Remember me', $remember['id'], 'class="form-check-label"'); ?>
<table>
	<tr>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		
<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>

</tr>
</table>
</div>
<?php echo form_submit('submit', 'Let me in', 'class="btn btn-primary"'); ?>
<?php echo form_close(); ?>
</div>


</html>