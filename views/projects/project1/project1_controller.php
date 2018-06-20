<?php 

	$sql = "SELECT * FROM `wordcloud` ORDER BY `size` DESC";
	$result = $conn->query($sql);
	$results = [];
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $results[] = $row;
	    }
	} else {
	    echo "0 results";
	}
	$wordCloudData = json_encode($results);
?>