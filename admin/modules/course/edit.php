<?php

	$courseid = $_GET['id'];
	$singledept = new Course();
	$object = $singledept->single_course($courseid);

?>
<form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $courseid;?>" method="POST">

	<fieldset>
		<legend>Modify Grade level</legend>
		<div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "coursename">Grade </label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="coursename" name="coursename" placeholder=
									  "Course Code" type="text" value="<?php echo $object->COURSE_NAME;?>">
              </div>
            </div>
          </div>
        <!--    <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "level">Level</label>

              <div class="col-md-8"> -->
                 <input class="form-control input-sm" id="level" name="level" placeholder=
									  "Course Level" type="hidden" value="<?php echo $object->COURSE_LEVEL;?>">
             <!-- </div>
            </div>
          </div> -->
       <!--    <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "major">Major</label>

              <div class="col-md-8">
                  <select class="form-control input-sm" name="major" id="major">
                  	<option value="None">None</option>
                  	<?php
                  /*	$major = new Major();
                  	$cur= $major->listOfmajor();
                  	foreach ($cur  as $major) {
                  		echo '<option value='.$major->MAJOR.'>'.$major->MAJOR.'</OPTION>';
                  	}*/

                  	?>
                  </select>	-->
                   <input class="form-control input-sm" id="major" name="major" placeholder=
									  "Course Level" type="hidden" value="">
          <!--    </div>
            </div>
          </div>-->

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "coursedesc">Description</label>

              <div class="col-md-8">
                 <input class="form-control input-sm" id="coursedesc" name="coursedesc" placeholder=
									  "Course Description" type="text" value="<?php echo $object->COURSE_DESC;?>">
              </div>
            </div>
          </div>

	<!--	 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "dept">Department</label>

              <div class="col-md-8">
                  <select class="form-control input-sm" name="dept" id="dept">-->
                  	<?php
                  	$dept = new dept();
                  	$cur = $dept->listOfDept();	
                  	foreach ($cur as $Department) {
                  		echo '<input type="hidden" name="dept" id="dept" value="'. $Department->DEPT_ID.'">';
                  	}

                  	?>
						
			<!--		</select>	
              </div>
            </div>
          </div>-->
          <?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="savecourse" type="submit" >Save</button>
              </div>
            </div>
          </div>';
        }
        ?>

			
	</fieldset>	
	
</form>

</div><!--End of container-->
