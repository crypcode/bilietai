<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Moksleiviu duomenu baze</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"
</head>
    <body>
    <div class="container h-100">
    <header>
        <h1>Moksleiviu duomenu baze</h1>
    </header>
         <nav class="langas">
             <ul class="nav nav-pills justify-content-center">
             <?php foreach ($navigation as $href => $title) :?>
                 <li class="nav-item">
                 <a class="nav-link<?php if ($_GET['page']==$href){echo ' active';}?>"
                    href="?page=<?=$href?>"><?=$title?></a></li>
                 <?php endforeach; ?>
             </ul>


         </nav>
 <section class="h-100">
     <?php require ($_SERVER['DOCUMENT_ROOT'].'/homer/router.php')?>
 </section>

 </section>
    <footer>
        Sukurta: KITM
    </footer>
        <div class="footer">
            <p>Sukurta: KITM</p>
        </div>
    </div>

    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>







</html>