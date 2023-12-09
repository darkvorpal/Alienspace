let buttonGrid = document.querySelector(".grid-card");
let buttonList = document.querySelector(".list-card");
let sectionCardList = document.querySelector("#user-result-list");
let sectionCardGrid = document.querySelector("#user-result-grid");

buttonGrid.addEventListener('click', () => {
    sectionCardList.style.display = "none"
    sectionCardGrid.style.display = "block"
})
buttonList.addEventListener('click', () => {
    sectionCardGrid.style.display = "none"
    sectionCardList.style.display = "block"
})