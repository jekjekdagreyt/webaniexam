<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>HTML5</title>
</head>
<body>
	<canvas id="canvasOne" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasTwo" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasThree" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasFour" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasFive" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasSix" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasSeven" width="200" height="200" style="margin:5px;"></canvas>
	<canvas id="canvasEight" width="200" height="200" style="margin:5px;"></canvas>


<script type="text/javascript">
	var canvas = document.getElementById('canvasOne');
	var a= canvas.getContext("2d");
	var b= canvas.getContext("2d");
	var c= canvas.getContext("2d");
	var d= canvas.getContext("2d");
	var e= canvas.getContext("2d");

	a.beginPath();
	a.fillStyle ="red";
	a.strokeStyle="orange";
	a.lineWidth=4;
	a.arc(100,100,50,0,Math.PI*2,true);
	a.fill();
	a.stroke();

	b.beginPath();
	b.fillStyle ="red";
	b.strokeStyle="orange";
	b.lineWidth=4;
	b.rect(30,40,50,50);
	b.fill();
	b.stroke();

	c.beginPath();
	c.fillStyle ="red";
	c.strokeStyle="orange";
	c.lineWidth=4;
	c.rect(120,40,50,50);
	c.fill();
	c.stroke();

	d.beginPath();
	d.fillStyle ="red";
	d.strokeStyle="orange";
	d.lineWidth=4;
	d.rect(30,120,50,50);
	d.fill();
	d.stroke();

	e.beginPath();
	e.fillStyle ="red";
	e.strokeStyle="orange";
	e.lineWidth=4;
	e.rect(120,120,50,50);
	e.fill();
	e.stroke();





	var canv = document.getElementById('canvasTwo');
	var context = canv.getContext("2d");
	var con = canv.getContext("2d");


	context.beginPath();
	context.arc(100,50,80,0,Math.PI,false);
	context.fillStyle = 'red';
	context.fill();
	context.lineWidth = 10;
	context.strokeStyle = 'green';
	context.stroke();
	context.closePath();

	con.beginPath();
	con.arc(50,70,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(85,70,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(120,70,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(155,70,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(70,100,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(100,100,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(130,100,4,0,Math.PI*2,false);
	con.fillStyle = 'black';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'black';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(100,45,15,0,Math.PI*2,false);
	con.fillStyle = 'white';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'white';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(80,40,15,0,Math.PI*2,false);
	con.fillStyle = 'white';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'white';
	con.stroke();
	con.closePath();

	con.beginPath();
	con.arc(120,40,15,0,Math.PI*2,false);
	con.fillStyle = 'white';
	con.fill();
	con.lineWidth = 1;
	con.strokeStyle = 'white';
	con.stroke();
	con.closePath();

	var can = document.getElementById('canvasThree');
	var ca = can.getContext("2d");


	ca.beginPath();
	ca.fillStyle='cyan';
	ca.rect(112,10,15,200);
	ca.strokeStyle='cyan';
	ca.lineWidth=2;
	ca.stroke();
	ca.fill();
	ca.closePath();	


	ca.beginPath()
	ca.arc(120,55,50,0,Math.PI*2,false);
	ca.fillStyle = 'yellow';
	ca.fill();
	ca.lineWidth = 1;
	ca.strokeStyle = 'white';
	ca.stroke();	
	ca.closePath();

	ca.beginPath();
	ca.fillStyle="orangered";
	ca.fillRect(70,35,99,40,);
	ca.closePath();

	var jake = document.getElementById('canvasFour');
	var ja = jake.getContext("2d");
	

	ja.beginPath();
	ja.arc(100,100,90,0,Math.PI*2,false);
	ja.fillStyle='white';
	ja.fill();
	ja.strokeStyle='black';
	ja.lineWidth=5;
	ja.stroke();
	ja.closePath();

	ja.beginPath();
	ja.arc(100,100,20,0,Math.PI*2,false);
	ja.fillStyle='orange';
	ja.fill();
	ja.strokeStyle='orange';
	ja.lineWidth=1;
	ja.stroke();
	ja.closePath();

	ja.beginPath();
	ja.arc(100,100,5,0,Math.PI*2,false);
	ja.fillStyle='red';
	ja.fill();
	ja.strokeStyle='red';
	ja.lineWidth=1;
	ja.stroke();
	ja.closePath();

	ja.beginPath();
	ja.strokeStyle = "black";
  	ja.lineWidth = 4;
  	ja.lineCap = 'square';
  	ja.moveTo(13,100);
  	ja.lineTo(90,100);
  	ja.stroke();
  	ja.closePath();

  	ja.beginPath();
  	ja.strokeStyle = "black";
  	ja.lineWidth = 4;
  	ja.lineCap = 'square';
  	ja.moveTo(111,100);
  	ja.lineTo(190,100);
  	ja.stroke();
  	ja.closePath();

  	ja.beginPath();
  	ja.strokeStyle = "black";
  	ja.lineWidth = 4;
  	ja.lineCap = 'square';
  	ja.moveTo(100.5,10);
  	ja.lineTo(100.5,90);
  	ja.stroke();
  	ja.closePath();

  	ja.beginPath();
  	ja.strokeStyle = "black";
  	ja.lineWidth = 4;
  	ja.lineCap = 'square';
  	ja.moveTo(100.5,110);
  	ja.lineTo(100.5,190);
  	ja.stroke();
  	ja.closePath();


  	var nge = document.getElementById("canvasFive");
  	var ngek = nge.getContext("2d");

  	ngek.beginPath();
  	ngek.arc(100,100,75,0,Math.PI*2,false);
	ngek.fillStyle='#EBE5EB';
	ngek.fill();
	ngek.strokeStyle='white';
	ngek.lineWidth=5;
	ngek.stroke();
  	ngek.closePath();

  	ngek.beginPath();
	ngek.arc(100,100,50,0,Math.PI,false);
	ngek.fillStyle="black";
	ngek.strokeStyle="white";
	ngek.lineWidth=2;
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	ngek.beginPath();
	ngek.arc(75,70,15,0,Math.PI,false);
	ngek.fillStyle="gray";
	ngek.lineWidth=2;
	ngek.strokeStyle="black";
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	ngek.beginPath();
	ngek.arc(125,70,15,0,Math.PI,false);
	ngek.fillStyle="gray";
	ngek.lineWidth=2;
	ngek.strokeStyle="black";
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	ngek.beginPath();
	ngek.rect(100,102,15,18);
	ngek.strokeStyle="black";
	ngek.fillStyle="white";
	ngek.stroke();
	ngek.fill();
	ngek.closePath();

	ngek.beginPath();
	ngek.rect(79,102,15,18);
	ngek.strokeStyle="black";
	ngek.fillStyle="white";
	ngek.stroke();
	ngek.fill();
	ngek.closePath();

	ngek.beginPath();
	ngek.rect(92,128,15,18);
	ngek.strokeStyle="black";
	ngek.fillStyle="white";
	ngek.stroke();
	ngek.fill();
	ngek.closePath();

	ngek.beginPath();
	ngek.arc(94,112,5,0,Math.PI*2,false);
	ngek.fillStyle="black";
	ngek.strokeStyle="black";
	ngek.fill();
	ngek.stroke();
	ngek.closePath();

	var has = document.getElementById('canvasSix');
	var haw = has.getContext("2d");

	haw.beginPath();
	haw.arc(100,120,72,0,Math.PI,false);
	haw.fillStyle="#59421A";
	haw.fill();
	haw.closePath();

	haw.beginPath();
	haw.rect(91,100,15,25);
	haw.fillStyle="#59421A";
	haw.fill();
	haw.closePath();

	haw.beginPath();
	haw.arc(100,100,40,Math.PI,0,false);
	haw.fillStyle="#90E994";
	haw.fill();
	haw.closePath();

	haw.beginPath();
	haw.arc(100,160,150,0,Math.PI,false);
	haw.fillStyle="cyan";
	haw.fill();
	haw.closePath();

	var goldy = document.getElementById('canvasSeven');
	var gold = goldy.getContext('2d');

	gold.beginPath();
	gold.rect(20,70,100,100);
	gold.strokeStyle="black";
	gold.lineWidth=2;
	gold.stroke();
	gold.closePath();

	gold.beginPath();
	gold.rect(80,20,100,100);
	gold.strokeStyle="black";
	gold.lineWidth=2;
	gold.stroke();
	gold.closePath();

	gold.beginPath();
	gold.moveTo(20,70);
	gold.lineTo(80,20);
	gold.strokeStyle="black";
	gold.lineWidth=2;
	gold.stroke();
	gold.closePath();
  	
	gold.beginPath();
	gold.moveTo(20,170);
	gold.lineTo(80,120);
	gold.strokeStyle="black";
	gold.lineWidth=2;
	gold.stroke();
	gold.closePath();

	gold.beginPath();
	gold.moveTo(120,70);
	gold.lineTo(180,20);
	gold.strokeStyle="black";
	gold.lineWidth=2;
	gold.stroke();
	gold.closePath();

	gold.beginPath();
	gold.moveTo(120,170);
	gold.lineTo(180,120);
	gold.strokeStyle="black";
	gold.lineWidth=2;
	gold.stroke();
	gold.closePath();

	var xx = document.getElementById("canvasEight");
	var xxx = xx.getContext("2d");

	xxx.beginPath();
	xxx.rect(1,1,198,198);
	xxx.fillStyle="pink";
	xxx.strokeStyle="black";
	xxx.lineWidth=10;
	xxx.stroke();
	xxx.fill();
	xxx.closePath();

	xxx.beginPath();
	xxx.arc(100,100,40,0,Math.PI*2,false);
	xxx.fillStyle="red";
	xxx.strokeStyle="black";
	xxx.lineWidth=10;
	xxx.stroke();
	xxx.fill();
	xxx.closePath();

	xxx.beginPath();
	xxx.arc(40,40,20,0,Math.PI*2,false);
	xxx.fillStyle="red";
	xxx.strokeStyle="black";
	xxx.lineWidth=10;
	xxx.stroke();
	xxx.fill();
	xxx.closePath();

	xxx.beginPath();
	xxx.arc(160,160,20,0,Math.PI*2,false);
	xxx.fillStyle="red";
	xxx.strokeStyle="black";
	xxx.lineWidth=10;
	xxx.stroke();
	xxx.fill();
	xxx.closePath();
</script>	
</body>
</html>
