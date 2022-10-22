<?php 
 
// Load the database configuration file 
include_once '../class.php'; 
 
// Fetch records from database 

$query = $conn->query("SELECT * FROM fem ORDER BY created_at DESC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Equipments-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Name of Owner', 'Barangay/Location', 'Type of owner (Individual, Trader, Coop/ Association, Corporation, Enterprise, Government, Etc.)', 'Facility/ Equipment/ Machinery', 'No. of Units', 'Rated Capacity', 'Facility Brand', 'Mode of Acquisition (Grant, Loan, Counterparting, other)', 'Cost of Acquisition (Php)', 'Year Acquired', 'Use of Facility (Private Use, Custom Hire, Public Use, Coop, Govt. Use, Etc.)', 'Facility Condition (Functiona, For Repair)', 'Commodity', 'Engine Brand', 'Engine Horsepower (Hp)','Added On'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['name_owner'], $row['location'], $row['type_owner'], $row['fem'], $row['units'], $row['capacity'], $row['brand'], $row['mode_aquisition'], $row['cost_aquisition'], $row['yr_acquired'], $row['use_facility'], $row['facility_cond'], $row['commodity'], $row['engine_brand'], $row['horsepower'], $row['created_at']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>