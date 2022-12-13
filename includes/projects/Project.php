<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="wizytowki">
        <h3><?php echo $title;?></h3>
        <!-- <p><a href=""><i class="fas fa-link"></i> <b>NCN SONATA BIS</b></a></p> -->
        <p></p>
        <?php if ($link) { ?>
            <p><a href=<?php echo $link;?>><i class="fas fa-link"></i> <b><?php echo $type;?></b></a></p>
        <?php } else { ?>
            <p><b><?php echo $type;?></b></a></p>
        <?php } ?>
        <p><i class="fas fa-hourglass-half"></i> <?php echo $dates;?></p>
        <?php if ($NameSurname) { $pieces = explode(" ", $NameSurname); ?> 
        <p>Principal investigator: <b><?php echo $NameSurname;?></b> <a href=<?php echo "people.php#$pieces[0]$pieces[1]";?>><i class="fas fa-user-circle"></i> <b>personal-card</b></a></p>
        <?php } ?>
    </div>
</div>