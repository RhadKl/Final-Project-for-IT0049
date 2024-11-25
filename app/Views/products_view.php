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
    text-align: center;
}


.table {
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
}

.table th, .table td {
    padding: 15px;
    text-align: left;
}

.table th {
    background-color: #28a745;
    color: white;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.table-hover tbody tr:hover {
    background-color: #f1f1f1;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px 0;
    color: #03e9f4;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 1px;
}

.btn-success {
    border: 1px solid #28a745;
    background-color: transparent; 
}

.btn-success:hover {
    background: #28a745;
    color: #fff;
}

.btn-warning {
    background-color: #ffc107;
    color: #fff;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
}

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


</style>

<div>
    <h1>List of Products</h1>
    <a href="<?= base_url('products/add'); ?>" class="btn btn-lg btn-success">Add New Product</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Barcode</th>
                <th>Product Name</th>
                <th>Description</th> 
                <th>Unit</th>
                <th>Purchase Price</th> 
                <th>Selling Price</th>
                <th>Wholesale Price</th>
                <th>Delivery Date</th>
                <th>Supplier</th> 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($products)): ?>
                <tr>
                    <td colspan="10" class="text-center">No products found.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->barcode; ?></td>
                        <td><?= $product->productname; ?></td>
                        <td><?= $product->description; ?></td>
                        <td><?= $product->unit; ?></td>
                        <td><?= $product->purchaseprice; ?></td>
                        <td><?= $product->sellingprice; ?></td>
                        <td><?= $product->wholesaleprice; ?></td>
                        <td><?= $product->deliverydate; ?></td>
                        <td><?= $product->supplier; ?></td>
                        <td> 
                            <a href="<?= base_url('products/view/'.$product->id); ?>" class="btn btn-sm btn-warning">View</a>
                            <a href="<?= base_url('products/edit/'.$product->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                            <a href="<?= base_url('products/delete/'.$product->id); ?>" 
                               class="btn btn-sm btn-danger" 
                               onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<a href="<?= base_url(); ?>">Back to Home</a>
