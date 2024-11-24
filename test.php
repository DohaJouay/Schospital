<h1><?php echo $title2="Moyenne générale";?></h1>

<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				
				<th>Matière</th>
				<th>Titre</th>
				<th>Classe</th> 
				<th>Trimestre</th> 
				<th>Note</th> 
				
			</thead>
            
			<tbody>
				<?php 
                
				@$IDNO = $_SESSION['StudentID'];

                $moyenne =0;
				$i =0;
				
					
					

					$sql = "SELECT * FROM tblquizz WHERE 
					`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
					`StudentID`='$IDNO' and
					`Niveau` = ( select Trimestre from tblstudent where IDNO = '$IDNO') 
					 ";

                    

					$mydb->setQuery($sql);
					$cur2 = $mydb->loadResultList();
                    
					foreach ($cur2 as $result2){
                        
					# code...
					
					echo '<tr>';
					$note =  $result2->Note;
                    
					echo '<td>'.$result2->LessonChapter.'</td>';
					echo '<td>'.$result2->LessonTitle.'</td>';
					echo '<td>'.$result2->Classe.'</td>';
					echo '<td>'.$result2->Niveau.'</td>';
					echo '<td>'.$result2->Note.'</td>';
					$moyenne = $moyenne + $note;
                    $i=$i+1;
                    echo $moyenne;	
					echo '</tr>'; 
                    
				}
                $moyenne = $moyenne/$i;
                echo $moyenne ;
                
                
				?>
			</tbody>
		</table>
	</div>
</div>