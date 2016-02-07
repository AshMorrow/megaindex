<?php
if($_POST){
	echo "<h2>".$_POST['pageUrl']."</h2>";
	include './simple_html_dom.php';
	$htmlData = str_replace(" ", "+", $_POST['projUrl']);
	$htmlData =  explode("\r\n",$htmlData);
	/*echo $_POST['pageUrl']."<br />";
	var_dump($html);*/
	echo "<table class='table'>";
	foreach($htmlData as $v){
	$url = "http://audit.megaindex.ru/audit/relevant_page/getpage?word=".$v."&page=".$_POST['pageUrl'];
	$html = file_get_html($url);

		foreach($html->find('h2') as $element){
			echo "<tr><td>".str_replace("+"," ",$v)."</td>"; $pH1 = trim(str_replace("Релевантность страницы ","",$element->plaintext)); echo "<td>".$pH1."</td></tr>";
		}
	sleep(3);
	}
	echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Добавить данные</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
    <script scr="./js/jquery.min.js"></script>
    <script scr="./js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
      <form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="form-group">
        <p><input type="text" name="pageUrl" class="form-control"></p>
        <p><textarea rows="10" cols="45" name="projUrl" class="form-control"></textarea></p>
        <p><input type="submit" value="Отправить" class="btn btn-success"></p>
      </form>
    </div>
</body>
</html>