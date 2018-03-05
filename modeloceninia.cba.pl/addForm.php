<?php
include_once('topMenu.php');
include_once('addReview.php')
?>

    <div class="container">

        <form enctype="multipart/form-data" class="form-group" method="post" action="">
                <br>
            <label for="name" class="font-weight-bold">Imię:<a>*</a></label>
            <input name="addName" type="text" class="form-control" value="<?php echo $form['name']?>">
            <div class="alert-danger"><?php if (isset($error['name']))echo $error['name'] ?></div>
                <br>
            <label for="surname" class="font-weight-bold" >Nazwisko:<a>*</a></label>
            <input name="addSurname" type="text" class="form-control" value="<?php echo $form['surname']?>">
            <div class="alert-danger"><?php echo $error['surname'] ?></div>
            <br>
            <label for="email" class="font-weight-bold" >Email:<a>*</a></label>
            <input name="addEmail" type="text" class="form-control" value="<?php echo $form['email']?>">
            <div class="alert-danger"><?php echo $error['email'] ?></div>
                <br>
            <span class="font-weight-bold" >Wybierz temat:<a>*</a></span>
        <select name="addCategory" class="custom-select">
            <option value="Ocena produktu">Ocena produktu</option>
            <option value="Ocena firmy">Ocena firmy</option>
            <option value="Inne">Inne</option>
        </select>
                <br>
                <br>
        <span class="float-left py-4 font-weight-bold">Ocena:<a>*</a></span>
        <div class="stars">
            <input id="star5" type="radio" name="star" value="5"/>
            <label for="star5">5</label>
            <input id="star4" type="radio" name="star" value="4" />
            <label for="star4">4</label>
            <input id="star3" type="radio" name="star" value="3" checked="checked"/>
            <label for="star3">3</label>
            <input id="star2" type="radio" name="star" value="2"/>
            <label for="star2">2</label>
            <input id="star1" type="radio" name="star" value="1"/>
            <label for="star1">1</label>
            <span></span>
        </div>
                <br>
            <div class="alert-danger"><?php echo $error['rating'] ?></div>
            <br>
            <span class="font-weight-bold" >Opis:</span>
            <textarea name="AddDescription" class="form-control"><?php echo $form['description'];?></textarea>
                <br>
            <span class="font-weight-bold" >Dodaj zdjęcie (dopuszczalny format png lub jpg)</span>
            <div class="custom-file">
                <label class="custom-file-label" for="customFile"></label>
                <input name="image" type="file" class="custom-file-input" id="customFile">
            </div>
            <div class="alert-danger"><?php echo $error['image'] ?></div>

            <span class="small">* - pola obowiązkowe</span>
                <br>
            <button class="btn btn-outline-success" name="addSubmit">Dodaj Recenzje</button>

        </form>
    </div>
<script rel="script" src="js/custom.js" type="text/javascript"></script>
<?php include_once('footer.php') ?>