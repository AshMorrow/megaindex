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