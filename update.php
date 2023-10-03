<html>
    <?php
 include("conc1.php");
 //error_reporting(0);
 $page_count = $_GET["page_count"];

 $query ="SELECT * FROM  book where page_count = '$page_count '";
 $data = mysqli_query($conn, $query);


//$total = mysqli_num_results($data);
($result= mysqli_fetch_assoc($data));
 
?>

<head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <style type="text/css">
        tr:hover {background-color: red;}           
        

    </style>

</head>

<body >
   <div class="jumbotron" >
       
  <div class = "shadow-lg p-3 mb-5 bg-body rounded" > <marquee><h3> BOOK MANAGMENT PROJECT<br>you can edit here</h3></marquee><center><h2>Book Details</h2></center></div></div>
<div class="container">
        <div class="result">
            <div class="col-sm-1">                
                </div>
            <div class="col-sm-10">
   
 
    <!--------form----------->
    <form action="" method="post">
    <div class = "shadow-lg p-3 mb-5 bg-body rounded">
    <div class="table-responsive-sm">

        <table  class="table table-striped" bgcolor="white"   >

            <tr>
            <td>
              <h5>  <label class="form-label"> Book Id: </lablel></h5>
            </td>
            <td> 
                <input type="number" value ="<?php echo $result['book_id'];?>"  name="bookid" size="40" class="form-control" placeholder=" " > 
            </td>
            <!------td ------->
            <td>
                <h5><label class="form-label">Page count : </lablel></h5>
            </td>
            <td> 
                <input type="number" value="<?php echo $result['page_count'];?>" name="pagecount" size="55" class="form-control" placeholder=" "> 
            </td>

            </tr>
            <!------ TR---------->

            <tr>
            <td>
                <label class="form-label"> <h5>Enter Title :</h5></label>
            </td>
            <td> 
                <input type="text" value="<?php echo $result['title'];?>" name="title" size="55" height="100%" class="form-control" placeholder="enter the title "> 
            </td>
            <!----td-------- ----->
            <td>
                <h5><label class="form-label">Main page count : </lablel></h5>
            </td>
            <td> 
                <input type="number"  value="<?php echo  $result['main_page_count'];?>" name="mpg" size="55" class="form-control" placeholder=""> 
            </td>
            
            </tr>
            <!---------TR -------->

            <tr>
            <td><label class="form-label"> <h5>Enter Author :</h5></label></td>
            <td> <input type="text" value="<?php echo $result['author'];?>" name="author" size="55" class="form-control" placeholder="Enter author  "> </td>
            <!--------- td----->
            <td>
                <h5><label class="radio-inline">Extra content </lablel></h5>
                <td> <input type="text" value="<?php echo $result['extra_content'];?>" name="content" size="55" class="form-control" placeholder="Enter yes or no "> </td>

            </td>
            <td> 


            </tr>
            <!-----TR ------------>
            <tr>
            <td> <label class="form-label"><h5> Enter Edition : </h5></label></td>
            <td> <input type="number" value="<?php echo $result['book_edition'];?>" name="edition" size="55" class="form-control" placeholder="enter the edition"> </td>
            <!------td-------->
            <td>
                <h5><label class="form-label"> Publisher Id: </lablel></h5>
            </td>
            <td> 
                <input type="text" value="<?php echo $result['publisher_id'];?>" name="pubid" size="55" class="form-control" placeholder="Enter publisher id "> 
            </td>

            </tr>
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5> Enter Publication : </h5></lable></td>
            <td> <input type="text" value="<?php echo $result['publication'];?>" name="publication" size="55" class="form-control" placeholder="enter the publication name "> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Book Catagory: </lablel></h5>
            </td>
            <td> 
                <input type="text" value="<?php echo $result['book_catagory'];?>" name="catagory" size="55" class="form-control" placeholder="Enter the book catagory "> 
            </td>
            </tr>
        
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5>Price(rs): </h5></lable></td>
            <td> <input type="text" value="<?php echo $result['price'];?>" name="price" size="55" class="form-control" placeholder="enter the price  "> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Purchase Date: </lablel></h5>
            </td>
            <td> 
                <input type="date" value="<?php echo  $result['issue_date'];?>" name="date" size="55" class="form-control" placeholder=" "> 
            </td>
            </tr>
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5>Fault : </h5></lable></td>
            <td> <input type="text" value="<?php echo $result['fault'];?>" name="fault" size="55" class="form-control" placeholder="enter the fault name "> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Publish year: </lablel></h5>
            </td>
            <td> 
                <input type="date" value="<?php echo $result['publish_year'];?>" name="year" size="55" class="form-control" placeholder=" "> 
            </td>
            </tr>

         
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit" name = "submit" class="btn btn-primary mt-3">
            <input type="reset" value="Reset" class="btn btn-primary mt-3">
            </td>
            </tr>
        </table>
</div>
</div>
    </form>
</div>
<div class="col-sm-1" style=""></div>
</div>
</div>
</body>
</html>
<?php	
//data base connection
$servername = "localhost";
$username = "root";
$password = "system";
$dbname = "practice";
$conn = new mysqli($servername, $username, $password,$dbname);
//include("conc1.php");

if(isset($_POST["submit"])){

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

    // $query = "INSERT INTO inqform1(reg_date,firstname,lastname,father_name,mother_name,dob,gender,contact_number,email,qualification,course,house_number,area,country,State,city,pin_code)VALUES ('$regdate','$fname','$lname','$father','$mother','$dob','$gender','$phone','$email','$quali','$course','$house','$area','$country','$state','$city','$pin')";

 // $query = "UPDATE lib_db SET book_id='$bookid',page_count='$pagecount',title='$title',main page_count='$mpg',
   //author='$author',extra content='$extracontent', book_edition='$edition', publisher id='$publisherid',
   //publication='$publication',book catagory='$bookcatagory',price='$price',issue_date='$purchasedate',
   //fault='$fault', publish_year='$publishyear' WHERE book_id = '$book_id'";
 $sql = "UPDATE book SET book_id='$bookid',page_count='$pagecount',title='$title',main_page_count='$mpg',
 author='$author',extra_content = '$extracontent',book_edition='$edition',publisher_id = '$publisherid',publication='$publication',
 book_catagory='$bookcatagory',price='$price',issue_date='$purchasedate',fault='$fault',publish_year='$publishyear' WHERE page_count='$pagecount'";
 $data = mysqli_query($conn,$sql);


if($data)
{
    // echo "<script>alert('Record Updated ')</script>";
  echo "<script>alert('Record Updated ')</script>";
    


  ?>
  <META HTTP-EQUIV="refresh" CONTENT= "0;URL=http://localhost\php1\aceess2.php">
  <?php
}
else
{
    echo " failed to update";
}
}
?>  