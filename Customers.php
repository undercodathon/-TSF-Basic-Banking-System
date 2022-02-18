<?php
require_once 'includes/database.php';
include 'includes/head.php';
include 'includes/header.php';
?>
    
    <section class="main-body-container-2"> 
  
        
               
                <table class="table-content">
                    <thead>
                        <tr>
                            <th>ID      </th>
                            <th>Name    </th>
                            <th>E-mail  </th>
                            <th>Balance </th>
                            <th>Operation </th>
                        </tr>
                    </thead>
                <?php
                $sql = "SELECT * FROM customers";
                $result= mysqli_query($conn, $sql);
                $row_count= mysqli_num_rows($result);

                
          
                ?>
                    <tbody>
                        <?php
                        if ($row_count>0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                     
                     
                        echo "  <tr>
                                <td>$row[customer_id]  </td>   
                                <td>$row[customer_name]    </td>
                                <td>$row[customer_email]  </td>
                                <td>$row[customer_balance] </td>
                                <td> <a href='transfer_money.php'> <button class='btn-transfer'> Transfer Money </button> </a> </td>

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