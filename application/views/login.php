<body class="bg-login">


  <div class="container">

    <div class="col-sm-6 col-md-4 col-md-offset-4">
    
      <div class="login-panel panel panel-default" style="margin-top: 25%">
        <div class="panel-heading">
          <h2 style=text-align:center;>Login</h2>

       
      
          <?php echo form_open('asisten/ceklogin'); ?>
          
          
          <label for="username">Username</label>
          <input type="text" name="user" class="form-control" placeholder="Username" required>
          <p>&nbsp;</p>
          <label for="password">Password</label>
          <input type="password" name="pwd" class="form-control" placeholder="Password" required>
          <p>&nbsp;</p>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" id= alertbox>Login</button>
          
          <?php echo form_close(); ?>
        </div>

      </div>
    </div>
  </div>
</body>