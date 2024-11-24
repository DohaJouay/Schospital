

<h1><?php echo $title="Leçons d'Arabe";?></h1>
<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				
				<th>Titre</th>
				<th>Classe</th> 
				<th>Trimestre</th> 
				
				
			</thead>
			<tbody>
				<?php 
                global $mydb;
				@$IDNO = $_SESSION['StudentID'];
				$sql = "SELECT * FROM tbllesson WHERE 
				LessonChapter ='Arabe' and 
				ProfID in (select ProfID from tblprof where 
				`name` in (select ProfMaths from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfAnglais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfFrançais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfArabe from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfSciences from tblstudent where IDNO = '$IDNO') ) ";
                
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();

                $sql = "SELECT * from tblstudent where IDNO ='$IDNO'";
				$mydb->setQuery($sql);
				$cur2 = $mydb->loadResultList();
                foreach($cur2 as $result2){
				foreach ($cur as $result) {
					if($result->Classe < $result2->Classe){
					echo '<tr>';
					//echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Trimestre.'</td>';
					//echo '<td>'.$result2->Note.'</td>';
					echo '<td><a href="index.php?q=viewpdf&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a> 	
					      </td>';
					echo '</tr>'; }
                    else if ($result->Classe == $result2->Classe){
                        if ($result->Trimestre <= $result2->Trimestre){
                            echo '<tr>';
					//echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Trimestre.'</td>';
					//echo '<td>'.$result2->Note.'</td>';
					echo '<td><a href="index.php?q=viewpdf&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a> 	
					      </td>';
					echo '</tr>';
                        }
                    }
                    }
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<h1><?php echo $title="Exercices d'Arabe";?></h1>
<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				
				<th>Titre</th>
				<th>Classe</th> 
				<th>Trimestre</th> 
				
				
			</thead>
			<tbody>
				<?php 
                global $mydb;
				@$IDNO = $_SESSION['StudentID'];
				$sql = "SELECT * FROM tblexercise WHERE 
				LessonChapter ='Arabe' and StudentID = 0 and
				ProfID in (select ProfID from tblprof where 
				`name` in (select ProfMaths from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfAnglais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfFrançais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfArabe from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfSciences from tblstudent where IDNO = '$IDNO') ) ";
                
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();

                $sql = "SELECT * from tblstudent where IDNO ='$IDNO'";
				$mydb->setQuery($sql);
				$cur2 = $mydb->loadResultList();
                foreach($cur2 as $result2){
				foreach ($cur as $result) {
					if($result->Classe < $result2->Classe){
					echo '<tr>';
					//echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Niveau.'</td>';
					//echo '<td>'.$result2->Note.'</td>';
					echo '<td><a href="index.php?q=viewpdfff&id='.$result->ExerciseID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a> 	
					      </td>';
					echo '</tr>'; }
                    else if ($result->Classe == $result2->Classe){
                        if ($result->Niveau <= $result2->Trimestre){
                            echo '<tr>';
					//echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Niveau.'</td>';
					//echo '<td>'.$result2->Note.'</td>';
					echo '<td><a href="index.php?q=viewpdfff&id='.$result->ExerciseID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a> 	
					      </td>';
					echo '</tr>';
                        }
                    }
                    }
				}
				?>
			</tbody>
		</table>
	</div>
</div>