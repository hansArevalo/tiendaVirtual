
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo $data['tag_page'] ?></title>
</head>
<body>
    <div class="container ">
        <section id="<?php echo $data['page_id'] ?>">
        <h1><?php echo $data['page_title'] ?></h1>

        </section>

        <div class="bg-info clearfix">
            <p>
                <?php  echo $data['page_content']  ?>
            </p>    
        </div>

        <?php
        
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>