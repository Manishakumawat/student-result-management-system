
<form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

      <fieldset>
        <legend>New Grade level</legend>
                          

          <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "coursename">Grade</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="coursename" name="coursename" placeholder=
                        "Course Code" type="text" value="">
                  </div>
                </div>
              </div>

           <!--      <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "level">Level</label>

                  <div class="col-md-8"> -->
                     <input class="form-control input-sm" id="level" name="level" placeholder=
                        "Course Level" type="hidden" value="">
           <!--       </div>
                </div>
              </div> -->
            <!--   <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "major">Major</label>

                  <div class="col-md-8">
                      <select class="form-control input-sm" name="major" id="major">
                        <option value="None">None</option>
                        <?php
                     /*   $major = new Major();
                        $cur= $major->listOfmajor();
                        foreach ($cur  as $major) {
                          echo '<option value='.$major->MAJOR.'>'.$major->MAJOR.'</OPTION>';
                        }*/

                        ?>
                      </select> 
                      <input class="form-control input-sm" id="major" name="major" placeholder=
                        "Course Level" type="hidden" value="">
                  </div>
                </div>
              </div>
-->
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "coursedesc">Description</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="coursedesc" name="coursedesc" placeholder=
                        "Course Description" type="text" value="">
                  </div>
                </div>
              </div>

        <!-- <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "dept">Department</label>

                  <div class="col-md-8">-->
                     
                        <?php
                        $dept = new dept();
                        $cur = $dept->listOfDept(); 
                        foreach ($cur as $Department) {
                          echo ' <input type="hidden" class="form-control input-sm" name="dept" id="dept" value="'. $Department->DEPT_ID.'">';
                        }

                        ?>
                
                
             <!--     </div>
                </div>
              </div>-->
         <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "idno"></label>

                  <div class="col-md-8">
                    <button class="btn btn-default" name="savecourse" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                  </div>
                </div>
              </div>

          
      </fieldset> 

              
    </form>

</div><!--End of container-->