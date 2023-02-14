const addBtn = document.querySelector(".add-btn");
const overlay = document.querySelector(".overlay");
const modal = document.querySelector(".modal");

const modalOpen = () => {
    overlay.classList.add("block");
};

const modalClose = () => {
    overlay.classList.remove("block");
};

addBtn.addEventListener("click", modalOpen);
overlay.addEventListener("click", modalClose);
modal.addEventListener("click", (e) => e.stopPropagation());

const file = document.querySelector(".file");
const preview = document.querySelector("#preview");

const filePreview = (e) => {
    console.log("aaa")
    let render = new FileReader;
    render.onload = (e) => {
        preview.setAttribute("src", e.target.result);
    }
    render.readAsDataURL(e.target.files[0]);
}

file.addEventListener("change", filePreview);


