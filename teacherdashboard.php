<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <link href="stylesheet/teacherdashboard.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                        <span class="title">xGrade</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <span class="title">My Courses</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
                        <span class="title">My Students</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span> 
                    </a>
                </li><li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>


<!--main-->

<div class="main">
    <div class="topbar">
        <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <!-- search -->
    <div class="search">
        <label>
            <input type = "text" placeholder="Search Here">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>

    <!--user-->
    <div class="user">
        <img src="./img/Demba.png">
    </div>
    </div>

    <!--Cards-->
    <div class="formTitle"><strong>Activity Details</strong></div>
    <div class="assform">
    <form action="includes/teacheractivity.inc.php" method="POST">
        <div class="formLabel">
            
          <div class="formName">Instruction</div>
             <textarea type="text" id="instruction" placeholder="Type the instruction here. E.g. You are required to review one of your colleague's assignment." name="instruction" required></textarea> <br>
                
            
                <div class="formName">Course Name</div>
                   
                  <input type="text" id="courseName" placeholder="Enter the course name e.g. Abstract Algebra" name= "courseName" required>
                  
            

            
                  <div class="formName">Course Code</div>
             
            <input type="text" id="courseCode" placeholder="Enter the course title e.g. MTH 399" name= "courseCode" required> 
              
            
            <div class="startDate">
                <div class="formName">Start Peer Review </div>
                <table>
            <tr>
                <th><input type="date" id="startDate" name= "startDate" required></th>
                <th><input type="time" id="startTime" name= "startTime" required></th>
                 </table>
                </tr>
                 <div class="formName">End Peer Review </div>
                <table>
            <tr>
                <th><input type="date" id="endDate" placeholder="Enter the course name" name= "endDate" required></th>
                <th><input type="time" id="endTime" placeholder="Enter the course name" name= "endTime" required></th>
                 </table> <br>
            </tr>
            
            <div>
                <table>
            <tr>
                <td class="settingName">Upload attendance spreadsheet</th>
                <th><input type="file" id="myFile" name= "attendanceFile" required><label for="file" class="custom-file-upload"></label></th>
                
            </tr>
            </table>
            </div>
            <div>
                <table>
            <tr>
                <td class="settingName">Upload Grading Rubric</th>
                <th><input type="file" id="myRubric" name= "rubricFile" required><label for="file" class="custom-file-upload"></label></th>
                
            </tr>
            </table>
            </div>
                
            </div>
            
        </div>
        <div class="button">
        <input type="submit" id="submit" value="Submit Activity" name="submit" required></label></div>
    </form>  
    </div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<script>

    //menu toggle
    let toggle = document.querySelector('.toggle')
    let navigation = document.querySelector('.navigation')
    let main = document.querySelector('.main')

    toggle.onclick = function() {
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }

    //add hovered class in selected list item

    let list = document.querySelectorAll('.navigation li')
    function activeLink() {
        list.forEach((item) => 
        item.classList.remove("hovered"))
        this.classList.add("hovered")
    }
    list.forEach((item) =>
    item.addEventListener('mouseover', activeLink))
    
</script>
</body>
</html>
