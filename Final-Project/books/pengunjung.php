<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>books</title>
  <meta name="description" content="User interface untuk Project books">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<!--
php: 10
nodejs: 2
spring: 2

-->

<body>
  <!-- your content here... -->
  <div style="width: 600px">
    <canvas id="myChart"></canvas>
  </div>
  
  <script>
  
    axios.get('http://localhost:3100/')
    .then(function (response) {
      // handle success
      console.log(response);
    })
    .catch(function (error) {
      // handle error
      console.log(error);
    })
    .then(function () {
      // always executed
    });

    const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'];
    const data = {
      labels: labels,
      datasets: [{
      label: 'Data pengunjung yang membaca',
      data: [13, 50, 20, 11, 26, 35, 24],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        scales: {
          y: {
          beginAtZero: true
          }
        }
      },
    };
    
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
</body>
</html>