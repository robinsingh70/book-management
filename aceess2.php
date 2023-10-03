<?php  
  //data base connection
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "practice";

$conn =  mysqli_connect($servername, $username, $password,$dbname);

if($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);
}
$query = "SELECT * FROM book";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//echo "$total";

  ?>
<html>
    
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron shadow-lg p-3 mb-5 bg-body rounded"><h2>BOOK MANAGMENT PROJECT</h2></div>
      <div class = "container">
        <div class = ""col-sm-6""> <marquee><?php
 echo" You have $total records in data base <br>" ?><h1>book data</h1> </marquee>
<!---------search button---------->
<?php
//include("conc1.php");
//?>
<html>
<head>
    <title>search page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
 <body>
    <div class = "container">
        <form method = "post" action = "search.php">
            <input type = "text" name = "search">
            <button name = "submit">search</button>
</form>

 <!---------search button eND---------->
  </div>
</div>
<div class = "col-sm-6"><a href ='form.php'>Add new book</a>
  
  </div>
  </div>
    <div class = "container">
        <div class = ."result">
            <div calss= "col-sm-1"></div>
            
            <div calss= "col-sm-10 shadow-lg p-3 mb-5 bg-body rounded ">              
    <table class="table table-striped text-center table-bordered " bgcolor="white">
  <thead>
    <tr class = "bg-dark text-white ">
      <th scope="col">book ID</th>
      <th scope="col">page count</th>
      <th scope="col">title</th>
      <th scope="col">mpg</th>
      <th scope="col">Author</th>
      <th scope="col">content</th>
      <th scope="col">edition</th>
      <th scope="col">pub id</th> 
      <th scope="col">publication</th>
      <th scope="col">catagory</th>
      <th scope="col">price</th>
      <th scope="col">date</th>
      <th scope="col">fault</th>
      <th scope="col">year</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
     
    </tr>
  </thead>
  <tbody>
    <tr><?php
          
        while ($result= mysqli_fetch_assoc($data))
        {
          
          echo "<tr>
            <td>  ".$result['book_id']."</td>
            <td>  ".$result['page_count']."</td>
            <td>  ".$result['title']."</td>
            <td>  ".$result['main_page_count']."</td>
            <td>  ".$result['author']."</td>
            <td>  ".$result['extra_content']."</td>
            <td>  ".$result['book_edition']."</td>
            <td>  ".$result['publisher_id']."</td>
            <td>  ".$result['publication']."</td>
            <td>  ".$result['book_catagory']."</td>
            <td>  ".$result['price']."</td>
            <td>  ".$result['issue_date']."</td>
            <td>  ".$result['fault']."</td>
            <td>  ".$result['publish_year']."</td>
            <td><a href ='update.php?page_count=$result[page_count]'>Update</a></td>
            <td><a href ='delete.php?book_id=$result[book_id]'>delete</a></td>
             
                          </tr>" ;
                          
                          
                     
                    }
  // else{
       //            echo "record not found";
     //   }
        
        
        
        ?>
       <!-----<form action = "delete.php" method = "post">
            <input type = "hidden" name = "id" value = ".$result['book_id'].">
         <td>   <input type = "submit" name = "delete" value = "delete"></td>---->
      
    </tr>
  </tbody>
</table>
    </nav>
    </div>
    
    <div calss= "col-sm-1 shadow-lg p-3 mb-5 bg-body rounded"></div>
    </div>
    </div>
</body></html>