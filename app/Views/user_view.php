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
    margin-bottom: 50px; /* Adjust this value to increase or decrease the gap */
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
    background-color: #e9ecef; 
    color: #6c757d; 
}

.form-control:focus {
    border-color: #28a745;
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
    background-color: #e9ecef;
}

/* Button styles with animations */
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
}
</style>

<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6 form-wrapper">
        <h1 class="text-center">User Profile</h1>
        <form action="" method="post">
            <div class="form-group mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $user['email']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" value="<?= $user['fullname']; ?>" readonly>
            </div>
            <div class="form-group">
                <a href="<?= base_url('users'); ?>" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
