<?php
include_once('topMenu.php');
    $reviews = new Reviews();
?>

<div class="container text-center">
        <?php foreach ($reviews->getReviews() as $nr => $review): ?>
        <br>
    <div class="card rounded col-6 my-3 py-2 offset-3 border-dark ">
            <a href="<?php echo $review->imageUrl; ?>"><img class="images card-img img-thumbnail col-12" src="<?php if($review->imageUrl == 'images/') echo "/images/noimage.jpg"; else echo $review->imageUrl ?>" alt="Image"/></a>
                <div class="body">
                    <p class="card-title display-4"><?php echo $review->name." ".$review->surname; ?></p>
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item py-1"><?php echo "E-mail: ".$review->email; ?></li>
                            <li class="list-group-item py-1" ><?php echo "Temat: ".$review->category; ?></li>
                            <li class="list-group-item py-1" ><?php echo "Ocena: ".$review->rating; ?></li>
                            <li class="list-group-item py-1" ><?php echo "Opis: ".$review->description; ?></li>
                            <li class="list-group-item py-1" ><?php echo "IP: ".$review->ip; ?></li>
                         </ul>
                    <?php $nr++; ?>
                        <a class="btn btn-danger" href="<?php echo "delete.php?id=".$review->id ;?>">Usuń opinię</a>
                    <?php if($review->imageUrl !='images/'):?>
                        <a class="btn btn-dark" href="<?php echo "download.php?url=".$review->imageUrl."&type=".$review->imageType."&size=".$review->imageSize ;?>">Pobierz pełny obraz</a>
                    <?php endif; ?>
                </div>
    </div>
        <?php endforeach; ?>
</div>

<?php include_once('footer.php') ?>

