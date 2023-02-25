<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="media/icon.jpg">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="navbar.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	
	<title>Meow Meow Meow</title>
</head>

<body>
	<nav>
		<div class ="paripapa">
			<a href="#"><img src="media/paripapa.jpg"></a>
		</div>
		
		<div class="openMenu"><i class="ri-menu-fill"></i></div>
		<ul class="mainMenu">
			<li><a href="#Home">Home</a></li>
			<li><a href="#About">About</a></li> 
			<li><a href="#Achievements">Achievements</a></li>
			<li><a href="#Contact">Contact</a></li>
			<li><a href="guests.php">Guests</a></li>
			<div class="closeMenu"><i class="ri-close-circle-fill"></i></div>
			<span class="icons">
                <i class="ri-facebook-circle-fill"></i>
				<i class="ri-twitter-fill"></i>
				<i class="ri-youtube-fill"></i>
				<i class="ri-github-fill"></i>
            </span>
		</ul>
		<script>
		const mainMenu = document.querySelector('.mainMenu');
		const closeMenu = document.querySelector('.closeMenu');
		const openMenu = document.querySelector('.openMenu');
		const menu_items = document.querySelectorAll('nav .mainMenu li a');

		openMenu.addEventListener('click',show);
		closeMenu.addEventListener('click',close);

		// close menu when you click on a menu item 
		menu_items.forEach(item => {
			item.addEventListener('click',function(){
        close();
			})
		})

		function show(){
			mainMenu.style.display = 'flex';
			mainMenu.style.top = '0';
		}
		function close(){
			mainMenu.style.top = '-100%';
		}
		</script>
	</nav>

<!---========Main======--->
	<div class="text-box">
		<div>
			<h1>I am <span class="auto-type"></span></h1>
		</div>

		<p>
		<i>“We can never judge the lives of others, because each person knows only their own pain and renunciation.<br>
		It’s one thing to feel that you are on the right path, but it’s another 
		to think that yours is the only path.”</i><br>		
		<b> - Paolo Coelho</b>
		</p><br>
		
		<a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">WIP Button 1</a>
		<a href="" class="btn">References</a>
	</div>
	<img src="media/catto.jpg" class="catto-img">
		
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	
	<script>
		var typed = new Typed(".auto-type", {
			strings: [ "Inevitable", "David Luminarias", "Iron Man"],
			typeSpeed: 50,
			backSpeed: 100,
			loop: true})
	</script>
	
<!---========About======--->
	<section id="About">
		<div>
			<p class="sectionTitle">
				About Me
			</p><hr>
	
			<div class="aboutImage">
				<img src="media/dp.jpg" alt="dp" />	
			</div>
			<p class="aboutText">
			Hello, my name is David Wilson V. Luminarias, but you can call me “Lumi”. I am 20 years old and is currently taking the 
			Bachelor of Science in Information Technology with specialization in Mobile and Internet Technology course at Asia Pacific 
			College. Although BSIT-MI is not my first option, it's still technically one of the courses I am interested in. <br><br>

			Given the chance, I would have chosen Bachelor of Science in Forestry though unfortunately, I didn't pass the entrance examination.
			My hobbies and Interests include watching movies/documentaries/anime, reading manga/manhua/manhwa, playing games, and listening to music.
			While I don’t think there’s an interesting aspect in my life right now, I want to be successful enough that I can help others and 
			enjoy the things that I want without worry through learning significant things that will be able to apply in real life from this subject.
			</p>
		</div>
	</section>

<!---========Achievements======--->
	<section id="Achievements">
		<div>
			<p class="sectionTitle">
				Achievements
			</p><hr>
		</div>
	</section>

<!---========Contact======--->
	<section id="Contact">
		<div>
			<p class="sectionTitle">
				Contact
			</p><hr>
		</div>
	</section>
	
<br>
<br>

<div>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$id = $name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
$servername = "localhost";
$username = "webprogmi211";
$password = "webprogmi211";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE dvluminarias_MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
website VARCHAR(100),
comment VARCHAR(50),
gender VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table dvluminarias_MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO dvluminarias_MyGuests (name, email, website, comment, gender) 
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
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

<!---========Footer ======--->
<div class="footer">
	<p>WIP Footer</p>
</div>

</body>
</html>