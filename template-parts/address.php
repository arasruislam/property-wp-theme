<?php

/**
 * This Part shown whit about template 
 */

$location = get_field('location', 'option');
$time = get_field('time', 'option');
$gmail = get_field('gmail', 'option');
$call = get_field('call', 'option');

?>

<div class="contact-info">
    <?php if ($location) { ?>
    <div class="address mt-2">
        <i class="<?php echo $location['icons'] ?>"></i>
        <h4 class="mb-2">
            <?php echo $location['title'] ?>
        </h4>
        <p>
            <?php echo $location['address'] ?>
        </p>
    </div>
    <?php
    }
    ?>

    <?php if ($time) { ?>
    <div class="open-hours mt-4">
        <i class="<?php echo $time['icons'] ?>"></i>
        <h4 class="mb-2"><?php echo $time['title'] ?></h4>
        <p>
            <?php echo $time['opening_hour'] ?>
        </p>
    </div>
    <?php
    }
    ?>

    <?php if ($gmail) { ?>
    <div class="email mt-4">
        <i class="<?php echo $gmail['icons'] ?>"></i>
        <h4 class="mb-2"><?php echo $gmail['title'] ?></h4>
        <p><?php echo $gmail['mail'] ?></p>
    </div>
    <?php
    }
    ?>

    <?php if ($call) { ?>
    <div class="phone mt-4">
        <i class="<?php echo $call['icons'] ?>"></i>
        <h4 class="mb-2"><?php echo $call['title'] ?></h4>
        <p><?php echo $call['call_number'] ?></p>
    </div>
    <?php
    }
    ?>
</div>