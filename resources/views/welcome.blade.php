<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Resume Scanner</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<!-- Styles -->
<body class="antialiased">
<nav class="navbar bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            Resume Scanner
        </a>
    </div>
</nav>
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif

@if (session()->has('errors'))
    <div class="flex items-center bg-green-500 text-white text-sm font-bold px-4 py-3 mb-6 rounded" role="alert">

        <p>{{ session('message') }}</p>
    </div>
@endif
<div class="container ">
    <form action="{{route('resume.analyse')}}" method="post" enctype="multipart/form-data">

        @csrf
        <div class="row mt-5">

            <div class="col-6 box">
                <div class="mb-3">
                    <label for="resume" class="form-label">Upload or Paste Resume <small>(only PDF allowed)</small>
                    </label>
                    <div class="mb-3">
                        <input type="file" name="resumePDF" class="form-control form-control-sm" id="resumePDF"
                               accept="application/pdf">
                    </div>
                    <textarea class="form-control" id="resume" rows="12" name="resume"></textarea>
                </div>

            </div>
            <div class="col-6 box right-box">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="jobTitle" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="jobTitle" name="jobTitle"
                                   placeholder="Job title">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="jobIndustry" class="form-label">Job Industry</label>
                            <input type="text" class="form-control" id="jobIndustry" name="jobIndustry"
                                   placeholder="Job Industry">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="jobDescription" class="form-label">Job Description</label>
                    <textarea class="form-control" id="jobDescription" rows="10" name="jobDescription"></textarea>
                </div>
            </div>

            <div class="btn-group mt-5" role="group" aria-label="Basic example">
                <input class="btn btn-outline-primary" type="reset" value="Reset">
                <input class="btn btn-primary" type="submit" value="Submit">

            </div>

        </div>
    </form>

</div>

</body>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/script.js')}}"></script>
</html>
