// change navbar style on scroll

window.addEventListener('scroll',()=>{
    document.querySelector('nav').classList.toggle
    ('window-scroll',window.scrollY > 0)
})

//show and hide Question answer

const ques = document.querySelectorAll('.que');

ques.forEach(que => {
    que.addEventListener('click',() => {
        que.classList.toggle('open');

        //icons
        const icon = que.querySelector('.que_icon i');
        if(icon.className === 'util uil-plus'){
            icon.className = "util uil-minus";
        }else {
            icon.className = "util uil-plus";
        }
    })
})

//navmenu button

const menu = document.querySelector(".nav_menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click',() => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})

//close navmenu 

const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)


// login page

// function validate()
// {
//     var username=document.getElementById("username").value;
//     var password=document.getElementById("password").value;
//     if(username=="admin" && password=="1234")
//     {
//         window.location.href="intro.html";
//     }
//     else
//     {
//         alert("login failed");
//     }
// }
