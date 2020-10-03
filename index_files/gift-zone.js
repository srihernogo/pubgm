      const prizes = {
    0: 'img/011111.png',
    1: 'img/uc.png',
    2: 'img/mat.png',
    3: 'img/3.png',
    4: 'img/001.png',
    5: 'img/akm7.png',
};

const total_items = 6;
const minimum_jumps = 30; 
let shagitz = -1;
let jumps = 0;
let speed = 30;
let timer = 0;
let prize = -1;

function runCircle() {
    $(`[data-order="${shagitz}"]`).removeClass('is-active');

    shagitz += 1;

    if (shagitz > total_items - 1) {
        shagitz = 0;
    }

    $(`[data-order="${shagitz}"]`).addClass('is-active');
}

function generatePrizeNumber() {
    return Math.floor(Math.random() * total_items);
}

function controllSpeed() {
    jumps += 1;
    runCircle();
    if (jumps > minimum_jumps + 10 && prize === shagitz) {
        clearTimeout(timer);
        
        $('#hadiah').fadeIn('slow');
        $('.gambar').attr('src',prizes[shagitz]);

        prize = -1;
        jumps = 0;

    } else {
        if (jumps < minimum_jumps) {
            speed -= 5; 
        } else if (jumps === minimum_jumps) {
            const random_number = generatePrizeNumber();
            prize = random_number;
        } else {
           
            if ( (jumps > minimum_jumps + 10) && prize === (shagitz + 1) ) {
                speed += 600;
            } else {
                speed += 20; 
            }
        }
        if (speed < 40) {
            speed = 40;
        }

        timer = setTimeout(controllSpeed, speed);
    }
}

function init() {
    jumps = 0;
    speed = 100;
    prize = -1;
    controllSpeed();
}

$(document).ready(() => {
    $('#js-start').on('click', init);
});