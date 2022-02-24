let endDate = new Date("Aug 7, 2022 11:00:00").getTime();
let endDate2 = new Date("Aug 7, 2022").getTime();
let timer = document.querySelector(".timer")
let d = document.querySelector(".day")
let h = document.querySelector(".hours")
let m = document.querySelector(".minutes")
let s = document.querySelector(".seconds")

let x = setInterval(function () {


    let now = new Date().getTime();

    let distance = endDate - now;

    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);


    d.innerHTML = days;
    h.innerHTML = hours;
    m.innerHTML = minutes;
    s.innerHTML = seconds;


    if (distance < 0) {
        clearInterval(x);
        timer.innerHTML = "Свадьба уже состоялась";
    }

    if (distance == endDate2) {
        clearInterval(x);
        timer.innerHTML = "Свадьба сегодня";
    }
}, 1000);

let p1 = document.querySelector('#pres1');
let p2 = document.querySelector('#pres2');
let on_pres = document.querySelector('.on_pres');

function one() {

    if (p1.checked) {

        on_pres.style.display = 'block';
        console.log(p1.checked)
    } else {

        console.log(p2.checked)

        on_pres.style.display = 'none';
    }

}

p1.oninput = one;
p2.oninput = one;


