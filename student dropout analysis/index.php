<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaalSarthi</title>
    
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Custom CSS styles for the carousel */
        /* Navbar Styling */
.navbar {
    background-color: #007BFF;
}

.navbar-dark .navbar-nav .nav-lin {
    color: #007BFF;
}

        .carousel-item {
            height: 350px; /* Adjust the height as needed */
        }
        .carousel-item img{
            
            width: 100%;
        }
        /* Card Styling */
.card {
    border: none;
    background-color: #418fe3b0;
    height: 270px;
    transition: transform 0.2s;
    align-items: center;
}

.card:hover {
    transform: scale(1.02);
}

.card-title {
    color: #333;
}

.card-text {
    color: #666;
}

.btn-primary {
    background-color: #007BFF;
    border-color: #007BFF;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}


        .baal{
            color:black;
            font-weight: 600;
        }
        .Sarathi{
            color:black;
            font-weight: 600;
        }
        .container mt-5 h3{
            padding: auto;
           
        }
        .heading{
            display: flex;
            justify-content: center;
        }
        .myCarousel img{
            width: 100%;
            height:300px;
        }
        .heading h3{
           
            text-transform: capitalize;
            font-size: 35px;
        }
        .heading{
            padding-top:0px;
            padding-bottom: 50px;
        }
        .page2{
    height: 100vh;
    width: 100%;
    z-index: 98;
    position: absolute;
}
#scroller h4:hover{
    color: #292828;
    -webkit-text-stroke: 2px #292828;
  }
  #page2 {
    min-height: 20vh;
    width: 100%;
    z-index: 10;
  }
  
  #scroller {
    /* background-color: red; */
    white-space: nowrap;
    overflow-x:hidden;
    overflow-y: hidden;
    position: relative;
    z-index: 10;
  }
  #scroller::-webkit-scrollbar {
    display: none;
  }
  .scroller-in {
    display: inline-block;
    white-space: nowrap;
    animation-name: scroll;
    animation-duration: 40s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
  }
  
  #scroller h4 {
    display: inline-block;
    font-size: 100px;
    font-weight: 800;
    
    margin-right: 20px;
    transition: all linear 0.3s;
    color: #000;
    -webkit-text-stroke: 2px #000000;
  }


@keyframes scroll {
    from{
        transform: translateX(0);
    }
    to{
        transform: translateX(-100%);
    }
    
}
hr{
    border:1px solid black;
    width:80%;
    margin-top: 5%;
}
.navbar-brand img{
  height: 40px;
}
.max{
    display:flex;
    justify-content: space-between;
    margin-inline:100px;
    margin-block:30px;
}
.max1{
    background-color:#ffffff;
    width:32%;
    box-shadow: rgba(161, 172, 184, 0.15) 0px 0px 6px 4px;
    border-radius:5px;
    margin-inline:20px;
    height: 120px;
}

/* Footer styles */
footer {
  background-color:  #007BFF;
  padding: 20px;
  color: #fff;
  text-align: center;
  margin-top: 50px;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.footer-content p {
  font-size: 14px;
}

.social-links {
  list-style: none;
  display: flex;
}

.social-links li {
  margin-right: 10px;
}

.social-links a {
  color: #fff;
  font-size: 20px;
  text-decoration: none;
  transition: color 0.3s ease;
}

.social-links a:hover {
  color: #ff8c00;
}

.admin_details{
    margin-block: 30px;
    margin-left:9%;
    justify-content: space-between;
}
.cont-2 {
    width: 50%;
    height: 350px;
    background-color: #ffffff;
}
.box-details {
    box-shadow: rgba(161, 172, 184, 0.15) 0px 0px 6px 4px;
    border-radius: 6px;
}
.max1 h4{
    margin-top: 10px;
}
       
        
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nana" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nana" href="login.php" >Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nana" href="district.php">Districts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nana" href="#" >Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/1.jpg" alt="Slide 1">
            <div class="carousel-caption">
             
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/2.jpg" alt="Slide 2">
            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="carousel-item">
            <img src="images/3.png" alt="Slide 3">
            <div class="carousel-caption">
            
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div id="page2">
            <div id="scroller">
              <div class="scroller-in">
                <h4>EDUCATION</h4>
                <h4>EMPOWERMENT</h4>
                <h4>YOUTH</h4>
                <h4>MENTORSHIP</h4>
                <h4>SCHOLARSHIP</h4>
              </div>
              <div class="scroller-in">
                <h4>EDUCATION</h4>
                <h4>EMPOWERMENT</h4>
                <h4>YOUTH</h4>
                <h4>MENTORSHIP</h4>
                <h4>SCHOLARSHIP</h4>
              </div>
            </div>
        </div>
<div class="container mt-5">
    <div class="heading"><h3>GOVERNMENT SCHEMES</h3></div>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Sarva Shiksha Abhyan</h5>
                    <p class="card-text">Sarva Shiksha Abhiyan (SSA) is an Indian government program aimed at universalizing elementary education in a time-bound manner, as mandated by the 86th Amendment to the Constitution of India.</p>
                    <a href="https://en.wikipedia.org/wiki/Sarva_Shiksha_Abhiyan" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">Beti Bachao Beti Padhao</h5>
                    <p class="card-text">The Beti Bachao, Beti Padhao (BBBP) scheme was launched by the Indian government in 2015 to address concerns of gender discrimination and women empowerment in the country.</p>
                    <a href="https://en.wikipedia.org/wiki/Beti_Bachao_Beti_Padhao" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card">
                
                <div class="card-body">
                    <h5 class="card-title">SHARDA -School Har Din Aayen </h5>
                    <p class="card-text">Under the Right of Children to Free and Compulsory Education Act-2009, all boys and girls in the age group of 06-14 have the right to get free elementary education.</p>
                    <a href="https://basiceducation.up.gov.in/en/page/sharda-program" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>



<hr>
<div class="heading" style="margin-top: 30px;"><h3>MAXIMUM DROPOUTS</h3></div>

<div class="max">
    <div class="max1">
        <h4 style="text-align: center;">DISTRICT</h4>
    </div>

    <div class="max1">
        <h4 style="text-align: center;">SCHOOL</h4>
    </div>

    <div class="max1">
        <h4 style="text-align: center;">BLOCK</h4>
    </div>

</div>

<div class="max">
    <div class="max1">
        <h4 style="text-align: center;">REASON</h4>
    </div>
    <div class="max1">
        <h4 style="text-align: center;">AGE-GROUP</h4>
    </div>
    <div class="max1">
        <h4 style="text-align: center;">GENDER</h4>
    </div>
</div>

<hr>

<div class="ansh">
    <div class="admin_details">  
        <div class="cont-2 box-details pad">
            BAR CHART
            <canvas id="bar_chart"></canvas>
        </div>  
    </div>
    
    <div class="admin_details">  
        <div class="cont-2 box-details pad">
            AREA  CHART
            <canvas id="myMultipleSeriesAreaChart"></canvas>
    
        </div>  
    </div>
</div>

<footer>
    <div class="footer-content">
        <p>&copy; 2023 BaalSarthi Website. All rights reserved.</p>
        <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a>
              <i class="fab fa-instagram"></i></a>
            </ul>
        </div>
    </footer>
    <script>
        // Sample data for the chart
const data = {
  labels: ['January', 'February', 'March', 'April', 'May'],
  datasets: [
    {
      label: 'Series 1',
      data: [10, 20, 30, 40, 50],
      borderColor: 'rgba(255, 99, 132, 1)',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      fill: true, // Fill the area beneath the line
    },
    {
      label: 'Series 2',
      data: [5, 15, 25, 35, 45],
      borderColor: 'rgba(54, 162, 235, 1)',
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      fill: true, // Fill the area beneath the line
    },
    {
      label: 'Series 3',
      data: [15, 10, 25, 20, 30],
      borderColor: 'rgba(255, 206, 86, 1)',
      backgroundColor: 'rgba(255, 206, 86, 0.2)',
      fill: true, // Fill the area beneath the line
    },
  ],
};

// Configuration options for the chart
const options = {
  scales: {
    x: {
      beginAtZero: true,
    },
    y: {
      beginAtZero: true,
    },
  },
};

// Create the chart
const ctx = document.getElementById('myMultipleSeriesAreaChart').getContext('2d');
const myChart = new Chart(ctx, {
  type: 'line', // Use 'line' as the base type for the chart
  data: data,
  options: options,
});

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
<!-- Add Bootstrap JS and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Scroller script-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script></script>
        
</body>
</html>