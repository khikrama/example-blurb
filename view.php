<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, [
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right',
    "wow {$field['animation']}" => $field['animation']
  ]);

  // Media
  $media = '';
  if( $field['icon_enabled'] ){
    $media = '<i class="qx-icon '.$field['icon']. '"></i>';
  }elseif( $field['image'] ){
    $media = '<img class="qx-image" src="'.$field['image'].'" alt="'.$field['image_alt_text'].'" />';
  }
  // Title
  $title = '<h4>'. $field['title'] . '</h4>';

  if( $field['link']['url'] )
  {
    $url  = 'href="' . $field['link']['url'] . '"';
    $url .= ($field['link']['target']) ? ' target="_blank"' : '';  
    $title = "<a {$url}>{$title}</a>";
  }
?>

<div id="<?php echo $id; ?>" class="<?php echo $classes; ?>" data-wow-delay="<?php echo $field['animation_delay']?>s">

  <?php if($field['placement'] == 'beforeTitle'):?>

    <div class="blurb-img">
      <?php echo $media; ?>

      <div class="overlay">
        <div class="qx-blurb-content"><?php echo $field['content']?></div>
      </div>
    </div>
    
    <?php echo $title; ?>


  <?php elseif($field['placement'] == 'afterTitle') :?>
    
    <?php echo $title; ?>
    <div class="blurb-img">
      <?php echo $media; ?>

      <div class="overlay">
        <div class="qx-blurb-content"><?php echo $field['content']?></div>
      </div>
    </div>

  <?php elseif($field['placement'] == 'left') :?>
    <div class="qx-media">

      <div class="qx-media-left">
        <div class="blurb-img">
          <?php echo $media; ?>

          <div class="overlay">
            <div class="qx-blurb-content"><?php echo $field['content']?></div>
          </div>
        </div>
      </div>

      <div class="qx-media-body">
        <div class="qx-blurb-content"><?php echo $title; ?></div>
      </div>
    </div>

  <?php elseif($field['placement'] == 'right') :?>
    <div class="qx-media">
      <div class="qx-media-body">
        <div class="qx-blurb-content"><?php echo $title; ?></div>
      </div>
      <div class="qx-media-right">
        <div class="blurb-img">
          <?php echo $media; ?>

          <div class="overlay">
            <div class="qx-blurb-content"><?php echo $field['content']?></div>
          </div>
        </div>
      </div>
    </div>

  <?php endif;?>

</div>
<!-- qx-element-blurb -->