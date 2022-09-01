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

$('#button-tambah-siswa').on('click', function()
{
    $('#modal-box-siswa').removeClass('scale-0');
    $('#modal-box-siswa').addClass('scale-1');
})

$('#close-modal-box-siswa').on('click', function()
{
    $('#modal-box-siswa').removeClass('scale-1');
    $('#modal-box-siswa').addClass('scale-0');
})

$('#download-button').on('click', function()
{
    $('#unduh').removeClass('scale-0');
    $('#unduh').addClass('scale-1');
})

$('#close-button').on('click', function()
{
    $('#unduh').removeClass('scale-1');
    $('#unduh').addClass('scale-0');
})

$('#deskripsi-button').on('click', function()
{
    $('#deskripsi').removeClass('scale-0');
    $('#deskripsi').addClass('scale-1');
})

$('#close-deskripsi').on('click', function()
{
    $('#deskripsi').removeClass('scale-1');
    $('#deskripsi').addClass('scale-0');
})