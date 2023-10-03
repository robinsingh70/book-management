<!DOCTYPE HTML>
<head>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <style type="text/css">
        tr:hover {background-color: red;}           
        
    </style>

</head>
<html>
<body >
   <div class="jumbotron" >
       
  <div class = "shadow-lg p-3 mb-5 bg-body rounded" > <marquee><h3> BOOK MANAGMENT PROJECT</h3></marquee><center><h2>Book Details</h2></center></div></div>
<div class="container">
        <div class="row">
            <div class="col-sm-1">                
                </div>
            <div class="col-sm-10">
   
 
    <!--------form----------->
    <form action="handling.php" method="post">
    <div class = "shadow-lg p-3 mb-5 bg-body rounded">
 
        <table  class="table table-striped" bgcolor="white"   >

            <tr>
            <td>
              <h5>  <label class="form-label"> Book Id: </lablel></h5>
            </td>
            <td> 
                <input type="number" name="bookid" size="40" class="form-control" placeholder="Enter the book Id "> 
            </td>
            <!------td ------->
            <td>
                <h5><label class="form-label">Page count : </lablel></h5>
            </td>
            <td> 
                <input type="number" name="pagecount" size="55" class="form-control" placeholder=" "> 
            </td>
            
            </tr>
            <!------ TR---------->

            <tr>
            <td>
                <label class="form-label"> <h5>Enter Title :</h5></label>
            </td>
            <td> 
                <input type="text" name="title" size="55" height="100%" class="form-control" placeholder="enter the title "> 
            </td>
            <!----td-------- ----->
            <td>
                <h5><label class="form-label">Main page count : </lablel></h5>
            </td>
            <td> 
                <input type="number" name="mpg" size="55" class="form-control" placeholder=""> 
            </td>
            
            </tr>
            <!---------TR -------->

            <tr>
            <td><label class="form-label"> <h5>Enter Author :</h5></label></td>
            <td> <input type="text" name="author" size="55" class="form-control" placeholder="Enter author  "> </td>
            <!--------- td----->
            <td>
                <h5><label class="radio-inline">Extra content </lablel></h5>
                <td> <input type="text" name="content" size="55" class="form-control" placeholder="Enter yes or no "> </td>

            </td>
            <td> 


            </tr>
            <!-----TR ------------>
            <tr>
            <td> <label class="form-label"><h5> Enter Edition : </h5></label></td>
            <td> <input type="number" name="edition" size="55" class="form-control" placeholder="enter the edition"> </td>
            <!------td-------->
            <td>
                <h5><label class="form-label"> Publisher Id: </lablel></h5>
            </td>
            <td> 
                <input type="text" name="pubid" size="55" class="form-control" placeholder="Enter publisher id "> 
            </td>

            </tr>
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5> Enter Publication : </h5></lable></td>
            <td> <input type="text" name="publication" size="55" class="form-control" placeholder="enter the publication name "> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Book Catagory: </lablel></h5>
            </td>
            <td> 
                <input type="text" name="catagory" size="55" class="form-control" placeholder="Enter the book catagory "> 
            </td>
            </tr>
        
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5>Price(rs): </h5></lable></td>
            <td> <input type="text" name="price" size="55" class="form-control" placeholder="enter the price  "> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Purchase Date: </lablel></h5>
            </td>
            <td> 
                <input type="date" name="date" size="55" class="form-control" placeholder=" "> 
            </td>
            </tr>
            <!-----TR----->
            <tr>
            <td> <lable class="form-label"><h5>Fault : </h5></lable></td>
            <td> <input type="text" name="fault" size="55" class="form-control" placeholder="enter the fault name "> </td>
            <!-----td--->
            <td>
                <h5><label class="form-label"> Publish year: </lablel></h5>
            </td>
            <td> 
                <input type="date" name="year" size="55" class="form-control" placeholder=" "> 
            </td>
            </tr>

         
            <tr>
            <td></td>
            <td>
            <input type="submit" value="submit" class="btn btn-primary mt-3">
            <input type="reset" value="Reset" class="btn btn-primary mt-3">
            </td>
            </tr>
        </table>
</div>
    </form>
</div>
<div class="col-sm-1" style=""></div>
</div>
</div>
</body>
</html>