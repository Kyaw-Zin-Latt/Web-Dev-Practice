<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark">

<div class="container">
    <div class="row my-3">
        <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-body">

                    <div class="mb-2 d-flex justify-content-between align-items-center">
                        <h4 class="text-primary">Contact App</h4>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            New Contact
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body row">
                                    <div class="col-6">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" name="name" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="phone">Phone</label>
                                        <input type="phone" id="phone" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create New Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-light table-striped mb-0 align-middle">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Control</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kyaw Zin Latt</td>
                            <td>123123123</td>
                            <td>
                                <button class="btn btn-outline-info">Edit</button>
                                <button class="btn btn-outline-danger">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>