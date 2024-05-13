const magnifyingGlass = document.querySelector("#magnifyingGlass");
let clicked = false;
function showSearchBar(event) {
    if (!clicked) {
        document.querySelector(".first-page").style.display = "none";
        document.querySelector("#search-input").style.display = "inline";
        document.querySelector("#search-input").focus();
        clicked = true;
    } else {
        document.querySelector(".first-page").style.display = "inline";
        document.querySelector("#search-input").style.display = "none";
        clicked = false;
    }
}
magnifyingGlass.addEventListener("click", showSearchBar);

document.addEventListener('keyup', e => {
    if (e.target.id == 'search-input') {
        const searchTerm = e.target.value.toLowerCase();
        document.querySelectorAll(".article").forEach(article => {
            article.textContent.toLowerCase().includes(searchTerm)
                ? article.classList.remove("filter")
                : article.classList.add("filter")
        })
    }
})
