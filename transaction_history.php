<?php
require_once 'includes/database.php';
include 'includes/head.php';
include 'includes/header.php';
?>

<section class="main-body-container-2"  > 
  
        
               
  <table class="table-content">
      <thead>
          <tr>
              <th>Sender     </th>
              <th>Receiver    </th>
              <th>Amount </th>
            
          </tr>
      </thead>
  <?php
  $sql_tranactions = "SELECT * FROM transactions";
  $result= mysqli_query($conn, $sql_tranactions);
  $row_count= mysqli_num_rows($result);

  

  ?>
      <tbody>
          <?php
          if ($row_count>0)
          {
              while($row = mysqli_fetch_assoc($result))
              {
       
       
          echo "  <tr>
                  <td>$row[sender]    </td>
                  <td>$row[receiver]  </td>
                  <td>$row[amount] </td>
                 

                  </tr>   ";
              }

          }
          else
          {
              echo "no results found.";
          }  

          ?>    
      </tbody>
  


  </table>

</section>  
<?php
    include 'includes/footer.php';
    ?>