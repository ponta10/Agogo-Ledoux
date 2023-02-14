const addBtn = document.querySelector('.add-btn');
const overlay = document.querySelector('.overlay'); 
const modal = document.querySelector('.modal'); 

const modalOpen = () => {
    overlay.classList.add('block');
}

const modalClose = () => {
    overlay.classList.remove('block');
}

addBtn.addEventListener('click', modalOpen)
overlay.addEventListener('click', modalClose)
modal.addEventListener('click', (e) => e.stopPropagation() );