<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shado Check</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="#"></ion-icon>
                        </span>
                        <span class="title">ADMİN PANELİ</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Ana Sayfa</span>
                    </a>
                </li>

                <li>
                    <a href="k/index.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Üye - Kullanıcı İşlemleri</span>
                    </a>
                </li>

                <li>
                    <a href="ekle.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Üye Ekle</span>
                    </a>
                </li>

                <li>
                    <a href="silme.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Üye Sil</span>
                    </a>
                </li>
                <li>
                    <a href="Ailetiler.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">İletiler</span>
                    </a>
                </li>
                <li>
                    <a href="Arandevu.php">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Randevular </span>
                    </a>
                </li>
                <li>
                    <a href="Asıkayetler.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Şikayetler</span>
                    </a>
                </li>

                <li>
                    </a>
                </li>

                <li>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <?php 

        






        ?>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

            </div>

            

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>En Popüler Araçlar</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td><a href="ekle.php" >Üye Ekelme</td>
                                <td><a href="ekle.php" span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td><a href="silme.php" >Üye Silme</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td><a href="k/index.php" >Üye - Kullanıcı İşlemleri</td>
                                <td><span class="status return">Return</span></td>
                            </tr>

                            <tr>
                                <td><a href="Aduyurular.php" >Duyurular</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td><a href="Ailetiler.php" >İletiler</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td><a href="Arandevular.php" >Randevular</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td><a href="Asıkayetler.php" >Şikayetler</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>