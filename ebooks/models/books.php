<?php 

/**
* Class for books
*/

include '../../models/db.php';
include '../../models/dbinfo.php';
include 'constants.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));
class books
{
	private $name, $author, $isbn, $category, $pages,$size;
	
	function __construct($_name, $_author,$_isbn='',$_category='',$_pages='',$_size='')
	{
		$this->name = $_name;
		$this->author = $_author;
		$this->isbn = $_isbn;
		$this->category = $_category;
		$this->pages = $_pages;
		$this->size = $_size;
	}


	public function addBook()
	{
		$db = new db(HOSTNAME,DBUSER,DBPASS);
		$con = $db->connect(DBNAME);
		$query = "INSERT INTO ".DBNAME.".".EBOOK." (`id`, `name`, `author`, `category`, `isbn`, `pages`, `size`, `downloads`) VALUES (NULL, '".$this->name."', '".$this->author."', '".$this->category."', '".$this->isbn."', '".$this->pages."', '".$this->size."', '0');";

		//echo $query;
		if($result=$db->query($query,$con)){
			//echo "successful";
			return mysql_insert_id();
		}else{
			die(mysql_error());
		}
	}

	public function uploadBook()
	{
		if ($_FILES["file"]["error"] > 0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
			return -2;
		}
		else
		{
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mime = finfo_file($finfo, $_FILES['file']['tmp_name']);
			$ok = false;
			//echo $_FILES['file']['type'];
			//echo $mime;

			switch ($mime) {
				case "application/pdf":
				case "application/msword":
				case "text/plain":
						$ok = true;
						break;
				default:
					die("Unknown/not permitted file type");
			}
			$last_id= $this->addBook();
			$filename  = basename($_FILES['file']['name']);
			$extension = pathinfo($filename, PATHINFO_EXTENSION);
			$new       = $last_id.'.'.$extension;

			if (file_exists(EBOOKS_PATH.$new ))
			{
				echo $_FILES["file"]["name"] . " already exists. ";
				return -1;
			}
			else
			{

				move_uploaded_file($_FILES["file"]["tmp_name"], EBOOKS_PATH.$new);
				//echo "Stored in: " . EBOOKS_PATH . $_FILES["file"]["name"];
				return 0;
			}
		}

	}
}
?>