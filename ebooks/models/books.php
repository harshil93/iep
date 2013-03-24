<?php 

/**
* Class for books
*/

include '../../models/db.php';
//include '../../models/dbinfo.php';

include 'constants.php';
define ('SITE_ROOT', realpath(dirname(__FILE__)));
class books
{
	public $name, $author, $isbn, $category, $pages,$size,$downloads,$db,$con,$link;

	
	function __construct($_name='', $_author='',$_isbn='',$_category='',$_pages='',$_size='')
	{
		$this->name = $_name;
		$this->author = $_author;
		$this->isbn = $_isbn;
		$this->category = $_category;
		$this->pages = $_pages;
		$this->size = $_size;
		$this->db = new db(HOSTNAME,DBUSER,DBPASS);
		$this->con = $this->db->connect(DBNAME);
		

	}
	function __destruct() {
		$this->db->close($this->con);
	}


	public function addBook()
	{
		
		$query = "INSERT INTO ".DBNAME.".".EBOOK_DB." (`id`, `name`, `author`, `category`, `isbn`, `pages`, `size`, `downloads`) VALUES (NULL, '".$this->name."', '".$this->author."', '".$this->category."', '".$this->isbn."', '".$this->pages."', '".$this->size."', '0');";

		$db1 = $this->db;
		if($result=$db1->query($query,$this->con)){
			//echo "successful";
			return mysql_insert_id();
		}else{
			die(mysql_error());
		}
	}

	public function getBook($value='')
	{
		$query = "SELECT * FROM ".DBNAME.".".EBOOK_DB." WHERE `id`='".$value."';";
		//echo $query;

		$result=$this->db->query($query,$this->con);
		if($row = mysql_fetch_assoc($result)){

			$this->id = $row['id'];
			$this->name = $row['name'];
			$this->author = $row['author'];
			$this->category = $row['category'];
			$this->isbn = $row['isbn'];
			$this->pages = $row['pages'];
			$this->downloads = $row['downloads'];
			$this->link = EBOOKS_CONTROLLER."download.php?id=".$this->id;
			return 0;


		}else{
			return -1;
		}
		

	}

	public function getComments($id='')
	{
		$query = "SELECT * FROM ".DBNAME.".".EBOOK_COMMENTS_TBL." WHERE id='".$id."' ORDER BY `timestamp` DESC;";
		$result = $this->db->query($query, $this->con);
		$comments=NULL;
		$i=0;
		while($row = mysql_fetch_array($result)){
			$comments[$i]= $row;
			$i++;
		}
		return $comments;
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