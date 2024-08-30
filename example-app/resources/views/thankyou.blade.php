<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class=" border border-dark position-absolute top-50 start-50 translate-middle">

        <div class="" style="padding: 24px">
            <div class="">
                <p class="fw-bolder fs-3" style="color:#0080ff">Thank you for contacting us</p>
                <p class="my-5">We will be back in touch with you within one business day using the information you
                    just provided below:</p>
                <div class="container m-0 p-0">
                    <div class="row mb-3">
                        <div class="col-md-2 fw-bold" style="min-width: 135px !important">Name:</div>
                        <div class="col-md-8 p-0">{{ $name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2 fw-bold" style="min-width: 135px !important">Phone:</div>
                        <div class="col-md-8 p-0 ">{{ $phone }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2 fw-bold" style="min-width: 135px !important">Email Address:</div>
                        <div class="col-md-8 p-0 "> <a a href="mailto:{{ $email }}">{{ $email }}</a></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2 fw-bold" style="min-width: 135px !important">Company:</div>
                        <div class="col-md-8 p-0 ">{{ $company }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="errorText" style="display: none">
        <div class="container-fluid  position-absolute start-0 top-0 z-1"
            style="height: 100vh; background-color: rgb(201, 201, 201);opacity: 0.5;"></div>
        <div class="position-absolute  z-2" style="top: 100px; left: 40%;">
            <div class=" d-flex flex-column align-items-center bg-light p-4"
                style="margin-top: 40px; background-color: #fff ;max-width: 300px;">
                <p class="fw-bold fs-2">Face-plant!</p>
                <p class="fw-medium fs-5 text-center">Ooops, something went wrong</p>
                <div class="" style="margin-bottom: 30px"><i style="font-size: 100px; color:red; "
                        class="bi bi-x-circle"></i></div>
                <button id="tryagain" type="button"
                    class="text-center text-light border border-0 p-2 rounded-pill fs-5"
                    style="background-color: red; width: 100%;">Try again</button>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
