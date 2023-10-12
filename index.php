<?php include "hasin.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table{
         border: 2px solid black;
         border-radius: 10px;
         padding: 5px;
         position: absolute;
         left:10px;
         top:10px;   
      }
      td{
         border: 2px solid green;
         border-radius: 5px;
         margin: 3px;

      }
      th{
         border: 2px solid black;
         border-radius: 1px;
         margin: 5px;
         padding: 3px;
      }

      form{
         display: inline-block;
         border: 2px solid blue;
         border-radius: 10px;
         margin: 10px;
         padding: 5px;
      }
      input{
         border: 2px solid blue;
         border-radius: 5px;
         margin: 3px;
         padding: 2px;
      }
      #submit1{
         
         position: relative;
         left: 40px;
      }
      #submit2{
         position: relative;
         left: 43px;
      }
      #submit1:hover{
         cursor: pointer;
         color: white;
         background-color: blue;
      }
      #submit2:hover{
         cursor: pointer;
         color: white;
         background-color: blue;
      }
      .container{
         width: 35vw;
         height: 55vh;
         position: absolute;
         left: 35vw;
         top: 10vh;
      }
      .container1{
         width: 35vw;
         height: 55vh;
         position: absolute;
         left: 5vw;
         top: 10vh;
      }
      h3{
         position: absolute;
         left: 1vw;
         top: -5vh;
      }

      .header{
         width: 35vw;
         height: 55vh;
         position: absolute;
         left: 35vw;
         top: 10vh;
      }
      
   </style>
</head>
<body >
   
   </style>
      <h1 style="text-align:center">Library</h1>
   <br>
   <br>
   <div class="container">
   <form action="index.php" method="get">
      <input type="text" name="title1" id="title" placeholder="title"><br>
      <input type="text" name="author1" id="author" placeholder="author"><br>
      <input type="text" name="available1" id="available"placeholder="available"><br>
      <input type="text" name="pages1" id="pages" placeholder="pages"><br>
      <input type="text" name="isbn1" id="isbn" placeholder="isbn" required><br>
      
      <input type="submit" value="Submit" id="submit1"><br>
      <br>
      <br>
   </form>
   <form action="index.php" method="post">
      <input type="text" name="delete" id="" placeholder="Enter the key that want to delete">
      <br>
      <input type="submit" value="Delete" id="submit2">
      <br>
      <br>
   </form>
   </div>
   
   <div class="container1">

      
   <h3>Book List</h3>
   <table >
      <thead><th>ISBN</th><th>TITLE</th><th>AUTHOR</th><th>AVAILABLE</th><th>PAGE</th></thead>
      
      
   
<?php
   
   $bookjson = file_get_contents('books.json');
   $book = json_decode($bookjson,true);
   
   foreach($book as $c=> $value){
      echo "<tr><td>".$value['isbn']."</td><td>".$value['title']."</td><td>".$value['author']."</td><td>".$value['available']."</td><td>".$value['pages']."</td></tr>";

     
   }

  

  
    

   
?>
   </table>
   </div>
   
</body>
</html>
