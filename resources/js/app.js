import './bootstrap';
import QRCode from 'qrcode';
console.log('WELCOME MATE');

function generateQR() {
    let canvas = document.getElementById('canvas')
    let qr = document.getElementById("input_url").value
    QRCode.toCanvas(canvas, qr.toString(), {width: 200}, function (error) {
        if (error) console.error(error)
        console.log('success!');
    })
}


document.getElementById("generateQR").addEventListener("click", generateQR);

