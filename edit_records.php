<?php
include_once 'inc/class.crud.php';
include_once 'header.php';
$crud = new CRUD();
if(isset($_GET['edt_id']))
{
  $res=mysql_query("SELECT * FROM users WHERE user_id=".$_GET['edt_id']);
  $row=mysql_fetch_array($res);
}
?>
<script>
  function Validation() {
    if(document.getElementById("name").value==""){
      alert("Please Enter Username");
      return false;
    }else if(document.getElementById("country").value==""){
      alert("Please Enter Country Name");
      return false;
    }else if(document.getElementById("email").value==""){
      alert("Please Enter Email Id");
      return false;      
    }else if(document.getElementById("mobile_no").value==""){
      alert("Please Enter Mobile Number");
      return false;      
    }else if(document.getElementById("dob").value==""){
      alert("Please Enter Date Of Birthday");
      return false;      
    }else if(document.getElementById("about_us").value==""){
      alert("Please Enter About Us");
      return false;      
    }
  }
</script>
<div class="container">
<div class="col-md-12">
<br>
<a href="index.php" class="btn btn-primary btn-xs pull-right">View Record</a>
<br>
    <div class="form-area">  
        <form role="form" method="post" action="dbcrud.php?edt_id=<?php echo $_GET['edt_id'] ?>">
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Update User</h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $row['name'] ?>" required>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="<?php echo $row['country'] ?>" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email'] ?>" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile Number" maxlength="10" value="<?php echo $row['mobile_no'] ?>" required>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birthday" value="<?php echo $row['dob'] ?>" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" type="textarea" id="about_us" name="about_us" placeholder="Message" rows="7" required><?php echo $row['about_us'] ?></textarea>
          </div>
            
        <input type="submit" id="submit" name="update" value="Submit Form" class="btn btn-primary pull-right" onclick="Validation();">
        </form>
    </div>
</div>
</div>

</body>
</html>
