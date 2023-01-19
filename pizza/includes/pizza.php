    <?php
        $result = all();
    ?>
    <div class="container py-3">
        <h1 class="text-center display-5">Összes pizzánk</h1>
        <p class="fs-4">Rendezés: </p>
        <table class="table table-striped">
            <tr>
                <th>Név</th>
                <th>Feltétek</th>
                <th>24 cm</th>
                <th>32 cm</th>
                <th>45 cm</th>
                <th></th>
            </tr>
            <?php while($row=mysqli_fetch_array($result)) { ?>
                <tr>
                    <td>
                        <a href="./?p=adatlap&id=<?php echo $row["ID"]; ?>">
                            <?php echo $row["nev"]; ?>
                        </a>
                    </td>
                    <td><?php echo $row["feltet"]; ?></td>
                    <td>
                        <?php if($row["akcios"]==1) { ?>
                            <b><span class="text-danger">
                                <?php echo $row["ar"]*0.9 ?> Ft
                            </span></b>
                        <?php } else { ?>
                            <?php echo $row["ar"] ?> Ft
                        <?php }?>
                    </td>
                    <td>
                    <?php if($row["akcios"]==1) { ?>
                            <b><span class="text-danger">
                                <?php echo $row["ar"]*0.9*1.25 ?> Ft
                            </span></b>
                        <?php } else { ?>
                            <?php echo $row["ar"]*1.25 ?> Ft
                        <?php }?>
                    </td>
                    <td>
                    <?php if($row["akcios"]==1) { ?>
                            <b><span class="text-danger">
                                <?php echo $row["ar"]*0.9*1.5 ?> Ft
                            </span></b>
                        <?php } else { ?>
                            <?php echo $row["ar"]*1.5 ?> Ft
                        <?php }?>
                    </td>
                    <td></td>
                </tr>
            <?php } ?>
        </table>
    </div>