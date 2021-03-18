fetch('http://localhost/ishlah-app/dashboard/chartJS')
.then(response => response.json())
.then(response => {
    const data = response.jml_pendaftar;
    let total = data.map(elem => {
        return elem.total;
    });
    let tanggal = data.map(elem => {
        return elem.date_created;
    });

    var ctx = document.getElementById("chartPendaftar").getContext('2d');
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tanggal,
            datasets: [{
                label: 'Jumlah Pendaftar',
                data: total,
                backgroundColor: 'rgba(28,200,138,0.3)',
                borderColor: "#1CC88A",
                pointBackgroundColor: "rgba(28,200,138,1)",
                pointBorderColor: "rgba(28,200,138,1)",
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    },
                    ticks: {
                      min: 0,
                      stepSize: 1
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 5,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
            }
        }
    });
});




//  pie chartjs
// Set new default font family and font color to mimic Bootstrap's default styling
fetch('http://localhost/ishlah-app/dashboard/pieJS')
.then(response => response.json())
.then(response => {
  const dataPie = response.jeniskelamin;
  let jkel = dataPie.map(jkel => {
    return jkel.jkel;
  })    
  console.log(jkel)
  let total = dataPie.map(pie => {
    return pie.total;
  })    
  console.log(total)


Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPie");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: jkel,
    datasets: [{
      data: total,
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
})  