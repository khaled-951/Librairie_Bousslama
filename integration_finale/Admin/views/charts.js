
	$.ajax({
    url:"stats.php",
    method:"POST",
    data:"GetStats=1",
	dataType:"JSON",
    success:function(data)
    {
	 var ctx = document.getElementById( "lineChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "Last 7 Days", "Last 6 Days", "Last 5 Days", "Last 4 Days", "Last 3 Days", "Yesterday", "Today" ],
            datasets: [
                {
                    label: "Filled Orders",
                    borderColor: "rgba(0, 194, 146, 0.9)",
                    borderWidth: "1",
                    backgroundColor: "rgba(0, 194, 146, 0.5)",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [ data[0], data[1], data[2], data[3], data[4], data[5], data[6]]
                            }
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );
    }
	
	
   });
	