<?php
echo "<h2>Welcome!</h2>";

$user = $_POST["user"];
$pass = $_POST["pass"];
$v1 = $_POST["vehicle1"]; //cost per v1 = 120
$v2 = $_POST["vehicle2"]; //cost per v2 = 2500
$v3 = $_POST["vehicle3"]; //cost per v3 = 4000
$ship = $_POST["shipping"]; 


$sub1 = $v1*120;
$sub2 = $v2*2500;
$sub3 = $v3*4000;

$total = $sub1 + $sub2 + $sub3;






echo "<h4>Username: $user<br></h4>";
echo "<h4> Password: $pass<br></h4>";

echo "<h3>Receipt</h3>\n";

echo "<table>
<thead>
<tr>
    <th></th>
    <th>Quantity</th>
    <th>$/each</th>
    <th>Subtotal</th>
</tr>
</thead>
<tbody>
<tr>
    <td><b>Vehicle 1:</b></td>
    <td>$v1</td>
    <td>120</td>
    <td>$$sub1</td>
</tr>
<tr>
    <td><b>Vehicle 2:</b></td>
    <td>$v2</td>
    <td>2500</td>
    <td>$$sub2</td>
</tr>
<tr>
    <td><b>Vehicle 3:</b></td>
    <td>$v3</td>
    <td>4000</td>
    <td>$$sub3</td>
</tr>
</tbody>
</table>";

echo "<p><b>Total:</b> $$total</p>";


?>