<?php require('db_connnection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Courses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>

</head>
<body>
    <div class="containor">
        <header>
                <div class="navigation">
                    <nav>
                        <ul>
                            <li style="float:left;"><h1>IT Department</h1></li>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="courses.php">Courses</a></li>
                            <li><a href="addCourse.html">Add Course</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a id="msg"></a></li>
                        </ul>
                    </nav>
                </div>
        </header>

        <article>
            <div class="content">
                <h2>Course</h2>
                <p>
                    <table border="1" style="width: 98%;">
                        <tr style="background-color:gray; ">
                            <th>ID</th>
                            <th>Course Name</th>
                            <th>Course ID</th>
                            <th>Level</th>
                            <th>Edit course</th>
                            <th>Delete course</th>
                        </tr>
                    <?php
                        $result = mysqli_query($con,"SELECT * FROM itdepartment_course");
                        if (!$result) {
                            echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
                            exit;
                        }

                        if (mysqli_num_rows($result) == 0) {
                            echo "No rows found, nothing to print so am exiting";
                            exit;
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row["ID"];
                            $field2name = $row["Course_name"];
                            $field3name = $row["Course_ID"];
                            $field4name = $row["Level"];
                            echo "<tr> 
                                    <td>".$id."</td>
                                    <td>".$field2name."</td> 
                                    <td>".$field3name."</td> 
                                    <td>".$field4name."</td>";
                            echo "<td> <a href ='edit.php?id=$id'>Edit</a>";
				            echo "<td> <a href ='delete.php?id=$id'>Delete</a>";
                            echo "</tr>";
                            }
                        


                    echo "</table>";
                    ?>
                </p>
            </div>
        </article>

        <footer>
            <p class="copyright">
                &copy; copyright2018
            </p>
        </footer>
    </div>
</body>
</html>