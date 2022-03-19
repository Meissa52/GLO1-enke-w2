<?php
	$viewXML = simplexml_load_file("personal.xml") or die ("Cannot crate object.");
	$viewXML = simplexml_load_file("major.xml") or die ("Cannot crate object.");
	$viewXML = simplexml_load_file("classes.xml") or die ("Cannot crate object.");

	function processXML($node){
		foreach($node->children() as $personal => $data)
		{
			if(trim($data) != "")
			{
				echo "<tr>";
				echo "<td>".$personal.": ".$data."</td>";
				echo "</tr>";
			}
			processXML($data);
		}
	}
	echo "<table border='1'>";
	processXML($viewXML);
	echo "</table>";

	echo "<table border='1'>";
	processXML($viewXML);
	echo "</table>";

	echo "<table border='1'>";
	processXML($viewXML);
	echo "</table>";
?>