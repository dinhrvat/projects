<?php
$mysqli = new mysqli("localhost", "jaxcode79", "jaxcode79", "jaxcode79");
if($mysqli->connect_error) {
  exit('Could not connect');
}
$sql = "SELECT CustomerID, CompanyName, ContactName, Address, City, PostalCode, Country
FROM MyCustomers WHERE customerid = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";

echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $cid . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>CompanyName</th>";
echo "<td>" . $cname . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>ContactName</th>";
echo "<td>" . $name . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $adr . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>PostalCode</th>";
echo "<td>" . $pcode . "</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Country</th>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";
?>