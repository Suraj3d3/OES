<?php

$tableName = $_GET['examCode'];
            $conn  = mysqli_connect("localhost","kcc","exam@KCC");
            mysqli_select_db($conn,"OES");
            $qu = "select t.* , e.* from $tableName t , examDetail e where t.examCode=e.examCode";
            $r = mysqli_query($conn,$qu);
            $n = mysqli_num_rows($r);
            echo "<table>";
            echo " 
                <tr>
                    <th> Roll number </th>
                    <th> Exam Code </th>
                    <th> Paper Code </th>
                    <th> Exam Date </th>
                    <th> num of ques  </th>
                    <th> Correct ans </th>
                    <th> percentage </th>
                </tr> ";

            for($i=0;$i<$n;$i++)
            {
                $row = mysqli_fetch_array($r);
                   $roll = $row['roll'];
                   $examCode = $row['examCode'];
                   $paperCode = $row['paperCode'];
                   $noq = $row['noq'];
                   $examDate = $row['examDate'];
                   $per = $row['percentage'];
                   $finalScore = $row['finalResult'];
                
                  

                  echo " 
                      <tr>
                            <td> $roll </td>
                            <td> $examCode </td>
                            <td> $paperCode </td>
                            <td> $examDate </td>
                            <td> $noq </td>
                            <td> $finalScore </td>
                            <td> $per </td>
                      </tr> ";
                  
                 
            }
            echo "</table>";


           
       ?>