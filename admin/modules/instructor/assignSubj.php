		<div class="well">
			<h3 align="left">List of Subject</h3>
			    <form action="controller.php?action=assign&instructorId=<?php echo $_GET['instructorId']; ?>" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
			
				  <thead>
				  	<tr>
				  		<th>No</th>
				  		<th>
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject Code</th>
				  		<th>Description</th>
				  	<!--	<th>Unit</th>
				  		<th>Pre-requisite</th>
				  		<th>Semester</th>-->
				 		<th>Grade Level</th>
				 	<!--	<th>Level</th>-->
				 		<th>Status</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		$instructorId=$_GET['instructorId'];
				
					
					  $mydb->setQuery("SELECT  * 
					  						FROM  `subject` s,  `course` c , class cl 
					  						WHERE s.`COURSE_ID`= c.`COURSE_ID` 
					  						AND s.`SUBJ_ID`=cl.`SUBJ_ID`");
						  	loadresult();
						 	$mydb->setQuery("SELECT  * 
					  						FROM  `subject` s,  `course` c
											WHERE s.`COURSE_ID`= c.`COURSE_ID` AND s.`SUBJ_ID` NOT IN (SELECT  `SUBJ_ID` 
					  						FROM  `class`) ");
					  	 
						  	loadresult();
					  

				  		function loadresult(){
					  		global $mydb;	
					  		 $cur = $mydb->loadResultlist();				  		
							foreach ($cur as $result) {

								if (isset($result->CLASS_ID)){
									//status
									$added = "Added";
									//for the selector
									$select = '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]"  disabled CHECKED="CHECKED"  value=""/>
						  				 ' . $result->SUBJ_CODE.'</td>';
								}else{
									//status
									$added = "None";
									//for the selector
									$select ='<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  				 ' . $result->SUBJ_CODE.'</td>';
								}
						  		echo '<tr>';
						  		echo '<td width="5%" align="center"></td>';
						  		// echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  		// 		 ' . $result->SUBJ_CODE.'</td>';
						  		echo $select;
						  		echo '<td width="30%">'. $result->SUBJ_DESCRIPTION.'</td>';
						  	/*	echo '<td>'. $result->UNIT.'</td>';
						  		echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		echo '<td>'. $result->SEMESTER.'</td>';*/
						  		echo '<td>'. $result->COURSE_NAME.'</td>';
						  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
								echo '<td>'.$added.'</td>';
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				
				</table>
				<div class="btn-group">
				  <a href="index.php?view=instSubj&instructorId=<?php echo (isset($instructorId)) ? $instructorId : 'ID' ;?>" class="btn btn-default"><span class="glyphicon glyphicon-back"></span>Back</a>
				  <button type="submit" class="btn btn-default" name="Add"><span class="glyphicon glyphicon-plus-sign"></span>Assign Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->