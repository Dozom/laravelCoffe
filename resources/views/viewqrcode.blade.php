@include('common.navMenu')
<style>
    .qr-content {
        text-align: center;
        margin: 50px;
        font-weight: bold;
        font-size: 2em;
    }

    .qr-code {
        margin: 45px;
    }
</style>
<div class="qr-content">
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <div>El Código QR, tiene el siguiente contenido:</div>
    <div class="qr-code">{{ $qr }}</div>
</div>