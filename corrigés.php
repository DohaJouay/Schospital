<h1><?php echo $title="Corrigés des Exercices";?></h1>
<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				
				<th>Matière</th>
				<th>Titre</th>
				<th>Classe</th> 
				<th>Trimestre</th> 
				
				<th width="25%">Action</th>
			</thead>
			<tbody>
				<?php 
				@$IDNO = $_SESSION['StudentID'];
				$sql = "SELECT * FROM tblexercise2 WHERE  
				`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
				`StudentID`=( select StudentID from tblstudent where IDNO = '$IDNO') and
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
					
					echo '<tr>';
					
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Niveau.'</td>';
					
					echo '<td><a href="index.php?q=viewpdfff&id='.$result->CorrectionID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a>
					      </td>';	
					echo '</tr>'; 
				}
				?>
			</tbody>
		</table>
	</div>
</div>