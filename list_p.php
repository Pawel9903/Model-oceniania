

<?php
include_once('topMenu.php');
$reviews = new Reviews();


$page = ($_GET['page']-1);
$limit = 5;
$from = $page * $limit;
$count = $reviews->getCount();
$query = $reviews->getLimit($from,$limit);
$allPages = ceil($count / $limit);

echo "<div class='container text-center'>";
foreach($query->fetchAll() as $key=>$value):?>
            <br>
    <div class="card rounded col-6 my-3 py-2 offset-3 border-dark">
            <a href="<?php echo $value->imageUrl; ?>"><img class="images card-img-top card-img img-thumbnail col-12" src="<?php if($value->imageUrl == 'images/') echo "/images/noimage.jpg"; else echo $value->imageUrl ?>" alt="Image"/></a>
                <div class="body">
                    <p class="card-title display-4"><?php echo $value->name." ".$value->surname; ?></p>
                         <ul class="list-group list-group-flush ">
                            <li class="list-group-item py-1"><?php echo "E-mail: ".$value->email; ?></li>
                            <li class="list-group-item py-1" ><?php echo "Temat: ".$value->category; ?></li>
                            <li class="list-group-item py-1" ><?php echo "Ocena: ".$value->rating; ?></li>
                            <li class="list-group-item py-1" ><?php echo "Opis: ".$value->description; ?></li>
                            <li class="list-group-item py-1" ><?php echo "IP: ".$value->ip; ?></li>
                         </ul>
                        <a class="btn btn-danger" href="<?php echo "delete.php?id=".$value->id ;?>">Usuń opinię</a>
                    <?php if($value->imageUrl !='images/'):?>
                        <a class="btn btn-dark" href="<?php echo "download.php?url=".$value->imageUrl."&type=".$value->imageType."&size=".$value->imageSize ;?>">Pobierz pełny obraz</a>
                    <?php endif; ?>
                </div>
    </div>


<?php endforeach; ?>

<?php echo "<br>";?>

    <?php for($i = 1; $i <= $allPages ; $i++): ?>
            <?php $active = ($i == ($page + 1)) ? "id = disabled" : '';?>
            <?php echo "<nav 
        class='breadcrumb d-inline bg-light'><a ".$active." class='breadcrumb-item' 
        href='list_p.php?page=$i'>
    ".$i."</a></nav>";?>
    <?php endfor; ?>
</div>

<?php include_once('footer.php') ?>