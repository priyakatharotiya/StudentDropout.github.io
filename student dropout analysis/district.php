<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BaalSarthi</title>
        <link rel="stylesheet" href="css/style_dis.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300&display=swap');
            </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" ></script> -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <nav>
            <div class="nav-header">
                <div class="logo_name">BaalSarthi</div>
                <div >
                    <div class="dashboard"><i class="fa-solid fa-house"></i>Dashboard</div>
                    <div class="dashboard"><i class="fa-solid fa-user"></i>Login</div>
                </div>

                <div class="pages" >
                    <div class="dashboard">Add new Entry</div>
                    <div class="dashboard">Analysis</div>
                </div>

                
                
            </div>
            <div>

            </div>
        </nav>
        <div class="main-div pad">
            <div class="bar box-details flex">
                <div class="admin flex">
                    <img src="assets/admin-icon.png" alt="admin-icon" id="admin-icon">
                    <div class="details" style="font-family:'Ubuntu', sans-serif;">Ravinder</div>
                </div>
            </div>

            <div class="admin_details flex">
                <div class="admin-welcome box-details">
                    <h1>Ravinder</h1>
                    <br>
                    <h3>Clerk</h3>
                    <h2>Govt School</h2>
                    <h3>Total admissions:-<span></span></h3>
                    <div class="btn">
                        <button onclick="document.location='index2.php'">Add New Entry</button>
                    </div>
                </div>
                <div class="cont-1 box-details">
                    <div class="cont-1-details">
                        <p>Total Entries</p>
                        <div class="cont1-data">
                            <div id="total_no"></div>
                            <!-- <br><br> -->
                            <div id="confirmed_cases"></div>
                            <!-- <br><br> -->
                            <div id="non_confirmed_cases">Non Confirmed Cases : 0</div>

                        </div>
                        <div id="total_no"></div>
                    </div>

                </div>
                
            </div>  



            <!-- category wise charts -->
            <div class="admin_details flex"> 
                <div class="cont-1 box-details pad">
                    <p>Boys </p>
                    <div class="img1"><img src="images/boy_145867.png" height="120px" width="120px" style="float:right"></div>
                    <div class="total" style="font-size:20px;">
                        <h4>Total No :</h4>
                        <p id="total_boys"></p>      
                    </div>

                    <div class="total" style="font-size:20px;">
                        <h4>Percentage :</h4>
                        <p id="total_boys_per"></p>
                    </div>
                    
                </div>
 
                <div class="cont-1 box-details pad">
                        <p>Girls</p>
                        <div class="img1"><img src="images/girl_4329449.png" height="120px" width="120px" style="float:right"></div>
                        <div class="total" style="font-size:20px;">
                            <h4>Total No :</h4>
                            <p id="total_girls"></p>      
                        </div>
    
                        <div class="total" style="font-size:20px;">
                            <h4>Percentage :</h4>
                            <p id="total_girls_per"></p>
                        </div>
                        
                </div>

                <div class="cont-1 box-details pad">
                    <p style="text-align: center; font-size: 30px;">Category</p>
                    <div class="cat" id="gen">General: </div>
                    <div class="cat" id="obc">OBC: </div>
                    <div class="cat" id="sc">SC: </div>
                    <div class="cat" id="st">ST: </div>
                </div>
            </div>  
            

            <!-- pie chart -->

            <div class="admin_details flex">  
                <div class="cont-2 box-details pad">
                    PIE CHART
                      
                
                    <canvas id="pie_chart"></canvas>
                </div>         
            </div>
            
            <div class="admin_details flex">  
                <div class="cont-2 box-details pad">
                    BAR CHART
                      
                
                    <canvas id="bar_chart"></canvas>
                </div>         
            </div>
            
            <div class="filterbox">
                
                <div class="category">
                    <div>
                        <form>
                            <label for="Selectdesiredfilter">Select block:</label>
                            <select id="Selectdesiredfilter" name="category" style="margin-top: 20px;width:250px">
                                <option value="NULL">--Select Block--</option>
                                <option value="Block1">Block1</option>
                                <option value="Block2">Block2</option>
                                <!-- <option value="Block3">Block 3</option>
                                <option value="Block4">Block 4</option> -->
                            </select>
                            <br>
                        </form>
                    </div>
                    <div>
                        <form>
                            <label for="Selectdesiredfilter">Select school:</label>
                            <select id="Selectdesiredfilter" name="category" style="margin-top: 20px;width:250px">
                                <option value="NULL">--Select School--</option>
                                <option value="School1">School 1</option>
                                <option value="School2">School 2</option>
                                <option value="School3">School 3</option>
                                <option value="School4">School 4</option>
                                
            
                            </select>
                            <br>
                        </form>
                    </div>

                    
                    <div>
                        <form>
                            <label for="Selectdesiredfilter">Select Category:</label>
                            <select id="Selectdesiredfilter" name="category" style="margin-top: 20px;width:250px">
                                <option value="NULL">--Select Category--</option>
                                <option value="general">GENERAL</option>
                                <!-- <option value="ews">GEN-EWS</option> -->
                                <option value="obc">OBC</option>
                                <option value="sc">SC</option>
                                <option value="st">ST</option>
                                
            
                            </select>
                            <br>
                        </form>
                    </div>
                </div>

                


                <div class="category">
                    <form>
                        <label for="Selectdesiredfilter">Select gender:</label>
                        <select id="Selectdesiredfilter" name="category" style="margin-top: 20px;width:250px">
                            <option value="NULL">--Select Gender</option>
                            <option value="Boys">male</option>
                            <option value="Girls">female</option>
                        </select>
                        <br>
                    </form>
    
                    <form>
                        <label for="Selectdesiredfilter">Select class:</label>
                        <select id="Selectdesiredfilter" name="category" style="margin-top: 20px;width:250px">
                            <option value="NULL">--Select Age--</option>
                            <option value="Class1">under 6</option>
                            <option value="Class2">under 10</option>
                            <option value="Class3">under 15</option>
                            <option value="Class3">under 18</option>
                        </select>
                        <br>
                    </form>
                    
                </div>
                
                
            </div>

            <div id="filtered_result">
                <h2>The results based on your query is :</h2>
                    <h4 style="text-align: center;" id="result_filtered"></h4>
            </div>
        </div>

    </main>
    

    <script>
    

const fetchData = async ()=>{

const response = await fetch('/api/data');
const data = await response.json();

new Chart(document.getElementById('pie_chart'),{
            type:'pie',
            data :{
                labels:data.pieChartLabels,
                datasets:[{
                    backgroundColor:data.pieChartColors,
                    data:data.district1_pieChartData,
                }] // data.pieChartData
            },
            options:{
                title:{
                    display:true,
                    text:'pie chart for analysis',
                },
                responsive:true
            }
            
        });
        document.getElementById('total_no').textContent = data.district1_total;
        document.getElementById('total_boys').textContent = data.district1Boys_total;
        document.getElementById('total_girls').textContent = data.district1Girls_total;
        document.getElementById('gen').textContent = "General : "+data.district1_gen;
        document.getElementById('obc').textContent = "OBC : "+data.district1_obc;
        document.getElementById('sc').textContent = "SC : "+data.district1_sc;
        document.getElementById('st').textContent = "ST : "+data.district1_st;
        document.getElementById('confirmed_cases').textContent = "Confirmed Cases : "+ data.district1_total;
        document.getElementById('total_boys_per').textContent = (data.district1Boys_total/400);
        document.getElementById('total_girls_per').textContent = (data.district1Girls_total/400);
        document.getElementById('result_filtered').textContent = (data.total);
    }
 
fetchData();

    </script>
    <script>
        // Create a bar chart
        var labels = ['Poverty', 'Child Marriage', 'Lacks Girls Facilities','Bad Infrastructure','No Teachers','Bullying','LackOFInterest'];
        var dataset1Data = [400, 120, 340, 480 , 390,90, 700];
        var dataset2Data = [450, 180, 340 , 420 , 190,140,600];

        new Chart(document.getElementById('bar_chart'), {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Year 1',
                        data: dataset1Data,
                        backgroundColor: '#F4E869'
                    },
                    {
                        label: 'Year 2',
                        data: dataset2Data,
                        backgroundColor: '#3085C3'
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'Bar Chart for Analysis'
                },
                responsive: true
            }
        });
    </script>
    </script>
</body>
</html>
