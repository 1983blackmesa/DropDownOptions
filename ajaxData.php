<?php
// Include the database config file
include_once 'db/dbConfig.php';

if(!empty($_POST["make_id"])){
    // Fetch model data based on the specific make
	$query = "SELECT * FROM model WHERE make_id = ".$_POST['make_id']." AND status = 1 ORDER BY model_name ASC";
    $result = $db->query($query);
    
    // Generate HTML of model options list
    if($result->num_rows > 0){
        echo '<option value="">Select Model</option>';
        while($row = $result->fetch_assoc()){ 
            echo '<option value="'.$row['model_id'].'">'.$row['model_name'].'</option>';
        }
    }else{
        echo '<option value="">Model not available</option>';
    }
}elseif(!empty($_POST["model_id"])){
    // Fetch part data based on the specific model
	$query = "SELECT * FROM part WHERE model_id = ".$_POST['model_id']." AND status = 1 ORDER BY part_name ASC";
    $result = $db->query($query);
    
    // Generate HTML of part options list
    if($result->num_rows > 0){
        echo '<option value="">Select part</option>';
        while($row = $result->fetch_assoc()){ 
            echo '<option value="'.$row['part_id'].'">'.$row['part_name'].'</option>';
        }
    }else{
        echo '<option value="">Part not available</option>';
    }
} //end else if

?>
