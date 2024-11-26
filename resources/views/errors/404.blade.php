<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>

    <link href="{{ mix('css/app-style.css') }}" rel="stylesheet">
</head>
<body class="font-poppins">
    
    <main role="main" class="max-w-6xl mx-auto">
        <div class="container mx-auto px-4 h-screen flex items-center justify-center">
            <div class="grid md:grid-cols-2 gap-10">
                <div class="max-sm:order-2 flex items-center justify-center">
                    <div class="max-sm:text-center space-y-8">
                        <div>
                            <h2 class="text-4xl font-medium mb-3">So Sorry!</h2>
                            <h3 class="text-2xl font-normal">The Page you are looking for <br> cannot be found</h3>
                        </div>
                        <div>
                            <h5 class="text-xl font-medium mb-2 max-sm:text-start">Possible Reasons</h5>
                            <ul class="list-disc ps-4 mb-10 max-sm:text-start">
                                <li>The address may have been typed incorectly</li>
                                <li>It may be a broken or outdated link</li>
                            </ul>
                        </div>
                        <div>
                            <a href="{{ route('landingpage', app()->getLocale()) }}" class="bg-orange-500 text-white text-lg px-14 py-2.5 rounded-md hover:bg-orange-600 transition duration-150 ease-in">Home</a>
                        </div>
                    </div>
                </div>
                <div class="max-sm:order-1">
                    <img src="{{ asset('image/404.png') }}" alt="404" class="w-auto max-w-full h-auto">
                </div>
            </div>
        </div>
    </main>

    <script src="{{ mix('js/app-script.js') }}"></script>
</body>
</html>