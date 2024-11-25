<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Welcome Page</title>
    <style>
        body {
            background-color: #f4f4f4;
            background: linear-gradient(109.6deg, rgb(157, 75, 199) 11.2%, rgb(119, 81, 204) 83.1%);
            padding: 20px;
            margin: 10px 0;
        }

        h1 {
            font-weight: 600;
            color: #fdfdfe;
            text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3;
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;
            margin-bottom: 50px;
        }

        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            margin-top: 20px;
        }

        .box {
            width: 100%;
            max-width: 300px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body h5 {
            font-size: 1.5rem;
            color: #333;
        }

        .card-body p {
            font-size: 1rem;
            color: #666;
        }

        @media (max-width: 768px) {
            .box-container {
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 2rem;
            }

            .box {
                max-width: 90%;
            }
        }

        a.btn-success {
            background-color: #03e9f4;
            color: #fff;
            text-transform: uppercase;
            padding: 10px 20px;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        a.btn-success:hover {
            background-color: #1198e2;
        }

        /* Button border animation */
        a {
            position: relative;
            display: inline-block;
            text-decoration: none;
            letter-spacing: 2px;
            overflow: hidden;
        }

        a span {
            position: absolute;
            display: block;
        }

        a span:nth-child(1) {
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03e9f4);
            animation: animate1 1s linear infinite;
        }

        a span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg, transparent, #03e9f4);
            animation: animate2 1s linear infinite;
            animation-delay: 0.25s;
        }

        a span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg, transparent, #03e9f4);
            animation: animate3 1s linear infinite;
            animation-delay: 0.50s;
        }

        a span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg, transparent, #03e9f4);
            animation: animate4 1s linear infinite;
            animation-delay: 0.75s;
        }

        @keyframes animate1 {
            0% { left: -100%; }
            50%, 100% { left: 100%; }
        }

        @keyframes animate2 {
            0% { top: -100%; }
            50%, 100% { top: 100%; }
        }

        @keyframes animate3 {
            0% { right: -100%; }
            50%, 100% { right: 100%; }
        }

        @keyframes animate4 {
            0% { bottom: -100%; }
            50%, 100% { bottom: 100%; }
        }

    </style>
</head>
<body>
    <div class="container position-relative">
        <h1 class="text-center">Welcome to The Glowcery Store</h1>

        <div class="box-container">
            <!-- Box 1: About -->
            <div class="box">
                <img src="https://i.pinimg.com/736x/46/f5/d3/46f5d3b7e776c837782bfb004d0faa90.jpg" alt="Welcome Image - User Experience">
                <div class="card-body">
                    <h5>Welcome User!</h5>
                    <p>Explore a wide range of products and join our community.</p>
                    <a href="<?= base_url('index/about'); ?>" class="btn btn-success">About</a>
                </div>
            </div>

            <!-- Box 2: Products -->
            <div class="box">
                <img src="https://img.freepik.com/premium-photo/minimalist-character-illustration-person-managing-their-tasks-2d-style_29654-2834.jpg" alt="Products Management - Keep Track">
                <div class="card-body">
                    <h5>Manage Products</h5>
                    <p>Keep track of our extensive inventory.</p>
                    <a href="<?= base_url('products'); ?>" class="btn btn-success">Products</a>
                </div>
            </div>

            <!-- Box 3: Users -->
            <div class="box">
                <img src="https://tse1.mm.bing.net/th?id=OIP.sNdwayYrlTQ1OJXBkgKNVQHaEt&pid=Api&P=0&h=180" alt="User Management - Track Members">
                <div class="card-body">
                    <h5>Manage Users</h5>
                    <p>Keep track of every membership in our store.</p>
                    <a href="<?= base_url('users'); ?>" class="btn btn-success">Users</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
