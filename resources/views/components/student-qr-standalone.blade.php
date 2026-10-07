@props(['student', 'qrSrc'])

<section class="panel qr-standalone-panel">
    <div class="qr-standalone-content">
        <div>
            <p class="eyebrow">QR SISWA</p>
            <h2>QR terpisah</h2>
            <p class="qr-standalone-induk">Nomor induk {{ $student->induk }}</p>
        </div>
        <img class="qr-standalone-image" src="{{ $qrSrc }}" alt="QR siswa {{ $student->nama }} nomor induk {{ $student->induk }}">
    </div>
</section>