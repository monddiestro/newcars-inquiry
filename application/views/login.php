<div class="container">
  <div class="row mt-100">
    <div class="col-sm-offset-4 col-sm-4">
      <?php
        $flash = $this->session->flashdata('result');
        if(!empty($flash)) {
          $display = 'block';
          $class = $this->session->flashdata('result');
          $message = $this->session->flashdata('result_message');
        } else {
          $display = 'none';
          $class = '';
          $message = '';
        }
      ?>
      <div class="alert alert-<?php echo $class ?> alert-dismissible" role="alert" style="display:<?php echo $display ?>">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> <?php echo $message ?>.
      </div>
      <div class="panel panel-default">
        <?php echo form_open('login/checkuser') ?>
        <div class="panel-body">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
          </div>
          <div class="input-group" style="margin-top:10px;">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block" style="margin-top:10px"/>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
