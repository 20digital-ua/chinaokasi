
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
      <p class="podcast-player__title"><?=$titleText?></p>
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
  <!--<audio id="podcast-player-tag" src="source/audio/Ariana Grande - 7 rings-320.mp3"></audio>-->
</div>