<?php
require_once("../../../include/initialize.php");
	  if (!isset($_SESSION['USERID'])){
       redirect(web_root."index.php");
     }

?> 
      <div class="module-head"> 
            <h1 class="page-header">Liste des administrateurs <a href="index.php?view=add" class="btn btn-primary">Ajouter un administrateur</a></h1> 
       		 
       		</div> 
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="datatable-1 table table-hover table-bordered" cellspacing="0" style="font-size:12px" > 
				  <thead>
				  	<tr> 
				  		<th>Nom</th>
				  		<th>Nom d'utilisateur</th>
				  		<th width="18%">Action</th> 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
				  		$mydb->setQuery("SELECT * 
											FROM  `tblusers`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>' . $result->NAME.'</a></td>';
				  		echo '<td>'. $result->UEMAIL.'</td>';
				  		// echo '<td>'. $result->TYPE.'</td>';
				  		echo '<td > <a title="Edit" href="index.php?view=edit&id='.$result->USERID.'" class="btn btn-primary btn-xs" >Modifier</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->USERID.'" class="btn btn-danger btn-xs" >Supprimer</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
				</form> 