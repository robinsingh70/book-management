<!DOCTYPE HTML>
<head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
        tr:hover {background-color: lightgrey;}
        /* input{
  outline: none;
} */

p.intro input {
	border: none;
	background-color:transparent;
    
}

    </style>



</head>
<html>
<body style="background-color: antiquewhite;">
   <div class="jumbotron">
       
  <div class = "shadow-lg p-3 mb-5 bg-body rounded"> <marquee><h3> FORM HANDLING</h3></marquee><center><h2>Book Details</h2></center></div></div>
<div class="container">
        <div class="row">
            <div class="col-sm-1">                
                </div>
            <div class="col-sm-10">
   
 
    <!--------form----------->
    <form action="conc.php" method="post">
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
  
?>
    <div class = "shadow-lg p-3 mb-5 bg-body rounded">
 
        <table  class="table table-striped" bgcolor=""   >

            <tr>
            <td>
              <h5>  <label class="form-label"> Book Id: </lablel></h5>
            </td>
            <td> 
            <p class="intro">   <input type="number" id = "s0" name="bookid" size="40" id="robin" class="form-control" placeholder=" " value = "<?php echo "$bookid" ?>"> 
</p> </td>
            <!------td ------->
            <td>
              <h5><label class="form-label">Page count : </lablel></h5>
  </td>
            <td> 
            <p class="intro">  <input  type="number" id = "s1" name="pagecount" size="55" class="form-control" placeholder=" " value = "<?php echo "$pagecount" ?>"> 
</p>   </td>
            
            </tr>
            <!------ TR---------->

            <tr>
            <td>
                <label class="form-label"> <h5>Enter Title :</h5></label>
            </td>
            <td> 
            <p class="intro">     <input  type="text" id = "s2" name="title" size="55" height="100%" class="form-control" placeholder=" " value = "<?php echo "$title" ?>"> 
</p></td>
            <!----td-------- ----->
            <td>
                <h5><label class="form-label">Main page count : </lablel></h5>
            </td>
            <td> 
            <p class="intro"> <input  type="number" id = "s3" name="mpg" size="55" class="form-control" placeholder="" value = "<?php echo "$mpg" ?>"> 
</p> </td>
            
            </tr>
            <!---------TR -------->

            <tr>
            <td><label class="form-label"> <h5>Enter Author :</h5></label></td>
            <td><p class="intro">   <input type="text" id = "s4" name="author" size="55" class="form-control" placeholder=" " value = "<?php echo "$author" ?>"> </p> </td>
            <!--------- td----->
            <td>
            <h5><label class="radio-inline">Extra content </lablel></h5>
                 <td><p class="intro"> <input type="text" id = "s5" name="content" size="55" class="form-control" placeholder=" " value = "<?php echo "$extracontent" ?>"> </td>
</p>  </td>
            <td> 


            </tr>
            <!-----TR ------------>
            <tr>
            <td> <label class="form-label"><h5> Enter Edition : </h5></label></td>
              <td> <p class="intro">  <input  type="number " id = "s6" name="edition" size="55" class="form-control" placeholder="" value = "<?php echo "$edition" ?>"> </p></td>
            <!------td-------->
            <td>
                <h5><label class="form-label"> Publisher Id: </lablel></h5>
            </td>
            <td> 
            <p class="intro"> <input  type="text" id = "s7" name="pubid" size="55" class="form-control" placeholder=" " value ="<?php echo "$publisherid" ?>"> </p>
            </td>

            </tr>
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5> Enter Publication : </h5></lable></td>
                  <td> <p class="intro"> <input  type="text" id = "s7" name="publication" size="55" class="form-control" placeholder=" " value = "<?php echo "$publication" ?>"> </p></td>
            <!-----td---> 
            <td>
                <h5><label class="form-label"> Book Catagory: </lablel></h5>
            </td>
            <td> 
            <p class="intro"> <input  type="text" id = "s8" name="catagory" size="55" class="form-control" placeholder="" value = "<?php echo "$bookcatagory" ?>"> 
</p>  </td>
            </tr>
        
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5>Price(rs): </h5></lable></td>
               <td><p class="intro"> <input  type="text" id = "s9" name="price" size="55" class="form-control" placeholder=" " value ="<?php echo "$price" ?>"></p> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Purchase Date: </lablel></h5>
            </td>
            <td> 
            <p class="intro">      <input  type="date" id = "s10" name="date" size="55" class="form-control" placeholder="" value = "<?php echo "$purchasedate" ?>"> 
</p> </td>
            </tr>
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5>Fault : </h5></lable></td>
            <td><p class="intro"> <input  type="text" id = "s11" name="fault" size="55" class="form-control" placeholder=" " value = "<?php echo "$fault" ?>"></p> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Publish year: </lablel></h5>
            </td>
            <td> 
            <p class="intro">     <input  type="date" id = "s12" name="year" size="55" class="form-control" placeholder="" value = "<?php echo "$publishyear" ?>"></p> 
            </td>
            
            </tr>

         
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit" class="btn btn-primary mt-3"></td>&nbsp;&nbsp;&nbsp;&nbsp;
         <td> &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="button" onclick = "function()" id="button" value="Edit" class="btn btn-primary mt-3">
                    
            </td>
            </tr>
        </table>
</div>
   
      
    
   
</div>
<div class="col-sm-1" style =""></div>
<script>
$(document).ready(function(){
  $("#button").click(function(){
    $("p").removeClass("intro");
    // $('#remove').removeAttr('readonly');
   
  });
});</script>
</div>
</div>
</body>
</html>