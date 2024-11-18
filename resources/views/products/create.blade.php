<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Add Product</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input id="name" type="text" name="name" class="form-control form-control-lg"
                                    placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label h5">Price</label>
                                <input id="price" type="text" name="price" class="form-control form-control-lg"
                                    placeholder="Price">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label h5">Description</label>
                                <textarea id="description" name="description" cols="30" rows="5" class="form-control"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label h5">Product Image</label>
                                <input id="image" type="file" name="image"
                                    class="form-control form-control-lg">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                <a href="{{ route('products.list') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('products.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
    </div>

</body>

</html>
