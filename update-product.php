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
    <div class="container">
        <div class="row justify-content-center m-5">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="product_image">Ürün Görseli</label>
                        <img id="preview_image" src="#" alt="Seçilen Görsel" style="max-width:100px; margin-top:10px;">
                        <input type="file" class="form-control-file" id="product_image">
                    </div>
                    <div class="form-group">
                        <label for="product_code">Ürün Kodu</label>
                        <input type="text" class="form-control" id="product_code">
                    </div>
                    <div class="form-group">
                        <label for="product_name">Ürün Adı</label>
                        <input type="text" class="form-control" id="product_name">
                    </div>
                    <div class="form-group">
                        <label for="product_dfeatures">Ürün Özellikleri</label>
                        <textarea class="form-control" id="product_features" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product_description">Ürün Açıklaması</label>
                        <textarea class="form-control" id="product_description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product_price">Ürün Fiyatı</label>
                        <input type="number" class="form-control" id="product_price">
                    </div>
                    <div class="form-group">
                        <label for="product_quantity">Ürün Adeti</label>
                        <input type="number" class="form-control" id="product_quantity">
                    </div>
                    <form action="">
                        <button type="submit" class="btn btn-info">Güncelle</button>
                    </form>
                </form>
            </div>
        </div>
    </div>

</body>

</html>