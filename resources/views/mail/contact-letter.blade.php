<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Письмо</title>
  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    blockquote,
    body,
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

    details,
    main {
      display: block
    }

    h1 {
      font-size: 2em
    }

    code,
    kbd,
    pre,
    samp {
      font-size: 1em
    }

    a {
      background-color: transparent;
      color: inherit;
      text-decoration: inherit
    }

    abbr[title] {
      border-bottom: none;
      text-decoration: underline;
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    b,
    strong {
      font-weight: bolder
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

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
      padding: 0;
      line-height: inherit;
      color: inherit
    }

    button,
    input {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
      border-style: none;
      padding: 0
    }

    [type=button]:-moz-focusring,
    [type=reset]:-moz-focusring,
    [type=submit]:-moz-focusring,
    button:-moz-focusring {
      outline: ButtonText dotted 1px
    }

    legend {
      box-sizing: border-box;
      color: inherit;
      display: table;
      max-width: 100%;
      padding: 0;
      white-space: normal
    }

    progress {
      vertical-align: baseline
    }

    textarea {
      overflow: auto;
      resize: vertical
    }

    [type=checkbox],
    [type=radio] {
      box-sizing: border-box;
      padding: 0
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    [type=search]::-webkit-search-decoration {
      -webkit-appearance: none
    }

    summary {
      display: list-item
    }

    [hidden],
    template {
      display: none
    }

    button {
      background-color: transparent;
      background-image: none
    }

    button:focus {
      outline: dotted 1px;
      outline: -webkit-focus-ring-color auto 5px
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    html {
      -webkit-text-size-adjust: 100%;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      line-height: 1.5
    }

    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border: 0 solid #e2e8f0
    }

    hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible;
      border-top-width: 1px
    }

    img {
      border-style: solid
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
      color: #a0aec0
    }

    input:-ms-input-placeholder,
    textarea:-ms-input-placeholder {
      color: #a0aec0
    }

    input::-ms-input-placeholder,
    textarea::-ms-input-placeholder {
      color: #a0aec0
    }

    input::placeholder,
    textarea::placeholder {
      color: #a0aec0
    }

    [role=button],
    button {
      cursor: pointer
    }

    table {
      border-collapse: collapse
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

    code,
    kbd,
    pre,
    samp {
      font-family: Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
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

    .container {
      width: 100%
    }

    .bg-white {
      --bg-opacity: 1;
      background-color: #fff;
      background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .border-gray-200 {
      --border-opacity: 1;
      border-color: #edf2f7;
      border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .rounded {
      border-radius: .25rem
    }

    .border {
      border-width: 1px
    }

    .border-b {
      border-bottom-width: 1px
    }

    .block {
      display: block
    }

    .inline-block {
      display: inline-block
    }

    .inline {
      display: inline
    }

    .flex {
      display: flex
    }

    .table {
      display: table
    }

    .hidden {
      display: none
    }

    .flex-auto {
      flex: 1 1 auto
    }

    .clearfix:after {
      content: "";
      display: table;
      clear: both
    }

    .font-medium {
      font-weight: 500
    }

    .text-sm {
      font-size: .875rem
    }

    .text-lg {
      font-size: 1.125rem
    }

    .leading-5 {
      line-height: 1.25rem
    }

    .leading-6 {
      line-height: 1.5rem
    }

    .mt-1 {
      margin-top: .25rem
    }

    .overflow-auto {
      overflow: auto
    }

    .overflow-hidden {
      overflow: hidden
    }

    .px-4 {
      padding-left: 1rem;
      padding-right: 1rem
    }

    .py-5 {
      padding-top: 1.25rem;
      padding-bottom: 1.25rem
    }

    .fixed {
      position: fixed
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .top-0 {
      top: 0
    }

    .right-0 {
      right: 0
    }

    .bottom-0 {
      bottom: 0
    }

    .left-0 {
      left: 0
    }

    .resize {
      resize: both
    }

    .shadow {
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-gray-500 {
      --text-opacity: 1;
      color: #a0aec0;
      color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-900 {
      --text-opacity: 1;
      color: #1a202c;
      color: rgba(26, 32, 44, var(--text-opacity))
    }

    .uppercase {
      text-transform: uppercase
    }

    .underline {
      text-decoration: underline
    }

    <blade media|%20(min-width%3A640px)%20%7B>.container {
      max-width: 640px
    }

    .sm\:rounded-lg {
      border-radius: .5rem
    }

    .sm\:grid {
      display: grid
    }

    .sm\:mt-0 {
      margin-top: 0
    }

    .sm\:px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .sm\:gap-4 {
      grid-gap: 1rem;
      gap: 1rem
    }

    .sm\:grid-cols-3 {
      grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .sm\:col-span-2 {
      grid-column: span 2/span 2
    }
    }

    <blade media|%20(min-width%3A768px)%20%7B>.container {
      max-width: 768px
    }
    }

    <blade media|%20(min-width%3A1024px)%20%7B>.container {
      max-width: 1024px
    }
    }

    <blade media|%20(min-width%3A1280px)%20%7B>.container {
      max-width: 1280px
    }
    }
  </style>
</head>

<body>
  <div class="overflow-hidden bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
      <h3 class="text-lg font-medium leading-6 text-gray-900">
        Письмо с <a href="https://evgeniypp.ru">evgeniyPP.ru</a>
      </h3>
    </div>
    <div>
      <dl>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium leading-5 text-gray-500">
            Имя:
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $name }}
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium leading-5 text-gray-500">
            Контакты:
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {{ $contact }}
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium leading-5 text-gray-500">
            Сообщение:
          </dt>
          <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
            {!! $text !!}
          </dd>
        </div>
      </dl>
    </div>
  </div>
</body>

</html>
