
var player=jQuery('#podcast-player-tag')[0];
var playBtn=jQuery('#podcast-playBtn');
var progress=jQuery('#progress-bar');
var progressFill=jQuery('#progress-bar__fill');



    // playBtn.click(togglePlay);
    // player.addEventListener("timeupdate", updateProgress);

// Events
// playBtn.click(togglePlay);
// player.addEventListener("timeupdate", updateProgress);
// document.addEventListener('click',(e)=>{
//     if(e.target && e.target.id=='podcast-playBtn'){
        
//         player.addEventListener("timeupdate", updateProgress);
//     }
// });
//
// player.ontimeupdate=function(){updateProgress()};
jQuery(".podcast-wrapper").on("click", '#podcast-playBtn', function(event) { 
    playBtn.click(togglePlay);
    player.addEventListener("timeupdate", updateProgress);
});
    
// player.addEventListener("timeupdate", updateProgress);

// Methods
function togglePlay(){
    if (player.paused) {
        player.play();
        playBtn.addClass('playing');
    } else {
        player.pause();
        playBtn.removeClass('playing');
    }   
}
function updateProgress(){
    var currentTime = player.currentTime;
    var percent = (100/player.duration)*currentTime;

    progressFill.css({
        'width':percent+'%'
    });
}






