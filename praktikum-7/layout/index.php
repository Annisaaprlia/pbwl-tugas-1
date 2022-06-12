<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musik dan Album</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/stylee.css">
</head>
<body>

    <main>
        <header>
            <img src="<?php echo ASSET; ?>images/FIX.png" width="1080" height="300" bottom="15" alt="img">
        </header>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>  
                <li>
                    <a href="index.php?page=login_form">Login</a>
                </li>  
               

            </ul>
            
        </nav>
        <section>
            <?php 
            
            if (isset($_GET['page'])){
                    include $_GET['page']. ".php";
            } else{
                    include "main_index.php";
            }


            ?>
        </section>
        <footer>
            Copyright &copy; 2022
        </footer>
    </main>
</body>
</html>