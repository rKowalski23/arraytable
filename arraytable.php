<?php

$myarray = array('value1', 'value2', 'value 3');


class myclass {
 	public $title = 'Array to HTML table';

	public function __construct() {

			$this->buildhtml();
			$this->buildtable();
			//$this->buildrows();

	}

	public function buildhtml(){

		echo $html = <<< TMP
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"  lang="EN" xml:lang="EN">
		<head> 
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8" />
		<title> $title </title>
		</head>
		<body>
TMP;

	}

	public function buildtable(){

		echo $table = <<< TMP
    <table border=2>
        <tr>
        <th> heading1     </th>
        <th> heading2     </th>
        <th> heading3	  </th>
     </tr>
TMP;
	}

	public function buildrows($array){
        echo '<tr>';
		foreach($array as $item):
        	echo '<td>' .$item.'</td>';
        endforeach;
        echo '</tr>'; 

        echo '</table></body></html>';  
	}


}

$obj = new myclass;
//$obj->buildhtml();
//$obj->buildtable();
$obj->buildrows($myarray);




?>
