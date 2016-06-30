<?php  $link = mysqli_connect("localhost", "root", "lsded24489" , "collector") ;

// fefefeefefefefefefefe
echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>Nickname</th>';
echo '<th>Comment</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$qr_result = $link->query("SELECT * FROM `feedback`");
while($data = mysqli_fetch_array($qr_result))
{
    echo '<tr>';
    echo '<td>' . $data['name'] . '</td>';
    echo '<td>' . $data['comment'] . '</td>';
    echo '</tr>';

}
echo '</table>';
mysqli_close($link);