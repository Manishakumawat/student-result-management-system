<div class="container">

		<div class="wellss">
			<?php 

				$mydb->setQuery("SELECT * 
									FROM instructor
									WHERE  `INST_EMAIL` ='{$_SESSION['ACCOUNT_USERNAME']}'");
				$cur = $mydb->loadSingleResult();
			?>
			  		
				 <fieldset>
						<legend>Faculty Information</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr><td>ID Number :</td><td width="80%"><?php echo $cur->INST_ID; ?></td></tr>	
							<td>Fullname :</td><td><?php echo $cur->INST_FULLNAME; ?></td>	</tr></tr>
							<td>Gender :</td><td><?php 
								if($cur->INST_SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td>Address :</td><td><?php echo $cur->INST_ADDRESS; ?></td>	</tr>
							<td>Status :</td><td><?php echo $cur->INST_STATUS; ?></td>	</tr>
							<td>Specialization :</td><td><?php echo $cur->SPECIALIZATION; ?></td>	</tr>
							<td>Email Address :</td><td><?php echo $cur->INST_EMAIL; ?></td>	</tr>
							<td>Employment Status :</td><td><?php echo $cur->EMPLOYMENT_STATUS; ?></td>	</tr>
							
							</tr>
						
						</tr>
					</table>	


				</fieldset>
				
							
			
	  	</div><!--End of well-->

</div><!--End of container-->