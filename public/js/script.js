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

    $('#header').html('TAMBAH SISWA');
    $('#button_modal').html('TAMBAH');

    $('#name').val('');
    $('#nis').val('');
    $('#nisn').val('');
})

$('#close-modal-box-siswa').on('click', function()
{
    $('#modal-box-siswa').removeClass('scale-1');
    $('#modal-box-siswa').addClass('scale-0');
})

let change = document.querySelectorAll('#change');

for (let i = 0; i <= change.length; i++) {
    change[i].addEventListener('click', function()
    {
        $('#modal-box-siswa').removeClass('scale-0');
        $('#modal-box-siswa').addClass('scale-1');

        $('#header').html('UBAH SISWA');
        $('#button_modal').html('UBAH');
        $('.modal form').attr('action', 'http://localhost:8080/apn/public/siswa/ubah');

        const id = $(this).data('id');
        const kelas = $(this).data('kelas');

        $.ajax({
            url: 'http://localhost:8080/apn/public/siswa/getDataSiswa',
            data: {id : id, kelas : kelas},
            method: 'post',
            dataType: 'json',
            success: function(data)
            {
                $('#id').val(data.id);
                $('#name').val(data.name);
                $('#nis').val(data.nis);
                $('#nisn').val(data.nisn);
            }
        })
    })
}