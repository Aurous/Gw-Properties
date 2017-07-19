<?php
	include_once('Database.php');
	$db = new Database('localhost','root','','testing');
	
	//insert example
		$data = array(
			'name' => 'Demo Insert',
			'role' => 'Editor'
		);
		$db->insertData($table='users',$data);
		//for getting insert id 
		//echo $db->insertData($table='users',$data)->insertId();
		
	/*select example
	$select_data = $db->selectData($table='users', $select='id,name,role', $where=null, $or_where=null, $orderby='id', $limit=null, $offset=null);	
	print_r($select_data->result());
	foreach($select_data->resultArray() as $test){
		echo $test->id;
	}*/
	
	//update example
		$data = array(
			'name' => 'Demo Update',
			'role' => 'Editor'
		);
		$where = 'id=4';// using string		
		//$where = array('id'=>4);//using array
		$db->updateData($table='users',$data,$where);

	//delete example
		$where = array('id'=>4,'status'=>0);//using array
		//$where = 'id=5 AND status=0';// using string		
		$db->deleteData($table='users',$where);
	  	
	
