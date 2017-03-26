<?php
  include_once 'header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
<div class="container">
<div class="col-md-12">
<br>
<a href="index.php" class="btn btn-primary btn-xs pull-right">View Record</a>
<br>
    <div class="form-area">  
        <form role="form" method="post" action="dbcrud.php" ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate>
        <br style="clear:both">
        <h3 style="margin-bottom: 25px; text-align: center;">Add User</h3>
            <div class="form-group">
            <input type="text" class="form-control" name="name" ng-model="name" placeholder="Username" required>
            <span style="color:red" ng-show="myForm.name.$touched && myForm.name.$invalid">
            <span ng-show="myForm.name.$error.required">Username is required.</span>
            </span>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" name="country" placeholder="Country" ng-model="country" required>
            <span style="color:red" ng-show="myForm.country.$touched && myForm.country.$invalid">
            <span ng-show="myForm.country.$error.required">Country is required.</span>
            </span>
          </div>
          <div class="form-group">
            <input type="email" name="email" ng-model="email" class="form-control" placeholder="Email" required>
            <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
            <span ng-show="myForm.email.$error.required">Email is required.</span>
            <span ng-show="myForm.email.$error.email">Invalid email address.</span>
            </span>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="mobile_no" placeholder="Mobile Number" ng-model="mobile_no" maxlength="10" required>
            <span style="color:red" ng-show="myForm.mobile_no.$touched && myForm.mobile_no.$invalid">
            <span ng-show="myForm.mobile_no.$error.required">Mobile Number is required.</span>
            </span>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="dob" placeholder="Date Of Birthday" ng-model="dob" required>
            <span style="color:red" ng-show="myForm.dob.$touched && myForm.dob.$invalid">
              <span ng-show="myForm.dob.$error.required">Date Of Birthday is required.</span>
            </span>
          </div>
          <div class="form-group">
            <textarea class="form-control" type="textarea" name="about_us" placeholder="Message" maxlength="140" rows="7" ng-model="about_us" required></textarea>
            <span style="color:red" ng-show="myForm.about_us.$touched && myForm.about_us.$invalid">
              <span ng-show="myForm.about_us.$error.required">About Us is required.</span>
            </span>
          </div>
            
        <input type="submit" id="submit" name="save" value="Submit Form" class="btn btn-primary pull-right" ng-disabled="myForm.name.$invalid || myForm.country.$invalid || myForm.email.$invalid || myForm.mobile_no.$invalid || myForm.dob.$invalid || myForm.about_us.$invalid">
        </form>
    </div>
</div>
</div>


<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    
});
</script>

</body>
</html>
