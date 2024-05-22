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
            <div class="icon_cont">
                <div class="search_box" >
                    <form action="" method="GET">
                        <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="search_txt" placeholder="Search...">
                        <button type="submit" class="search_btn"><i class="fa-solid fa-magnifying-glass"></i></botton>
                    </form>
               </div>
            </div>
            
        </nav>
    </section>

    <div class="row-4 d-flex flex-column justify-content-center align-items-center">
        <div class="jobcontainer">
            <?php foreach ($qua_run as $q) {?>
                <div class="jobcard">
                    <div class="cimg">
                        <img src="<?php echo $q['img_url'];?>"alt="">
                    </div>
                    <div class="jobinfo">
                        <h1 class="cname"><?php echo $q['company_name'];?></h1>
                        <p class="role"><span class="sp_text">Role: </span> <?php echo $q['post'];?></p>
                        <p class="req"><span class="sp_text">Package: </span> <?php echo $q['package'];?></p>
                        <p class="dt"><span class="sp_text">Date: </span> <?php echo $q['date'];?></p>
                        <a href="view.php?id=<?php echo $q['id'];?>" style="text-decoration: none;"   class="view_detail">View Detail</a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    
    <div class="container mt-5">
        <?php if(isset($_REQUEST['info'])){?>
            <?php if($_REQUEST['info'] == 'added'){?>
                <div class="alert alert-success" role="alert">
                Post has been added successfully
                </div>
            <?php } ?>
        <?php }?>
                
        
        

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>