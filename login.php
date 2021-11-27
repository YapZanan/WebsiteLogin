<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Test Chat </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>  
    </head>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header> Login</header>
                <form action="#">
                    <div class="error-txt"></div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Masukkan Password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field button">
                            <input type="submit" value="Mulai">
                    </div>
                </form>
                <div class="link">Belum daftar? <a href="/index.html">Daftar Sekarang!</a></div>
            </section>
        </div>
        <script src = "javascript/pass-show-hide.js"></script>
        <script src = "javascript/login.js"></script>         
    </body>
</html>