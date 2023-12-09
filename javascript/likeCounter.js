const likeIcon = document.querySelector("#heart")
const counter = document.querySelector("#counter")
let likeNbr = 0

counter.innerHTML = likeNbr
let likestatus = false
likeIcon.addEventListener("click", function () {
    if (!likestatus) {
        likestatus = true
        likeNbr++
        counter.innerHTML = likeNbr
        likeIcon.style.color = "crimson"
    }else{
        likestatus = false
        likeNbr --
        counter.innerHTML = likeNbr
        likeIcon.style.color = "white"
    }
})