<!-- <style>

p {
    font-family: "Times New Roman";
    font-size: 20px;
    color:#86A3C3;
}



</style> -->







<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codeigniter CRUD</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>" />
</head>
  <style>
  
  body{
  background-image: url(<?php echo base_url().'assets/img/naira_note.jpg'?>);
  }
.form_container {
    display: block;
    background-color: e8e8e4;
    padding: 10px;
}
</style>


<body>





<div class="container">


  <h1><a href="<?php echo site_url('users/index'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i></a>Resgistration Form<h5>
<!-- <p>Please fill out your personal details!!!</p> -->
  <hr>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
      <div class="form_container">

        <?php $attributes = array('id' => 'add_user_form' , 'class' => 'form_horizontal' ); ?>

        <?php echo validation_errors("<p class='alert alert-danger alert-dismissable fade in'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>"); ?>

        <?php if($this->session->flashdata('errors')): echo $this->session->flashdata('errors'); ?>
        <?php endif; ?>

        <?php echo form_open('users/add', $attributes); ?>

        <div class="form-group">

          <?php echo form_label('First Name'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'first_name',
              'placeholder' => 'Please enter your first name',
              'value' => $this->input->post('first_name')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Last Name'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'last_name',
              'placeholder' => 'Please enter your last name',
              'value' => $this->input->post('last_name')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Email'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'email',
              'placeholder' => 'Please enter your email',
              'type'  => 'email',
              'value' => $this->input->post('email')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Username'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'username',
              'placeholder' => 'Please enter a username',
              'value' => $this->input->post('username')
            );
            echo form_input($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Password'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'password',
              'type'  => 'password',
               'placeholder' => 'Please enter your email',
              'value' => $this->input->post('password')
            );
            echo form_password($data);
          ?>

        </div>

        <div class="form-group">

          <?php echo form_label('Confirm Password'); ?>

          <?php
            $data = array(
              'class' => 'form-control',
              'name'  => 'confirmpassword',
               'placeholder' => 'Please enter your email',
              'type'  => 'password'
            );
            echo form_password($data);
          ?>

        </div>





        <div class="form-group">

          <?php
            $data = array(
              'class' => 'btn btn-primary pull-right',
              'type'  => 'submit',
              'name'  => 'submit',
              'value' => 'submit'
            );
            echo form_submit($data);
          ?>

        </div>






        <div class="clearfix"></div>
        
      </div>
      <br>
      Do you have an account?
      <a href="http://localhost/ci-crud-master/index.php/home">Login</a>

    </div>
  </div>
</div>
</body>
