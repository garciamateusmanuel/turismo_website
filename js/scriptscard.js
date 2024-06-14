const card1 = document.querySelector('.card1');
const card2 = document.querySelector('.card2');
const card3 = document.querySelector('.card3');
const card4 = document.querySelector('.card4');
const bg = document.querySelector('.general');
const title = document.querySelector('h1');
const textCard = document.querySelector('p');
const myLink = document.getElementById('meuLink'); 
const colorTitle = "#FFA500";

card1.addEventListener('click', () =>{
    bg.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('/turismo_website/imagens/grutas-do-Nzenzo.png')";
    title.innerText = 'Grutas do Nzenzo';
    textCard.innerText = 'sit amet consectetur adipisicing elit.Voluptate, repellendus provident. Soluta, id quis quas omnis, sed pariatur in officia perferendis, odit ea dolores minus accusamus vitae! Assumenda vero asperiores, tempore, incidunt consequuntur commodi';
    myLink.setAttribute('href', '/turismo_website/PagsSecundarias/GrutasNzenzo.php');
});
card2.addEventListener('click', () =>{
    bg.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('/turismo_website/imagens/lagoa do feitiço.jpeg')";
    title.innerText = 'Lagoa do Feitiço';
    textCard.innerText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Voluptate, repellendus provident. Soluta, id quis quas omnis,';
})
card3.addEventListener('click', () =>{
    bg.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('/turismo_website/imagens/RESERVA FLORESTAL DO BÉU.jpg')";
    title.innerText = 'Reserva Floresta do Beu';
    textCard.innerText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Voluptate, repellendus provident. Soluta, id quis quas omnis,Lorem ipsum dolor sit amet consectetur adipisicing elit.Voluptate, repellendus provident. Soluta, id quis quas omnis,';
})
card4.addEventListener('click', () =>{
    bg.style.backgroundImage = "linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('/turismo_website/imagens/LAGO MUFUTUTU.jpg')";
    title.innerText = 'Lago do Mufututu';

    textCard.innerText = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Voluptate, repellendus provident. Soluta, id quis quas omnis,Lorem ipsum dolor sit amet consectetur adipisicing elit.Voluptate, repellendus provident. Soluta, id quis quas omnis,';
})

/* MENU MOBILE */

const menuMobile = document.querySelector('.menu-mobile');
const links = document.querySelector('.links');
const linksItens = document.querySelectorAll('.links a');

menuMobile.addEventListener('click', () => {
    links.classList.toggle('active');
});

/* FECHA O MENU AO CLICAR NO LINK */
linksItens.forEach((linksItem) => {
    linksItem.addEventListener('click', () => {
        links.classList.toggle('active');
    })
})