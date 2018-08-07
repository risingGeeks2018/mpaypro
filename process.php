<html>

	<style>
		.container{
			width: 50%;
			margin:auto;
			margin-top: 10%
		}
		
		button{
			height: 150px;
			width: 150px;
			margin: auto;
			border-radius: 100%;
			border:3px solid black;
			font-weight: bold;
			font-size: 20px;
		}

	</style>

	<body>
	<div class="head">
		<h1>WELCOME PTA PAYMENTS </h1>
	
	</div>
	<div class="container">
	<center>	
		<button onclick="Grade7()"> Grade 7 </button>
		<button onclick="Grade8()"> Grade 8 </button>
		<button onclick="Grade9()"> Grade 9</button>
		<button onclick="Grade10()"> Grade 10 </button>
		</center>
	</div>

	</body>
	<script>
		function Grade7(){
			window.location.href = 'payform.php';
		}
		function Grade8(){
			window.location.href = 'payform.php';
		}
		function Grade9(){
			window.location.href = 'payform.php';
		}
		function Grade10(){
			window.location.href = 'payform.php';
		}
	</script>
</html>