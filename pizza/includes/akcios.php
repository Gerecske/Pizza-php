    <?php
        $result = akcio();
    ?>
    <div class="container py-3">
        <h1 class="text-center display-5">Akciós pizzák</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <div class="col">
                    <h2>
                        <a href="./?p=adatlap&id=<?php echo $row["ID"]; ?>">
                        <?php echo $row["nev"]; ?>
                        </a>
                    </h2>
                    <p class="fs-4"> 
                        <?php echo $row["feltet"]; ?>
                    </p>        
                    <p class="fs-4"> 
                        <b>Akciós ár (24 cm):</b>
                    </p> 
                    <p class="fs-4"> 
                        <s><?php echo $row["ar"]; ?> Ft</s> helyett
                        <b><span class="text-danger">
                            <?php echo $row["ar"]*0.9; ?> Ft
                        </span></b>
                    </p>
                    <p class="fs-4 text-end"> 
                        <a href="./?p=adatlap&id=<?php echo $row["ID"]; ?>">
                            További méretek
                        </a>
                    </p>       
                    <hr>
                </div>
            <?php } ?>
        </div>
    </div>