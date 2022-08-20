var activo = false;
const nav = () => {
    const menu =  document.querySelector('.main-menu__icon');
    const navMenu = document.querySelector('.main-menu__nav ul');
    let burger=document.querySelector(".main-menu__icon button");
    let header = this.document.getElementById("main-menu");
    const langButton = document.getElementById("main-menu__lang-button");
    const burgerBackground = document.getElementById("burger-background");
    
    const whiteText = document.querySelectorAll(".contrast");
    
    menu.addEventListener('click', ()=>{
        navMenu.classList.toggle('active-flex');
        burger.classList.toggle("on-hamburger");

        if(document.querySelector('.transparent') != null)
        {
            if(activo && this.window.scrollY>180)
            {
                menuSticky(false);
                activo=false;

                if(langButton != null) textContrast(false,true);

                
            }
            else if(activo){
                menuSticky(true);
                activo=false;

                if(langButton != null) textContrast(true,true);

                
            }
            else{
                menuSticky(false);
                activo=true;

                if(langButton != null) textContrast(false,true);
            }
        }
    });
    
    if(document.querySelector('.transparent') != null)
    {
        if(document.querySelector('.contrast') != null)
        {
            addEventListener("scroll", function(){

                if(this.window.scrollY < 180)
                {
                    if(activo)
                    {
                        textContrast(false);
                        menuSticky(false);
                    }
                    else
                    {
                        textContrast(true);
                        menuSticky(true);
                    }
                }
                else{
                    textContrast(false);
                    menuSticky(false);
                }
            });
        }
        else{
            addEventListener("scroll", function(){

                if(this.window.scrollY < 180)
                {
                    if(activo)
                    {
                        menuSticky(false);
                    }
                    else
                    {
                        menuSticky(true);
                    }
                }
                else{
                    menuSticky(false);
                }
            });
        }
        
    }
    
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

        superToggle(burgerBackground,['bg-zinc-50', 'hover:bg-shadeWhite'], !transparent);
        superToggle(burgerBackground,['bg-transparent'], transparent);

        if(langButton != null)
        {
            superToggle(langButton,['bg-zinc-50', 'hover:bg-shadeWhite'], !transparent);
            superToggle(langButton,['bg-transparent'], transparent);
        }
    }

    const textContrast = (transparent, ret = false) =>{
        
        superToggle(langButton,['text-darken', 'hover:text-primary'], !transparent);
        superToggle(langButton,['text-white', 'hover:text-secondary'], transparent);

        if(ret) return;

        whiteText.forEach(element => {
            superToggle(element, ['text-white'], transparent);
            superToggle(element, ['text-darken'], !transparent);
        });

    }
}
nav();


