<!-- start footer -->
<footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2024 || Designed by E-learning || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLogModalcentre">Admin Login</a> </small>
      </footer> <!--End Footer-->

      <!--Start Registration modal  -->
      

<!-- Modal -->
    <div class="modal fade" id="studRegModalcentre" tabindex="-1" aria-labelledby="studRegModalcentreLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="studRegModalcentreLabel">Student Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      
      <!-- Start Registration form -->
<form id="stuRegForm">
    <div class="form-group">
        <i class="fas fa-user"></i> <label for="stuname" class="pl-2 font-weight-bold">Name</label><small id="statusMsg1"></small>
        <input type="text" class="form-control" id="stuname" placeholder="Enter your Name" name="stuname">
    </div>
    <div class="form-group">
        <i class="fas fa-envelope"></i>
        <label for="stuemail" class="pl-2 font-weight-bold">Email address</label><small id="statusMsg2"></small>
        <input type="email" class="form-control" id="stuemail" placeholder="Enter your email" name="stuemail">
        <small class="form-text">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <i class="fas fa-key"></i>
        <label for="stupassword" class="pl-2 font-weight-bold">New Password</label><small id="statusMsg3"></small>
        <input type="password" class="form-control" id="stupass" placeholder="Enter your password" name="stupassword">
    </div>
    <!-- End student registration form -->

</form>

      
      
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup" >Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
  </div>

      <!--End Registration modal  -->
      
      <!-- Start Login model -->
      <div class="modal fade" id="studLogModalcentre" tabindex="-1" aria-labelledby="studLogModalcentreLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="studLogModalcentreLabel">Student Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- Start student Login form -->

      <form stu="stuLoginform">
    <div class="form-group">
    <i class="fas fa-envelope"></i> 
    <label for="stuLogEmail1" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="stuLogEmail" placeholder="Enter your email" name="stuLogEmail" >
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i> 
    <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stuLogpass" placeholder="Enter your password" name="stuLogpass">
  </div>
  <!-- End student Login form -->

    
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
  </div>

  <!-- Start Admin Login model -->
  <div class="modal fade" id="adminLogModalcentre" tabindex="-1" aria-labelledby="adminLogModalcentreLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminLogModalcentreLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- Start student Login form -->

      <form stu="adminLoginform">
    <div class="form-group">
    <i class="fas fa-envelope"></i> 
    <label for="adminLogEmail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" id="adminLogEmail" placeholder="Enter your email" name="adminLogEmail" >
    <small class="form-text">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <i class="fas fa-key"></i> 
    <label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="adminLogpass" placeholder="Enter your password" name="adminLogpass">
  </div>
  <!-- End student Login form -->

  </form>

  <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
  </div>



    

    <!--Jquery and Bootstrap Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Font Awesome JS-->
    <script src="js/all.min.js"></script>
    <!-- Student Ajax Call javascript -->
    <script type="text/javascript" src="js/ajaxrequest.js"></script>

    

</body>
</html>