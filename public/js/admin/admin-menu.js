const btn = document.getElementById("admin-btn");
const sidebar = document.querySelector(".sidebar");
const searchBtn = document.getElementById("search-btn");

btn.addEventListener('click', ()=>{
    sidebar.classList.toggle("active-adminMenu");
});

searchBtn.addEventListener('click', ()=>{
    sidebar.classList.toggle("active-adminMenu");
});
