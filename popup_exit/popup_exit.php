<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href = "popup_exit.css" rel = "stylesheet"/>
		<script src = "jquery-3.4.1.min.js"></script>
		<script src = "popup_exit.js"></script>
	</head>
	<body>
		<style>
			.div_fondo .boton1
			{
				display:block;
				height:50px;
				width:100%;
				margin-bottom:10px;
				border-radius:20px;
				outline:none;
				/* Defina la tipografia y tamaño de fuente */
				font-family:Arial;
				font-size:20px;
				cursor:pointer;
				color:green;
				border-color:green;
				
				
			}
			.div_fondo .boton1:hover 
			{
				background-color:green;
				color:white;
			}
			.div_fondo .boton2
			{
				display:block;
				height:50px;
				width:100%;
				margin-bottom:10px;
				border-radius:20px;
				outline:none;
				/* Defina la tipografia y tamaño de fuente */
				font-family:Arial;
				font-size:20px;
				cursor:pointer;
				color:green;
				border-color:green;
				
				
			}
			.div_fondo .boton2:hover 
			{
				background-color:green;
				color:white;
			}
			.div_fondo .boton3
			{
				display:block;
				height:50px;
				width:100%;
				margin-bottom:10px;
				border-radius:20px;
				outline:none;
				/* Defina la tipografia y tamaño de fuente */
				font-family:Arial;
				font-size:20px;
				cursor:pointer;
				color:green;
				border-color:green;
				
			}
			.div_fondo .boton3:hover 
			{
				background-color:green;
				color:white;
			}
			.div_fondo .boton4
			{
				display:block;
				height:50px;
				width:100%;
				margin-bottom:10px;
				border-radius:20px;
				outline:none;
				/* Defina la tipografia y tamaño de fuente */
				font-family:Arial;
				font-size:20px;
				cursor:pointer;
				color:green;
				border-color:green;
				
				
			}
			.div_fondo .boton4:hover 
			{
				background-color:green;
				color:white;
			}
		</style>
		<div class = "div_fondo">
			<div class = "div_popup_escritorio">
				<img src = "imagen_popup.jpg"/>
				<button type = "button" style = "display:block" class = "boton1" onclick="window.location.href = 'https://www.ebay.com';">Boton1</button>
				<button type = "button" style = "display:block" class = "boton2">Boton2</button>
				<div class = "boton_cerrar">
					<img src = "cerrar.png"/>
				</div>
			</div>
			<div class = "div_popup_movil">
				<div class = "parrafo">
					<p>
					Popup movil
					</p>
				</div>
				<button type = "button" style = "display:block" class = "boton3" onclick="window.location.href = 'https://www.ebay.com';">Boton3</button>
				<button type = "button" style = "display:block" class = "boton4">Boton4</button>
				<div class = "boton_cerrar">
					<img src = "cerrar.png"/>
				</div>
			</div>
		</div>
	</body>
</html>