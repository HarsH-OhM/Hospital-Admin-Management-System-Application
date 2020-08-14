$(document).ready(function() {
	
	// Bar Chart

	var barChartData = {
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
		datasets: [{
			label: 'Dataset 1',
			backgroundColor: 'rgba(0, 158, 251, 0.5)',
			borderColor: 'rgba(0, 158, 251, 1)',
			borderWidth: 1,
			data: [35, 59, 80, 81, 56, 55, 40]
		}, {
			label: 'Dataset 2',
			backgroundColor: 'rgba(255, 188, 53, 0.5)',
			borderColor: 'rgba(255, 188, 53, 1)',
			borderWidth: 1,
			data: [28, 48, 40, 19, 86, 27, 90]
		}]
	};

	var ctx = document.getElementById('bargraph').getContext('2d');
	window.myBar = new Chart(ctx, {
		type: 'bar',
		data: barChartData,
		options: {
			responsive: true,
			legend: {
				display: false,
			}
		}
	});

	// Line Chart

	var lineChartData = {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		datasets: [{
			label: "Revisit Patients",
			backgroundColor: "rgba(0, 158, 251, 0.5)",
			data: [100, 70, 20, 100, 120, 50, 70, 50, 50, 100, 50, 90]
		}, {
		label: "Fresh Visit Patients",
		backgroundColor: "rgba(255, 188, 53, 0.5)",
		fill: true,
		data: [28, 48, 40, 19, 86, 27, 20, 90, 50, 20, 90, 20]
		}]
	};
	
	var linectx = document.getElementById('linegraph').getContext('2d');
	window.myLine = new Chart(linectx, {
		type: 'line',
		data: lineChartData,
		options: {
			responsive: true,
			legend: {
				display: false,
			},
			tooltips: {
				mode: 'index',
				intersect: false,
			}
		}
	});
	
	// Bar Chart 2
	
    barChart();
    
    $(window).resize(function(){
        barChart();
    });
    
    function barChart(){
        $('.bar-chart').find('.item-progress').each(function(){
            var itemProgress = $(this),
            itemProgressWidth = $(this).parent().width() * ($(this).data('percent') / 100);
            itemProgress.css('width', itemProgressWidth);
        });
    };
});

new Chart(document.getElementById("new-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Mon", "Tue", "Wed", "Thr", "Fri"],
      datasets: [
        {
          label: "Patients(per day)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2,7,10,5,13]
        }
      ]
    },
    options: {
      title: {
        display: true
      }
    }
});

new Chart(document.getElementById("pay-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Old Patients","New Patients"],
      datasets: [
        {
          label: "Payments",
          backgroundColor: ["#3e95cd", "#c45850"],
          data: [20000,45000]
        }
      ]
    },
    options: {
      title: {
        display: true
      }
    }
});


new Chart(document.getElementById("renew-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Mon", "Tue", "Wed", "Thr", "Fri"],
      datasets: [
        {
          label: "Patients(per day)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [34,14,12,50,3]
        }
      ]
    },
    options: {
      title: {
        display: true
      }
    }
});
