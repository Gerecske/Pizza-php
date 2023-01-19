<?php
    //reg
    $vnev = "";
    $knev = "";
    $user = "";
    $pass = "";
    $flag = "";
    $error = array("nev" => "", "ar" => "", "feltet" => "");
    if(isset($_POST["btn-submit"])){
        
        if(empty($_POST["nev"])){
            $error["nev"] = "Nem írtál be nevet!!!!";
        }

        if(empty($_POST["ar"])){
            $error["ar"] = "Nem írtál be árat!!!!";
        }
        if(array_filter($error)){
            $flag = false;
        }
        else{
            Add();
            header("Location: index.php");
        }
    }
?>
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Pizza felvétele</h1>
        <div class="card m-auto" style="width: 20rem;">
            <div class="card-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nev" class="form-label">Neve</label>
                        <input type="text" name="nev" class="form-control" placeholder="pl.: Magyaros">
                        <?php if($flag == false) {?>
                            <p> <?php echo $error["nev"]; ?></p>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="ar" class="form-label">24 cm ár</label>
                        <input type="text" name="ar" class="form-control" placeholder="pl.: 2000">
                        <?php if($flag == false) {?>
                            <p> <?php echo $error["ar"]; ?></p>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="feltet" class="form-label">Hozzávalók</label>
                        <input type="text" name="feltet" class="form-control" placeholder="pl.: szalámi, gomba">
                        <?php if($flag == false) {?>
                            <p> <?php echo $error["feltet"]; ?></p>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="btn-submit" class="btn btn-primary btn-block d-block mx-auto">Felvétel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>