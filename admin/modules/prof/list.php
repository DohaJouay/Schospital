<?php
	 // if (!isset($_SESSION['TYPE'])=='Administrator'){
  //     redirect(web_root."index.php");
  //    }

?> 
      <div class="module-head"> 
            <h1 class="page-header">Liste des professeurs <a href="index.php?view=add" class="btn btn-primary">Ajouter un professeur</a></h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="datatable-1 table table-hover table-bordered" cellspacing="0" style="font-size:12px" > 
				  <thead>
				  	<tr> 
				  		<th> Nom</th>
				  		
						<th>Matière</th>
						<th>Adresse Mail</th>
				  		
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * 
											FROM  `tblprof`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->name.'</a></td>';
				  		echo '<td>'. $result->Matière.'</td>';
						echo '<td>'. $result->email.'</td>';
						
				  		// echo '<td>'. $result->TYPE.'</td>';
				  		/*echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->ProfID.'" class="btn btn-primary btn-xs" >Edit</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->ProfID.'" class="btn btn-danger btn-xs" >Delete</a>
				  					 </td>';*/
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
				</form> 