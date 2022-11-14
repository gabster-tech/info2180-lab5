<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country = $_GET['country'];
//$context = $_GET['context'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

<<<<<<< HEAD
if(count($_REQUEST) == 2){
	$stmt = $conn->query("SELECT cities.name, cities.district, cities.population FROM countries INNER JOIN cities ON cities.country_code=countries.code WHERE countries.name LIKE '%$country%';"); 
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$city_list = "<table>
				  <thead>
				  <tr>
					<th>City Name</th>
					<th>District</th>
					<th>Population</th>
				  </tr>
				  </thead>
				  <tbody>
				  ";
	foreach ($results as $row){
	  $city_list .= '
	  <tr>
		<td>'.$row['name'].'</td>
		<td>'.$row['district'].'</td>
		<td>'.$row['population'].'</td>
	  </tr>';
	}
  	echo $city_list;
  
  }
  else{
	$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$country_list = "<table>
				  <thead>
				  <tr>
					<th>Country Name</th>
					<th>Continent</th>
					<th>Independence Year</th>
					<th>Head of State</th>
				  </tr>
				  </thead>
				  <tbody>
				  ";
	foreach ($results as $row){
	  $country_list .= '
	  <tr>
		<td>'.$row['name'].'</td>
		<td>'.$row['continent'].'</td>
		<td>'.$row['independence_year'].'</td>
		<td>'.$row['head_of_state'].'</td>
	  </tr>';
	}
  	echo $country_list;
  }
  
?>
=======
?>
<ul>
<?php foreach ($results as $row): ?>
  <li><?= $row['name'] . ' is ruled by ' . $row['head_of_state']; ?></li>
<?php endforeach; ?>
</ul>

?>
<table>
  <thead>
    <th>Country Name </th>
    <th>Continent </th>
    <th>Independence </th>
    <th>Head of State </th>
  </thead>
<?php foreach ($results as $row): ?>
  <tr>
    <td><?= $row['name']; ?> </td>
    <td><?= $row['continent']; ?> </td>
    <td><?= $row['independence_year']; ?> </td>
    <td><?= $row['head_of_state']; ?> </td>
  </tr>
<?php endforeach; ?>
  </thead>
</table>
>>>>>>> 164b06c1e6e6d4ad4731f9cd214d5af89a232d1c
