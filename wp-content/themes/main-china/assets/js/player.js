
let player=jQuery('.podcast-player-tag');
let playBtn=jQuery('.podcast-playBtn');
var progress=jQuery('#progress-bar');
var progressFill=jQuery('#progress-bar__fill');
var progressPin=jQuery('.progress-bar__pin');




jQuery(document).on('click','.podcast-playBtn',function(){
    togglePlay(this.id);
})




// Methods
function togglePlay(p){
    
    var playAudio=jQuery('#'+p+'__audio')[0];
    var playButton=jQuery('#'+p);
    
    if (playAudio.paused) {
        playAudio.play();
        playButton.addClass('playing');
        
    } else {
        playAudio.pause();
        playButton.removeClass('playing');
    }   
}
function updateProgress(playAudio){
    var currentTime = playAudio.currentTime;
    var percent = (100/playAudio.duration)*currentTime;

    jQuery('#'+playAudio.id+'__bar-fill').css({
        'width':percent+'%'
    });
}


// function progressModify(){
//     var p=jQuery('#podcast-1__audio');
//     var m = true;
//     p[0].pause();
//     p[0].currentTime+=5;
//     console.log(m);
//  }



