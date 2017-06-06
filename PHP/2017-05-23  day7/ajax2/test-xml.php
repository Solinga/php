<?php
	//响应类型为Content-Type:text/xml'
    header('Content-Type:text/xml');
	echo '<bookstore>
			<book category="children" year="2005" price="29.99">哈利波特</book>
			<book category="web" year="2015" price="39.99">佚名</book>
		</bookstore>';
?>