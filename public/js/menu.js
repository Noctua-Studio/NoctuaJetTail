var activo=false;
const nav = () => {
    const menu =  document.querySelector('.main-menu__icon');
    const navMenu = document.querySelector('.main-menu__nav ul');
    let burger=document.querySelector(".main-menu__icon button");
    menu.addEventListener('click', ()=>{
        navMenu.classList.toggle('active-flex');
        
        burger.classList.toggle("on-hamburger");
    });

}
nav();


