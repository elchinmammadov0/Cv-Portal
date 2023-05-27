<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="resume.css">
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-color: rgb(253, 254, 255);
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.full {
			width: 50%;
			max-width: 1000px;
			min-height: 100px;
			background-color: rgb(245, 239, 231);
			margin: 0px;
			display: grid;
			grid-template-columns: 2fr 4fr;
		}

		.left {
			position: initial;
			background-color: rgb(126, 219, 231);
			padding: 20px;

		}

		.right {
			position: initial;
			background-color: rgb(162, 202, 206);
			padding: 20px;

		}

		.image,
		.Name,
		.Surname,
		.Gender,
		.Email,
		.Username,
		.Password,
		.Education,
		.Workexperience,
		.Skills,
		.Keywords {
			margin-bottom: 30px;
		}

		.h2 {
			background-color: rgb(4, 96, 150);
		}
	</style>
</head>

<body>
	<div class="full">
		<div class="left">
			<div class="Name">
				<h2>Name</h2>
				<p><b>Name:</b>Ahmed</p>
			</div>
			<div class="Surname">
				<h2>Surname</h2>
				<p><b>Surname:</b>Abbasov</p>
			</div>
			<div class="Gender">
				<h2>Gender</h2>
				<p><b>Gender:</b>Male</p>
			</div>
			<div class="Email">
				<h2>Email</h2>
				<p><b>Email:</b>ahmedabbasov004@gmail.com</p>
			</div>
			<div class="Username">
				<h2>Username</h2>
				<p><b>Username:</b>AhmedAbbasov2023</p>
			</div>
			<div class="Password">
				<h2>Password</h2>
				<p><b>Password:</b><input type="password"></p>
			</div>

		</div>
		<div class="right">
			<div class="Education">
				<h2>Education</h2>
				<p>Khazar Universty</p>
				
			</div>
			<div class="Workexperience">
				<h1>Workexperience</h1>
				<h3>Senior Web Developer on PHP</h3>
				
				<ul>
					<li>Senior Developer</li>
				</ul>
			</div>
			<div class="title">
				<p>Web Developer</p>
			</div>
			

			<div class="Skills">
				<h2>Skills</h2>
				<p>I know working on php,HTML,CSS,Java,Javascript,React</p>
			</div>
			<div class="Keywords">
				<h2>Keywords</h2>
				<p>Baku/Azerbaijan,English,Turkey,HTML,CSS,Java,PHP,Web Developer,React</p>

			</div>
		</div>
	</div>
</body>

</html>