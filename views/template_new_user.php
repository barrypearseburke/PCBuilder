
<form action="index.php" method="post" required>
	<div class="form-group">
		<label>Name:</label> <input type="text" name="name"
			placeholder="insert your name" required class="form-control">
	</div>
	<div class="form-group">
		<label>Surname: </label> <input type="text" name="surname"
			placeholder="insert your surname" required class="form-control">
	</div>
	<div class="form-group">
		<label>Email:</label> <input type="email" name="email"
			placeholder="insert your email" required class="form-control">
	</div>
	<div class="form-group">
		<label>Password: <input type="password" name="password" required
			class="form-control">
	</div>
	<input type='hidden' name='action' value='insertUser'> <input
		type="submit" value='Insert' class='btn btn-success'>
</form>
