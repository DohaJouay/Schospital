<h1><?php echo $title;
@$IDNO = $_SESSION['StudentID']; ?></h1>
<div class="col-lg-6">
	<h3>PDF</h3>
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				
				<th>Matière</th>
				<th>Titre</th> 
				<th>Classe</th> 
				<th>Trimestre</th> 
				<th width="2%">Action</th>
			</thead>
			<tbody>
				<?php 
				
				$sql = "SELECT * FROM tbllesson WHERE Category='Docs' and 
				`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
				`Trimestre` = ( select Trimestre from tblstudent where IDNO = '$IDNO') and 
				ProfID in (select ProfID from tblprof where 
				`name` in (select ProfMaths from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfAnglais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfFrançais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfArabe from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfSciences from tblstudent where IDNO = '$IDNO') ) ";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Trimestre.'</td>';
					echo '<td><a href="index.php?q=viewpdf&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-lg-6">
	<h3>VIDEO</h3>
	<div class="table-responsive">
		<table id="example2" class="table table-bordered">
			<thead>
				
				<th>Matière</th>
				<th>Titre</th>
				<th>Classe</th>
				<th>Trimestre</th>
				<th width="2%">Action</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tbllesson WHERE Category='Video' and 
				`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
				`Trimestre` = ( select Trimestre from tblstudent where IDNO = '$IDNO') and 
				ProfID in (select ProfID from tblprof where 
				`name` in (select ProfMaths from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfAnglais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfFrançais from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfArabe from tblstudent where IDNO = '$IDNO') or
				`name` in (select ProfSciences from tblstudent where IDNO = '$IDNO') ) ";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>'; 
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Trimestre.'</td>';
					echo '<td><a href="index.php?q=playvideo&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-play"></i> Play Video</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>