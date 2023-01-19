    <?php
        $result = adatlap();
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container py-3">
        <h1 class="text-center display-5"><?php echo $row["nev"]; ?> pizza</h1>
        <p class="fs-4"><?php echo $row["feltet"]; ?></p>
        <?php if($row["akcios"]==1)  { ?>
            <p class="fs-4"><b>
                Ez a pizza most akciós a készlet erejéig - 10%
            </b></p>
            <p class="fs-4">Árak:</p>
                <ul class="fs-4">
                    <li>24 cm: <s><?php echo $row["ar"]; ?> Ft</s> helyett
                        <b><span class="text-danger">
                            <?php echo $row["ar"]*0.9; ?> Ft
                        </span></b></li>
                    <li>32 cm: <s><?php echo $row["ar"]*1.25; ?> Ft</s> helyett
                        <b><span class="text-danger">
                            <?php echo ($row["ar"]*1.25)*0.9; ?> Ft
                        </span></b></li>
                    <li>45 cm: <s><?php echo $row["ar"]*1.5; ?> Ft</s> helyett
                        <b><span class="text-danger">
                            <?php echo ($row["ar"]*1.5)*0.9; ?> Ft
                        </span></b></li>
                </ul>
        <?php } else { ?>
            <p class="fs-4"><b>
                Ez a pizza nem akciós, lehet hogy jövő héten az lesz
            </b></p>
            <p class="fs-4">Árak:</p>
                <ul class="fs-4">
                    <li>24 cm: <?php echo $row["ar"]; ?> Ft</li>
                    <li>32 cm: <?php echo $row["ar"]*1.25; ?> Ft</li>
                    <li>45 cm: <?php echo $row["ar"]*1.5; ?> Ft</li>
                </ul>
        <?php }?>
    </div>