<?php
/**1-100 เป็นเลขคู่หรือคี่ */
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
        <h1 class = "col h2 text-center">เลขคี่-เลขคู่</h1>
        <div class = "row">
            <div class = "col h2 text-center">
                <?php
                echo "<br>";
                for($i = 1 ;$i <=100;$i++){
                    if($i%2 == 0){
                        echo $i."="."เลขคู่";
                        echo "<br>";
                    }else{
                        echo $i."="."เลขคี่";
                        echo "<br>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</body>
</html>