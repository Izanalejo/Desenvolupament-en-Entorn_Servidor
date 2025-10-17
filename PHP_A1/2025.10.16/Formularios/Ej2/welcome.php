<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

<pre>
   <?php print_r($_GET); 
   echo $_SERVER["PHP_SELF"]?>
</pre>

</body>
</html>