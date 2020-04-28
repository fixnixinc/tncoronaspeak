
<!DOCTYPE html>
<html>
<head>
  <!-- DataTables CSS library -->
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>

<!-- DataTables JS library -->
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
  <title>TamilNadu Infection Database</title>

  <script>
        $(document).ready(function() {
        $('#tn_rec').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "getdata.php",
            } );
        } );

    </script>
    
    <style>
        table thead{
             color: #E6EBF7;
        }
         table tfoot{
             color: #E6EBF7;
        }
    </style>

</head>
<body>
    <table id='tn_rec' class="display" style="width:100%;background-color: #163778;margin-top: 24px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Patient Number</th>
            <th>State Patient No.</th>
            <th>Date Announced</th>
            <th>Total Deaths</th>
            <th>Age Bracket</th>
            <th>Gender</th>
            <th>Detected City</th>
            <th>Detected District</th>
            <th>Detected State</th>
            <th>State Code</th>
            <th>Current Status</th>
            <th>Notes</th>
            <th>Contracted From</th>
            <th>Nationality</th>
            <th>Type of Transmission</th>
            <th>Status Change Date</th>
            <th>Source 1</th>
            <th>Source 2</th>
            <th>Source 3</th>
            <th>Source 3</th>
            <th>Backup Notes</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
           <th>ID</th>
            <th>Patient Number</th>
            <th>State Patient No.</th>
            <th>Date Announced</th>
            <th>Total Deaths</th>
            <th>Age Bracket</th>
            <th>Gender</th>
            <th>Detected City</th>
            <th>Detected District</th>
            <th>Detected State</th>
            <th>State Code</th>
            <th>Current Status</th>
            <th>Notes</th>
            <th>Contracted From</th>
            <th>Nationality</th>
            <th>Type of Transmission</th>
            <th>Status Change Date</th>
            <th>Source 1</th>
            <th>Source 2</th>
            <th>Source 3</th>
            <th>Source 3</th>
            <th>Backup Notes</th>
        </tr>
    </tfoot>
</table>

</body>
</html>