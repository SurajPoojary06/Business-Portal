
<?php

session_start();
session_unset();
session_destroy();
echo "
<script>
    alert('Logged Out Sucessfully');
    window.location.href='index.php';
</script>
";

?>