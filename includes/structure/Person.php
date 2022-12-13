<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 ludzik">
    <div id=<?php echo $nameid;?> class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg wizytowki">
        <?php if ($hoi) { ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 kolumna">
            <h3 class="role">Head of the Institute</h3>
        </div>
        <?php } ?>
        <?php if ($vhoi) { ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 kolumna">
            <h3 class="role">Vice-head of the Institute</h3>
        </div>
        <?php } ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 kolumna">
            <img class="img-fluid" src=<?php echo "images/profiles/$picture";?> alt="Avatar" onContextMenu="return false;">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 kolumna">
            <div class="bucket">
                <h4><?php echo $name;?> <nobr><?php echo $surname;?></nobr></h4>
                <p><i class="fas fa-home"></i> <?php echo $room;?></p>
                <?php if ($homepage) { ?>
                <p>
                    <a href=<?php echo $homepage;?>><i class="fas fa-laptop-house"></i> <b>homepage</b></a> 
                </p>
                <?php } ?>
                <p>
                    <?php if ($orcid) { ?>
                        <span style="font-size: 40px">
                            <a href=<?php echo $orcid;?> class="ai ai-orcid-square" title = "Orcid"></a>
                        </span>
                    <?php } ?>

                    <?php if ($resgate) { ?>
                        <span style="font-size: 40px">
                            <a href=<?php echo $resgate;?> class="ai ai-researchgate-square" title = "Researchgate"></a>
                        </span>
                    <?php } ?>

                    <?php if ($gogschol) { ?>
                        <span style="font-size: 40px">
                            <a href=<?php echo $gogschol;?> class="ai ai-google-scholar-square" title = "Google-Scholar"></a>
                        </span>
                    <?php } ?>

                    <?php if ($scopus) { ?>
                        <span style="font-size: 40px">
                            <a href=<?php echo $scopus;?> class="ai ai-scopus-square" title = "Scopus"></a>
                        </span>
                    <?php } ?>
                </p>
                <p>
                    <?php if ($mail) { ?>
                    <div class="tooltip">
                        <a href=<?php echo "mailto:$mail";?> class="far fa-envelope"></a><span class="tooltiptext"><?php echo $mail;?></span>
                    </div>
                    <?php } ?>
                    <?php if ($dona) { ?>
                    <a href=<?php echo $dona;?>><i class="fas fa-link"></i> <b>DONA</b></a>
                    <?php } ?>
                </p>
            </div>
        </div>
        <?php if ($superv) { $pieces = explode(" ", $superv); ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3 class="supervisor">Supervisor:<a href=<?php echo "people.php#$pieces[0]$pieces[1]";?>> <b><nobr><?php echo $superv;?></nobr></b></a></h3>
        </div>
        <?php } ?>
    </div>
</div>