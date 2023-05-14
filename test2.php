
<!DOCTYPE html>
<html>
<head>
	<title>Details Table</title>
</head>
<body>

	<table id="detailsTable">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
		</thead>
		<tbody>
			<!-- Table body will be filled dynamically -->
		</tbody>
	</table>

	<form id="detailsForm" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br>

		<label>description</label>
		<input type="text" id="description" name="age"><br>

		<label for="gender">Gender:</label>
		<input type="radio" id="male" name="gender" value="Male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female">
		<label for="female">Female</label><br>

		<input type="button" value="Add Details" onclick="addDetails()">
	</form>

	<script>
		// Array to store all the details
		let details = [];

		// Function to add the details to the table and the array
		function addDetails() {
			let name = document.getElementById("name").value;
			let age = document.getElementById("age").value;
			let gender = document.querySelector('input[name="gender"]:checked').value;

			// Add the details to the array
			details.push({ name: name, age: age, gender: gender });

			// Clear the form
			document.getElementById("detailsForm").reset();

			// Call the function to display the details
			displayDetails();
		}

		// Function to display the details in the table
		function displayDetails() {
			let tableBody = document.getElementById("detailsTable").getElementsByTagName("tbody")[0];
			tableBody.innerHTML = "";

			// Loop through the details array and add them to the table
			for (let i = 0; i < details.length; i++) {
				let row = tableBody.insertRow(i);
				let nameCell = row.insertCell(0);
				let ageCell = row.insertCell(1);
				let genderCell = row.insertCell(2);
				nameCell.innerHTML = details[i].name;
				ageCell.innerHTML = details[i].age;
				genderCell.innerHTML = details[i].gender;
			}
		}
	</script>

</body>
</html>
