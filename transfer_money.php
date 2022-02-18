<?php
include 'includes/head.php';
include 'includes/header.php';
require_once 'includes/database.php';
if(isset($_POST['submit']))
{
    $from = $_POST['from'];
    //echo $from;
    //echo "<br>";
    $to = $_POST['to'];
    //echo $_POST['to'];
    //echo "<br>";
    $amount = $_POST['amount'];
    //echo $_POST['amount'];

    $sql_get_from = "SELECT * from customers WHERE customer_id=$from";
    $query_get_from = mysqli_query($conn,$sql_get_from);
    $sql_from_array = mysqli_fetch_assoc($query_get_from);

    $sql_get_to = "SELECT * from customers WHERE customer_id=$to";
    $query_get_to = mysqli_query($conn,$sql_get_to);
    $sql_to_array = mysqli_fetch_assoc($query_get_to);
    

    if (($amount)<0)
    {
         echo '<script type="text/javascript">';
         echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
         echo '</script>';
    }
    // lose money from the from customer
    $updated_balance_loss=$sql_from_array['customer_balance']-$amount;
    $sql_upd_loss="UPDATE customers SET customer_balance=$updated_balance_loss WHERE customer_id=$from";
    mysqli_query($conn,$sql_upd_loss);
    
    // gain money to the to customer
    $updated_balance_gain=$sql_to_array['customer_balance']+$amount;
    $sql_upd_gain="UPDATE customers SET customer_balance= $updated_balance_gain WHERE customer_id=$to";
    mysqli_query($conn,$sql_upd_gain);
    
    //insert into history of transactions table
    $sender=  $sql_from_array['customer_name'];
    $receiver= $sql_to_array['customer_name'];
    $sql_transaction= "INSERT INTO transactions (sender, receiver, amount) VALUES ('$sender' , '$receiver' , $amount ); ";
    $query_transaction= mysqli_query($conn, $sql_transaction);
    echo'<div>Transfer Successful</div>';
    

}
?>

<section class="main-body-container">

    <form action="transfer_money.php" method="post" class="transfer-from" style="border: 5px solid black; background-color:#0C4DA2; width:70% ">
        <input type="number" name="from" placeholder="sender ID" style="display: block; width:50%; margin-left:23%; margin-top:8%;">
        <input type="number" name="to" placeholder="receiver ID"  style="display: block; width:50%; margin-left:23%; margin-top:8%;">
        <input type="number" name="amount" placeholder="amount"  style="display: block; width:50%; margin-left:23%; margin-top:8%;">
        <button type="submit" name="submit" class="btn" style="display: block; width:50%; margin-left:23%; margin-top:8%;">SUBMIT </button>
  

    </form>

</section>



<?php
    include 'includes/footer.php';
    ?>