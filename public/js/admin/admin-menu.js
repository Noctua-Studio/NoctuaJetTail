const btn = document.getElementById("admin-btn");
const sidebar = document.querySelector(".sidebar");
const searchBtn = document.getElementById("search-btn");
const searchInput = document.getElementById("searchInput");
const sidebarItems = document.querySelector(".sidebar__items");

let scrolling = false;

btn.addEventListener('click', ()=>{
    sidebar.classList.toggle("active-adminMenu");
});

searchBtn.addEventListener('click', ()=>{
    if(sidebar.classList.contains("active-adminMenu"))
    {
        sidebar.classList.toggle("active-adminMenu");
        
    }
    searchInput.focus();
    
});


sidebarItems.addEventListener('mouseover', ()=>{
    if(sidebar.classList.contains("active-adminMenu") && scrolling == false)
    {
        sidebarItems.classList.remove("overflow-y-auto");
        sidebarItems.classList.remove("overflow-x-hidden");
        console.log(scrolling)
    }
});

sidebarItems.addEventListener('mousewheel', ()=>{

    if(sidebar.classList.contains("active-adminMenu"))
    {
        sidebarItems.classList.add("overflow-y-auto");
        sidebarItems.classList.add("overflow-x-hidden");
        scrolling = true;
        console.log(scrolling);
    }
    
});

sidebarItems.addEventListener('mouseleave', ()=> scrollView(), false);

async function scrollView()
{
    if(sidebar.classList.contains("active-adminMenu"))
    {
        if(!scrolling)
        {
            await new Promise(r => setTimeout(r, 375));
    
            sidebarItems.classList.add("overflow-y-auto");
            sidebarItems.classList.add("overflow-x-hidden");
        }
        else{
            scrolling = false;
        }
    }
    
    
}