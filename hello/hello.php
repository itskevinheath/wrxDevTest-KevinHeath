<?	
	//get form submission
	$Name = $_POST["inputName"];
	if($Name){
		//output name;
		echo "you entered name: $Name <br />\r\n";
		
		$Hostname = "localhost";
		$Database = "progtest.hello_demo";
		$Username = "admin";
		$Password = "";
		
		//Connect to database
		$DB = mysql_connect($Hostname, $Username, $Password);
		mysql_select_db($Database, $DB) or die(mysql_error);
		
		//Add new name
		$Table = "Names";
		$Query = mysql_query("INSERT INTO $Table (Name) VALUES ('$Name')", $DB) or die(mysql_error);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Kevin Heath - Kilobyte Soltutions - www.kilobytesolutions.com" />
        <title>GolfWRX Programmer PHP Test</title>
    </head>
    
    <body>
        <form action="" method="post" name="formHello" target="_self">
            Name: <input name="inputName" type="text" size="100" maxlength="100" />
            <input name="inputSubmit" type="submit" value="Submit" />
        </form>
    </body>
</html>