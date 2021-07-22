<?php 

				$student = new Student();
				$cur = $student->single_student($_GET['id']);
			?>
		        <form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->IDNO; ?>" method="POST">

					<fieldset>
						<legend>New Student</legend>
															
 
			            <div class="col-md-4">
     					 <div class="form-group">
			              <label >ID Number*</label>  
			                 <input class="form-control input-sm" id="idno" name="idno" placeholder=
												  "ID Number" type="text" value="<?php echo $cur->IDNO; ?>" readonly>
			              </div> 
			            </div>  
			         
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "lName">LastName:*</label> 
			                  <input class="form-control input-sm" id="lName" name="lName" type=
			                  "text" placeholder="Last Name" value="<?php echo $cur->LNAME; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      					   <div class="form-group">
			                <label for=
			                "fName">Firstname:*</label> 
			                  <input class="form-control input-sm" id="fName" name="fName" type=
			                  "text" placeholder="First Name" value="<?php echo $cur->FNAME; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "mName">Middlename:*</label> 
			                  <input class="form-control input-sm" id="mName" name="mName" type=
			                  "text" placeholder="Middle Name" value="<?php echo $cur->MNAME; ?>">
			                </div>
			              </div>
			            </div> 
						
						<div class="form-group">
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "gender">Gender </label> 
				                <select class="form-control input-sm" name="gender" id="gender">
				                	<option value="<?php echo $cur->SEX; ?>"><?php echo $cur->SEX; ?></option>
									<option value="M">Male</option>
									<option value="F">Female</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "bday">Birth Date</label> 
			                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
			                    <input class="form-control" size="11" type="text" value="<?php echo $cur->BDAY; ?>" readonly name="bday" id="bday">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			                </div>
			              </div>
						</div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "bplace">Birth place</label> 
			                  <input class="form-control input-sm" id="bplace" name="bplace" type=
			                  "text" placeholder="Birth Place" value="<?php echo $cur->BPLACE; ?>">
			                </div>
			              </div>
			            </div>
			          </div>
												  
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "status">Civil Status </label> 
				                <select class="form-control input-sm" name="status" id="status">
				                	<option value="<?php echo $cur->STATUS; ?>"><?php echo $cur->STATUS; ?></option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "age">Age</label> 
			                  <input class="form-control input-sm" id="age" name="age" type="number" placeholder="age" value="<?php echo $cur->AGE; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "nationality">Nationality</label> 
			                  <input class="form-control input-sm" id="nationality" name="nationality" type=
			                  "text" placeholder="Nationality" value="<?php echo $cur->NATIONALITY; ?>">
			                </div>
			              </div>
			            </div> 
							 
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "religion">Religion </label> 
				                 <input class="form-control input-sm" id="religion" name="religion" type=
			                  "text" placeholder="Religion" value="<?php echo $cur->RELIGION; ?>">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "contact">Contact </label> 
			                  <input class="form-control input-sm" id="contact" name="contact" type="text" placeholder="Contact Number" value="<?php echo $cur->CONTACT_NO; ?>">
			                </div>
			              </div>
			               <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "email">Email*</label> 
			                  <input class="form-control input-sm" id="email" name="email" type=
			                  "email" placeholder="Email address" value="<?php echo $cur->EMAIL; ?>">
			                </div>
			              </div>
			          </div> 
 
			            <div class="row">
			              <div class="col-md-8">
      						<div class="form-group">
			                <label>Home   </label> 
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Home Address" value="<?php echo $cur->HOME_ADD; ?>">
			                </div>
			              </div>

			              
			            </div> 

    								
				</fieldset>	
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_GET['id']);
				?>
				<fieldset>
				<legend>Secondary Details</legend>
 
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "father">Father </label> 
			                 <input class="form-control input-sm" id="father" name="father" type=
		                  "text" placeholder="Father" value="<?php echo $det->FATHER; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "fOccu">Occupation </label> 
		                  <input class="form-control input-sm" id="fOccu" name="fOccu" type="text" placeholder="Occupation" value="<?php echo $det->FATHER_OCCU; ?>">
		                </div>
		              </div>
		              
		          </div> 

				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "mother">Mother </label> 
			                 <input class="form-control input-sm" id="mother" name="mother" type=
		                  "text" placeholder="Mother" value="<?php echo $det->MOTHER; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "mOccu">Occupation </label> 
		                  <input class="form-control input-sm" id="mOccu" name="mOccu" type="text" placeholder="Occupation" value="<?php echo $det->MOTHER_OCCU; ?>">
		                </div>
		              </div>
		              
		          </div>
		          </div>
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "boarding">Are you Boarding? </label> 
			                   <div class="">
                          		 <label><input checked id="boarding"name="boarding" type=
                          "radio" value="Yes" checked="checked" >Yes</label>
                        	   </div>
			                  <div class="">
                          		 <label><input checked id="boarding" name="boarding" type=
                          "radio" value="No" <?php echo ($det->BOARDING=='No')? 'checked ="checked"':''; ?>>No</label>
                        	   </div>

							
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "withfamily">With Family?</label> 
		              <div class="">
                          		 <label><input checked id="withfamily" name="withfamily" type=
                          "radio" value="Yes">Yes</label>
                        	   </div>
			                  <div class="">
                          		 <label><input checked id="withfamily" name="withfamily" type=
                          "radio" value="No">No</label>
                        	   </div>
		                </div>
		                </div>
		              </div>


		          </div>
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "guardian">Guardian </label> 
			                 <input class="form-control input-sm" id="guardian" name="guardian" type=
		                  "text" placeholder="Guardian" value="<?php echo $det->GUARDIAN; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "guardianAdd">Address </label> 
		                  <input class="form-control input-sm" id="guardianAdd" name="guardianAdd" type="text" placeholder="Guardian Address" value="<?php echo $det->GUARDIAN_ADDRESS; ?>">
		                </div>
		              </div>
		              
		          </div>
		          </div>


				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label  for=
		                "otherperson">Other person Supporting </label> 
			                 <input class="form-control input-sm" id="otherperson" name="otherperson" type=
		                  "text" placeholder="Other Person Supporting" value="<?php echo $det->OTHER_PERSON_SUPPORT; ?>">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "otherAddress">Address </label> 
		                  <input class="form-control input-sm" id="otherAddress" name="otherAddress" type="text" placeholder="Address" value="<?php echo $det->ADDRESS; ?>">
		                </div>
		              </div>
		              
		          </div>
		          </div>
		          
				</fieldset>	
				<?php
				$req = new Requirements();
				$res = $req->single_result($_GET['id']);
				?>
				<fieldset>
					<legend>Other Details</legend>
					<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
		                <label for=
		                "boarding">Requirements</label>

		                <div class="col-md-8">
			                 <div class="checkbox">
							    <label>
							      <input type="checkbox" name="nso" value="yes" <?php 
							      if ($res->NSO=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> NSO
							    </label>
							    
							  </div>
							  <div class="checkbox">
							    <label>
							      <input type="checkbox" name="baptismal" value="yes" <?php 
							      if ($res->BAPTISMAL=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Baptismal
							    </label>
							    
							  </div>

							  <div class="checkbox">
							    <label>
							      <input type="checkbox" name="entrance" value="yes" <?php 
							      if ($res->ENTRANCE_TEST_RESULT=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Entrance Test Result
							    </label>
							    
							  </div>
							   <div class="checkbox">
							    <label>
							      <input type="checkbox" name="mir_contract" value="yes" <?php 
							      if ($res->MARRIAGE_CONTRACT=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Marriage Contract
							    </label>
							    
							  </div>
							   <div class="checkbox">
							    <label>
							      <input type="checkbox" name="certifcateOfTransfer" value="yes" <?php 
							      if ($res->CERTIFICATE_OF_TRANSFER=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Certificate of Transfer
							    </label>
							    
							  </div>

		                </div>
		              </div>

		              </div>


		          </div>

				</fieldset>	
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
		                <label class="col-md-6 control-label" for=
		                "otherperson"></label>

		                <div class="col-md-6">
			             
		                </div>
		              </div>
		              <?php
if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
		              <div class="col-md-6" align="right">
		               <button class="btn btn-primary" name="submit" type="submit" >Save</button>

		               </div>';
		           } ?>
		              
		          </div>
		          </div>
					
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			
