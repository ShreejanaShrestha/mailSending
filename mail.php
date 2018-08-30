<?php
    $batch='';
    $errors = array(); //creating error variable as an array variable.


    $con = mysqli_connect('localhost','root','','test');
    if ($con == false) {
        echo "database connection failed";
    }
if (isset($_POST['batch']))
{
    $batch = mysqli_real_escape_string($con,$_POST['batch']);
    //ensure that form fields are filled properly
        if (empty($batch)) {
            array_push($errors, "batch is required");
        }


   
if (count($errors) == 0) {

    $qry= "SELECT * from sample where batch='$batch' ";
    $run= mysqli_query($con,$qry);

   if (!$run) {
    die ('SQL Error: ' . mysqli_error($conn));
    }
    $email =array();
    $index =0;
    while($row = mysqli_fetch_array($run)) { 
                //$id = $row['id'];
                //$name = $row['name'];
                $email[$index] = $row;
                //$batch = $row['batch'];
            }
  } 
  } 

?>


<html>
      <head>
      <title>send mail using mail function in php</title>
      </head>
       <div class="container">
      <h2>Mail sending form with Attachment using phpmailer of Web Preparations</h2>
      <form action="" method="POST">
      <div class="form-group">
      <label for="batch">Batch:</label>
      <input type="text" class="form-control" id="batch" placeholder="Please enter the batch" name="batch">
      </div>
      
      <button type="submit" name="batch" class="btn btn-info">Enter</button>
      </form>
      </div>
      </body>
     </html> 

     <html>
<head>
    <title>Displaying MySQL Data in HTML Table</title>
    </head>
<body>
    <h1>Table 1</h1>
    <table class="data-table">
        <caption class="title">students data <?php echo $batch ?></caption>
        <thead>
            <tr>
                <th>NO</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>BATCH</th>
                <th>SYMBOL NO</th>
                <th>REGISTRATION NO</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
        while ($row = mysqli_fetch_array($run))
        {
            //$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
            echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['email'].'</td>
                   <td>'.$row['batch'].'</td>
                    <td>'.$row['symbolNo'].'</td>
                    <td>'.$row['regNo'].'</td>
                </tr>';
            
        }?>
        </tbody>
       
    </table>
</body>
</html>     