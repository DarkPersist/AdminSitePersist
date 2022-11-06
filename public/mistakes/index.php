<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta Data-->
    <meta charset="utf-8">
    <title>SitePersist</title>
    <meta charset="UTF-8">
    <meta name="author" content="Darkpersist(Mateo & Sebastian)">
    <meta name="description" content="Bookings System for Reservation spaces and electronics devices">
    <meta name="keywords" content="Bookings, SitePersist, Site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/resources/assets/favicon.ico">
    <!--Import-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #111;
        }

        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: 40px 100px;
            z-index: 1000;
        }

        header a {
            position: relative;
            font-size: 2em;
            color: #fff;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 2px;
            text-decoration: none;
        }

        .banner {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 0 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .banner::before {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            width: 400px;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .banner .fondo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.1;
            pointer-events: none;
        }

        .banner .textBox {
            position: relative;
            max-width: 550px;
            z-index: 2;
        }

        .banner .textBox h2 {
            color: #fff;
            font-size: 3em;
        }

        .banner .textBox h2 img {
            height: 40px;
        }

        .banner .textBox p {
            color: #fff;
            font-size: 1.1em;
            margin: 5px 0 25px;
            text-align: justify
        }

        .banner .textBox a {
            position: relative;
            display: inline-block;
            background: #fff;
            color: #111;
            border-radius: 100px;
            padding: 15px 25px;
            text-decoration: none;
            font-size: 1.1em;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .banner .FondoBx {
            position: relative;
            background: #fff;
            margin-left: 40px;
            width: 100%;
            height: 400px;
            z-index: 1;
        }

        .banner .FondoBx img {
            opacity: 1;
        }

        @media (max-width:991px) {
            header {
                padding: 20px 50px;
            }

            .banner {
                padding: 150px 50px 0;
                flex-direction: column;
            }

            .banner::before {
                display: none;
            }

            .banner .textBox {
                max-width: 100%;
            }

            .banner .textBox h2 {
                font-size: 2.5em;
            }

            .banner .textBox h2 img {
                height: 30px;
            }

            .banner .FondoBx {
                width: 100%;
                height: 200px;
                margin: 40px 0 100px;
            }
        }
    </style>
</head>

<body>
    <header>
        <a href="/">SitePersist</a>
    </header>
    <div class="banner">
        <img class="fondo" src="/resources/assets/img/background.jpg">
        <div class="textBox">
            <h2>Error
                <?php echo $_GET['error']; ?><img src="/resources/assets/img/error.png"></h2>
            <p><?php echo $_GET['message']; ?></p>
            <a href="/">Regresar</a>
        </div>
        <div class="FondoBx">
            <img class="fondo" src="/resources/assets/img/background.jpg">
        </div>
    </div>

</body>

</html>