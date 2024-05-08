<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php
		include('dbcon.php');
	?>
	 <div class="container">
		<div class="margin-top">
			<div class="row">
					<?php include('head.php'); ?>
					<div class="span12
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">  	
    <div class="span5">
        <div class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="first_name">First Name:</label>
                <div class="controls">
                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="last_name">Last Name:</label>
                <div class="controls">
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="email">Email Address:</label>
                <div class="controls">
                    <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="message">Message:</label>
                <div class="controls">
                    <textarea id="message" name="message" placeholder="Put Your Message Here" required></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <input name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Send</button>
                </div>
            </div>
        </div>
    </div>
</form>

			</div>	   

			
			<div class="span6">
	
	
			<div class="form-horizontal">

            <?php
if(isset($_POST['submit'])) {
    $firstname = htmlspecialchars($_POST['first_name']);
    $lastname = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Assuming $conn is your database connection object

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO contact (first_name, last_name, email, message) VALUES (?, ?, ?, ?)";

    // Validate and sanitize user input (e.g., $firstname, $lastname, $email, $message)

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO your_table_name (firstname, lastname, email, message) VALUES (?, ?, ?, ?)";

// Prepare the statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $username, $gender, $address, $contact, $type, $password);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Statement executed successfully
        echo "Data inserted successfully.";
    } else {
        // Error occurred while executing the statement
        echo "Error: " . mysqli_stmt_error($stmt);
    }
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect to success page
        header("Location: success2.php");
        exit();
    }
}

    }
} else {
    echo " ";
}
?>


		
		</div>
		
		</div>	

	</form>
	</div>
