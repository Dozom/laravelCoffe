import './bootstrap';
import QRCode from 'qrcode';
import axios from 'axios';

console.log('WELCOME MATE');

function generateQR() {
    let canvas = document.getElementById('canvas')
    let qr = document.getElementById("input_url").value
    // Call the function
    fetchData();

    QRCode.toCanvas(canvas, qr.toString(), {width: 200}, function (error) {
        if (error) console.error(error)
        console.log('success!');
    })
}

// Function to make a POST request
function fetchData() {
    axios.post('/generateQR',{
        qr: document.getElementById("input_url").value,
    })
        .then(response => {
            // Handle the response data
            console.log(response.data);
        })
        .catch(error => {
            // Handle any errors
            console.error('There was an error making the request!', error);
        });
}

document.getElementById("generateQR").addEventListener("click", generateQR);
