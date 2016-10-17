<?php

$myarray = array('value1' => array('value3' => 'value4'), 
				 'value2' => array('value5' => 'value6') 
);


class myclass {
 	public $title = 'Array to HTML table';
 	
	public function __construct() {

			$this->buildhtml();
			$this->buildtable();
			$this->buildrows();

	}

	public function buildhtml(){

		echo $html = <<< TMP
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml"  lang="EN" xml:lang="EN">
		<head> 
		<meta http-equiv="Content-Type"content="text/html; charset=utf-8" />
		 meta http-equiv="Content-Language" content="en"/>
		<style type="text/css">
 		 table    {margin:-1em 0 2em 4.2em;}
 		 table td,
		  table th {padding:0 1em; border:solid 1px #333; text-align:center;}
		</style>
		<title> $title </title>
		</head>
		<body>
TMP;

	}

	public function buildtable(){

		echo $table = <<< TMP
    <table>
        <tr>
        <th> heading1     </th>
        <th> heading2     </th>
        <th> heading3	  </th>
     </tr>
TMP;
	}

	public function buildrows(){

		foreach($myarray as $item1 => $name1):
            foreach($name1 as $item2 => $name2):
            	foreach($name2 as $item3 => $name3);
	                echo '<tr>';
	                	echo '<td>' .$item1 .'</td>';
	                	echo '<td>' .$item2 .'</td>';
	                	echo '<td>' .$item3 .'</td>';
	                echo '</tr>';
                endforeach;
            endforeach;        
        endforeach;

        echo '</table></body></html>';        
	}


}

$obj - new myclass;
$obj->buildhtml();
$obj->buildtable();
$obj->buildrows();


?>
