<?php 
function doDelete(){
		 
    $IDNO = 	$_SESSION['StudentID'];
    $sql = "SELECT * from tblquizz where StudentID ='$IDNO' ";
    global $mydb;
    $mydb->setQuery($sql);
    $cur=$mydb->loadResultList();
    foreach($cur as $res){
    $quizz = New Quizz();

    $quizz->delete($res->QuizzID);
    }

    $sql = "SELECT * from tblexercise where StudentID ='$IDNO' ";
    $mydb->setQuery($sql);
    $cur=$mydb->loadResultList();
    foreach($cur as $res){
    $quizz = New Exercise();
    
    $quizz->delete($res->ExerciseID);
    }
    
    redirect('index.php');
 

}
    
?>

<h1><?php echo $title;?></h1>
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
				$sql = "SELECT * FROM tblquizz WHERE Category='Docs' and 
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
                $i=0;
				
				foreach ($cur as $result) {
					
					$matière=$result->LessonChapter;

					$sql = "SELECT * FROM tblquizz WHERE 
					`Classe` = ( select Classe from tblstudent where IDNO = '$IDNO') and 
					`StudentID`='$IDNO' and
					`Niveau` = ( select Trimestre from tblstudent where IDNO = '$IDNO') and 
					LessonChapter = '$matière' and Note != 100 ";

                    

					$mydb->setQuery($sql);
					$cur2 = $mydb->loadResultList();
                    
					foreach ($cur2 as $result2){
                        
					# code...
					if ($result->ProfID == $result2-> ProfID){
                        $i=$i+1;
					echo '<tr>';
					
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td>'.$result->Classe.'</td>';
					echo '<td>'.$result->Niveau.'</td>';
					echo '<td>'.$result2->Note.'</td>';
						
					echo '</tr>'; } 
                       
				}
            }
            $sql = "SELECT * from tblstudent where IDNO ='$IDNO'";
                $mydb->setQuery($sql);
                $disp=$mydb->loadResultList();

                foreach ($disp as $result) {
                    }
            if($i==0){echo $text = "Vous n'avez reçu aucune note d'examen du trimestre ".$result->Trimestre." du ".$result->Classe."";}

				?>
			</tbody>
		</table>
	</div>
</div>

<h1><?php echo $title2="Moyenne générale";?></h1>

<div class="col-lg-12">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				
				
				
				<th>Classe</th> 
				<th>Trimestre</th> 
				<th>Moyenne</th> 
                <th>Mention</th>
				
			</thead>
            
			<tbody>
				<?php 
                
                function upgradec($id){
                    global $mydb;
                    $sql = "SELECT * from tblstudent where IDNO='$id'";
                    $mydb->setQuery($sql);
                    $cur=$mydb->loadResultList();
                    foreach($cur as $result){
                    $classea = $result->Classe ;
                    }
                    $matchess=(int)filter_var($classea,FILTER_SANITIZE_NUMBER_INT)+1 ;
                    
                    if($matchess<=6){
                    $classea = "CE".$matchess."";
                    $sql = "UPDATE tblstudent set Classe ='$classea', Trimestre = '1' where IDNO ='$id'";
                    $mydb->setQuery($sql);
                    $mydb->executeQuery($sql);
                    echo $text="Félicitations, vous êtes passés au trimestre".$classea." !";}
                    else {echo $text = "Vous avez terminé votre parcours primaire, vous pouvez passer au collège. Félicitations.";}
                }
            
                function upgradet($id){
                    global $mydb;
                    $sql = "SELECT * from tblstudent where IDNO='$id'";
                    $mydb->setQuery($sql);
                    $cur=$mydb->loadResultList();
                    foreach($cur as $result){
                        $trimestrea = $result->Trimestre ;
                    }
                    if($trimestrea!=3){
                    $trimestrea = $trimestrea + 1 ;
                    $sql = "UPDATE tblstudent set Trimestre ='$trimestrea' where IDNO = '$id'";
                    $mydb->setQuery($sql);
                    $mydb->executeQuery($sql);
                    echo $text="Félicitations, vous êtes passés au trimestre".$trimestrea." !";}
                    
                    else { $trimestrea = 1;
                        upgradec($id);
                        
                    }
                }

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
					
					$note =  $result2->Note;
                    $classe = $result2->Classe;
                    $niveau = $result2->Niveau;
					
					$moyenne = $moyenne + $note;
                    $i=$i+1;

                    
				}
                if($i!=0){$moyenne = $moyenne/$i;}

                $sql = " SELECT * FROM tblquizz where Note != 100 and StudentID ='$IDNO' and 
                Classe = (SELECT Classe from tblstudent where IDNO ='$IDNO') and
                Niveau = (SELECT Trimestre from tblstudent where IDNO ='$IDNO')  ";

                $mydb->setQuery($sql);
                $disp=$mydb->loadResultList();
                $count=0;
                foreach ($disp as $result) {$count = $count + 1;
                }

                $sql = "SELECT * from tblstudent where IDNO ='$IDNO'";
                $mydb->setQuery($sql);
                $disp=$mydb->loadResultList();

                foreach ($disp as $result) {
                    $classe = $result->Classe;
                    $trimestre = $result->Trimestre;}

                if($count!=5){ echo $text ="Vous n'avez pas encore reçu toutes vos notes des examens du trimestre ".$trimestre." du ".$classe."";}
                else { 
                if($moyenne!=100){
                if($moyenne<10) { $mention = "Redoublant";
                doDelete();}
                else if ($moyenne<12 and $moyenne>=10) { $mention = "Passable";}
                else if ($moyenne<14 and $moyenne>=12) { $mention = "Assez bien";}
                else if ($moyenne<16 and $moyenne>=14) { $mention = "Bien";}
                else if ($moyenne>=16) { $mention = "Très bien";}
                
                echo '<td>'.$classe.'</td>';
                echo '<td>'.$trimestre.'</td>';
                echo '<td>'.$moyenne.'</td>';
                echo '<td>'.$mention.'</td>';
                 if($moyenne>=10){ 
                    upgradet($IDNO);
                    
                }

                }}
                
				?>
			</tbody>
		</table>
	</div>
</div>