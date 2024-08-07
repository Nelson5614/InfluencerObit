<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center h-screen bg-gray-100 ">
    <div class="p-20 bg-white border-2 rounded-md border-primary">
        <div class="text-center rounded-md ">
            <span class="text-3xl font-bold ">Join as business or influencer</span>
            <div class="flex items-center gap-6 py-6">
                <a href="{{ route('register', ['role'=>'business-owner']) }}" class="p-12 border-2 rounded-md  hover:border-primary border-gray-4s00">
                    <i class="w-12 h-12 text-primary bi bi-briefcase-fill"></i> <br>
                    <span>I am a business, looking for a content creator</span>
                </a>
                <a href="{{ route('register', ['role'=>'influencer']) }}" class="p-12 border-2 border-gray-400 rounded-md  hover:border-primary">

                    <div class="flex flex-col items-center">
                        <i class="text-primary bi bi-cc-circle"></i>
                        <span>I am a content creator, looking for a collaboration</span>
                    </div>

                </a>
            </div>
        </div>
    </div>
</body>
</html>
