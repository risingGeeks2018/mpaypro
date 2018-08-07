<html>

	<style>
		.container{
			width: 50%;
			margin:auto;
			margin-top: 10%
		}
		.head{
			background-color: gray;
			font-size: 25px;
			font-weight: bold;
			height: 20%;
		}
		h1{
			float: left;
			margin-left: 10px;
		}
		button{
			height: 200px;
			width: 200px;
			margin-left:20px;
			border-radius: 100%;
			border:1px solid black;
		}
		img:hover{
			opacity:10;
		}

	</style>

	<body>
	<div class="head">
		<h1>WELCOME PTA PAYMENTS </h1>
	
	</div>
	<div class="container">
	<center>	
		<img src="pta.jpg" onclick="teacher()"></button>
		<img src="logo.jpg" onclick="student()"></button>
		</center>
	</div>

	</body>
	<script>
		function teacher(){
			window.location.href = 'log.php';
		}
		function student(){
			window.location.href = 'log.php';
		}
	</script>
</html>