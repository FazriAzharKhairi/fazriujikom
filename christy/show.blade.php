<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservations</title>
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #f8f9fa;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-header text-dark text-center">
                        <h4 class="mb-0">
                            <i class="fas fa-check-circle fa-1x bg-primary p-2 rounded-circle"></i><br>
                            Reservasion Success
                        </h4>
                    </div>
                    <div class="card-body">
                        @foreach ($bookings as $b)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="card-text fw-bold">Id</p>
                                        <p class="card-text fw-bold">Name</p>
                                        <p class="card-text fw-bold">Email</p>
                                        <p class="card-text fw-bold">Phone</p>
                                        <p class="card-text fw-bold">People</p>
                                        <p class="card-text fw-bold">Date</p>
                                        <p class="card-text fw-bold">Message</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="card-text fw-bold">: {{ $b->id }}</p>
                                        <p class="card-text fw-bold">: {{ $b->name }}</p>
                                        <p class="card-text fw-bold">: {{ $b->email }}</p>
                                        <p class="card-text fw-bold">: {{ $b->phone }}</p>
                                        <p class="card-text fw-bold">: {{ $b->people }}</p>
                                        <p class="card-text fw-bold">: {{ $b->date }}</p>
                                        <p class="card-text fw-bold">: {{ $b->message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ url('home') }}" class="btn btn-primary w-100">Back</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>