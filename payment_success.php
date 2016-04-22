<?php

error_reporting(0);
include"config/connection.php";	
$tableName = $_GET['table_name'];
$type = $_GET['type'];
$action = $_GET['status'];
$id = $_GET['id'];
$state = $_GET['state'];

$redirectUrl = $type.'_inner.php?code='.$state;

if($action == 'success') {
    $isPayed = 'Y';
    
    $sql = "UPDATE $tableName SET isPayed = '".$isPayed."' WHERE id = ".$id;
    $query = mysql_query($sql);
    if($query) {
        ?>
        <script>
            alert('Payment successful');
            window.location.href = '<?php echo $redirectUrl;?>';
        </script>
        <?php
    } else {
        ?>
        <script>
            alert('Something went wrong');
            window.location.href = '<?php echo $redirectUrl;?>';
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert('Payment has failed');
        window.location.href = '<?php echo $redirectUrl;?>';
    </script>
    <?php
}


?>