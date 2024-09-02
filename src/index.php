<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dana Masa Depan</title>
    <link rel="icon" href="../public/logo.png" type="image/png">

    <link rel="stylesheet" href="global.css?v=<?php echo time(); ?>">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <main>

        <!-- Container -->
        <div class="container max-w-[1024px]">

            <!-- NAVIGATION -->
            <nav class="navigation">
                <div>
                    <a href="index.php" class="logo">
                        <img src="../public/logo.png" alt="logoAlt" width="52px">
                        Dana Masa Depan
                    </a>
                </div>
            </nav>

            <!-- HERO SECTION -->
            <section class="section-tmpl grid grid-cols-1 lg:grid-cols-2 items-center">
                <div>
                    <div>
                        <span class="text-xl">Tabungan Masa Depan.</span>
                        <h1 class="headline">Wujudkan <br> Impian Anda dengan Mudah!</h1>
                        <p>Ciptakan rencana keuangan Anda dengan aman dan mudah. Website kami membantu Anda mengelola
                            dan
                            mengembangkan tabungan untuk mencapi tujuan finasial Anda✨</p>
                    </div>

                    <div class="mt-6 flex gap-3">
                        <button class="button-primary">
                            <img src="../assets/icons/iconSearch.png" class="icon">
                            <a href="pages/searchNasabah.php">
                                Temukan Nasabah
                            </a>
                        </button>
                        <button class="button-outline">
                            <img src="../assets/icons/iconDashboard dark.png" class="icon">
                            <a href="pages/loginPage.php" class="hidden lg:block">
                                Dashboard
                            </a>
                        </button>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <img src="../assets/heroImage.png" alt="heroImg" class="Animation-UpDown ">
                </div>
            </section>

            <!-- REVIEWS SECTION -->
            <section class="section-tmpl">
                <div class="tittle">
                    <h2>Apa yang mereka Katakan tentang Kami?</h2>
                </div>

                <div class="mt-8 [column-fill:_balance] sm:columns-2 sm:gap-6 lg:columns-3 lg:gap-8" id="Reviews">
                    <!-- Comment menggunakan javascript -->
                </div>
            </section>

            <!-- FOOTER SECTION -->
            <footer class="w-full py-8 border-t-2 border-[#37415143]">
                <div class="flex flex-col items-center text-center gap-6 lg:flex-row lg:text-start lg:justify-between">
                    <p class="text-sm order-last lg:order-first">Copyright © 2024 - All right reserved <br class="block lg:hidden"> by BPPI Baleendah</p>
                    <div class="flex gap-x-3">
                        <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/sosmed/iconFacebook.png" width="32px">
                        </a>
                        <a href="http://www.telegram.com" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/sosmed/iconTelegram.png" width="32px">
                        </a>
                        <a href="http://www.instagram.com" target="_blank" rel="noopener noreferrer">
                            <img src="../assets/sosmed/iconInstagram.png" width="32px">
                        </a>
                    </div>
                </div>
            </footer>


        </div>

    </main>

    <script src="script.js?v=<?php echo time(); ?>"></script>

</body>

</html>