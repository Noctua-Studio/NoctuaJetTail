var activo = false;
const nav = () => {
    const menu =  document.querySelector('.main-menu__icon');
    const navMenu = document.querySelector('.main-menu__nav ul');
    let burger=document.querySelector(".main-menu__icon button");
    let header = this.document.getElementById("main-menu");
    const langButton = document.getElementById("main-menu__lang-button");
    const burgerBackground = document.getElementById("burger-background");


    menu.addEventListener('click', ()=>{
        navMenu.classList.toggle('active-flex');
        
        burger.classList.toggle("on-hamburger");
        console.log(activo);
        if(activo && this.window.scrollY>180)
        {
            menuSticky(false);
            activo=false;
            console.log("Menu blanco 1");
        }
        else if(activo){
            menuSticky(true);
            activo=false;
            console.log("Menu transparente 2");
            
        }
        else{
            menuSticky(false);
            activo=true;
            console.log("Menu blanco 3");
        }
    });
    
    addEventListener("scroll", function(){

        if(this.window.scrollY < 180)
        {
            if(activo)
            {
                menuSticky(false);
                console.log(this.window.scrollY);
                console.log("Menu blanco 2.1");
            }
            else
            {
                menuSticky(true);
                console.log(this.window.scrollY);
                console.log("Menu transparent 2.2");
            }

        }
        else{
            menuSticky(false);
            console.log(this.window.scrollY);
            console.log("Menu blanco 2.1");
        }

    });

    const superToggle = (object, classes, toggle = true) => {
        if(toggle)
        {
            classes.forEach(element => {
                object.classList.add(element);
            });
        }
        else{
            classes.forEach(element => {
                object.classList.remove(element);
            });
        }
        
    }

    const menuSticky = (transparent) => {
        superToggle(header,['bg-white', 'shadow-lg'], !transparent);
        superToggle(header,['bg-transparent'], transparent);

        superToggle(langButton,['bg-zinc-50', 'hover:bg-shadeWhite'], !transparent);
        superToggle(langButton,['bg-transparent'], transparent);

        superToggle(burgerBackground,['bg-zinc-50', 'hover:bg-shadeWhite'], !transparent);
        superToggle(burgerBackground,['bg-transparent'], transparent);
    }

}
nav();


