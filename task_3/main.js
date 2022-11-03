const selection = document.getElementsByClassName('main__tulisan');
const item = document.getElementsByClassName('main__selection');
for (let i = 0; i < selection.length; i++) {
    selection[i].addEventListener('click', function () {
        item[i].classList.toggle('active')
    })
}

const ganti = document.getElementById("deskripsi");
ganti.innerHTML = "Lebih kenal dengan Saya";

const buat_element = document.createElement('p');
const isi_element = document.createTextNode('Muhammad Haikal Fauzananda - 120140168');
buat_element.appendChild(isi_element);
const cetak = document.getElementById('body');
cetak.appendChild(buat_element);

function fungsi_popup() {
    alert("Terimakasih sudah mengunjungi");
}