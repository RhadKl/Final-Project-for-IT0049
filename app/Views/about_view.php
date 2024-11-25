<style>
        body {
            background-color: #f4f4f4;
            background: linear-gradient(109.6deg, rgb(157, 75, 199) 11.2%, rgb(119, 81, 204) 83.1%);
            padding: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        h1 {
            font-weight: 600;
            color: #fdfdfe;
            text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3, 0px 0px 20px #b393d3;
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

        /* Button styles with animations */
        a {
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            margin: 10px 0;
            color: #03e9f4;
            text-decoration: none;
            text-transform: uppercase;
            transition: 0.5s;
            letter-spacing: 2px;
            overflow: hidden;
            border-color: black;
        }

        a:hover {
            background: #03e9f4;
            color: #050801;
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 200px #03e9f4;
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
<div>
    <h2>About This Page</h2>
    <p>
        Welcome to our inventory management system! This project was developed by 
        <strong>Roozemond Vincent Peralta</strong>, a student from TW32. Here, you can efficiently manage both your 
        products and users within the system. Our goal is to provide you with a seamless experience, allowing you 
        to easily track inventory, manage user accounts, and optimize your operational workflows. Thank you for using our system!
    </p>
</div>


<a href="<?= base_url(); ?>">Back to Home</a>