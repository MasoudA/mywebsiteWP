//Image Hover
$('a.pop img').velocity({borderRadius: 4}).velocity({boxShadowBlur:5});
$('a.pop img').mouseenter(function () {
       $(this).addClass('hover'); 
      $('.hover').velocity({scale:1.1},{
            duration: 200
        });
     }).mouseleave(function () {   
      $('.hover').velocity('reverse'); 
      $(this).removeClass('hover');
    });
  

// Image popups
$('.pop').magnificPopup({
    mainClass: 'mfp-velocity',
    type: 'image',
   closeBtnInside : true,
    gallery: {
        enabled: true
    },
    removalDelay: 500, //delay removal by X to allow out-animation
    callbacks: {
        open: function () {
            var open = "transition.swoopIn";
            this.content.velocity(open);
            $.magnificPopup.instance.next = function () {
                var self = this;               
                setTimeout(function () {
                    $.magnificPopup.proto.next.call(self);
                }, 50);  
                var effectNext = "transition.flipXIn";
                var animateOptions = {
                    delay: 200,
                    duration: !/\./.test(effectNext) ? 500 : null
                };
                if (effectNext === "fadeIn" || /In$/.test(effectNext)) {
                    this.content.velocity({
                        opacity: 0
                    }, 100);
                }
         
                this.content.velocity(effectNext, animateOptions);

            };
            $.magnificPopup.instance.prev = function () {
                var self = this;
                setTimeout(function () {
                    $.magnificPopup.proto.prev.call(self);
                }, 50);
               
                var effectPrev = "transition.flipXIn";              
                var animateOptions = {
                    delay: 200,
                    duration: !/\./.test(effectPrev) ? 500 : null
                };
                if (effectPrev === "fadeIn" || /In$/.test(effectPrev)) {
                    this.content.velocity({
                        opacity: 0
                    }, 100);
                }            
              this.content.velocity(effectPrev, animateOptions);

            };
        },
        beforeClose: function () {
            var open = "transition.swoopIn";
         var close = open.replace('In', 'Out');  
            this.content.velocity(close, {
                duration: 500
            });
        },
        closeOnContentClick: true,
    midClick: true 
    }});