<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assetb/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assetb/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetb/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetb/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assetb/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create an account
                                        </p>
                                    </div>

                                    <form method="POST" action="{{ route('register') }}"
                                        class="row g-3 needs-validation" novalidate>
                                        @csrf

                                        <div class="col-12">
                                            <label for="name" class="form-label">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                value="{{ old('name') }}" required autofocus>
                                            <div class="invalid-feedback">Please enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                value="{{ old('email') }}" required>
                                            <div class="invalid-feedback">Please enter a valid email address!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password_confirmation" class="form-label">Confirm
                                                Password</label>
                                            <input type="password" name="password_confirmation" class="form-control"
                                                id="password_confirmation" required>
                                            <div class="invalid-feedback">Please confirm your password!</div>
                                        </div>

                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="terms" type="checkbox"
                                                        value="" id="terms" required>
                                                    <label class="form-check-label" for="terms">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' =>
                                                                '<a target="_blank" href="' .
                                                                route('terms.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Terms of Service') .
                                                                '</a>',
                                                            'privacy_policy' =>
                                                                '<a target="_blank" href="' .
                                                                route('policy.show') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('Privacy Policy') .
                                                                '</a>',
                                                        ]) !!}
                                                    </label>
                                                    <div class="invalid-feedback">You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="{{ route('login') }}">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetb/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assetb/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assetb/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assetb/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetb/js/main.js') }}"></script>

</body>

</html>
