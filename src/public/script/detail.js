console.log("aaa")

const plus = document.querySelector('.plus');
const minus = document.querySelector('.minus');
const amount = document.querySelector('.amount');

const plusAmount = () => {
    amount.value++;
}

const minusAmount = () => {
    amount.value > 0 && amount.value--;
}

plus.addEventListener('click',plusAmount );
minus.addEventListener('click',minusAmount)