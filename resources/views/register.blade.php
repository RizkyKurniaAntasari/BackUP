    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body class="min-h-screen font-poppins">
        <!-- Background dengan blur --> 
        <div 
            class="absolute inset-0 bg-[url('/img/forest.jpg')] bg-fixed bg-center bg-no-repeat bg-cover min-h-screen">
        </div>

        <!-- Container utama -->
            {{-- {{ route('postLogin') }} --}}
        
            @csrf
            {{-- {{ csrf_field() }}  --}}

            <div class="relative min-h-screen flex items-center justify-center p-4">
                <!-- Card login dengan backdrop blur -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl p-8 w-full max-w-xs sm:max-w-sm space-y-6">
                    <!-- Header -->
                    <div class="space-y-2 text-center">
                        <h1 class="text-3xl font-bold text-white">Welcome</h1>
                        <p class="text-gray-200">Regist New Account</p>
                    </div>

                    <!-- Form -->
                    <div class="space-y-4">
                        <input type="email" name="email" placeholder="Gmail@gmail.com"
                            class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white">

                        <input type="password" name="password" placeholder="Password"
                            class="w-full px-4 py-2 rounded-lg bg-white/20 border border-white/30 text-white placeholder-gray-200 focus:outline-none focus:ring-2 focus:ring-white">

                        <button
                            class="w-full py-2 bg-green-700/80 hover:bg-green-800/80 text-white rounded-lg flex items-center justify-center gap-2 transition duration-200">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </body>

    </html>