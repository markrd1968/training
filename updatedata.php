<?php
require "config/config.php"; 



$sql = "UPDATE MyGuests SET lastname='Dysons' WHERE id=9";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>

</body>
</html>