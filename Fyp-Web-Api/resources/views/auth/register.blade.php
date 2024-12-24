<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />


        <style>
            .form {
                width: 500px;
                padding: 30px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .form-group {
                margin-bottom: 1rem;
            }

            .form-label {
                font-weight: 600;
            }
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container-xxl">
                <div class="row">
                    <div class="d-flex justify-content-center vh-100 align-items-center">
                        <form action="/register" method="POST" class="form">
                            @csrf

                            <h3 class="text-center m-0 mb-3 dark-purple">Register</h3>

                            <div class="form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control bg-transparent" id="name">
                                @error('name')
                                    <span class="d-block text-danger mt-1" style="font-size: 14px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter your email">
                                @error('email')
                                    <span class="d-block text-danger mt-1" style="font-size: 14px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password">
                                @error('password')
                                    <span class="d-block text-danger mt-1" style="font-size: 14px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" placeholder="Confirm your password">
                                @error('password_confirmation')
                                    <span class="d-block text-danger mt-1" style="font-size: 14px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
