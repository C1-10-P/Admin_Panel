<?php include('includes/header.php')?>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="../BS/index.php" class="">
                                <h3 class="text-primary">
                                    <!-- <i class="fa-solid fa-book"></i> -->
                                THE READS.</h3>
                            </a>
                            <h3></h3>
                        </div>
                        <div class="form-floating px-3 mb-3">
                        <form method="post" action="authenticate.php">
                        <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Username" required>
                            <!-- <label for="password"></label>
        <label for="username"></label> -->
        <!-- <input type="text" id="username" name="username" required><br> -->
        <input type="password" class="form-control mb-3" id="password" placeholder="Password" name="password" required>
                            <!-- <label for="password"></label> -->
        <!-- <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br> -->
        <!-- <input type="submit" value="Login"> -->
        <button type="submit" value="Login" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
    </form>
    </div>
                    
                        <div class="d-flex align-items-center justify-content-between mb-4"> 
                            <div class="form-check">
                                <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                                <a href="" class="text-center mt-2">Forgot Password?</a>
                            </div>
                           
                        </div>
                        
                        <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p> 
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
