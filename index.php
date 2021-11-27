<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Test Chat </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>  
    </head>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header> Login</header>
                <form action="#" enctype = "multipart/form-data">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>Nama Awal</label>
                            <input type="text" name="fname" placeholder="Nama Awal" required>
                        </div>
                        <div class="field input">
                            <label>Nama Akhir</label>
                            <input type="text" name="lname" placeholder="Nama Akhir" required>
                        </div>
                        </div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Masukkan Password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Gambar</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Mulai">
                    </div>
                </form>
                <div class="link">Sudah terdaftar? <a href="/login.html">Masuk Sekarang</a></div>
            </section>
        </div>  
        
        <script src = "javascript/pass-show-hide.js"></script>
        <script src = "javascript/signup.js"></script>

    </body>
</html>