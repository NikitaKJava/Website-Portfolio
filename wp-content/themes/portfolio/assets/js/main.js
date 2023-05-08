// MENU BUTTON
const menuButton = document.querySelector('.header__burger-button');
const menu = document.querySelector('.header__menu-list');

menuButton.addEventListener('click', () => {
    menu.classList.toggle('header__burger-button visible-mobile burger-button is-open')
})

// live typing
function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
}
const line1 = document.getElementById('typewriter__line-1');
line1text = ["Hello!"];
const line2 = document.getElementById('typewriter__line-2');
line2text = ["My name is \n Nikita Kozlov."];
const line3 = document.getElementById('typewriter__line-3');
line3text = ["I'm a"];
const line4= document.getElementById('typewriter__line-4');
line4text = ["technician.","mechanical engineer.", "java developer.", "frontend developer."];
const cursor1 = document.getElementById('cursor1');
const cursor2 = document.getElementById('cursor2');
const cursor3 = document.getElementById('cursor3');
const cursor4 = document.getElementById('cursor4');

cursorText = ["|"];


let i = 0;
// line2.innerText = line3text
const typeWriter = async () => {
    cursor1.innerText = cursorText;
    await sleep(2000);
    for (let i = 0; i < line1text[0].length; i++) {
        line1.innerText = line1text[0].substring(0, i + 1);
        await sleep(100);
    }
    cursor1.innerText = "";
    cursor2.innerText = cursorText;
    await sleep(1000);

    for (let i = 0; i < line2text[0].length; i++) {
        line2.innerText = line2text[0].substring(0, i + 1);
        await sleep(100);
    }

    cursor2.innerText = "";
    cursor3.innerText = cursorText;
    await sleep(2000);

    for (let i = 0; i < line3text[0].length; i++) {
        line3.innerText = line3text[0].substring(0, i + 1);
        await sleep(100);
    }
    cursor3.innerText = "";
    cursor4.innerText = cursorText;

    let index = 0;

    while (index !== line4text.length) {
        for (let i = 0; i < line4text[index].length; i++) {
            line4.innerText = line4text[index].substring(0, i + 1);
            await sleep(100);
        }

        await sleep(1000);
        if (index !== line4text.length - 1) {
            for (let i = line4text[index].length; i > 0; i--) {
                line4.innerText = line4text[index].substring(0, i - 1);
                await sleep(25);
            }
            await sleep(1000);
        }

        if(index === line4text.length){
            index = 0;
        } else {
            index++;
        }
    }
}

typeWriter();
// / live typing

// switch theme
const switchTheme = document.querySelector('.theme-switcher__checkbox')

const htmlStatus = document.querySelector('.is-touchscreen')


switchTheme.addEventListener('click',   () => {
    htmlStatus.classList.toggle('is-light-theme-enabled')
})
// / switch theme

// notebook slider
//
// / notebook slider


// bytecode

const byteCode = document.querySelector('.byte-code');

// console.log(byteCode.childElementCount)


