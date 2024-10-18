{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pemilihan yang sedang berlangsung</h1>
    @foreach ($pemilihans as $pemilihan)
        <h2>Pemilihan {{$pemilihan->name}}</h2>
        <p>Kandidat : {{$pemilihan->kandidats->count()}}</p>
        <p>Mulai : {{$pemilihan->mulai}}</p>
        <p>Berakhir : {{$pemilihan->berakhir}}</p>
        <a href={{route('frontend.pemilihan', $pemilihan->id)}}>Ikut Voting</a>
    @endforeach
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800&display=swap"
            rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>Beranda</title>
</head>
<body>
     <div class="bg-[url('../../public/img/bgbody.png')] bg-center bg-cover bg-no-repeat">
            <nav class="flex justify-between items-center py-5 px-16 text-greenhmif font-bold">
                <div>
                    <h1 class="text-5xl m-0">HMIF</h1>
                    <h1 class="text-2xl text-orangeelection m-0">ELECTION</h1>
                </div>
                <div class="flex gap-14">
                    <a href="" class="text-3xl">Beranda</a>
                    <a href="" class="text-3xl font-extrabold">Kandidat</a>
                    <a href="" class="text-3xl">Vote</a>
                </div>
                <div class="flex items-center gap-3 bg-greenhmif py-2 px-5 rounded-full">
                    <a class="text-orangeelection text-2xl relative top-[2px]" href=""
                        >Contact Us</a
                    >
                    <img src="{{ asset('img/hmif.png') }}" alt="" />
                </div>
            </nav>

            <div class="flex flex-col justify-center items-center font-garamond pt-56 pb-40">
                <h2 class="text-greenhmif font-semibold text-3xl px-3 py-1 border-greenhmif border-2 rounded-full">#TogetherWeBuildTheFuture</h2>
                <h1 class="text-greenhmif font-bold text-6xl mt-6">DARI GENERASI KE GENERASI</h1>
                <img class="my-2" src="{{ asset('img/hmifhero.png') }}" alt="hmif">
                <h1 class="text-greenhmif font-semibold text-5xl italic">BERSATU MENGEJAR MIMPI DENGAN AKSI</h1>
                <h2 class="mt-10 text-orangeelection text-3xl px-4 py-2 bg-greenhmif rounded-full">Who would be the next captain for the future adventure?</h2>
                <h3 class="text-greenhmif font-normal text-2xl mt-28">Lihat lebih lanjut</h3>
                <img class="mt-1" src="{{ asset('img/arrowup.png') }}" alt="">
            </div>
        </div>

        <div class="font-garamond bg-[url('../../public/img/bgtimeline.png')] bg-center bg-cover bg-no-repeat px-16">
            <h1 class="text-kandidat1 font-bold text-[81px] text-center">PEMILIHAN</h1>
            <h2 class="text-[47px] font-semibold text-center text-whitekandidat ">YANG SEDANG BERLANGSUNG</h2>

            <div class="flex justify-center items-center w-full mt-8">
                <div class="bg-[#003301] flex justify-center items-center flex-col py-8 px-10 w-full opacity-80">
                    <h2 class="text-[97px] font-bold text-white">4</h2>
                    <hr class="border-white border-2 w-full">
                    <h3 class="font-medium text-white text-[31px] mt-6">Calon kandidat terdaftar</h3>
                </div>
                <div class="bg-[#071667] flex justify-center items-center flex-col py-8 px-10 w-full opacity-80">
                    <h2 class="text-[97px] font-bold text-white">256</h2>
                    <hr class="border-white border-2 w-full">
                    <h3 class="font-medium text-white text-[31px] mt-6">Calon pemilih</h3>
                </div>
                <div class="bg-[#C59B00] flex justify-center items-center flex-col py-8 px-10 w-full opacity-80">
                    <h2 class="text-[97px] font-bold text-white">14</h2>
                    <hr class="border-white border-2 w-full">
                    <h3 class="font-medium text-white text-[31px] mt-6">Hari pemilihan</h3>
                </div>
            </div>
        </div>
</body>
</html>