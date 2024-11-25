<?php
namespace App\Controllers;

class Products extends BaseController {
    public function index() {
        // Load the model 
        $productsmodel = model('Products_model');

        // Retrieve the data from the table
        $data['products'] = $productsmodel->get()->getResult(); // Changed to match Users controller

        $data['title'] = "List of Products";

        return view('include\header', $data)
            .view('include\navbar')
            .view('products_view', $data)
            .view('include\footer');
    }

    public function add() {
        if ($this->request->getMethod() === 'post') { // Using getMethod for consistency
            // Load Products model
            $productsmodel = model('Products_model');

            // Retrieve data from form
            $productdata = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'sellingprice',
                'wholesaleprice',
                'deliverydate',
                'supplier',
            ]);

            // Insert data into the table
            $productsmodel->insert($productdata);

            // Redirect to the products list page
            return redirect()->to('products');
        }

        $data['title'] = "Add New Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('add_products_view', $data)
            .view('include\footer');
    }

    public function view($id = 0) {
        // Load the model
        $productsmodel = model('Products_model');

        // Retrieve the product data by ID
        $data['product'] = $productsmodel->where('id', $id)->first(); // Changed to match Users controller

        // Check if the product exists
        if (!$data['product']) {
            // Handle the error - redirect or show an error page
            return redirect()->to(base_url('products'))->with('error', 'Product not found.');
        }

        $data['title'] = "View Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('product_view', $data)
            .view('include\footer');
    }

    public function edit($id = 0) {
        $productsmodel = model('Products_model');

        if ($this->request->getMethod() === 'post') { // Using getMethod for consistency
            // Retrieve data from form
            $updatedata = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'sellingprice',
                'wholesaleprice',
                'deliverydate',
                'supplier',
            ]);

            // Update product in the table
            $productsmodel->update($id, $updatedata);

            // Redirect to the products list page
            return redirect()->to(base_url('products'));
        }

        // Retrieve the product data by ID
        $data['product'] = $productsmodel->where('id', $id)->first(); // Changed to match Users controller

        // Check if the product exists
        if (!$data['product']) {
            // Handle the error - redirect or show an error page
            return redirect()->to(base_url('products'))->with('error', 'Product not found.');
        }

        $data['title'] = "Edit Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('edit_products', $data)
            .view('include\footer');
    }

    public function delete($id = 0) {
        $productsmodel = model('Products_model');
        $productsmodel->delete($id);

        return redirect()->to('products');
    }
}
?>
