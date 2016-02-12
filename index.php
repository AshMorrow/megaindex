<!DOCTYPE html>
<html>
<head>
    <title>Добавить данные</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script scr="./js/jquery.min.js"></script>
    <script scr="./js/bootstrap.min.js"></script>
	<style>
		header{
			height:100px;
		}
	</style>
</head>
<body>
	<header>
	</header>
    <div class="container">
		<div class="col-lg-6">
		  <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-group">
			<p><strong>URL</strong><input type="text" name="pageUrl" class="form-control"></p>			  
			<p><strong>Список слов с новой строки</strong><textarea rows="10" cols="45" name="projUrl" class="form-control"></textarea></p>
			<p><input type="submit" value="Отправить" class="btn btn-success"></p>
		  </form>
		</div>
		<div class="col-lg-6">
			<?php include './megaindex.php' ?>
		</div>
    </div>
</body>
</html>