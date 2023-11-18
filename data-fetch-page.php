<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment-3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-image: url('detail-shot-patterned-wall.jpg'); background-size: cover;">
    <header class="container-fluid">
        <div class="row">
            <div class="header-container">
                <div class="col-4 col-md-8 brand-logo ms-5">
                    <img src="FA logo-01.png" alt="Your Logo" class="img-fluid">
                </div>
                <div class="col-10 col-md-4 text-center">
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">Home</a>
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">About US</a>
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">Service</a>
                    <a href="" class="text-decoration-none border bg-light rounded text-dark px-2 py-1">Contact US</a>
                    <a href="index.html" class="text-decoration-none border bg-info rounded text-dark px-2 py-1 "><b>Previous</b></a>
                </div>
            </div>
        </div>
    </header>

    <section class="container mt-5">
        <h2 class="text-light">Stored User Messages</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php include('data_fetch.php'); ?>
            </tbody>
        </table>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>