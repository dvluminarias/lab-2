<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="media/icon.jpg">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Meow Meow Meow</title>

	<style>
		body {
		background-color: #2b323c;
		margin: 0;
		padding: 0;
		}
		
		img {
		display: flex;
		border-radius: 5%;
		margin-left: auto;
		margin-right: auto;
		}
		
		.justify {
		text-align: justify; 
		text-justify: inter-word;
		}
		
		.line {
        padding-bottom: 5px;
        border-bottom-style: solid;
        border-bottom-width: 2.5px;
        width: fit-content;
        }
		
		.column50 {
		float: left; 
		width: 50%; 
		}
		
		.column {
		margin-left: 300px;
		margin-right: 300px;
		padding: 20px;
		}
		
		.row:after {
		content: ""; 
		display: table; 
		clear: both;
		}
		
		.center {
		display: flex;
		align-items: center;
		text-align: center;
		}
		
		.vertical {
		padding: 70px 0;
		}
		
		.content{
		color: white; 
		font-family: Century Gothic;
		}
	
		.footer {
		background-color: black;
		color: white;
		padding: 10px;
		text-align: center;
		margin: 0;
		position: relative;
		}
		
		@media only screen and (max-width: 1000px){
			.column {
				margin-left: 50px;
				margin-right: 50px;
			}
		}
		
		@media only screen and (max-width: 600px){
			.column {
				margin-left: 10px;
				margin-right: 10px;
			}
		}
		
	
	</style>
</head>

<body>
	<div class="header">
		<nav>
			<ul>
				<li><a href="#Home">HOME</a></li>
				<li><a href="#About">ABOUT</a></li> 
				<li><a href="#Contact">CONTACT</a></li>
				<li><a href="#References">REFERENCES</a></li>
			</ul> 
		</nav>
	</div>
	
	<div class="container">
		<div class="text-box" style="font-family: Century Gothic">
			<div>
			<h1>I am <span class="auto-type"></span></h1>
			</div>

			<p>
			<i>“We can never judge the lives of others, because each person knows only their own pain <br>
			and renunciation. It’s one thing to feel that you are on the right path, but it’s another <br>
			to think that yours is the only path.”</i>
			<b> - Paolo Coelho</b></p>
			
			<a href="">WIP Button 1</a>
			<a href="" class="btn">WIP Button 2</a>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
		
		<script>
			var typed = new Typed(".auto-type", {
				strings: [ "Inevitable", "David Luminarias", "Iron Man"],
				typeSpeed: 50,
				backSpeed: 100,
				loop: true})
		</script>
	</div>

<div>
	<div class="column">
		<div class="center">
			<div class="content">
				<p class="line" id ="About" style="font-size: 40px; font-weight: 700; margin-left: auto; margin-right: auto;">
				About Me
				</p>
				<div style="width:100%; height:100%;">
				<img src="dp.jpg" alt="dp" style="width:50%;height:100%;">	
				</div>
				
				<p>Hello, my name is David Wilson V. Luminarias, but you can call me “Lumi”. I am 20 years old and is currently taking the Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology course at Asia Pacific College. Although BSIT-MI is not my first option, it's still technically one of the courses I am interested in.<p>
				
				<p>Given the chance, I would have chosen Bachelor of Science in Forestry though unfortunately, I didn't pass the entrance examination.</p>
			
				<p>My hobbies and Interests include watching movies/documentaries/anime, reading manga/manhua/manhwa, playing games, and listening to music.</p>
			
				<p>While I don’t think there’s an interesting aspect in my life right now, I want to be successful enough that I can help others and enjoy the things that I want without worry through learning significant things that will be able to apply in real life from this subject.</p>
			</div>
		</div>
	</div>
</div>

<div class="content">
	
	<button onclick="document.getElementById('try').innerHTML = getRndInteger(75,100)">Grades Predictor :></button>

	<p id="try"></p>
	<p id="try2"></p>
	
	<script>
		function getRndInteger(min, max) {
		return Math.floor(Math.random() * (max - min + 1) ) + min;
		}
	
		setTimeout(myFunction, 3000);

		function myFunction() {
		document.getElementById("try2").innerHTML = "WAWAWAWAWAW";
		}
			
		function displayDate() {
		const d = new Date();
		document.getElementById("try3").innerHTML = d.toDateString();
		}
	</script>
	
	<button onclick="displayDate()">Today ngayong araw is:</button>
	<p id="try3"></p>
	
	<button onclick="myFunction()">Pindutin mo nga</button>
	<p id="try4"></p>
	
	<script>
		function myFunction() {
		let text;
		let person = prompt("Lagay mo pangalan mo plz:", "Natoy");
		if (person == null || person == "") {
			text = "Edi wag";
		} else {
			text = "Yawa si idol " + person + " man diay ni!";
		}
		document.getElementById("try4").innerHTML = text;
	}
</script>
</div>

<div>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</div>
<div class="footer">
	<p>Footer</p>
</div>

</body>
</html>