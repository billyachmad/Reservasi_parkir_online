<!DOCTYPE html>
<html>
<head>
    <title>Reservasi Tempat Parkir</title>
</head>
<body>
    <form action="reserve.php" method="POST">
        <legend>Silahkan pilih Tempat yang anda inginkan : </legend>
        <p>
            <label>Nama Gedung :</label>
            <select name="namagedung">
                <option value="gedunga">Gedung A</option>
                <option value="gedungb">Gedung B</option>
                <option value="gedungc">Gedung C</option>
                <option value="gedungd">Gedung D</option>
        </p>
        <p>
            <label>Nomor Lantai :</label>
            <select name="nomorlantai">
                <option value=" Lantai1 "> 1 </option>
                <option value=" Lantai2 "> 2 </option>
                <option value=" Lantai3 "> 3 </option>
                <option value=" Lantai4 "> 4 </option>
                <option value=" Lantai5 "> 5 </option>
        </p>
        <p>
            <label>Nomor Tempat Parkir:</label>
            <input type="nomortempatparkir" name="nomortempatparkir" placeholder="Masukkan nomor tempat parkir" />
        </p>
        <p>
            <label>Username :</label>
            <input type="username" name="username" placeholder="Masukkan username anda" />
        </p>
        <p>
            <label>Catatan:</label>
            <textarea name="catatan"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Pesan!" />
        </p>
    </form>
    <h3> Silahkan memilih bank untuk metode pembayaran </h3>
</body>
</html>