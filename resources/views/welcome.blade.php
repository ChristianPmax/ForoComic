<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Listado</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarte</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="17.176536073185382 18.23795686455901 158.2989830760471 61.98670195876531" width="500" height="600"><path d="M63.22 44.33c.53 1.27.63 1.83 1.1 2.82A4.48 4.48 0 0 0 65.76 49c1.24.9 2.82.93 4.72.93H82a32.26 32.26 0 0 0-64.51 0H29c1.9 0 3.48 0 4.72-.93a4.48 4.48 0 0 0 1.44-1.83c.47-1 .57-1.55 1.1-2.82a14.57 14.57 0 0 1 26.93 0z"/><path d="M78.65 64.23a32.24 32.24 0 0 1-12.08 13.2l-12.95-13C52.09 63 51.05 62 49.75 62s-2.33 1-3.86 2.48l-13 13a32.24 32.24 0 0 1-12.08-13.2l11.53-11.53a9 9 0 0 1 3.15-2.38 12.13 12.13 0 0 1 4.32-.46H59.7a12.13 12.13 0 0 1 4.32.46 9 9 0 0 1 3.15 2.38zM104.9 54.86v-3h12.31v3zm16-2.33c-.26 0-.81.27-1.52 1a2.92 2.92 0 0 0-1 1.53l6 6c.27 0 .81-.27 1.52-1a2.85 2.85 0 0 0 1-1.53zm5-14.34h9.77v-2.8a.87.87 0 0 0-.87-.87h-8.9V32H122v2.48h-10.14V32h-3.92v2.48h-8.73a.87.87 0 0 0-.87.87v2.8h9.6v2.14a3.13 3.13 0 0 0 2 .43 3.09 3.09 0 0 0 2-.43v-2.1H122v2.14a4.68 4.68 0 0 0 3.92 0zm-8 3.71v8h-14.59v2.18c0 4.72-.65 11.5-3.81 17.14a3 3 0 0 1-1.85-.59c-.93-.54-1.37-1-1.44-1.31 2.31-4.14 3.44-9.11 3.44-15.47v-10zm-3.28 3h-11.31V47h11.29zm-7.7 25.19h2.81a3.26 3.26 0 0 0 2.51-.93 3.16 3.16 0 0 0 .76-2.26v-7h5.7v-3h-14.86v3h5.7V66a.87.87 0 0 1-.2.57.66.66 0 0 1-.49.18h-2a4.11 4.11 0 0 0 0 3.32zm21.09 0a3.8 3.8 0 0 0 2.87-1 3.71 3.71 0 0 0 .89-2.51V49.94h3.94v-2.78a.87.87 0 0 0-.87-.87h-3.07v-5.38h-3.92v5.38h-7.76v3.65h7.76v15.49a1.08 1.08 0 0 1-.24.67.77.77 0 0 1-.59.22h-4.66a3 3 0 0 0-.4 1.86 3 3 0 0 0 .4 1.87zm-26-4.74a3.76 3.76 0 0 0 2.23 2.23L108.8 63a2.49 2.49 0 0 0-.88-1.35 2.55 2.55 0 0 0-1.35-.88zm14-4.59a3.83 3.83 0 0 0-2.27 2.24l4.59 4.59a2.51 2.51 0 0 0 1.35-.87 2.6 2.6 0 0 0 .88-1.36zm37-15.18c0 .27-.27.82-1 1.53s-1.26 1-1.53 1l-6-6a2.83 2.83 0 0 1 1-1.52 2.85 2.85 0 0 1 1.53-1zm8.47 0a2.84 2.84 0 0 0 1 1.53c.72.71 1.26 1 1.53 1l6-6c0-.27-.27-.81-1-1.52a2.82 2.82 0 0 0-1.53-1zm-2.21 10.59l12.31 12.81a3 3 0 0 0 1.66-1c.79-.73 1.1-1.3 1.11-1.59l-12.67-12.81h13.79v-2.77a.88.88 0 0 0-.88-.87h-15.33V38.19h14.25v-2.8a.87.87 0 0 0-.87-.87h-13.38V32h-4v2.48h-13.42a.87.87 0 0 0-.88.87v2.8h14.25v11.79H139v2.76a.87.87 0 0 0 .88.88h12.92l-12.66 12.78c0 .29.32.86 1.11 1.59s1.37 1 1.65 1l12.31-12.81v13.7l.08.07s.48.37 2 .37a3.17 3.17 0 0 0 1.92-.37l.07-.07z"/></svg>
                </div>
            </div>
        </div>
    </body>
</html>
