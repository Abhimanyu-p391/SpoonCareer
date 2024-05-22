<?php
    include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Spoon Career</title>
</head>
<body>
<section class="nav_menu" >
        <nav>
            <div class="title_text">
            <a href="index.php" class="til_txt">Spoon Career</a>
            </div>
            
        </nav>
    </section>



    <div class="container mt-5">
        
        <?php foreach($query as $q){?>
                    <div>
                        <h1><?php echo $q['company_name'];?></h1>
                    </div>
                    <p><?php echo $q['post']?></p>
                    <p><?php echo $q['package']?></p>
                    <p><?php echo $q['qualification']?></p>
                    <p><?php echo $q['job_des']?></p>
                    <a href="<?php echo $q['link']?>" style="text-decoration: none;">Apply Now</a>
                <?php } ?>
    
        </div>
        


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

