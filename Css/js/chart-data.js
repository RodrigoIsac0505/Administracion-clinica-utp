var randomScalingFactor1 = function(){ return Math.round(Math.random()*10 )};
var randomScalingFactor2 = function(){ return Math.round(Math.random()*50 )};
var randomScalingFactor3 = function(){ return Math.round(Math.random()*500 )};
				
	var barChartData1 = {
			labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
			datasets : [
				{
					fillColor : "#68086c",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "#68086c",
					highlightStroke: "rgba(220,220,220,1)",
					data : [randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1(),randomScalingFactor1()]
				}
			]
	
		}

		var barChartData2 = {
			labels : ["FCT","FIC","FIE","FII","FIM","FISC"],
			datasets : [
				{
					fillColor : "#68086c",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "#68086c",
					highlightStroke: "rgba(220,220,220,1)",
					data : [randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2(),randomScalingFactor2()]
				}
			]
	
		}
	
		var barChartData3 = {
			labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
			datasets : [
				{
					fillColor : "#68086c",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "#68086c",
					highlightStroke: "rgba(220,220,220,1)",
					data : [randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3(),randomScalingFactor3()]
				}
			]
	
		}