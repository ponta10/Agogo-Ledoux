const addBtn = document.querySelector(".add-btn");
const overlay = document.querySelector(".overlay");
const modal = document.querySelector(".modal");
const cancelBtn = document.querySelector(".cancel-btn");

const modalOpen = () => {
    overlay.classList.add("block");
};

const modalClose = () => {
    overlay.classList.remove("block");
};

addBtn?.addEventListener("click", modalOpen);
overlay?.addEventListener("click", modalClose);
cancelBtn?.addEventListener("click", modalClose);
modal?.addEventListener("click", (e) => e.stopPropagation());

const file = document.querySelector(".file");
const preview = document.querySelector("#preview");

const filePreview = (e) => {
    console.log("aa")
    let render = new FileReader;
    render.onload = (e) => {
        preview.setAttribute("src", e.target.result);
    }
    render.readAsDataURL(e.target.files[0]);
}

file.addEventListener("change", filePreview);


const productTrash = document.querySelector('.product_table_trash');
const product = document.querySelector('.product_table');
const releaseBtn = document.querySelector('.release-btn');
const trashBtn = document.querySelector('.trash-btn');

const trashOpen = () => {
    productTrash.classList.remove('none');
    product.classList.add('none');
    releaseBtn.classList.add('notSelected');
    trashBtn.classList.remove('notSelected');
}

const productOpen = () => {
    productTrash.classList.add('none');
    product.classList.remove('none');
    releaseBtn.classList.remove('notSelected');
    trashBtn.classList.add('notSelected');
}

releaseBtn?.addEventListener("click", productOpen);
trashBtn?.addEventListener("click", trashOpen);
