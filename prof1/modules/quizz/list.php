<?php
	if(!isset($_SESSION['ProfID'])){
	redirect(web_root."prof1/index.php");
}
@$IDNO = $_SESSION['ProfID'];
?>
 
      <div class="module-head"> 
            <h1 class="page-header">Liste des quizz <a href="index.php?view=add" class="btn btn-primary">  <i class="fa fa-plus-circle fw-fa"></i> Nouveau</a></h1> 
       		 
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
											FROM  `tblquizz` where `ProfID` = '$IDNO' and `StudentID` = 0 ");
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
				  			$view = "index.php?view=playvideo&id=".$result->QuizzID;
				  		}else{
				  			$view = "index.php?view=viewpdf&id=".$result->QuizzID;

				  		}
				  	  
				  		echo '<td align="center" > <a title="Edit Details" href="index.php?view=edit&id='.$result->QuizzID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span>Modifier</a> 
				  					<a title="Change File" href="index.php?view=uploadfile&id='.$result->QuizzID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-upload fw-fa"></span>Fichier</a> 
				  					 <a title="View Files"  href="'.$view.'" class="btn btn-info btn-xs" ><span class="fa fa-info fw-fa"></span>Aperçu</a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result->QuizzID.'" class="btn btn-danger btn-xs" ><span class="fa fa-trash-o fw-fa"></span>Supprimer</a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>

				<div class="module-head"> 
            <h1 class="page-header">Liste des quizz à corriger </h1> 
       		 
       		</div> 
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="example" class="datatable-1 table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr> 
				  		 <th>Nom</th>
				  		<th>Titre</th> 
						<th>Classe</th> 
						<th>Trimestre</th> 
						<th>Type du fichier</th>
				  	 	<th>Note</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php    
				  		$mydb->setQuery("SELECT * 
											FROM  `tblquizz` where `ProfID` = '$IDNO' and `StudentID` != 0 ");
				  		$cur = $mydb->loadResultList();

						  $mydb->setQuery("SELECT* 
						  FROM  `tblstudent` where `IDNO` in (select StudentID from tblquizz where ProfID='$IDNO') ");
						$cur2 = $mydb->loadResultList();
					foreach($cur2 as $result2){
						
						foreach ($cur as $result) {
							
				  		
				  		//echo '<td>'. $result->LessonChapter.'</td>';
						if ($result2->IDNO == $result->StudentID){
						echo '<td>'. $result2->STUDUSERNAME.'</td>';
				  		echo '<td>'. $result->LessonTitle.'</td>';
						echo '<td>'. $result->Classe.'</td>'; 
						echo '<td>'. $result->Niveau.'</td>';
				  		echo '<td>'. $result->Category.'</td>';

						$view = "index.php?view=viewpdf&id=".$result->QuizzID;
				  	  
				  		echo '<td align="center" > <a title="Edit Details" href="index.php?view=note&id='.$result->QuizzID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span>Soumettre Note</a> 
						  <a title="View Files"  href="'.$view.'" class="btn btn-info btn-xs" ><span class="fa fa-info fw-fa"></span>Aperçu</a>	
				  					 </td>';
				  		echo '</tr>';}
				  	} 
				}
				  	?>
				  </tbody>
					
				</table> 
			</div>
				</form>
	 