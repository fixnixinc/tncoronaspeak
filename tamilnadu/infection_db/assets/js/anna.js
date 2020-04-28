
	var array = [['Country','Confirmed Cases','Death Cases']]
	for (var i in Data) {
		array.push([i,Data[i]["2020-03-22"][0],Data[i]["2020-03-22"][2]])
	}
	console.log("skjfndrsligtw iltuhtiu gehtiu4hukzehtkatyikeGiuGH,UK")
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

     
      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable(array);

        var options = 
	{
		colorAxis: {colors: ['yellow', 'red']}
	};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
