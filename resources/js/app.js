import './bootstrap';
import QRCode from 'qrcode';
import axios from 'axios';

console.log('WELCOME MATE');

function generateQR() {
    let canvas = document.getElementById('canvas')
    let qr = document.getElementById("input_url").value

    generateQrCode();

    QRCode.toCanvas(canvas, qr.toString(), { width: 200 }, function (error) {
        if (error) console.error(error)
        console.log('QR CODE generated.');
    })
}

function generateQrCode() {
    axios.post('/generateQR', {
        qr: document.getElementById("input_url").value,
    })
        .then(response => console.log(response.data))
        .catch(error => console.error('There was an error making the request!', error))
}

document.getElementById("generateQR").addEventListener("click", generateQR);
