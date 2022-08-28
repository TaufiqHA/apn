// Navbar Fixed
window.onscroll = function() {
    const header = document.querySelector('header');
    const navFixed = header.offsetTop;

    if(window.pageYOffset > navFixed) {
        header.classList.add('navbar-fixed');
    }else {
        header.classList.remove('navbar-fixed');
    }
};

// hamburger
// const hamburger = document.querySelector('#hamburger');
// const navMenu = document.querySelector('#nav-menu');

// hamburger.addEventListener('click', function(){
//     hamburger.classList.toggle('hamburger-active');
//     navMenu.classList.toggle('hidden');
// })

$('#hamburger').on('click', function()
{
    $('#hamburger').toggleClass('hamburger-active');
    $('#nav-menu').toggleClass('scale-100');
})

$('#button-tambah').on('click', function()
{
    $('#modal-box').removeClass('scale-0');
    $('#modal-box').addClass('scale-1');
})

$('#close-modal-box').on('click', function()
{
    $('#modal-box').removeClass('scale-1');
    $('#modal-box').addClass('scale-0');
})