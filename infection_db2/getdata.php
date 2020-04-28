<?php
// Database connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'Admin1234#@',
    'db'   => 'corona',
    
);

// DB table to use
$table = 'tn_records';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database. 
// The `dt` parameter represents the DataTables column identifier.
$columns = array(

    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'patient_number','dt' => 1 ),
    array( 'db' => 'state_pt_number','dt' => 2 ),
    array( 'db' => 'date_announced','dt' => 3 ),
    array( 'db' => 'age_bracket','dt' => 4 ),
    array( 'db' => 'detected_city','dt' => 5 ),
    array( 'db' => 'detected_district','dt' => 6 ),
    array( 'db' => 'detected_state','dt' => 7 ),
    array( 'db' => 'state_code','dt' => 8 ),
    array( 'db' => 'current_status','dt' => 9 ),
    array( 'db' => 'notes','dt' => 10 ),
    array( 'db' => 'contracted_from','dt' => 11 ),
    array( 'db' => 'nationality','dt' => 12 ),
    array( 'db' => 'type_of_transmission','dt' => 13 ),
    array( 'db' => 'status_change_date','dt' => 14 ),
    array( 'db' => 'source_1','dt' => 15 ),
    array( 'db' => 'source_2','dt' => 16 ),
    array( 'db' => 'source_3','dt' => 17 ),
    array( 'db' => 'backup_notes','dt' => 18 ),
    
);

// Include SQL query processing class
require( 'ssp.class.php' );

// Output data as json format
echo json_encode(
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);

