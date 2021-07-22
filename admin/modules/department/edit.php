<?php

$deptid = $_GET['id'];
$singledept = new Dept();
$object = $singledept->single_dept($deptid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $deptid;?>" method="POST">

          <fieldset>
            <legend>Edit Department</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "deptname">Department Name</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="<?php echo $object->DEPT_ID;?>">
                         <input class="form-control input-sm" id="deptname" name="deptname" placeholder=
                            "Department Name" type="text" value="<?php echo $object->DEPARTMENT_NAME;?>">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "deptdesc">Department Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="deptdesc" name="deptdesc" placeholder=
                            "Department Description" type="text" value="<?php echo $object->DEPARTMENT_DESC;?>">
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit" >Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      