<!DOCTYPE html>
<?php
   include 'db_connect.php';
   function Validate($data){
     $data= trim($data);
     $data = stripslashes($data);
     $data=htmlspecialchars($data);
     return $data;
   }
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form
      $number = Validate($_POST['number']);
      $password = md5($_POST['password']);
      if(isset($_POST['category']))
      {
        $category=$_POST['category'];
      }
      if($category == 'buyerdb')
      {
        $sql = "SELECT *
        FROM buyerdb
        WHERE buyerdb.bMobNo='$number'";
        $result = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
          $sql="UPDATE buyerdb SET buyerdb.password='$password' where buyerdb.bMobNo='$number'";
          $result = mysqli_query($connection,$sql);


        }


      }
      if($category == 'communorg')
      {
        $sql = "SELECT *
        FROM communorg
        WHERE communorg.mbNo='$number' ";
        $result = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {

          $sql="UPDATE communorg SET communorg.password='$password' where communorg.mbNo='$number'";
          $result = mysqli_query($connection,$sql);
        }


      }
      if($category == 'aggregator')
      {
        $sql = "SELECT *
        FROM aggregator
        WHERE aggregator.bMobNo='$number' ";
        $result = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($result);

                if($count == 1)
                {
                  $sql="UPDATE aggregator SET aggregator.password='$password' where  aggregator.bMobNo='$number'";
                  $result = mysqli_query($connection,$sql);
                }


      }
      if($category == 'medexpertdb')
      {

        $sql = "SELECT *
        FROM medexpertdb
        WHERE medexpertdb.mbNo='$number' ";
        $result = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
          $sql="UPDATE medexpertdb SET medexpertdb.password='$password' where  medexpertdb.mbNo='$number' ";
          $result = mysqli_query($connection,$sql);

        }

      }
      if($category == 'sellerdb')
      {
        $sql = "SELECT *
        FROM sellerdb
        WHERE sellerdb.sMobNo='$number' ";
        $result = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($result);
        if($count == 1)
        {
          $sql="UPDATE sellerdb SET sellerdb.password='$password' where sellerdb.password='$password'";
          $result = mysqli_query($connection,$sql);

        }
      }
      if($count<=0)
      {
         $error = '<span style="color:red;text-align:center;">Invalid category';
      }else{
        header("Location:passwordResetSuccess.php");
      }
   }
?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/login.css">


</head>

<body>

    <div class="login-form col-sm-12 col-md-6 col-md-offset-4">
    <form  method="post" action="">
     <h1 >Reset Password</h1>
     <div class="form-group ">
       <input type="number" name="number" class="form-control" aria-describedby="number" placeholder="Contact Number" id="contact" required>
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Password">
       <i class="fa fa-lock"></i>

                         <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
       <div class="invalidPassword"  style="color:red;">

       </div>
     </div>
     <div class="form-group log-status">
       <input type="password" name="chkpassword" class="form-control" id="confPassword" placeholder="Re-enter Password">
       <i class="fa fa-lock"></i>
       <div class="confPassword" style="color:red;">

       </div>
     </div>
     <div class="form-group" style="text-align:center;">


       <select name="category" class="form-control">
          <option  value="sellerdb">Farmer/Producer/Processor</option>
          <option  value="buyerdb">Buyer/Consumer</option>
          <option value="aggregator">Aggregator</option>
          <option  value="communorg">Community</option>
          <option  value="medexpertdb">Wellness Advisor</option>

        </select>
     </div>
     <div style="text-align:center;">  <span><?php echo $error; ?></span></div>


     <button type="submit" name="login" class="log-btn" id="submitBtn" onsubmit="return Validate()" disabled="disabled" onsubmit="return Validate()">Reset</button>
<p class="message">Not registered? <a href="signup2.php">Create an account</a></p>
</form>
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- <script  src="js/login.js"></script> -->




</body>

</html>
<script type="text/javascript">
$("#confPassword, #password").on("change",function(){
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confPassword").value;
  if (password != confirmPassword) {
      $(".confPassword").html("Passwords do not match.");
      $("#submitBtn").attr("disabled",true);
    }else if($("#password").val()=='' || $("#password").val().length<8 ){
      $(".invalidPassword").css('visibility', 'visible');
      $(".invalidPassword").html("Enter a valid password using above rules");
      $("#submitBtn").attr("disabled",true);

    }else{
      $("#submitBtn").attr("disabled",false);
    }
});



</script>
<script type="text/javascript">
$("#contact").on("change",function(){
  contact=$("#contact").val();
  $.post("duplicationCheck.php",
  {
  contact:contact
},
function(data, status){

  if (data!='') {

    // $(".invalidContact").css('visibility', 'visible');
    // $(".invalidContact").html("Contact number already Exist");
    $("#submitBtn").attr("disabled",false);
    $("#password").attr("disabled",false);
    $("#confPassword").attr("disabled",false);
  }else{
    // $(".invalidContact").html("");
    $("#submitBtn").attr("disabled",true);
    $("#password").attr("disabled",true);
    $("#confPassword").attr("disabled",true);
    alert("Mobile Number not found.");
  }

});
});
</script>
