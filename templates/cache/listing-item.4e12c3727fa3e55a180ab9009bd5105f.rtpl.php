<?php if(!class_exists('raintpl')){exit;}?><div class="listing-item">
    <img src="<?php echo $image["src"];?>" alt="<?php echo $image["alt"];?>" />
    <div class="additional">
        <h3><?php echo $title;?></h3>
        <p class="description"><?php echo $description;?></p>
        <a href="mailto:<?php echo $email;?>" class="email"><?php echo $email;?></a>
    </div>
</div>