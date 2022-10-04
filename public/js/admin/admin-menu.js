const btn = document.getElementById("admin-btn");
const sidebar = document.querySelector(".sidebar");
const searchBtn = document.getElementById("search-btn");
const searchInput = document.getElementById("searchInput");

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
