<html>
<?php
$param = $_GET['idno'];
?>
<head>
	<?php
	 include 'includes/dbconnection.php';
     include 'includes/headerelements.php';
     include 'includes/header.php'; 
     ?>
</head>



  <div class="col-md-6">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title"> Added Subjects</h3>
            
          </div>
          <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#t_draggable2" placeholder="Filter Subjects" />
          </div>
          
    <table class="tables_ui table table-hover" id="t_draggable2">
      <tbody class="t_sortable">

        <tr>
          <th>Class Code</th>
          <th>Course Number</th>
          <th>Descriptive Title</th>
          <th>Time</th>
          <th>Days</th>
      	  <th>Room</th>
          <th>Units</th>

        </tr>
        <?php
        $query = "SELECT count(classcode), classcode, courseno, description, time, days,room, units from class natural join course where idno = $param"; 
        $rs = $conn->query($query);
							while($resultRow = $rs->fetch_assoc()) {

                if ($resultRow['count'] == 0){
                  echo '<p> Ypu have not enrolled yet, please Pre enroll before viewing your schedule </p>';
                }else
							echo '<tr>
									<td>'. $resultRow['classcode'] .'</td>
									<td>'. $resultRow['courseno'] .'</td>
									<td>'. $resultRow['description'] .'</td>
									<td>'. $resultRow['time'] .'</td>
									<td>'. $resultRow['days'] .'</td>
									<td>'. $resultRow['room'] .'</td>
									<td>'. $resultRow['units'] .'</td>'."
									
								</tr>";
							}
						echo 
						'
						</tbody>
						</table>';
		?>   
        ?>

      </tbody>
    </table>

     

</div>