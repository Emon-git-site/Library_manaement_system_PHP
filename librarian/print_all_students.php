<?php 
require_once '../dbcon.php';
$result = mysqli_query($con, "SELECT * FROM `students`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print All students</title>
    <style>
        body{
            margin: 0;
            font-family: sans-serif;
        }
        .print_area{
            width: 755px;
            height: 1050px;
            margin: auto;
            box-sizing: border-box;
            page-break-after: always;
        }
        .header, .page_info{
            text-align: center;
        }
        .header h3{
            margin: 0;
        }
        .data_info{}
        .data_info table{
            width: 100%;
            border-collapse: collapse;
        }
        .data_info table th,
        .data_info table td{
            border: 1px solid  black;
            padding: 4px;
            line-height: 1em;
        }
    </style>
</head>

<body >
    <div class="print_area">
        <?php
        $sl = 1;
        $page = 1;
        $total = mysqli_num_rows($result);
        echo $total;

        ?>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
        <?= page_footer() ?>  

</body>

</html>
<?php
function page_header()
{
    $data = '
    <div class="header">
            <h3>Technology, Dhaka</h3>
            <h3> It organization, Dhaka</h3>
        </div>
        <div class="data_info">
            <table>
                <tr>
                    <th>Student Id</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Reg NO</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Phone Number</th>
                    <th>Membership Date</th>
                    
                </tr>';
    return $data;
}
function page_footer()
{
    $data = '
    </table>
    <div class="page_info">Page: -1</div>
</div>
</div>';
    return $data;
}

?>