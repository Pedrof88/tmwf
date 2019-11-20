<div class="col-3 image-wrapper">
    <a href="<?php echo $item['sizes']['large']; ?>" class="gallery-link" data-lightbox="<?php echo strtolower(str_replace(' ', '-', get_sub_field('gallery_name'))); ?>">
        <img src="<?php echo $item['sizes']['large']; ?>" alt="<?php echo $item['alt']; ?>" />
    </a>
</div>