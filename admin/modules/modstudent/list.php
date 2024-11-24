<?php
		check_message(); 
		?> 
<style type="text/css">
	#example {
		white-space: nowrap;
	}
</style> 
      <div class="module-head"> 
            <h1 >Liste des élèves <a href="index.php?view=add" class="btn btn-primary">Ajouter un élève</a></h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example"  class="datatable-1 table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr>  
						<th>Name</th>
						<th>Address</th> 
				  		<th>Contact</th>  
						<th>Classe</th>  
						<th>Trimestre</th> 
						  
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblstudent`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';  
				  		echo '<td>'. $result->FNAME.' ' . $result->LNAME .'</td>'; 
				  		echo '<td>'.$result->EMAILADD. '</td>'; 
				  		echo '<td>'. $result->PHONE.'</td>'; 
						echo '<td>'. $result->Classe.'</td>';
						echo '<td>'. $result->Trimestre.'</td>';
							

				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody> 
				</table> 
				</form> 