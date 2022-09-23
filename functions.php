<?PHP

function Protect_Search($str)
    {
        if( function_exists( "mysql_real_escape_string" ) )
        {
              $ret_str = mysqli_real_escape_string( $str );
        }
        else
        {
              $ret_str = addslashes( $str );
        }
        return $ret_str;
    }
######################################################

function Error($x) {
	echo ' <div class="alert alert-dismissible alert-danger">  <button type="button" class="close" data-dismiss="alert">&times;</button> '.$x.'</div>';
}
function Notice($x) {
	echo ' <div class="alert alert-dismissible alert-warning"> <button type="button" class="close" data-dismiss="alert">&times;</button> '.$x.'</div>';
}
function Success_Notice($x) {
	echo ' <div class="alert alert-dismissible alert-success"> <button type="button" class="close" data-dismiss="alert">&times;</button> '.$x.'</div>';
}

######################################################

function Protect($str)
    {
        if( function_exists( "mysql_real_escape_string" ) )
        {
              $ret_str = mysqli_real_escape_string( $str );
        }
        else
        {
              $ret_str = addslashes( $str );
        }
        return $ret_str;
    }
	
######################################################	
	function Protect2($str)
    {
        return htmlspecialchars($str);
    }
	
		function UnProtect2($str)
    {
        return htmlspecialchars_decode($str);
    }
######################################################
	
?>