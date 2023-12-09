let bouttonMedia = document.querySelector(".bouttonMedia")
let zonemedia = document.querySelector(".zone-media")
bouttonMedia.addEventListener('click', () => {
    zonemedia.innerHTML = `
    <div class="mb-3">
        <input class="form-control" type="file" id="formFile">
    </div>
  `
})