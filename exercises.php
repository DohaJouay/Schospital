<h1><?php echo $title="Exercices";?></h1>
<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="8.5%">#</th>
				<th>Matière</th>
				<th>Titre</th>
				<th>Classe</th> 
				<th>Trimestre</th> 
				
				<th width="25%">Action</th>
			</thead>
			<tbody>
				<?php 
				@$IDNO = $_SESSION['StudentID'];
				$sql = "SELECT * FROM tblexercise WHERE Category='Docs' and 
				`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
				`StudentID`=0 and
				`Niveau` = ( select Trimestre from tblstudent where IDNO = '$IDNO') and 
				ProfID in (select ProfID from tblprof where 
				`name` in (select ProfMaths from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfAnglais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfFrançais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfArabe from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfSciences from tblstudent where IDNO = '$IDNO') ) ";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();

				
				foreach ($cur as $result) {
					$matière=$result->LessonChapter;
					$sql = "SELECT * FROM tblexercise WHERE 
					`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
					`StudentID`='$IDNO' and
					`Niveau` = ( select Trimestre from tblstudent where IDNO = '$IDNO') and 
					LessonChapter = '$matière' ";

					$mydb->setQuery($sql);
					$cur2 = $mydb->loadSingleResult();
					$var = "Remis.";
					$var2= "Pas remis.";
					echo '<tr>';
					if (is_null($cur2)){echo '<td>'.$var2.'</td>';}
					else {echo '<td>'.$var.'</td>';}
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Niveau.'</td>';
					//echo '<td>'.$result2->Note.'</td>';
					echo '<td><a href="index.php?q=viewpdfff&id='.$result->ExerciseID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a>
					      <a title="Upload File" href="index.php?q=uploadfilesb&id='.$result->ExerciseID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-upload fw-fa"></span>Déposer Travail</a> 	
					      </td>';	
					echo '</tr>'; 
				}
				?>
			</tbody>
		</table>
	</div>
</div>