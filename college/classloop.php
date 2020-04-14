<?

foreach($_SESSION['course_id'] as $course_id) 
                {
                    $sql2 = "INSERT INTO college_enrollments (student_id, course_id)
                    VALUES ('{$last_id}', '$course_id')";
                    
           
                    if (mysqli_query($conn, $sql2)) 
                    {
                      //echo 'COURSE ID: '. $course_id.'<br>';
                    } 
                    else 
                    {
                        echo "Error: " . $sql2. "<br>" . mysqli_error($conn);
                    }
                }

?>