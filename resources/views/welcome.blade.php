<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jim's Online Eatery</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="374.953942009568" height="94.0059770892636" viewBox="0 -2.29 374.953942009568 94.0059770892636" class="css-1j8o68f"><defs id="SvgjsDefs2691"></defs><g id="SvgjsG2692" featurekey="nYIUkx-0" transform="matrix(1.3404605799043197,0,0,1.3404605799043197,10,-2.291666666666668)" fill="#c12f2f"><path xmlns="http://www.w3.org/2000/svg" d="M63.157,0H36.842C21.053,0,5.263,7.895,5.263,21.052v10.526h89.472V21.052C94.735,7.895,78.946,0,63.157,0z M28.947,21.052  c-1.458,0-2.632-1.173-2.632-2.631s1.174-2.632,2.632-2.632c1.458,0,2.631,1.174,2.631,2.632S30.405,21.052,28.947,21.052z   M39.473,10.526c-1.458,0-2.631-1.173-2.631-2.631c0-1.458,1.174-2.632,2.631-2.632c1.458,0,2.632,1.174,2.632,2.632  C42.105,9.353,40.931,10.526,39.473,10.526z M50,21.052c-1.458,0-2.632-1.173-2.632-2.631S48.542,15.79,50,15.79  s2.632,1.174,2.632,2.632S51.458,21.052,50,21.052z M60.527,10.526c-1.458,0-2.633-1.173-2.633-2.631  c0-1.458,1.175-2.632,2.633-2.632c1.456,0,2.63,1.174,2.63,2.632C63.157,9.353,61.983,10.526,60.527,10.526z M71.051,21.052  c-1.457,0-2.63-1.173-2.63-2.631s1.173-2.632,2.63-2.632c1.458,0,2.632,1.174,2.632,2.632S72.509,21.052,71.051,21.052z"></path><path xmlns="http://www.w3.org/2000/svg" d="M5.263,36.841C2.631,36.841,0,39.473,0,42.105c0,2.631,2.631,5.263,5.263,5.263h89.472c2.633,0,5.265-2.632,5.265-5.263  c0-2.632-2.632-5.264-5.265-5.264H5.263z"></path><path xmlns="http://www.w3.org/2000/svg" d="M5.263,52.631v5.263c0,5.263,5.263,10.526,10.526,10.526H84.21c5.263,0,10.524-5.264,10.524-10.526v-5.263H5.263z"></path></g><g id="SvgjsG2693" featurekey="PXhRQw-0" transform="matrix(1.68083688934731,0,0,1.68083688934731,158.0923487449854,9.755400314531737)" fill="#016565"><path d="M0.54 11.64 l2.82 0.000019531 l0 5.48 c0 0.18666 0.08666 0.28 0.26 0.28 l1.06 0 c0.17334 0 0.26 -0.1 0.26 -0.3 l0 -8.9 l-3.14 0 l0.5 -2.7 l5.56 0 l0 12.42 c0 0.57334 -0.16666 1.0633 -0.5 1.47 s-0.82 0.61 -1.46 0.61 l-3.44 0 c-0.57334 0 -1.0367 -0.16666 -1.39 -0.5 s-0.53 -0.78668 -0.53 -1.36 l0 -6.5 z M9.06 5.5 l2.9 0 l0 14.5 l-2.9 0 l0 -14.5 z M15.98 13.16 l0 6.84 l-2.82 0 l0 -14.5 l3.06 0 l1.58 6.12 l1.58 -6.12 l3.08 0 l0 14.5 l-2.82 0 l0 -6.84 l-1.84 5.8 z M23.6 5.52 l2.3 0 l-0.44 4.94 l-1.4 0 z M27.66 20 l-0.51996 -2.7 l3.12 0 c0.22666 0 0.34 -0.1 0.34 -0.3 l0 -2.64 c0 -0.2 -0.04 -0.32 -0.12 -0.36 s-0.22 -0.06 -0.42 -0.06 l-1.5 0 c-0.21334 0 -0.41668 -0.01666 -0.61002 -0.05 s-0.36668 -0.11 -0.52002 -0.23 s-0.27334 -0.28666 -0.36 -0.5 s-0.13 -0.5 -0.13 -0.86 l0 -4.92 c0 -0.57334 0.15666 -1.03 0.47 -1.37 s0.81 -0.51 1.49 -0.51 l4 0 l0.5 2.7 l-3.28 0 c-0.24 0 -0.36 0.10666 -0.36 0.32 l0 2.64 c0 0.14666 0.03666 0.24666 0.11 0.3 s0.18334 0.08 0.33 0.08 l1.82 0 c0.46666 0 0.82332 0.11 1.07 0.33 s0.37 0.60334 0.37 1.15 l0 4.78 c0 0.8 -0.16334 1.3667 -0.49 1.7 s-0.90332 0.5 -1.73 0.5 l-3.58 0 z M40.34 8.04 c-0.17334 0 -0.26 0.09334 -0.26 0.28 l0 8.84 c0 0.10666 0.01666 0.18332 0.05 0.22998 s0.11 0.07 0.23 0.07 l1.1 0 c0.12 0 0.19666 -0.02334 0.23 -0.07 s0.05 -0.12332 0.05 -0.22998 l0 -8.84 c0 -0.18666 -0.08666 -0.28 -0.26 -0.28 l-1.14 0 z M44.68 17.94 c0 0.28 -0.03334 0.54334 -0.1 0.79 s-0.18 0.46332 -0.34 0.64998 s-0.37334 0.33666 -0.64 0.45 s-0.6 0.17 -1 0.17 l-3.36 0 c-0.4 0 -0.73334 -0.05666 -1 -0.17 s-0.48 -0.26334 -0.64 -0.45 s-0.27334 -0.40332 -0.34 -0.64998 s-0.1 -0.51 -0.1 -0.79 l0 -10.56 c0 -0.57334 0.15666 -1.03 0.47 -1.37 s0.81 -0.51 1.49 -0.51 l3.6 0 c0.68 0 1.1767 0.17 1.49 0.51 s0.47 0.79666 0.47 1.37 l0 10.56 z M45.88 5.5 l2.76 0 l1.48 5.82 l0 -5.82 l2.98 0 l0 14.5 l-2.98 0 l-1.56 -6.06 l0 6.06 l-2.68 0 l0 -14.5 z M54.300000000000004 5.5 l2.98 0 l0 11.8 l2.92 0 l-0.5 2.7 l-5.4 0 l0 -14.5 z M61.1 5.5 l2.9 0 l0 14.5 l-2.9 0 l0 -14.5 z M65.19999999999999 5.5 l2.76 0 l1.48 5.82 l0 -5.82 l2.98 0 l0 14.5 l-2.98 0 l-1.56 -6.06 l0 6.06 l-2.68 0 l0 -14.5 z M73.61999999999999 5.5 l5.64 0 l0.5 2.7 l-3.16 0 l0 3.44 l2.4 0 l0 2.5 l-2.4 0 l0 3.16 l3.04 0 l-0.5 2.7 l-5.52 0 l0 -14.5 z M83.25999999999999 5.5 l5.64 0 l0.5 2.7 l-3.16 0 l0 3.44 l2.4 0 l0 2.5 l-2.4 0 l0 3.16 l3.04 0 l-0.5 2.7 l-5.52 0 l0 -14.5 z M93.05999999999999 18.2 l-0.26 1.8 l-2.92 0 l2.62 -14.5 l3.1 0 l2.62 14.5 l-2.92 0 l-0.26 -1.8 l-1.98 0 z M93.38 15.9 l1.34 0 l-0.66 -5.14 z M103.53999999999999 5.5 l0.72 2.7 l-1.94 0 l0 11.8 l-2.96 0 l0 -11.8 l-1.94 0 l0.76 -2.7 l5.36 0 z M105.05999999999997 5.5 l5.64 0 l0.5 2.7 l-3.16 0 l0 3.44 l2.4 0 l0 2.5 l-2.4 0 l0 3.16 l3.04 0 l-0.5 2.7 l-5.52 0 l0 -14.5 z M115.09999999999998 8.04 l0 5 l1.42 0 c0.18666 0 0.28 -0.1 0.28 -0.3 l0 -4.4 c0 -0.2 -0.09334 -0.3 -0.28 -0.3 l-1.42 0 z M119.65999999999998 14.1 c0 0.32 -0.11 0.61334 -0.33 0.88 s-0.54334 0.4 -0.97 0.4 l1.52 4.62 l-3 0 l-1.4 -4.62 l-0.38 0 l0 4.62 l-2.9 0 l0 -14.5 l5.5 0 c0.68 0 1.1767 0.17 1.49 0.51 s0.47 0.79666 0.47 1.37 l0 6.72 z M126.24 20 l-3.06 0 l0 -3.68 l-2.78 -10.82 l3 0 l1.3 6.84 l1.32 -6.84 l3 0 l-2.78 10.82 l0 3.68 z"></path></g><g id="SvgjsG2694" featurekey="mlRtrp-0" transform="matrix(2.0432629244978533,0,0,2.0432629244978533,161.7740421965861,41.762057812476556)" fill="#c12f2f"><path d="M0.6 7.26 c0 -0.53334 0.14334 -0.96 0.43 -1.28 s0.71666 -0.48 1.29 -0.48 l4.14 0 l0.5 2.7 l-3.18 0 c-0.17334 0 -0.26 0.09334 -0.26 0.28 l0 8.6 c0 0.18666 0.08666 0.28 0.26 0.28 l1.32 0 l0 -5.72 l2.82 0 l0 8.36 l-5.06 0 c-0.84 0 -1.4267 -0.17334 -1.76 -0.52 s-0.5 -0.92 -0.5 -1.72 l0 -10.5 z M15.360000000000001 5.5 l5.64 0 l0.5 2.7 l-3.16 0 l0 3.44 l2.4 0 l0 2.5 l-2.4 0 l0 3.16 l3.04 0 l-0.5 2.7 l-5.52 0 l0 -14.5 z M34.52 5.5 l0.72 2.7 l-1.94 0 l0 11.8 l-2.96 0 l0 -11.8 l-1.94 0 l0.76 -2.7 l5.36 0 z M51.86000000000001 20 l-0.51996 -2.7 l3.12 0 c0.22666 0 0.34 -0.1 0.34 -0.3 l0 -2.64 c0 -0.2 -0.04 -0.32 -0.12 -0.36 s-0.22 -0.06 -0.42 -0.06 l-1.5 0 c-0.21334 0 -0.41668 -0.01666 -0.61002 -0.05 s-0.36668 -0.11 -0.52002 -0.23 s-0.27334 -0.28666 -0.36 -0.5 s-0.13 -0.5 -0.13 -0.86 l0 -4.92 c0 -0.57334 0.15666 -1.03 0.47 -1.37 s0.81 -0.51 1.49 -0.51 l4 0 l0.5 2.7 l-3.28 0 c-0.24 0 -0.36 0.10666 -0.36 0.32 l0 2.64 c0 0.14666 0.03666 0.24666 0.11 0.3 s0.18334 0.08 0.33 0.08 l1.82 0 c0.46666 0 0.82332 0.11 1.07 0.33 s0.37 0.60334 0.37 1.15 l0 4.78 c0 0.8 -0.16334 1.3667 -0.49 1.7 s-0.90332 0.5 -1.73 0.5 l-3.58 0 z M68.34 8.04 c-0.17334 0 -0.26 0.09334 -0.26 0.28 l0 8.84 c0 0.10666 0.01666 0.18332 0.05 0.22998 s0.11 0.07 0.23 0.07 l1.1 0 c0.12 0 0.19666 -0.02334 0.23 -0.07 s0.05 -0.12332 0.05 -0.22998 l0 -8.84 c0 -0.18666 -0.08666 -0.28 -0.26 -0.28 l-1.14 0 z M72.68 17.94 c0 0.28 -0.03334 0.54334 -0.1 0.79 s-0.18 0.46332 -0.34 0.64998 s-0.37334 0.33666 -0.64 0.45 s-0.6 0.17 -1 0.17 l-3.36 0 c-0.4 0 -0.73334 -0.05666 -1 -0.17 s-0.48 -0.26334 -0.64 -0.45 s-0.27334 -0.40332 -0.34 -0.64998 s-0.1 -0.51 -0.1 -0.79 l0 -10.56 c0 -0.57334 0.15666 -1.03 0.47 -1.37 s0.81 -0.51 1.49 -0.51 l3.6 0 c0.68 0 1.1767 0.17 1.49 0.51 s0.47 0.79666 0.47 1.37 l0 10.56 z M83 13.16 l0 6.84 l-2.82 0 l0 -14.5 l3.06 0 l1.58 6.12 l1.58 -6.12 l3.08 0 l0 14.5 l-2.82 0 l0 -6.84 l-1.84 5.8 z M96.97999999999999 5.5 l5.64 0 l0.5 2.7 l-3.16 0 l0 3.44 l2.4 0 l0 2.5 l-2.4 0 l0 3.16 l3.04 0 l-0.5 2.7 l-5.52 0 l0 -14.5 z"></path></g></svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <i class="fa fa-burger"></i>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/house-specials" class="underline text-gray-900 dark:text-white">House Specials</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    House specials, Meal deals!
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/maincourses" class="underline text-gray-900 dark:text-white">Main Course</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Steak&chips etc, etc
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">All Day Breakfast</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                   A big dorty fry etc, etc
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Deserts</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Dank cakes and shiz
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </body>
</html>
