<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <!-- <link rel="stylesheet" href="./bootstrap-5.3.2/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <!-- Nav Bar -->
    <div class="bg-light p-2">
        <h2>Simple Blog</h2>
    </div>

    <!-- Content -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- Avatar -->
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="row">
                    <div class="col-4">
                        <img src="https://ionicframework.com/docs/img/demos/avatar.svg" class="rounded-circle" alt="avatar" width="100%">
                    </div>
                    <div class="col-8 my-auto">
                        <h4>Your Name</h4>
                    </div>
                </div>
                <hr>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <!-- Post -->
                <div class="card mb-3">
                    <div class="card-header"><strong>Post Here</strong></div>
                    <div class="card-body">
                        <textarea class="form-control" rows="2" placeholder="Tell your feeling"></textarea>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Post</button>
                    </div>
                </div>

                <!-- Post List -->
                <div class="card mb-3">
                    <div class="card-header"><strong>Post</strong></div>
                    <div class="card-body">
                        post1
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header"><strong>Post</strong></div>
                    <div class="card-body">
                        post2
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header"><strong>Post</strong></div>
                    <div class="card-body">
                        post3
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header"><strong>Post</strong></div>
                    <div class="card-body">
                        post4
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <!-- Ad -->
                <?php
                for ($i = 0; $i < 3; $i++) {
                ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="card-title">Going to be ad</div>
                            <div class="card-subtitle text-muted">Free ad Contact me.</div>
                            <hr>
                            <p>Ad ad ad here</p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- <script src="./bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>