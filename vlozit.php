<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Amatic+SC&family=Gochi+Hand&family=Kaushan+Script&family=Nerko+One&family=Rock+Salt&family=Tangerine&display=swap');
    </style>
    <title>-SQL-/---DIMKAINDA.GQ---</title>
</head>
<body>   
    <nav class="navbar navbar-expand">
            <ul class="navbar-nav m-auto">
                <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#Projects" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container text-white text-center">
        <h2>-PHP+SQL-</h2>
        <p>Příklad vytvoření jednoduché databáze pro evidenci knih. Zkuste si vložit knihu, vyhledat, případně zobrazit všechny evidované knihy.</p>
        <a href="https://github.com/dimarenkoff/knihovna">open &lt / &gt code</a>
    </div>
    <br>
    <div id="knihovna" class="container" align="center">
        <img id="books" src="images/books.png" height="150">
        <br><br>
        <?php
            if (!($spojeni = mysqli_connect("localhost","knihoman","kniha","knihovna")))
            {
                die("Nelze se připojit k DB!</body></html>");
            }
            mysqli_query($spojeni,"SET NAMES 'utf8'");
            if (isset($_POST["ISBN"]))
            {
                mysqli_query($spojeni,"INSERT INTO seznamknih(ISBN,jmeno, prijmeni, nazev, popis) 
                VALUES('" . 
                addslashes($_POST["ISBN"]) . "', '" . 
                addslashes($_POST["fname"]) . "', '" .
                addslashes($_POST["lastname"]) . "', '" .
                addslashes($_POST["name"]) . "', '" . 
                addslashes($_POST["popis"]) . "')");
    
                echo "<div align='center'>---Uspesne vlozeno---</div><br>";
            }  
            mysqli_close($spojeni);

            echo 
            '
            <div id="menu">
                <a id="menuknihovna" href="vlozit.php">*Vložit*</a>
                <a id="menuknihovna" href="vyhledat.php">*Vyhledat*</a>
                <a id="menuknihovna" href="seznam.php">*Zobrazit všechny*</a>
            </div>
            <form method="POST" action="vlozit.php">
                <br>
                <span class="display-6 text-center">Přidej knihu do evidence:</span>
                <br><br>
                <div class="form-group">                                             
                    <input type="text" name="ISBN" class="form-control form-control-lg" placeholder="Zádejte ISBN kod">
                    <br>
                    <input type="text" name="fname" class="form-control form-control-lg" placeholder="Příjmení autora">
                    <br>
                    <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Křestní jméno autora">
                    <br>
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Název knihy">
                    <br>
                    <input type="textarea" name="popis" class="form-control form-control-lg" placeholder="Popis nebo komentář">
                </div>
                <br>
                <input type="submit" class="btn btn-secondary" value="Uložit">
                <br><br>
            </form>
            </div>
            '
        ?>
        <section id="footer" class="bg-secondary p-3">
            <br>
            <div class="container text-center" id="adress">--2021--<br>---DIMKAINDA.GQ---</div>
            <br>
            <div class="container text-center" id="icons">
                <span>You will not find us on:</span><br />
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-tiktok"></i>
            </div>
        </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s">
    </script>
</body>
</html>