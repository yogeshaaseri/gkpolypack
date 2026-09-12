function createInfoElement(e,n){$(".value-chain__center").append(`<span class="value-chain__tooltip">
            <h3 class="value-chain__tooltip-title">${e}</h3>
            <p class="value-chain__tooltip-text">${n}</p>
        </span>`)}

function showDefaultRecycling(r){
    r(".value-chain__tooltip").remove();
    r(".value-chain__nav-item").removeClass("active");
    var $defaultItem=r(".value-chain__nav-list--left .value-chain__nav-item").first();
    if($defaultItem.length){
        $defaultItem.addClass("active");
        createInfoElement($defaultItem.find(".value-chain__nav-label").text(),$defaultItem.find(".value-chain__nav-info").text());
        setTimeout(function(){r(".value-chain__tooltip").last().addClass("value-chain__tooltip--active")},5);
    }
}

!function(r){r(document).ready(function(){
    showDefaultRecycling(r);

    r(".value-chain__nav-item").on("mouseenter focus",function(){
        const e=r(this);var n;
        e.hasClass("active")||(
            r(".value-chain__tooltip").addClass("value-chain__tooltip--exit").removeClass("value-chain__tooltip--active"),
            setTimeout(function(){r(".value-chain__tooltip").remove();},150),
            r(".value-chain__nav-item").removeClass("active"),
            e.addClass("active"),
            n=e.find(".value-chain__nav-info").text(),
            setTimeout(function(){createInfoElement(e.find(".value-chain__nav-label").text(),n);setTimeout(function(){r(".value-chain__tooltip").last().addClass("value-chain__tooltip--active")},5);},160)
        )
    });

    r(".value-chain__nav-item").on("mouseleave blur",function(){
        const e=r(this);
        if(e.hasClass("active")){
            var $infoEl=r(".value-chain__tooltip");
            $infoEl.addClass("value-chain__tooltip--exit").removeClass("value-chain__tooltip--active");
            setTimeout(function(){showDefaultRecycling(r);},200);
        }
    });

    if(r(window).innerWidth()<=767&&new Swiper(".news-section__slider",{loop:!1,slidesPerView:1.25,spaceBetween:20,navigation:{nextEl:".home-next",prevEl:".home-prev"}}),r(window).innerWidth()<=767)new Swiper(".differentiators__slider",{loop:!1,slidesPerView:1.15,spaceBetween:5,navigation:{nextEl:".home-next",prevEl:".home-prev"}});else{const c=r(".differentiators__card");let n=c.first(),i=!1,e=null,t=null;const a=r(".differentiators__play");let s="play";a.on("click",function(){i=!i,s="play"===s?"pause":"play",$img=a.find("img"),"play"===s?$img.attr("src",$img.attr("src").replace("play","pause")):$img.attr("src",$img.attr("src").replace("pause","play"))}),c.on("mouseenter",function(){i=!0,n.removeClass("active"),n=r(this).addClass("active"),clearInterval(e)}),c.on("mouseleave",function(){"pause"!==s&&(i=!1,l(),e=setInterval(function(){const e=n.next().hasClass("differentiators__card")?n.next():c.first();n.removeClass("active"),n=e.addClass("active"),l()},4e3))}),n.addClass("active"),e=setInterval(function(){const e=n.next().hasClass("differentiators__card")?n.next():c.first();n.removeClass("active"),n=e.addClass("active"),l()},4e3);let o;function l(){let e=0;o=n.find(".differentiators__progress");o.css("width","0"),t&&clearInterval(t),t=setInterval(function(){100<=e||i?(clearInterval(t),e=0):e+=.2,o.css("width",e+"%")},8)}l()}

    new Swiper(".clients",{loop:!0,slidesPerView:2,spaceBetween:20,navigation:{nextEl:".clients__btn-next",prevEl:".clients__btn-prev"},pagination:{el:".swiper-pagination",type:"bullets"},breakpoints:{768:{slidesPerView:4,spaceBetween:30},1200:{slidesPerView:6,spaceBetween:30}}});
    r(".scroll-down").on("click",function(e){e.preventDefault(),r([document.documentElement,document.body]).animate({scrollTop:r("#anchor").offset().top-100},1e3)});
})}(jQuery)
