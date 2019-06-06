jQuery(document).ready(function () {
  // jQuery('.more-posts').on('click',(e)=>{
  //   e.preventDefault();
    var data = {
        action: 'getposts',
        page: 2,
        total:2
    };

    // с версии 2.8 'ajaxurl' всегда определен в админке
    jQuery.post( my_ajax_object.ajaxurl, data, function(response) {
        // obj = response;
        obj = JSON.parse(response);
        console.log(obj);
        print_posts(obj);
    });
  });
// });

function print_posts($obj){
  
  jQuery('#blog-posts').html($obj['posts'].map(item=>`
    <div class="post">
      <a  class="post__link" href="${item.link}">
        <div class="post-img">
            <img class="post__img" src="${item.img}?>/img/blog/blog_post_1.jpg" alt="" > 
            <div class="post-img__status">${item.category}</div>
        </div>
        <div class="post-content">
          <h3 class="post-content__title">${item.title}</h3>
          <div class="post-content__text">${item.content}</div>
        </div>
        <div class="post-info">
          <div class="post-info__date">${item.date} </div>
          <div class="post-info__heart"><svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 14.1429C8.14286 14.1429 8.28572 14.0893 8.39286 13.9821L13.9554 8.625C14.0357 8.54464 16 6.75 16 4.60714C16 1.99107 14.4018 0.428571 11.7321 0.428571C10.1696 0.428571 8.70536 1.66071 8 2.35714C7.29464 1.66071 5.83036 0.428571 4.26786 0.428571C1.59821 0.428571 0 1.99107 0 4.60714C0 6.75 1.96429 8.54464 2.03571 8.60714L7.60714 13.9821C7.71429 14.0893 7.85714 14.1429 8 14.1429Z" fill="#FF3E5C"/>
            </svg>
            </div>
        </div>
      </a>
    </div>
  `));

}


