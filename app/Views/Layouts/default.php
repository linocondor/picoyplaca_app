<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection("title")?></title>
    
    <!-- bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?= site_url('/css/jquery.auto-complete.css')?>">
    
    <script src="https://kit.fontawesome.com/e4bb20cf71.js" crossorigin="anonymous"></script>

</head>


<body>

<!-- --------------------------------------------------------------- -->

<!-- barra de navegacion -->
<?php include('navbar.php')?>
<section class="main-content columns is-fullheight">
    
        
    
        

    <div class="container column is-10 is-fullheight">

    
        <!-- esto es para los errores flash -->
        <?php if(session()->has('warning')):?>

        <div class="notification is-warning is-light">
        <button class="delete"></button>
            <?= session('warning')?>
         </div>
        <?php endif;?>

        

        <!-- termina errores esto es para los errores flash -->    
            

            

            <section class="section">
            <?= $this->renderSection("content")?>
            </section>
            
            
            
    </div>

        
        
    
        
    

</section>

<?php include('footer.php')?>



<!-- java -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



<script src="<?= site_url('/js/app.js')?>"></script>

</body>

</html>


