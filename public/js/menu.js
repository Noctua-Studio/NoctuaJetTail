var activo=false;
const nav = () => {
    const menu =  document.querySelector('.main-menu__icon');
    const navMenu = document.querySelector('.main-menu__nav ul');

    menu.addEventListener('click', ()=>{
        console.log("Esta vivo");
        navMenu.classList.toggle('active-flex');
    });

}
nav();

let burger=document.querySelector(".main-menu__icon");
burger.addEventListener('click', ()=>{
    burger.classList.toggle("on-hamburger");
});

