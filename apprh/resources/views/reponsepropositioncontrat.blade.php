<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GestoRH</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.6.0-web/css/all.min.css') }}" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-left-20 {
            left: -5rem
        }

        .top-0 {
            top: 0px
        }

        .-bottom-16 {
            bottom: -4rem
        }

        .-left-16 {
            left: -4rem
        }

        .-mx-3 {
            margin-left: -0.75rem;
            margin-right: -0.75rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .aspect-video {
            aspect-ratio: 16 / 9
        }

        .size-12 {
            width: 3rem;
            height: 3rem
        }

        .size-5 {
            width: 1.25rem;
            height: 1.25rem
        }

        .size-6 {
            width: 1.5rem;
            height: 1.5rem
        }

        .h-12 {
            height: 3rem
        }

        .h-40 {
            height: 10rem
        }

        .h-full {
            height: 100%
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-full {
            width: 100%
        }

        .w-\[calc\(100\%\+8rem\)\] {
            width: calc(100% + 8rem)
        }

        .w-auto {
            width: auto
        }

        .max-w-\[877px\] {
            max-width: 877px
        }

        .max-w-2xl {
            max-width: 42rem
        }

        .flex-1 {
            flex: 1 1 0%
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }

        .flex-col {
            flex-direction: column
        }

        .items-start {
            align-items: flex-start
        }

        .items-center {
            align-items: center
        }

        .items-stretch {
            align-items: stretch
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .self-center {
            align-self: center
        }

        .overflow-hidden {
            overflow: hidden
        }

        .rounded-\[10px\] {
            border-radius: 10px
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-md {
            border-radius: 0.375rem
        }

        .rounded-sm {
            border-radius: 0.125rem
        }

        .bg-\[\#FF2D20\]\/10 {
            background-color: rgb(255 45 32 / 0.1)
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
        }

        .from-transparent {
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-white {
            --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
        }

        .to-white {
            --tw-gradient-to: #fff var(--tw-gradient-to-position)
        }

        .stroke-\[\#FF2D20\] {
            stroke: #FF2D20
        }

        .object-cover {
            object-fit: cover
        }

        .object-top {
            object-position: top
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem
        }

        .pt-3 {
            padding-top: 0.75rem
        }

        .text-center {
            text-align: center
        }

        .font-sans {
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-sm\/relaxed {
            font-size: 0.875rem;
            line-height: 1.625
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-semibold {
            font-weight: 600
        }

        .text-black {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
            --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
            --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .ring-1 {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .ring-transparent {
            --tw-ring-color: transparent
        }

        .ring-white\/\[0\.05\] {
            --tw-ring-color: rgb(255 255 255 / 0.05)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
            --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }

        .transition {
            transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .duration-300 {
            transition-duration: 300ms
        }

        .selection\:bg-\[\#FF2D20\] *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-\[\#FF2D20\]::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(255 45 32 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-black:hover {
            --tw-text-opacity: 1;
            color: rgb(0 0 0 / var(--tw-text-opacity))
        }

        .hover\:text-black\/70:hover {
            color: rgb(0 0 0 / 0.7)
        }

        .hover\:ring-black\/20:hover {
            --tw-ring-color: rgb(0 0 0 / 0.2)
        }

        .focus\:outline-none:focus {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .focus-visible\:ring-1:focus-visible {
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
        }

        .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:block {
                display: block
            }

            .dark\:hidden {
                display: none
            }

            .dark\:bg-black {
                --tw-bg-opacity: 1;
                background-color: rgb(0 0 0 / var(--tw-bg-opacity))
            }

            .dark\:bg-zinc-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(24 24 27 / var(--tw-bg-opacity))
            }

            .dark\:via-zinc-900 {
                --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .dark\:to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .dark\:text-white\/50 {
                color: rgb(255 255 255 / 0.5)
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-white\/70 {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:ring-zinc-800 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:hover\:text-white\/70:hover {
                color: rgb(255 255 255 / 0.7)
            }

            .dark\:hover\:text-white\/80:hover {
                color: rgb(255 255 255 / 0.8)
            }

            .dark\:hover\:ring-zinc-700:hover {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            .dark\:focus-visible\:ring-white:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
            }
        }
    </style>



</head>

<body class="font-sans antialiased   text-black/50">

    <div class='flex justify-center lg:col-start-2 up'>
        <p class='prop'>Proposition de Contrat candidat {{ $cand->name }}</p>
    </div>

    <div class="flex justify-center lg:col-start-2 ">
        <div class='shadow-lg rounded  cons px-4 py-4 haut'>

            <form action="{{ route('reponsepropositioncontrat', ['id' => $cand->id]) }}" method="post">
                @csrf
                <label> <strong>Nom de la societe :</strong>
                    {{ $cand->offreemploi->user->societe }}</label><br>
                <label> <strong>Telephone :</strong> {{ $cand->offreemploi->user->telephone }}</label><br />
                <br>
                <hr>
                <br>
                <p><strong class='under'>Objet :</strong> Proposition de contrat de travail</p><br>
                <div class="flex justify-center lg:col-start-2 ">
                    <div>

                        <p>Monsieur/Madame {{ $cand->name }} ,</p>
                        <p>Suite à nos échanges et entretiens, nous avons le plaisir de vous proposer un contrat
                            de travail en qualité de <strong>{{ $cand->offreemploi->titre }}</strong> au sein
                            de notre société <strong>{{ $cand->offreemploi->user->societe }}</strong> .</p><br>
                        <p> <strong>- Postes et Missions :</strong></p>
                        <p>Vous serez rattaché(e) au service {{ $reponse->servicerattachment }} sous la
                            responsabilité de {{ $reponse->responsableservice }}.</p>
                        <p><em>Vos missions principales seront :</em></p>
                        @if ($lesmissions->mission1 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission1 !== 'non')
                            <li>{{ $lesmissions->mission1 }}</li>
                        @endif
                        @if ($lesmissions->mission2 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission2 !== 'non')
                            <li>{{ $lesmissions->mission2 }}</li>
                        @endif
                        @if ($lesmissions->mission3 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission3 !== 'non')
                            <li>{{ $lesmissions->mission3 }}</li>
                        @endif
                        @if ($lesmissions->mission4 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission4 !== 'non')
                            <li>{{ $lesmissions->mission4 }}</li>
                        @endif
                        @if ($lesmissions->mission5 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission5 !== 'non')
                            <li>{{ $lesmissions->mission5 }}</li>
                        @endif
                        @if ($lesmissions->mission6 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission6 !== 'non')
                            <li>{{ $lesmissions->mission6 }}</li>
                        @endif
                        @if ($lesmissions->mission7 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission7 !== 'non')
                            <li>{{ $lesmissions->mission7 }}</li>
                        @endif
                        @if ($lesmissions->mission8 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission8 !== 'non')
                            <li>{{ $lesmissions->mission8 }}</li>
                        @endif
                        @if ($lesmissions->mission9 == '')
                            <p></p>
                        @elseif ($lesmissions->mission9 !== 'non')
                            <li>{{ $lesmissions->mission9 }}</li>
                        @endif
                        @if ($lesmissions->mission10 == 'non')
                            <p></p>
                        @elseif ($lesmissions->mission10 !== 'non')
                            <li>{{ $lesmissions->mission10 }}</li>
                        @endif

                        <br>
                        <p><strong>- Lieu de travail :</strong></p>
                        <p>Votre lieu de travail sera situé au {{ $reponse->lieutravail }}.
                        </p>
                        <br>
                        <p><strong>Date de début :</strong>
                        <p> Votre contrat débutera le {{ $reponse->datedebutcontrat }},
                            avec une période d'essai de {{ $reponse->nbremoisperiodeessai }}
                            mois.
                        </p>
                        <br>
                        <p><strong>- Rémunération :</strong></p>
                        <p> Votre rémunération annuelle brute sera de {{ $reponse->remunerationbrute }} FCFA, versée en
                            {{ $reponse->nbremoisremunerationbrute }} mensualités.</p>
                        <br>
                        <p><strong>- Avantages :</strong></p>
                        <p><em> Vous bénéficierez également des avantages suivants :</em></p>
                        @if ($avantages->avantage1 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage1 !== 'non')
                            <li>{{ $avantages->avantage1 }}</li>
                        @endif
                        @if ($avantages->avantage2 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage2 !== 'non')
                            <li>{{ $avantages->avantage2 }}</li>
                        @endif
                        @if ($avantages->avantage3 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage3 !== 'non')
                            <li>{{ $avantages->avantage3 }}</li>
                        @endif
                        @if ($avantages->avantage4 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage4 !== 'non')
                            <li>{{ $avantages->avantage4 }}</li>
                        @endif
                        @if ($avantages->avantage5 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage5 !== 'non')
                            <li>{{ $avantages->avantage5 }}</li>
                        @endif
                        @if ($avantages->avantage6 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage6 !== 'non')
                            <li>{{ $avantages->avantage6 }}</li>
                        @endif
                        @if ($avantages->avantage7 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage7 !== 'non')
                            <li>{{ $avantages->avantage7 }}</li>
                        @endif
                        @if ($avantages->avantage8 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage8 !== 'non')
                            <li>{{ $avantages->avantage8 }}</li>
                        @endif
                        @if ($avantages->avantage9 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage9 !== 'non')
                            <li>{{ $avantages->avantage9 }}</li>
                        @endif
                        @if ($avantages->avantage10 == 'non')
                            <p></p>
                        @elseif ($avantages->avantage10 !== 'non')
                            <li>{{ $avantages->avantage10 }}</li>
                        @endif


                        <br>
                        <p><strong>- Durée du contrat : </strong></p>
                        <p> Il s'agit d'un contrat {{ $reponse->typecontrat }} </p>
                        @if ($reponse->typecontrat == 'à Durée Indéterminée (CDI)')
                            <p></p>
                        @elseif($reponse->typecontrat !== 'à Durée Indéterminée (CDI)')
                            <span>de {{ $reponse->dureecontrat }} mois.</span>
                        @endif

                        <br>
                        <p><strong>- Horaires de travail :</strong></p>
                        <p> Vos horaires de travail seront de {{ $reponse->horairetravail }} heures par semaine,
                        <p>du {{ $reponse->jourdebut }} au {{ $reponse->jourfin }} de {{ $reponse->heuredebut }} å
                            {{ $reponse->heurefin }}.</p><br>

                        <p><strong>- Congés </strong></p>
                        <p> Vous bénéficierez de {{ $reponse->nbrejoursconge }}
                            jours de congés
                            payés par an.</p>

                        <br>
                        <p><strong>- Obligations et engagements</strong></p>
                        <p> Vous vous engagez à respecter les règles et procédures de l'entreprise, ainsi qu'à accomplir
                            vos missions avec diligence et loyauté.</p><br>
                        <p><strong>- Résiliation du contrat</strong></p>
                        <p> Les modalités de résiliation du contrat sont celles prévues par la législation en vigueur.
                        </p><br>
                        <p>Nous vous prions de bien vouloir nous faire parvenir votre accord par retour de courrier
                            avant le {{ $reponse->datelimitereponse }}, afin de finaliser
                            cette proposition. Nous restons à votre disposition pour toute information complémentaire.
                        </p>
                        <p>Dans l'attente de votre retour, nous vous prions d'agréer, Monsieur/Madame
                            {{ $cand->name }} , l'expression de nos salutations distinguées.</p>
                        <br>
                        <p> Cordialement <strong>{{ $cand->offreemploi->user->name }},</strong></p>
                        <p> <strong>{{ $cand->offreemploi->user->societe }}.</strong> </p>



                        <input type="hidden" value="{{ $cand->offreemploi->user->email }}" name='emails'>
                        <input type="hidden" value="{{ $cand->offreemploi->titre}}" name='titre'>
                        <input type="hidden" value="{{ $cand->sexe}}" name='sexe'>
                        <hr>
                        <br>
                        @if($cand->employe == 'non')
                        <div class=" flex justify-center lg:col-start-2 buts">

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit" class="btn btn-success mt-3 mx-2">Accepter le Contrat</button>

                                <button type="button" class="btn btn-danger mt-3 mx-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Refuser le Contrat</button>
                            </div>
                        </div>
                        @elseif($cand->employe == 'oui')
                        <div class=" flex justify-center lg:col-start-2 buts">

                            <h2>Merci...</h2>
                        </div>
                        @endif

                    </div>

                </div>

            </form>


        </div>


    </div>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">...</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body flex justify-center lg:col-start-2">
                    <p>En refusant cette proposition de contrat toutes vos donnees relatives å votre candidature seront
                        supprimees de notre base de donnee.</p>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                       <a href="{{ route('deletecandidatnowant') }}"><button type="button" class="btn btn-success btn-sm mt-3 mx-2">Confirmer</button></a>

                        <button type="button" class="btn btn-danger btn-sm mt-3 mx-2"
                            data-bs-dismiss="modal">Annuler</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->



    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::sweetalert')



</body>

</html>





<style>
    .prop {
        font-weight: bolder;
        font-size: 20px;
        text-decoration: underline
    }

    .btn-success {
        background-color: green;
        color: white
    }

    .btn-danger {
        background-color: red;
        color: white
    }

    .ov {
        height: 700px;
        overflow: hidden;
    }

    .mission {
        width: 100%;
    }

    .wid {
        width: 70%;

    }

    .mission {
        color: green;
        cursor: pointer;
    }

    .under {
        text-decoration: underline
    }

    .long {
        width: 240px;
    }

    .long1 {
        width: 275px;
    }

    .bord {
        border: 0.25px solid gray;
    }

    .haut {
        height: 700px;
        margin-top: 50px;
        overflow: hidden;
    }

    .sel {
        margin-top: 50px
    }

    #ims {
        width: 450px;
        height: 450px;
    }

    .cons {
        width: 70%;
        height: 750px;
        overflow: hidden scroll;

    }

    .digit {
        font-weight: bold;
    }

    #imas {
        height: 300px;
        width: 300px;
    }

    .up {
        margin-top: 30px
    }

    .upe {
        margin-top: 10px;


    }

    .progress {
        width: 30%;
    }

    .lore {
        opacity: 0;
    }
</style>
