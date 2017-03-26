<?php
include_once 'inc/class.crud.php';
include_once 'header.php';
$crud = new CRUD();
?>

  
<div class="container">
    <div class="row">
    <br>
        <div class="col-md-12">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">User Details</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="add_record.php"><button type="button" class="btn btn-sm btn-primary btn-create">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Name</th>
                        <th>Country</th>
                        <th>Email Id</th>
                        <th>Mobile No</th>
                        <th>About Us</th>
                        <th>D.O.B</th>
                    </tr> 
                  </thead>
                  <tbody id="myTable">
                  <?php
                    $res = $crud->read();
                    if(mysql_num_rows($res)>0)
                    {
                    $i=1;
                      while($row = mysql_fetch_array($res))
                    {
                  ?>
                          <tr>
                            <td align="center">
                              <a href="edit_records.php?edt_id=<?php echo $row['user_id']; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a href="dbcrud.php?del_id=<?php echo $row['user_id']; ?>"class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile_no']; ?></td>
                            <td><?php echo $row['about_us']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                          </tr>
                  <?php 
                  $i++;
                    }
                    }
                  ?>        
                          
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  
                  <div class="col col-xs-4">
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right" id="myPager">
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div></div>

</body>
</html>
