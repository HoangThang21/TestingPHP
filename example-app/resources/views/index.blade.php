<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('../css/index.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-success position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col col-lg-8 col-12 " style="padding: 48px 48px 0">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <p class="fw-semibold fs-3" style="color:#00458a">Send us a Message</p>
                    </div>
                    <img style="width: 52px;height: 52px; " src="{{ '/image/email.svg' }}" alt="">
                </div>
                <form action="{{ route('form.thankyou') }}" method="POST" id="myForm">
                    @csrf
                    <div class="container-fluid p-0">
                        <div class="row gap-4">
                            <div class="col mb-24"><label for="name"
                                    class="form-label text-secondary fw-semibold">Your Name</label>
                                <input type="text" class="border-input-bottom fw-semibold" id="name"
                                    name="name" required>
                            </div>
                            <div class="col mb-24"><label for="emailInput"
                                    class="form-label text-secondary fw-semibold">Email Address</label>
                                <input type="email" class="border-input-bottom fw-semibold" id="emailInput"
                                    name="emailInput" required>
                            </div>
                        </div>
                        <div class="row gap-4">
                            <div class="col mb-24"><label for="numberInput"
                                    class="form-label text-secondary fw-semibold">Phone</label>
                                <div class="position-relative">
                                    <span class="position-absolute" style="top: 24%; left: 10px;">(800)</span>
                                    <input type="text" id="numberInput" class="border-input-bottom fw-semibold"
                                        name="phone" required maxlength="12" style="padding-left: 48px !important">
                                </div>
                            </div>
                            <div class="col mb-24"><label for="company"
                                    class="form-label text-secondary fw-semibold">Company</label>
                                <input type="text" class="border-input-bottom fw-semibold" id="company"
                                    name="company" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-24"><label for="message"
                                    class="form-label text-secondary fw-semibold">Message</label>
                                <textarea type="text" class="border-input-bottom fw-semibold" id="message" name="message"
                                    style="height: 90px;  resize: none;" required></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-24">
                        <button type="submit" class=" btn text-light px-4"
                            style="background-color: #7424d6">Send</button>
                    </div>
                </form>
            </div>
            <div class="col col-lg-4 col-12 p-0 " style="background-color: #004284">
                <div class="d-flex flex-column gap-5" style="padding: 48px 48px 0">
                    <div class="">
                        <p class="fw-semibold fs-4 text-light ">Contact Infomation</p>
                    </div>
                    <div class="d-flex flex-column gap-5">
                        <div class="d-flex gap-2 align-items-center"><img class="w-h-48"
                                src="{{ '/image/location_on.svg' }}" alt="">
                            <div class="">
                                <p class="m-0 text-light fw-medium">360 King Street</p>
                                <p class="m-0 text-light fw-medium">Feasterville Trevose, PA 19053</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 align-items-center"><img class="w-h-48" src="{{ '/image/phone.svg' }}"
                                alt="">
                            <p class="m-0 text-light fw-medium">(800) 900-200-300</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center"><img class="w-h-48"
                                src="{{ '/image/attach_email.svg' }}" alt="">
                            <p class="m-0 text-light fw-medium">info@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex gap-4 align-items-center mt-3">
                        <a href=""><img class="w-h-48" src="{{ '/image/twitter.svg' }}" alt=""></a>
                        <a href=""> <img class="w-h-48" src="{{ '/image/linkedin-Icon.svg' }}"
                                alt=""></a>
                        <a href=""> <img class="w-h-48" src="{{ '/image/insta.svg' }}" alt=""></a>



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
    <script src="{{ asset('../js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
