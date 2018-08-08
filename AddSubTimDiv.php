<!DOCTYPE html>
<html>
	<head>
		<title>AddSubTimDivs</title>
		<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	</head>
	<body>
		<section class="container">

			<!-- Find the values for Simple Addition -->
			<section class="row col-sm border" style="padding: 10px;">
				<div>
					<h2>Simple Addition</h2>
					<!-- id Get Simple Addition A/B value -->
					<input id="getAddA" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<input id="getAddB" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<!-- button to start JS -->
					<button onclick="findAdd()" class="btn btn-lg btn-primary">Find The Value</button>
					<!-- output values entured -->
					<br>
					<p id="outputAddValue"></p>
				</div>

				<!-- formula for simple Simple Addition -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>X = A + B</p>
					<p>X = <span id="formAddA">0</span> + <span id="formAddB">0</span></p>
					<p>X = <span id="formAnswerAdd">0</span></p>
				</div>
			</section>

			<!-- Find the values for Simple Subtraction -->
			<section class="row col-sm border" style="padding: 10px;">
				<div>
					<h2>Simple Subtraction</h2>
					<!-- id Get Simple Subtraction A/B value -->
					<input id="getSubA" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<input id="getSubB" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<!-- button to start JS -->
					<button onclick="findSub()" class="btn btn-lg btn-primary">Find The Value</button>
					<!-- output values entured -->
					<br>
					<p id="outputSub"></p>
				</div>

				<!-- formula for simple Simple Subtraction -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>X = A - B</p>
					<p>X = <span id="formSubA">0</span> - <span id="formSubB">0</span></p>
					<p>X = <span id="outputSubValue">0</span></p>
				</div>
			</section>

			<!-- Find the values for Simple Division -->
			<section class="row col-sm border" style="padding: 10px;">
				<div>
					<h2>Simple Division</h2>
					<!-- id Get Simple Division A/B value -->
					<input id="getDivA" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<input id="getDivB" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<!-- button to start JS -->
					<button onclick="findDiv()" class="btn btn-lg btn-primary">Find The Value</button>
					<!-- output values entured -->
					<br>
					<p id="outputDiv"></p>
				</div>

				<!-- formula for simple Simple Division -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>X = A ÷ B</p>
					<p>X = <span id="formDivA">0</span> ÷ <span id="formDivB">0</span></p>
					<p>X = <span id="outputDivValue">0</span></p>
				</div>
			</section>

			<!-- Find the values for Simple Multiplication -->
			<section class="row col-sm border" style="padding: 10px;">
				<div>
					<h2>Simple Multiplication</h2>
					<!-- id Get Simple Multiplication A/B value -->
					<input id="getTimA" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<input id="getTimB" type="number" placeholder="Input your value Here" class="form-control" style="width: 275px;">
					<br>
					<!-- button to start JS -->
					<button onclick="findTim()" class="btn btn-lg btn-primary">Find The Value</button>
					<!-- output values entured -->
					<p id="outputTim"></p>
				</div>

				<!-- formula for simple Simple Multiplication -->
				<div style="padding-top: 60px; padding-left: 25px;">
					<p>X = A × B</p>
					<p>X = <span id="formTimA">0</span> × <span id="formTimB">0</span></p>
					<p>X = <span id="outputTimValue">0</span></p>
				</div>
			</section>
		</section>

		<script type="text/javascript">
			// Find the Simple Addition value
			function findAdd() {
				var a = document.getElementById("getAddA").value;
				var b = document.getElementById("getAddB").value;
				var c = parseInt(a) + parseInt(b);
				document.getElementById("outputAddValue").innerHTML="Value= "+ a + "<br> Value= " + b + "<br> Answer= " + c + "<br>";
				document.getElementById("formAddA").innerHTML= a;
				document.getElementById("formAddB").innerHTML= b;
				document.getElementById("formAnswerAdd").innerHTML= c;
			}

			// find the Simple Subtraction
			function findSub() {
				var a = document.getElementById("getSubA").value;
				var b = document.getElementById("getSubB").value;
				var c = parseInt(a) - parseInt(b);
				document.getElementById("outputSubValue").innerHTML="Value= "+ a + "<br> Value= " + b + "<br> Answer= " + c + "<br>";
				document.getElementById("formSubA").innerHTML= a;
				document.getElementById("formSubB").innerHTML= b;
				document.getElementById("formAnswerSub").innerHTML= c;
			}

			// find the Simple Division
			function findDiv() {
				var a = document.getElementById("getDivA").value;
				var b = document.getElementById("getDivB").value;
				var c = parseInt(a) / parseInt(b);
				document.getElementById("outputDivValue").innerHTML="Value= "+ a + "<br> Value= " + b + "<br> Answer= " + c;
				document.getElementById("formDivA").innerHTML= a;
				document.getElementById("formDivB").innerHTML= b;
				document.getElementById("formAnswerDiv").innerHTML= c;
			}

			// find the Simple Multiplication
			function findTim() {
				var a = document.getElementById("getTimA").value;
				var b = document.getElementById("getTimB").value;
				var c = parseInt(a) / parseInt(b);
				document.getElementById("outputTimValue").innerHTML="Value= "+ a + "<br> Value= " + b + "<br> Answer= " + c;
				document.getElementById("formTimA").innerHTML= a;
				document.getElementById("formTimB").innerHTML= b;
				document.getElementById("formAnswerTim").innerHTML= c;
			}
		</script>
	</body>
</html>