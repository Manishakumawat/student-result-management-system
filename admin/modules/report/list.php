<?php
	 // if(!isset($_SESSION['ADMIN_USERID'])){
  //     redirect(web_root."admin/index.php");
  //    }

?> 
	 
<style type="text/css">
  .row {
    margin-bottom: 5px;
  }
</style>
  <!-- =============================================== -->
 
<!-- <section class="content-header">
	<div class="col-md-12">
		<div class="panel">
			<div class="panel-header"></div>
				<div class="panel-body">  
					 <div class="row">
					  <div class="col-sm-6 search1">
					    <label class="col-sm-3">Date From:</label>
					    <div class="col-sm-9">
					      <div class="input-group date">
					        <div class="input-group-addon">
					          <i class="fa fa-calendar"></i>
					        </div>
					        <input required autocomplete="off" type="text" value="<?php echo isset($_POST['date_from']) ? $_POST['date_from'] : DATE('m/d/Y'); ?>" name="date_from" class="form-control pull-right date_picker" id="datemask2" placeholder="mm/dd/yyyy">
					      </div>
					    </div>
					  </div>
					</div>   
					 <div class="row">
					  <div class="col-sm-6 search1">
					    <label class="col-sm-3">Date To:</label>
					    <div class="col-sm-9">
					      <div class="input-group date">
					        <div class="input-group-addon">
					          <i class="fa fa-calendar"></i>
					        </div>
					        <input required autocomplete="off" type="text" value="<?php echo isset($_POST['date_to']) ? $_POST['date_to'] : DATE('m/d/Y'); ?>" name="date_to" class="form-control pull-right date_picker" id="datemask2" placeholder="mm/dd/yyyy">
					      </div>
					    </div>
					  </div>
					</div>   
					  <div class="row">
					  <div class="col-sm-6 search1">
					    <label class="col-sm-3"></label>
					    <div class="col-sm-9">
					       <input type="submit" name="submit" class="btn btn-success">
					    </div>
					  </div>
					</div>  
				</div>
		</div> 
		
	</div> 
</section>
 -->
  <section class="content">
  	<?php 
  	$sql = "SELECT * FROM `tblstore` WHERE `StoreID`=".$_SESSION['ADMIN_USERID'];
  	$mydb->setQuery($sql);
  	$store = $mydb->loadSingleResult();
  	?>

  	<p style="text-align: center;font-size: 15px"><?php echo $store->StoreName ?> <br>
	<?php echo $store->StoreAddress ?> <br>
	Products Inventory <br/>
	As of <?php echo date('m/d/Y');?>

  </p>
<table   class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

  <thead>
  	<tr>
		<th>Product ID</th>
		<th>Categories</th>
		<th>Product</th>
		<th>Description</th>
		<th>Stocks</th>
		<th>Sold</th>
		<th>Expired</th>
		<th>Remaining</th> 
		<!-- <th width="14%" >Action</th>  -->
  	</tr>	
  </thead> 
  <tbody>
  	<?php   
  		// $mydb->setQuery("SELECT * 
				// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
  	// `ProductID`, `ProductName`, `Description`, `Price`, `DateExpire`,Categories,StoreName
  		$sql ="SELECT *,sum(Stocks) as 'sto',sum(Sold) as sol,sum(`ExpiredQty`) as exp,sum(Remaining) as rem  FROM tblstockin st, `tblproduct` p, `tblcategory` c,`tblstore` s WHERE st.ProductID=p.ProductID AND p.`CategoryID`=c.`CategoryID` AND p.`StoreID`=s.`StoreID` AND p.`StoreID`=".$_SESSION['ADMIN_USERID']." GROUP BY p.ProductID";

  		$mydb->setQuery($sql);
  		$cur = $mydb->loadResultList();

		foreach ($cur as $result) { 
  		echo '<tr>';
  		// echo '<td width="5%" align="center"></td>';
  		echo '<td>'. $result->ProductID.'</td>';
  		echo '<td>'. $result->Categories.'</td>';  
  		echo '<td>'. $result->ProductName.'</td>';
  		echo '<td>' . $result->Description.'</a></td>';
  		echo '<td>' . $result->sto.'</a></td>'; 
  		echo '<td>' . $result->sol.'</a></td>'; 
  		echo '<td>' . $result->exp.'</a></td>'; 
  		echo '<td>'. $result->rem.'</td>';  
			// echo '<td align="center" >    
	  //            <a title="View" href="index.php?view=view&id='.$result->ProductID.'"  class="btn btn-info btn-xs  ">
	  //            <span class="fa fa-info fw-fa"></span> View</a>
	  //             <a title="Edit" href="index.php?view=edit&id='.$result->ProductID.'"  class="btn btn-info btn-xs  ">
	  //            <span class="fa fa-edit fw-fa"></span> Edit</a>  
	  //            <a title="Remove" href="controller.php?action=delete&id='.$result->ProductID.'"  class="btn btn-danger btn-xs  ">
	  //            <span class="fa fa-trash-o fw-fa"></span> Remove</a> 
			// // 	 </td>';
			// echo '<td align="center" >     
	  //             <a title="Edit" href="index.php?view=edit&id='.$result->ProductID.'"  class="btn btn-info btn-xs  ">
	  //            <span class="fa fa-edit fw-fa"></span> Edit</a>  
	  //            <a title="Remove" href="controller.php?action=delete&id='.$result->ProductID.'"  class="btn btn-danger btn-xs  ">
	  //            <span class="fa fa-trash-o fw-fa"></span> Remove</a> 
			// 	 </td>';
  		echo '</tr>';
  	} 
  	?>
  </tbody>
	
</table>

 


 <div class="row no-print">
  <center><button type="button" class="btn btn-info pull-center" button onclick="myFunction()">Print Result</button></center>
</div>
  <script> 
  function myFunction(){


    window.print();
    
  }

  </script>  
  </section> 