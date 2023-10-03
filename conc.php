<html>
    <head>
        
</head>
<body>
<button  onclick="window.print()">Print this page</button>
</body>
    </html>
<?php   
	//if(isset($_POST["submit"]))

  $bookid = $_POST["bookid"];
  $pagecount = $_POST["pagecount"];
  $title = $_POST["title"];
  $mpg = $_POST["mpg"];
  $author = $_POST["author"];
  $extracontent = $_POST["content"];  
  $edition = $_POST["edition"];
  $publisherid = $_POST["pubid"];
  $publication = $_POST["publication"];
  $bookcatagory= $_POST["catagory"];
  $price = $_POST["price"];
  $purchasedate = $_POST["date"];
  $fault = $_POST["fault"];
  $publishyear = $_POST["year"];
  
//data base connection
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "practice";

$conn = new mysqli($servername, $username, $password,$dbname);

if($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}
else{
    // $stmt = $conn->prepare("insert into detail(bookname,title,author,edition,publication) values(?, ?, ?, ?, ?)");
    // $stmt->bind_param("sssis",$bookname,$title,$author,$edition,$publication);
    // echo "regestration successfully";
   // $sql = "INSERT INTO book_detail (sno,book id, page_count,title, main page_count, author,extra content,book_edition,publisher id, publication,price,issue_date,fault,publish _year)
    // VALUES ('$bookid', '$pagecount', '$title', '$mpg', '$author','$extracontent','$edition','$publisherid','$publication','$bookcatagory','$price','$purchasedate','$fault','$publishyear')";
 $sql = "INSERT INTO `book`( `book_id`, `page_count`, `title`, `main_page_count`, `author`, `extra_content`, `book_edition`, `publisher_id`, `publication`, `book_catagory`, `price`, `issue_date`, `fault`, `publish_year`)
     VALUES ('$bookid', '$pagecount', '$title', '$mpg', '$author','$extracontent','$edition','$publisherid','$publication','$bookcatagory','$price','$purchasedate','$fault','$publishyear')";
    $conn->query("$sql");
    echo "book add successfully";
}
    // $stmt->close();
    $conn->close();
?>
<?php
include("handling.php");
?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>


 
</body>
</html> 