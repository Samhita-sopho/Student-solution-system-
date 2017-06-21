<?php
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = '';
     $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }

    mysql_select_db('hackathon');
    $sql = "SELECT * FROM policy" ;
    $result = mysql_query($sql, $conn);
    echo mysql_numrows($result);
    echo "<table border='1'>
    <tr>
    <th>Policy ID</th>
    <th>Faculty ID</th>
    <th>Link</th>
    </tr>";

    while($row = mysql_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['p_id'] . "</td>";
    echo "<td>" . $row['f_id'] . "</td>";
    echo "<td>" . $row['p_link'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    mysql_close($conn);
?>