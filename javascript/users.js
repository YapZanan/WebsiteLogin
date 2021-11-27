const searchBar = document.querySelector(".users .search input"),
searcBtn = document.querySelector(".users .search button");

searcBtn.onclick = ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
}
