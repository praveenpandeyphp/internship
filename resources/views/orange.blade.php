<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ url('InsertOrange')}}" method="POST">
	@csrf 
	<input type="number" name="o_id" placeholder="enter orange id"><br>
	<input type="text" name="o_name" placeholder="enter orange name"><br>
	<input type="text" name="o_type" placeholder="enter orange type"><br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>