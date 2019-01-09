<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['suchfeld'])) { //Schaut ob über Post die Variable Suchfeld übergeben wurde
    include("config.php");
    $suchbegriffe = trim(htmlspecialchars($_POST['suchfeld']));


    $sqlStatement = "SELECT
                    vorname 
                 FROM 
                    test
                 WHERE 
                    vorname LIKE '%$suchbegriffe%'";


    $query = mysql_query($sqlStatement);

    echo "<u1>";
    WHILE ($row = mysqli_fetch_assoc($query)) {
        $vorname = $row['vorname'];
        echo "<li>Test $vorname</li>";
    }
    echo "</u1>";
}


?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privat-Account anlegen</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="../assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>


<body>

<div id="wrapper">
    <div id="sidebar-wrapper" style="background-color:#37434d;">
        <h1>CRM System</h1>
        <div class="mt-5">
            <div class="dropdown amk-border"><a class="btn btn-primary dropdown-toggle kein-rahmen"
                                                data-toggle="dropdown" aria-expanded="false" role="button" href="#">Accounts
                    & Produkte</a>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                                                          href="ProduktAnlegen.html">Produkt anlegen</a><a
                            class="dropdown-item" role="presentation" href="ProduktSuchen.html">Produkt suchen</a><a
                            class="dropdown-item" role="presentation" href="PrivatAccountanlegen.php">Privat-Account
                        anlegen</a><a class="dropdown-item" role="presentation" href="PrivatAccountsuchen.php">Privat-Account
                        suchen</a></div>
            </div>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle kein-rahmen" data-toggle="dropdown" aria-expanded="false"
                        type="button" style="width:248px;">Marketing
                </button>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Leads
                        anlegen</a><a class="dropdown-item" role="presentation" href="#">Leads suchen</a><a
                            class="dropdown-item" role="presentation" href="#">Kampagne anlegen</a><a
                            class="dropdown-item" role="presentation" href="#">Kampagne suchen</a><a
                            class="dropdown-item" role="presentation" href="#">Marketingplan anlegen</a><a
                            class="dropdown-item" role="presentation" href="#">Marketingplan suchen</a></div>
            </div>
        </div>
        <div></div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-right" style="background-color:#37434d;"><input type="search"
                                                                                 placeholder="Suchbegriff eingeben"
                                                                                 id="grossesFeld">
                <button class="btn btn-primary ml-2 mt-1 mb-1" type="button">Button</button>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <form action="PrivatAccountsuchen.php" method="post">
                    <h2>Privat Account suchen</h2><br>
                    <div><b>Allgemeine Daten</b></div>
                    <br>
                    <div>
                        <label style="width:109.6px;">Vorname</label>
                        <input type="text" name="suchfeld" value="<?php echo $vorname; ?>" class="ml-2"
                               style="background-color:#ffffff;">
                    </div>
                    <div><label style="width:109.6px;">Nachname</label><input type="text" class="ml-2"
                                                                              style="background-color:#ffffff;"></div>
                    <div><label style="width:109.6px;">Geburtsdatum</label><input type="text" class="ml-2"></div>
                    <div><label style="width:109.6px;">Firma</label><input type="text" class="ml-2"></div>
                    <div class="col">
                        <h1></h1><br><br><br>
                        <div><b>Hauptadresse und Kommunikationsdaten</b></div>
                        <br>
                        <div><label style="width:109.6px;">PLZ</label><input type="text" class="ml-2"></div>
                        <div><label style="width:109.6px;">Land</label><input type="text" class="ml-2"></div>
                        <div><label style="width:109.6px;">Stadt</label><input type="text" class="ml-2"></div>
                        <div><label style="width:109.6px;">Straße</label><input type="text" class="ml-2"></div>
                        <button class="btn btn-primary such-button" type="submit">Account suchen</button>
                        <br><br>
                        <?php echo "amk" . $suchbegriffe?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/js/Sidebar-Menu.js"></script>
</body>

</html>
