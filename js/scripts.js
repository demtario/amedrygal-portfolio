//Mobile menu
document.querySelector('.toggle').setAttribute('onclick', "menu()");

let menu_state = false;

let menu = (off = false) => {
    if(menu_state || off) {
        document.querySelector('nav').classList.remove('nav--on');
        menu_state = false
    } else {
        document.querySelector('nav').classList.add('nav--on');
        menu_state = true;
    }
    return menu_state;
}

// Header paralax
onmousemove = function(e) {
    if(innerWidth > 992) {
        let box = document.querySelector('.introduction__box')
        let logo = document.querySelector('.introduction__logo')

        let center = {x: innerWidth/2, y: 266}

        let boxMove = {
            x: (e.clientX - center.x)/32,
            y: (e.clientY - center.y)/32,
        }

        box.style.transform = "translate("+boxMove.x+"px,"+boxMove.y+"px)"
        logo.style.transform = "translate("+boxMove.x/2+"px,"+boxMove.y/2+"px)"
    }
}

//Gładkie przewijanie
document.querySelectorAll('a[href^="#"]').forEach(item => {
    item.addEventListener('click', (e)=> {
        let hashval = item.getAttribute('href')
        let target = document.querySelector(hashval)

        if(innerHeight < target.offsetHeight) { //Element nie zmieści się na ekranie
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        } else { //Element zmieści się
            target.scrollIntoView({
                behavior: 'smooth',
            })
        }

        history.pushState(null, null, hashval)
        e.preventDefault()
    })
});

//HesGallery fix
addEventListener('keydown', function(e){
    if(e.keyCode == 39 && HesGallery.open) HesGallery.next();
    if(e.keyCode == 37 && HesGallery.open) HesGallery.prev();
    if(e.keyCode == 27 && HesGallery.open) HesGallery.hide();
})

//Portfolio improve
onscroll = (e) => {
    if(innerWidth > 992) {
        let projects = document.querySelectorAll('.project')

        for(let i = 0; i<projects.length; i++) {
            if(isHidden(projects[i])) {
                let elCenter = projects[i].offsetHeight/2 + Get_Offset_From_Start(projects[i]).y

                let param = (1 - (Math.abs(pageYOffset+innerHeight/2 - elCenter) / 8000));
        
                projects[i].style.transform = 'scale('+param+')'
            }
        }
    }
}

function isHidden(el) {

    let fromTop = Get_Offset_From_Start(el).y

    if(innerHeight+pageYOffset > fromTop && pageYOffset < fromTop + el.offsetHeight) return true
    return false
}

function Get_Offset_From_Start (object, offset) { 
    offset = offset || {x : 0, y : 0};
    offset.x += object.offsetLeft;       offset.y += object.offsetTop;
    if(object.offsetParent) {
        offset = Get_Offset_From_Start (object.offsetParent, offset);
    }
    return offset;
}