<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="antialiased min-h-screen relative lg:flex" x-data="{ open: false }">
    <nav class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 w-80 bg-gray-700 text-white h-screen"
        :class="{'translate-x-0 ease-in opacity-100':open === true,'-translate-x-full ease-out opacity-0':open === false}">
        <div class="flex justify-between">
            <span class="block text-2xl sm:text-3xl text-white font-bold p-4">
                AlpineJS
            </span>
            {{-- <span class="font-bold text-2xl sm:text-3xl p-2 mt-2">
                Sidebar
            </span> --}}
            <button class="p-2 focus:outline-none focus:bg-gray-700 hover:bg-gray-600 rounded-md lg:hidden"
                @click="open = false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <ul class="mt-8">
            <li>
                <a href="" class="block px-4 py-4 hover:bg-red-400 ">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>ホーム</span>
                </a>
            </li>

            <li>
                <a href="" class="block px-4 py-4 hover:bg-red-400 ">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                clip-rule="evenodd"></path>
                        </svg>

                        審査書類の提出</span>
                </a>
            </li>
            <li x-data="{ open: false }">

                <a class="flex justify-between px-4 py-4 hover:bg-red-400 " @click="open=!open"
                    @keydown.escape="open=false">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                clip-rule="evenodd"></path>
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                        </svg>
                        </svg>ショップの登録編集</span>
                    <span class="inline-block ml-12"> <svg class="w-6 h-6 inline" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </span>
                </a>

                <ul x-show="open" @click.away="open=false">
                    <li>
                        {{-- whitespace-preで空白を反映 --}}
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20">ショップの登録・編集</a>
                    </li>
                    <li>
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20"> お知らせの設定</a>
                    </li>
                    <li>
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20"> 料金の登録</a>
                    </li>
                    <li>
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20">クーポンの登録</a>
                    </li>
                </ul>
            </li>

            <li x-data="{ open: false }">

                <a class="flex justify-between px-4 py-4 hover:bg-red-400 " @click="open=!open"
                    @keydown.escape="open=false">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                clip-rule="evenodd"></path>
                        </svg>キャストの登録編集</span>
                    <span class="inline-block ml-12"> <svg class="w-6 h-6 inline" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </span>
                </a>

                <ul x-show="open" @click.away="open=false">
                    <li>
                        {{-- whitespace-preで空白を反映 --}}
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20"> キャストの登録編集</a>
                    </li>
                    <li>
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20"> お知らせの設定</a>
                    </li>
                    <li>
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20"> 料金の登録</a>
                    </li>
                    <li>
                        <a href="" class="whitespace-pre block px-4 py-4 hover:bg-red-400 ml-20"> クーポンの登録</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="" class="block px-4 py-4 hover:bg-red-400 ">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 3a1 1 0 000 2c5.523 0 10 4.477 10 10a1 1 0 102 0C17 8.373 11.627 3 5 3z"></path>
                            <path
                                d="M4 9a1 1 0 011-1 7 7 0 017 7 1 1 0 11-2 0 5 5 0 00-5-5 1 1 0 01-1-1zM3 15a2 2 0 114 0 2 2 0 01-4 0z">
                            </path>
                        </svg>
                        <span>運営からのお知らせ</span>

                </a>
            </li>

            <li>
                <a href="" class="block px-4 py-4 hover:bg-red-400 ">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z">
                            </path>
                        </svg>
                        <span>支払いオプション</span>
                </a>
            </li>

            <li>
                <a href="" class="block px-4 py-4 hover:bg-red-400 ">
                    <span>
                        <svg class="w-6 h-6 inline mr-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>退会について</span>
                </a>
            </li>


        </ul>

    </nav>
    <div class="relative z-0 lg:flex-grow">
        <header class="flex bg-gray-700 text-white items-center px-3">
            <button class="p-2 focus:outline-none focus:bg-gray-700 hover:bg-gray-600 rounded-md lg:hidden"
                @click="open = true">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <span class="block text-2xl sm:text-3xl text-white font-bold p-4 lg:invisible">
                AlpineJS
            </span>
        </header>
    </div>
</body>

</html>
