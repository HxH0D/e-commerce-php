<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ÜRÜN BURADA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'topbar.php'; ?>
    <div class="container-fluid text-center">

        <form action="add-product.php">
            <button class="btn btn-primary"> Siteye Ürün Ekle</button>
        </form>

        <table class="table table">
        <thead>
            <tr>
            <th>Ürün Adı</th>
            <th>Ürün Açıklaması</th>
            <th>Ürün Fiyatı</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ürün 1</td>
                <td>Açıklama 1</td>
                <td>10 TL</td>
                <td>
                    <button class="btn btn-sm btn-success">Güncelle</button>
                    <button class="btn btn-sm btn-info">Ürün Detay</button>
                    <button class="btn btn-sm btn-danger">Kaldır</button>
                </td>
            </tr>
            
        </tbody>
        </table>
    </div>
    
</body>
</html>