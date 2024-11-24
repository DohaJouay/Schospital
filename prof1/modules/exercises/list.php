<?php
	if(!isset($_SESSION['ProfID'])){
	redirect(web_root."prof1/index.php");
}
@$IDNO = $_SESSION['ProfID'];
?>
 
      <div class="module-head"> 
            <h1 class="page-header">Liste des Exercices <a href="index.php?view=add" class="btn btn-primary">  <i class="fa fa-plus-circle fw-fa"></i> Nouveau</a></h1> 
       		 
       		</div> 
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="datatable-1 table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		 <th>Matière</th>
				  		<th>Titre</th> 
						<th>Classe</th> 
						<th>Trimestre</th> 
						<th>Type du fichier</th>
				  	 	<th width="30%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php    
				  		$mydb->setQuery("SELECT * 
											FROM  `tblexercise` where `ProfID` = '$IDNO' and `StudentID` = 0 ");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>'. $result->LessonChapter.'</td>';
				  		echo '<td>'. $result->LessonTitle.'</td>';
						echo '<td>'. $result->Classe.'</td>'; 
						echo '<td>'. $result->Niveau.'</td>';
				  		echo '<td>'. $result->Category.'</td>';
						

				  			$view = "index.php?view=viewpdf&id=".$result->ExerciseID;

				  		
				  	  
				  		echo '<td align="center" > 
				  					<a title="Change File" href="index.php?view=uploadfile&id='.$result->ExerciseID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-upload fw-fa"></span>Modifier le fichier</a> 
				  					 <a title="View Files"  href="'.$view.'" class="btn btn-info btn-xs" ><span class="fa fa-info fw-fa"></span>Aperçu</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->ExerciseID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span>Supprimer</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>

				<div class="module-head"> 
            <h1 class="page-header">Liste des Exercices remis par les élèves </h1> 
       		 
       		</div> 
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="datatable-1 table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		 <th>Matière</th>
				  		<th>Titre</th> 
						<th>Classe</th> 
						<th>Trimestre</th> 
						<th>Type du fichier</th>
				  	 	<th width="30%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php    
				  		$mydb->setQuery("SELECT * 
											FROM  `tblexercise` where `ProfID` = '$IDNO' and `StudentID` != 0 ");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>'. $result->LessonChapter.'</td>';
				  		echo '<td>'. $result->LessonTitle.'</td>';
						echo '<td>'. $result->Classe.'</td>'; 
						echo '<td>'. $result->Niveau.'</td>';
				  		echo '<td>'. $result->Category.'</td>';
						

				  		if ($result->Category=="Video") {
				  			# code...
				  			$view = "index.php?view=playvideo&id=".$result->ExerciseID;
				  		}else{
				  			$view = "index.php?view=viewpdf&id=".$result->ExerciseID;

				  		}
				  	  
				  		echo '<td align="center" >
						  <a title="View Files"  href="'.$view.'" class="btn btn-info btn-xs" ><span class="fa fa-info fw-fa"></span>Voir Document</a>
				  		  <a title="Change File" href="index.php?view=add2&id='.$result->ExerciseID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-upload fw-fa"></span>Déposer Correction</a> 
				  					 
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>

				<div class="module-head"> 
            <h1 class="page-header">Correction déposées  <i class="fa fa-plus-circle fw-fa"></i> </h1> 
       		 
       		</div> 
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="datatable-1 table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		 <th>Matière</th>
				  		<th>Titre</th> 
						<th>Classe</th> 
						<th>Trimestre</th> 
						<th>Type du fichier</th>
				  	 	<th width="30%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php    
				  		$mydb->setQuery("SELECT * 
											FROM  `tblexercise2` where `ProfID` = '$IDNO' and `StudentID` != 0 ");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td>'. $result->LessonChapter.'</td>';
				  		echo '<td>'. $result->LessonTitle.'</td>';
						echo '<td>'. $result->Classe.'</td>'; 
						echo '<td>'. $result->Niveau.'</td>';
				  		echo '<td>'. $result->Category.'</td>';
						

				  		if ($result->Category=="Video") {
				  			# code...
				  			$view = "index.php?view=playvideo&id=".$result->CorrectionID;
				  		}else{
				  			$view = "index.php?view=viewpdf&id=".$result->CorrectionID;

				  		}
						
				  		echo '<td align="center" >
						  <a title="View Files"  href="'.$view.'" class="btn btn-info btn-xs" ><span class="fa fa-info fw-fa"></span>Voir Document</a>
				  					 
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>