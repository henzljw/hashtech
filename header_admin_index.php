<html>
    <head>
        <link rel="stylesheet" type="text/css" href="admin_index_style.css">
		<link rel="stylesheet" type="js" href="script/script.js">
    </head>
    <body>
        <div class="header">
			<a href="admin_index.php" class="logo">#hashtech</a>
			<div class="header-right">
				<a style="font-size: 15px;" href="logout.php">Logout</a>
			</div>
		</div>
        <div class="sidenav">
			<a href="admin_index.php" class="logo">#hashtech</a>
			<hr/>
			<h4>Admin Management</h4>
			<button style="font-size:15px;" class="dropdown-btn">Gadgets
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a style="font-size:15px;" href="gadget_list.php">All Gadgets</a>
				<a style="font-size:15px;" href="gadget_add.php">Add Gadget</a>
				<a style="font-size:15px;" href="gadget_edit.php">Edit Gadget</a>
			</div>
			<button style="font-size:15px;" class="dropdown-btn">Payments
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a style="font-size:15px;" href="category_list.php">All Payments</a>
				<a style="font-size:15px;" href="category_add.php">Update Payment</a>
				<a style="font-size:15px;" href="category_edit.php">Delete Payment</a>
			</div>
			<button style="font-size:15px;" class="dropdown-btn">Orders
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a style="font-size:15px;" href="order_list.php">All Orders</a>
			</div>
			<button style="font-size:15px;" class="dropdown-btn">User Accounts
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a style="font-size:15px;" href="user_list.php">All User accounts</a>
			</div>
			<button style="font-size:15px;" class="dropdown-btn">More Actions
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-container">
				<a style="font-size:15px;" href="category_list.php">All Brands</a>
				<a style="font-size:15px;" href="category_add.php">Add Brand</a>
				<a style="font-size:15px;" href="category_delete.php">Delete Brand</a>
			</div>
		</div>
    </body>
</html>
<script>
	/* Loop through all dropdown button to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for(i = 0; i < dropdown.length; i++) {
		dropdown[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if(dropdownContent.style.display === "block") {
			dropdownContent.style.display = "none";
		}
		else {
			dropdownContent.style.display = "block";
		}
		});
	}
</script>