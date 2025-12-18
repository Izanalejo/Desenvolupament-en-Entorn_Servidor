<?php
if (is_array($_SESSION['info']) == TRUE) {
    foreach ($_SESSION['info'] as $info) {
        echo "
$info

";
    }
} else {
    echo "{$_SESSION['info']}";
}
?>
<?php
if (is_array($_SESSION['error']) == TRUE) {
    foreach ($_SESSION['error'] as $error) {
        echo "
$error

";
    }
} else {
    echo "
{$_SESSION['error']}

";
}
?>