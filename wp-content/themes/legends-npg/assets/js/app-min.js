function delay(i){setTimeout(function(){window.location=i},2e3)}$(".modal-video").show(),$(".modal-video-trigger").click(function(){$(this).parents(".section").find(".modal-video").addClass("active"),$(this).parents(".section").find(".section--hero__info-modal").addClass("active")}),$(".modal-video__close").click(function(){$(".modal-video").removeClass("active");var i=$(this).parents(".modal-video").find("iframe");$(i).attr("src",$(i).attr("src")),$(i).attr("src",$(i).attr("data-src"))}),$(".info-modal__close").click(function(){$(this).parent().removeClass("active")}),$(".direct-video-link").click(function(){$(this).parents(".section").find(".section--hero__info-modal").addClass("active")});