<?php
		check_message(); 
		@$IDNO = $_SESSION['ProfID'];
		?> 
<style type="text/css">
	#example {
		white-space: nowrap;
	}
</style> 
      <div class="module-head"> 
            <h1 >Liste des élèves</h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="datatable-1 table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr>  
				  		  <th>Nom</th>
						  <th>Classe</th>
						  <th>Trimestre</th>
				  		  <th>Adresse</th> 
				  		<th>Contact#</th>  
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
						//$IDNO = $mydb->insert_id();
				  		$query = "SELECT * FROM `tblstudent` where `ProfMaths` IN ( SELECT `name` FROM `tblprof` where `ProfID` = '$IDNO' )
																or 	`ProfFrançais` IN ( SELECT `name` FROM `tblprof` where `ProfID`= '$IDNO')
																or 	`ProfAnglais` IN ( SELECT `name` FROM `tblprof` where `ProfID`= '$IDNO')	
																or 	`ProfArabe` IN ( SELECT `name` FROM `tblprof` where `ProfID`= '$IDNO')	
																or 	`ProfSciences` IN ( SELECT `name` FROM `tblprof` where `ProfID`= '$IDNO')
																	";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';  
				  		echo '<td>'. $result->FNAME.' ' . $result->LNAME .'</td>'; 
						echo '<td>'.$result->Classe. '</td>'; 
						echo '<td>'.$result->Trimestre. '</td>'; 
				  		echo '<td>'.$result->EMAILADD. '</td>'; 
				  		echo '<td>'. $result->PHONE.'</td>'; 

				  		 
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody> 
				</table> 
				</form> 