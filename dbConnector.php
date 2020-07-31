<?php

class DbConnector {

var $theQuery;
var $link;

function DbConnector(){

        // Get the main settings from the array we just loaded
        $host = 'localhost';
        $db = 'diary';
        $user = 'root';
        $pass = '';

        // Connect to the database
        $this->link = ($GLOBALS["___mysqli_ston"] = mysqli_connect($host,  $user,  $pass));
        mysqli_select_db($GLOBALS["___mysqli_ston"], $db);
        register_shutdown_function(array(&$this, 'close'));

    }
	
  //*** Function: query, Purpose: Execute a database query ***
    function query($query) {

        $this->theQuery = $query;
        return mysqli_query( $this->link, $query);

    }

    //*** Function: fetchArray, Purpose: Get array of query results ***
    function fetchArray($result) {

        return mysqli_fetch_array($result);

    }

    //*** Function: close, Purpose: Close the connection ***
    function close() {

        ((is_null($___mysqli_res = mysqli_close($this->link))) ? false : $___mysqli_res);

    }
	
}

?>