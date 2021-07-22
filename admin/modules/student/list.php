
		<div class="wells">
				<h3 align="left">List of Student</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>No.</th>
				  		<th width="10%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID#.</th>
				  		<th>Fullname</th>
				  		<th>Sex</th>
				  		<th>Age</th>
				  		<th>Birth Date</th>
				  		<th>Email Address</th>
				  		<th>Options</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  	
				  	  	$mydb->setQuery("SELECT  `IDNO` ,UPPER(CONCAT(  `LNAME` ,  ', ',  `FNAME` ,  ' ',  `MNAME` )) AS  'Name',
				  						  `SEX` ,`AGE`, `BDAY` ,  `STATUS` ,  `EMAIL`
				  						  FROM  `tblstudent`");
				  	  	loadresult();

				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="5%" align="center"></td>';
					  		echo '<td width="10%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>
					  				<a href="index.php?view=edit&id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td  >'. $student->Name.'</td>';
					  		echo '<td align="center">'. $student->SEX.'</td>';
					  		echo '<td  align="center">'. $student->AGE.'</td>';
					  		echo '<td  align="center">'. $student->BDAY.'</td>';
					  		echo '<td>'. $student->EMAIL.'</td>';
					  		echo '<td><a href = "index.php?view=view&studentId='.$student->IDNO.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


				  </tbody>
				 
				</table>
				<?php 
					if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
						<div class="btn-group">
						  <a href="index.php?view=add" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
						   <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
						</div>';
					}

				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
