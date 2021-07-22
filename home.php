  <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/school.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">Online Grading System</h1>
            </div>
            <div class="col-lg-5 ml-auto"> 
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <h2 class="line-bottom">Logged In</h2>
            <p>This area is a student area that you can view a student profile and subject with grades</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white">
                <h2>Login Information</h2>
                <hr/>
               <span class="fa fa-user"> </span> <label><?Php echo $_SESSION['FNAME'];?></label><br/>
               <span class="fa fa-cog"> </span> <label><?Php echo $_SESSION['LNAME'];?></label><br/>
               <hr/>
                  <div class="form-group">
                <a href="logout.php" class="btn btn-primary px-5">Logout <span class="fa fa-log-out"></span></a>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>