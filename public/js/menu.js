var activo=false;
const nav = () => {
    const menu =  document.querySelector('.main-menu__icon');
    const navMenu = document.querySelector('.main-menu__nav ul');

    menu.addEventListener('click', ()=>{
        navMenu.classList.toggle('active-flex');
        let header = this.document.getElementById("main-menu");
        header.classList.toggle("sticky");
        if(activo){
            activo=false;
        }
        else{
            activo=true;
        }
        if(this.window.scrollY>180){
            header.classList.toggle("sticky");
        }
    });

}
nav();

let burger=document.querySelector(".main-menu__icon");
burger.addEventListener('click', ()=>{
    burger.classList.toggle("on-hamburger");
});
