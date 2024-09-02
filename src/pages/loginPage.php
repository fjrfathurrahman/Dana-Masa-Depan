<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="icon" href="../../public/logo.png" type="image/png">
    <link rel="stylesheet" href="../global.css?v=<?php echo time(); ?>">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main>

        <div class="max-w-[1024px] h-screen mx-auto flex justify-center">

            <div class="w-1/2 h-max mx-auto mt-32 px-8 py-6 shadow-lg shadow-black/25 rounded-lg">
                <div class="text-center mb-6">
                    <a href="../index.php">
                        <img src="../../public/logo.png" alt="logo" class="w-[70px] mx-auto">
                    </a>
                    <h3 class="text-3xl font-bold mt-6">Welcome Admin</h3>
                    <p>Masukkan username dan password <br> untuk mengakses dashboard.</p>
                </div>
                <form action="" method="POST">
                    <div class="flex flex-col gap-1.5 mb-3 first:font-medium">
                        <label for="username" id="username">Username</label>
                        <input type="text" name="username" id="username" class="input-style" placeholder="Masukan Username Anda" required>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <label for="password" id="password" class="font-medium">Password</label>
                        <input type="password" name="password" id="password" class="input-style" placeholder="Masukan Password Anda"
                            required>
                    </div>
                    <div>
                        <button class="w-full button-primary mt-6 justify-center text-lg">Submit</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
</body>

</html>