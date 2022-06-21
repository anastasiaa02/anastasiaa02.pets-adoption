<?php
if(!isset($_POST['regbtn']))
{
?>
<section class="vh-100" style="background-image: url('images/regist3.jpg'); background-size: cover;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: rgba(173, 216, 230, 0.6);">
          <div class="card-body p-5 text-center">

            <h4>Sign up</h4></br>

            <form action="index.php?page=4" method="post"> 

            <div class="form-group form-outline mb-4">
            <label for="login"><b>Login:</b></label>
            <input type="text" class="form-control" name="login">
            </div>

            <div class="form-group form-outline mb-4">
            <label for="email"><b>Email address:</b></label>
            <input type="email" class="form-control" name="email">
            </div>
           
            <div class="form-group form-outline mb-4">
            <label for="pass1"><b>Password:</b></label>
            <input type="password" class="form-control" name="pass1">
            </div>
  
            <div class="form-group form-outline mb-4">
            <label for="pass2"><b>Confirm Password:</b></label>
            <input type="password" class="form-control" name="pass2">
            </div>

            <button type="submit" class="btn btn-lg btn-block" style="background-color:#007500; color: white;" name="regbtn">Register</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
else
{
	if(register($_POST['login'],$_POST['pass1'],$_POST['email']))
	{
		echo "<h3/><span style='color:green;'>New User Added!</span><h3/>";
	}
}
?>