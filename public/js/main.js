(function(){
    let scrollPos = 0;
    let header = document.getElementById('header');

    window.addEventListener('scroll',function(){
        scrollPos = window.scrollY;

        if(scrollPos >= 100)
            header.classList.add('scrolled-header');
        else if(scrollPos < 100)
            header.classList.remove('scrolled-header');
    })
})();