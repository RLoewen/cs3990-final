<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- title and meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="description" content="" />
	<title> ComputUs </title>
	
	<!-- css -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css" />
	

	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/computus.js"></script>
	

		
</head>

<body>
	<div id="wrapper">

	<header>
		
		<div class="container clearfix">
        <h1 id="logo">
            ComputUs
        </h1>
        <nav>
            <a onclick="myFunction()" class="btn dropbtn" href="#Products">Products</a>
            <a class="btn" href="about.html">About Us</a>
            <a class="btn" href="#ACart">Cart</a>
            
        </nav>
	
    </div>
	<div id="myDropdown" class="dropdown-content">
			    <a href="#Desktops">Desktops</a>
			    <a href="#Laptops">Laptops</a>
			    <a href="#Accessories">Accessories</a>
			  </div>
	</header>


	<div id="main">

    <div id="content">
        <section>
            <div class="container">
            
                <h1>Header Resize On Scroll with Animations</h1>
                <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computusdb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ProductID, ProductName, ProductBrand FROM product_tbl"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>


            </div>
        </section>
        
        <section>
            
            <div class="container">



               </div>
        
    </section>
        <section class="color">
            <div class="container">
                </div>
        </section>
        <section>
            <div class="container">
                </div>
        </section>
    </div>
</div><!-- #main -->

<footer>
	<p>Copyright &#169; ComputeUs.com...NotReally</p>
</footer>
</div> <!-- wrapper -->
</body>



</html>