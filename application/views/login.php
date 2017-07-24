<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport">
    <title>
      Selamat Datang 
    </title>
    <link rel = "stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel = "stylesheet" href="assets/css/login.css">
  </head>

  <body>
  <!-- Header web -->
    <div class="container">
      <div id="header">       
          <nav class="navbar navbar-default">

          </nav>
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
              <a class ="navbar-brand">Penerimaan Asisten</a>
            </div>
          </nav>
      </div>
    </div>
      
  <!-- Konten  -->
  <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h2 class="text-center login-title">Login</h2>     
                         
                
                <?php echo form_open('asisten/ceklogin'); ?>
                    <label for="username">Username</label>
                      <input type="text" name="user" class="form-control" required>
                    <label for="password">Password</label>
                      <input type="password" name="pwd" class="form-control" required>
                        <p>&nbsp;</p>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
                        
            <?php echo form_close(); ?>  
        </div>
            
    </div>
  </div>

    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
          <p>Copyright &copy; <?= date('Y'); ?></p>
      </div>
    </nav>
    

    
  </body>
</html>
    

    


        
      
    

  
      
  