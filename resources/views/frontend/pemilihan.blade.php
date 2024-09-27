{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(Session::has('success'))
        <h1>{{ Session::get('success') }}</h1>
    @endif

    @if(Session::has('error'))
        <h1>{{ Session::get('error') }}</h1>
    @endif

    <h2>Pemilihan {{$pemilihan->name}}</h2>
    <p>Kandidat : {{$pemilihan->kandidats->count()}}</p>
    <p>Mulai : {{$pemilihan->mulai}}</p>
    <p>Berakhir : {{$pemilihan->berakhir}}</p>

    <h2>Kandidat</h2>
    @foreach ($pemilihan->kandidats as $kandidat)
        <p>{{$kandidat->name}}</p>
        <p>{{$kandidat->description}}</p>
        <a href={{route('frontend.vote', ['pemilihan_id' => $pemilihan->id, 'kandidat_id' => $kandidat->id])}} onclick="return confirm('Apakah anda yaking ingin vote {{$kandidat->name}}?');" href="">Vote untuk {{$kandidat->name}}</a>
    @endforeach
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Proza+Libre:ital,wght@0,400;0,500;0,600;0,700;0,800&display=swap"
            rel="stylesheet" />
        @vite('resources/css/app.css')
        <title>Daftar Kandidat</title>
    </head>
    <body class="font-libre">
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

            <div class="font-garamond mt-10">
                <div class="text-greenhmif">
                    <h1 class="text-center font-bold text-5xl">DAFTAR KANDIDAT</h1>
                    <h2 class="text-center font-semibold text-3xl uppercase">
                        CALON {{$pemilihan->name}}
                    </h2>
                </div>
            </div>

            <div>
                <div class="flex justify-center font-libre gap-12 py-12">
                    <div class="flex flex-col items-center text-center font-garamond">
                        <img
                            class="w-[463px] h-[536px] object-cover drop-shadow-[0px_0px_31px_rgba(0,0,0,0.25)]"
                            src="{{ asset('img/kandidat.jpg') }}"
                            alt="" />
                        <div
                            class="bg-white w-[356px] top-[-90px] relative px-5 py-4 drop-shadow-[0px_4px_4px_rgba(0,0,0,0.25)] left-auto">
                            <p class="text-2xl font-semibold">
                                {{$pemilihan->kandidats[0]->description}}
                            </p>
                            <hr class="my-2" style="border: 1px solid #c6c6c6" />
                            <h1 class="font-libre text-greenhmif text-2xl font-bold uppercase">{{$pemilihan->kandidats[0]->name}}</h1>
                            <h2 class="text-greenhmif text-xl font-medium capitalize">{{$pemilihan->kandidats[0]->kabinet}}</h2>
                        </div>
                    </div>
                    <div>
                        <h1
                            style=" -webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #185519;"
                            class="mt-5 text-kandidat1 stroke-greenhmif stroke-2 text-8xl font-bold">
                            #1
                        </h1>
                        <ul class="list-disc list-inside mt-2">
                            <li class="text-orangeelection text-3xl">
                                <div class="text-black inline font-semibold text-2xl relative left-[-17px] top-[-3px] uppercase">
                                    KABINET {{$pemilihan->kandidats[0]->kabinet}}
                                </div>
                            </li>
                        </ul>
                        <p class="text-3xl font-medium mt-5">
                            Visi: <br />{{$pemilihan->kandidats[0]->visi}} <br /><br />
                            Misi:
                        </p>
                        <ol class="list-decimal list-inside text-3xl font-medium relative left-[12px] mb-5">
                            <li>{{$pemilihan->kandidats[0]->misi_1}}</li>
                            <li>{{$pemilihan->kandidats[0]->misi_2}}</li>
                            <li>{{$pemilihan->kandidats[0]->misi_3}}</li>
                        </ol>
                        <a
                            class="text-greenhmif text-3xl bg-kandidat1 px-6 py-1 rounded-full italic drop-shadow-[0px_4px_4px_rgba(0,0,0,0.25)] font-medium"
                            href="">See more</a>
                    </div>
                </div>
            </div>
        </div>
        @for ($i = 1; $i < count($pemilihan->kandidats); $i++)
        @if ($pemilihan->kandidats[$i]->nomor_urut %2 == 0)
            <div class="bg-[url('../../public/img/bgbody2.png')] bg-center bg-cover bg-no-repeat">
            <div class="flex flex-row-reverse justify-center font-libre gap-12 py-12 pt-36">
        @else
                <div class="bg-[url('../../public/img/bgbody.png')] bg-center bg-cover bg-no-repeat">
                <div class="flex justify-center font-libre gap-12 py-12 pt-36">
        @endif
                <div class="flex flex-col items-center text-center font-garamond">
                    <img
                        class="w-[463px] h-[536px] object-cover drop-shadow-[0px_0px_31px_rgba(0,0,0,0.25)]"
                        src="{{ asset('img/kandidat.jpg') }}"
                        alt="" />
                    <div
                        class="bg-white w-[356px] top-[-90px] relative px-5 py-4 drop-shadow-[0px_4px_4px_rgba(0,0,0,0.25)] left-auto">
                        <p class="text-2xl font-semibold">
                            “{{$pemilihan->kandidats[$i]->description}}”
                        </p>
                        <hr class="my-2" style="border: 1px solid #c6c6c6" />
                        <h1 class="font-libre text-greenhmif text-2xl font-bold uppercase">{{$pemilihan->kandidats[$i]->name}}</h1>
                        <h2 class="text-greenhmif text-xl font-medium capitalize">{{$pemilihan->kandidats[$i]->kabinet}}</h2>
                    </div>
                </div>
                <div>
                    <h1 style="-webkit-text-stroke-width: 3px; -webkit-text-stroke-color: #185519"
                        class="mt-5 text-whitekandidat stroke-greenhmif stroke-2 text-8xl font-bold">
                        #{{$pemilihan->kandidats[$i]->nomor_urut}}
                    </h1>
                    <ul class="list-disc list-inside mt-2">
                        <li class="text-greenhmif text-3xl">
                            <div class="text-black inline font-semibold text-2xl relative left-[-17px] top-[-3px] uppercase">
                                KABINET {{$pemilihan->kandidats[$i]->kabinet}}
                            </div>
                        </li>
                    </ul>
                    <p class="text-3xl font-medium mt-2">
                        Visi: <br />{{$pemilihan->kandidats[$i]->visi}} <br /><br />
                        Misi:
                    </p>
                    <ol class="list-decimal list-inside text-3xl font-medium relative left-[12px] mb-10">
                        <li>{{$pemilihan->kandidats[$i]->misi_1}}</li>
                        <li>{{$pemilihan->kandidats[$i]->misi_2}}</li>
                        <li>{{$pemilihan->kandidats[$i]->misi_3}}</li>
                    </ol>
                    <a
                        class="text-greenhmif text-3xl bg-white px-6 py-1 rounded-full italic drop-shadow-[0px_4px_4px_rgba(0,0,0,0.25)] font-medium"
                        href="">See more</a>
                </div>
            </div>
        </div>
        @endfor
        <footer class="px-6 py-3 font-libre">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-greenfooter font-semibold text-2xl">HMIF ITERA</h1>
                    <p class="text-greenfooter font-normal text-sm">
                        Jalan Terusan Ryacudu, Desa <br />
                        Way Hui, Kecamatan Jatiagung,<br />
                        Lampung Selatan,
                    </p>
                </div>
                <div>
                    <div class="flex gap-12">
                        <h1 class="text-greenfooter font-semibold text-2xl">ABOUT HMIF</h1>
                        <h1 class="text-greenfooter font-semibold text-2xl">DPA HMIF ITERA</h1>
                        <h1 class="text-greenfooter font-semibold text-2xl">WEB-DEV TEAM</h1>
                    </div>
                </div>
            </div>
            <hr class="mt-3" style="border: 2px solid #475647" />
            <div class="flex mt-4 justify-between">
                <p class="text-sm">
                    ©2024 HMIF ITERA <br />
                    Powered by Technopreneur HMIF
                </p>
                <div class="flex gap-5">
                    <img src="{{ asset('img/Instagram.png') }}" alt="" />
                    <img src="{{ asset('img/Youtube.png') }}" alt="" />
                    <img src="{{ asset('img/Tiktok.png') }}" alt="" />
                </div>
            </div>
        </footer>
    </body>
</html>
