var activo = false;
const nav = () => {
    const navMenu = document.querySelector('.main-menu__nav ul');
    let burger=document.getElementById("main-menu__icon");
    let header = this.document.getElementById("main-menu");
    const langButton = document.getElementById("main-menu__lang-button");
    
    const whiteText = document.querySelectorAll(".contrast");
    
    burger.addEventListener('click', ()=>{
        navMenu.classList.toggle('active-block');
        burger.classList.toggle("on-hamburger");

        if(document.querySelector('.transparent') != null)
        {
            if(activo && this.window.scrollY>180)
            {
                menuSticky(false);
                activo=false;

                if(document.querySelector('.contrast') != null) textContrast(false,true);

                
            }
            else if(activo){
                menuSticky(true);
                activo=false;

                if(document.querySelector('.contrast') != null) textContrast(true,true);

                
            }
            else if(window.matchMedia('screen and (max-width:1023px)').matches)
            {
                textContrast(false,false);
                menuSticky(false);
                activo=true;
            }
            else{
                menuSticky(false);
                activo=true;

                if(document.querySelector('.contrast') != null) textContrast(false,true);
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
                    if(window.matchMedia('screen and (max-width:1023px)').matches && activo)
                    {
                        textContrast(false);
                        menuSticky(false);
                    }
                    else if(activo)
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

    }

    const textContrast = (transparent, ret = false) =>{
        
        if(langButton != null)
        {
            superToggle(langButton,['text-darken', 'hover:text-primary'], !transparent);
            superToggle(langButton,['text-white', 'hover:text-secondary'], transparent);
        }

        if(ret) return;

        whiteText.forEach(element => {
            superToggle(element, ['text-white'], transparent);
            superToggle(element, ['text-darken'], !transparent);
        });

    }
}
nav();


