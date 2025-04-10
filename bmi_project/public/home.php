محمد العيد بن عمر, [10-04-2025 6:42]
<?php
session_start();
session_destroy();
header("Location: login.php");
exit;

محمد العيد بن عمر, [10-04-2025 6:47]
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}