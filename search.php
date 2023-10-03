<html>
    <head>
        <title>search </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div>
        <table class = "table">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "system";
    $dbname = "practice";
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    if(isset($_POST['submit'])) {
     $search=$_POST['search'];
     
     $query = "SELECT * FROM  book where book_id = '$search '";
    
     $data = mysqli_query($conn,$query);
     if($data){
        if(mysqli_num_rows($data)>0){
            echo '<thead>
            <tr>
            <th>book ID</th>
               <th>page count</th>
               <th>title</th>
                <th>mpg</th>
               <th>Author</th>
               <th>content</th>
               <th>edition</th>
                <th>pub id</th> 
            </tr>
            
            
            </thead>';
            $row=mysqli_fetch_assoc($data);
            echo '<tbody>
            <tr>
            <td>'.$row['book_id'].'</td>
            <td>'.$row['page_count'].'</td>
            <td>'.$row['title'].'</td>
            <td>' .$row['main_page_count'].'</td>
            <td>' .$row['author'].'</td>
            <td>' .$row['extra_content'].'</td>
            <td>' .$row['book_edition'].'</td>
            <td>' .$row['publisher_id'].'</td>


            </tr>

            </tbody>';
        }
        else{
            echo "data not found";
        }
     }

    }
      ?>



    </div>

 </body>
</html>
