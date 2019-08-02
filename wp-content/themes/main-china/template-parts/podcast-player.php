
<?php
			
			
      $getPodcasts= new WP_Query(array(
        'posts_per_page'=>-1,
        'post_type'=>'podcast',
        'orderby' => 'publish_date', 
        'order' => 'DESC'

      ));
      // var_dump($getPodcasts);
      while($getPodcasts->have_posts()){
        $getPodcasts->the_post();
        $isGeneral=get_field('general_podcast');
        if($isGeneral[0]=='true'){
          $podcastSrc=get_field('media-data');
          $titleText=get_the_content();
          break;
        }else{
          $podcastSrc=get_field('media-data');
          $titleText=get_the_content();
        }
      }
      ?>
<div class="podcast-player">  
  <div class="podcast-info">
      <!-- <p class="podcast-player__title"><?php// echo $titleText ?></p> -->
      <p class="podcast-player__title">Click here to listen to an<br> 
<strong>episode sample</strong>  of China & Friends! </p>
  </div>
  <div class="podcast-controls">
    <button  id="podcast-1" class="podcast-playBtn"></button>
    <div class="progress-bar" id="podcast-1__bar">
      <div class="progress-bar__fill" id="podcast-1__audio__bar-fill">
        <div class="progress-bar__pin">	</div>
      </div>
    </div>
  </div>
  <audio id="podcast-1__audio" class="podcast-player-tag" ontimeupdate="updateProgress(this)" src="<?=$podcastSrc?>"></audio>
</div>
<?php wp_reset_postdata(); ?>