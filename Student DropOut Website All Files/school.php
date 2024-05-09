<!DOCTYPE html>
<html lang="en">
<head>
    <title>BaalSarthi</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300&display=swap');
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <nav>
            <div class="nav-header">
                <div class="logo_name flex"> <a href="index.php">BaalSarthi</a></div>
                <hr>
                <div>
                    <div class="dashboard"><i class="fa-solid fa-house"></i>Dashboard</div>
                    <div class="dashboard"><i class="fa-solid fa-plus"></i>Add new Entry</div>
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
                    <div class="details" style="font-family: 'Ubuntu', sans-serif;"><?php echo $adminName; ?></div>
                </div>
            </div>
            <div class="admin_details flex">
                <div class="admin-welcome box-details">
                    <div id="sch-admin" style="font-size: 30px; font-family: 'poppins';">School Admin</div>
                    <br>
                    <h3 id="designation"><?php echo $designation; ?></h3>
                    <h2 id="sch-name"><?php echo $schoolName; ?></h2>
                    <h3>Total admissions : 100<span></span></h3>
                    <div class="btn">
                        <button onclick="document.location='index2.php'">Add New Entry</button>
                    </div>
                </div>
                <div class="cont-1 box-details">
                    <p>Total Entries</p>
                    <div class="cont1-data">
                        <div id="total_no"><?php echo $totalEntries; ?></div>
                        <div id="confirmed_cases"><?php echo $confirmedCases; ?></div>
                        <div id="non_confirmed_cases">Non Confirmed Cases : 0</div>
                    </div>
                </div>
            </div>
        </main>
        <script>
            // PHP code for data fetching should be placed here
            const data = <?php echo json_encode($chartData); ?>;
            
            <script>
        // Get the canvas element
    const ctx = document.getElementById('myDoughnutChart').getContext('2d');
    // Define your data
    const data = {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            data: [10, 20, 30], // Example data values
            backgroundColor: ['#E55604', '#FF3FA4', '#FFC436'], // Colors for the segments
        }]
    };

    // Configure the chart
    const config = {
        type: 'doughnut',
        data: data,
    };

    // Create and render the chart
    const myDoughnutChart = new Chart(ctx, config);
    </script>

    <!-- 2nd doughtnut code script -->
    <script>
        // Get the canvas element
        const ctx2 = document.getElementById('myDoughnutChart2').getContext('2d');

        // Define your data
        const data2 = {
            labels: ['Red', 'Blue', 'Yellow'],
            datasets: [{
                data: [20, 50, 50], // Example data values
                backgroundColor: ['red', 'blue', 'yellow'], // Colors for the segments
            }]
        };

        // Configure the chart
        const config2 = {
            type: 'doughnut',
            data: data2,
        };

        // Create and render the chart
        const myDoughnutChart2 = new Chart(ctx2, config2);

    </script>
    
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
                            data:data.pieChartData,
                        }] // data.pieChartData
                    },
                    options:{
                        title:{
                            // display:true,
                            text:'pie chart for analysis',
                        },
                        responsive:true
                    }
                    
                });
                document.getElementById('total_no').textContent = data.total;
                document.getElementById('total_boys').textContent = data.boys;
                document.getElementById('total_girls').textContent = data.girls;
                // document.getElementById('sch-admin').textContent = data.name;
                document.getElementById('sch-name').textContent = data.schname;
                document.getElementsByClassName('details').innerHTML = data.schname + " Admin";
                document.getElementById('percent_girls').textContent = data.percent_girls;
                document.getElementById('percent_boys').textContent = data.percent_boys;
                document.getElementById('gen').textContent = "General : "+data.count_General;
                document.getElementById('obc').textContent = "OBC : "+data.count_OBC;
                document.getElementById('sc').textContent = "SC : "+data.count_SC;
                document.getElementById('st').textContent = "ST : "+data.count_ST;
                document.getElementById('confirmed_cases').textContent = "Confirmed Cases : "+data.total;
                // documment.getElementByClass('details').textContent = data.admin_school;
        
                // document.getElementById('designation').textContent = data.total;
                // document.getElementById('sch-name').textContent = data.total;
        
        // Get a reference to the table body
        const tableBody = document.querySelector("#dynamic-table tbody");
          // Use a for loop to iterate through data.student_details
          for (let i = 0; i < data.student_details.length; i++) {
            const item = data.student_details[i];
            const row = document.createElement("tr");
            row.innerHTML = `
              <td>${item.sname}</td>
              <td>${item.fname}</td>
              <td>${item.address}</td>
              <td>${item.fage}</td>
              <td>${item.selectgender}</td>
              <td>${item.selectreason}</td>
              <td>${"----"}</td>
              <td>
              <button class="edit-button" data-index="${i}">Edit</button></td>
              <td>
              <button class="delete-button" data-index="${i}">Delete</button>
            </td>
            `;
            tableBody.appendChild(row);
          }
          const deleteButtons = document.querySelectorAll(".delete-button");
          deleteButtons.forEach((button) => {
            button.addEventListener("click", async (event) => {
              const id = event.target.getAttribute("data-id");
        
            //   try {
            //     const response = await fetch(`/api/delete/${id}`, {
            //       method: "DELETE",
            //       // Add any necessary headers or authentication tokens
            //     });
        
                // if (response.ok) {
                  // Deletion was successful, remove the row from the table
                  tableBody.removeChild(event.target.closest("tr"));
            //     } else {
            //       // Handle the case where deletion failed (e.g., display an error message)
            //       console.error("Deletion failed.");
            //     }
            //   } catch (error) {
            //     // Handle network errors or other exceptions
            //     console.error("Error:", error);
            //   }
            });
          });
        
        
        
            }
         
        fetchData();
        
        
            </script>
            <script>
                // Create a bar chart
                var labels = ['Label 1', 'Label 2', 'Label 3'];
                var dataset1Data = [400, 500, 340];
                var dataset2Data = [450, 560, 340];
        
                new Chart(document.getElementById('bar_chart'), {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Dataset 1',
                                data: dataset1Data,
                                backgroundColor: '#F4E869'
                            },
                            {
                                label: 'Dataset 2',
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
        </script>
    </body>
</html>
