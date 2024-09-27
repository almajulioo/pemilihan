<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style>
            input:-webkit-autofill::first-line {
                color: rgba(24,85,25,0.5);
                background: transparent;
            }
        </style>
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800&display=swap"
            rel="stylesheet" />
        @vite('resources/css/app.css')
        <title>Login</title>
    </head>
    <body class="font-libre">
        
        <div class="bg-[url('../../public/img/bglogin.png')] bg-center bg-cover bg-no-repeat min-h-screen">
            <nav class="flex justify-between items-center py-5 px-16 text-greenhmif font-bold">
                <div>
                    <h1 class="text-5xl m-0">HMIF</h1>
                    <h1 class="text-2xl text-orangeelection m-0">ELECTION</h1>
                </div>
                <div class="flex items-center gap-3 bg-greenhmif py-2 px-5 rounded-full">
                    <a class="text-orangeelection text-2xl relative top-[2px]" href="">Contact Us</a>
                    <img src="{{ asset('img/hmif.png') }}" alt="" />
                </div>
            </nav>

            <div class="px-14 pt-20 pb-24">
                <h1 class="font-garamond font-semibold text-3xl px-5 py-3 border-greenhmif border-2 w-fit rounded-full">
                    #SuarakanAspirasimu
                </h1>
                <div class="min-h-[610px] max-h-[661px] mt-3 flex gap-8">
                    <form
                        class="flex-1 min-w-[60%] bg-[rgba(255,255,255,0.5)] rounded-3xl px-9 py-14 pb-32 drop-shadow-drop"
                        method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label class="font-bold text-3xl text-greenhmif" for="email">Email</label>
                        </div>
                        <input
                            class="focus:outline-none placeholder:text-[rgba(24,85,25,0.5)] text-[rgba(24,85,25,0.5)] leading-loose border-b-2 border-greenhmif bg-transparent italic font-medium text-2xl w-full"
                            placeholder="Inputkan email itera kamu"
                            type="email"
                            name="email"
                            id="email" />
                        <div class="mt-9">
                            <label class="font-bold text-3xl text-greenhmif" for="password">Password</label>
                        </div>
                        <input
                            class="focus:outline-none placeholder:text-[rgba(24,85,25,0.5)] text-[rgba(24,85,25,0.5)] leading-loose border-b-2 border-greenhmif bg-transparent italic font-medium text-2xl w-full"
                            placeholder="Inputkan password kamu"
                            type="password"
                            name="password"
                            id="password" />

                        <input
                            class="text-greenhmif bg-orangeelection px-14 py-3 mt-20 rounded-full font-medium text-2xl drop-shadow-drop cursor-pointer"
                            type="submit"
                            value="Login" />
                    </form>
                    <div
                        class="font-garamond flex flex-col flex-1 max-w-[399px] bg-[url('../../public/img/kandidatlogin.png')] bg-no-repeat bg-cover bg-center rounded-[30px] px-9 pb-11 drop-shadow-drop text-white justify-end">
                        <h3 class="font-bold text-3xl">#3</h3>
                        <h3 class="font-bold text-3xl">Alma <span class="text-kandidat1">Julio</span></h3>
                        <p class="font-medium text-lg">“Menjadikan HMIF berasaskan Pancasila, undang-undang dasar, naive bayes, DFS, BFS, dan DDS”</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
