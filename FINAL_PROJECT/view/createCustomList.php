<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<h1>Custom List</h1>

		<form action="../controller/createCustomListCheck.php" method = "POST">
			<label>Category :</label>
            <input type="text" name="category">
			<label>Book Name :</label>
			<input type="text" name="book_name">
			<label>Author :</label>
			<input type="text" name="author">
			<input type="submit" name="add" value="Add">
		</form>
</body>
</html>