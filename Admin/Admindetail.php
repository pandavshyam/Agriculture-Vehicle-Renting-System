





<?php
	
	include 'dbCon.php';
	include'afterlognav.php';

	$UID=$_SESSION['A_name'];
	
	$sql="SELECT * FROM Admin WHERE A_Id='$UID'";
	
	$result=mysqli_query($conn, $sql);
?>                                                                                              


	 <div class="row">
	 	
	 	
	 	<div class="col-sm-2">
</div>
	 				
		<div class="col-sm-8">
	<div class="panel panel-primary">
      <div class="panel-heading"><h4 ><?php echo $_SESSION['Admin_name']; ?> Your Details</h4></div>
      <div class="panel-body">
			
 <table class="table">
	  <thead>
      <tr>
        <th>Your Id</th>
        <th>Full Name</th>
      
        
        <th>Contact No</th>
        <th>Email</th>
              </tr>
    </thead>



<?php
	while($row=mysqli_fetch_array($result)){
		
		    echo"<tbody>"; 
      		echo "<tr class='success'>";
        	echo"<td>".$row['A_Id']."</td>";
        	echo "<td>".$row['A_Name']."</td>";
			echo"<td>".$row['Contact_No']."</td>";
			echo"<td>".$row['E_mail']."</td>";
			//echo"<td>"."<a href=EditDetails.php?".$row['A_Id']; echo">EDIT</a></td>";
      		echo "</tr>";
			echo "</tbody>";
	}
	
		echo "</table>";


?>
</div>
</div>
</div>
</div>

<div class="row">
	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>
	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/>	<br/><br/>	<br/>
</div>




<div class="row" style="background-color: black; color: white; border-bottom-right-radius:15px; border-bottom-left-radius:15px;">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright Cargo &#124; Terms of Use&#124; Privacy Policy</p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>



