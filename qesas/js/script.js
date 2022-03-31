var cookies = document.cookie.split('cookies=')[1] !== null && document.cookie.split('cookies=')[1] !== undefined ? (document.cookie.split('cookies=')[1]).split(';')[0] : document.cookie.split('cookies=')[1];

function s(s){
    var sd = document.querySelector(s);
    if(sd === undefined || sd === null){
        return document.querySelector('.null');
    }else{
        return sd;
    }
}

document.onreadystatechange = function(){
    if(this.readyState === "complete"){
        if(window.innerWidth <= 1200){
            s('.side > i').click();
        }

        if(window.innerWidth <= 850){
            s('.search > article > section > h2 > .fa-times').click();
        }

        setTimeout(function(){
            if(cookies != 'true'){
                s('.cookies').classList.add('showen'); 
            }
        }, 1000);

        document.addEventListener('click', function (event){
            var t = event.target;
            if(t.classList.contains('fa-exclamation') && t !== s('.floated > article:not(.overlay) > h3 > .fa-exclamation')){
                s('.report').classList.remove('hidden');
                s('body').classList.add('unscrolable');
                esc()
            }
        })
    }
}

function hideSide(div){
    div.parentElement.classList.toggle('hidden');
    s('.QMcontainer').classList.toggle('opened');
}

function activeTgl(div){
    if(div.innerHTML === "الكل"){
        var actives = div.parentElement.querySelectorAll('.active');
        actives.forEach(function(active){
            active.classList.remove('active');
        });
        div.classList.add('active');
    }else{
        var firstElement = div.parentElement.querySelector('span');
        if(firstElement.innerHTML === "الكل"){
            firstElement.classList.remove('active');
            div.classList.toggle('active');

            var actives = div.parentElement.querySelectorAll('.active');
            var spans = div.parentElement.querySelectorAll('span');
            if(actives.length === spans.length - 1){
                activeTgl(spans[0]);
            }
        }else{
            div.classList.toggle('active');
            s(div.dataset.type).classList.toggle('hidden');
        }
    }
}

function hide(div){
    div.classList.add('hidden');
    s('body').classList.remove('unscrolable');
}

function closetgl(div){
    div.parentElement.classList.toggle('closed');
    
    if(div.parentElement.classList.contains('closed')){
        div.parentElement.classList.toggle('closed1');
    }else{
        setTimeout(function(){
            div.parentElement.classList.toggle('closed1');
        }, 300)
    }
}

document.onkeydown = function (event){
    if(event.key === "Escape"){
        var a = s('.floated:not(.hidden),.search:not(.hidden)');
        
        hide(a);
    }
}

function hideFilter(){
    s('.search > article > section').classList.toggle('hidden');
    s('.search > article > section > h2 > .fa-times').classList.toggle('hidden');
}

function esc(){
    var escCookie = document.cookie.split('esc=')[1] !== null && document.cookie.split('esc=')[1] !== undefined ? (document.cookie.split('esc=')[1]).split(';')[0] : document.cookie.split('esc=')[1];
    
    if(escCookie == 'true'){
        return false;
    }

    s('.esc').classList.remove('hidden')
    setTimeout(function (){
        s('.esc').classList.add('hidden')
        document.cookie = 'esc=true';
    }, 3000);
}

function rate(div){
    var stars = div.parentElement.querySelectorAll('i'),
        order = div.dataset.order;

    for(var i = 0; i < stars.length; i++){
        stars[i].classList.remove('active')
    }

    for(var i = 0; i < order; i++){
        stars[i].classList.add('active')
    }

    document.onkeydown = function(event){
        if(event.key === 'Enter'){
            // CONFIRMATION
            
        }
    }
}
