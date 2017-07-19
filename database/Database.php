<?php
  if(!class_exists('DataBase')) {
	
    class DataBase {
        private $host;
        private $user;
        private $password;
        private $db;
        private $mysqli;
		
        function __construct($host,$user,$pass,$db) {
            $this->host     = $host;
            $this->user     = $user;
            $this->pass     = $pass;
            $this->$db     = $db;
            $this->mysqli   = new mysqli($this->host, $this->user, $this->pass, $this->$db);
        }

        public function query($query=array())
        {
            $this->result = $this->mysqli->query($query);
            return $this;
        }

        public function selectData($table=null, $select=null, $where=null, $or_where=null, $orderby=null, $limit=1, $offset=null){
            if(!isset($table) && !isset($select))
				return false;
            $select = $this->arrayToString($select, $separator=', ',$return='values');
            $this->sql = "SELECT {$select} FROM {$table}";
			if($where and $or_where){
				$where = $this->arrayToString($where, $separator=' AND ');
				$or_where = $this->arrayToString($or_where, $separator=' OR ');
				$this->sql .= " WHERE ({$where}) AND ({$or_where})";
			}elseif($where and !$or_where){
				$where = $this->arrayToString($where, $separator=' AND ');
				$this->sql .= " WHERE {$where}";
            }elseif($or_where and !$where){
				$where = $this->arrayToString($or_where, $separator=' OR ');
				$this->sql .= " WHERE {$where}";
            }
            if(isset($orderby)){
				$this->sql .=" ORDER BY {$orderby}";
            }
            $this->sql .=" LIMIT $limit";
            if(isset($offset)){
				$this->sql .=" OFFSET $offset";
            }
			/*
			//*/print($this->sql."<br />");
			return $this->query($this->sql);
        }

        public function queryData($sql = null){
			if(isset($this->sql)){
				return $this->query($this->sql);
			}
			return false;
        }

        public function insertData($table = null,$data=null){
			if(!isset($table) || !isset($data)){
				return false;
			}
			$this->sql = "INSERT INTO {$table}";
			$columns = $this->arrayToString($data, $separator=', ',$return='keys');
			$this->sql .= "($columns)";
			$values = $this->arrayToString($data, $separator=', ',$return='values');
			$this->sql .=" VALUES ($values)";
			/*
			//*/print($this->sql."<br />");
			return $this->query($this->sql);
        }

        public function insertId(){
			return $this->mysqli->insert_id;
        }

        public function affectedRows(){
			return $this->mysqli->affected_rows;
        }


        public function updateData($table = null,$data=null, $where=null,$or_where=null, $limit='1'){
			if(!isset($table) || !isset($data)){
				return false;
			}
			$column = $this->arrayToString($data, $separator=', ');
			$this->sql = "UPDATE {$table} SET {$column} ";
			if(isset($where)){
				$where = $this->arrayToString($where, $separator=' AND ');
				$this->sql .= " WHERE {$where}";
			}else if(isset($or_where)){
				$where = $this->arrayToString($or_where, $separator=' OR ');
				$this->sql .= " WHERE {$where}";
			}
			$this->sql .=" LIMIT $limit";
			/*
			//*/print($this->sql."<br />");
			$this->query($this->sql);
			return $this->affectedRows();
        }

        public function deleteData($table = null, $where=null, $or_where=null){
			if(!isset($table) || !isset($where)){
				return false;
			}
			$this->sql = "DELETE FROM {$table}";
			if(isset($where)){
				$where = $this->arrayToString($where, $separator=' AND ');
				$this->sql .= " WHERE {$where}";
			}else if(isset($or_where)){
				$where = $this->arrayToString($or_where, $separator=' OR ');
				$this->sql .= " WHERE {$where}";
			}
			$this->query($this->sql);
			/*
			//*/print($this->sql."<br />");
			return $this->affectedRows();
        }

        public function rows(){
			return $this->result->fetch_object();
        }

        public function rowsArray(){
			return $this->result->fetch_array(MYSQLI_NUM);
        }

        public function result(){
			while($row=$this->rows()){
				$result[] = $row;
			}
			return $result;
        }
        public function resultArray(){
			while($row=$this->rows_array()){
				$result[] = $row;
			}
			return $result;
        }

        public function numRows(){
			return $this->result->num_rows;
        }

        public function arrayToString($data=array(), $separator='',$return='',$input=''){
			if(!is_array($data)){
				return $data;
			}
			$return = array_fill(0,count($data),$return);
			$input = array_fill(0,count($data),'input');
			if(is_array($data)){
				$data = implode($separator, array_map(array($this, 'convert_to_str'), $data, array_keys($data),$return, $input));
			}
			/*
			//*/print($data."<br />");
			return $data;
        }
		
        public function convert_to_str ($v='', $k='', $return='', $input='') {
            if(isset($input)){
				$v = $this->cleanInput($v);
            }
            if($return==''){
            	return $k."='".$v."'";
            }else{
            	if($return=='keys'){
            	 	return $k;
            	}else{
            		return "'$v'";
				}
            }
		}

        public function cleanInput($input=null){
			if(get_magic_quotes_gpc()) {
				$input = stripslashes($input);
			}
			return $this->mysqli->real_escape_string(strip_tags(trim($input)));
        }

        public function cleanInputs($inputs=array()){
			if(!is_array($inputs)){
				$inputs = explode(' ', $inputs);
			}
			$inputs = array_map(array($this,'clean_input'), $inputs);
			$inputs = implode(', ', $inputs);
        }

        /* free result set */
        public function freeResult(){
			$this->result->close();
        }

        //Close database connection
        public function connectClose(){
            return $this->mysqli->close();
        }
    }
}
///phpinfo();
?>
