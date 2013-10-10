<?php

Class Keywords}
Static public function Get()
	{
	$ret = array();
	$conn = GetConnection();
	$result = $conn ->query(‘SELECT * From 2013Fall_Keywords’);

	While($rs = $result ->fetch_assoc() {
		$ret[] = $rs;
	}

	$conn ->close();
	Return $ret;
}
}
