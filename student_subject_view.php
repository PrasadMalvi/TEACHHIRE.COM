<?php include('metatags.php');   ?>
<?php include('header.php');   ?>
<?php include('sidebar.php');   ?>

            <!-- Page Content -->
            <div id="page-content">
            
                           <!-- With Borders Style -->
                 <h4 class="page-header">Assign Subject 2 Semester
				<br/>
				<div align="right"><a href="subject_to_sem.php">Add New</a></div>
				</h4>


                <!-- With Borders Section -->
                <div class="block-section">
                    <table class="table table-bordered" id="sample_1">
                        <thead>
                            <tr>
                                
								    <th>Slno</th>
									
									<th>Subject</th>
									<th>Student</th>
										 

                                <th class="span1 text-center"><i class="icon-bolt"></i></th>
                            </tr>
                        </thead>
						
						
						
						 <tbody>
						 <?php
  $slno=0;
  include('dbconnect.php');
  $sql="select sd.subject_name,si.student_name,si.usn,ss.ss_id from student_subject ss,subject_details sd,student_details si where ss.subject_id=sd.subject_id and ss.student_id=si.student_id";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  $slno=$slno+1;
  ?>
						
						
                            <tr>
							
							
	
									<td><?php echo $slno;  ?></td>
    
    <td><?php echo $row['subject_name'];  ?></td>
    <td><?php echo $row['student_name'];  ?>.<?php echo $row['usn'];  ?></td>
  
							  
                                <td class="span1 text-center">
                                    <div class="btn-group">
                                       <!-- <a href="faculty_photo_edit.php?faculty_id=<?php echo $row['faculty_id'];?>" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil"></i></a>-->
                                        <a href="subject_to_sem_delete.php?subject_to_student_id=<?php echo $row['ss_id'];?>" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                                    </div>
                                </td>
                            </tr>

                        
						
						<?php
						}
						?>
						</tbody>
                    </table>
                </div>
                <!-- END With Borders Section -->
                <!-- END With Borders Style -->
            </div>
            <!-- END Page Content -->
<?php include('footer.php');   ?>










