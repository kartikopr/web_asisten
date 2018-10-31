<body class="bg-login">
  <!-- Header web -->
      
  <!-- Konten  -->
  
  <div class="container ">
    
        <div class="col-sm-6 col-md-4 col-md-offset-4 kotakLogin">
            <h2 style=text-align:center;>Login</h2>     
                         
                
                <?php echo form_open('asisten/ceklogin'); ?>
                    <label for="username">Username</label>
                      <input type="text" name="user" class="form-control" required>
                      <p>&nbsp;</p>
                    <label for="password">Password</label>
                      <input type="password" name="pwd" class="form-control" required>
                      <p>&nbsp;</p> 
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
                        
            <?php echo form_close(); ?>  
        </div>
            
    </div>
  
  


    
  </body>
</html>
    

    


        
      
    

  
      
  