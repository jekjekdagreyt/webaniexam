<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
<head>
	<title>SVG PATH</title>
</head>
<body>
	<div id="main-container">
		<svg id="svg-container" >	
				<defs>
					<path id="text-path" d="M400,650 l-100 -300  h250 l-100 300 z"/>
					<path id="text" d="M350 500 h200"/>
					<path id="textone" d="M 300 350 q -200 -150 0 -120" fill="none" />	
					<path id="textwo" d="M 260 220 q -50 -200 100 -40" fill="none" />
					<path id="texthree" d="M 555 350 q 165 -150 -50 -140" fill="none"/>
					<path id="textfour" d="M 350 150 q 90 -210 160 0" fill="none"/>
					<path id="textfive" d="M 500 180 q 150 -150 100 40" fill="none"/>
					<path id="textsix" d="M 320 380 h200 v10 h-190 v30 h180" fill="none"/>
				</defs>
				<text>
					<textPath xlink:href="#text-path" fill="brown">The greatest glory in living lies not in never falling, but in rising every time we fall.
					Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking.</textPath>
					<textPath xlink:href="#textone" fill="olive">Life is what happens when you're busy making other plans.</textPath>
					<textPath xlink:href="#textwo" fill="#5406D1">If life were predictable it would cease to be life, and be without flavor.</textPath>
					<textPath xlink:href="#texthree" fill="#48943E">Spread love everywhere you go. Let no one ever come to you without leaving happier.</textPath>
					<textPath xlink:href="#textfour" fill="black">Always remember that you are absolutely unique. Just like everyone else.</textPath>
					<textPath xlink:href="#textfive" fill="orange">It is during our darkest moments that we must focus to see the light.</textPath>
				</text> 
				
		</svg>
	</div>
</body>
</html>
