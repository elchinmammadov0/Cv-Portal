<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>CV Portal System</title>
	<link rel="stylesheet"
		href="style.css">
	<link rel="stylesheet"
		href="responsive.css">
        <style>
            /* Main CSS Here */

@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;
}
:root {
--background-color1: #fafaff;
--background-color2: #ffffff;
--background-color3: #ededed;
--background-color4: #cad7fda4;
--primary-color: #4b49ac;
--secondary-color: #0c007d;
--Border-color: #3f0097;
--one-use-color: #3f0097;
--two-use-color: #5500cb;
}
body {
background-color: var(--background-color4);
max-width: 100%;
overflow-x: hidden;
}

header {
height: 70px;
width: 100vw;
padding: 0 30px;
background-color: var(--background-color1);
position: fixed;
z-index: 100;
box-shadow: 1px 1px 15px rgba(18, 201, 94, 0.825);
display: flex;
justify-content: space-between;
align-items: center;
}

.logo {
font-size: 27px;
font-weight: 600;
color: rgb(6, 49, 165);
}

.icn {
height: 30px;
}
.menuicn {
cursor: pointer;
}

.searchbar,
.pp,
.logosec {
display: flex;
align-items: center;
justify-content: center;
}

.searchbar2 {
display: none;
}

.logosec {
gap: 60px;
}

.searchbar input {
width: 250px;
height: 42px;
border-radius: 50px 0 0 50px;
background-color: var(--background-color3);
padding: 0 20px;
font-size: 15px;
outline: none;
border: none;
}
.searchbtn {
width: 50px;
height: 42px;
display: flex;
align-items: center;
justify-content: center;
border-radius: 0px 50px 50px 0px;
background-color: var(--secondary-color);
cursor: pointer;
}




.main-container {
display: flex;
width: 100vw;
position: relative;
top: 70px;
z-index: 1;
}
.dpicn {
height: 42px;
}

.main {
height: calc(100vh - 70px);
width: 100%;
overflow-y: scroll;
overflow-x: hidden;
padding: 40px 30px 30px 30px;
}



.nav {
min-height: 91vh;
width: 250px;
background-color: var(--background-color2);
position: absolute;
top: 0px;
left: 00;
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
display: flex;
flex-direction: column;
justify-content: space-between;
overflow: hidden;
padding: 30px 0 20px 10px;
}
.navcontainer {
height: calc(100vh - 70px);
width: 250px;
position: relative;
overflow-y: scroll;
overflow-x: hidden;
transition: all 0.5s ease-in-out;
}
.navcontainer::-webkit-scrollbar {
display: none;
}
.navclose {
width: 80px;
}
.nav-option {
width: 250px;
height: 60px;
display: flex;
align-items: center;
padding: 0 30px 0 20px;
gap: 20px;
transition: all 0.1s ease-in-out;
}

.nav-img {
height: 30px;
}

.nav-upper-options {
display: flex;
flex-direction: column;
align-items: center;
gap: 30px;
}

.option1 {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
color: white;
cursor: pointer;
}
.option1:hover {
border-left: 5px solid #010058af;
background-color: var(--Border-color);
}




.add {
height: 35px;
width: 90px;
border-radius: 8px;
background-color: #5500cb;
color: white;
font-size: 15px;
border: none;
cursor: pointer;
}

.report-body {
max-width: 1160px;
overflow-x: auto;
padding: 20px;
}
.report-topic-heading,
.item1 {
width: 1120px;
display: flex;
justify-content: space-between;
align-items: center;
}
.t-op {
font-size: 18px;
letter-spacing: 0px;
}

.items {
width: 1120px;
margin-top: 15px;
}

.item1 {
margin-top: 20px;
}
.t-op-nextlvl {
font-size: 14px;
letter-spacing: 0px;
font-weight: 600;
}

.label-tag {
width: 100px;
text-align: center;
color: rgb(0, 0, 0);
border-radius: 4px;
}

        </style>
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">CV Portal System</div>
		<!--	<img src="./Untitled-design-(30).png"
				class="icn menuicn"
				id="menuicn"
				alt="menu-icon"> -->
		</div>

		<div class="searchbar">
			<input type="text"
				placeholder="Search">
			<div class="searchbtn">
		<!--	<img src="./Untitled-design-(28).png" 

					class="icn srchicn"
					alt="search-icon"> -->
			</div>
		</div>

		<div class="pp">
			
		<!--	<img src="./profile-removebg-preview.png" 

					class="dpicn"
					alt="dp"> -->
			</div>
		
            </div>


	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
					<!--	<img src="./Untitled-design-(29).png"

							class="nav-img"
							alt="user"> -->
						<h3> Users</h3>
					</div>

					<div class="option2 nav-option">
					<!--	<img src="./9.png"

							class="nav-img"
							alt="about"> -->
						<h3> About</h3>
					</div>

					

					<div class="nav-option option4">
					<!--	<img src="./6.png"

							class="nav-img"
							alt="location"> -->
						<h3> Location</h3>
					</div>

					<div class="nav-option option5">
					<!--	<img src="./10.png"

							class="nav-img"
							alt="blog">-->
						<h3> Profile</h3>
					</div>

					<div class="nav-option option6">
						<!--<img src="./4.png"

							class="nav-img"
							alt="settings">-->
						<h3> Settings</h3>
					</div>

                    <div class="report-container">
                        <div class="report-header">
                            
                            <button class="add"><a href="userreg.php" style="color: white;">Add User</button></a>
                        </div>
			</nav>
		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<!--<img src="./Untitled-design-(28).png"

						class="icn srchicn"
						alt="search-button">-->
				</div>
			</div>

			
				<div class="report-body">
					<div class="report-topic-heading">
						<h3 class="t-op">User</h3>
						<h3 class="t-op">Year</h3>
						<h3 class="t-op">Experience</h3>
						<h3 class="t-op">E-mail</h3>
					</div>

					<div class="items">
						<div class="item1">
							<h3 class="t-op-nextlvl">Albert</h3>
							<h3 class="t-op-nextlvl">24/02/1998</h3>
							<h3 class="t-op-nextlvl">4 years</h3>
							<h3 class="t-op-nextlvl label-tag">albert@gmail.com</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Jane</h3>
							<h3 class="t-op-nextlvl">11/03/1999</h3>
							<h3 class="t-op-nextlvl">3 years</h3>
							<h3 class="t-op-nextlvl label-tag">jane@gmail.com</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Kate</h3>
							<h3 class="t-op-nextlvl">15/06/2000</h3>
							<h3 class="t-op-nextlvl">1 years</h3>
							<h3 class="t-op-nextlvl label-tag">kate@gmail.com</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Emma</h3>
							<h3 class="t-op-nextlvl">25/11/1987</h3>
							<h3 class="t-op-nextlvl">7 years</h3>
							<h3 class="t-op-nextlvl label-tag">emma@gmail.com</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">James</h3>
							<h3 class="t-op-nextlvl">30/09/1998</h3>
							<h3 class="t-op-nextlvl">4 years</h3>
							<h3 class="t-op-nextlvl label-tag">james@gmail.com</h3>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
    

	
</body>
</html>
