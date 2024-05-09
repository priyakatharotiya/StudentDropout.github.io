<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaalSarthi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300&display=swap');
      </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <nav>
            <div class="nav-header">
                <div class="logo_name flex"><a href="index.php"><img src="images/logo.png" alt=""></a></div>
                <hr>
                    <div class="dashboard"><i class="fa-solid fa-house"></i>Dashboard</div>
                    <!-- <div class="dashboard"><i class="fa-solid fa-user"></i>Login</div> -->
                    <!-- <div class="dashboard"><i class="fa-solid fa-plus"></i>Add new Entry</div> -->
                    <div class="dashboard"><i class="fa-solid fa-chart-pie"></i>Analysis</div>
                    <div class="dashboard"><i class="fa-solid fa-arrow-right"></i>Total Entries</div>
                    <div class="dashboard"><i class="fa-solid fa-calendar-check"></i>Appointment</div>
                    <div class="dashboard"><i class="fa-solid fa-address-book"></i>Contact</div>
                </div>

                
                
            </div>
            <div>

            </div>
        </nav>
        <div class="main-div pad">
            <div class="bar box-details flex">
                <div class="admin flex">
                    <img src="assets/admin-icon.png" alt="admin-icon" id="admin-icon">
                    <div class="details">Ravinder</div>
                </div>
            </div>

            <!-- <div class="admin_details flex">
                <div class="admin-welcome box-details">
                    <h1>Welcome, User</h1>
                    <br>
                    <h3>Post</h3>
                </div>
                <div class="cont-1 box-details"></div>
                <div class="cont-2 box-details"></div>
            </div>  -->

            <form action="/index2" name="myForm" class="box-details" onsubmit="return validateForm()" method="post">
                <div class="form flex">
                    <div class="formdesign" id="name">
                        Name: <input type="text" name="sname" required><b><span class="formerror"> </span></b>
                    </div>

                    <div class="formdesign" id="f_name">
                        Father's Name: <input type="text" name="fname" required><b><span class="formerror"> </span></b>
                    </div>

                    <div class="formdesign" id="m_name">
                        Mother's Name: <input type="text" name="mname" required><b><span class="formerror"> </span></b>
                    </div>
                    <div class="formdesign" id="sname">
                        School Name: <input type="text" name="schname" required><b><span class="formerror"> </span></b>
                    </div>
                    <div class="formdesign" id="block">
                        Block: <input type="text" name="block" required><b><span class="formerror"> </span></b>
                    </div>
                    <div class="formdesign" id="district">
                        District: <input type="text" name="district" required><b><span class="formerror"> </span></b>
                    </div>
                    
                    
                    <div class="formdesign" id="age">
                        Age: <input type="number" name="fage" required><b><span class="formerror"> </span></b>
                    </div>
                    <div class="formdesign" id="rollno">
                        Roll No: <input type="number" name="rollno" required><b><span class="formerror"> </span></b>
                    </div>
                    
                    
                    <div class="formdesign" id="gender">
                        Gender:
                        <select id="select" required name="selectgender">
                            <option value="NULL">--Select Gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="formdesign" id="gender">
                        Class:
                        <select id="select" required name="selectclass">
                            <option value="NULL">--Select Class--</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    
                    

                    <div class="formdesign" id="phone">
                        Parent Mob No.: <input type="phone" name="fphone" required><b><span class="formerror"> </span></b>
                    </div>
            
            
                    <div class="formdesign" id="address">
                        Address: <textarea name="address" id="faddress" cols="20" rows="3" required></textarea>
                    </div>
            
                    
            
                    <div class="formdesign" id="poss_reaosn">
                        Possible Reason:
                        <select id="select" required name="selectreason">
                            <option value="NULL">--Select Reason--</option>
                            <option value="health_issues">Health Issues</option>
                            <option value="child marriage">Child Marriage</option>
                            <option value="bullying">Bullying</option>
                            <option value="lack of interest">Lack of Interest</option>
                            <option value="Poverty">Poverty</option>
                            <option value="Girl_child">Not Apt for Girls</option>
                            <option value="Reason">Other: <input type="other_reason" name="fother_reason" style="display: none;"></option>
                        </select>
                    </div>

                    <div class="formdesign" id="category">
                        Category:
                        <select id="select" required name="selectcategory">
                            <option value="NULL">--Select Category--</option>
                            <option value="General">General</option>
                            <option value="OBC">OBC</option>
                            <option value="SC">Schedule Caste</option>
                            <option value="ST">Schedule Tribe</option>
                        </select>
                    </div>
            
                </div>
                    <!-- <input type="submit"  value="Submit"> -->
                </form>
                <div class="flex">
                    <button class="but" type="submit">Submit</button>
                </div>

        </div>
    </main>
    
</body>
</html>
