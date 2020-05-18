<?php 
        $link = new mysqli('localhost','root','','sportsman');
        if($link->connect_error){
            die("Connection Failed".$link->connect_error);
        }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title></title>
         <link rel="stylesheet" href="delete.css">
    </head>
    <body>

    <div class="container">
        <br><br>
        <div class="col-md-5">
      <form action="" method="get">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search sportsmen Name Here...">
        </div>
        <div class="form-group">
            <input type="submit" name="search_btn" class="btn-default" value="Search"/>
        </div>
      </form>

      <?php
        if(isset($_GET['search_btn'])){

            $search_var = $_GET['search'];

            $sql = "SELECT * FROM `register` WHERE firstname LIKE '$search_var%'";
            if($res = $link->query($sql)){

        ?>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                  </tr>
                </thead>
                <tbody>
        <?php
            if($res->num_rows > 0){

                while($row = $res->fetch_assoc()){
        ?>
                    <tr>
                        <td><?php echo $row['firstname'];?></td>
                        <td><?php echo $row['lastname'];?></td>
                    </tr>
        <?php   
                }   
            }
            else
            {
        ?>
                <tr>
                    <td colspan="2">Not Found<?php echo $link->error;?></td>
                </tr>   
        <?php       
            }
        ?>
                </tbody>
            </table>
        <?php
            }
            else
            {
                echo "Failed".$sql;
            }
        }
      ?>
      </div>
    </div>
  <a href="hme.php">back</a>
    </body>
    </html>
