<h1><?php echo $title = "Documents Leçons";
@$IDNO = $_SESSION['StudentID']; ?></h1>
<div class="col-lg-6">
	<h3>PDF</h3>
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Chapter</th>
				<th>Title</th> 
				<th width="10%">Action</th>
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
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
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
				<th width="2%">#</th>
				<th>Decription</th>
				<th width="10%">Action</th>
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
					echo '<td></td>';
					echo '<td>'.$result->LessonTitle.'</td>'; 
					echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<h1><?php echo $title = "Documents Exercices";
@$IDNO = $_SESSION['StudentID']; ?></h1>
<div class="col-lg-6">
	<h3>PDF</h3>
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Chapter</th>
				<th>Title</th> 
				<th width="10%">Action</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tblexercise WHERE Category='Docs' and 
				`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
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
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
