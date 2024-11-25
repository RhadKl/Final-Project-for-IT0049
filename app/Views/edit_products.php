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
        text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 20px #b393d3;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;
        margin-bottom: 50px; 
        text-align: center; 
    }

    .form-wrapper {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        width: 100%; 
        max-width: 500px;
        margin: auto; 
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }

    .form-control {
        padding: 12px;
        font-size: 16px;
        border-radius: 6px;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #28a745;
        box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    }

    /* Button styles */
    .btn {
        display: inline-block;
        padding: 15px 30px;
        margin: 10px 0;
        color: #03e9f4;
        text-decoration: none;
        text-transform: uppercase;
        transition: 0.5s;
        letter-spacing: 2px;
        border: 2px solid transparent; 
        border-radius: 6px; 
    }

    .btn-success {
        border-color: #28a745;
        background-color: transparent;
    }

    .btn-success:hover {
        background: #28a745;
        color: #050801;
        box-shadow: 0 0 5px #28a745,
                    0 0 25px #28a745,
                    0 0 50px #28a745,
                    0 0 200px #28a745;
    }

    .btn-danger {
        border-color: #dc3545;
        background-color: transparent; 
    }

    .btn-danger:hover {
        background: #dc3545;
        color: #fff;
        box-shadow: 0 0 5px #dc3545,
                    0 0 25px #dc3545,
                    0 0 50px #dc3545,
                    0 0 200px #dc3545;
    }

    @media (max-width: 576px) {
        h1 {
            font-size: 2rem; 
        }

        .form-wrapper {
            padding: 20px; 
        }
    }

    /* Button animations */
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

<div class="form-wrapper">
    <h1>Edit Product</h1>
    <form action="<?= base_url('products/edit/'.$product['id']); ?>" method="post">
        <div class="form-group">
            <label for="barcode" class="form-label">Barcode</label>
            <input type="text" name="barcode" id="barcode" class="form-control" value="<?= $product['barcode']; ?>" required>
        </div>
        <div class="form-group">
            <label for="productname" class="form-label">Product Name</label>
            <input type="text" name="productname" id="productname" class="form-control" value="<?= $product['productname']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3"><?= $product['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" name="unit" id="unit" class="form-control" value="<?= $product['unit']; ?>" required>
        </div>
        <div class="form-group">
            <label for="purchaseprice" class="form-label">Purchase Price</label>
            <input type="number" name="purchaseprice" id="purchaseprice" class="form-control" step="0.01" value="<?= $product['purchaseprice']; ?>" required>
        </div>
        <div class="form-group">
            <label for="sellingprice" class="form-label">Selling Price</label>
            <input type="number" name="sellingprice" id="sellingprice" class="form-control" step="0.01" value="<?= $product['sellingprice']; ?>" required>
        </div>
        <div class="form-group">
            <label for="wholesaleprice" class="form-label">Wholesale Price</label>
            <input type="number" name="wholesaleprice" id="wholesaleprice" class="form-control" step="0.01" value="<?= $product['wholesaleprice']; ?>" required>
        </div>
        <div class="form-group">
            <label for="deliverydate" class="form-label">Delivery Date</label>
            <input type="date" name="deliverydate" id="deliverydate" class="form-control" value="<?= $product['deliverydate']; ?>" required>
        </div>
        <div class="form-group">
            <label for="supplier" class="form-label">Supplier</label>
            <input type="text" name="supplier" id="supplier" class="form-control" value="<?= $product['supplier']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update Product</button>
        <a href="<?= base_url('products'); ?>" class="btn btn-danger">Cancel</a>
    </form>
</div>