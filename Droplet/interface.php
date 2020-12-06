<?php
session_start();
include("config/db.php");
$sql = "SELECT * FROM users WHERE id='".$_SESSION['id']."'";
$result = mysqli_query($conn,$sql);
if(!$result)
{
    echo 'Query error:'. mysqli_error($conn);
}
$ngo = mysqli_fetch_assoc($result);



session_unset();

?>
<?php
include("templates/lognav.php");
?>








<?php
include("templates/footer.php");
?>
</html>