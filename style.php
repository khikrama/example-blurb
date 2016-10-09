#<?php echo $id?>{
  <?php Css::fonts($field['body_font']); ?>
  <?php Css::prop("background-color", $field['bg_color'])?>
  <?php if($field['bg_image']):?>
    background: url(<?php Css::image($field['bg_image']); ?>) no-repeat;
    <?php Css::prop('background-repeat', $field['image_repeat']);?>
    <?php Css::prop('background-position', $field['image_position']);?>
    <?php Css::prop('background-size', $field['image_size']);?>
  <?php endif;?>
   <?php if($field['border']):?>
    border-width: <?php echo $field['border_width']?>px;
    border-radius: <?php echo $field['border_radius']?>px;
    <?php Css::prop("border-style", $field['border_style'])?>
    <?php Css::prop("border-color", $field['border_color'])?>
  <?php endif;?>
  <?php Css::prop("color", $field['body_color'])?>
  <?php Css::margin($field['margin']);?>
  <?php Css::padding($field['padding']);?>
}
#<?php echo $id?> h4{
  <?php Css::fonts($field['header_font']);?>
  <?php Css::prop("color", $field['header_color'])?>
  <?php Css::margin($field['header_margin']);?>
}
#<?php echo $id?> .qx-icon{
  font-size: <?php echo $field['icon_font_size']?>px;
  <?php Css::prop("color", $field['icon_color'])?>
}
<?php if( $field['bg_hover_color'] OR 
          $field['border_hover_color'] ):?>
  #<?php echo $id?>:hover{
    <?php Css::prop('background', $field['bg_hover_color']);?>
    <?php Css::prop('border-color', $field['border_hover_color']);?>
  }
<?php endif;?>

#<?php echo $id?> .qx-icon,
#<?php echo $id?> .qx-image{
  <?php Css::margin($field['media_margin']);?>
}





#<?php echo $id?> .blurb-img {
    position: relative;
}

#<?php echo $id?> .overlay {
    position: absolute;
    top: 0;
    background: red;
    width: 100%;
    height: 100%;
    padding: 15px;
    opacity: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}

#<?php echo $id?>.qx-element-blurb:hover .overlay {
  opacity: 1;
}