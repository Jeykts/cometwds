<?php 
	session_start();
	if (!isset($_SESSION["correo_o_usuario"])){
		echo'<script>
			window.history.back();
			</script>
			';
		die();

	}

	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Admin Dashboard | Redesign</title>
<script src="/cometwds/assets/js/script.js"></script>
<link rel="stylesheet" type="text/css" href="/cometwds/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/cometwds/assets/css/grafico.css">
</head>
<body>
	<div class="container">
		<div class="navigation">
			<ul>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
						<span class="title" style="font-size: 1.5em;font-weight: 500;">Brand Name</span>
					</a>
				</li>
				<li class="hovered">
					<a href="#">
						<span class="icon"><ion-icon name="home-outline"></ion-icon></span>
						<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="people-outline"></ion-icon></span>
						<span class="title">Customers</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
						<span class="title">Message</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="help-outline"></ion-icon></span>
						<span class="title">Help</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
						<span class="title">Settings</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
						<span class="title">Password</span>
					</a>
				</li>
				<li>
					<a href="/cometwds/DB/php/logout.php">
						<span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
						<span class="title" onclick="signOut()">Sign Out</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="main">
			<div class="topbar">
				<div class="toggle">
					<ion-icon name="menu-outline"></ion-icon>
				</div>
				<div class="search">
					<label>
						<input type="text" placeholder="Search here">
						<ion-icon name="search-outline"></ion-icon>
					</label>
				</div>
				<div class="user">
					<img src="user.jpg">
				</div>
			</div>
			
			<div class="cardBox">
				<div class="card">
					<div>
						<div class="numbers">1,504</div>
						<div class="cardName">Daily Views</div>
					</div>
					<div class="iconBx">
						<ion-icon name="eye-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div>
						<div class="numbers">80</div>
						<div class="cardName">Sales</div>
					</div>
					<div class="iconBx">
						<ion-icon name="cart-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div>
						<div class="numbers">284</div>
						<div class="cardName">Comments</div>
					</div>
					<div class="iconBx">
						<ion-icon name="chatbubbles-outline"></ion-icon>
					</div>
				</div>
				<div class="card">
					<div>
						<div class="numbers">$7,842</div>
						<div class="cardName">Earning</div>
					</div>
					<div class="iconBx">
						<ion-icon name="cash-outline"></ion-icon>
					</div>
				</div>
			</div>



			<div class="graphBox">
				<div class="box">
					<canvas id="myChart"></canvas>
				</div>
				<div class="box">
					<canvas id="earning"></canvas>
				</div>
			</div>

			<div class="details">
				 order details list 
				<div class="recentOrders">
					<div class="cardHeader">
						<h2>Recent Orders</h2>
						<a href="#" class="btn">View All</a>
					</div>
					<table>
						<thead>
							<tr>
								<td>Name</td>
								<td>Price</td>
								<td>Payment</td>
								<td>Status</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Star Refrigerator</td>
								<td>$1200</td>
								<td>Paid</td>
								<td><span class="status delivered">Delivered</span></td>
							</tr>
							<tr>
								<td>Window Coolers</td>
								<td>$110</td>
								<td>Due</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>Speakers</td>
								<td>$620</td>
								<td>Paid</td>
								<td><span class="status return">Return</span></td>
							</tr>
							<tr>
								<td>Hp Laptop</td>
								<td>$110</td>
								<td>Due</td>
								<td><span class="status inprogress">In Progress</span></td>
							</tr>
							<tr>
								<td>Apple Watch</td>
								<td>$1200</td>
								<td>Paid</td>
								<td><span class="status delivered">Delivered</span></td>
							</tr>
							<tr>
								<td>Wall Fan</td>
								<td>$110</td>
								<td>Paid</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>Adidas Shoes</td>
								<td>$620</td>
								<td>Paid</td>
								<td><span class="status return">Return</span></td>
							</tr>
							<tr>
								<td>Denim Shirts</td>
								<td>$110</td>
								<td>Due</td>
								<td><span class="status inprogress">In Progress</span></td>
							</tr>
							<tr>
								<td>Casual Shoes</td>
								<td>$575</td>
								<td>Paid</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>Wall Fan</td>
								<td>$110</td>
								<td>Paid</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>Denim Shirts</td>
								<td>$110</td>
								<td>Due</td>
								<td><span class="status inprogress">In Progress</span></td>
							</tr>
						</tbody>
					</table>
				</div>

				 New Customers 
				<div class="recentCustomers">
					<div class="cardHeader">
						<h2>Recent Customers</h2>
					</div>
					<table>
						<tr>
							<td width="60px"><div class="imgBx"><img src="img1.jpg"></div></td>
							<td><h4>David<br><span>Italy</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img2.jpg"></div></td>
							<td><h4>Muhammad<br><span>India</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img3.jpg"></div></td>
							<td><h4>Amelia<br><span>France</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img4.jpg"></div></td>
							<td><h4>Olivia<br><span>USA</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img5.jpg"></div></td>
							<td><h4>Amit<br><span>Japan</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img6.jpg"></div></td>
							<td><h4>Ashraf<br><span>India</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img7.jpg"></div></td>
							<td><h4>Diana<br><span>Malaysia</span></h4></td>
						</tr>
						<tr>
							<td><div class="imgBx"><img src="img8.jpg"></div></td>
							<td><h4>Amit<br><span>India</span></h4></td>
						</tr>

					</table>
				</div>


			</div>

		</div>
	</div>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
	<script src="/Frontend/js/dashboard.js"></script>
	<script>
		// MenuToggle
		let toggle = document.querySelector('.toggle');
		let navigation = document.querySelector('.navigation');
		let main = document.querySelector('.main');

		toggle.onclick = function(){
			navigation.classList.toggle('active');
			main.classList.toggle('active');
		}

		// add hovered class in selected list item
		let list = document.querySelectorAll('.navigation li');
		function activeLink(){
			list.forEach((item) =>
			item.classList.remove('hovered'));
			this.classList.add('hovered');
		}
		list.forEach((item) => 
		item.addEventListener('mouseover',activeLink));
	</script>
</body>
</html>
-->