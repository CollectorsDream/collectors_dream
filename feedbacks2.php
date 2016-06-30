<?php  $link = mysqli_connect("localhost", "root", "lsded24489" , "collector") ;

echo '<table border="1">';
echo '<thead>';
//echo '<td>';
echo '<tr>Nickname</tr>';
echo '</br>';
//echo '<td></td>';
echo '<tr>Comment</tr>';
echo '</br>';
echo '</br>';
//echo '</td>';
echo '</thead>';
echo '<tbody>';
$qr_result = $link->query("SELECT * FROM `feedback`");
while($data = mysqli_fetch_array($qr_result))
{
   // echo '<td>';
    echo '<tr>' . $data['name'] . '</tr>';
    echo '</br>';
   //echo '<td>' . '' . '</td>';
    echo '<tr>' . $data['comment'] . '</tr>';
    echo '</br>';
    echo '</br>';
   // echo '</td>';

}
echo '</table>';
mysqli_close($link);

/*
 <?php  $link = mysqli_connect("localhost", "root", "lsded24489" , "collector") ;

echo '<table border="1">';
echo '<thead>';
echo '<tr>';
echo '<th>Nickname</th>';
echo '<th></th>';
echo '<th>Comment</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$qr_result = $link->query("SELECT * FROM `feedback`");
while($data = mysqli_fetch_array($qr_result))
{
    echo '<tr>';
    echo '<td>' . $data['name'] . '</td>';
    echo '<td>' . '' . '</td>';
    echo '<td>' . $data['comment'] . '</td>';
    echo '</tr>';

}
echo '</table>';
mysqli_close($link);
 */