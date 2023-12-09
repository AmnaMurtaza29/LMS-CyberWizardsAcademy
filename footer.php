<!-- Start Social Follow- -->
<div class="container-fluid txt-banner bottom-banner">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-twitter">Twitter</i></a>  
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f">Facebook</i></a>  
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-instagram">Instagram</i></a>  
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp">WhatsApp</i></a>  
    </div>
  </div>
</div>
<!-- End Social Follow -->

<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2023 || Designed and Developed by Amna Sadia || <a href="#Login" data-bs-toggle="modal" data-bs-target="#AdminLoginModal">Admin Login</a></small>
</footer>

<!-- End Footer -->
   




<!-- Start Footer Registration Modal -->
   

<!-- Modal -->
<div class="modal fade" id="SignupModal" tabindex="-1" aria-labelledby="SignupModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="SignupModalLabel">Student Regestration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <i class="fas fa-user"></i>
    <label for="stuname" class="pl-2 font-weight-bold">Name</label><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
    </div>
    <br>
  <div class="form-group">
  <i class="fas fa-envelope">

  </i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="stuemail">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <br>
  
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
    <input type="password" class="form-control" id="stupass" name="stupass" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn-btn-danger" onclick="addStu()">Sign Up</button>
        <button type="button" class="btn-btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- End Studnet Registration Modal -->


<!-- Start Student Login Modal -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="LoginModalLabel">Student Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="LoginModalform">
    <br>
  <div class="form-group">
  <i class="fas fa-envelope">

  </i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="stuLogemail">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <br>
  
  <div class="form-group">
    <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stuLogpass" name="stuLogpass" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn-btn-danger">Sign In</button>
        <button type="button" class="btn-btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- End Student Login Modal -->


<!-- Start Admin Login Modal -->
<div class="modal fade" id="AdminLoginModal" tabindex="-1" aria-labelledby="AdminLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="AdminLoginModalLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="AdminLoginModalform">
    <br>
  <div class="form-group">
  <i class="fas fa-envelope">

  </i><label for="adminLogemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="adminLogemail">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <br>
  
  <div class="form-group">
    <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="adminLogpass" name="adminLogpass" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn-btn-danger">Sign In</button>
        <button type="button" class="btn-btn-danger" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>

<!-- End Admin Login Modal -->














<!--Jquery & Bootstrap Javascript-->
<script src="js/jquery.min.js"></script>  
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!--Font Awesome CSS-->
<script src="js/all.min.js"></script>

</body>
</html>
