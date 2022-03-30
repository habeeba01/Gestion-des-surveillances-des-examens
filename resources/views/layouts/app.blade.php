<!--
=========================================================
* Soft UI Dashboard - v1.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/soft-ui-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    EST SAFI
  </title>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.2" rel="stylesheet" />

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </script>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <style>
    /*!
 * Bootstrap v5.0.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #63B3ED;
  --bs-indigo: #596CFF;
  --bs-purple: #6f42c1;
  --bs-pink: #d63384;
  --bs-red: #F56565;
  --bs-orange: #fd7e14;
  --bs-yellow: #FBD38D;
  --bs-green: #81E6D9;
  --bs-teal: #20c997;
  --bs-cyan: #0dcaf0;
  --bs-white: #fff;
  --bs-gray: #6c757d;
  --bs-gray-dark: #343a40;
  --bs-primary: #cb0c9f;
  --bs-secondary: #8392AB;
  --bs-success: #82d616;
  --bs-info: #17c1e8;
  --bs-warning: #f53939;
  --bs-danger: #ea0606;
  --bs-light: #e9ecef;
  --bs-dark: #252f40;
  --bs-white: #fff;
  --bs-font-sans-serif: Open Sans;
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #67748e;
  background-color: #fff;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25;
}

hr:not([size]) {
  height: 1px;
}

h1,
.h1,
h2,
.h2,
h3,
.h3,
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 400;
  line-height: 1.2;
}

h1,
.h1 {
  font-size: calc(1.425rem + 2.1vw);
}

@media (min-width: 1200px) {

  h1,
  .h1 {
    font-size: 3rem;
  }
}

h2,
.h2 {
  font-size: calc(1.35rem + 1.2vw);
}

@media (min-width: 1200px) {

  h2,
  .h2 {
    font-size: 2.25rem;
  }
}

h3,
.h3 {
  font-size: calc(1.3125rem + 0.75vw);
}

@media (min-width: 1200px) {

  h3,
  .h3 {
    font-size: 1.875rem;
  }
}

h4,
.h4 {
  font-size: calc(1.275rem + 0.3vw);
}

@media (min-width: 1200px) {

  h4,
  .h4 {
    font-size: 1.5rem;
  }
}

h5,
.h5 {
  font-size: 1.25rem;
}

h6,
.h6 {
  font-size: 1rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-bs-original-title] {
  text-decoration: underline dotted;
  cursor: help;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 600;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: 700;
}

small,
.small {
  font-size: 0.875em;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #cb0c9f;
  text-decoration: none;
}

a:hover {
  color: #830866;
  text-decoration: none;
}

a:not([href]):not([class]),
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr
    /* rtl:ignore */
  ;
  unicode-bidi: bidi-override;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word;
}

a>code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.25rem;
}

kbd kbd {
  padding: 0;
  font-size: 1em;
  font-weight: 600;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role="button"] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

select:disabled {
  opacity: 1;
}

[list]::-webkit-calendar-picker-indicator {
  display: none;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}

@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}

legend+* {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::file-selector-button {
  font: inherit;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.25rem;
  font-weight: 400;
}

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-1 {
    font-size: 5rem;
  }
}

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-2 {
    font-size: 4.5rem;
  }
}

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-3 {
    font-size: 4rem;
  }
}

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-4 {
    font-size: 3.5rem;
  }
}

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-5 {
    font-size: 3rem;
  }
}

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2;
}

@media (min-width: 1200px) {
  .display-6 {
    font-size: 2.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 0.875em;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote> :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.5rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 0.875em;
  color: #6c757d;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x, 1.5rem);
  padding-left: var(--bs-gutter-x, 1.5rem);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {

  .container,
  .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {

  .container,
  .container-sm,
  .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {

  .container,
  .container-sm,
  .container-md,
  .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {

  .container,
  .container-sm,
  .container-md,
  .container-lg,
  .container-xl {
    max-width: 1140px;
  }
}

@media (min-width: 1400px) {

  .container,
  .container-sm,
  .container-md,
  .container-lg,
  .container-xl,
  .container-xxl {
    max-width: 1320px;
  }
}

.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(var(--bs-gutter-y) * -1);
  margin-right: calc(var(--bs-gutter-x) / -2);
  margin-left: calc(var(--bs-gutter-x) / -2);
}

.row>* {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) / 2);
  padding-left: calc(var(--bs-gutter-x) / 2);
  margin-top: var(--bs-gutter-y);
}

.col {
  flex: 1 0 0%;
}

.row-cols-auto>* {
  flex: 0 0 auto;
  width: auto;
}

.row-cols-1>* {
  flex: 0 0 auto;
  width: 100%;
}

.row-cols-2>* {
  flex: 0 0 auto;
  width: 50%;
}

.row-cols-3>* {
  flex: 0 0 auto;
  width: 33.333333%;
}

.row-cols-4>* {
  flex: 0 0 auto;
  width: 25%;
}

.row-cols-5>* {
  flex: 0 0 auto;
  width: 20%;
}

.row-cols-6>* {
  flex: 0 0 auto;
  width: 16.666667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
}

.col-1 {
  flex: 0 0 auto;
  width: 8.333333%;
}

.col-2 {
  flex: 0 0 auto;
  width: 16.666667%;
}

.col-3 {
  flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  flex: 0 0 auto;
  width: 33.333333%;
}

.col-5 {
  flex: 0 0 auto;
  width: 41.666667%;
}

.col-6 {
  flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  flex: 0 0 auto;
  width: 58.333333%;
}

.col-8 {
  flex: 0 0 auto;
  width: 66.666667%;
}

.col-9 {
  flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  flex: 0 0 auto;
  width: 83.333333%;
}

.col-11 {
  flex: 0 0 auto;
  width: 91.666667%;
}

.col-12 {
  flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }

  .row-cols-sm-auto>* {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-sm-1>* {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-sm-2>* {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-sm-3>* {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .row-cols-sm-4>* {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-sm-5>* {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-sm-6>* {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.333333%;
  }

  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.666667%;
  }

  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.333333%;
  }

  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.666667%;
  }

  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.333333%;
  }

  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.666667%;
  }

  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-sm-0 {
    margin-left: 0;
  }

  .offset-sm-1 {
    margin-left: 8.333333%;
  }

  .offset-sm-2 {
    margin-left: 16.666667%;
  }

  .offset-sm-3 {
    margin-left: 25%;
  }

  .offset-sm-4 {
    margin-left: 33.333333%;
  }

  .offset-sm-5 {
    margin-left: 41.666667%;
  }

  .offset-sm-6 {
    margin-left: 50%;
  }

  .offset-sm-7 {
    margin-left: 58.333333%;
  }

  .offset-sm-8 {
    margin-left: 66.666667%;
  }

  .offset-sm-9 {
    margin-left: 75%;
  }

  .offset-sm-10 {
    margin-left: 83.333333%;
  }

  .offset-sm-11 {
    margin-left: 91.666667%;
  }

  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }

  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }

  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }

  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }

  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }

  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }

  .row-cols-md-auto>* {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-md-1>* {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-md-2>* {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-md-3>* {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .row-cols-md-4>* {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-md-5>* {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-md-6>* {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-md-1 {
    flex: 0 0 auto;
    width: 8.333333%;
  }

  .col-md-2 {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-md-4 {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .col-md-5 {
    flex: 0 0 auto;
    width: 41.666667%;
  }

  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-md-7 {
    flex: 0 0 auto;
    width: 58.333333%;
  }

  .col-md-8 {
    flex: 0 0 auto;
    width: 66.666667%;
  }

  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-md-10 {
    flex: 0 0 auto;
    width: 83.333333%;
  }

  .col-md-11 {
    flex: 0 0 auto;
    width: 91.666667%;
  }

  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-md-0 {
    margin-left: 0;
  }

  .offset-md-1 {
    margin-left: 8.333333%;
  }

  .offset-md-2 {
    margin-left: 16.666667%;
  }

  .offset-md-3 {
    margin-left: 25%;
  }

  .offset-md-4 {
    margin-left: 33.333333%;
  }

  .offset-md-5 {
    margin-left: 41.666667%;
  }

  .offset-md-6 {
    margin-left: 50%;
  }

  .offset-md-7 {
    margin-left: 58.333333%;
  }

  .offset-md-8 {
    margin-left: 66.666667%;
  }

  .offset-md-9 {
    margin-left: 75%;
  }

  .offset-md-10 {
    margin-left: 83.333333%;
  }

  .offset-md-11 {
    margin-left: 91.666667%;
  }

  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }

  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }

  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }

  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }

  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }

  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }

  .row-cols-lg-auto>* {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-lg-1>* {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-lg-2>* {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-lg-3>* {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .row-cols-lg-4>* {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-lg-5>* {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-lg-6>* {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.333333%;
  }

  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.666667%;
  }

  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.333333%;
  }

  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.666667%;
  }

  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.333333%;
  }

  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.666667%;
  }

  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-lg-0 {
    margin-left: 0;
  }

  .offset-lg-1 {
    margin-left: 8.333333%;
  }

  .offset-lg-2 {
    margin-left: 16.666667%;
  }

  .offset-lg-3 {
    margin-left: 25%;
  }

  .offset-lg-4 {
    margin-left: 33.333333%;
  }

  .offset-lg-5 {
    margin-left: 41.666667%;
  }

  .offset-lg-6 {
    margin-left: 50%;
  }

  .offset-lg-7 {
    margin-left: 58.333333%;
  }

  .offset-lg-8 {
    margin-left: 66.666667%;
  }

  .offset-lg-9 {
    margin-left: 75%;
  }

  .offset-lg-10 {
    margin-left: 83.333333%;
  }

  .offset-lg-11 {
    margin-left: 91.666667%;
  }

  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }

  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }

  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }

  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }

  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }

  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }

  .row-cols-xl-auto>* {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xl-1>* {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xl-2>* {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xl-3>* {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .row-cols-xl-4>* {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xl-5>* {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xl-6>* {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.333333%;
  }

  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.666667%;
  }

  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.333333%;
  }

  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.666667%;
  }

  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.333333%;
  }

  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.666667%;
  }

  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-xl-0 {
    margin-left: 0;
  }

  .offset-xl-1 {
    margin-left: 8.333333%;
  }

  .offset-xl-2 {
    margin-left: 16.666667%;
  }

  .offset-xl-3 {
    margin-left: 25%;
  }

  .offset-xl-4 {
    margin-left: 33.333333%;
  }

  .offset-xl-5 {
    margin-left: 41.666667%;
  }

  .offset-xl-6 {
    margin-left: 50%;
  }

  .offset-xl-7 {
    margin-left: 58.333333%;
  }

  .offset-xl-8 {
    margin-left: 66.666667%;
  }

  .offset-xl-9 {
    margin-left: 75%;
  }

  .offset-xl-10 {
    margin-left: 83.333333%;
  }

  .offset-xl-11 {
    margin-left: 91.666667%;
  }

  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }

  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }

  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }

  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }

  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }

  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}

@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }

  .row-cols-xxl-auto>* {
    flex: 0 0 auto;
    width: auto;
  }

  .row-cols-xxl-1>* {
    flex: 0 0 auto;
    width: 100%;
  }

  .row-cols-xxl-2>* {
    flex: 0 0 auto;
    width: 50%;
  }

  .row-cols-xxl-3>* {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .row-cols-xxl-4>* {
    flex: 0 0 auto;
    width: 25%;
  }

  .row-cols-xxl-5>* {
    flex: 0 0 auto;
    width: 20%;
  }

  .row-cols-xxl-6>* {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }

  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.333333%;
  }

  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.666667%;
  }

  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }

  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.333333%;
  }

  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.666667%;
  }

  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }

  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.333333%;
  }

  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.666667%;
  }

  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }

  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.333333%;
  }

  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.666667%;
  }

  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }

  .offset-xxl-0 {
    margin-left: 0;
  }

  .offset-xxl-1 {
    margin-left: 8.333333%;
  }

  .offset-xxl-2 {
    margin-left: 16.666667%;
  }

  .offset-xxl-3 {
    margin-left: 25%;
  }

  .offset-xxl-4 {
    margin-left: 33.333333%;
  }

  .offset-xxl-5 {
    margin-left: 41.666667%;
  }

  .offset-xxl-6 {
    margin-left: 50%;
  }

  .offset-xxl-7 {
    margin-left: 58.333333%;
  }

  .offset-xxl-8 {
    margin-left: 66.666667%;
  }

  .offset-xxl-9 {
    margin-left: 75%;
  }

  .offset-xxl-10 {
    margin-left: 83.333333%;
  }

  .offset-xxl-11 {
    margin-left: 91.666667%;
  }

  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }

  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }

  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }

  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }

  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }

  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }

  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }

  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }

  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }

  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }

  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }

  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}

.table {
  --bs-table-bg: transparent;
  --bs-table-striped-color: #67748e;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #67748e;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #67748e;
  --bs-table-hover-bg: rgba(0, 0, 0, 0.075);
  width: 100%;
  margin-bottom: 1rem;
  color: #67748e;
  vertical-align: top;
  border-color: #e9ecef;
}

.table> :not(caption)>*>* {
  padding: 0.5rem 0.5rem;
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

.table>tbody {
  vertical-align: inherit;
}

.table>thead {
  vertical-align: bottom;
}

.table> :not(:last-child)> :last-child>* {
  border-bottom-color: currentColor;
}

.caption-top {
  caption-side: top;
}

.table-sm> :not(caption)>*>* {
  padding: 0.25rem 0.25rem;
}

.table-bordered> :not(caption)>* {
  border-width: 1px 0;
}

.table-bordered> :not(caption)>*>* {
  border-width: 0 1px;
}

.table-borderless> :not(caption)>*>* {
  border-bottom-width: 0;
}

.table-striped>tbody>tr:nth-of-type(odd) {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color);
}

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color);
}

.table-hover>tbody>tr:hover {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color);
}

.table-primary {
  --bs-table-bg: #f5ceec;
  --bs-table-striped-bg: #e9c4e0;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #ddb9d4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e3bfda;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #ddb9d4;
}

.table-secondary {
  --bs-table-bg: #e6e9ee;
  --bs-table-striped-bg: #dbdde2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cfd2d6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d5d8dc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cfd2d6;
}

.table-success {
  --bs-table-bg: #e6f7d0;
  --bs-table-striped-bg: #dbebc6;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cfdebb;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d5e4c0;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cfdebb;
}

.table-info {
  --bs-table-bg: #d1f3fa;
  --bs-table-striped-bg: #c7e7ee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcdbe1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1e1e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcdbe1;
}

.table-warning {
  --bs-table-bg: #fdd7d7;
  --bs-table-striped-bg: #f0cccc;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e4c2c2;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #eac7c7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e4c2c2;
}

.table-danger {
  --bs-table-bg: #fbcdcd;
  --bs-table-striped-bg: #eec3c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e2b9b9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e8bebe;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e2b9b9;
}

.table-light {
  --bs-table-bg: #e9ecef;
  --bs-table-striped-bg: #dde0e3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #d2d4d7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d8dadd;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #d2d4d7;
}

.table-dark {
  --bs-table-bg: #252f40;
  --bs-table-striped-bg: #30394a;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #3b4453;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #353f4e;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #3b4453;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}

.form-label {
  margin-bottom: 0.5rem;
  font-size: 0.75rem;
  font-weight: 700;
  color: #252f40;
}

.col-form-label {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  font-weight: 700;
  line-height: 1.4rem;
  color: #252f40;
}

.col-form-label-lg {
  padding-top: calc(0.75rem + 1px);
  padding-bottom: calc(0.75rem + 1px);
  font-size: 0.875rem;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.75rem;
}

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.4rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #d2d6da;
  appearance: none;
  border-radius: 0.5rem;
  transition: box-shadow 0.15s ease, border-color 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control[type="file"] {
  overflow: hidden;
}

.form-control[type="file"]:not(:disabled):not(:read-only) {
  cursor: pointer;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #e293d3;
  outline: 0;
  box-shadow: 0 0 0 2px #e9aede;
}

.form-control::-webkit-date-and-time-value {
  height: 1.4rem;
}

.form-control::placeholder {
  color: #adb5bd;
  opacity: 1;
}

.form-control:disabled,
.form-control:read-only {
  background-color: #e9ecef;
  opacity: 1;
}

.form-control::file-selector-button {
  padding: 0.5rem 0.75rem;
  margin: -0.5rem -0.75rem;
  margin-inline-end: 0.75rem;
  color: #495057;
  background-color: #fff;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: all 0.15s ease-in;
}

@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button {
    transition: none;
  }
}

.form-control:hover:not(:disabled):not(:read-only)::file-selector-button {
  background-color: #f2f2f2;
}

.form-control::-webkit-file-upload-button {
  padding: 0.5rem 0.75rem;
  margin: -0.5rem -0.75rem;
  margin-inline-end: 0.75rem;
  color: #495057;
  background-color: #fff;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: all 0.15s ease-in;
}

@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    transition: none;
  }
}

.form-control:hover:not(:disabled):not(:read-only)::-webkit-file-upload-button {
  background-color: #f2f2f2;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.5rem 0;
  margin-bottom: 0;
  line-height: 1.4rem;
  color: #252f40;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: unset;
  padding: 0.25rem 0.75rem;
  font-size: 0.75rem;
  border-radius: 0.5rem;
}

.form-control-sm::file-selector-button {
  padding: 0.25rem 0.75rem;
  margin: -0.25rem -0.75rem;
  margin-inline-end: 0.75rem;
}

.form-control-sm::-webkit-file-upload-button {
  padding: 0.25rem 0.75rem;
  margin: -0.25rem -0.75rem;
  margin-inline-end: 0.75rem;
}

.form-control-lg {
  min-height: unset;
  padding: 0.75rem 0.75rem;
  font-size: 0.875rem;
  border-radius: 0.5rem;
}

.form-control-lg::file-selector-button {
  padding: 0.75rem 0.75rem;
  margin: -0.75rem -0.75rem;
  margin-inline-end: 0.75rem;
}

.form-control-lg::-webkit-file-upload-button {
  padding: 0.75rem 0.75rem;
  margin: -0.75rem -0.75rem;
  margin-inline-end: 0.75rem;
}

textarea.form-control {
  min-height: unset;
}

textarea.form-control-sm {
  min-height: unset;
}

textarea.form-control-lg {
  min-height: unset;
}

.form-control-color {
  max-width: 3rem;
  height: auto;
  padding: 0.5rem;
}

.form-control-color:not(:disabled):not(:read-only) {
  cursor: pointer;
}

.form-control-color::-moz-color-swatch {
  height: 1.4rem;
  border-radius: 0.5rem;
}

.form-control-color::-webkit-color-swatch {
  height: 1.4rem;
  border-radius: 0.5rem;
}

.form-select {
  display: block;
  width: 100%;
  padding: 0.5rem 1rem 0.5rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.4rem;
  color: #495057;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #d2d6da;
  border-radius: 0.5rem;
  appearance: none;
}

.form-select:focus {
  border-color: #e293d3;
  outline: 0;
  box-shadow: 0 0 0 2px #e9aede;
}

.form-select[multiple],
.form-select[size]:not([size="1"]) {
  padding-right: 0.75rem;
  background-image: none;
}

.form-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.75rem;
  font-size: 0.75rem;
}

.form-select-lg {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 0.75rem;
  font-size: 0.875rem;
}

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.73em;
  margin-bottom: 0.125rem;
}

.form-check .form-check-input {
  float: left;
  margin-left: -1.73em;
}

.form-check-input {
  width: 1.23em;
  height: 1.23em;
  margin-top: 0.135em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: none;
  appearance: none;
  color-adjust: exact;
  transition: background-color 0.25s ease, border-color 0.25s ease, background-position 0.15s ease-in-out, opacity 0.15s ease-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-check-input {
    transition: none;
  }
}

.form-check-input[type="checkbox"] {
  border-radius: 0.35rem;
}

.form-check-input[type="radio"] {
  border-radius: 50%;
}

.form-check-input:active {
  filter: brightness(99%);
}

.form-check-input:focus {
  border-color: none;
  outline: 0;
  box-shadow: none;
}

.form-check-input:checked {
  background-color: transparent;
  border-color: transparent;
}

.form-check-input:checked[type="checkbox"] {
  background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
}

.form-check-input:checked[type="radio"] {
  background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
}

.form-check-input[type="checkbox"]:indeterminate {
  background-color: #cb0c9f;
  border-color: #cb0c9f;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}

.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}

.form-check-input[disabled]~.form-check-label,
.form-check-input:disabled~.form-check-label {
  opacity: 0.5;
}

.form-switch {
  padding-left: 3rem;
}

.form-switch .form-check-input {
  width: 2.5rem;
  margin-left: -3rem;
  background-image: none;
  background-position: left center;
  border-radius: 2.5rem;
  transition: background-color 0.25s ease, border-color 0.25s ease, background-position 0.15s ease-in-out, opacity 0.15s ease-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}

.form-switch .form-check-input:focus {
  background-image: none;
}

.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: none;
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.btn-check[disabled]+.btn,
.btn-check:disabled+.btn {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: calc(1rem + 4px);
  padding: 0;
  background-color: transparent;
  appearance: none;
}

.form-range:focus {
  outline: 0;
}

.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 2px #e9aede;
}

.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 2px #e9aede;
}

.form-range::-moz-focus-outer {
  border: 0;
}

.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #cb0c9f;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    transition: none;
  }
}

.form-range::-webkit-slider-thumb:active {
  background-color: #f891e1;
}

.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #cb0c9f;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    transition: none;
  }
}

.form-range::-moz-range-thumb:active {
  background-color: #f891e1;
}

.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.form-range:disabled {
  pointer-events: none;
}

.form-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.form-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.form-floating {
  position: relative;
}

.form-floating>.form-control,
.form-floating>.form-select {
  height: calc(3.5rem + 2px);
  padding: 1rem 0.75rem;
}

.form-floating>label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  padding: 1rem 0.75rem;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-floating>label {
    transition: none;
  }
}

.form-floating>.form-control::placeholder {
  color: transparent;
}

.form-floating>.form-control:focus,
.form-floating>.form-control:not(:placeholder-shown) {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating>.form-control:-webkit-autofill {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating>.form-select {
  padding-top: 1.625rem;
  padding-bottom: 0.625rem;
}

.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label,
.form-floating>.form-select~label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.form-floating>.form-control:-webkit-autofill~label {
  opacity: 0.65;
  transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group>.form-control,
.input-group>.form-select {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}

.input-group>.form-control:focus,
.input-group>.form-select:focus {
  z-index: 3;
}

.input-group .btn {
  position: relative;
  z-index: 2;
}

.input-group .btn:focus {
  z-index: 3;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.5rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.4rem;
  color: #252f40;
  text-align: center;
  white-space: nowrap;
  background-color: #fff;
  border: 1px solid #d2d6da;
  border-radius: 0.5rem;
}

.input-group-lg>.form-control,
.input-group-lg>.form-select,
.input-group-lg>.input-group-text,
.input-group-lg>.btn {
  padding: 0.75rem 0.75rem;
  font-size: 0.875rem;
  border-radius: 0.5rem;
}

.input-group-sm>.form-control,
.input-group-sm>.form-select,
.input-group-sm>.input-group-text,
.input-group-sm>.btn {
  padding: 0.25rem 0.75rem;
  font-size: 0.75rem;
  border-radius: 0.5rem;
}

.input-group-lg>.form-select,
.input-group-sm>.form-select {
  padding-right: 1.75rem;
}

.input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group.has-validation> :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation>.dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #66d432;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #000;
  background-color: rgba(102, 212, 50, 0.9);
  border-radius: 0.5rem;
}

.was-validated :valid~.valid-feedback,
.was-validated :valid~.valid-tooltip,
.is-valid~.valid-feedback,
.is-valid~.valid-tooltip {
  display: block;
}

.was-validated .form-control:valid,
.form-control.is-valid {
  border-color: #66d432;
  padding-right: unset;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'%3e%3cpath fill='%2366d432' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 1rem 1rem;
}

.was-validated .form-control:valid:focus,
.form-control.is-valid:focus {
  border-color: #66d432;
  box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.25);
}

.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
  padding-right: unset;
  background-position: top 0.75rem right 0.75rem;
}

.was-validated .form-select:valid,
.form-select.is-valid {
  border-color: #66d432;
}

.was-validated .form-select:valid:not([multiple]):not([size]),
.was-validated .form-select:valid:not([multiple])[size="1"],
.form-select.is-valid:not([multiple]):not([size]),
.form-select.is-valid:not([multiple])[size="1"] {
  padding-right: 2.875rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 8'%3e%3cpath fill='%2366d432' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 1.75rem;
  background-size: 16px 12px, 1rem 1rem;
}

.was-validated .form-select:valid:focus,
.form-select.is-valid:focus {
  border-color: #66d432;
  box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.25);
}

.was-validated .form-check-input:valid,
.form-check-input.is-valid {
  border-color: #66d432;
}

.was-validated .form-check-input:valid:checked,
.form-check-input.is-valid:checked {
  background-color: #66d432;
}

.was-validated .form-check-input:valid:focus,
.form-check-input.is-valid:focus {
  box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.25);
}

.was-validated .form-check-input:valid~.form-check-label,
.form-check-input.is-valid~.form-check-label {
  color: #66d432;
}

.form-check-inline .form-check-input~.valid-feedback {
  margin-left: .5em;
}

.was-validated .input-group .form-control:valid,
.input-group .form-control.is-valid,
.was-validated .input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #fd5c70;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #000;
  background-color: rgba(253, 92, 112, 0.9);
  border-radius: 0.5rem;
}

.was-validated :invalid~.invalid-feedback,
.was-validated :invalid~.invalid-tooltip,
.is-invalid~.invalid-feedback,
.is-invalid~.invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid,
.form-control.is-invalid {
  border-color: #fd5c70;
  padding-right: unset;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 1rem 1rem;
}

.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus {
  border-color: #fd5c70;
  box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.25);
}

.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
  padding-right: unset;
  background-position: top 0.75rem right 0.75rem;
}

.was-validated .form-select:invalid,
.form-select.is-invalid {
  border-color: #fd5c70;
}

.was-validated .form-select:invalid:not([multiple]):not([size]),
.was-validated .form-select:invalid:not([multiple])[size="1"],
.form-select.is-invalid:not([multiple]):not([size]),
.form-select.is-invalid:not([multiple])[size="1"] {
  padding-right: 2.875rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23fd5c70' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23fd5c70' stroke='none'/%3e%3c/svg%3e");
  background-position: right 0.75rem center, center right 1.75rem;
  background-size: 16px 12px, 1rem 1rem;
}

.was-validated .form-select:invalid:focus,
.form-select.is-invalid:focus {
  border-color: #fd5c70;
  box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.25);
}

.was-validated .form-check-input:invalid,
.form-check-input.is-invalid {
  border-color: #fd5c70;
}

.was-validated .form-check-input:invalid:checked,
.form-check-input.is-invalid:checked {
  background-color: #fd5c70;
}

.was-validated .form-check-input:invalid:focus,
.form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.25);
}

.was-validated .form-check-input:invalid~.form-check-label,
.form-check-input.is-invalid~.form-check-label {
  color: #fd5c70;
}

.form-check-inline .form-check-input~.invalid-feedback {
  margin-left: .5em;
}

.was-validated .input-group .form-control:invalid,
.input-group .form-control.is-invalid,
.was-validated .input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 3;
}

.btn {
  display: inline-block;
  font-weight: 700;
  line-height: 1.4;
  color: #67748e;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.75rem 1.5rem;
  font-size: 0.75rem;
  border-radius: 0.5rem;
  transition: all 0.15s ease-in;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #67748e;
}

.btn-check:focus+.btn,
.btn:focus {
  outline: 0;
  box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.09), 0 2px 3px -1px rgba(0, 0, 0, 0.07);
}

.btn:disabled,
.btn.disabled,
fieldset:disabled .btn {
  pointer-events: none;
  opacity: 0.65;
}

.btn-primary {
  color: #fff;
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.btn-primary:hover {
  color: #fff;
  background-color: #ad0a87;
  border-color: #a20a7f;
}

.btn-check:focus+.btn-primary,
.btn-primary:focus {
  color: #fff;
  background-color: #ad0a87;
  border-color: #a20a7f;
  box-shadow: 0 0 0 0.2rem rgba(211, 48, 173, 0.5);
}

.btn-check:checked+.btn-primary,
.btn-check:active+.btn-primary,
.btn-primary:active,
.btn-primary.active,
.show>.btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #a20a7f;
  border-color: #980977;
}

.btn-check:checked+.btn-primary:focus,
.btn-check:active+.btn-primary:focus,
.btn-primary:active:focus,
.btn-primary.active:focus,
.show>.btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(211, 48, 173, 0.5);
}

.btn-primary:disabled,
.btn-primary.disabled {
  color: #fff;
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.btn-secondary {
  color: #000;
  background-color: #8392AB;
  border-color: #8392AB;
}

.btn-secondary:hover {
  color: #000;
  background-color: #96a2b8;
  border-color: #8f9db3;
}

.btn-check:focus+.btn-secondary,
.btn-secondary:focus {
  color: #000;
  background-color: #96a2b8;
  border-color: #8f9db3;
  box-shadow: 0 0 0 0.2rem rgba(111, 124, 145, 0.5);
}

.btn-check:checked+.btn-secondary,
.btn-check:active+.btn-secondary,
.btn-secondary:active,
.btn-secondary.active,
.show>.btn-secondary.dropdown-toggle {
  color: #000;
  background-color: #9ca8bc;
  border-color: #8f9db3;
}

.btn-check:checked+.btn-secondary:focus,
.btn-check:active+.btn-secondary:focus,
.btn-secondary:active:focus,
.btn-secondary.active:focus,
.show>.btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(111, 124, 145, 0.5);
}

.btn-secondary:disabled,
.btn-secondary.disabled {
  color: #000;
  background-color: #8392AB;
  border-color: #8392AB;
}

.btn-success {
  color: #000;
  background-color: #82d616;
  border-color: #82d616;
}

.btn-success:hover {
  color: #000;
  background-color: #95dc39;
  border-color: #8fda2d;
}

.btn-check:focus+.btn-success,
.btn-success:focus {
  color: #000;
  background-color: #95dc39;
  border-color: #8fda2d;
  box-shadow: 0 0 0 0.2rem rgba(111, 182, 19, 0.5);
}

.btn-check:checked+.btn-success,
.btn-check:active+.btn-success,
.btn-success:active,
.btn-success.active,
.show>.btn-success.dropdown-toggle {
  color: #000;
  background-color: #9bde45;
  border-color: #8fda2d;
}

.btn-check:checked+.btn-success:focus,
.btn-check:active+.btn-success:focus,
.btn-success:active:focus,
.btn-success.active:focus,
.show>.btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(111, 182, 19, 0.5);
}

.btn-success:disabled,
.btn-success.disabled {
  color: #000;
  background-color: #82d616;
  border-color: #82d616;
}

.btn-info {
  color: #000;
  background-color: #17c1e8;
  border-color: #17c1e8;
}

.btn-info:hover {
  color: #000;
  background-color: #3acaeb;
  border-color: #2ec7ea;
}

.btn-check:focus+.btn-info,
.btn-info:focus {
  color: #000;
  background-color: #3acaeb;
  border-color: #2ec7ea;
  box-shadow: 0 0 0 0.2rem rgba(20, 164, 197, 0.5);
}

.btn-check:checked+.btn-info,
.btn-check:active+.btn-info,
.btn-info:active,
.btn-info.active,
.show>.btn-info.dropdown-toggle {
  color: #000;
  background-color: #45cded;
  border-color: #2ec7ea;
}

.btn-check:checked+.btn-info:focus,
.btn-check:active+.btn-info:focus,
.btn-info:active:focus,
.btn-info.active:focus,
.show>.btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(20, 164, 197, 0.5);
}

.btn-info:disabled,
.btn-info.disabled {
  color: #000;
  background-color: #17c1e8;
  border-color: #17c1e8;
}

.btn-warning {
  color: #000;
  background-color: #f53939;
  border-color: #f53939;
}

.btn-warning:hover {
  color: #000;
  background-color: #f75757;
  border-color: #f64d4d;
}

.btn-check:focus+.btn-warning,
.btn-warning:focus {
  color: #000;
  background-color: #f75757;
  border-color: #f64d4d;
  box-shadow: 0 0 0 0.2rem rgba(208, 48, 48, 0.5);
}

.btn-check:checked+.btn-warning,
.btn-check:active+.btn-warning,
.btn-warning:active,
.btn-warning.active,
.show>.btn-warning.dropdown-toggle {
  color: #000;
  background-color: #f76161;
  border-color: #f64d4d;
}

.btn-check:checked+.btn-warning:focus,
.btn-check:active+.btn-warning:focus,
.btn-warning:active:focus,
.btn-warning.active:focus,
.show>.btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(208, 48, 48, 0.5);
}

.btn-warning:disabled,
.btn-warning.disabled {
  color: #000;
  background-color: #f53939;
  border-color: #f53939;
}

.btn-danger {
  color: #fff;
  background-color: #ea0606;
  border-color: #ea0606;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c70505;
  border-color: #bb0505;
}

.btn-check:focus+.btn-danger,
.btn-danger:focus {
  color: #fff;
  background-color: #c70505;
  border-color: #bb0505;
  box-shadow: 0 0 0 0.2rem rgba(237, 43, 43, 0.5);
}

.btn-check:checked+.btn-danger,
.btn-check:active+.btn-danger,
.btn-danger:active,
.btn-danger.active,
.show>.btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bb0505;
  border-color: #b00505;
}

.btn-check:checked+.btn-danger:focus,
.btn-check:active+.btn-danger:focus,
.btn-danger:active:focus,
.btn-danger.active:focus,
.show>.btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(237, 43, 43, 0.5);
}

.btn-danger:disabled,
.btn-danger.disabled {
  color: #fff;
  background-color: #ea0606;
  border-color: #ea0606;
}

.btn-light {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}

.btn-light:hover {
  color: #000;
  background-color: #eceff1;
  border-color: #ebeef1;
}

.btn-check:focus+.btn-light,
.btn-light:focus {
  color: #000;
  background-color: #eceff1;
  border-color: #ebeef1;
  box-shadow: 0 0 0 0.2rem rgba(198, 201, 203, 0.5);
}

.btn-check:checked+.btn-light,
.btn-check:active+.btn-light,
.btn-light:active,
.btn-light.active,
.show>.btn-light.dropdown-toggle {
  color: #000;
  background-color: #edf0f2;
  border-color: #ebeef1;
}

.btn-check:checked+.btn-light:focus,
.btn-check:active+.btn-light:focus,
.btn-light:active:focus,
.btn-light.active:focus,
.show>.btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(198, 201, 203, 0.5);
}

.btn-light:disabled,
.btn-light.disabled {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}

.btn-dark {
  color: #fff;
  background-color: #252f40;
  border-color: #252f40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #1f2836;
  border-color: #1e2633;
}

.btn-check:focus+.btn-dark,
.btn-dark:focus {
  color: #fff;
  background-color: #1f2836;
  border-color: #1e2633;
  box-shadow: 0 0 0 0.2rem rgba(70, 78, 93, 0.5);
}

.btn-check:checked+.btn-dark,
.btn-check:active+.btn-dark,
.btn-dark:active,
.btn-dark.active,
.show>.btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1e2633;
  border-color: #1c2330;
}

.btn-check:checked+.btn-dark:focus,
.btn-check:active+.btn-dark:focus,
.btn-dark:active:focus,
.btn-dark.active:focus,
.show>.btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(70, 78, 93, 0.5);
}

.btn-dark:disabled,
.btn-dark.disabled {
  color: #fff;
  background-color: #252f40;
  border-color: #252f40;
}

.btn-white {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}

.btn-white:hover {
  color: #000;
  background-color: white;
  border-color: white;
}

.btn-check:focus+.btn-white,
.btn-white:focus {
  color: #000;
  background-color: white;
  border-color: white;
  box-shadow: 0 0 0 0.2rem rgba(217, 217, 217, 0.5);
}

.btn-check:checked+.btn-white,
.btn-check:active+.btn-white,
.btn-white:active,
.btn-white.active,
.show>.btn-white.dropdown-toggle {
  color: #000;
  background-color: white;
  border-color: white;
}

.btn-check:checked+.btn-white:focus,
.btn-check:active+.btn-white:focus,
.btn-white:active:focus,
.btn-white.active:focus,
.show>.btn-white.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(217, 217, 217, 0.5);
}

.btn-white:disabled,
.btn-white.disabled {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}

.btn-outline-primary {
  color: #cb0c9f;
  border-color: #cb0c9f;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.btn-check:focus+.btn-outline-primary,
.btn-outline-primary:focus {
  box-shadow: 0 0 0 0.2rem rgba(203, 12, 159, 0.5);
}

.btn-check:checked+.btn-outline-primary,
.btn-check:active+.btn-outline-primary,
.btn-outline-primary:active,
.btn-outline-primary.active,
.btn-outline-primary.dropdown-toggle.show {
  color: #fff;
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.btn-check:checked+.btn-outline-primary:focus,
.btn-check:active+.btn-outline-primary:focus,
.btn-outline-primary:active:focus,
.btn-outline-primary.active:focus,
.btn-outline-primary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(203, 12, 159, 0.5);
}

.btn-outline-primary:disabled,
.btn-outline-primary.disabled {
  color: #cb0c9f;
  background-color: transparent;
}

.btn-outline-secondary {
  color: #8392AB;
  border-color: #8392AB;
}

.btn-outline-secondary:hover {
  color: #000;
  background-color: #8392AB;
  border-color: #8392AB;
}

.btn-check:focus+.btn-outline-secondary,
.btn-outline-secondary:focus {
  box-shadow: 0 0 0 0.2rem rgba(131, 146, 171, 0.5);
}

.btn-check:checked+.btn-outline-secondary,
.btn-check:active+.btn-outline-secondary,
.btn-outline-secondary:active,
.btn-outline-secondary.active,
.btn-outline-secondary.dropdown-toggle.show {
  color: #000;
  background-color: #8392AB;
  border-color: #8392AB;
}

.btn-check:checked+.btn-outline-secondary:focus,
.btn-check:active+.btn-outline-secondary:focus,
.btn-outline-secondary:active:focus,
.btn-outline-secondary.active:focus,
.btn-outline-secondary.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(131, 146, 171, 0.5);
}

.btn-outline-secondary:disabled,
.btn-outline-secondary.disabled {
  color: #8392AB;
  background-color: transparent;
}

.btn-outline-success {
  color: #82d616;
  border-color: #82d616;
}

.btn-outline-success:hover {
  color: #000;
  background-color: #82d616;
  border-color: #82d616;
}

.btn-check:focus+.btn-outline-success,
.btn-outline-success:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 214, 22, 0.5);
}

.btn-check:checked+.btn-outline-success,
.btn-check:active+.btn-outline-success,
.btn-outline-success:active,
.btn-outline-success.active,
.btn-outline-success.dropdown-toggle.show {
  color: #000;
  background-color: #82d616;
  border-color: #82d616;
}

.btn-check:checked+.btn-outline-success:focus,
.btn-check:active+.btn-outline-success:focus,
.btn-outline-success:active:focus,
.btn-outline-success.active:focus,
.btn-outline-success.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 214, 22, 0.5);
}

.btn-outline-success:disabled,
.btn-outline-success.disabled {
  color: #82d616;
  background-color: transparent;
}

.btn-outline-info {
  color: #17c1e8;
  border-color: #17c1e8;
}

.btn-outline-info:hover {
  color: #000;
  background-color: #17c1e8;
  border-color: #17c1e8;
}

.btn-check:focus+.btn-outline-info,
.btn-outline-info:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 193, 232, 0.5);
}

.btn-check:checked+.btn-outline-info,
.btn-check:active+.btn-outline-info,
.btn-outline-info:active,
.btn-outline-info.active,
.btn-outline-info.dropdown-toggle.show {
  color: #000;
  background-color: #17c1e8;
  border-color: #17c1e8;
}

.btn-check:checked+.btn-outline-info:focus,
.btn-check:active+.btn-outline-info:focus,
.btn-outline-info:active:focus,
.btn-outline-info.active:focus,
.btn-outline-info.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 193, 232, 0.5);
}

.btn-outline-info:disabled,
.btn-outline-info.disabled {
  color: #17c1e8;
  background-color: transparent;
}

.btn-outline-warning {
  color: #f53939;
  border-color: #f53939;
}

.btn-outline-warning:hover {
  color: #000;
  background-color: #f53939;
  border-color: #f53939;
}

.btn-check:focus+.btn-outline-warning,
.btn-outline-warning:focus {
  box-shadow: 0 0 0 0.2rem rgba(245, 57, 57, 0.5);
}

.btn-check:checked+.btn-outline-warning,
.btn-check:active+.btn-outline-warning,
.btn-outline-warning:active,
.btn-outline-warning.active,
.btn-outline-warning.dropdown-toggle.show {
  color: #000;
  background-color: #f53939;
  border-color: #f53939;
}

.btn-check:checked+.btn-outline-warning:focus,
.btn-check:active+.btn-outline-warning:focus,
.btn-outline-warning:active:focus,
.btn-outline-warning.active:focus,
.btn-outline-warning.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(245, 57, 57, 0.5);
}

.btn-outline-warning:disabled,
.btn-outline-warning.disabled {
  color: #f53939;
  background-color: transparent;
}

.btn-outline-danger {
  color: #ea0606;
  border-color: #ea0606;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #ea0606;
  border-color: #ea0606;
}

.btn-check:focus+.btn-outline-danger,
.btn-outline-danger:focus {
  box-shadow: 0 0 0 0.2rem rgba(234, 6, 6, 0.5);
}

.btn-check:checked+.btn-outline-danger,
.btn-check:active+.btn-outline-danger,
.btn-outline-danger:active,
.btn-outline-danger.active,
.btn-outline-danger.dropdown-toggle.show {
  color: #fff;
  background-color: #ea0606;
  border-color: #ea0606;
}

.btn-check:checked+.btn-outline-danger:focus,
.btn-check:active+.btn-outline-danger:focus,
.btn-outline-danger:active:focus,
.btn-outline-danger.active:focus,
.btn-outline-danger.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(234, 6, 6, 0.5);
}

.btn-outline-danger:disabled,
.btn-outline-danger.disabled {
  color: #ea0606;
  background-color: transparent;
}

.btn-outline-light {
  color: #e9ecef;
  border-color: #e9ecef;
}

.btn-outline-light:hover {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}

.btn-check:focus+.btn-outline-light,
.btn-outline-light:focus {
  box-shadow: 0 0 0 0.2rem rgba(233, 236, 239, 0.5);
}

.btn-check:checked+.btn-outline-light,
.btn-check:active+.btn-outline-light,
.btn-outline-light:active,
.btn-outline-light.active,
.btn-outline-light.dropdown-toggle.show {
  color: #000;
  background-color: #e9ecef;
  border-color: #e9ecef;
}

.btn-check:checked+.btn-outline-light:focus,
.btn-check:active+.btn-outline-light:focus,
.btn-outline-light:active:focus,
.btn-outline-light.active:focus,
.btn-outline-light.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(233, 236, 239, 0.5);
}

.btn-outline-light:disabled,
.btn-outline-light.disabled {
  color: #e9ecef;
  background-color: transparent;
}

.btn-outline-dark {
  color: #252f40;
  border-color: #252f40;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #252f40;
  border-color: #252f40;
}

.btn-check:focus+.btn-outline-dark,
.btn-outline-dark:focus {
  box-shadow: 0 0 0 0.2rem rgba(37, 47, 64, 0.5);
}

.btn-check:checked+.btn-outline-dark,
.btn-check:active+.btn-outline-dark,
.btn-outline-dark:active,
.btn-outline-dark.active,
.btn-outline-dark.dropdown-toggle.show {
  color: #fff;
  background-color: #252f40;
  border-color: #252f40;
}

.btn-check:checked+.btn-outline-dark:focus,
.btn-check:active+.btn-outline-dark:focus,
.btn-outline-dark:active:focus,
.btn-outline-dark.active:focus,
.btn-outline-dark.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(37, 47, 64, 0.5);
}

.btn-outline-dark:disabled,
.btn-outline-dark.disabled {
  color: #252f40;
  background-color: transparent;
}

.btn-outline-white {
  color: #fff;
  border-color: #fff;
}

.btn-outline-white:hover {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}

.btn-check:focus+.btn-outline-white,
.btn-outline-white:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
}

.btn-check:checked+.btn-outline-white,
.btn-check:active+.btn-outline-white,
.btn-outline-white:active,
.btn-outline-white.active,
.btn-outline-white.dropdown-toggle.show {
  color: #000;
  background-color: #fff;
  border-color: #fff;
}

.btn-check:checked+.btn-outline-white:focus,
.btn-check:active+.btn-outline-white:focus,
.btn-outline-white:active:focus,
.btn-outline-white.active:focus,
.btn-outline-white.dropdown-toggle.show:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.5);
}

.btn-outline-white:disabled,
.btn-outline-white.disabled {
  color: #fff;
  background-color: transparent;
}

.btn-link {
  font-weight: 400;
  color: #cb0c9f;
  text-decoration: none;
}

.btn-link:hover {
  color: #830866;
  text-decoration: none;
}

.btn-link:focus {
  text-decoration: none;
}

.btn-link:disabled,
.btn-link.disabled {
  color: #6c757d;
}

.btn-lg,
.btn-group-lg>.btn {
  padding: 0.875rem 4rem;
  font-size: 0.875rem;
  border-radius: 0.5rem;
}

.btn-sm,
.btn-group-sm>.btn {
  padding: 0.5rem 2rem;
  font-size: 0.75rem;
  border-radius: 0.5rem;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 11rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 0.875rem;
  color: #67748e;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 0 solid transparent;
  border-radius: 0.5rem;
}

.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: 1.625rem;
}

.dropdown-menu-start {
  --bs-position: start;
}

.dropdown-menu-start[data-bs-popper] {
  right: auto
    /* rtl:ignore */
  ;
  left: 0
    /* rtl:ignore */
  ;
}

.dropdown-menu-end {
  --bs-position: end;
}

.dropdown-menu-end[data-bs-popper] {
  right: 0
    /* rtl:ignore */
  ;
  left: auto
    /* rtl:ignore */
  ;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }

  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto
      /* rtl:ignore */
    ;
    left: 0
      /* rtl:ignore */
    ;
  }

  .dropdown-menu-sm-end {
    --bs-position: end;
  }

  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0
      /* rtl:ignore */
    ;
    left: auto
      /* rtl:ignore */
    ;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }

  .dropdown-menu-md-start[data-bs-popper] {
    right: auto
      /* rtl:ignore */
    ;
    left: 0
      /* rtl:ignore */
    ;
  }

  .dropdown-menu-md-end {
    --bs-position: end;
  }

  .dropdown-menu-md-end[data-bs-popper] {
    right: 0
      /* rtl:ignore */
    ;
    left: auto
      /* rtl:ignore */
    ;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }

  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto
      /* rtl:ignore */
    ;
    left: 0
      /* rtl:ignore */
    ;
  }

  .dropdown-menu-lg-end {
    --bs-position: end;
  }

  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0
      /* rtl:ignore */
    ;
    left: auto
      /* rtl:ignore */
    ;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }

  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto
      /* rtl:ignore */
    ;
    left: 0
      /* rtl:ignore */
    ;
  }

  .dropdown-menu-xl-end {
    --bs-position: end;
  }

  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0
      /* rtl:ignore */
    ;
    left: auto
      /* rtl:ignore */
    ;
  }
}

@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }

  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto
      /* rtl:ignore */
    ;
    left: 0
      /* rtl:ignore */
    ;
  }

  .dropdown-menu-xxl-end {
    --bs-position: end;
  }

  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0
      /* rtl:ignore */
    ;
    left: auto
      /* rtl:ignore */
    ;
  }
}

.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 1.625rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 1.625rem;
}

.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 1.625rem;
}

.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropstart .dropdown-toggle::after {
  display: none;
}

.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid transparent;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.3rem 1rem;
  clear: both;
  font-weight: 400;
  color: #67748e;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover,
.dropdown-item:focus {
  color: #252f40;
  background-color: #e9ecef;
}

.dropdown-item.active,
.dropdown-item:active {
  color: #67748e;
  text-decoration: none;
  background-color: transparent;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.3rem 1rem;
  color: #67748e;
}

.dropdown-menu-dark {
  color: #dee2e6;
  background-color: #343a40;
  border-color: transparent;
}

.dropdown-menu-dark .dropdown-item {
  color: #dee2e6;
}

.dropdown-menu-dark .dropdown-item:hover,
.dropdown-menu-dark .dropdown-item:focus {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.15);
}

.dropdown-menu-dark .dropdown-item.active,
.dropdown-menu-dark .dropdown-item:active {
  color: #67748e;
  background-color: transparent;
}

.dropdown-menu-dark .dropdown-item.disabled,
.dropdown-menu-dark .dropdown-item:disabled {
  color: #adb5bd;
}

.dropdown-menu-dark .dropdown-divider {
  border-color: transparent;
}

.dropdown-menu-dark .dropdown-item-text {
  color: #dee2e6;
}

.dropdown-menu-dark .dropdown-header {
  color: #adb5bd;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group>.btn,
.btn-group-vertical>.btn {
  position: relative;
  flex: 1 1 auto;
}

.btn-group>.btn-check:checked+.btn,
.btn-group>.btn-check:focus+.btn,
.btn-group>.btn:hover,
.btn-group>.btn:focus,
.btn-group>.btn:active,
.btn-group>.btn.active,
.btn-group-vertical>.btn-check:checked+.btn,
.btn-group-vertical>.btn-check:focus+.btn,
.btn-group-vertical>.btn:hover,
.btn-group-vertical>.btn:focus,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group>.btn:not(:first-child),
.btn-group>.btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group>.btn-group:not(:last-child)>.btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group>.btn:nth-child(n + 3),
.btn-group> :not(.btn-check)+.btn,
.btn-group>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm+.dropdown-toggle-split,
.btn-group-sm>.btn+.dropdown-toggle-split {
  padding-right: 1.5rem;
  padding-left: 1.5rem;
}

.btn-lg+.dropdown-toggle-split,
.btn-group-lg>.btn+.dropdown-toggle-split {
  padding-right: 3rem;
  padding-left: 3rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}

.btn-group-vertical>.btn,
.btn-group-vertical>.btn-group {
  width: 100%;
}

.btn-group-vertical>.btn:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical>.btn-group:not(:last-child)>.btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical>.btn~.btn,
.btn-group-vertical>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #cb0c9f;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}

.nav-link:hover,
.nav-link:focus {
  color: #830866;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-link {
  margin-bottom: -1px;
  background: none;
  border: 1px solid transparent;
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
  isolation: isolate;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.75rem;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: #252f40;
  background-color: #fff;
}

.nav-fill>.nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified>.nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content>.tab-pane {
  display: none;
}

.tab-content>.active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar>.container,
.navbar>.container-fluid,
.navbar>.container-sm,
.navbar>.container-md,
.navbar>.container-lg,
.navbar>.container-xl,
.navbar>.container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  padding-top: 0.40625rem;
  padding-bottom: 0.40625rem;
  margin-right: 1rem;
  font-size: 1.125rem;
  white-space: nowrap;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.125rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.5rem;
  transition: box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}

.navbar-toggler:hover {
  text-decoration: none;
}

.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 0.2rem;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }

  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }

  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }

  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }

  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }

  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }

  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }

  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }

  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }

  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(37, 47, 64, 0.9);
}

.navbar-light .navbar-brand:hover,
.navbar-light .navbar-brand:focus {
  color: rgba(37, 47, 64, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: #252f40;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
  color: rgba(37, 47, 64, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(37, 47, 64, 0.3);
}

.navbar-light .navbar-nav .show>.nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(37, 47, 64, 0.9);
}

.navbar-light .navbar-toggler {
  color: #252f40;
  border-color: rgba(37, 47, 64, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23252f40' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: #252f40;
}

.navbar-light .navbar-text a,
.navbar-light .navbar-text a:hover,
.navbar-light .navbar-text a:focus {
  color: rgba(37, 47, 64, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover,
.navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.85);
}

.navbar-dark .navbar-nav .nav-link:hover,
.navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show>.nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.85);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.85);
}

.navbar-dark .navbar-text a,
.navbar-dark .navbar-text a:hover,
.navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 0 solid rgba(0, 0, 0, 0.125);
  border-radius: 1rem;
}

.card>hr {
  margin-right: 0;
  margin-left: 0;
}

.card>.list-group {
  border-top: inherit;
  border-bottom: inherit;
}

.card>.list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: 1rem;
  border-top-right-radius: 1rem;
}

.card>.list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: 1rem;
  border-bottom-left-radius: 1rem;
}

.card>.card-header+.list-group,
.card>.list-group+.card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  padding: 1rem 1rem;
}

.card-title {
  margin-bottom: 0.5rem;
}

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link+.card-link {
  margin-left: 1rem;
}

.card-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  background-color: #fff;
  border-bottom: 0 solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: 1rem 1rem 0 0;
}

.card-footer {
  padding: 0.5rem 1rem;
  background-color: #fff;
  border-top: 0 solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 1rem 1rem;
}

.card-header-tabs {
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
  margin-left: -0.5rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.5rem;
  margin-left: -0.5rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: 1rem;
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: 1rem;
  border-top-right-radius: 1rem;
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: 1rem;
  border-bottom-left-radius: 1rem;
}

.card-group>.card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }

  .card-group>.card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }

  .card-group>.card+.card {
    margin-left: 0;
    border-left: 0;
  }

  .card-group>.card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }

  .card-group>.card:not(:last-child) .card-img-top,
  .card-group>.card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }

  .card-group>.card:not(:last-child) .card-img-bottom,
  .card-group>.card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }

  .card-group>.card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }

  .card-group>.card:not(:first-child) .card-img-top,
  .card-group>.card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }

  .card-group>.card:not(:first-child) .card-img-bottom,
  .card-group>.card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion-button {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  padding: 1rem 1rem;
  font-size: 1rem;
  color: #67748e;
  text-align: left;
  background-color: transparent;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: all 0.15s ease-in, border-radius 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}

.accordion-button:not(.collapsed) {
  color: #252f40;
  background-color: transparent;
  box-shadow: inset 0 0 0 rgba(0, 0, 0, 0.125);
}

.accordion-button:not(.collapsed)::after {
  background-image: none;
  transform: rotate(180deg);
}

.accordion-button::after {
  flex-shrink: 0;
  width: 1rem;
  height: 1rem;
  margin-left: auto;
  content: "";
  background-image: none;
  background-repeat: no-repeat;
  background-size: 1rem;
  transition: transform 0.2s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}

.accordion-button:hover {
  z-index: 2;
}

.accordion-button:focus {
  z-index: 3;
  border-color: #e293d3;
  outline: 0;
  box-shadow: none;
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  background-color: transparent;
  border: 0 solid rgba(0, 0, 0, 0.125);
}

.accordion-item:first-of-type {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.accordion-item:not(:first-of-type) {
  border-top: 0;
}

.accordion-item:last-of-type {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.accordion-body {
  padding: 1rem 1rem;
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}

.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.accordion-flush .accordion-item:first-child {
  border-top: 0;
}

.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}

.accordion-flush .accordion-item .accordion-button {
  border-radius: 0;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.5rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.5rem;
}

.breadcrumb-item+.breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item+.breadcrumb-item::before {
  float: left;
  padding-right: 0.5rem;
  color: #6c757d;
  content: var(--bs-breadcrumb-divider, "/")
    /* rtl: var(--bs-breadcrumb-divider, "/") */
  ;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  color: #cb0c9f;
  background-color: #fff;
  border: 1px solid #dee2e6;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}

.page-link:hover {
  z-index: 2;
  color: #830866;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 3;
  color: #830866;
  background-color: #e9ecef;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(203, 12, 159, 0.25);
}

.page-item:not(:first-child) .page-link {
  margin-left: -1px;
}

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
  border-color: #dee2e6;
}

.page-link {
  padding: 0.375rem 0.75rem;
}

.page-item:first-child .page-link {
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.125rem;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.75rem;
  border-bottom-left-radius: 0.75rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.75rem;
  border-bottom-right-radius: 0.75rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.badge {
  display: inline-block;
  padding: 0.55em 0.9em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.45rem;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.5rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 600;
}

.alert-dismissible {
  padding-right: 3rem;
}

.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}

.alert-primary {
  color: #7a075f;
  background-color: #f5ceec;
  border-color: #efb6e2;
}

.alert-primary .alert-link {
  color: #62064c;
}

.alert-secondary {
  color: #4f5867;
  background-color: #e6e9ee;
  border-color: #dadee6;
}

.alert-secondary .alert-link {
  color: #3f4652;
}

.alert-success {
  color: #345609;
  background-color: #e6f7d0;
  border-color: #daf3b9;
}

.alert-success .alert-link {
  color: #2a4507;
}

.alert-info {
  color: #0e748b;
  background-color: #d1f3fa;
  border-color: #b9ecf8;
}

.alert-info .alert-link {
  color: #0b5d6f;
}

.alert-warning {
  color: #932222;
  background-color: #fdd7d7;
  border-color: #fcc4c4;
}

.alert-warning .alert-link {
  color: #761b1b;
}

.alert-danger {
  color: #8c0404;
  background-color: #fbcdcd;
  border-color: #f9b4b4;
}

.alert-danger .alert-link {
  color: #700303;
}

.alert-light {
  color: #5d5e60;
  background-color: #fbfbfc;
  border-color: #f8f9fa;
}

.alert-light .alert-link {
  color: #4a4b4d;
}

.alert-dark {
  color: #161c26;
  background-color: #d3d5d9;
  border-color: #bec1c6;
}

.alert-dark .alert-link {
  color: #12161e;
}

.alert-white {
  color: #666666;
  background-color: white;
  border-color: white;
}

.alert-white .alert-link {
  color: #525252;
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 3px;
  }
}

.progress {
  display: flex;
  height: 3px;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.5rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #cb0c9f;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 3px 3px;
}

.progress-bar-animated {
  animation: 1s linear infinite progress-bar-stripes;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.5rem;
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}

.list-group-numbered>li::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover,
.list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #67748e;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: inherit;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}

.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}

.list-group-item.disabled,
.list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.list-group-item+.list-group-item {
  border-top-width: 0;
}

.list-group-item+.list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}

.list-group-horizontal>.list-group-item:first-child {
  border-bottom-left-radius: 0.5rem;
  border-top-right-radius: 0;
}

.list-group-horizontal>.list-group-item:last-child {
  border-top-right-radius: 0.5rem;
  border-bottom-left-radius: 0;
}

.list-group-horizontal>.list-group-item.active {
  margin-top: 0;
}

.list-group-horizontal>.list-group-item+.list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}

.list-group-horizontal>.list-group-item+.list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }

  .list-group-horizontal-sm>.list-group-item:first-child {
    border-bottom-left-radius: 0.5rem;
    border-top-right-radius: 0;
  }

  .list-group-horizontal-sm>.list-group-item:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0;
  }

  .list-group-horizontal-sm>.list-group-item.active {
    margin-top: 0;
  }

  .list-group-horizontal-sm>.list-group-item+.list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }

  .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }

  .list-group-horizontal-md>.list-group-item:first-child {
    border-bottom-left-radius: 0.5rem;
    border-top-right-radius: 0;
  }

  .list-group-horizontal-md>.list-group-item:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0;
  }

  .list-group-horizontal-md>.list-group-item.active {
    margin-top: 0;
  }

  .list-group-horizontal-md>.list-group-item+.list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }

  .list-group-horizontal-md>.list-group-item+.list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }

  .list-group-horizontal-lg>.list-group-item:first-child {
    border-bottom-left-radius: 0.5rem;
    border-top-right-radius: 0;
  }

  .list-group-horizontal-lg>.list-group-item:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0;
  }

  .list-group-horizontal-lg>.list-group-item.active {
    margin-top: 0;
  }

  .list-group-horizontal-lg>.list-group-item+.list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }

  .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }

  .list-group-horizontal-xl>.list-group-item:first-child {
    border-bottom-left-radius: 0.5rem;
    border-top-right-radius: 0;
  }

  .list-group-horizontal-xl>.list-group-item:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0;
  }

  .list-group-horizontal-xl>.list-group-item.active {
    margin-top: 0;
  }

  .list-group-horizontal-xl>.list-group-item+.list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }

  .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }

  .list-group-horizontal-xxl>.list-group-item:first-child {
    border-bottom-left-radius: 0.5rem;
    border-top-right-radius: 0;
  }

  .list-group-horizontal-xxl>.list-group-item:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0;
  }

  .list-group-horizontal-xxl>.list-group-item.active {
    margin-top: 0;
  }

  .list-group-horizontal-xxl>.list-group-item+.list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }

  .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

.list-group-flush {
  border-radius: 0;
}

.list-group-flush>.list-group-item {
  border-width: 0 0 1px;
}

.list-group-flush>.list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #7a075f;
  background-color: #f5ceec;
}

.list-group-item-primary.list-group-item-action:hover,
.list-group-item-primary.list-group-item-action:focus {
  color: #7a075f;
  background-color: #ddb9d4;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #7a075f;
  border-color: #7a075f;
}

.list-group-item-secondary {
  color: #4f5867;
  background-color: #e6e9ee;
}

.list-group-item-secondary.list-group-item-action:hover,
.list-group-item-secondary.list-group-item-action:focus {
  color: #4f5867;
  background-color: #cfd2d6;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #4f5867;
  border-color: #4f5867;
}

.list-group-item-success {
  color: #345609;
  background-color: #e6f7d0;
}

.list-group-item-success.list-group-item-action:hover,
.list-group-item-success.list-group-item-action:focus {
  color: #345609;
  background-color: #cfdebb;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #345609;
  border-color: #345609;
}

.list-group-item-info {
  color: #0e748b;
  background-color: #d1f3fa;
}

.list-group-item-info.list-group-item-action:hover,
.list-group-item-info.list-group-item-action:focus {
  color: #0e748b;
  background-color: #bcdbe1;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #0e748b;
  border-color: #0e748b;
}

.list-group-item-warning {
  color: #932222;
  background-color: #fdd7d7;
}

.list-group-item-warning.list-group-item-action:hover,
.list-group-item-warning.list-group-item-action:focus {
  color: #932222;
  background-color: #e4c2c2;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #932222;
  border-color: #932222;
}

.list-group-item-danger {
  color: #8c0404;
  background-color: #fbcdcd;
}

.list-group-item-danger.list-group-item-action:hover,
.list-group-item-danger.list-group-item-action:focus {
  color: #8c0404;
  background-color: #e2b9b9;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #8c0404;
  border-color: #8c0404;
}

.list-group-item-light {
  color: #5d5e60;
  background-color: #fbfbfc;
}

.list-group-item-light.list-group-item-action:hover,
.list-group-item-light.list-group-item-action:focus {
  color: #5d5e60;
  background-color: #e2e2e3;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #5d5e60;
  border-color: #5d5e60;
}

.list-group-item-dark {
  color: #161c26;
  background-color: #d3d5d9;
}

.list-group-item-dark.list-group-item-action:hover,
.list-group-item-dark.list-group-item-action:focus {
  color: #161c26;
  background-color: #bec0c3;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #161c26;
  border-color: #161c26;
}

.list-group-item-white {
  color: #666666;
  background-color: white;
}

.list-group-item-white.list-group-item-action:hover,
.list-group-item-white.list-group-item-action:focus {
  color: #666666;
  background-color: #e6e6e6;
}

.list-group-item-white.list-group-item-action.active {
  color: #fff;
  background-color: #666666;
  border-color: #666666;
}

.btn-close {
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #fff;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 0.25rem;
  opacity: 0.5;
}

.btn-close:hover {
  color: #fff;
  text-decoration: none;
  opacity: 0.75;
}

.btn-close:focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(203, 12, 159, 0.25);
  opacity: 1;
}

.btn-close:disabled,
.btn-close.disabled {
  pointer-events: none;
  user-select: none;
  opacity: 0.25;
}

.btn-close-white {
  filter: invert(1) grayscale(100%) brightness(200%);
}

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 0 solid transparent;
  box-shadow: 0 0.25rem 0.375rem -0.0625rem rgba(20, 20, 20, 0.12), 0 0.125rem 0.25rem -0.0625rem rgba(20, 20, 20, 0.07);
  border-radius: 0.5rem;
}

.toast:not(.showing):not(.show) {
  opacity: 0;
}

.toast.hide {
  display: none;
}

.toast-container {
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}

.toast-container> :not(:last-child) {
  margin-bottom: 1.5rem;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.75rem 0.75rem;
  color: #252f40;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 0 solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: 0.5rem;
  border-top-right-radius: 0.5rem;
}

.toast-header .btn-close {
  margin-right: -0.375rem;
  margin-left: 0.75rem;
}

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word;
}

.modal-open {
  overflow: hidden;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  transform: none;
}

.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.75rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: calc(0.75rem - 1px);
  border-top-right-radius: calc(0.75rem - 1px);
}

.modal-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin: -0.5rem -0.5rem -0.5rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  flex-shrink: 0;
  align-items: center;
  justify-content: flex-end;
  padding: 0.75rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: calc(0.75rem - 1px);
  border-bottom-left-radius: calc(0.75rem - 1px);
}

.modal-footer>* {
  margin: 0.25rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }

  .modal-dialog-scrollable {
    height: calc(100% - 3.5rem);
  }

  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }

  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {

  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}

.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}

.modal-fullscreen .modal-header {
  border-radius: 0;
}

.modal-fullscreen .modal-body {
  overflow-y: auto;
}

.modal-fullscreen .modal-footer {
  border-radius: 0;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }

  .modal-fullscreen-sm-down .modal-header {
    border-radius: 0;
  }

  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }

  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }

  .modal-fullscreen-md-down .modal-header {
    border-radius: 0;
  }

  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }

  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }

  .modal-fullscreen-lg-down .modal-header {
    border-radius: 0;
  }

  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }

  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }

  .modal-fullscreen-xl-down .modal-header {
    border-radius: 0;
  }

  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }

  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
}

@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }

  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }

  .modal-fullscreen-xxl-down .modal-header {
    border-radius: 0;
  }

  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }

  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .tooltip-arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top,
.bs-tooltip-auto[data-popper-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
  bottom: 0;
}

.bs-tooltip-top .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
  top: -1px;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-end,
.bs-tooltip-auto[data-popper-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-end .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-end .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
  right: -1px;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom,
.bs-tooltip-auto[data-popper-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
  top: 0;
}

.bs-tooltip-bottom .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-start,
.bs-tooltip-auto[data-popper-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-start .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-start .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
  left: -1px;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.5rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0
    /* rtl:ignore */
  ;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 0px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.75rem;
}

.popover .popover-arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
}

.popover .popover-arrow::before,
.popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top>.popover-arrow,
.bs-popover-auto[data-popper-placement^="top"]>.popover-arrow {
  bottom: calc(-0.5rem - 0px);
}

.bs-popover-top>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^="top"]>.popover-arrow::after {
  bottom: 0px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-end>.popover-arrow,
.bs-popover-auto[data-popper-placement^="right"]>.popover-arrow {
  left: calc(-0.5rem - 0px);
  width: 0.5rem;
  height: 1rem;
}

.bs-popover-end>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-end>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^="right"]>.popover-arrow::after {
  left: 0px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom>.popover-arrow,
.bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow {
  top: calc(-0.5rem - 0px);
}

.bs-popover-bottom>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^="bottom"]>.popover-arrow::after {
  top: 0px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before,
.bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 0px solid #e9ecef;
}

.bs-popover-start>.popover-arrow,
.bs-popover-auto[data-popper-placement^="left"]>.popover-arrow {
  right: calc(-0.5rem - 0px);
  width: 0.5rem;
  height: 1rem;
}

.bs-popover-start>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-start>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^="left"]>.popover-arrow::after {
  right: 0px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #e9ecef;
  border-bottom: 0px solid #d2d4d7;
  border-top-left-radius: calc(0.75rem - 0px);
  border-top-right-radius: calc(0.75rem - 0px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 1rem 1rem;
  color: #67748e;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {

  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {

  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}

.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}

.carousel-dark .carousel-caption {
  color: #000;
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg)
      /* rtl:ignore */
    ;
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: 0.75s linear infinite spinner-border;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }

  50% {
    opacity: 1;
    transform: none;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  animation: 0.75s linear infinite spinner-grow;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

@media (prefers-reduced-motion: reduce) {

  .spinner-border,
  .spinner-grow {
    animation-duration: 1.5s;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1050;
  display: flex;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  transition: transform 0.3s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}

.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 1rem;
}

.offcanvas-header .btn-close {
  padding: 0.5rem 0.5rem;
  margin: -0.5rem -0.5rem -0.5rem auto;
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.offcanvas-body {
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto;
}

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(-100%);
}

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateX(100%);
}

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(-100%);
}

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  transform: translateY(100%);
}

.offcanvas.show {
  transform: none;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.link-primary {
  color: #cb0c9f;
}

.link-primary:hover,
.link-primary:focus {
  color: #a20a7f;
}

.link-secondary {
  color: #8392AB;
}

.link-secondary:hover,
.link-secondary:focus {
  color: #9ca8bc;
}

.link-success {
  color: #82d616;
}

.link-success:hover,
.link-success:focus {
  color: #9bde45;
}

.link-info {
  color: #17c1e8;
}

.link-info:hover,
.link-info:focus {
  color: #45cded;
}

.link-warning {
  color: #f53939;
}

.link-warning:hover,
.link-warning:focus {
  color: #f76161;
}

.link-danger {
  color: #ea0606;
}

.link-danger:hover,
.link-danger:focus {
  color: #bb0505;
}

.link-light {
  color: #e9ecef;
}

.link-light:hover,
.link-light:focus {
  color: #edf0f2;
}

.link-dark {
  color: #252f40;
}

.link-dark:hover,
.link-dark:focus {
  color: #1e2633;
}

.link-white {
  color: #fff;
}

.link-white:hover,
.link-white:focus {
  color: white;
}

.ratio {
  position: relative;
  width: 100%;
}

.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}

.ratio>* {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: calc(3 / 4 * 100%);
}

.ratio-16x9 {
  --bs-aspect-ratio: calc(9 / 16 * 100%);
}

.ratio-21x9 {
  --bs-aspect-ratio: calc(9 / 21 * 100%);
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.25rem 0.375rem -0.0625rem rgba(20, 20, 20, 0.12), 0 0.125rem 0.25rem -0.0625rem rgba(20, 20, 20, 0.07) !important;
}

.shadow-sm {
  box-shadow: 0 0.3125rem 0.625rem 0 rgba(0, 0, 0, 0.12) !important;
}

.shadow-lg {
  box-shadow: 0 8px 26px -4px rgba(20, 20, 20, 0.15), 0 8px 9px -5px rgba(20, 20, 20, 0.06) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.translate-middle {
  transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  transform: translateX(-50%) !important;
}

.translate-middle-y {
  transform: translateY(-50%) !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-end {
  border-right: 1px solid #dee2e6 !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-start {
  border-left: 1px solid #dee2e6 !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #cb0c9f !important;
}

.border-secondary {
  border-color: #8392AB !important;
}

.border-success {
  border-color: #82d616 !important;
}

.border-info {
  border-color: #17c1e8 !important;
}

.border-warning {
  border-color: #f53939 !important;
}

.border-danger {
  border-color: #ea0606 !important;
}

.border-light {
  border-color: #e9ecef !important;
}

.border-dark {
  border-color: #252f40 !important;
}

.border-white {
  border-color: #fff !important;
}

.border-0 {
  border-width: 0 !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-row {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.justify-content-evenly {
  justify-content: space-evenly !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch {
  align-self: stretch !important;
}

.order-first {
  order: -1 !important;
}

.order-0 {
  order: 0 !important;
}

.order-1 {
  order: 1 !important;
}

.order-2 {
  order: 2 !important;
}

.order-3 {
  order: 3 !important;
}

.order-4 {
  order: 4 !important;
}

.order-5 {
  order: 5 !important;
}

.order-last {
  order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}

.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}

.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}

.mx-n4 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}

.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}

.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}

.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}

.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}

.my-n4 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}

.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}

.mt-n1 {
  margin-top: -0.25rem !important;
}

.mt-n2 {
  margin-top: -0.5rem !important;
}

.mt-n3 {
  margin-top: -1rem !important;
}

.mt-n4 {
  margin-top: -1.5rem !important;
}

.mt-n5 {
  margin-top: -3rem !important;
}

.me-n1 {
  margin-right: -0.25rem !important;
}

.me-n2 {
  margin-right: -0.5rem !important;
}

.me-n3 {
  margin-right: -1rem !important;
}

.me-n4 {
  margin-right: -1.5rem !important;
}

.me-n5 {
  margin-right: -3rem !important;
}

.mb-n1 {
  margin-bottom: -0.25rem !important;
}

.mb-n2 {
  margin-bottom: -0.5rem !important;
}

.mb-n3 {
  margin-bottom: -1rem !important;
}

.mb-n4 {
  margin-bottom: -1.5rem !important;
}

.mb-n5 {
  margin-bottom: -3rem !important;
}

.ms-n1 {
  margin-left: -0.25rem !important;
}

.ms-n2 {
  margin-left: -0.5rem !important;
}

.ms-n3 {
  margin-left: -1rem !important;
}

.ms-n4 {
  margin-left: -1.5rem !important;
}

.ms-n5 {
  margin-left: -3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.425rem + 2.1vw) !important;
}

.fs-2 {
  font-size: calc(1.35rem + 1.2vw) !important;
}

.fs-3 {
  font-size: calc(1.3125rem + 0.75vw) !important;
}

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 1rem !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-bold {
  font-weight: 600 !important;
}

.fw-bolder {
  font-weight: 700 !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-sm {
  line-height: 1.25 !important;
}

.lh-base {
  line-height: 1.5 !important;
}

.lh-lg {
  line-height: 2 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  color: #cb0c9f !important;
}

.text-secondary {
  color: #8392AB !important;
}

.text-success {
  color: #82d616 !important;
}

.text-info {
  color: #17c1e8 !important;
}

.text-warning {
  color: #f53939 !important;
}

.text-danger {
  color: #ea0606 !important;
}

.text-light {
  color: #e9ecef !important;
}

.text-dark {
  color: #252f40 !important;
}

.text-white {
  color: #fff !important;
}

.text-body {
  color: #67748e !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-reset {
  color: inherit !important;
}

.bg-primary {
  background-color: #cb0c9f !important;
}

.bg-secondary {
  background-color: #8392AB !important;
}

.bg-success {
  background-color: #82d616 !important;
}

.bg-info {
  background-color: #17c1e8 !important;
}

.bg-warning {
  background-color: #f53939 !important;
}

.bg-danger {
  background-color: #ea0606 !important;
}

.bg-light {
  background-color: #e9ecef !important;
}

.bg-dark {
  background-color: #252f40 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-body {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.25rem !important;
}

.rounded-2 {
  border-radius: 0.25rem !important;
}

.rounded-3 {
  border-radius: 0.75rem !important;
}

.rounded-circle,
.avatar.rounded-circle img {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-end {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-start {
  border-bottom-left-radius: 0.25rem !important;
  border-top-left-radius: 0.25rem !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }

  .float-sm-end {
    float: right !important;
  }

  .float-sm-none {
    float: none !important;
  }

  .d-sm-inline {
    display: inline !important;
  }

  .d-sm-inline-block {
    display: inline-block !important;
  }

  .d-sm-block {
    display: block !important;
  }

  .d-sm-grid {
    display: grid !important;
  }

  .d-sm-table {
    display: table !important;
  }

  .d-sm-table-row {
    display: table-row !important;
  }

  .d-sm-table-cell {
    display: table-cell !important;
  }

  .d-sm-flex {
    display: flex !important;
  }

  .d-sm-inline-flex {
    display: inline-flex !important;
  }

  .d-sm-none {
    display: none !important;
  }

  .flex-sm-fill {
    flex: 1 1 auto !important;
  }

  .flex-sm-row {
    flex-direction: row !important;
  }

  .flex-sm-column {
    flex-direction: column !important;
  }

  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }

  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }

  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .gap-sm-0 {
    gap: 0 !important;
  }

  .gap-sm-1 {
    gap: 0.25rem !important;
  }

  .gap-sm-2 {
    gap: 0.5rem !important;
  }

  .gap-sm-3 {
    gap: 1rem !important;
  }

  .gap-sm-4 {
    gap: 1.5rem !important;
  }

  .gap-sm-5 {
    gap: 3rem !important;
  }

  .justify-content-sm-start {
    justify-content: flex-start !important;
  }

  .justify-content-sm-end {
    justify-content: flex-end !important;
  }

  .justify-content-sm-center {
    justify-content: center !important;
  }

  .justify-content-sm-between {
    justify-content: space-between !important;
  }

  .justify-content-sm-around {
    justify-content: space-around !important;
  }

  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }

  .align-items-sm-start {
    align-items: flex-start !important;
  }

  .align-items-sm-end {
    align-items: flex-end !important;
  }

  .align-items-sm-center {
    align-items: center !important;
  }

  .align-items-sm-baseline {
    align-items: baseline !important;
  }

  .align-items-sm-stretch {
    align-items: stretch !important;
  }

  .align-content-sm-start {
    align-content: flex-start !important;
  }

  .align-content-sm-end {
    align-content: flex-end !important;
  }

  .align-content-sm-center {
    align-content: center !important;
  }

  .align-content-sm-between {
    align-content: space-between !important;
  }

  .align-content-sm-around {
    align-content: space-around !important;
  }

  .align-content-sm-stretch {
    align-content: stretch !important;
  }

  .align-self-sm-auto {
    align-self: auto !important;
  }

  .align-self-sm-start {
    align-self: flex-start !important;
  }

  .align-self-sm-end {
    align-self: flex-end !important;
  }

  .align-self-sm-center {
    align-self: center !important;
  }

  .align-self-sm-baseline {
    align-self: baseline !important;
  }

  .align-self-sm-stretch {
    align-self: stretch !important;
  }

  .order-sm-first {
    order: -1 !important;
  }

  .order-sm-0 {
    order: 0 !important;
  }

  .order-sm-1 {
    order: 1 !important;
  }

  .order-sm-2 {
    order: 2 !important;
  }

  .order-sm-3 {
    order: 3 !important;
  }

  .order-sm-4 {
    order: 4 !important;
  }

  .order-sm-5 {
    order: 5 !important;
  }

  .order-sm-last {
    order: 6 !important;
  }

  .m-sm-0 {
    margin: 0 !important;
  }

  .m-sm-1 {
    margin: 0.25rem !important;
  }

  .m-sm-2 {
    margin: 0.5rem !important;
  }

  .m-sm-3 {
    margin: 1rem !important;
  }

  .m-sm-4 {
    margin: 1.5rem !important;
  }

  .m-sm-5 {
    margin: 3rem !important;
  }

  .m-sm-auto {
    margin: auto !important;
  }

  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-sm-0 {
    margin-top: 0 !important;
  }

  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }

  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }

  .mt-sm-3 {
    margin-top: 1rem !important;
  }

  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }

  .mt-sm-5 {
    margin-top: 3rem !important;
  }

  .mt-sm-auto {
    margin-top: auto !important;
  }

  .me-sm-0 {
    margin-right: 0 !important;
  }

  .me-sm-1 {
    margin-right: 0.25rem !important;
  }

  .me-sm-2 {
    margin-right: 0.5rem !important;
  }

  .me-sm-3 {
    margin-right: 1rem !important;
  }

  .me-sm-4 {
    margin-right: 1.5rem !important;
  }

  .me-sm-5 {
    margin-right: 3rem !important;
  }

  .me-sm-auto {
    margin-right: auto !important;
  }

  .mb-sm-0 {
    margin-bottom: 0 !important;
  }

  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }

  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }

  .mb-sm-auto {
    margin-bottom: auto !important;
  }

  .ms-sm-0 {
    margin-left: 0 !important;
  }

  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }

  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }

  .ms-sm-3 {
    margin-left: 1rem !important;
  }

  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }

  .ms-sm-5 {
    margin-left: 3rem !important;
  }

  .ms-sm-auto {
    margin-left: auto !important;
  }

  .m-sm-n1 {
    margin: -0.25rem !important;
  }

  .m-sm-n2 {
    margin: -0.5rem !important;
  }

  .m-sm-n3 {
    margin: -1rem !important;
  }

  .m-sm-n4 {
    margin: -1.5rem !important;
  }

  .m-sm-n5 {
    margin: -3rem !important;
  }

  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-sm-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-sm-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-sm-n3 {
    margin-top: -1rem !important;
  }

  .mt-sm-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-sm-n5 {
    margin-top: -3rem !important;
  }

  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }

  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }

  .me-sm-n3 {
    margin-right: -1rem !important;
  }

  .me-sm-n4 {
    margin-right: -1.5rem !important;
  }

  .me-sm-n5 {
    margin-right: -3rem !important;
  }

  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-sm-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-sm-n3 {
    margin-left: -1rem !important;
  }

  .ms-sm-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-sm-n5 {
    margin-left: -3rem !important;
  }

  .p-sm-0 {
    padding: 0 !important;
  }

  .p-sm-1 {
    padding: 0.25rem !important;
  }

  .p-sm-2 {
    padding: 0.5rem !important;
  }

  .p-sm-3 {
    padding: 1rem !important;
  }

  .p-sm-4 {
    padding: 1.5rem !important;
  }

  .p-sm-5 {
    padding: 3rem !important;
  }

  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-sm-0 {
    padding-top: 0 !important;
  }

  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }

  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }

  .pt-sm-3 {
    padding-top: 1rem !important;
  }

  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }

  .pt-sm-5 {
    padding-top: 3rem !important;
  }

  .pe-sm-0 {
    padding-right: 0 !important;
  }

  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }

  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }

  .pe-sm-3 {
    padding-right: 1rem !important;
  }

  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }

  .pe-sm-5 {
    padding-right: 3rem !important;
  }

  .pb-sm-0 {
    padding-bottom: 0 !important;
  }

  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }

  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }

  .ps-sm-0 {
    padding-left: 0 !important;
  }

  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }

  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }

  .ps-sm-3 {
    padding-left: 1rem !important;
  }

  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }

  .ps-sm-5 {
    padding-left: 3rem !important;
  }

  .text-sm-start {
    text-align: left !important;
  }

  .text-sm-end {
    text-align: right !important;
  }

  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }

  .float-md-end {
    float: right !important;
  }

  .float-md-none {
    float: none !important;
  }

  .d-md-inline {
    display: inline !important;
  }

  .d-md-inline-block {
    display: inline-block !important;
  }

  .d-md-block {
    display: block !important;
  }

  .d-md-grid {
    display: grid !important;
  }

  .d-md-table {
    display: table !important;
  }

  .d-md-table-row {
    display: table-row !important;
  }

  .d-md-table-cell {
    display: table-cell !important;
  }

  .d-md-flex {
    display: flex !important;
  }

  .d-md-inline-flex {
    display: inline-flex !important;
  }

  .d-md-none {
    display: none !important;
  }

  .flex-md-fill {
    flex: 1 1 auto !important;
  }

  .flex-md-row {
    flex-direction: row !important;
  }

  .flex-md-column {
    flex-direction: column !important;
  }

  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }

  .flex-md-wrap {
    flex-wrap: wrap !important;
  }

  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .gap-md-0 {
    gap: 0 !important;
  }

  .gap-md-1 {
    gap: 0.25rem !important;
  }

  .gap-md-2 {
    gap: 0.5rem !important;
  }

  .gap-md-3 {
    gap: 1rem !important;
  }

  .gap-md-4 {
    gap: 1.5rem !important;
  }

  .gap-md-5 {
    gap: 3rem !important;
  }

  .justify-content-md-start {
    justify-content: flex-start !important;
  }

  .justify-content-md-end {
    justify-content: flex-end !important;
  }

  .justify-content-md-center {
    justify-content: center !important;
  }

  .justify-content-md-between {
    justify-content: space-between !important;
  }

  .justify-content-md-around {
    justify-content: space-around !important;
  }

  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }

  .align-items-md-start {
    align-items: flex-start !important;
  }

  .align-items-md-end {
    align-items: flex-end !important;
  }

  .align-items-md-center {
    align-items: center !important;
  }

  .align-items-md-baseline {
    align-items: baseline !important;
  }

  .align-items-md-stretch {
    align-items: stretch !important;
  }

  .align-content-md-start {
    align-content: flex-start !important;
  }

  .align-content-md-end {
    align-content: flex-end !important;
  }

  .align-content-md-center {
    align-content: center !important;
  }

  .align-content-md-between {
    align-content: space-between !important;
  }

  .align-content-md-around {
    align-content: space-around !important;
  }

  .align-content-md-stretch {
    align-content: stretch !important;
  }

  .align-self-md-auto {
    align-self: auto !important;
  }

  .align-self-md-start {
    align-self: flex-start !important;
  }

  .align-self-md-end {
    align-self: flex-end !important;
  }

  .align-self-md-center {
    align-self: center !important;
  }

  .align-self-md-baseline {
    align-self: baseline !important;
  }

  .align-self-md-stretch {
    align-self: stretch !important;
  }

  .order-md-first {
    order: -1 !important;
  }

  .order-md-0 {
    order: 0 !important;
  }

  .order-md-1 {
    order: 1 !important;
  }

  .order-md-2 {
    order: 2 !important;
  }

  .order-md-3 {
    order: 3 !important;
  }

  .order-md-4 {
    order: 4 !important;
  }

  .order-md-5 {
    order: 5 !important;
  }

  .order-md-last {
    order: 6 !important;
  }

  .m-md-0 {
    margin: 0 !important;
  }

  .m-md-1 {
    margin: 0.25rem !important;
  }

  .m-md-2 {
    margin: 0.5rem !important;
  }

  .m-md-3 {
    margin: 1rem !important;
  }

  .m-md-4 {
    margin: 1.5rem !important;
  }

  .m-md-5 {
    margin: 3rem !important;
  }

  .m-md-auto {
    margin: auto !important;
  }

  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-md-0 {
    margin-top: 0 !important;
  }

  .mt-md-1 {
    margin-top: 0.25rem !important;
  }

  .mt-md-2 {
    margin-top: 0.5rem !important;
  }

  .mt-md-3 {
    margin-top: 1rem !important;
  }

  .mt-md-4 {
    margin-top: 1.5rem !important;
  }

  .mt-md-5 {
    margin-top: 3rem !important;
  }

  .mt-md-auto {
    margin-top: auto !important;
  }

  .me-md-0 {
    margin-right: 0 !important;
  }

  .me-md-1 {
    margin-right: 0.25rem !important;
  }

  .me-md-2 {
    margin-right: 0.5rem !important;
  }

  .me-md-3 {
    margin-right: 1rem !important;
  }

  .me-md-4 {
    margin-right: 1.5rem !important;
  }

  .me-md-5 {
    margin-right: 3rem !important;
  }

  .me-md-auto {
    margin-right: auto !important;
  }

  .mb-md-0 {
    margin-bottom: 0 !important;
  }

  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-md-3 {
    margin-bottom: 1rem !important;
  }

  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-md-5 {
    margin-bottom: 3rem !important;
  }

  .mb-md-auto {
    margin-bottom: auto !important;
  }

  .ms-md-0 {
    margin-left: 0 !important;
  }

  .ms-md-1 {
    margin-left: 0.25rem !important;
  }

  .ms-md-2 {
    margin-left: 0.5rem !important;
  }

  .ms-md-3 {
    margin-left: 1rem !important;
  }

  .ms-md-4 {
    margin-left: 1.5rem !important;
  }

  .ms-md-5 {
    margin-left: 3rem !important;
  }

  .ms-md-auto {
    margin-left: auto !important;
  }

  .m-md-n1 {
    margin: -0.25rem !important;
  }

  .m-md-n2 {
    margin: -0.5rem !important;
  }

  .m-md-n3 {
    margin: -1rem !important;
  }

  .m-md-n4 {
    margin: -1.5rem !important;
  }

  .m-md-n5 {
    margin: -3rem !important;
  }

  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-md-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-md-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-md-n3 {
    margin-top: -1rem !important;
  }

  .mt-md-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-md-n5 {
    margin-top: -3rem !important;
  }

  .me-md-n1 {
    margin-right: -0.25rem !important;
  }

  .me-md-n2 {
    margin-right: -0.5rem !important;
  }

  .me-md-n3 {
    margin-right: -1rem !important;
  }

  .me-md-n4 {
    margin-right: -1.5rem !important;
  }

  .me-md-n5 {
    margin-right: -3rem !important;
  }

  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-md-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-md-n3 {
    margin-left: -1rem !important;
  }

  .ms-md-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-md-n5 {
    margin-left: -3rem !important;
  }

  .p-md-0 {
    padding: 0 !important;
  }

  .p-md-1 {
    padding: 0.25rem !important;
  }

  .p-md-2 {
    padding: 0.5rem !important;
  }

  .p-md-3 {
    padding: 1rem !important;
  }

  .p-md-4 {
    padding: 1.5rem !important;
  }

  .p-md-5 {
    padding: 3rem !important;
  }

  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-md-0 {
    padding-top: 0 !important;
  }

  .pt-md-1 {
    padding-top: 0.25rem !important;
  }

  .pt-md-2 {
    padding-top: 0.5rem !important;
  }

  .pt-md-3 {
    padding-top: 1rem !important;
  }

  .pt-md-4 {
    padding-top: 1.5rem !important;
  }

  .pt-md-5 {
    padding-top: 3rem !important;
  }

  .pe-md-0 {
    padding-right: 0 !important;
  }

  .pe-md-1 {
    padding-right: 0.25rem !important;
  }

  .pe-md-2 {
    padding-right: 0.5rem !important;
  }

  .pe-md-3 {
    padding-right: 1rem !important;
  }

  .pe-md-4 {
    padding-right: 1.5rem !important;
  }

  .pe-md-5 {
    padding-right: 3rem !important;
  }

  .pb-md-0 {
    padding-bottom: 0 !important;
  }

  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-md-3 {
    padding-bottom: 1rem !important;
  }

  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-md-5 {
    padding-bottom: 3rem !important;
  }

  .ps-md-0 {
    padding-left: 0 !important;
  }

  .ps-md-1 {
    padding-left: 0.25rem !important;
  }

  .ps-md-2 {
    padding-left: 0.5rem !important;
  }

  .ps-md-3 {
    padding-left: 1rem !important;
  }

  .ps-md-4 {
    padding-left: 1.5rem !important;
  }

  .ps-md-5 {
    padding-left: 3rem !important;
  }

  .text-md-start {
    text-align: left !important;
  }

  .text-md-end {
    text-align: right !important;
  }

  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }

  .float-lg-end {
    float: right !important;
  }

  .float-lg-none {
    float: none !important;
  }

  .d-lg-inline {
    display: inline !important;
  }

  .d-lg-inline-block {
    display: inline-block !important;
  }

  .d-lg-block {
    display: block !important;
  }

  .d-lg-grid {
    display: grid !important;
  }

  .d-lg-table {
    display: table !important;
  }

  .d-lg-table-row {
    display: table-row !important;
  }

  .d-lg-table-cell {
    display: table-cell !important;
  }

  .d-lg-flex {
    display: flex !important;
  }

  .d-lg-inline-flex {
    display: inline-flex !important;
  }

  .d-lg-none {
    display: none !important;
  }

  .flex-lg-fill {
    flex: 1 1 auto !important;
  }

  .flex-lg-row {
    flex-direction: row !important;
  }

  .flex-lg-column {
    flex-direction: column !important;
  }

  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }

  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }

  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .gap-lg-0 {
    gap: 0 !important;
  }

  .gap-lg-1 {
    gap: 0.25rem !important;
  }

  .gap-lg-2 {
    gap: 0.5rem !important;
  }

  .gap-lg-3 {
    gap: 1rem !important;
  }

  .gap-lg-4 {
    gap: 1.5rem !important;
  }

  .gap-lg-5 {
    gap: 3rem !important;
  }

  .justify-content-lg-start {
    justify-content: flex-start !important;
  }

  .justify-content-lg-end {
    justify-content: flex-end !important;
  }

  .justify-content-lg-center {
    justify-content: center !important;
  }

  .justify-content-lg-between {
    justify-content: space-between !important;
  }

  .justify-content-lg-around {
    justify-content: space-around !important;
  }

  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }

  .align-items-lg-start {
    align-items: flex-start !important;
  }

  .align-items-lg-end {
    align-items: flex-end !important;
  }

  .align-items-lg-center {
    align-items: center !important;
  }

  .align-items-lg-baseline {
    align-items: baseline !important;
  }

  .align-items-lg-stretch {
    align-items: stretch !important;
  }

  .align-content-lg-start {
    align-content: flex-start !important;
  }

  .align-content-lg-end {
    align-content: flex-end !important;
  }

  .align-content-lg-center {
    align-content: center !important;
  }

  .align-content-lg-between {
    align-content: space-between !important;
  }

  .align-content-lg-around {
    align-content: space-around !important;
  }

  .align-content-lg-stretch {
    align-content: stretch !important;
  }

  .align-self-lg-auto {
    align-self: auto !important;
  }

  .align-self-lg-start {
    align-self: flex-start !important;
  }

  .align-self-lg-end {
    align-self: flex-end !important;
  }

  .align-self-lg-center {
    align-self: center !important;
  }

  .align-self-lg-baseline {
    align-self: baseline !important;
  }

  .align-self-lg-stretch {
    align-self: stretch !important;
  }

  .order-lg-first {
    order: -1 !important;
  }

  .order-lg-0 {
    order: 0 !important;
  }

  .order-lg-1 {
    order: 1 !important;
  }

  .order-lg-2 {
    order: 2 !important;
  }

  .order-lg-3 {
    order: 3 !important;
  }

  .order-lg-4 {
    order: 4 !important;
  }

  .order-lg-5 {
    order: 5 !important;
  }

  .order-lg-last {
    order: 6 !important;
  }

  .m-lg-0 {
    margin: 0 !important;
  }

  .m-lg-1 {
    margin: 0.25rem !important;
  }

  .m-lg-2 {
    margin: 0.5rem !important;
  }

  .m-lg-3 {
    margin: 1rem !important;
  }

  .m-lg-4 {
    margin: 1.5rem !important;
  }

  .m-lg-5 {
    margin: 3rem !important;
  }

  .m-lg-auto {
    margin: auto !important;
  }

  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-lg-0 {
    margin-top: 0 !important;
  }

  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }

  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }

  .mt-lg-3 {
    margin-top: 1rem !important;
  }

  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }

  .mt-lg-5 {
    margin-top: 3rem !important;
  }

  .mt-lg-auto {
    margin-top: auto !important;
  }

  .me-lg-0 {
    margin-right: 0 !important;
  }

  .me-lg-1 {
    margin-right: 0.25rem !important;
  }

  .me-lg-2 {
    margin-right: 0.5rem !important;
  }

  .me-lg-3 {
    margin-right: 1rem !important;
  }

  .me-lg-4 {
    margin-right: 1.5rem !important;
  }

  .me-lg-5 {
    margin-right: 3rem !important;
  }

  .me-lg-auto {
    margin-right: auto !important;
  }

  .mb-lg-0 {
    margin-bottom: 0 !important;
  }

  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }

  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }

  .mb-lg-auto {
    margin-bottom: auto !important;
  }

  .ms-lg-0 {
    margin-left: 0 !important;
  }

  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }

  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }

  .ms-lg-3 {
    margin-left: 1rem !important;
  }

  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }

  .ms-lg-5 {
    margin-left: 3rem !important;
  }

  .ms-lg-auto {
    margin-left: auto !important;
  }

  .m-lg-n1 {
    margin: -0.25rem !important;
  }

  .m-lg-n2 {
    margin: -0.5rem !important;
  }

  .m-lg-n3 {
    margin: -1rem !important;
  }

  .m-lg-n4 {
    margin: -1.5rem !important;
  }

  .m-lg-n5 {
    margin: -3rem !important;
  }

  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-lg-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-lg-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-lg-n3 {
    margin-top: -1rem !important;
  }

  .mt-lg-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-lg-n5 {
    margin-top: -3rem !important;
  }

  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }

  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }

  .me-lg-n3 {
    margin-right: -1rem !important;
  }

  .me-lg-n4 {
    margin-right: -1.5rem !important;
  }

  .me-lg-n5 {
    margin-right: -3rem !important;
  }

  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-lg-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-lg-n3 {
    margin-left: -1rem !important;
  }

  .ms-lg-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-lg-n5 {
    margin-left: -3rem !important;
  }

  .p-lg-0 {
    padding: 0 !important;
  }

  .p-lg-1 {
    padding: 0.25rem !important;
  }

  .p-lg-2 {
    padding: 0.5rem !important;
  }

  .p-lg-3 {
    padding: 1rem !important;
  }

  .p-lg-4 {
    padding: 1.5rem !important;
  }

  .p-lg-5 {
    padding: 3rem !important;
  }

  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-lg-0 {
    padding-top: 0 !important;
  }

  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }

  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }

  .pt-lg-3 {
    padding-top: 1rem !important;
  }

  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }

  .pt-lg-5 {
    padding-top: 3rem !important;
  }

  .pe-lg-0 {
    padding-right: 0 !important;
  }

  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }

  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }

  .pe-lg-3 {
    padding-right: 1rem !important;
  }

  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }

  .pe-lg-5 {
    padding-right: 3rem !important;
  }

  .pb-lg-0 {
    padding-bottom: 0 !important;
  }

  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }

  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }

  .ps-lg-0 {
    padding-left: 0 !important;
  }

  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }

  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }

  .ps-lg-3 {
    padding-left: 1rem !important;
  }

  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }

  .ps-lg-5 {
    padding-left: 3rem !important;
  }

  .text-lg-start {
    text-align: left !important;
  }

  .text-lg-end {
    text-align: right !important;
  }

  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }

  .float-xl-end {
    float: right !important;
  }

  .float-xl-none {
    float: none !important;
  }

  .d-xl-inline {
    display: inline !important;
  }

  .d-xl-inline-block {
    display: inline-block !important;
  }

  .d-xl-block {
    display: block !important;
  }

  .d-xl-grid {
    display: grid !important;
  }

  .d-xl-table {
    display: table !important;
  }

  .d-xl-table-row {
    display: table-row !important;
  }

  .d-xl-table-cell {
    display: table-cell !important;
  }

  .d-xl-flex {
    display: flex !important;
  }

  .d-xl-inline-flex {
    display: inline-flex !important;
  }

  .d-xl-none {
    display: none !important;
  }

  .flex-xl-fill {
    flex: 1 1 auto !important;
  }

  .flex-xl-row {
    flex-direction: row !important;
  }

  .flex-xl-column {
    flex-direction: column !important;
  }

  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }

  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }

  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .gap-xl-0 {
    gap: 0 !important;
  }

  .gap-xl-1 {
    gap: 0.25rem !important;
  }

  .gap-xl-2 {
    gap: 0.5rem !important;
  }

  .gap-xl-3 {
    gap: 1rem !important;
  }

  .gap-xl-4 {
    gap: 1.5rem !important;
  }

  .gap-xl-5 {
    gap: 3rem !important;
  }

  .justify-content-xl-start {
    justify-content: flex-start !important;
  }

  .justify-content-xl-end {
    justify-content: flex-end !important;
  }

  .justify-content-xl-center {
    justify-content: center !important;
  }

  .justify-content-xl-between {
    justify-content: space-between !important;
  }

  .justify-content-xl-around {
    justify-content: space-around !important;
  }

  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }

  .align-items-xl-start {
    align-items: flex-start !important;
  }

  .align-items-xl-end {
    align-items: flex-end !important;
  }

  .align-items-xl-center {
    align-items: center !important;
  }

  .align-items-xl-baseline {
    align-items: baseline !important;
  }

  .align-items-xl-stretch {
    align-items: stretch !important;
  }

  .align-content-xl-start {
    align-content: flex-start !important;
  }

  .align-content-xl-end {
    align-content: flex-end !important;
  }

  .align-content-xl-center {
    align-content: center !important;
  }

  .align-content-xl-between {
    align-content: space-between !important;
  }

  .align-content-xl-around {
    align-content: space-around !important;
  }

  .align-content-xl-stretch {
    align-content: stretch !important;
  }

  .align-self-xl-auto {
    align-self: auto !important;
  }

  .align-self-xl-start {
    align-self: flex-start !important;
  }

  .align-self-xl-end {
    align-self: flex-end !important;
  }

  .align-self-xl-center {
    align-self: center !important;
  }

  .align-self-xl-baseline {
    align-self: baseline !important;
  }

  .align-self-xl-stretch {
    align-self: stretch !important;
  }

  .order-xl-first {
    order: -1 !important;
  }

  .order-xl-0 {
    order: 0 !important;
  }

  .order-xl-1 {
    order: 1 !important;
  }

  .order-xl-2 {
    order: 2 !important;
  }

  .order-xl-3 {
    order: 3 !important;
  }

  .order-xl-4 {
    order: 4 !important;
  }

  .order-xl-5 {
    order: 5 !important;
  }

  .order-xl-last {
    order: 6 !important;
  }

  .m-xl-0 {
    margin: 0 !important;
  }

  .m-xl-1 {
    margin: 0.25rem !important;
  }

  .m-xl-2 {
    margin: 0.5rem !important;
  }

  .m-xl-3 {
    margin: 1rem !important;
  }

  .m-xl-4 {
    margin: 1.5rem !important;
  }

  .m-xl-5 {
    margin: 3rem !important;
  }

  .m-xl-auto {
    margin: auto !important;
  }

  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-xl-0 {
    margin-top: 0 !important;
  }

  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }

  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }

  .mt-xl-3 {
    margin-top: 1rem !important;
  }

  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }

  .mt-xl-5 {
    margin-top: 3rem !important;
  }

  .mt-xl-auto {
    margin-top: auto !important;
  }

  .me-xl-0 {
    margin-right: 0 !important;
  }

  .me-xl-1 {
    margin-right: 0.25rem !important;
  }

  .me-xl-2 {
    margin-right: 0.5rem !important;
  }

  .me-xl-3 {
    margin-right: 1rem !important;
  }

  .me-xl-4 {
    margin-right: 1.5rem !important;
  }

  .me-xl-5 {
    margin-right: 3rem !important;
  }

  .me-xl-auto {
    margin-right: auto !important;
  }

  .mb-xl-0 {
    margin-bottom: 0 !important;
  }

  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }

  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }

  .mb-xl-auto {
    margin-bottom: auto !important;
  }

  .ms-xl-0 {
    margin-left: 0 !important;
  }

  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }

  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }

  .ms-xl-3 {
    margin-left: 1rem !important;
  }

  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }

  .ms-xl-5 {
    margin-left: 3rem !important;
  }

  .ms-xl-auto {
    margin-left: auto !important;
  }

  .m-xl-n1 {
    margin: -0.25rem !important;
  }

  .m-xl-n2 {
    margin: -0.5rem !important;
  }

  .m-xl-n3 {
    margin: -1rem !important;
  }

  .m-xl-n4 {
    margin: -1.5rem !important;
  }

  .m-xl-n5 {
    margin: -3rem !important;
  }

  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-xl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-xl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-xl-n3 {
    margin-top: -1rem !important;
  }

  .mt-xl-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-xl-n5 {
    margin-top: -3rem !important;
  }

  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }

  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }

  .me-xl-n3 {
    margin-right: -1rem !important;
  }

  .me-xl-n4 {
    margin-right: -1.5rem !important;
  }

  .me-xl-n5 {
    margin-right: -3rem !important;
  }

  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-xl-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-xl-n3 {
    margin-left: -1rem !important;
  }

  .ms-xl-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-xl-n5 {
    margin-left: -3rem !important;
  }

  .p-xl-0 {
    padding: 0 !important;
  }

  .p-xl-1 {
    padding: 0.25rem !important;
  }

  .p-xl-2 {
    padding: 0.5rem !important;
  }

  .p-xl-3 {
    padding: 1rem !important;
  }

  .p-xl-4 {
    padding: 1.5rem !important;
  }

  .p-xl-5 {
    padding: 3rem !important;
  }

  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-xl-0 {
    padding-top: 0 !important;
  }

  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }

  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }

  .pt-xl-3 {
    padding-top: 1rem !important;
  }

  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }

  .pt-xl-5 {
    padding-top: 3rem !important;
  }

  .pe-xl-0 {
    padding-right: 0 !important;
  }

  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }

  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }

  .pe-xl-3 {
    padding-right: 1rem !important;
  }

  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }

  .pe-xl-5 {
    padding-right: 3rem !important;
  }

  .pb-xl-0 {
    padding-bottom: 0 !important;
  }

  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }

  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }

  .ps-xl-0 {
    padding-left: 0 !important;
  }

  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }

  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }

  .ps-xl-3 {
    padding-left: 1rem !important;
  }

  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }

  .ps-xl-5 {
    padding-left: 3rem !important;
  }

  .text-xl-start {
    text-align: left !important;
  }

  .text-xl-end {
    text-align: right !important;
  }

  .text-xl-center {
    text-align: center !important;
  }
}

@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }

  .float-xxl-end {
    float: right !important;
  }

  .float-xxl-none {
    float: none !important;
  }

  .d-xxl-inline {
    display: inline !important;
  }

  .d-xxl-inline-block {
    display: inline-block !important;
  }

  .d-xxl-block {
    display: block !important;
  }

  .d-xxl-grid {
    display: grid !important;
  }

  .d-xxl-table {
    display: table !important;
  }

  .d-xxl-table-row {
    display: table-row !important;
  }

  .d-xxl-table-cell {
    display: table-cell !important;
  }

  .d-xxl-flex {
    display: flex !important;
  }

  .d-xxl-inline-flex {
    display: inline-flex !important;
  }

  .d-xxl-none {
    display: none !important;
  }

  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }

  .flex-xxl-row {
    flex-direction: row !important;
  }

  .flex-xxl-column {
    flex-direction: column !important;
  }

  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }

  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }

  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }

  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }

  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }

  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }

  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }

  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }

  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }

  .gap-xxl-0 {
    gap: 0 !important;
  }

  .gap-xxl-1 {
    gap: 0.25rem !important;
  }

  .gap-xxl-2 {
    gap: 0.5rem !important;
  }

  .gap-xxl-3 {
    gap: 1rem !important;
  }

  .gap-xxl-4 {
    gap: 1.5rem !important;
  }

  .gap-xxl-5 {
    gap: 3rem !important;
  }

  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }

  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }

  .justify-content-xxl-center {
    justify-content: center !important;
  }

  .justify-content-xxl-between {
    justify-content: space-between !important;
  }

  .justify-content-xxl-around {
    justify-content: space-around !important;
  }

  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }

  .align-items-xxl-start {
    align-items: flex-start !important;
  }

  .align-items-xxl-end {
    align-items: flex-end !important;
  }

  .align-items-xxl-center {
    align-items: center !important;
  }

  .align-items-xxl-baseline {
    align-items: baseline !important;
  }

  .align-items-xxl-stretch {
    align-items: stretch !important;
  }

  .align-content-xxl-start {
    align-content: flex-start !important;
  }

  .align-content-xxl-end {
    align-content: flex-end !important;
  }

  .align-content-xxl-center {
    align-content: center !important;
  }

  .align-content-xxl-between {
    align-content: space-between !important;
  }

  .align-content-xxl-around {
    align-content: space-around !important;
  }

  .align-content-xxl-stretch {
    align-content: stretch !important;
  }

  .align-self-xxl-auto {
    align-self: auto !important;
  }

  .align-self-xxl-start {
    align-self: flex-start !important;
  }

  .align-self-xxl-end {
    align-self: flex-end !important;
  }

  .align-self-xxl-center {
    align-self: center !important;
  }

  .align-self-xxl-baseline {
    align-self: baseline !important;
  }

  .align-self-xxl-stretch {
    align-self: stretch !important;
  }

  .order-xxl-first {
    order: -1 !important;
  }

  .order-xxl-0 {
    order: 0 !important;
  }

  .order-xxl-1 {
    order: 1 !important;
  }

  .order-xxl-2 {
    order: 2 !important;
  }

  .order-xxl-3 {
    order: 3 !important;
  }

  .order-xxl-4 {
    order: 4 !important;
  }

  .order-xxl-5 {
    order: 5 !important;
  }

  .order-xxl-last {
    order: 6 !important;
  }

  .m-xxl-0 {
    margin: 0 !important;
  }

  .m-xxl-1 {
    margin: 0.25rem !important;
  }

  .m-xxl-2 {
    margin: 0.5rem !important;
  }

  .m-xxl-3 {
    margin: 1rem !important;
  }

  .m-xxl-4 {
    margin: 1.5rem !important;
  }

  .m-xxl-5 {
    margin: 3rem !important;
  }

  .m-xxl-auto {
    margin: auto !important;
  }

  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }

  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }

  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }

  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }

  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }

  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }

  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }

  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }

  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }

  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }

  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }

  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }

  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }

  .mt-xxl-0 {
    margin-top: 0 !important;
  }

  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }

  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }

  .mt-xxl-3 {
    margin-top: 1rem !important;
  }

  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }

  .mt-xxl-5 {
    margin-top: 3rem !important;
  }

  .mt-xxl-auto {
    margin-top: auto !important;
  }

  .me-xxl-0 {
    margin-right: 0 !important;
  }

  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }

  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }

  .me-xxl-3 {
    margin-right: 1rem !important;
  }

  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }

  .me-xxl-5 {
    margin-right: 3rem !important;
  }

  .me-xxl-auto {
    margin-right: auto !important;
  }

  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }

  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }

  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }

  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }

  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }

  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }

  .mb-xxl-auto {
    margin-bottom: auto !important;
  }

  .ms-xxl-0 {
    margin-left: 0 !important;
  }

  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }

  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }

  .ms-xxl-3 {
    margin-left: 1rem !important;
  }

  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }

  .ms-xxl-5 {
    margin-left: 3rem !important;
  }

  .ms-xxl-auto {
    margin-left: auto !important;
  }

  .m-xxl-n1 {
    margin: -0.25rem !important;
  }

  .m-xxl-n2 {
    margin: -0.5rem !important;
  }

  .m-xxl-n3 {
    margin: -1rem !important;
  }

  .m-xxl-n4 {
    margin: -1.5rem !important;
  }

  .m-xxl-n5 {
    margin: -3rem !important;
  }

  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }

  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }

  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }

  .mx-xxl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }

  .mx-xxl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }

  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }

  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }

  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }

  .my-xxl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }

  .my-xxl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }

  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }

  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }

  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }

  .mt-xxl-n4 {
    margin-top: -1.5rem !important;
  }

  .mt-xxl-n5 {
    margin-top: -3rem !important;
  }

  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }

  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }

  .me-xxl-n3 {
    margin-right: -1rem !important;
  }

  .me-xxl-n4 {
    margin-right: -1.5rem !important;
  }

  .me-xxl-n5 {
    margin-right: -3rem !important;
  }

  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }

  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }

  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }

  .mb-xxl-n4 {
    margin-bottom: -1.5rem !important;
  }

  .mb-xxl-n5 {
    margin-bottom: -3rem !important;
  }

  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }

  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }

  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }

  .ms-xxl-n4 {
    margin-left: -1.5rem !important;
  }

  .ms-xxl-n5 {
    margin-left: -3rem !important;
  }

  .p-xxl-0 {
    padding: 0 !important;
  }

  .p-xxl-1 {
    padding: 0.25rem !important;
  }

  .p-xxl-2 {
    padding: 0.5rem !important;
  }

  .p-xxl-3 {
    padding: 1rem !important;
  }

  .p-xxl-4 {
    padding: 1.5rem !important;
  }

  .p-xxl-5 {
    padding: 3rem !important;
  }

  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }

  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }

  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }

  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }

  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }

  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }

  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }

  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }

  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }

  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }

  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }

  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }

  .pt-xxl-0 {
    padding-top: 0 !important;
  }

  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }

  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }

  .pt-xxl-3 {
    padding-top: 1rem !important;
  }

  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }

  .pt-xxl-5 {
    padding-top: 3rem !important;
  }

  .pe-xxl-0 {
    padding-right: 0 !important;
  }

  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }

  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }

  .pe-xxl-3 {
    padding-right: 1rem !important;
  }

  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }

  .pe-xxl-5 {
    padding-right: 3rem !important;
  }

  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }

  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }

  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }

  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }

  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }

  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }

  .ps-xxl-0 {
    padding-left: 0 !important;
  }

  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }

  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }

  .ps-xxl-3 {
    padding-left: 1rem !important;
  }

  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }

  .ps-xxl-5 {
    padding-left: 3rem !important;
  }

  .text-xxl-start {
    text-align: left !important;
  }

  .text-xxl-end {
    text-align: right !important;
  }

  .text-xxl-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .fs-1 {
    font-size: 3rem !important;
  }

  .fs-2 {
    font-size: 2.25rem !important;
  }

  .fs-3 {
    font-size: 1.875rem !important;
  }

  .fs-4 {
    font-size: 1.5rem !important;
  }
}

@media print {
  .d-print-inline {
    display: inline !important;
  }

  .d-print-inline-block {
    display: inline-block !important;
  }

  .d-print-block {
    display: block !important;
  }

  .d-print-grid {
    display: grid !important;
  }

  .d-print-table {
    display: table !important;
  }

  .d-print-table-row {
    display: table-row !important;
  }

  .d-print-table-cell {
    display: table-cell !important;
  }

  .d-print-flex {
    display: flex !important;
  }

  .d-print-inline-flex {
    display: inline-flex !important;
  }

  .d-print-none {
    display: none !important;
  }
}

/*!

=========================================================
* Soft UI Dashboard - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (site.license)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/
.alert-primary {
  background-image: linear-gradient(310deg, #7928CA 0%, #d6006c 100%);
}

.alert-secondary {
  background-image: linear-gradient(310deg, #627594 0%, #8ca1cb 100%);
}

.alert-success {
  background-image: linear-gradient(310deg, #17ad37 0%, #84dc14 100%);
}

.alert-info {
  background-image: linear-gradient(310deg, #2152ff 0%, #02c6f3 100%);
}

.alert-warning {
  background-image: linear-gradient(310deg, #f53939 0%, #fac60b 100%);
}

.alert-danger {
  background-image: linear-gradient(310deg, #ea0606 0%, #ff3d59 100%);
}

.alert-light {
  background-image: linear-gradient(310deg, #CED4DA 0%, #d1dae6 100%);
}

.alert-dark {
  background-image: linear-gradient(310deg, #141727 0%, #2c3154 100%);
}

.btn-close:focus {
  box-shadow: none;
}

.avatar {
  color: #fff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  border-radius: 0.75rem;
  height: 48px;
  width: 48px;
  transition: all .2s ease-in-out;
}

.avatar img {
  width: 100%;
}

.avatar+.avatar-content {
  display: inline-block;
  margin-left: 0.75rem;
}

.avatar.avatar-raised {
  margin-top: -24px;
}

.avatar.avatar-scale-up:hover {
  transform: scale(1.2);
}

.active .avatar.avatar-scale-up {
  transform: scale(1.2);
}

.avatar-xxl {
  width: 110px !important;
  height: 110px !important;
}

.avatar-xxl.avatar-raised {
  margin-top: -55px;
}

.avatar-xl {
  width: 74px !important;
  height: 74px !important;
}

.avatar-xl.avatar-raised {
  margin-top: -37px;
}

.avatar-lg {
  width: 58px !important;
  height: 58px !important;
  font-size: 0.875rem;
}

.avatar-lg.avatar-raised {
  margin-top: -29px;
}

.avatar-sm {
  width: 36px !important;
  height: 36px !important;
  font-size: 0.875rem;
}

.avatar-sm.avatar-raised {
  margin-top: -18px;
}

.avatar-xs {
  width: 24px !important;
  height: 24px !important;
  font-size: 0.75rem;
}

.avatar-xs.avatar-raised {
  margin-top: -12px;
}

.avatar-group .avatar {
  position: relative;
  z-index: 2;
  border: 2px solid #fff;
}

.avatar-group .avatar:hover {
  z-index: 3;
}

.avatar-group .avatar+.avatar {
  margin-left: -1rem;
}

.badge.bg-primary {
  background: #cb0c9f;
}

.badge.bg-secondary {
  background: #8392AB;
}

.badge.bg-success {
  background: #82d616;
}

.badge.bg-info {
  background: #17c1e8;
}

.badge.bg-warning {
  background: #f53939;
}

.badge.bg-danger {
  background: #ea0606;
}

.badge.bg-light {
  background: #e9ecef;
}

.badge.bg-dark {
  background: #252f40;
}

.badge.bg-white {
  background: #fff;
}

.badge {
  text-transform: uppercase;
}

.btn {
  margin-bottom: 1rem;
  letter-spacing: -0.025rem;
  text-transform: uppercase;
  box-shadow: 0 4px 7px -1px rgba(0, 0, 0, 0.11), 0 2px 4px -1px rgba(0, 0, 0, 0.07);
  background-size: 150%;
  background-position-x: 25%;
}

.btn:not([class*="btn-outline-"]) {
  border: 0;
}

.btn:active,
.btn:active:focus,
.btn:active:hover {
  box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.09), 0 2px 3px -1px rgba(0, 0, 0, 0.07);
  transform: scale(1);
  opacity: 0.85;
}

.btn:hover:not(.btn-icon-only) {
  box-shadow: 0 3px 5px -1px rgba(0, 0, 0, 0.09), 0 2px 3px -1px rgba(0, 0, 0, 0.07);
  transform: scale(1.02);
}

.btn.bg-white:hover {
  color: #67748e;
}

.btn.btn-link {
  box-shadow: none;
  font-weight: 700;
}

.btn.btn-link:hover,
.btn.btn-link:focus {
  box-shadow: none;
}

.btn.btn-round {
  border-radius: 1.875rem;
}

.btn.btn-icon-only {
  width: 2.375rem;
  height: 2.375rem;
  padding: 0.7rem 0.7rem;
}

.btn.btn-sm.btn-icon-only,
.btn-group-sm>.btn.btn-icon-only {
  width: 1.5875rem;
  height: 1.5875rem;
  padding: 0.3rem 0.3rem;
}

.btn.btn-sm i,
.btn-group-sm>.btn i {
  font-size: 0.5rem;
}

.btn.btn-lg.btn-icon-only,
.btn-group-lg>.btn.btn-icon-only {
  width: 3.25rem;
  height: 3.25rem;
  padding: 1rem 1rem;
}

.btn.btn-lg i,
.btn-group-lg>.btn i {
  font-size: 1.2rem;
  position: relative;
  top: 2px;
}

.btn.btn-rounded {
  border-radius: 1.875rem;
}

.icon-move-right i {
  transition: all 0.2s cubic-bezier(0.34, 1.61, 0.7, 1.3);
}

.icon-move-right:hover i,
.icon-move-right:focus i {
  transform: translateX(5px);
}

.icon-move-left i {
  transition: all 0.2s cubic-bezier(0.34, 1.61, 0.7, 1.3);
}

.icon-move-left:hover i,
.icon-move-left:focus i {
  transform: translateX(-5px);
}

.btn-primary:hover,
.btn.bg-gradient-primary:hover {
  background-color: #cb0c9f;
  border-color: #cb0c9f;
}

.btn-primary .btn.bg-outline-primary,
.btn.bg-gradient-primary .btn.bg-outline-primary {
  border: 1px solid #cb0c9f;
}

.btn-primary:not(:disabled):not(.disabled).active,
.btn-primary:not(:disabled):not(.disabled):active,
.show>.btn-primary.dropdown-toggle,
.btn.bg-gradient-primary:not(:disabled):not(.disabled).active,
.btn.bg-gradient-primary:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-primary.dropdown-toggle {
  color: color-yiq(#cb0c9f);
  background-color: #cb0c9f;
}

.btn-primary.focus,
.btn-primary:focus,
.btn.bg-gradient-primary.focus,
.btn.bg-gradient-primary:focus {
  color: #fff;
}

.btn-outline-primary {
  box-shadow: none;
}

.btn-outline-primary:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #cb0c9f;
}

.btn-secondary:hover,
.btn.bg-gradient-secondary:hover {
  background-color: #8392AB;
  border-color: #8392AB;
}

.btn-secondary .btn.bg-outline-secondary,
.btn.bg-gradient-secondary .btn.bg-outline-secondary {
  border: 1px solid #8392AB;
}

.btn-secondary:not(:disabled):not(.disabled).active,
.btn-secondary:not(:disabled):not(.disabled):active,
.show>.btn-secondary.dropdown-toggle,
.btn.bg-gradient-secondary:not(:disabled):not(.disabled).active,
.btn.bg-gradient-secondary:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-secondary.dropdown-toggle {
  color: color-yiq(#8392AB);
  background-color: #8392AB;
}

.btn-secondary.focus,
.btn-secondary:focus,
.btn.bg-gradient-secondary.focus,
.btn.bg-gradient-secondary:focus {
  color: #fff;
}

.btn-outline-secondary {
  box-shadow: none;
}

.btn-outline-secondary:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #8392AB;
}

.btn-success:hover,
.btn.bg-gradient-success:hover {
  background-color: #82d616;
  border-color: #82d616;
}

.btn-success .btn.bg-outline-success,
.btn.bg-gradient-success .btn.bg-outline-success {
  border: 1px solid #82d616;
}

.btn-success:not(:disabled):not(.disabled).active,
.btn-success:not(:disabled):not(.disabled):active,
.show>.btn-success.dropdown-toggle,
.btn.bg-gradient-success:not(:disabled):not(.disabled).active,
.btn.bg-gradient-success:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-success.dropdown-toggle {
  color: color-yiq(#82d616);
  background-color: #82d616;
}

.btn-success.focus,
.btn-success:focus,
.btn.bg-gradient-success.focus,
.btn.bg-gradient-success:focus {
  color: #fff;
}

.btn-outline-success {
  box-shadow: none;
}

.btn-outline-success:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #82d616;
}

.btn-info:hover,
.btn.bg-gradient-info:hover {
  background-color: #17c1e8;
  border-color: #17c1e8;
}

.btn-info .btn.bg-outline-info,
.btn.bg-gradient-info .btn.bg-outline-info {
  border: 1px solid #17c1e8;
}

.btn-info:not(:disabled):not(.disabled).active,
.btn-info:not(:disabled):not(.disabled):active,
.show>.btn-info.dropdown-toggle,
.btn.bg-gradient-info:not(:disabled):not(.disabled).active,
.btn.bg-gradient-info:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-info.dropdown-toggle {
  color: color-yiq(#17c1e8);
  background-color: #17c1e8;
}

.btn-info.focus,
.btn-info:focus,
.btn.bg-gradient-info.focus,
.btn.bg-gradient-info:focus {
  color: #fff;
}

.btn-outline-info {
  box-shadow: none;
}

.btn-outline-info:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #17c1e8;
}

.btn-warning:hover,
.btn.bg-gradient-warning:hover {
  background-color: #f53939;
  border-color: #f53939;
}

.btn-warning .btn.bg-outline-warning,
.btn.bg-gradient-warning .btn.bg-outline-warning {
  border: 1px solid #f53939;
}

.btn-warning:not(:disabled):not(.disabled).active,
.btn-warning:not(:disabled):not(.disabled):active,
.show>.btn-warning.dropdown-toggle,
.btn.bg-gradient-warning:not(:disabled):not(.disabled).active,
.btn.bg-gradient-warning:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-warning.dropdown-toggle {
  color: color-yiq(#f53939);
  background-color: #f53939;
}

.btn-warning.focus,
.btn-warning:focus,
.btn.bg-gradient-warning.focus,
.btn.bg-gradient-warning:focus {
  color: #fff;
}

.btn-outline-warning {
  box-shadow: none;
}

.btn-outline-warning:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #f53939;
}

.btn-danger:hover,
.btn.bg-gradient-danger:hover {
  background-color: #ea0606;
  border-color: #ea0606;
}

.btn-danger .btn.bg-outline-danger,
.btn.bg-gradient-danger .btn.bg-outline-danger {
  border: 1px solid #ea0606;
}

.btn-danger:not(:disabled):not(.disabled).active,
.btn-danger:not(:disabled):not(.disabled):active,
.show>.btn-danger.dropdown-toggle,
.btn.bg-gradient-danger:not(:disabled):not(.disabled).active,
.btn.bg-gradient-danger:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-danger.dropdown-toggle {
  color: color-yiq(#ea0606);
  background-color: #ea0606;
}

.btn-danger.focus,
.btn-danger:focus,
.btn.bg-gradient-danger.focus,
.btn.bg-gradient-danger:focus {
  color: #fff;
}

.btn-outline-danger {
  box-shadow: none;
}

.btn-outline-danger:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #ea0606;
}

.btn-light:hover,
.btn.bg-gradient-light:hover {
  background-color: #e9ecef;
  border-color: #e9ecef;
}

.btn-light .btn.bg-outline-light,
.btn.bg-gradient-light .btn.bg-outline-light {
  border: 1px solid #e9ecef;
}

.btn-light:not(:disabled):not(.disabled).active,
.btn-light:not(:disabled):not(.disabled):active,
.show>.btn-light.dropdown-toggle,
.btn.bg-gradient-light:not(:disabled):not(.disabled).active,
.btn.bg-gradient-light:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-light.dropdown-toggle {
  color: color-yiq(#e9ecef);
  background-color: #e9ecef;
}

.btn-outline-light {
  box-shadow: none;
}

.btn-outline-light:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #e9ecef;
}

.btn-dark:hover,
.btn.bg-gradient-dark:hover {
  background-color: #252f40;
  border-color: #252f40;
}

.btn-dark .btn.bg-outline-dark,
.btn.bg-gradient-dark .btn.bg-outline-dark {
  border: 1px solid #252f40;
}

.btn-dark:not(:disabled):not(.disabled).active,
.btn-dark:not(:disabled):not(.disabled):active,
.show>.btn-dark.dropdown-toggle,
.btn.bg-gradient-dark:not(:disabled):not(.disabled).active,
.btn.bg-gradient-dark:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-dark.dropdown-toggle {
  color: color-yiq(#252f40);
  background-color: #252f40;
}

.btn-dark.focus,
.btn-dark:focus,
.btn.bg-gradient-dark.focus,
.btn.bg-gradient-dark:focus {
  color: #fff;
}

.btn-outline-dark {
  box-shadow: none;
}

.btn-outline-dark:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #252f40;
}

.btn-white:hover,
.btn.bg-gradient-white:hover {
  background-color: #fff;
  border-color: #fff;
}

.btn-white .btn.bg-outline-white,
.btn.bg-gradient-white .btn.bg-outline-white {
  border: 1px solid #fff;
}

.btn-white:not(:disabled):not(.disabled).active,
.btn-white:not(:disabled):not(.disabled):active,
.show>.btn-white.dropdown-toggle,
.btn.bg-gradient-white:not(:disabled):not(.disabled).active,
.btn.bg-gradient-white:not(:disabled):not(.disabled):active,
.show>.btn.bg-gradient-white.dropdown-toggle {
  color: color-yiq(#fff);
  background-color: #fff;
}

.btn-outline-white {
  box-shadow: none;
}

.btn-outline-white:hover:not(.active) {
  background-color: transparent;
  opacity: .75;
  box-shadow: none;
  color: #fff;
}

.btn-outline-white {
  border-color: rgba(255, 255, 255, 0.75);
  background: rgba(255, 255, 255, 0.1);
}

.btn-primary,
.btn.bg-gradient-primary {
  color: #fff;
}

.btn-primary:hover,
.btn.bg-gradient-primary:hover {
  color: #fff;
}

.btn-secondary,
.btn.bg-gradient-secondary {
  color: #fff;
}

.btn-secondary:hover,
.btn.bg-gradient-secondary:hover {
  color: #fff;
}

.btn-danger,
.btn.bg-gradient-danger {
  color: #fff;
}

.btn-danger:hover,
.btn.bg-gradient-danger:hover {
  color: #fff;
}

.btn-info,
.btn.bg-gradient-info {
  color: #fff;
}

.btn-info:hover,
.btn.bg-gradient-info:hover {
  color: #fff;
}

.btn-success,
.btn.bg-gradient-success {
  color: #fff;
}

.btn-success:hover,
.btn.bg-gradient-success:hover {
  color: #fff;
}

.btn-warning,
.btn.bg-gradient-warning {
  color: #fff;
}

.btn-warning:hover,
.btn.bg-gradient-warning:hover {
  color: #fff;
}

.btn-dark,
.btn.bg-gradient-dark {
  color: #fff;
}

.btn-dark:hover,
.btn.bg-gradient-dark:hover {
  color: #fff;
}

.btn-light,
.btn.bg-gradient-light {
  color: #3A416F;
}

.btn-light:hover,
.btn.bg-gradient-light:hover {
  color: #3A416F;
}

.breadcrumb-item {
  font-size: 0.875rem;
}

.breadcrumb-item.text-white::before {
  color: #fff;
}

.breadcrumb-dark {
  background-color: #252f40;
}

.breadcrumb-dark .breadcrumb-item {
  font-weight: 600;
}

.breadcrumb-dark .breadcrumb-item a {
  color: #f8f9fa;
}

.breadcrumb-dark .breadcrumb-item a:hover {
  color: #fff;
}

.breadcrumb-dark .breadcrumb-item+.breadcrumb-item::before {
  color: #adb5bd;
}

.breadcrumb-dark .breadcrumb-item.active {
  color: #dee2e6;
}

.breadcrumb-links {
  padding: 0;
  margin: 0;
  background: transparent;
}

.card {
  box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
}

.card .card-header {
  padding: 1.5rem;
}

.card .card-body {
  font-family: "Open Sans";
  padding: 1.5rem;
}

.card.card-plain {
  background-color: transparent;
  box-shadow: none;
}

.card .card-footer {
  padding: 1.5rem;
  background-color: transparent;
}

.author {
  display: flex;
}

.author .name>span {
  line-height: 1.571;
  font-weight: 600;
  font-size: 0.875rem;
  color: #3A416F;
}

.author .stats {
  font-size: 0.875rem;
  font-weight: 400;
}

.card.card-background {
  align-items: center;
}

.card.card-background .full-background {
  background-position: 50%;
  background-size: cover;
  margin-bottom: 30px;
  width: 100%;
  height: 100%;
  position: absolute;
  border-radius: 1rem;
}

.card.card-background .card-body {
  color: #fff;
  position: relative;
  z-index: 2;
}

.card.card-background .card-body .content-center,
.card.card-background .card-body .content-left {
  min-height: 330px;
  max-width: 450px;
  padding-top: 60px;
  padding-bottom: 60px;
}

.card.card-background .card-body .content-center {
  text-align: center;
}

.card.card-background .card-body.body-left {
  width: 90%;
}

.card.card-background .card-body .author .name span,
.card.card-background .card-body .author .name .stats {
  color: #fff;
}

.card.card-background:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 1;
  display: block;
  content: "";
  background: rgba(0, 0, 0, 0.4);
  border-radius: 1rem;
}

.card.card-background.card-background-mask-primary:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-primary:after {
  background-image: linear-gradient(310deg, #7928CA 0%, #FF0080 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-secondary:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-secondary:after {
  background-image: linear-gradient(310deg, #627594 0%, #A8B8D8 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-success:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-success:after {
  background-image: linear-gradient(310deg, #17ad37 0%, #98ec2d 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-info:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-info:after {
  background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-warning:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-warning:after {
  background-image: linear-gradient(310deg, #f53939 0%, #fbcf33 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-danger:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-danger:after {
  background-image: linear-gradient(310deg, #ea0606 0%, #ff667c 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-light:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-light:after {
  background-image: linear-gradient(310deg, #CED4DA 0%, #EBEFF4 100%);
  opacity: .85;
}

.card.card-background.card-background-mask-dark:before {
  background: rgba(0, 0, 0, 0.2);
}

.card.card-background.card-background-mask-dark:after {
  background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
  opacity: .85;
}

.card.card-background .card-category {
  font-size: 0.875rem;
  font-weight: 600;
}

.card.card-background .card-description {
  margin-top: 24px;
  margin-bottom: 24px;
}

@media (min-width: 992px) {

  .dropdown .dropdown-menu,
  .dropup .dropdown-menu,
  .dropstart .dropdown-menu,
  .dropend .dropdown-menu {
    box-shadow: 0 8px 26px -4px rgba(20, 20, 20, 0.15), 0 8px 9px -5px rgba(20, 20, 20, 0.06);
    transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
    cursor: pointer;
  }

  .dropdown .dropdown-toggle:after,
  .dropup .dropdown-toggle:after,
  .dropstart .dropdown-toggle:after,
  .dropend .dropdown-toggle:after {
    content: "\f107";
    font: normal normal normal 14px/1 FontAwesome;
    border: none;
    vertical-align: middle;
    font-weight: 600;
  }

  .dropdown .dropdown-toggle.show:after,
  .dropup .dropdown-toggle.show:after,
  .dropstart .dropdown-toggle.show:after,
  .dropend .dropdown-toggle.show:after {
    transform: rotate(180deg);
  }

  .dropdown .dropdown-toggle:after,
  .dropup .dropdown-toggle:after,
  .dropstart .dropdown-toggle:after,
  .dropend .dropdown-toggle:after {
    transition: 0.3s ease;
  }

  .dropdown.dropdown-hover .dropdown-menu,
  .dropdown .dropdown-menu {
    display: block;
    opacity: 0;
    top: 0;
    transform-origin: 50% 0;
    pointer-events: none;
    transform: perspective(999px) rotateX(-10deg) translateZ(0) translate3d(0px, 37px, 0px) !important;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    will-change: transform, box-shadow;
  }

  .dropdown.dropdown-hover:hover>.dropdown-menu,
  .dropdown .dropdown-menu.show {
    opacity: 1;
    pointer-events: auto;
    visibility: visible;
    transform: perspective(999px) rotateX(0deg) translateZ(0) translate3d(0, 37px, 5px) !important;
  }

  .dropdown.dropdown-hover:hover>.dropdown-menu:before,
  .dropdown .dropdown-menu.show:before {
    top: -20px;
  }

  .dropdown.dropdown-hover:after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -24px;
    width: 100%;
    height: 100%;
  }

  .dropdown:not(.dropdown-hover) .dropdown-menu {
    margin-top: 8px !important;
  }

  .dropdown .dropdown-menu:before {
    font-family: "FontAwesome";
    content: "\f0d8";
    position: absolute;
    top: 0;
    left: 28px;
    right: auto;
    font-size: 22px;
    color: #fff;
    transition: top 0.35s ease;
  }

  .dropdown .dropdown-item .arrow {
    transform: rotate(-90deg);
  }

  .dropdown-item {
    transition: background-color 0.3s ease, color 0.3s ease;
  }
}

@media (max-width: 991.98px) {
  .dropdown:not(.nav-item) .dropdown-menu {
    display: block;
    opacity: 0;
    top: 0;
    transform-origin: 50% 0;
    pointer-events: none;
    transform: perspective(999px) rotateX(-10deg) translateZ(0) translate3d(0px, 37px, 0px) !important;
    transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    will-change: transform, box-shadow;
    box-shadow: 0 8px 26px -4px rgba(20, 20, 20, 0.15), 0 8px 9px -5px rgba(20, 20, 20, 0.06);
  }

  .dropdown:not(.nav-item) .dropdown-menu:before {
    font-family: "FontAwesome";
    content: "\f0d8";
    position: absolute;
    top: 0;
    left: 28px;
    right: auto;
    font-size: 22px;
    color: #fff;
    transition: top 0.35s ease;
  }

  .dropdown:not(.nav-item):not(.dropdown-hover) .dropdown-menu {
    margin-top: 8px !important;
  }

  .dropdown:not(.nav-item) .dropdown-menu.show {
    opacity: 1;
    pointer-events: auto;
    visibility: visible;
    transform: perspective(999px) rotateX(0deg) translateZ(0) translate3d(0, 37px, 5px) !important;
  }

  .dropdown:not(.nav-item) .dropdown-menu.show:before {
    top: -20px;
  }

  .dropdown.nav-item .dropdown-menu {
    background-color: transparent;
    overflow: scroll;
  }

  .dropdown.nav-item .dropdown-menu-animation {
    display: block;
    height: 0;
    transition: all .35s ease;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    opacity: 0;
  }

  .dropdown.nav-item .dropdown-menu-animation.show {
    height: 250px;
    opacity: 1;
  }
}

.dropdown .dropdown-menu,
.dropup .dropdown-menu {
  position: absolute;
  box-shadow: 0 8px 26px -4px rgba(20, 20, 20, 0.15), 0 8px 9px -5px rgba(20, 20, 20, 0.06);
  transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
  background-color: #fff;
}

.dropdown .dropdown-menu {
  margin-top: 8px !important;
}

.dropdown.nav-item .dropdown-menu {
  background-color: #fff;
}

.dropdown.dropdown-hover .dropdown-menu,
.dropdown .dropdown-menu {
  display: block;
  opacity: 0;
  top: 0;
  transform-origin: 50% 0;
  pointer-events: none;
  transform: perspective(999px) rotateX(-10deg) translateZ(0) translate3d(0px, 37px, 0px) !important;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform, box-shadow;
}

.dropdown.dropdown-hover:hover>.dropdown-menu,
.dropdown .dropdown-menu.show {
  opacity: 1;
  pointer-events: auto;
  visibility: visible;
  transform: perspective(999px) rotateX(0deg) translateZ(0) translate3d(0, 37px, 5px) !important;
}

.dropdown-menu li {
  position: relative;
}

.dropdown.dropdown-subitem:after {
  left: 100%;
  bottom: 0;
  width: 50%;
}

.dropdown .dropdown-menu .dropdown-item+.dropdown-menu:before {
  transform: rotate(-90deg);
  left: 0;
  top: 0;
  z-index: -1;
  transition: left .35s ease;
}

.dropdown .dropdown-menu.dropdown-menu-end {
  right: 0;
  left: auto;
}

.dropdown .dropdown-menu.dropdown-menu-end:before {
  right: 28px;
  left: auto;
}

.dropdown.dropdown-subitem:hover .dropdown-item+.dropdown-menu:before {
  left: -8px;
}

.dropdown>.dropdown-menu .dropdown-item+.dropdown-menu {
  transform: perspective(999px) rotateX(0deg) translateZ(0) translate3d(0, 0px, 5px) !important;
}

.dropdown .dropdown-menu .dropdown-item+.dropdown-menu {
  right: -197px;
  left: auto;
  top: 0;
}

.dropdown-image {
  background-size: cover;
}

@media (min-width: 992px) {
  .dropdown-xl {
    min-width: 40rem;
  }

  .dropdown-lg {
    min-width: 23rem;
  }

  .dropdown-md {
    min-width: 15rem;
  }
}

@media (max-width: 1199.98px) {
  .dropdown-lg-responsive {
    min-width: 19rem;
  }
}

.dropup .dropdown-menu {
  box-shadow: 0 8px 26px -4px rgba(20, 20, 20, 0.15), 0 8px 9px -5px rgba(20, 20, 20, 0.06);
  transition: visibility 0.25s, opacity 0.25s, transform 0.25s;
  cursor: pointer;
  top: auto !important;
  bottom: 100% !important;
  margin-bottom: 0.5rem !important;
  display: block;
  opacity: 0;
  transform-origin: bottom;
  pointer-events: none;
  transform: perspective(999px) rotateX(12deg) translateZ(0) translate3d(0px, 0px, 0px) !important;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform, box-shadow;
}

.dropup .dropdown-menu.show {
  pointer-events: auto;
  transform: perspective(999px) rotateX(0deg) translateZ(0) translate3d(1px, 0px, 5px) !important;
  opacity: 1;
}

.dropup .dropdown-menu.show:after {
  bottom: -20px;
}

.dropup .dropdown-menu:after {
  font-family: "FontAwesome";
  content: "\f0d7";
  position: absolute;
  z-index: -1;
  bottom: 22px;
  left: 28px;
  right: auto;
  font-size: 22px;
  color: #fff;
  transition: bottom 0.35s ease;
}

.page-header {
  padding: 0;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: 50%;
}

.page-header .container {
  z-index: 1;
}

.oblique {
  transform: skewX(-10deg);
  overflow: hidden;
  width: 60%;
  right: -10rem;
  border-bottom-left-radius: 0.75rem;
}

.oblique .oblique-image {
  transform: skewX(10deg);
}

.input-group {
  border-radius: 0.5rem;
}

.input-group,
.input-group .input-group-text {
  transition: box-shadow 0.15s ease, border-color 0.15s ease;
}

.input-group> :not(:first-child):not(.dropdown-menu) {
  margin-left: 0;
}

.input-group .form-control:focus {
  border-left: 1px solid #e293d3 !important;
  border-right: 1px solid #e293d3 !important;
}

.input-group .form-control:not(:first-child) {
  border-left: 0;
  padding-left: 0;
}

.input-group .form-control:not(:last-child) {
  border-right: 0;
  padding-right: 0;
}

.input-group .form-control+.input-group-text {
  border-left: 0;
  border-right: 1px solid #d2d6da;
}

.input-group .input-group-text {
  border-right: 0;
}

.form-group {
  margin-bottom: 1rem;
}

.form-check:not(.form-switch) .form-check-input[type="checkbox"],
.form-check:not(.form-switch) .form-check-input[type="radio"] {
  border: 1px solid #cbd3da;
  margin-top: 0.25rem;
  position: relative;
}

.form-check:not(.form-switch) .form-check-input[type="checkbox"]:checked,
.form-check:not(.form-switch) .form-check-input[type="radio"]:checked {
  border: 0;
}

.form-check:not(.form-switch) .form-check-input[type="checkbox"]:after {
  transition: opacity 0.25s ease-in-out;
  font-family: "FontAwesome";
  content: "\f00c";
  width: 100%;
  height: 100%;
  color: #fff;
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 0.67rem;
  opacity: 0;
}

.form-check:not(.form-switch) .form-check-input[type="checkbox"]:checked:after {
  opacity: 1;
}

.form-check:not(.form-switch) .form-check-input[type="radio"] {
  transition: border 0s;
}

.form-check:not(.form-switch) .form-check-input[type="radio"]:after {
  transition: opacity 0.25s ease-in-out;
  content: "";
  position: absolute;
  width: 0.4375rem;
  height: 0.4375rem;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0;
}

.form-check:not(.form-switch) .form-check-input[type="radio"]:checked {
  padding: 6px;
}

.form-check:not(.form-switch) .form-check-input[type="radio"]:checked:after {
  opacity: 1;
}

.form-check-label,
.form-check-input[type="checkbox"] {
  cursor: pointer;
}

.form-check-label {
  font-size: 0.875rem;
  font-weight: 400;
}

.form-check-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.form-switch .form-check-input {
  border: 1px solid #e9ecef;
  position: relative;
  background-color: rgba(58, 65, 111, 0.1);
  height: 1.25em;
}

.form-switch .form-check-input:after {
  transition: transform 0.25s ease-in-out, background-color 0.25s ease-in-out;
  content: "";
  width: 1rem;
  height: 1rem;
  border-radius: 50%;
  position: absolute;
  background-color: #fff;
  transform: translateX(1px);
  box-shadow: 0 0.25rem 0.375rem -0.0625rem rgba(20, 20, 20, 0.12), 0 0.125rem 0.25rem -0.0625rem rgba(20, 20, 20, 0.07);
  top: 1px;
}

.form-switch .form-check-input:checked:after {
  transform: translateX(21px);
}

.form-switch .form-check-input:checked {
  border-color: rgba(58, 65, 111, 0.95);
  background-color: rgba(58, 65, 111, 0.95);
}

.form-select {
  transition: box-shadow 0.15s ease, border-color 0.15s ease;
}

label,
.form-label {
  font-size: 0.75rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  color: #252f40;
  margin-left: 0.25rem;
}

.form-control.is-invalid:focus {
  box-shadow: 0 0 0 2px rgba(253, 92, 112, 0.6);
}

.form-control.is-valid:focus {
  box-shadow: 0 0 0 2px rgba(102, 212, 50, 0.65);
}

.footer .nav-link {
  color: #252f40;
  font-weight: 400;
  font-size: 0.875rem;
  padding-top: 0;
  padding-bottom: 0.25rem;
}

.footer .nav-link:hover {
  opacity: 1 !important;
  transition: opacity 0.3 ease;
}

.bg-gradient-primary {
  background-image: linear-gradient(310deg, #7928CA 0%, #FF0080 100%);
}

.bg-gradient-secondary {
  background-image: linear-gradient(310deg, #627594 0%, #A8B8D8 100%);
}

.bg-gradient-success {
  background-image: linear-gradient(310deg, #17ad37 0%, #98ec2d 100%);
}

.bg-gradient-info {
  background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);
}

.bg-gradient-warning {
  background-image: linear-gradient(310deg, #f53939 0%, #fbcf33 100%);
}

.bg-gradient-danger {
  background-image: linear-gradient(310deg, #ea0606 0%, #ff667c 100%);
}

.bg-gradient-light {
  background-image: linear-gradient(310deg, #CED4DA 0%, #EBEFF4 100%);
}

.bg-gradient-dark {
  background-image: linear-gradient(310deg, #141727 0%, #3A416F 100%);
}

.bg-gradient-faded-primary {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(203, 12, 159, 0.6) 0, #9b0979 100%);
}

.bg-gradient-faded-secondary {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(131, 146, 171, 0.6) 0, #657796 100%);
}

.bg-gradient-faded-success {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(130, 214, 22, 0.6) 0, #66a811 100%);
}

.bg-gradient-faded-info {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(23, 193, 232, 0.6) 0, #129aba 100%);
}

.bg-gradient-faded-warning {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(245, 57, 57, 0.6) 0, #ef0c0c 100%);
}

.bg-gradient-faded-danger {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(234, 6, 6, 0.6) 0, #b80505 100%);
}

.bg-gradient-faded-light {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(233, 236, 239, 0.6) 0, #cbd3da 100%);
}

.bg-gradient-faded-dark {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(37, 47, 64, 0.6) 0, #121720 100%);
}

.bg-gradient-faded-white {
  background-image: radial-gradient(370px circle at 80% 50%, rgba(255, 255, 255, 0.6) 0, #e6e6e6 100%);
}

.bg-gradient-faded-primary-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(203, 12, 159, 0.3) 0, #cb0c9f 100%);
}

.bg-gradient-faded-secondary-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(131, 146, 171, 0.3) 0, #8392AB 100%);
}

.bg-gradient-faded-success-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(130, 214, 22, 0.3) 0, #82d616 100%);
}

.bg-gradient-faded-info-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(23, 193, 232, 0.3) 0, #17c1e8 100%);
}

.bg-gradient-faded-warning-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(245, 57, 57, 0.3) 0, #f53939 100%);
}

.bg-gradient-faded-danger-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(234, 6, 6, 0.3) 0, #ea0606 100%);
}

.bg-gradient-faded-light-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(233, 236, 239, 0.3) 0, #e9ecef 100%);
}

.bg-gradient-faded-dark-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(37, 47, 64, 0.3) 0, #252f40 100%);
}

.bg-gradient-faded-white-vertical {
  background-image: radial-gradient(200px circle at 50% 70%, rgba(255, 255, 255, 0.3) 0, #fff 100%);
}

.icon-shape {
  width: 48px;
  height: 48px;
  background-position: center;
  border-radius: 0.75rem;
}

.icon-shape i {
  color: #fff;
  opacity: 0.8;
  top: 11px;
  position: relative;
}

.icon-shape .ni {
  top: 14px;
}

.icon-xxs {
  width: 20px;
  height: 20px;
}

.icon-xxs i {
  top: -4px;
  font-size: .5rem;
}

.icon-xs {
  width: 24px;
  height: 24px;
}

.icon-xs i {
  top: -4px;
  font-size: .5rem;
}

.icon-sm {
  width: 32px;
  height: 32px;
}

.icon-sm i {
  top: 2px;
  font-size: .65rem;
}

.icon-md {
  width: 48px;
  height: 48px;
}

.icon-md i {
  top: 22%;
  font-size: 0.875rem;
}

.icon-md.icon-striped {
  background-position-x: 85px;
  background-position-y: 85px;
}

.icon-md.icon-striped i {
  top: 11%;
  margin-left: -10px;
  font-size: 0.875rem;
}

.icon-lg {
  width: 64px;
  height: 64px;
}

.icon-lg i {
  top: 31%;
  font-size: 1.25rem;
}

.icon-lg.icon-striped {
  background-position-x: 111px;
  background-position-y: 111px;
}

.icon-lg.icon-striped i {
  top: 21%;
  margin-left: -15px;
}

.icon-xl {
  width: 100px;
  height: 100px;
  border-radius: 0.75rem;
}

.icon-xl i {
  top: 37%;
  font-size: 1.6rem;
}

.icon-xl.icon-striped {
  background-position-x: 80px;
  background-position-y: 80px;
}

.icon-xl.icon-striped i {
  top: 30%;
  margin-left: -15px;
}

.info-horizontal {
  text-align: left !important;
}

.info-horizontal .icon {
  float: left;
}

.info-horizontal .description {
  overflow: hidden;
}

svg.text-primary .color-foreground {
  fill: #7928CA;
}

svg.text-primary .color-background {
  fill: #FF0080;
}

svg.text-secondary .color-foreground {
  fill: #627594;
}

svg.text-secondary .color-background {
  fill: #A8B8D8;
}

svg.text-info .color-foreground {
  fill: #2152ff;
}

svg.text-info .color-background {
  fill: #21d4fd;
}

svg.text-warning .color-foreground {
  fill: #f53939;
}

svg.text-warning .color-background {
  fill: #fbcf33;
}

svg.text-danger .color-foreground {
  fill: #ea0606;
}

svg.text-danger .color-background {
  fill: #ff667c;
}

svg.text-success .color-foreground {
  fill: #17ad37;
}

svg.text-success .color-background {
  fill: #98ec2d;
}

svg.text-dark .color-foreground {
  fill: #141727;
}

svg.text-dark .color-background {
  fill: #3A416F;
}

.blur {
  box-shadow: inset 0px 0px 2px #fefefed1;
  -webkit-backdrop-filter: saturate(200%) blur(30px);
  backdrop-filter: saturate(200%) blur(30px);
  background-color: rgba(255, 255, 255, 0.8) !important;
}

.blur.saturation-less {
  -webkit-backdrop-filter: saturate(20%) blur(30px);
  backdrop-filter: saturate(20%) blur(30px);
}

.blur.blur-rounded {
  border-radius: 40px;
}

.blur.blur-light {
  background-color: rgba(255, 255, 255, 0.4);
}

.blur.blur-dark {
  background-color: rgba(0, 0, 0, 0.3);
}

.shadow-blur {
  box-shadow: inset 0 0px 1px 1px rgba(254, 254, 254, 0.9), 0 20px 27px 0 rgba(0, 0, 0, 0.05) !important;
}

.shadow-card {
  box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05) !important;
}

.navbar-blur {
  -webkit-backdrop-filter: saturate(200%) blur(30px);
  backdrop-filter: saturate(200%) blur(30px);
  background-color: rgba(255, 255, 255, 0.58) !important;
}

.blur-section {
  -webkit-backdrop-filter: saturate(200%) blur(30px);
  backdrop-filter: saturate(200%) blur(30px);
}

.blur-section.blur-gradient-primary {
  background-image: linear-gradient(310deg, rgba(121, 40, 202, 0.95) 0%, rgba(255, 0, 128, 0.95) 100%);
}

*.move-on-hover {
  -webkit-transition: 0.2s ease-out;
  transition: 0.2s ease-out;
  overflow: hidden;
  -webkit-transform-origin: 50% 0;
  transform-origin: 50% 0;
  transform-origin: 50% 0;
  -webkit-transform: perspective(999px) rotateX(0deg) translate3d(0, 0, 0);
  transform: perspective(999px) rotateX(0deg) translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform, box-shadow;
}

*.move-on-hover:hover {
  -webkit-transform: perspective(999px) rotateX(7deg) translate3d(0px, -4px, 5px);
  transform: perspective(999px) rotateX(7deg) translate3d(0px, -4px, 5px);
}

*.gradient-animation {
  background: linear-gradient(-45deg, #2152ff, #ea0606, #f53939, #7928CA, #252f40);
  background-size: 400% 400% !important;
  animation: gradient 10s ease infinite;
}

hr.vertical {
  position: absolute;
  background-color: transparent;
  height: 100%;
  right: 0;
  top: 0;
  width: 1px;
}

hr.vertical.light {
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), white, rgba(255, 255, 255, 0));
}

hr.vertical.dark {
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0));
}

hr.vertical.gray-light {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
}

hr.horizontal {
  background-color: transparent;
}

hr.horizontal.light {
  background-image: linear-gradient(to right, rgba(255, 255, 255, 0), white, rgba(255, 255, 255, 0));
}

hr.horizontal.dark {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0));
}

hr.horizontal.gray-light {
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
}

.lock-size {
  width: 1.7rem;
  height: 1.7rem;
}

.border-radius-xs {
  border-radius: 0.125rem;
}

.border-radius-sm {
  border-radius: 0.25rem;
}

.border-radius-md {
  border-radius: 0.5rem;
}

.border-radius-lg {
  border-radius: 0.75rem;
}

.border-radius-xl {
  border-radius: 1rem;
}

.border-radius-2xl {
  border-radius: 1.5rem;
}

.border-radius-section {
  border-radius: 10rem;
}

.border-bottom-end-radius-0 {
  border-bottom-right-radius: 0;
}

.border-top-end-radius-0 {
  border-top-right-radius: 0;
}

.border-bottom-start-radius-0 {
  border-bottom-left-radius: 0;
}

.border-top-start-radius-0 {
  border-top-left-radius: 0;
}

.z-index-sticky {
  z-index: 1020;
}

.waves {
  position: relative;
  width: 100%;
  height: 16vh;
  margin-bottom: -7px;
  /*Fix for safari gap*/
  min-height: 100px;
  max-height: 150px;
}

.waves.waves-sm {
  height: 50px;
  min-height: 50px;
}

.waves.no-animation .moving-waves>use {
  animation: none;
}

.wave-rotate {
  transform: rotate(180deg);
}

/* Animation for the waves */
.moving-waves>use {
  animation: move-forever 40s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
}

.moving-waves>use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 11s;
}

.moving-waves>use:nth-child(2) {
  animation-delay: -4s;
  animation-duration: 13s;
}

.moving-waves>use:nth-child(3) {
  animation-delay: -3s;
  animation-duration: 15s;
}

.moving-waves>use:nth-child(4) {
  animation-delay: -4s;
  animation-duration: 20s;
}

.moving-waves>use:nth-child(5) {
  animation-delay: -4s;
  animation-duration: 25s;
}

.moving-waves>use:nth-child(6) {
  animation-delay: -3s;
  animation-duration: 30s;
}

@keyframes move-forever {
  0% {
    transform: translate3d(-90px, 0, 0);
  }

  100% {
    transform: translate3d(85px, 0, 0);
  }
}

/*Shrinking for mobile*/
@media (max-width: 767.98px) {
  .waves {
    height: 40px;
    min-height: 40px;
  }

  hr.horizontal {
    background-color: transparent;
  }

  hr.horizontal:not(.dark) {
    background-image: linear-gradient(to right, rgba(255, 255, 255, 0), white, rgba(255, 255, 255, 0));
  }

  hr.horizontal.vertical {
    transform: rotate(90deg);
  }

  hr.horizontal.dark {
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0));
  }
}

.overflow-visible {
  overflow: visible !important;
}

.popover .popover-header {
  font-weight: 600;
}

.navbar {
  box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.16);
}

.navbar .navbar-brand {
  color: #252f40;
  font-size: 0.875rem;
}

.navbar .nav-link {
  color: #252f40;
  padding: 0.5rem 1rem;
  font-weight: 400;
  font-size: 0.875rem;
}

.navbar.navbar-absolute {
  position: absolute;
  width: 100%;
  z-index: 1;
}

.navbar.navbar-transparent .nav-link,
.navbar.navbar-transparent .nav-link i {
  color: #fff;
}

.navbar.navbar-transparent .nav-link:hover,
.navbar.navbar-transparent .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar.navbar-transparent .navbar-toggler .navbar-toggler-icon .navbar-toggler-bar {
  background: #fff;
}

.navbar.navbar-transparent .navbar-collapse {
  border-radius: 1rem;
}

.navbar.navbar-dark .navbar-collapse.show .dropdown-header.text-dark,
.navbar.navbar-dark .navbar-collapse.collapsing .dropdown-header.text-dark {
  color: #fff !important;
}

.navbar .sidenav-toggler-inner {
  width: 18px;
}

.navbar .sidenav-toggler-inner .sidenav-toggler-line {
  transition: all 0.15s ease;
  background: #67748e;
  border-radius: 0.125rem;
  position: relative;
  display: block;
  height: 2px;
}

.navbar .sidenav-toggler-inner .sidenav-toggler-line:not(:last-child) {
  margin-bottom: 3px;
}

.g-sidenav-show.g-sidenav-pinned .navbar .sidenav-toggler-inner .sidenav-toggler-line:first-child,
.g-sidenav-show.g-sidenav-pinned .navbar .sidenav-toggler-inner .sidenav-toggler-line:last-child {
  width: 13px;
  transform: translateX(5px);
}

.navbar-light {
  background-color: #fff !important;
}

.navbar-light .navbar-toggler {
  border: none;
}

.navbar-light .navbar-toggler:focus {
  box-shadow: none;
}

.navbar-toggler .navbar-toggler-icon {
  background-image: none;
}

.navbar-toggler .navbar-toggler-icon .navbar-toggler-bar {
  display: block;
  position: relative;
  width: 22px;
  height: 1px;
  border-radius: 1px;
  background: #6c757d;
  transition: all 0.2s;
  margin: 0 auto;
}

.navbar-toggler .navbar-toggler-icon .navbar-toggler-bar.bar2,
.navbar-toggler .navbar-toggler-icon .navbar-toggler-bar.bar3 {
  margin-top: 7px;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-bar.bar1 {
  transform: rotate(45deg);
  transform-origin: 10% 10%;
  margin-top: 4px;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-bar.bar2 {
  opacity: 0;
}

.navbar-toggler[aria-expanded="true"] .navbar-toggler-bar.bar3 {
  transform: rotate(-45deg);
  transform-origin: 10% 90%;
  margin-top: 3px;
}

@media (max-width: 991.98px) {
  .navbar.navbar-transparent .navbar-collapse {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }

  .navbar.navbar-transparent .navbar-collapse.collapsing {
    background: #fff;
  }

  .navbar.navbar-transparent .navbar-collapse.show {
    background: #fff;
  }

  .navbar.navbar-transparent .navbar-collapse.show .nav-link,
  .navbar.navbar-transparent .navbar-collapse.show i {
    color: #252f40;
  }

  .g-sidenav-show .navbar:not(.sidenav).navbar-main .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }

  .g-sidenav-show .navbar:not(.sidenav).navbar-main .navbar-nav {
    flex-direction: row;
  }
}

.nav.nav-pills {
  background: #f8f9fa;
  border-radius: 0.75rem;
  position: relative;
}

.nav.nav-pills.nav-pills-vertical {
  border-radius: 1.1875rem;
}

.nav.nav-pills.nav-pills-vertical .nav-link.active {
  border-radius: 0.875rem;
}

.nav.nav-pills .nav-link {
  z-index: 3;
  color: #252f40;
  border-radius: 0.5rem;
  background-color: inherit;
}

.nav.nav-pills .nav-link.active {
  animation: 0.2s ease;
}

.nav.nav-pills .nav-link:hover:not(.active) {
  color: #252f40;
}

.nav.nav-pills.nav-pills-primary {
  background: #fff;
  color: #fff;
}

.nav.nav-pills.nav-pills-primary .nav-link.active {
  color: #fff;
}

.nav.nav-pills.nav-pills-primary .moving-tab .nav-link.active {
  background: #7928CA;
  color: #7928CA;
}

.nav.nav-pills.nav-pills-info {
  background: #fff;
  color: #fff;
}

.nav.nav-pills.nav-pills-info .nav-link.active {
  color: #fff;
}

.nav.nav-pills.nav-pills-info .moving-tab .nav-link.active {
  background: #2152ff;
  color: #2152ff;
}

.nav.nav-pills.nav-pills-success {
  background: #fff;
  color: #fff;
}

.nav.nav-pills.nav-pills-success .nav-link.active {
  color: #fff;
}

.nav.nav-pills.nav-pills-success .moving-tab .nav-link.active {
  background: #17ad37;
  color: #17ad37;
}

.nav.nav-pills.nav-pills-warning {
  background: #fff;
  color: #fff;
}

.nav.nav-pills.nav-pills-warning .nav-link.active {
  color: #fff;
}

.nav.nav-pills.nav-pills-warning .moving-tab .nav-link.active {
  background: #f53939;
  color: #f53939;
}

.nav.nav-pills.nav-pills-danger {
  background: #fff;
  color: #fff;
}

.nav.nav-pills.nav-pills-danger .nav-link.active {
  color: #fff;
}

.nav.nav-pills.nav-pills-danger .moving-tab .nav-link.active {
  background: #ea0606;
  color: #ea0606;
}

.nav.nav-pills .nav-item {
  z-index: 3;
}

.moving-tab {
  z-index: 1 !important;
}

.moving-tab .nav-link {
  color: #fff;
  transition: .2s ease;
  border-radius: 0.5rem;
}

.moving-tab .nav-link.active {
  color: #fff;
  font-weight: 600;
  box-shadow: 0px 1px 5px 1px #ddd;
  animation: 0.2s ease;
  background: #fff;
}

.moving-tab .nav-link:hover:not(.active) {
  color: #252f40;
}

.table thead th {
  padding: 0.75rem 1.5rem;
  text-transform: capitalize;
  letter-spacing: 0px;
  border-bottom: 1px solid #e9ecef;
}

.table th {
  font-weight: 600;
}

.table td .progress {
  height: 3px;
  width: 120px;
  margin: 0;
}

.table td,
.table th {
  white-space: nowrap;
}

.table.align-items-center td,
.table.align-items-center th {
  vertical-align: middle;
}

.table tbody tr:last-child td {
  border-width: 0;
}

.table> :not(:last-child)> :last-child>* {
  border-bottom-color: #e9ecef;
}

.timeline {
  position: relative;
}

.timeline:before {
  content: '';
  position: absolute;
  top: 0;
  left: 1rem;
  height: 100%;
  border-right: 2px solid #dee2e6;
}

.timeline-block {
  position: relative;
}

.timeline-block:after {
  content: "";
  display: table;
  clear: both;
}

.timeline-block:first-child {
  margin-top: 0;
}

.timeline-block:last-child {
  margin-bottom: 0;
}

.timeline-step {
  position: absolute;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  left: 0;
  width: 26px;
  height: 26px;
  border-radius: 50%;
  background: #fff;
  text-align: center;
  transform: translateX(-50%);
  font-size: 1rem;
  font-weight: 600;
  z-index: 1;
}

.timeline-step svg,
.timeline-step i {
  line-height: 1.4;
}

.timeline-content {
  position: relative;
  margin-left: 45px;
  padding-top: 0.35rem;
  position: relative;
  top: -6px;
}

.timeline-content:after {
  content: "";
  display: table;
  clear: both;
}

@media (min-width: 992px) {
  .timeline:before {
    left: 50%;
    margin-left: -1px;
  }

  .timeline-step {
    left: 50%;
  }

  .timeline-content {
    width: 38%;
  }

  .timeline-block:nth-child(even) .timeline-content {
    float: right;
  }
}

.timeline-one-side:before {
  left: 1rem;
}

.timeline-one-side .timeline-step {
  left: 1rem;
}

.timeline-one-side .timeline-content {
  width: auto;
}

@media (min-width: 992px) {
  .timeline-one-side .timeline-content {
    max-width: 30rem;
  }
}

.timeline-one-side .timeline-block:nth-child(even) .timeline-content {
  float: none;
}

html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

body {
  color: #67748e;
  font-weight: 400;
  line-height: 1.6;
  background-color: #fff;
}

h1,
.h1,
.h1,
h2,
.h2,
.h2,
h3,
.h3,
.h3,
h4,
.h4,
.h4,
h5,
.h5,
.h5,
h6,
.h6,
.h6 {
  color: #252f40;
}

h1,
.h1,
.h1 {
  font-size: 3rem;
  line-height: 1.25;
  letter-spacing: -0.025rem;
}

@media (max-width: 575.98px) {

  h1,
  .h1,
  .h1 {
    font-size: calc(1.425rem + 2.1vw);
  }
}

h2,
.h2,
.h2 {
  font-size: 2.25rem;
  line-height: 1.3;
  letter-spacing: 0.05rem;
}

@media (max-width: 575.98px) {

  h2,
  .h2,
  .h2 {
    font-size: calc(1.35rem + 1.2vw);
  }
}

h3,
.h3,
.h3 {
  font-size: 1.875rem;
  line-height: 1.375;
}

@media (max-width: 575.98px) {

  h3,
  .h3,
  .h3 {
    font-size: calc(1.3125rem + 0.75vw);
  }
}

h4,
.h4,
.h4 {
  font-size: 1.5rem;
  line-height: 1.375;
}

@media (max-width: 575.98px) {

  h4,
  .h4,
  .h4 {
    font-size: calc(1.275rem + 0.3vw);
  }
}

h5,
.h5,
.h5 {
  font-size: 1.25rem;
  line-height: 1.375;
}

@media (max-width: 575.98px) {

  h5,
  .h5,
  .h5 {
    font-size: 1.25rem;
  }
}

h6,
.h6,
.h6 {
  font-size: 1rem;
  line-height: 1.625;
}

p,
.p {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.6;
}

.lead {
  font-size: 1.25rem;
  font-weight: 400;
  line-height: 1.625;
}

h1,
.h1,
.h1,
h2,
.h2,
.h2,
h3,
.h3,
.h3 {
  font-weight: 700;
}

h4,
.h4,
.h4,
h5,
.h5,
.h5,
h6,
.h6,
.h6 {
  font-weight: 600;
}

h1,
.h1,
.h1,
h2,
.h2,
.h2,
h3,
.h3,
.h3,
h4,
.h4,
.h4 {
  letter-spacing: -0.05rem;
}

a {
  letter-spacing: -0.025rem;
  color: #000;
}

.text-sm {
  line-height: 1.5;
}

.text-xs {
  line-height: 1.25;
}

p,
.p {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
}

.text-lg {
  font-size: 1.125rem !important;
}

.text-sm {
  font-size: 0.875rem !important;
}

.text-xs {
  font-size: 0.75rem !important;
}

.text-xxs {
  font-size: 0.65rem !important;
}

p {
  line-height: 1.625;
  font-weight: 400;
}

.text-sans-serif {
  font-family: "Open Sans" !important;
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }

  .text-sm-right {
    text-align: right !important;
  }

  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }

  .text-md-right {
    text-align: right !important;
  }

  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }

  .text-lg-right {
    text-align: right !important;
  }

  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }

  .text-xl-right {
    text-align: right !important;
  }

  .text-xl-center {
    text-align: center !important;
  }
}

@media (min-width: 1400px) {
  .text-xxl-left {
    text-align: left !important;
  }

  .text-xxl-right {
    text-align: right !important;
  }

  .text-xxl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 600 !important;
}

.font-weight-bolder {
  font-weight: 700 !important;
}

.font-italic {
  font-style: italic !important;
}

.text-gradient {
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  position: relative;
  z-index: 1;
}

.text-gradient.text-primary {
  background-image: linear-gradient(310deg, #7928CA, #FF0080);
}

.text-gradient.text-info {
  background-image: linear-gradient(310deg, #2152FF, #21D4FD);
}

.text-gradient.text-success {
  background-image: linear-gradient(310deg, #17AD37, #C1E823);
}

.text-gradient.text-warning {
  background-image: linear-gradient(310deg, #F53939, #FBCF33);
}

.text-gradient.text-danger {
  background-image: linear-gradient(310deg, #D60808, #FF6690);
}

.text-gradient.text-dark {
  background-image: linear-gradient(310deg, #141727, #3A416F);
}

.blockquote {
  border-left: 3px solid #6c757d;
}

.blockquote>span {
  font-style: italic;
}

.text-muted {
  color: #67748e !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.letter-wider {
  letter-spacing: 0.05rem;
}

.letter-normal {
  letter-spacing: 0rem;
}

.letter-tighter {
  letter-spacing: -0.05rem;
}

.text-lighter {
  font-weight: lighter;
}

.text-light {
  font-weight: 300;
}

.text-normal {
  font-weight: 400;
}

.text-bold {
  font-weight: 600;
}

.text-bolder {
  font-weight: 700;
}

@media (min-width: 1200px) {
  .w-lg-50 {
    width: 50% !important;
  }
}

.shadow-xl {
  box-shadow: 0 23px 45px -11px rgba(20, 20, 20, 0.25);
}

.cursor-pointer {
  cursor: pointer;
}

.h-100-vh {
  height: 100vh;
}

.section-height-25 {
  min-height: 25vh;
}

.section-height-50 {
  min-height: 50vh;
}

.section-height-75 {
  min-height: 75vh;
}

.section-height-85 {
  min-height: 85vh;
}

.section-height-100 {
  min-height: 100vh;
}

.transform-translate-50 {
  transform: translate(0, -50%);
}

.border-radius-top-start-0 {
  border-top-left-radius: 0 !important;
}

.border-radius-top-end-0 {
  border-top-right-radius: 0 !important;
}

.border-radius-bottom-start-0 {
  border-bottom-left-radius: 0 !important;
}

.border-radius-bottom-end-0 {
  border-bottom-right-radius: 0 !important;
}

@media (min-width: 1400px) {
  .border-radius-top-start-xxl-0 {
    border-top-left-radius: 0 !important;
  }

  .border-radius-top-end-xxl-0 {
    border-top-right-radius: 0 !important;
  }

  .border-radius-bottom-start-xxl-0 {
    border-bottom-left-radius: 0 !important;
  }

  .border-radius-bottom-end-xxl-0 {
    border-bottom-right-radius: 0 !important;
  }
}

@media (min-width: 1200px) {
  .border-radius-top-start-xl-0 {
    border-top-left-radius: 0 !important;
  }

  .border-radius-top-end-xl-0 {
    border-top-right-radius: 0 !important;
  }

  .border-radius-bottom-start-xl-0 {
    border-bottom-left-radius: 0 !important;
  }

  .border-radius-bottom-end-xl-0 {
    border-bottom-right-radius: 0 !important;
  }
}

@media (min-width: 992px) {
  .border-radius-top-start-lg-0 {
    border-top-left-radius: 0 !important;
  }

  .border-radius-top-end-lg-0 {
    border-top-right-radius: 0 !important;
  }

  .border-radius-bottom-start-lg-0 {
    border-bottom-left-radius: 0 !important;
  }

  .border-radius-bottom-end-lg-0 {
    border-bottom-right-radius: 0 !important;
  }
}

@media (min-width: 768px) {
  .border-radius-top-start-md-0 {
    border-top-left-radius: 0 !important;
  }

  .border-radius-top-end-md-0 {
    border-top-right-radius: 0 !important;
  }

  .border-radius-bottom-start-md-0 {
    border-bottom-left-radius: 0 !important;
  }

  .border-radius-bottom-end-md-0 {
    border-bottom-right-radius: 0 !important;
  }
}

@media (min-width: 576px) {
  .border-radius-top-start-sm-0 {
    border-top-left-radius: 0 !important;
  }

  .border-radius-top-end-sm-0 {
    border-top-right-radius: 0 !important;
  }

  .border-radius-bottom-start-sm-0 {
    border-bottom-left-radius: 0 !important;
  }

  .border-radius-bottom-end-sm-0 {
    border-bottom-right-radius: 0 !important;
  }
}

.border-radius-top-start-xs-0 {
  border-top-left-radius: 0 !important;
}

.border-radius-top-end-xs-0 {
  border-top-right-radius: 0 !important;
}

.border-radius-bottom-start-xs-0 {
  border-bottom-left-radius: 0 !important;
}

.border-radius-bottom-end-xs-0 {
  border-bottom-right-radius: 0 !important;
}

@media (min-width: 1400px) {
  .border-top-xxl {
    border-top: 1px solid #dee2e6 !important;
  }

  .border-end-xxl {
    border-right: 1px solid #dee2e6 !important;
  }

  .border-bottom-xxl {
    border-bottom: 1px solid #dee2e6 !important;
  }

  .border-start-xxl {
    border-left: 1px solid #dee2e6 !important;
  }
}

@media (min-width: 1200px) {
  .border-top-xl {
    border-top: 1px solid #dee2e6 !important;
  }

  .border-end-xl {
    border-right: 1px solid #dee2e6 !important;
  }

  .border-bottom-xl {
    border-bottom: 1px solid #dee2e6 !important;
  }

  .border-start-xl {
    border-left: 1px solid #dee2e6 !important;
  }
}

@media (min-width: 992px) {
  .border-top-lg {
    border-top: 1px solid #dee2e6 !important;
  }

  .border-end-lg {
    border-right: 1px solid #dee2e6 !important;
  }

  .border-bottom-lg {
    border-bottom: 1px solid #dee2e6 !important;
  }

  .border-start-lg {
    border-left: 1px solid #dee2e6 !important;
  }
}

@media (min-width: 768px) {
  .border-top-md {
    border-top: 1px solid #dee2e6 !important;
  }

  .border-end-md {
    border-right: 1px solid #dee2e6 !important;
  }

  .border-bottom-md {
    border-bottom: 1px solid #dee2e6 !important;
  }

  .border-start-md {
    border-left: 1px solid #dee2e6 !important;
  }
}

@media (min-width: 576px) {
  .border-top-sm {
    border-top: 1px solid #dee2e6 !important;
  }

  .border-end-sm {
    border-right: 1px solid #dee2e6 !important;
  }

  .border-bottom-sm {
    border-bottom: 1px solid #dee2e6 !important;
  }

  .border-start-sm {
    border-left: 1px solid #dee2e6 !important;
  }
}

.border-top-xs {
  border-top: 1px solid #dee2e6 !important;
}

.border-end-xs {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom-xs {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-start-xs {
  border-left: 1px solid #dee2e6 !important;
}

.bg-cover {
  background-size: cover;
}

.mask {
  position: absolute;
  background-size: cover;
  background-position: center center;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.8;
}

.z-index-0 {
  z-index: 0 !important;
}

.z-index-1 {
  z-index: 1 !important;
}

.z-index-2 {
  z-index: 2 !important;
}

.z-index-3 {
  z-index: 3 !important;
}

.p-6 {
  padding: 4rem !important;
}

.p-7 {
  padding: 6rem !important;
}

.p-8 {
  padding: 8rem !important;
}

.p-9 {
  padding: 10rem !important;
}

.p-10 {
  padding: 12rem !important;
}

.p-11 {
  padding: 14rem !important;
}

.p-12 {
  padding: 16rem !important;
}

.pt-6 {
  padding-top: 4rem !important;
}

.pt-7 {
  padding-top: 6rem !important;
}

.pt-8 {
  padding-top: 8rem !important;
}

.pt-9 {
  padding-top: 10rem !important;
}

.pt-10 {
  padding-top: 12rem !important;
}

.pt-11 {
  padding-top: 14rem !important;
}

.pt-12 {
  padding-top: 16rem !important;
}

.pe-6 {
  padding-right: 4rem !important;
}

.pe-7 {
  padding-right: 6rem !important;
}

.pe-8 {
  padding-right: 8rem !important;
}

.pe-9 {
  padding-right: 10rem !important;
}

.pe-10 {
  padding-right: 12rem !important;
}

.pe-11 {
  padding-right: 14rem !important;
}

.pe-12 {
  padding-right: 16rem !important;
}

.pb-6 {
  padding-bottom: 4rem !important;
}

.pb-7 {
  padding-bottom: 6rem !important;
}

.pb-8 {
  padding-bottom: 8rem !important;
}

.pb-9 {
  padding-bottom: 10rem !important;
}

.pb-10 {
  padding-bottom: 12rem !important;
}

.pb-11 {
  padding-bottom: 14rem !important;
}

.pb-12 {
  padding-bottom: 16rem !important;
}

.ps-6 {
  padding-left: 4rem !important;
}

.ps-7 {
  padding-left: 6rem !important;
}

.ps-8 {
  padding-left: 8rem !important;
}

.ps-9 {
  padding-left: 10rem !important;
}

.ps-10 {
  padding-left: 12rem !important;
}

.ps-11 {
  padding-left: 14rem !important;
}

.ps-12 {
  padding-left: 16rem !important;
}

.px-6 {
  padding-left: 4rem !important;
  padding-right: 4rem !important;
}

.px-7 {
  padding-left: 6rem !important;
  padding-right: 6rem !important;
}

.px-8 {
  padding-left: 8rem !important;
  padding-right: 8rem !important;
}

.px-9 {
  padding-left: 10rem !important;
  padding-right: 10rem !important;
}

.px-10 {
  padding-left: 12rem !important;
  padding-right: 12rem !important;
}

.px-11 {
  padding-left: 14rem !important;
  padding-right: 14rem !important;
}

.px-12 {
  padding-left: 16rem !important;
  padding-right: 16rem !important;
}

.py-6 {
  padding-top: 4rem !important;
  padding-bottom: 4rem !important;
}

.py-7 {
  padding-top: 6rem !important;
  padding-bottom: 6rem !important;
}

.py-8 {
  padding-top: 8rem !important;
  padding-bottom: 8rem !important;
}

.py-9 {
  padding-top: 10rem !important;
  padding-bottom: 10rem !important;
}

.py-10 {
  padding-top: 12rem !important;
  padding-bottom: 12rem !important;
}

.py-11 {
  padding-top: 14rem !important;
  padding-bottom: 14rem !important;
}

.py-12 {
  padding-top: 16rem !important;
  padding-bottom: 16rem !important;
}

@media (min-width: 1400px) {
  .p-xxl-6 {
    padding: 4rem !important;
  }

  .p-xxl-7 {
    padding: 6rem !important;
  }

  .p-xxl-8 {
    padding: 8rem !important;
  }

  .p-xxl-9 {
    padding: 10rem !important;
  }

  .p-xxl-10 {
    padding: 12rem !important;
  }

  .p-xxl-11 {
    padding: 14rem !important;
  }

  .p-xxl-12 {
    padding: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .pt-xxl-6 {
    padding-top: 4rem !important;
  }

  .pt-xxl-7 {
    padding-top: 6rem !important;
  }

  .pt-xxl-8 {
    padding-top: 8rem !important;
  }

  .pt-xxl-9 {
    padding-top: 10rem !important;
  }

  .pt-xxl-10 {
    padding-top: 12rem !important;
  }

  .pt-xxl-11 {
    padding-top: 14rem !important;
  }

  .pt-xxl-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .pe-xxl-6 {
    padding-right: 4rem !important;
  }

  .pe-xxl-7 {
    padding-right: 6rem !important;
  }

  .pe-xxl-8 {
    padding-right: 8rem !important;
  }

  .pe-xxl-9 {
    padding-right: 10rem !important;
  }

  .pe-xxl-10 {
    padding-right: 12rem !important;
  }

  .pe-xxl-11 {
    padding-right: 14rem !important;
  }

  .pe-xxl-12 {
    padding-right: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .pb-xxl-6 {
    padding-bottom: 4rem !important;
  }

  .pb-xxl-7 {
    padding-bottom: 6rem !important;
  }

  .pb-xxl-8 {
    padding-bottom: 8rem !important;
  }

  .pb-xxl-9 {
    padding-bottom: 10rem !important;
  }

  .pb-xxl-10 {
    padding-bottom: 12rem !important;
  }

  .pb-xxl-11 {
    padding-bottom: 14rem !important;
  }

  .pb-xxl-12 {
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .ps-xxl-6 {
    padding-top: 4rem !important;
  }

  .ps-xxl-7 {
    padding-top: 6rem !important;
  }

  .ps-xxl-8 {
    padding-top: 8rem !important;
  }

  .ps-xxl-9 {
    padding-top: 10rem !important;
  }

  .ps-xxl-10 {
    padding-top: 12rem !important;
  }

  .ps-xxl-11 {
    padding-top: 14rem !important;
  }

  .ps-xxl-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .px-xxl-6 {
    padding-left: 4rem !important;
    padding-right: 4rem !important;
  }

  .px-xxl-7 {
    padding-left: 6rem !important;
    padding-right: 6rem !important;
  }

  .px-xxl-8 {
    padding-left: 8rem !important;
    padding-right: 8rem !important;
  }

  .px-xxl-9 {
    padding-left: 10rem !important;
    padding-right: 10rem !important;
  }

  .px-xxl-10 {
    padding-left: 12rem !important;
    padding-right: 12rem !important;
  }

  .px-xxl-11 {
    padding-left: 14rem !important;
    padding-right: 14rem !important;
  }

  .px-xxl-12 {
    padding-left: 16rem !important;
    padding-right: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .py-xxl-6 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }

  .py-xxl-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }

  .py-xxl-8 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }

  .py-xxl-9 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }

  .py-xxl-10 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }

  .py-xxl-11 {
    padding-top: 14rem !important;
    padding-bottom: 14rem !important;
  }

  .py-xxl-12 {
    padding-top: 16rem !important;
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .p-xl-6 {
    padding: 4rem !important;
  }

  .p-xl-7 {
    padding: 6rem !important;
  }

  .p-xl-8 {
    padding: 8rem !important;
  }

  .p-xl-9 {
    padding: 10rem !important;
  }

  .p-xl-10 {
    padding: 12rem !important;
  }

  .p-xl-11 {
    padding: 14rem !important;
  }

  .p-xl-12 {
    padding: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .pt-xl-6 {
    padding-top: 4rem !important;
  }

  .pt-xl-7 {
    padding-top: 6rem !important;
  }

  .pt-xl-8 {
    padding-top: 8rem !important;
  }

  .pt-xl-9 {
    padding-top: 10rem !important;
  }

  .pt-xl-10 {
    padding-top: 12rem !important;
  }

  .pt-xl-11 {
    padding-top: 14rem !important;
  }

  .pt-xl-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .pe-xl-6 {
    padding-right: 4rem !important;
  }

  .pe-xl-7 {
    padding-right: 6rem !important;
  }

  .pe-xl-8 {
    padding-right: 8rem !important;
  }

  .pe-xl-9 {
    padding-right: 10rem !important;
  }

  .pe-xl-10 {
    padding-right: 12rem !important;
  }

  .pe-xl-11 {
    padding-right: 14rem !important;
  }

  .pe-xl-12 {
    padding-right: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .pb-xl-6 {
    padding-bottom: 4rem !important;
  }

  .pb-xl-7 {
    padding-bottom: 6rem !important;
  }

  .pb-xl-8 {
    padding-bottom: 8rem !important;
  }

  .pb-xl-9 {
    padding-bottom: 10rem !important;
  }

  .pb-xl-10 {
    padding-bottom: 12rem !important;
  }

  .pb-xl-11 {
    padding-bottom: 14rem !important;
  }

  .pb-xl-12 {
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .ps-xl-6 {
    padding-top: 4rem !important;
  }

  .ps-xl-7 {
    padding-top: 6rem !important;
  }

  .ps-xl-8 {
    padding-top: 8rem !important;
  }

  .ps-xl-9 {
    padding-top: 10rem !important;
  }

  .ps-xl-10 {
    padding-top: 12rem !important;
  }

  .ps-xl-11 {
    padding-top: 14rem !important;
  }

  .ps-xl-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .px-xl-6 {
    padding-left: 4rem !important;
    padding-right: 4rem !important;
  }

  .px-xl-7 {
    padding-left: 6rem !important;
    padding-right: 6rem !important;
  }

  .px-xl-8 {
    padding-left: 8rem !important;
    padding-right: 8rem !important;
  }

  .px-xl-9 {
    padding-left: 10rem !important;
    padding-right: 10rem !important;
  }

  .px-xl-10 {
    padding-left: 12rem !important;
    padding-right: 12rem !important;
  }

  .px-xl-11 {
    padding-left: 14rem !important;
    padding-right: 14rem !important;
  }

  .px-xl-12 {
    padding-left: 16rem !important;
    padding-right: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .py-xl-6 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }

  .py-xl-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }

  .py-xl-8 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }

  .py-xl-9 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }

  .py-xl-10 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }

  .py-xl-11 {
    padding-top: 14rem !important;
    padding-bottom: 14rem !important;
  }

  .py-xl-12 {
    padding-top: 16rem !important;
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 992px) {
  .p-lg-6 {
    padding: 4rem !important;
  }

  .p-lg-7 {
    padding: 6rem !important;
  }

  .p-lg-8 {
    padding: 8rem !important;
  }

  .p-lg-9 {
    padding: 10rem !important;
  }

  .p-lg-10 {
    padding: 12rem !important;
  }

  .p-lg-11 {
    padding: 14rem !important;
  }

  .p-lg-12 {
    padding: 16rem !important;
  }
}

@media (min-width: 992px) {
  .pt-lg-6 {
    padding-top: 4rem !important;
  }

  .pt-lg-7 {
    padding-top: 6rem !important;
  }

  .pt-lg-8 {
    padding-top: 8rem !important;
  }

  .pt-lg-9 {
    padding-top: 10rem !important;
  }

  .pt-lg-10 {
    padding-top: 12rem !important;
  }

  .pt-lg-11 {
    padding-top: 14rem !important;
  }

  .pt-lg-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 992px) {
  .pe-lg-6 {
    padding-right: 4rem !important;
  }

  .pe-lg-7 {
    padding-right: 6rem !important;
  }

  .pe-lg-8 {
    padding-right: 8rem !important;
  }

  .pe-lg-9 {
    padding-right: 10rem !important;
  }

  .pe-lg-10 {
    padding-right: 12rem !important;
  }

  .pe-lg-11 {
    padding-right: 14rem !important;
  }

  .pe-lg-12 {
    padding-right: 16rem !important;
  }
}

@media (min-width: 992px) {
  .pb-lg-6 {
    padding-bottom: 4rem !important;
  }

  .pb-lg-7 {
    padding-bottom: 6rem !important;
  }

  .pb-lg-8 {
    padding-bottom: 8rem !important;
  }

  .pb-lg-9 {
    padding-bottom: 10rem !important;
  }

  .pb-lg-10 {
    padding-bottom: 12rem !important;
  }

  .pb-lg-11 {
    padding-bottom: 14rem !important;
  }

  .pb-lg-12 {
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 992px) {
  .ps-lg-6 {
    padding-top: 4rem !important;
  }

  .ps-lg-7 {
    padding-top: 6rem !important;
  }

  .ps-lg-8 {
    padding-top: 8rem !important;
  }

  .ps-lg-9 {
    padding-top: 10rem !important;
  }

  .ps-lg-10 {
    padding-top: 12rem !important;
  }

  .ps-lg-11 {
    padding-top: 14rem !important;
  }

  .ps-lg-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 992px) {
  .px-lg-6 {
    padding-left: 4rem !important;
    padding-right: 4rem !important;
  }

  .px-lg-7 {
    padding-left: 6rem !important;
    padding-right: 6rem !important;
  }

  .px-lg-8 {
    padding-left: 8rem !important;
    padding-right: 8rem !important;
  }

  .px-lg-9 {
    padding-left: 10rem !important;
    padding-right: 10rem !important;
  }

  .px-lg-10 {
    padding-left: 12rem !important;
    padding-right: 12rem !important;
  }

  .px-lg-11 {
    padding-left: 14rem !important;
    padding-right: 14rem !important;
  }

  .px-lg-12 {
    padding-left: 16rem !important;
    padding-right: 16rem !important;
  }
}

@media (min-width: 992px) {
  .py-lg-6 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }

  .py-lg-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }

  .py-lg-8 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }

  .py-lg-9 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }

  .py-lg-10 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }

  .py-lg-11 {
    padding-top: 14rem !important;
    padding-bottom: 14rem !important;
  }

  .py-lg-12 {
    padding-top: 16rem !important;
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 768px) {
  .p-md-6 {
    padding: 4rem !important;
  }

  .p-md-7 {
    padding: 6rem !important;
  }

  .p-md-8 {
    padding: 8rem !important;
  }

  .p-md-9 {
    padding: 10rem !important;
  }

  .p-md-10 {
    padding: 12rem !important;
  }

  .p-md-11 {
    padding: 14rem !important;
  }

  .p-md-12 {
    padding: 16rem !important;
  }
}

@media (min-width: 768px) {
  .pt-md-6 {
    padding-top: 4rem !important;
  }

  .pt-md-7 {
    padding-top: 6rem !important;
  }

  .pt-md-8 {
    padding-top: 8rem !important;
  }

  .pt-md-9 {
    padding-top: 10rem !important;
  }

  .pt-md-10 {
    padding-top: 12rem !important;
  }

  .pt-md-11 {
    padding-top: 14rem !important;
  }

  .pt-md-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 768px) {
  .pe-md-6 {
    padding-right: 4rem !important;
  }

  .pe-md-7 {
    padding-right: 6rem !important;
  }

  .pe-md-8 {
    padding-right: 8rem !important;
  }

  .pe-md-9 {
    padding-right: 10rem !important;
  }

  .pe-md-10 {
    padding-right: 12rem !important;
  }

  .pe-md-11 {
    padding-right: 14rem !important;
  }

  .pe-md-12 {
    padding-right: 16rem !important;
  }
}

@media (min-width: 768px) {
  .pb-md-6 {
    padding-bottom: 4rem !important;
  }

  .pb-md-7 {
    padding-bottom: 6rem !important;
  }

  .pb-md-8 {
    padding-bottom: 8rem !important;
  }

  .pb-md-9 {
    padding-bottom: 10rem !important;
  }

  .pb-md-10 {
    padding-bottom: 12rem !important;
  }

  .pb-md-11 {
    padding-bottom: 14rem !important;
  }

  .pb-md-12 {
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 768px) {
  .ps-md-6 {
    padding-top: 4rem !important;
  }

  .ps-md-7 {
    padding-top: 6rem !important;
  }

  .ps-md-8 {
    padding-top: 8rem !important;
  }

  .ps-md-9 {
    padding-top: 10rem !important;
  }

  .ps-md-10 {
    padding-top: 12rem !important;
  }

  .ps-md-11 {
    padding-top: 14rem !important;
  }

  .ps-md-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 768px) {
  .px-md-6 {
    padding-left: 4rem !important;
    padding-right: 4rem !important;
  }

  .px-md-7 {
    padding-left: 6rem !important;
    padding-right: 6rem !important;
  }

  .px-md-8 {
    padding-left: 8rem !important;
    padding-right: 8rem !important;
  }

  .px-md-9 {
    padding-left: 10rem !important;
    padding-right: 10rem !important;
  }

  .px-md-10 {
    padding-left: 12rem !important;
    padding-right: 12rem !important;
  }

  .px-md-11 {
    padding-left: 14rem !important;
    padding-right: 14rem !important;
  }

  .px-md-12 {
    padding-left: 16rem !important;
    padding-right: 16rem !important;
  }
}

@media (min-width: 768px) {
  .py-md-6 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }

  .py-md-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }

  .py-md-8 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }

  .py-md-9 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }

  .py-md-10 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }

  .py-md-11 {
    padding-top: 14rem !important;
    padding-bottom: 14rem !important;
  }

  .py-md-12 {
    padding-top: 16rem !important;
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 576px) {
  .p-sm-6 {
    padding: 4rem !important;
  }

  .p-sm-7 {
    padding: 6rem !important;
  }

  .p-sm-8 {
    padding: 8rem !important;
  }

  .p-sm-9 {
    padding: 10rem !important;
  }

  .p-sm-10 {
    padding: 12rem !important;
  }

  .p-sm-11 {
    padding: 14rem !important;
  }

  .p-sm-12 {
    padding: 16rem !important;
  }
}

@media (min-width: 576px) {
  .pt-sm-6 {
    padding-top: 4rem !important;
  }

  .pt-sm-7 {
    padding-top: 6rem !important;
  }

  .pt-sm-8 {
    padding-top: 8rem !important;
  }

  .pt-sm-9 {
    padding-top: 10rem !important;
  }

  .pt-sm-10 {
    padding-top: 12rem !important;
  }

  .pt-sm-11 {
    padding-top: 14rem !important;
  }

  .pt-sm-12 {
    padding-top: 16rem !important;
  }
}

@media (min-width: 576px) {
  .pe-sm-6 {
    padding-right: 4rem !important;
  }

  .pe-sm-7 {
    padding-right: 6rem !important;
  }

  .pe-sm-8 {
    padding-right: 8rem !important;
  }

  .pe-sm-9 {
    padding-right: 10rem !important;
  }

  .pe-sm-10 {
    padding-right: 12rem !important;
  }

  .pe-sm-11 {
    padding-right: 14rem !important;
  }

  .pe-sm-12 {
    padding-right: 16rem !important;
  }
}

@media (min-width: 576px) {
  .pb-sm-6 {
    padding-bottom: 4rem !important;
  }

  .pb-sm-7 {
    padding-bottom: 6rem !important;
  }

  .pb-sm-8 {
    padding-bottom: 8rem !important;
  }

  .pb-sm-9 {
    padding-bottom: 10rem !important;
  }

  .pb-sm-10 {
    padding-bottom: 12rem !important;
  }

  .pb-sm-11 {
    padding-bottom: 14rem !important;
  }

  .pb-sm-12 {
    padding-bottom: 16rem !important;
  }
}

@media (min-width: 576px) {
  .ps-sm-6 {
    padding-left: 4rem !important;
  }

  .ps-sm-7 {
    padding-left: 6rem !important;
  }

  .ps-sm-8 {
    padding-left: 8rem !important;
  }

  .ps-sm-9 {
    padding-left: 10rem !important;
  }

  .ps-sm-10 {
    padding-left: 12rem !important;
  }

  .ps-sm-11 {
    padding-left: 14rem !important;
  }

  .ps-sm-12 {
    padding-left: 16rem !important;
  }
}

@media (min-width: 576px) {
  .px-sm-6 {
    padding-left: 4rem !important;
    padding-right: 4rem !important;
  }

  .px-sm-7 {
    padding-left: 6rem !important;
    padding-right: 6rem !important;
  }

  .px-sm-8 {
    padding-left: 8rem !important;
    padding-right: 8rem !important;
  }

  .px-sm-9 {
    padding-left: 10rem !important;
    padding-right: 10rem !important;
  }

  .px-sm-10 {
    padding-left: 12rem !important;
    padding-right: 12rem !important;
  }

  .px-sm-11 {
    padding-left: 14rem !important;
    padding-right: 14rem !important;
  }

  .px-sm-12 {
    padding-left: 16rem !important;
    padding-right: 16rem !important;
  }
}

@media (min-width: 576px) {
  .py-sm-6 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }

  .py-sm-7 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }

  .py-sm-8 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }

  .py-sm-9 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }

  .py-sm-10 {
    padding-top: 12rem !important;
    padding-bottom: 12rem !important;
  }

  .py-sm-11 {
    padding-top: 14rem !important;
    padding-bottom: 14rem !important;
  }

  .py-sm-12 {
    padding-top: 16rem !important;
    padding-bottom: 16rem !important;
  }
}

.p-xs-6 {
  padding: 4rem !important;
}

.p-xs-7 {
  padding: 6rem !important;
}

.p-xs-8 {
  padding: 8rem !important;
}

.p-xs-9 {
  padding: 10rem !important;
}

.p-xs-10 {
  padding: 12rem !important;
}

.p-xs-11 {
  padding: 14rem !important;
}

.p-xs-12 {
  padding: 16rem !important;
}

.pt-xs-6 {
  padding-top: 4rem !important;
}

.pt-xs-7 {
  padding-top: 6rem !important;
}

.pt-xs-8 {
  padding-top: 8rem !important;
}

.pt-xs-9 {
  padding-top: 10rem !important;
}

.pt-xs-10 {
  padding-top: 12rem !important;
}

.pt-xs-11 {
  padding-top: 14rem !important;
}

.pt-xs-12 {
  padding-top: 16rem !important;
}

.pe-xs-6 {
  padding-right: 4rem !important;
}

.pe-xs-7 {
  padding-right: 6rem !important;
}

.pe-xs-8 {
  padding-right: 8rem !important;
}

.pe-xs-9 {
  padding-right: 10rem !important;
}

.pe-xs-10 {
  padding-right: 12rem !important;
}

.pe-xs-11 {
  padding-right: 14rem !important;
}

.pe-xs-12 {
  padding-right: 16rem !important;
}

.pb-xs-6 {
  padding-bottom: 4rem !important;
}

.pb-xs-7 {
  padding-bottom: 6rem !important;
}

.pb-xs-8 {
  padding-bottom: 8rem !important;
}

.pb-xs-9 {
  padding-bottom: 10rem !important;
}

.pb-xs-10 {
  padding-bottom: 12rem !important;
}

.pb-xs-11 {
  padding-bottom: 14rem !important;
}

.pb-xs-12 {
  padding-bottom: 16rem !important;
}

.ps-xs-6 {
  padding-top: 4rem !important;
}

.ps-xs-7 {
  padding-top: 6rem !important;
}

.ps-xs-8 {
  padding-top: 8rem !important;
}

.ps-xs-9 {
  padding-top: 10rem !important;
}

.ps-xs-10 {
  padding-top: 12rem !important;
}

.ps-xs-11 {
  padding-top: 14rem !important;
}

.ps-xs-12 {
  padding-top: 16rem !important;
}

.px-xs-6 {
  padding-left: 4rem !important;
  padding-right: 4rem !important;
}

.px-xs-7 {
  padding-left: 6rem !important;
  padding-right: 6rem !important;
}

.px-xs-8 {
  padding-left: 8rem !important;
  padding-right: 8rem !important;
}

.px-xs-9 {
  padding-left: 10rem !important;
  padding-right: 10rem !important;
}

.px-xs-10 {
  padding-left: 12rem !important;
  padding-right: 12rem !important;
}

.px-xs-11 {
  padding-left: 14rem !important;
  padding-right: 14rem !important;
}

.px-xs-12 {
  padding-left: 16rem !important;
  padding-right: 16rem !important;
}

.py-xs-6 {
  padding-top: 4rem !important;
  padding-bottom: 4rem !important;
}

.py-xs-7 {
  padding-top: 6rem !important;
  padding-bottom: 6rem !important;
}

.py-xs-8 {
  padding-top: 8rem !important;
  padding-bottom: 8rem !important;
}

.py-xs-9 {
  padding-top: 10rem !important;
  padding-bottom: 10rem !important;
}

.py-xs-10 {
  padding-top: 12rem !important;
  padding-bottom: 12rem !important;
}

.py-xs-11 {
  padding-top: 14rem !important;
  padding-bottom: 14rem !important;
}

.py-xs-12 {
  padding-top: 16rem !important;
  padding-bottom: 16rem !important;
}

.m-6 {
  margin: 4rem !important;
}

.m-7 {
  margin: 6rem !important;
}

.m-8 {
  margin: 8rem !important;
}

.m-9 {
  margin: 10rem !important;
}

.m-10 {
  margin: 12rem !important;
}

.m-11 {
  margin: 14rem !important;
}

.m-12 {
  margin: 16rem !important;
}

.mt-6 {
  margin-top: 4rem !important;
}

.mt-7 {
  margin-top: 6rem !important;
}

.mt-8 {
  margin-top: 8rem !important;
}

.mt-9 {
  margin-top: 10rem !important;
}

.mt-10 {
  margin-top: 12rem !important;
}

.mt-11 {
  margin-top: 14rem !important;
}

.mt-12 {
  margin-top: 16rem !important;
}

.me-6 {
  margin-right: 4rem !important;
}

.me-7 {
  margin-right: 6rem !important;
}

.me-8 {
  margin-right: 8rem !important;
}

.me-9 {
  margin-right: 10rem !important;
}

.me-10 {
  margin-right: 12rem !important;
}

.me-11 {
  margin-right: 14rem !important;
}

.me-12 {
  margin-right: 16rem !important;
}

.mb-6 {
  margin-bottom: 4rem !important;
}

.mb-7 {
  margin-bottom: 6rem !important;
}

.mb-8 {
  margin-bottom: 8rem !important;
}

.mb-9 {
  margin-bottom: 10rem !important;
}

.mb-10 {
  margin-bottom: 12rem !important;
}

.mb-11 {
  margin-bottom: 14rem !important;
}

.mb-12 {
  margin-bottom: 16rem !important;
}

.ms-6 {
  margin-left: 4rem !important;
}

.ms-7 {
  margin-left: 6rem !important;
}

.ms-8 {
  margin-left: 8rem !important;
}

.ms-9 {
  margin-left: 10rem !important;
}

.ms-10 {
  margin-left: 12rem !important;
}

.ms-11 {
  margin-left: 14rem !important;
}

.ms-12 {
  margin-left: 16rem !important;
}

.mx-6 {
  margin-left: 4rem !important;
  margin-right: 4rem !important;
}

.mx-7 {
  margin-left: 6rem !important;
  margin-right: 6rem !important;
}

.mx-8 {
  margin-left: 8rem !important;
  margin-right: 8rem !important;
}

.mx-9 {
  margin-left: 10rem !important;
  margin-right: 10rem !important;
}

.mx-10 {
  margin-left: 12rem !important;
  margin-right: 12rem !important;
}

.mx-11 {
  margin-left: 14rem !important;
  margin-right: 14rem !important;
}

.mx-12 {
  margin-left: 16rem !important;
  margin-right: 16rem !important;
}

.my-6 {
  margin-top: 4rem !important;
  margin-bottom: 4rem !important;
}

.my-7 {
  margin-top: 6rem !important;
  margin-bottom: 6rem !important;
}

.my-8 {
  margin-top: 8rem !important;
  margin-bottom: 8rem !important;
}

.my-9 {
  margin-top: 10rem !important;
  margin-bottom: 10rem !important;
}

.my-10 {
  margin-top: 12rem !important;
  margin-bottom: 12rem !important;
}

.my-11 {
  margin-top: 14rem !important;
  margin-bottom: 14rem !important;
}

.my-12 {
  margin-top: 16rem !important;
  margin-bottom: 16rem !important;
}

.m-xs-6 {
  margin: 4rem !important;
}

.m-xs-7 {
  margin: 6rem !important;
}

.m-xs-8 {
  margin: 8rem !important;
}

.m-xs-9 {
  margin: 10rem !important;
}

.m-xs-10 {
  margin: 12rem !important;
}

.m-xs-11 {
  margin: 14rem !important;
}

.m-xs-12 {
  margin: 16rem !important;
}

.mt-xs-6 {
  margin-top: 4rem !important;
}

.mt-xs-7 {
  margin-top: 6rem !important;
}

.mt-xs-8 {
  margin-top: 8rem !important;
}

.mt-xs-9 {
  margin-top: 10rem !important;
}

.mt-xs-10 {
  margin-top: 12rem !important;
}

.mt-xs-11 {
  margin-top: 14rem !important;
}

.mt-xs-12 {
  margin-top: 16rem !important;
}

.me-xs-6 {
  margin-right: 4rem !important;
}

.me-xs-7 {
  margin-right: 6rem !important;
}

.me-xs-8 {
  margin-right: 8rem !important;
}

.me-xs-9 {
  margin-right: 10rem !important;
}

.me-xs-10 {
  margin-right: 12rem !important;
}

.me-xs-11 {
  margin-right: 14rem !important;
}

.me-xs-12 {
  margin-right: 16rem !important;
}

.mb-xs-6 {
  margin-bottom: 4rem !important;
}

.mb-xs-7 {
  margin-bottom: 6rem !important;
}

.mb-xs-8 {
  margin-bottom: 8rem !important;
}

.mb-xs-9 {
  margin-bottom: 10rem !important;
}

.mb-xs-10 {
  margin-bottom: 12rem !important;
}

.mb-xs-11 {
  margin-bottom: 14rem !important;
}

.mb-xs-12 {
  margin-bottom: 16rem !important;
}

.ms-xs-6 {
  margin-left: 4rem !important;
}

.ms-xs-7 {
  margin-left: 6rem !important;
}

.ms-xs-8 {
  margin-left: 8rem !important;
}

.ms-xs-9 {
  margin-left: 10rem !important;
}

.ms-xs-10 {
  margin-left: 12rem !important;
}

.ms-xs-11 {
  margin-left: 14rem !important;
}

.ms-xs-12 {
  margin-left: 16rem !important;
}

.mx-xs-6 {
  margin-left: 4rem !important;
  margin-right: 4rem !important;
}

.mx-xs-7 {
  margin-left: 6rem !important;
  margin-right: 6rem !important;
}

.mx-xs-8 {
  margin-left: 8rem !important;
  margin-right: 8rem !important;
}

.mx-xs-9 {
  margin-left: 10rem !important;
  margin-right: 10rem !important;
}

.mx-xs-10 {
  margin-left: 12rem !important;
  margin-right: 12rem !important;
}

.mx-xs-11 {
  margin-left: 14rem !important;
  margin-right: 14rem !important;
}

.mx-xs-12 {
  margin-left: 16rem !important;
  margin-right: 16rem !important;
}

.my-xs-6 {
  margin-top: 4rem !important;
  margin-bottom: 4rem !important;
}

.my-xs-7 {
  margin-top: 6rem !important;
  margin-bottom: 6rem !important;
}

.my-xs-8 {
  margin-top: 8rem !important;
  margin-bottom: 8rem !important;
}

.my-xs-9 {
  margin-top: 10rem !important;
  margin-bottom: 10rem !important;
}

.my-xs-10 {
  margin-top: 12rem !important;
  margin-bottom: 12rem !important;
}

.my-xs-11 {
  margin-top: 14rem !important;
  margin-bottom: 14rem !important;
}

.my-xs-12 {
  margin-top: 16rem !important;
  margin-bottom: 16rem !important;
}

@media (min-width: 576px) {
  .m-sm-6 {
    margin: 4rem !important;
  }

  .m-sm-7 {
    margin: 6rem !important;
  }

  .m-sm-8 {
    margin: 8rem !important;
  }

  .m-sm-9 {
    margin: 10rem !important;
  }

  .m-sm-10 {
    margin: 12rem !important;
  }

  .m-sm-11 {
    margin: 14rem !important;
  }

  .m-sm-12 {
    margin: 16rem !important;
  }
}

@media (min-width: 576px) {
  .mt-sm-6 {
    margin-top: 4rem !important;
  }

  .mt-sm-7 {
    margin-top: 6rem !important;
  }

  .mt-sm-8 {
    margin-top: 8rem !important;
  }

  .mt-sm-9 {
    margin-top: 10rem !important;
  }

  .mt-sm-10 {
    margin-top: 12rem !important;
  }

  .mt-sm-11 {
    margin-top: 14rem !important;
  }

  .mt-sm-12 {
    margin-top: 16rem !important;
  }
}

@media (min-width: 576px) {
  .me-sm-6 {
    margin-right: 4rem !important;
  }

  .me-sm-7 {
    margin-right: 6rem !important;
  }

  .me-sm-8 {
    margin-right: 8rem !important;
  }

  .me-sm-9 {
    margin-right: 10rem !important;
  }

  .me-sm-10 {
    margin-right: 12rem !important;
  }

  .me-sm-11 {
    margin-right: 14rem !important;
  }

  .me-sm-12 {
    margin-right: 16rem !important;
  }
}

@media (min-width: 576px) {
  .mb-sm-6 {
    margin-bottom: 4rem !important;
  }

  .mb-sm-7 {
    margin-bottom: 6rem !important;
  }

  .mb-sm-8 {
    margin-bottom: 8rem !important;
  }

  .mb-sm-9 {
    margin-bottom: 10rem !important;
  }

  .mb-sm-10 {
    margin-bottom: 12rem !important;
  }

  .mb-sm-11 {
    margin-bottom: 14rem !important;
  }

  .mb-sm-12 {
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 576px) {
  .ms-sm-6 {
    margin-left: 4rem !important;
  }

  .ms-sm-7 {
    margin-left: 6rem !important;
  }

  .ms-sm-8 {
    margin-left: 8rem !important;
  }

  .ms-sm-9 {
    margin-left: 10rem !important;
  }

  .ms-sm-10 {
    margin-left: 12rem !important;
  }

  .ms-sm-11 {
    margin-left: 14rem !important;
  }

  .ms-sm-12 {
    margin-left: 16rem !important;
  }
}

@media (min-width: 576px) {
  .mx-sm-6 {
    margin-left: 4rem !important;
    margin-right: 4rem !important;
  }

  .mx-sm-7 {
    margin-left: 6rem !important;
    margin-right: 6rem !important;
  }

  .mx-sm-8 {
    margin-left: 8rem !important;
    margin-right: 8rem !important;
  }

  .mx-sm-9 {
    margin-left: 10rem !important;
    margin-right: 10rem !important;
  }

  .mx-sm-10 {
    margin-left: 12rem !important;
    margin-right: 12rem !important;
  }

  .mx-sm-11 {
    margin-left: 14rem !important;
    margin-right: 14rem !important;
  }

  .mx-sm-12 {
    margin-left: 16rem !important;
    margin-right: 16rem !important;
  }
}

@media (min-width: 576px) {
  .my-sm-6 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }

  .my-sm-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }

  .my-sm-8 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }

  .my-sm-9 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }

  .my-sm-10 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }

  .my-sm-11 {
    margin-top: 14rem !important;
    margin-bottom: 14rem !important;
  }

  .my-sm-12 {
    margin-top: 16rem !important;
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 768px) {
  .m-md-6 {
    margin: 4rem !important;
  }

  .m-md-7 {
    margin: 6rem !important;
  }

  .m-md-8 {
    margin: 8rem !important;
  }

  .m-md-9 {
    margin: 10rem !important;
  }

  .m-md-10 {
    margin: 12rem !important;
  }

  .m-md-11 {
    margin: 14rem !important;
  }

  .m-md-12 {
    margin: 16rem !important;
  }
}

@media (min-width: 768px) {
  .mt-md-6 {
    margin-top: 4rem !important;
  }

  .mt-md-7 {
    margin-top: 6rem !important;
  }

  .mt-md-8 {
    margin-top: 8rem !important;
  }

  .mt-md-9 {
    margin-top: 10rem !important;
  }

  .mt-md-10 {
    margin-top: 12rem !important;
  }

  .mt-md-11 {
    margin-top: 14rem !important;
  }

  .mt-md-12 {
    margin-top: 16rem !important;
  }
}

@media (min-width: 768px) {
  .me-md-6 {
    margin-right: 4rem !important;
  }

  .me-md-7 {
    margin-right: 6rem !important;
  }

  .me-md-8 {
    margin-right: 8rem !important;
  }

  .me-md-9 {
    margin-right: 10rem !important;
  }

  .me-md-10 {
    margin-right: 12rem !important;
  }

  .me-md-11 {
    margin-right: 14rem !important;
  }

  .me-md-12 {
    margin-right: 16rem !important;
  }
}

@media (min-width: 768px) {
  .mb-md-6 {
    margin-bottom: 4rem !important;
  }

  .mb-md-7 {
    margin-bottom: 6rem !important;
  }

  .mb-md-8 {
    margin-bottom: 8rem !important;
  }

  .mb-md-9 {
    margin-bottom: 10rem !important;
  }

  .mb-md-10 {
    margin-bottom: 12rem !important;
  }

  .mb-md-11 {
    margin-bottom: 14rem !important;
  }

  .mb-md-12 {
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 768px) {
  .ms-md-6 {
    margin-left: 4rem !important;
  }

  .ms-md-7 {
    margin-left: 6rem !important;
  }

  .ms-md-8 {
    margin-left: 8rem !important;
  }

  .ms-md-9 {
    margin-left: 10rem !important;
  }

  .ms-md-10 {
    margin-left: 12rem !important;
  }

  .ms-md-11 {
    margin-left: 14rem !important;
  }

  .ms-md-12 {
    margin-left: 16rem !important;
  }
}

@media (min-width: 768px) {
  .mx-md-6 {
    margin-left: 4rem !important;
    margin-right: 4rem !important;
  }

  .mx-md-7 {
    margin-left: 6rem !important;
    margin-right: 6rem !important;
  }

  .mx-md-8 {
    margin-left: 8rem !important;
    margin-right: 8rem !important;
  }

  .mx-md-9 {
    margin-left: 10rem !important;
    margin-right: 10rem !important;
  }

  .mx-md-10 {
    margin-left: 12rem !important;
    margin-right: 12rem !important;
  }

  .mx-md-11 {
    margin-left: 14rem !important;
    margin-right: 14rem !important;
  }

  .mx-md-12 {
    margin-left: 16rem !important;
    margin-right: 16rem !important;
  }
}

@media (min-width: 768px) {
  .my-md-6 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }

  .my-md-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }

  .my-md-8 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }

  .my-md-9 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }

  .my-md-10 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }

  .my-md-11 {
    margin-top: 14rem !important;
    margin-bottom: 14rem !important;
  }

  .my-md-12 {
    margin-top: 16rem !important;
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 992px) {
  .m-lg-6 {
    margin: 4rem !important;
  }

  .m-lg-7 {
    margin: 6rem !important;
  }

  .m-lg-8 {
    margin: 8rem !important;
  }

  .m-lg-9 {
    margin: 10rem !important;
  }

  .m-lg-10 {
    margin: 12rem !important;
  }

  .m-lg-11 {
    margin: 14rem !important;
  }

  .m-lg-12 {
    margin: 16rem !important;
  }
}

@media (min-width: 992px) {
  .mt-lg-6 {
    margin-top: 4rem !important;
  }

  .mt-lg-7 {
    margin-top: 6rem !important;
  }

  .mt-lg-8 {
    margin-top: 8rem !important;
  }

  .mt-lg-9 {
    margin-top: 10rem !important;
  }

  .mt-lg-10 {
    margin-top: 12rem !important;
  }

  .mt-lg-11 {
    margin-top: 14rem !important;
  }

  .mt-lg-12 {
    margin-top: 16rem !important;
  }
}

@media (min-width: 992px) {
  .me-lg-6 {
    margin-right: 4rem !important;
  }

  .me-lg-7 {
    margin-right: 6rem !important;
  }

  .me-lg-8 {
    margin-right: 8rem !important;
  }

  .me-lg-9 {
    margin-right: 10rem !important;
  }

  .me-lg-10 {
    margin-right: 12rem !important;
  }

  .me-lg-11 {
    margin-right: 14rem !important;
  }

  .me-lg-12 {
    margin-right: 16rem !important;
  }
}

@media (min-width: 992px) {
  .mb-lg-6 {
    margin-bottom: 4rem !important;
  }

  .mb-lg-7 {
    margin-bottom: 6rem !important;
  }

  .mb-lg-8 {
    margin-bottom: 8rem !important;
  }

  .mb-lg-9 {
    margin-bottom: 10rem !important;
  }

  .mb-lg-10 {
    margin-bottom: 12rem !important;
  }

  .mb-lg-11 {
    margin-bottom: 14rem !important;
  }

  .mb-lg-12 {
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 992px) {
  .ms-lg-6 {
    margin-left: 4rem !important;
  }

  .ms-lg-7 {
    margin-left: 6rem !important;
  }

  .ms-lg-8 {
    margin-left: 8rem !important;
  }

  .ms-lg-9 {
    margin-left: 10rem !important;
  }

  .ms-lg-10 {
    margin-left: 12rem !important;
  }

  .ms-lg-11 {
    margin-left: 14rem !important;
  }

  .ms-lg-12 {
    margin-left: 16rem !important;
  }
}

@media (min-width: 992px) {
  .mx-lg-6 {
    margin-left: 4rem !important;
    margin-right: 4rem !important;
  }

  .mx-lg-7 {
    margin-left: 6rem !important;
    margin-right: 6rem !important;
  }

  .mx-lg-8 {
    margin-left: 8rem !important;
    margin-right: 8rem !important;
  }

  .mx-lg-9 {
    margin-left: 10rem !important;
    margin-right: 10rem !important;
  }

  .mx-lg-10 {
    margin-left: 12rem !important;
    margin-right: 12rem !important;
  }

  .mx-lg-11 {
    margin-left: 14rem !important;
    margin-right: 14rem !important;
  }

  .mx-lg-12 {
    margin-left: 16rem !important;
    margin-right: 16rem !important;
  }
}

@media (min-width: 992px) {
  .my-lg-6 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }

  .my-lg-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }

  .my-lg-8 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }

  .my-lg-9 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }

  .my-lg-10 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }

  .my-lg-11 {
    margin-top: 14rem !important;
    margin-bottom: 14rem !important;
  }

  .my-lg-12 {
    margin-top: 16rem !important;
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-6 {
    margin: 4rem !important;
  }

  .m-xl-7 {
    margin: 6rem !important;
  }

  .m-xl-8 {
    margin: 8rem !important;
  }

  .m-xl-9 {
    margin: 10rem !important;
  }

  .m-xl-10 {
    margin: 12rem !important;
  }

  .m-xl-11 {
    margin: 14rem !important;
  }

  .m-xl-12 {
    margin: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .mt-xl-6 {
    margin-top: 4rem !important;
  }

  .mt-xl-7 {
    margin-top: 6rem !important;
  }

  .mt-xl-8 {
    margin-top: 8rem !important;
  }

  .mt-xl-9 {
    margin-top: 10rem !important;
  }

  .mt-xl-10 {
    margin-top: 12rem !important;
  }

  .mt-xl-11 {
    margin-top: 14rem !important;
  }

  .mt-xl-12 {
    margin-top: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .me-xl-6 {
    margin-right: 4rem !important;
  }

  .me-xl-7 {
    margin-right: 6rem !important;
  }

  .me-xl-8 {
    margin-right: 8rem !important;
  }

  .me-xl-9 {
    margin-right: 10rem !important;
  }

  .me-xl-10 {
    margin-right: 12rem !important;
  }

  .me-xl-11 {
    margin-right: 14rem !important;
  }

  .me-xl-12 {
    margin-right: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .mb-xl-6 {
    margin-bottom: 4rem !important;
  }

  .mb-xl-7 {
    margin-bottom: 6rem !important;
  }

  .mb-xl-8 {
    margin-bottom: 8rem !important;
  }

  .mb-xl-9 {
    margin-bottom: 10rem !important;
  }

  .mb-xl-10 {
    margin-bottom: 12rem !important;
  }

  .mb-xl-11 {
    margin-bottom: 14rem !important;
  }

  .mb-xl-12 {
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .ms-xl-6 {
    margin-left: 4rem !important;
  }

  .ms-xl-7 {
    margin-left: 6rem !important;
  }

  .ms-xl-8 {
    margin-left: 8rem !important;
  }

  .ms-xl-9 {
    margin-left: 10rem !important;
  }

  .ms-xl-10 {
    margin-left: 12rem !important;
  }

  .ms-xl-11 {
    margin-left: 14rem !important;
  }

  .ms-xl-12 {
    margin-left: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .mx-xl-6 {
    margin-left: 4rem !important;
    margin-right: 4rem !important;
  }

  .mx-xl-7 {
    margin-left: 6rem !important;
    margin-right: 6rem !important;
  }

  .mx-xl-8 {
    margin-left: 8rem !important;
    margin-right: 8rem !important;
  }

  .mx-xl-9 {
    margin-left: 10rem !important;
    margin-right: 10rem !important;
  }

  .mx-xl-10 {
    margin-left: 12rem !important;
    margin-right: 12rem !important;
  }

  .mx-xl-11 {
    margin-left: 14rem !important;
    margin-right: 14rem !important;
  }

  .mx-xl-12 {
    margin-left: 16rem !important;
    margin-right: 16rem !important;
  }
}

@media (min-width: 1200px) {
  .my-xl-6 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }

  .my-xl-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }

  .my-xl-8 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }

  .my-xl-9 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }

  .my-xl-10 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }

  .my-xl-11 {
    margin-top: 14rem !important;
    margin-bottom: 14rem !important;
  }

  .my-xl-12 {
    margin-top: 16rem !important;
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .m-xxl-6 {
    margin: 4rem !important;
  }

  .m-xxl-7 {
    margin: 6rem !important;
  }

  .m-xxl-8 {
    margin: 8rem !important;
  }

  .m-xxl-9 {
    margin: 10rem !important;
  }

  .m-xxl-10 {
    margin: 12rem !important;
  }

  .m-xxl-11 {
    margin: 14rem !important;
  }

  .m-xxl-12 {
    margin: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .mt-xxl-6 {
    margin-top: 4rem !important;
  }

  .mt-xxl-7 {
    margin-top: 6rem !important;
  }

  .mt-xxl-8 {
    margin-top: 8rem !important;
  }

  .mt-xxl-9 {
    margin-top: 10rem !important;
  }

  .mt-xxl-10 {
    margin-top: 12rem !important;
  }

  .mt-xxl-11 {
    margin-top: 14rem !important;
  }

  .mt-xxl-12 {
    margin-top: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .me-xxl-6 {
    margin-right: 4rem !important;
  }

  .me-xxl-7 {
    margin-right: 6rem !important;
  }

  .me-xxl-8 {
    margin-right: 8rem !important;
  }

  .me-xxl-9 {
    margin-right: 10rem !important;
  }

  .me-xxl-10 {
    margin-right: 12rem !important;
  }

  .me-xxl-11 {
    margin-right: 14rem !important;
  }

  .me-xxl-12 {
    margin-right: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .mb-xxl-6 {
    margin-bottom: 4rem !important;
  }

  .mb-xxl-7 {
    margin-bottom: 6rem !important;
  }

  .mb-xxl-8 {
    margin-bottom: 8rem !important;
  }

  .mb-xxl-9 {
    margin-bottom: 10rem !important;
  }

  .mb-xxl-10 {
    margin-bottom: 12rem !important;
  }

  .mb-xxl-11 {
    margin-bottom: 14rem !important;
  }

  .mb-xxl-12 {
    margin-bottom: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .ms-xxl-6 {
    margin-left: 4rem !important;
  }

  .ms-xxl-7 {
    margin-left: 6rem !important;
  }

  .ms-xxl-8 {
    margin-left: 8rem !important;
  }

  .ms-xxl-9 {
    margin-left: 10rem !important;
  }

  .ms-xxl-10 {
    margin-left: 12rem !important;
  }

  .ms-xxl-11 {
    margin-left: 14rem !important;
  }

  .ms-xxl-12 {
    margin-left: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .mx-xxl-6 {
    margin-left: 4rem !important;
    margin-right: 4rem !important;
  }

  .mx-xxl-7 {
    margin-left: 6rem !important;
    margin-right: 6rem !important;
  }

  .mx-xxl-8 {
    margin-left: 8rem !important;
    margin-right: 8rem !important;
  }

  .mx-xxl-9 {
    margin-left: 10rem !important;
    margin-right: 10rem !important;
  }

  .mx-xxl-10 {
    margin-left: 12rem !important;
    margin-right: 12rem !important;
  }

  .mx-xxl-11 {
    margin-left: 14rem !important;
    margin-right: 14rem !important;
  }

  .mx-xxl-12 {
    margin-left: 16rem !important;
    margin-right: 16rem !important;
  }
}

@media (min-width: 1400px) {
  .my-xxl-6 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }

  .my-xxl-7 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }

  .my-xxl-8 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }

  .my-xxl-9 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }

  .my-xxl-10 {
    margin-top: 12rem !important;
    margin-bottom: 12rem !important;
  }

  .my-xxl-11 {
    margin-top: 14rem !important;
    margin-bottom: 14rem !important;
  }

  .my-xxl-12 {
    margin-top: 16rem !important;
    margin-bottom: 16rem !important;
  }
}

.mt-n6 {
  margin-top: -4rem !important;
}

.mt-n7 {
  margin-top: -6rem !important;
}

.mt-n8 {
  margin-top: -8rem !important;
}

.mt-n9 {
  margin-top: -10rem !important;
}

.mt-n10 {
  margin-top: -12rem !important;
}

.mt-n11 {
  margin-top: -14rem !important;
}

.mt-n12 {
  margin-top: -16rem !important;
}

.me-n6 {
  margin-right: -4rem !important;
}

.me-n7 {
  margin-right: -6rem !important;
}

.me-n8 {
  margin-right: -8rem !important;
}

.me-n9 {
  margin-right: -10rem !important;
}

.me-n10 {
  margin-right: -12rem !important;
}

.me-n11 {
  margin-right: -14rem !important;
}

.me-n12 {
  margin-right: -16rem !important;
}

.mb-n6 {
  margin-bottom: -4rem !important;
}

.mb-n7 {
  margin-bottom: -6rem !important;
}

.mb-n8 {
  margin-bottom: -8rem !important;
}

.mb-n9 {
  margin-bottom: -10rem !important;
}

.mb-n10 {
  margin-bottom: -12rem !important;
}

.mb-n11 {
  margin-bottom: -14rem !important;
}

.mb-n12 {
  margin-bottom: -16rem !important;
}

.ms-n6 {
  margin-left: -4rem !important;
}

.ms-n7 {
  margin-left: -6rem !important;
}

.ms-n8 {
  margin-left: -8rem !important;
}

.ms-n9 {
  margin-left: -10rem !important;
}

.ms-n10 {
  margin-left: -12rem !important;
}

.ms-n11 {
  margin-left: -14rem !important;
}

.ms-n12 {
  margin-left: -16rem !important;
}

.mt-xs-n6 {
  margin-top: -4rem !important;
}

.me-xs-n6 {
  margin-right: -4rem !important;
}

.mb-xs-n6 {
  margin-bottom: -4rem !important;
}

.ms-xs-n6 {
  margin-left: -4rem !important;
}

.mt-xs-n7 {
  margin-top: -6rem !important;
}

.me-xs-n7 {
  margin-right: -6rem !important;
}

.mb-xs-n7 {
  margin-bottom: -6rem !important;
}

.ms-xs-n7 {
  margin-left: -6rem !important;
}

.mt-xs-n8 {
  margin-top: -8rem !important;
}

.me-xs-n8 {
  margin-right: -8rem !important;
}

.mb-xs-n8 {
  margin-bottom: -8rem !important;
}

.ms-xs-n8 {
  margin-left: -8rem !important;
}

.mt-xs-n9 {
  margin-top: -10rem !important;
}

.me-xs-n9 {
  margin-right: -10rem !important;
}

.mb-xs-n9 {
  margin-bottom: -10rem !important;
}

.ms-xs-n9 {
  margin-left: -10rem !important;
}

.mt-xs-n10 {
  margin-top: -12rem !important;
}

.me-xs-n10 {
  margin-right: -12rem !important;
}

.mb-xs-n10 {
  margin-bottom: -12rem !important;
}

.ms-xs-n10 {
  margin-left: -12rem !important;
}

.mt-xs-n11 {
  margin-top: -14rem !important;
}

.me-xs-n11 {
  margin-right: -14rem !important;
}

.mb-xs-n11 {
  margin-bottom: -14rem !important;
}

.ms-xs-n11 {
  margin-left: -14rem !important;
}

.mt-xs-n12 {
  margin-top: -16rem !important;
}

.me-xs-n12 {
  margin-right: -16rem !important;
}

.mb-xs-n12 {
  margin-bottom: -16rem !important;
}

.ms-xs-n12 {
  margin-left: -16rem !important;
}

@media (min-width: 576px) {
  .mt-sm-n6 {
    margin-top: -4rem !important;
  }

  .me-sm-n6 {
    margin-right: -4rem !important;
  }

  .mb-sm-n6 {
    margin-bottom: -4rem !important;
  }

  .ms-sm-n6 {
    margin-left: -4rem !important;
  }

  .mt-sm-n7 {
    margin-top: -6rem !important;
  }

  .me-sm-n7 {
    margin-right: -6rem !important;
  }

  .mb-sm-n7 {
    margin-bottom: -6rem !important;
  }

  .ms-sm-n7 {
    margin-left: -6rem !important;
  }

  .mt-sm-n8 {
    margin-top: -8rem !important;
  }

  .me-sm-n8 {
    margin-right: -8rem !important;
  }

  .mb-sm-n8 {
    margin-bottom: -8rem !important;
  }

  .ms-sm-n8 {
    margin-left: -8rem !important;
  }

  .mt-sm-n9 {
    margin-top: -10rem !important;
  }

  .me-sm-n9 {
    margin-right: -10rem !important;
  }

  .mb-sm-n9 {
    margin-bottom: -10rem !important;
  }

  .ms-sm-n9 {
    margin-left: -10rem !important;
  }

  .mt-sm-n10 {
    margin-top: -12rem !important;
  }

  .me-sm-n10 {
    margin-right: -12rem !important;
  }

  .mb-sm-n10 {
    margin-bottom: -12rem !important;
  }

  .ms-sm-n10 {
    margin-left: -12rem !important;
  }

  .mt-sm-n11 {
    margin-top: -14rem !important;
  }

  .me-sm-n11 {
    margin-right: -14rem !important;
  }

  .mb-sm-n11 {
    margin-bottom: -14rem !important;
  }

  .ms-sm-n11 {
    margin-left: -14rem !important;
  }

  .mt-sm-n12 {
    margin-top: -16rem !important;
  }

  .me-sm-n12 {
    margin-right: -16rem !important;
  }

  .mb-sm-n12 {
    margin-bottom: -16rem !important;
  }

  .ms-sm-n12 {
    margin-left: -16rem !important;
  }
}

@media (min-width: 768px) {
  .mt-md-n6 {
    margin-top: -4rem !important;
  }

  .me-md-n6 {
    margin-right: -4rem !important;
  }

  .mb-md-n6 {
    margin-bottom: -4rem !important;
  }

  .ms-md-n6 {
    margin-left: -4rem !important;
  }

  .mt-md-n7 {
    margin-top: -6rem !important;
  }

  .me-md-n7 {
    margin-right: -6rem !important;
  }

  .mb-md-n7 {
    margin-bottom: -6rem !important;
  }

  .ms-md-n7 {
    margin-left: -6rem !important;
  }

  .mt-md-n8 {
    margin-top: -8rem !important;
  }

  .me-md-n8 {
    margin-right: -8rem !important;
  }

  .mb-md-n8 {
    margin-bottom: -8rem !important;
  }

  .ms-md-n8 {
    margin-left: -8rem !important;
  }

  .mt-md-n9 {
    margin-top: -10rem !important;
  }

  .me-md-n9 {
    margin-right: -10rem !important;
  }

  .mb-md-n9 {
    margin-bottom: -10rem !important;
  }

  .ms-md-n9 {
    margin-left: -10rem !important;
  }

  .mt-md-n10 {
    margin-top: -12rem !important;
  }

  .me-md-n10 {
    margin-right: -12rem !important;
  }

  .mb-md-n10 {
    margin-bottom: -12rem !important;
  }

  .ms-md-n10 {
    margin-left: -12rem !important;
  }

  .mt-md-n11 {
    margin-top: -14rem !important;
  }

  .me-md-n11 {
    margin-right: -14rem !important;
  }

  .mb-md-n11 {
    margin-bottom: -14rem !important;
  }

  .ms-md-n11 {
    margin-left: -14rem !important;
  }

  .mt-md-n12 {
    margin-top: -16rem !important;
  }

  .me-md-n12 {
    margin-right: -16rem !important;
  }

  .mb-md-n12 {
    margin-bottom: -16rem !important;
  }

  .ms-md-n12 {
    margin-left: -16rem !important;
  }
}

@media (min-width: 992px) {
  .mt-lg-n6 {
    margin-top: -4rem !important;
  }

  .me-lg-n6 {
    margin-right: -4rem !important;
  }

  .mb-lg-n6 {
    margin-bottom: -4rem !important;
  }

  .ms-lg-n6 {
    margin-left: -4rem !important;
  }

  .mt-lg-n7 {
    margin-top: -6rem !important;
  }

  .me-lg-n7 {
    margin-right: -6rem !important;
  }

  .mb-lg-n7 {
    margin-bottom: -6rem !important;
  }

  .ms-lg-n7 {
    margin-left: -6rem !important;
  }

  .mt-lg-n8 {
    margin-top: -8rem !important;
  }

  .me-lg-n8 {
    margin-right: -8rem !important;
  }

  .mb-lg-n8 {
    margin-bottom: -8rem !important;
  }

  .ms-lg-n8 {
    margin-left: -8rem !important;
  }

  .mt-lg-n9 {
    margin-top: -10rem !important;
  }

  .me-lg-n9 {
    margin-right: -10rem !important;
  }

  .mb-lg-n9 {
    margin-bottom: -10rem !important;
  }

  .ms-lg-n9 {
    margin-left: -10rem !important;
  }

  .mt-lg-n10 {
    margin-top: -12rem !important;
  }

  .me-lg-n10 {
    margin-right: -12rem !important;
  }

  .mb-lg-n10 {
    margin-bottom: -12rem !important;
  }

  .ms-lg-n10 {
    margin-left: -12rem !important;
  }

  .mt-lg-n11 {
    margin-top: -14rem !important;
  }

  .me-lg-n11 {
    margin-right: -14rem !important;
  }

  .mb-lg-n11 {
    margin-bottom: -14rem !important;
  }

  .ms-lg-n11 {
    margin-left: -14rem !important;
  }

  .mt-lg-n12 {
    margin-top: -16rem !important;
  }

  .me-lg-n12 {
    margin-right: -16rem !important;
  }

  .mb-lg-n12 {
    margin-bottom: -16rem !important;
  }

  .ms-lg-n12 {
    margin-left: -16rem !important;
  }
}

@media (min-width: 1200px) {
  .mt-xl-n6 {
    margin-top: -4rem !important;
  }

  .me-xl-n6 {
    margin-right: -4rem !important;
  }

  .mb-xl-n6 {
    margin-bottom: -4rem !important;
  }

  .ms-xl-n6 {
    margin-left: -4rem !important;
  }

  .mt-xl-n7 {
    margin-top: -6rem !important;
  }

  .me-xl-n7 {
    margin-right: -6rem !important;
  }

  .mb-xl-n7 {
    margin-bottom: -6rem !important;
  }

  .ms-xl-n7 {
    margin-left: -6rem !important;
  }

  .mt-xl-n8 {
    margin-top: -8rem !important;
  }

  .me-xl-n8 {
    margin-right: -8rem !important;
  }

  .mb-xl-n8 {
    margin-bottom: -8rem !important;
  }

  .ms-xl-n8 {
    margin-left: -8rem !important;
  }

  .mt-xl-n9 {
    margin-top: -10rem !important;
  }

  .me-xl-n9 {
    margin-right: -10rem !important;
  }

  .mb-xl-n9 {
    margin-bottom: -10rem !important;
  }

  .ms-xl-n9 {
    margin-left: -10rem !important;
  }

  .mt-xl-n10 {
    margin-top: -12rem !important;
  }

  .me-xl-n10 {
    margin-right: -12rem !important;
  }

  .mb-xl-n10 {
    margin-bottom: -12rem !important;
  }

  .ms-xl-n10 {
    margin-left: -12rem !important;
  }

  .mt-xl-n11 {
    margin-top: -14rem !important;
  }

  .me-xl-n11 {
    margin-right: -14rem !important;
  }

  .mb-xl-n11 {
    margin-bottom: -14rem !important;
  }

  .ms-xl-n11 {
    margin-left: -14rem !important;
  }

  .mt-xl-n12 {
    margin-top: -16rem !important;
  }

  .me-xl-n12 {
    margin-right: -16rem !important;
  }

  .mb-xl-n12 {
    margin-bottom: -16rem !important;
  }

  .ms-xl-n12 {
    margin-left: -16rem !important;
  }
}

@media (min-width: 1400px) {
  .mt-xxl-n6 {
    margin-top: -4rem !important;
  }

  .me-xxl-n6 {
    margin-right: -4rem !important;
  }

  .mb-xxl-n6 {
    margin-bottom: -4rem !important;
  }

  .ms-xxl-n6 {
    margin-left: -4rem !important;
  }

  .mt-xxl-n7 {
    margin-top: -6rem !important;
  }

  .me-xxl-n7 {
    margin-right: -6rem !important;
  }

  .mb-xxl-n7 {
    margin-bottom: -6rem !important;
  }

  .ms-xxl-n7 {
    margin-left: -6rem !important;
  }

  .mt-xxl-n8 {
    margin-top: -8rem !important;
  }

  .me-xxl-n8 {
    margin-right: -8rem !important;
  }

  .mb-xxl-n8 {
    margin-bottom: -8rem !important;
  }

  .ms-xxl-n8 {
    margin-left: -8rem !important;
  }

  .mt-xxl-n9 {
    margin-top: -10rem !important;
  }

  .me-xxl-n9 {
    margin-right: -10rem !important;
  }

  .mb-xxl-n9 {
    margin-bottom: -10rem !important;
  }

  .ms-xxl-n9 {
    margin-left: -10rem !important;
  }

  .mt-xxl-n10 {
    margin-top: -12rem !important;
  }

  .me-xxl-n10 {
    margin-right: -12rem !important;
  }

  .mb-xxl-n10 {
    margin-bottom: -12rem !important;
  }

  .ms-xxl-n10 {
    margin-left: -12rem !important;
  }

  .mt-xxl-n11 {
    margin-top: -14rem !important;
  }

  .me-xxl-n11 {
    margin-right: -14rem !important;
  }

  .mb-xxl-n11 {
    margin-bottom: -14rem !important;
  }

  .ms-xxl-n11 {
    margin-left: -14rem !important;
  }

  .mt-xxl-n12 {
    margin-top: -16rem !important;
  }

  .me-xxl-n12 {
    margin-right: -16rem !important;
  }

  .mb-xxl-n12 {
    margin-bottom: -16rem !important;
  }

  .ms-xxl-n12 {
    margin-left: -16rem !important;
  }
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-1 {
  opacity: 0.1 !important;
}

.opacity-2 {
  opacity: 0.2 !important;
}

.opacity-3 {
  opacity: 0.3 !important;
}

.opacity-4 {
  opacity: 0.4 !important;
}

.opacity-5 {
  opacity: 0.5 !important;
}

.opacity-6 {
  opacity: 0.6 !important;
}

.opacity-7 {
  opacity: 0.7 !important;
}

.opacity-8 {
  opacity: 0.8 !important;
}

.opacity-9 {
  opacity: 0.9 !important;
}

.opacity-10 {
  opacity: 1 !important;
}

.end-0 {
  right: 0% !important;
}

.end-1 {
  right: 1% !important;
}

.end-2 {
  right: 2% !important;
}

.end-3 {
  right: 3% !important;
}

.end-4 {
  right: 4% !important;
}

.end-5 {
  right: 5% !important;
}

.end-6 {
  right: 6% !important;
}

.end-7 {
  right: 7% !important;
}

.end-8 {
  right: 8% !important;
}

.end-9 {
  right: 9% !important;
}

.end-10 {
  right: 10% !important;
}

.w-0 {
  width: 0% !important;
}

.w-1 {
  width: 1% !important;
}

.w-2 {
  width: 2% !important;
}

.w-3 {
  width: 3% !important;
}

.w-4 {
  width: 4% !important;
}

.w-5 {
  width: 5% !important;
}

.w-6 {
  width: 6% !important;
}

.w-7 {
  width: 7% !important;
}

.w-8 {
  width: 8% !important;
}

.w-9 {
  width: 9% !important;
}

.w-10 {
  width: 10% !important;
}

.w-15 {
  width: 15% !important;
}

.w-20 {
  width: 20% !important;
}

.w-25 {
  width: 25% !important;
}

.w-30 {
  width: 30% !important;
}

.w-35 {
  width: 35% !important;
}

.w-40 {
  width: 40% !important;
}

.w-45 {
  width: 45% !important;
}

.w-50 {
  width: 50% !important;
}

.w-55 {
  width: 55% !important;
}

.w-60 {
  width: 60% !important;
}

.w-65 {
  width: 65% !important;
}

.w-70 {
  width: 70% !important;
}

.w-75 {
  width: 75% !important;
}

.w-80 {
  width: 80% !important;
}

.w-85 {
  width: 85% !important;
}

.w-90 {
  width: 90% !important;
}

.w-95 {
  width: 95% !important;
}

.w-100 {
  width: 100% !important;
}

.max-width-100 {
  max-width: 100px !important;
}

.max-width-200 {
  max-width: 200px !important;
}

.max-width-300 {
  max-width: 300px !important;
}

.max-width-400 {
  max-width: 400px !important;
}

.max-width-500 {
  max-width: 500px !important;
}

.height-100 {
  height: 100px !important;
}

.height-200 {
  height: 200px !important;
}

.height-300 {
  height: 300px !important;
}

.height-400 {
  height: 400px !important;
}

.height-500 {
  height: 500px !important;
}

.height-600 {
  height: 600px !important;
}

.max-height-100 {
  max-height: 100px !important;
}

.max-height-150 {
  max-height: 150px !important;
}

.max-height-160 {
  max-height: 160px !important;
}

.max-height-200 {
  max-height: 200px !important;
}

.max-height-250 {
  max-height: 200px !important;
}

.max-height-300 {
  max-height: 300px !important;
}

.max-height-400 {
  max-height: 400px !important;
}

.max-height-500 {
  max-height: 500px !important;
}

.max-height-600 {
  max-height: 600px !important;
}

.min-height-100 {
  min-height: 100px !important;
}

.min-height-150 {
  min-height: 150px !important;
}

.min-height-160 {
  min-height: 160px !important;
}

.min-height-200 {
  min-height: 200px !important;
}

.min-height-250 {
  min-height: 200px !important;
}

.min-height-300 {
  min-height: 300px !important;
}

.min-height-400 {
  min-height: 400px !important;
}

.min-height-500 {
  min-height: 500px !important;
}

.min-height-600 {
  min-height: 600px !important;
}

.bg-gray {
  background: #adb5bd;
}

.bg-gray-100 {
  background-color: #f8f9fa !important;
}

.bg-gray-200 {
  background-color: #e9ecef !important;
}

.bg-gray-300 {
  background-color: #dee2e6 !important;
}

.bg-gray-400 {
  background-color: #ced4da !important;
}

.bg-gray-500 {
  background-color: #adb5bd !important;
}

.bg-gray-600 {
  background-color: #6c757d !important;
}

.bg-gray-700 {
  background-color: #495057 !important;
}

.bg-gray-800 {
  background-color: #343a40 !important;
}

.bg-gray-900 {
  background-color: #212529 !important;
}

.letter-spacing-1 {
  letter-spacing: 1px !important;
}

.letter-spacing-2 {
  letter-spacing: 2px !important;
}

.letter-spacing-3 {
  letter-spacing: 3px !important;
}

.letter-spacing-4 {
  letter-spacing: 4px !important;
}

.letter-spacing-5 {
  letter-spacing: 5px !important;
}

.top-0 {
  top: 0 !important;
}

.top-1 {
  top: 1rem !important;
}

.top-2 {
  top: 2rem !important;
}

.top-3 {
  top: 3rem !important;
}

.top-4 {
  top: 4rem !important;
}

.top-5 {
  top: 5rem !important;
}

.right-0 {
  right: 0 !important;
}

.right-1 {
  right: 1rem !important;
}

.right-2 {
  right: 2rem !important;
}

.right-3 {
  right: 3rem !important;
}

.right-4 {
  right: 4rem !important;
}

.right-5 {
  right: 5rem !important;
}

.left-0 {
  left: 0 !important;
}

.left-1 {
  left: 1rem !important;
}

.left-2 {
  left: 2rem !important;
}

.left-3 {
  left: 3rem !important;
}

.left-4 {
  left: 4rem !important;
}

.left-5 {
  left: 5rem !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-1 {
  bottom: 1rem !important;
}

.bottom-2 {
  bottom: 2rem !important;
}

.bottom-3 {
  bottom: 3rem !important;
}

.bottom-4 {
  bottom: 4rem !important;
}

.bottom-5 {
  bottom: 5rem !important;
}

.left-auto {
  left: auto;
}

.right-auto {
  right: auto;
}

.fixed-plugin .fixed-plugin-button {
  background: #fff;
  border-radius: 50%;
  bottom: 30px;
  right: 30px;
  font-size: 1.25rem;
  z-index: 990;
  box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.16);
  cursor: pointer;
}

.fixed-plugin .fixed-plugin-button i {
  pointer-events: none;
}

.fixed-plugin .card {
  position: fixed !important;
  right: -360px;
  top: 0;
  height: 100%;
  left: auto !important;
  transform: unset !important;
  width: 360px;
  border-radius: 0;
  padding: 0 10px;
  transition: .2s ease;
  z-index: 1020;
}

.fixed-plugin .badge {
  border: 1px solid #fff;
  border-radius: 50%;
  cursor: pointer;
  display: inline-block;
  height: 23px;
  margin-right: 5px;
  position: relative;
  width: 23px;
  transition: all 0.2s ease-in-out;
}

.fixed-plugin .badge:hover,
.fixed-plugin .badge.active {
  border-color: #252f40;
}

.fixed-plugin .btn.bg-gradient-primary:not(:disabled):not(.disabled) {
  border: 1px solid transparent;
}

.fixed-plugin .btn.bg-gradient-primary:not(:disabled):not(.disabled):not(.active) {
  background-color: transparent;
  background-image: none;
  border: 1px solid #cb0c9f;
  color: #cb0c9f;
}

.fixed-plugin.show .card {
  right: 0;
}

@media (max-width: 767.98px) {
  .navbar-collapse {
    position: relative;
  }

  .navbar-collapse .navbar-nav {
    width: 100%;
  }

  .navbar-collapse .navbar-nav .nav-item.dropdown {
    position: static;
  }

  .navbar-collapse .navbar-nav .nav-item.dropdown .dropdown-menu {
    left: 0;
    right: 0;
  }

  .navbar-collapse .navbar-nav .nav-item.dropdown .dropdown-menu.show:before {
    content: none;
  }
}

@media (max-width: 575.98px) {
  .navbar-nav .nav-item.dropdown .dropdown-menu {
    left: 0;
    right: auto;
  }
}

.navbar-vertical .navbar-brand-img,
.navbar-vertical .navbar-brand>img {
  max-width: 100%;
  max-height: 2rem;
}

.navbar-vertical .navbar-nav .nav-link {
  padding-left: 1rem;
  padding-right: 1rem;
  font-weight: 500;
  color: #67748e;
}

.navbar-vertical .navbar-nav .nav-link>i {
  min-width: 1.8rem;
  font-size: .9375rem;
  line-height: 1.5rem;
}

.navbar-vertical .navbar-nav .nav-link .dropdown-menu {
  border: none;
}

.navbar-vertical .navbar-nav .nav-link .dropdown-menu .dropdown-menu {
  margin-left: 0.5rem;
}

.navbar-vertical .navbar-nav .nav-sm .nav-link {
  font-size: .8125rem;
}

.navbar-vertical .navbar-nav .nav-link {
  display: flex;
  align-items: center;
  white-space: nowrap;
}

.navbar-vertical .navbar-heading {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: .04em;
}

.navbar-vertical.navbar-expand-xs {
  display: block;
  position: fixed;
  top: 0;
  bottom: 0;
  width: 100%;
  max-width: 15.625rem !important;
  overflow-y: auto;
  padding: 0;
  box-shadow: none;
}

.navbar-vertical.navbar-expand-xs .navbar-collapse {
  display: block;
  overflow: auto;
  height: calc(100vh - 360px);
}

.navbar-vertical.navbar-expand-xs>[class*="container"] {
  flex-direction: column;
  align-items: stretch;
  min-height: 100%;
  padding-left: 0;
  padding-right: 0;
}

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .navbar-vertical.navbar-expand-xs>[class*="container"] {
    min-height: none;
    height: 100%;
  }
}

.navbar-vertical.navbar-expand-xs.fixed-left {
  left: 0;
}

.navbar-vertical.navbar-expand-xs.fixed-right {
  right: 0;
}

.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link {
  padding-top: 0.675rem;
  padding-bottom: 0.675rem;
  margin: 0 1rem;
}

.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link i,
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link .sidenav-mini-icon,
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link .sidenav-normal,
.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link .nav-link-text {
  pointer-events: none;
}

.navbar-vertical.navbar-expand-xs .navbar-nav .nav-item {
  width: 100%;
}

.navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item {
  margin-top: .125rem;
}

.navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item .icon .ni {
  top: 0;
}

.navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item>.nav-link .icon svg .color-background {
  fill: #3A416F;
}

.navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item>.nav-link .icon svg .color-foreground {
  fill: #141727;
}

.navbar-vertical.navbar-expand-xs .lavalamp-object {
  width: calc(100% - 1rem) !important;
  background: theme-color("primary");
  color: color-yiq(#cb0c9f);
  margin-right: .5rem;
  margin-left: .5rem;
  padding-left: 1rem;
  padding-right: 1rem;
  border-radius: 0.25rem;
}

.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link {
  padding-top: 0.45rem;
  padding-bottom: 0.45rem;
  padding-left: 15px;
}

.navbar-vertical.navbar-expand-xs .navbar-nav .nav .nav-link>span.sidenav-normal {
  transition: all .1s ease 0s;
}

@media (min-width: 576px) {
  .navbar-vertical.navbar-expand-sm {
    display: block;
    position: fixed;
    top: 0;
    bottom: 0;
    width: 100%;
    max-width: 15.625rem !important;
    overflow-y: auto;
    padding: 0;
    box-shadow: none;
  }

  .navbar-vertical.navbar-expand-sm .navbar-collapse {
    display: block;
    overflow: auto;
    height: calc(100vh - 360px);
  }

  .navbar-vertical.navbar-expand-sm>[class*="container"] {
    flex-direction: column;
    align-items: stretch;
    min-height: 100%;
    padding-left: 0;
    padding-right: 0;
  }
}

@media all and (min-width: 576px) and (-ms-high-contrast: none),
(min-width: 576px) and (-ms-high-contrast: active) {
  .navbar-vertical.navbar-expand-sm>[class*="container"] {
    min-height: none;
    height: 100%;
  }
}

@media (min-width: 576px) {
  .navbar-vertical.navbar-expand-sm.fixed-left {
    left: 0;
  }

  .navbar-vertical.navbar-expand-sm.fixed-right {
    right: 0;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link {
    padding-top: 0.675rem;
    padding-bottom: 0.675rem;
    margin: 0 1rem;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link i,
  .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link .sidenav-mini-icon,
  .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link .sidenav-normal,
  .navbar-vertical.navbar-expand-sm .navbar-nav .nav-link .nav-link-text {
    pointer-events: none;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav .nav-item {
    width: 100%;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav>.nav-item {
    margin-top: .125rem;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav>.nav-item .icon .ni {
    top: 0;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav>.nav-item>.nav-link .icon svg .color-background {
    fill: #3A416F;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav>.nav-item>.nav-link .icon svg .color-foreground {
    fill: #141727;
  }

  .navbar-vertical.navbar-expand-sm .lavalamp-object {
    width: calc(100% - 1rem) !important;
    background: theme-color("primary");
    color: color-yiq(#cb0c9f);
    margin-right: .5rem;
    margin-left: .5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    border-radius: 0.25rem;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link {
    padding-top: 0.45rem;
    padding-bottom: 0.45rem;
    padding-left: 15px;
  }

  .navbar-vertical.navbar-expand-sm .navbar-nav .nav .nav-link>span.sidenav-normal {
    transition: all .1s ease 0s;
  }
}

@media (min-width: 768px) {
  .navbar-vertical.navbar-expand-md {
    display: block;
    position: fixed;
    top: 0;
    bottom: 0;
    width: 100%;
    max-width: 15.625rem !important;
    overflow-y: auto;
    padding: 0;
    box-shadow: none;
  }

  .navbar-vertical.navbar-expand-md .navbar-collapse {
    display: block;
    overflow: auto;
    height: calc(100vh - 360px);
  }

  .navbar-vertical.navbar-expand-md>[class*="container"] {
    flex-direction: column;
    align-items: stretch;
    min-height: 100%;
    padding-left: 0;
    padding-right: 0;
  }
}

@media all and (min-width: 768px) and (-ms-high-contrast: none),
(min-width: 768px) and (-ms-high-contrast: active) {
  .navbar-vertical.navbar-expand-md>[class*="container"] {
    min-height: none;
    height: 100%;
  }
}

@media (min-width: 768px) {
  .navbar-vertical.navbar-expand-md.fixed-left {
    left: 0;
  }

  .navbar-vertical.navbar-expand-md.fixed-right {
    right: 0;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav .nav-link {
    padding-top: 0.675rem;
    padding-bottom: 0.675rem;
    margin: 0 1rem;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav .nav-link i,
  .navbar-vertical.navbar-expand-md .navbar-nav .nav-link .sidenav-mini-icon,
  .navbar-vertical.navbar-expand-md .navbar-nav .nav-link .sidenav-normal,
  .navbar-vertical.navbar-expand-md .navbar-nav .nav-link .nav-link-text {
    pointer-events: none;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav .nav-item {
    width: 100%;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav>.nav-item {
    margin-top: .125rem;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav>.nav-item .icon .ni {
    top: 0;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav>.nav-item>.nav-link .icon svg .color-background {
    fill: #3A416F;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav>.nav-item>.nav-link .icon svg .color-foreground {
    fill: #141727;
  }

  .navbar-vertical.navbar-expand-md .lavalamp-object {
    width: calc(100% - 1rem) !important;
    background: theme-color("primary");
    color: color-yiq(#cb0c9f);
    margin-right: .5rem;
    margin-left: .5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    border-radius: 0.25rem;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link {
    padding-top: 0.45rem;
    padding-bottom: 0.45rem;
    padding-left: 15px;
  }

  .navbar-vertical.navbar-expand-md .navbar-nav .nav .nav-link>span.sidenav-normal {
    transition: all .1s ease 0s;
  }
}

@media (min-width: 992px) {
  .navbar-vertical.navbar-expand-lg {
    display: block;
    position: fixed;
    top: 0;
    bottom: 0;
    width: 100%;
    max-width: 15.625rem !important;
    overflow-y: auto;
    padding: 0;
    box-shadow: none;
  }

  .navbar-vertical.navbar-expand-lg .navbar-collapse {
    display: block;
    overflow: auto;
    height: calc(100vh - 360px);
  }

  .navbar-vertical.navbar-expand-lg>[class*="container"] {
    flex-direction: column;
    align-items: stretch;
    min-height: 100%;
    padding-left: 0;
    padding-right: 0;
  }
}

@media all and (min-width: 992px) and (-ms-high-contrast: none),
(min-width: 992px) and (-ms-high-contrast: active) {
  .navbar-vertical.navbar-expand-lg>[class*="container"] {
    min-height: none;
    height: 100%;
  }
}

@media (min-width: 992px) {
  .navbar-vertical.navbar-expand-lg.fixed-left {
    left: 0;
  }

  .navbar-vertical.navbar-expand-lg.fixed-right {
    right: 0;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link {
    padding-top: 0.675rem;
    padding-bottom: 0.675rem;
    margin: 0 1rem;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link i,
  .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link .sidenav-mini-icon,
  .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link .sidenav-normal,
  .navbar-vertical.navbar-expand-lg .navbar-nav .nav-link .nav-link-text {
    pointer-events: none;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav .nav-item {
    width: 100%;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav>.nav-item {
    margin-top: .125rem;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav>.nav-item .icon .ni {
    top: 0;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav>.nav-item>.nav-link .icon svg .color-background {
    fill: #3A416F;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav>.nav-item>.nav-link .icon svg .color-foreground {
    fill: #141727;
  }

  .navbar-vertical.navbar-expand-lg .lavalamp-object {
    width: calc(100% - 1rem) !important;
    background: theme-color("primary");
    color: color-yiq(#cb0c9f);
    margin-right: .5rem;
    margin-left: .5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    border-radius: 0.25rem;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link {
    padding-top: 0.45rem;
    padding-bottom: 0.45rem;
    padding-left: 15px;
  }

  .navbar-vertical.navbar-expand-lg .navbar-nav .nav .nav-link>span.sidenav-normal {
    transition: all .1s ease 0s;
  }
}

@media (min-width: 1200px) {
  .navbar-vertical.navbar-expand-xl {
    display: block;
    position: fixed;
    top: 0;
    bottom: 0;
    width: 100%;
    max-width: 15.625rem !important;
    overflow-y: auto;
    padding: 0;
    box-shadow: none;
  }

  .navbar-vertical.navbar-expand-xl .navbar-collapse {
    display: block;
    overflow: auto;
    height: calc(100vh - 360px);
  }

  .navbar-vertical.navbar-expand-xl>[class*="container"] {
    flex-direction: column;
    align-items: stretch;
    min-height: 100%;
    padding-left: 0;
    padding-right: 0;
  }
}

@media all and (min-width: 1200px) and (-ms-high-contrast: none),
(min-width: 1200px) and (-ms-high-contrast: active) {
  .navbar-vertical.navbar-expand-xl>[class*="container"] {
    min-height: none;
    height: 100%;
  }
}

@media (min-width: 1200px) {
  .navbar-vertical.navbar-expand-xl.fixed-left {
    left: 0;
  }

  .navbar-vertical.navbar-expand-xl.fixed-right {
    right: 0;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link {
    padding-top: 0.675rem;
    padding-bottom: 0.675rem;
    margin: 0 1rem;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link i,
  .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link .sidenav-mini-icon,
  .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link .sidenav-normal,
  .navbar-vertical.navbar-expand-xl .navbar-nav .nav-link .nav-link-text {
    pointer-events: none;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav .nav-item {
    width: 100%;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav>.nav-item {
    margin-top: .125rem;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav>.nav-item .icon .ni {
    top: 0;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav>.nav-item>.nav-link .icon svg .color-background {
    fill: #3A416F;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav>.nav-item>.nav-link .icon svg .color-foreground {
    fill: #141727;
  }

  .navbar-vertical.navbar-expand-xl .lavalamp-object {
    width: calc(100% - 1rem) !important;
    background: theme-color("primary");
    color: color-yiq(#cb0c9f);
    margin-right: .5rem;
    margin-left: .5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    border-radius: 0.25rem;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link {
    padding-top: 0.45rem;
    padding-bottom: 0.45rem;
    padding-left: 15px;
  }

  .navbar-vertical.navbar-expand-xl .navbar-nav .nav .nav-link>span.sidenav-normal {
    transition: all .1s ease 0s;
  }
}

@media (min-width: 1400px) {
  .navbar-vertical.navbar-expand-xxl {
    display: block;
    position: fixed;
    top: 0;
    bottom: 0;
    width: 100%;
    max-width: 15.625rem !important;
    overflow-y: auto;
    padding: 0;
    box-shadow: none;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-collapse {
    display: block;
    overflow: auto;
    height: calc(100vh - 360px);
  }

  .navbar-vertical.navbar-expand-xxl>[class*="container"] {
    flex-direction: column;
    align-items: stretch;
    min-height: 100%;
    padding-left: 0;
    padding-right: 0;
  }
}

@media all and (min-width: 1400px) and (-ms-high-contrast: none),
(min-width: 1400px) and (-ms-high-contrast: active) {
  .navbar-vertical.navbar-expand-xxl>[class*="container"] {
    min-height: none;
    height: 100%;
  }
}

@media (min-width: 1400px) {
  .navbar-vertical.navbar-expand-xxl.fixed-left {
    left: 0;
  }

  .navbar-vertical.navbar-expand-xxl.fixed-right {
    right: 0;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link {
    padding-top: 0.675rem;
    padding-bottom: 0.675rem;
    margin: 0 1rem;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link i,
  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link .sidenav-mini-icon,
  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link .sidenav-normal,
  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-link .nav-link-text {
    pointer-events: none;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav-item {
    width: 100%;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav>.nav-item {
    margin-top: .125rem;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav>.nav-item .icon .ni {
    top: 0;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav>.nav-item>.nav-link .icon svg .color-background {
    fill: #3A416F;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav>.nav-item>.nav-link .icon svg .color-foreground {
    fill: #141727;
  }

  .navbar-vertical.navbar-expand-xxl .lavalamp-object {
    width: calc(100% - 1rem) !important;
    background: theme-color("primary");
    color: color-yiq(#cb0c9f);
    margin-right: .5rem;
    margin-left: .5rem;
    padding-left: 1rem;
    padding-right: 1rem;
    border-radius: 0.25rem;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav .nav-link {
    padding-top: 0.45rem;
    padding-bottom: 0.45rem;
    padding-left: 15px;
  }

  .navbar-vertical.navbar-expand-xxl .navbar-nav .nav .nav-link>span.sidenav-normal {
    transition: all .1s ease 0s;
  }
}

.sidenav[data-color="primary"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #cb0c9f 0%, #cb0c9f 100%);
}

.sidenav[data-color="secondary"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #8392AB 0%, #8392AB 100%);
}

.sidenav[data-color="success"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #82d616 0%, #82d616 100%);
}

.sidenav[data-color="info"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #17c1e8 0%, #17c1e8 100%);
}

.sidenav[data-color="warning"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #f53939 0%, #f53939 100%);
}

.sidenav[data-color="danger"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #ea0606 0%, #ea0606 100%);
}

.sidenav[data-color="light"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #e9ecef 0%, #e9ecef 100%);
}

.sidenav[data-color="dark"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #252f40 0%, #252f40 100%);
}

.sidenav[data-color="white"] .navbar-nav>.nav-item>.nav-link.active .icon {
  background-image: linear-gradient(310deg, #fff 0%, #fff 100%);
}

.sidenav,
.main-content {
  transition: all 0.2s ease-in-out;
}

.sidenav {
  z-index: 990;
}

.sidenav .navbar-brand,
.sidenav .navbar-heading {
  display: block;
}

@media (min-width: 1200px) {
  .sidenav:hover {
    max-width: 15.625rem;
  }

  .sidenav .sidenav-toggler {
    padding: 1.5rem;
  }

  .sidenav.fixed-left+.main-content {
    margin-left: 17.125rem;
  }

  .sidenav.fixed-right+.main-content {
    margin-right: 17.125rem;
  }
}

.sidenav .navbar-heading .docs-mini {
  padding-left: 3px;
}

.sidenav .navbar-heading {
  transition: all .1s ease;
}

.sidenav .navbar-brand {
  padding: 1.5rem 2rem;
}

.sidenav-header {
  height: 4.875rem;
}

.sidenav-footer .card.card-background:after {
  opacity: 0.65;
}

.g-sidenav-show .sidenav .nav-item .collapse {
  height: auto;
  transition: all 0.2s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .g-sidenav-show .sidenav .nav-item .collapse {
    transition: none;
  }
}

.g-sidenav-show .sidenav .nav-link-text {
  transition: 0.3s ease;
  opacity: 1;
}

@media (max-width: 1199.98px) {
  .g-sidenav-show.rtl .sidenav {
    transform: translateX(17.125rem);
  }

  .g-sidenav-show:not(.rtl) .sidenav {
    transform: translateX(-17.125rem);
  }

  .g-sidenav-show .sidenav.fixed-left+.main-content {
    margin-left: 0 !important;
  }

  .g-sidenav-show.g-sidenav-pinned .sidenav {
    transform: translateX(0);
  }
}

.navbar-vertical.bg-white {
  box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
}

.navbar-vertical.bg-white .navbar-nav .nav-link.active {
  box-shadow: none;
}

.navbar-vertical.bg-white .navbar-nav .nav-link .icon {
  background-image: linear-gradient(310deg, #e9ecef 0%, #e9ecef 100%);
}

.navbar-vertical .navbar-nav .nav-link.active {
  font-weight: 600;
  box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
  border-radius: 0.5rem;
}

.navbar-vertical .navbar-nav>.nav-item .nav-link.active {
  color: #252f40;
  background-color: #fff;
}

.navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon {
  background-image: linear-gradient(310deg, #cb0c9f 0%, #cb0c9f 100%);
}

.navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon svg .color-background,
.navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon svg .color-foreground {
  fill: #fff;
}

.navbar-main {
  transition: box-shadow 0.25s ease-in, background-color 0.25s ease-in;
}

.navbar-main.fixed-top {
  width: calc(100% - (15.625rem + 1.5rem * 3));
}

.navbar-main.fixed-top+[class*="container"] {
  margin-top: 7.1875rem !important;
}

.btn.btn-facebook {
  background-color: #3b5998;
  color: #fff;
}

.btn.btn-facebook:focus,
.btn.btn-facebook:hover {
  background-color: #344e86;
  color: #fff;
}

.btn.btn-facebook:active,
.btn.btn-facebook:focus,
.btn.btn-facebook:active:focus {
  box-shadow: none;
}

.btn.btn-facebook.btn-simple {
  color: #344e86;
  background-color: transparent;
  background-image: none !important;
  box-shadow: none;
  border: none;
}

.btn.btn-facebook.btn-simple:hover,
.btn.btn-facebook.btn-simple:focus,
.btn.btn-facebook.btn-simple:hover:focus,
.btn.btn-facebook.btn-simple:active,
.btn.btn-facebook.btn-simple:hover:focus:active {
  color: #344e86;
  background: transparent !important;
  box-shadow: none !important;
}

.btn.btn-facebook.btn-neutral {
  color: #3b5998;
  background-color: #fff;
}

.btn.btn-facebook.btn-neutral:hover,
.btn.btn-facebook.btn-neutral:focus,
.btn.btn-facebook.btn-neutral:active {
  color: #344e86;
}

.btn.btn-twitter {
  background-color: #55acee;
  color: #fff;
}

.btn.btn-twitter:focus,
.btn.btn-twitter:hover {
  background-color: #3ea1ec;
  color: #fff;
}

.btn.btn-twitter:active,
.btn.btn-twitter:focus,
.btn.btn-twitter:active:focus {
  box-shadow: none;
}

.btn.btn-twitter.btn-simple {
  color: #3ea1ec;
  background-color: transparent;
  background-image: none !important;
  box-shadow: none;
  border: none;
}

.btn.btn-twitter.btn-simple:hover,
.btn.btn-twitter.btn-simple:focus,
.btn.btn-twitter.btn-simple:hover:focus,
.btn.btn-twitter.btn-simple:active,
.btn.btn-twitter.btn-simple:hover:focus:active {
  color: #3ea1ec;
  background: transparent !important;
  box-shadow: none !important;
}

.btn.btn-twitter.btn-neutral {
  color: #55acee;
  background-color: #fff;
}

.btn.btn-twitter.btn-neutral:hover,
.btn.btn-twitter.btn-neutral:focus,
.btn.btn-twitter.btn-neutral:active {
  color: #3ea1ec;
}

.btn.btn-instagram {
  background-color: #125688;
  color: #fff;
}

.btn.btn-instagram:focus,
.btn.btn-instagram:hover {
  background-color: #0e456d;
  color: #fff;
}

.btn.btn-instagram:active,
.btn.btn-instagram:focus,
.btn.btn-instagram:active:focus {
  box-shadow: none;
}

.btn.btn-instagram.btn-simple {
  color: #0e456d;
  background-color: transparent;
  background-image: none !important;
  box-shadow: none;
  border: none;
}

.btn.btn-instagram.btn-simple:hover,
.btn.btn-instagram.btn-simple:focus,
.btn.btn-instagram.btn-simple:hover:focus,
.btn.btn-instagram.btn-simple:active,
.btn.btn-instagram.btn-simple:hover:focus:active {
  color: #0e456d;
  background: transparent !important;
  box-shadow: none !important;
}

.btn.btn-instagram.btn-neutral {
  color: #125688;
  background-color: #fff;
}

.btn.btn-instagram.btn-neutral:hover,
.btn.btn-instagram.btn-neutral:focus,
.btn.btn-instagram.btn-neutral:active {
  color: #0e456d;
}

.rtl .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
  float: right;
  padding-left: 0.5rem;
  padding-right: 0;
}

.rtl .sidenav .navbar-nav {
  width: 100%;
  padding-right: 0;
}

.rtl .fixed-plugin .fixed-plugin-button {
  left: 30px;
  right: auto;
}

.rtl .fixed-plugin .card {
  left: -360px !important;
  right: auto;
}

.rtl .fixed-plugin.show .card {
  right: auto;
  left: 0 !important;
}

.rtl .timeline .timeline-content {
  margin-right: 45px;
  margin-left: 0;
}

.rtl .timeline .timeline-step {
  transform: translateX(50%);
}

.rtl .timeline.timeline-one-side:before {
  right: 1rem;
}

.rtl .timeline.timeline-one-side .timeline-step {
  right: 1rem;
}

.rtl .form-check.form-switch .form-check-input:after {
  transform: translateX(-1px);
}

.rtl .form-check.form-switch .form-check-input:checked:after {
  transform: translateX(-21px);
}

.rtl .avatar-group .avatar+.avatar {
  margin-left: 0;
  margin-right: -1rem;
}

.rtl .dropdown .dropdown-menu {
  left: 0;
}

.rtl .input-group .input-group-text {
  border-left: 0;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-right: 1px solid #d2d6da;
}

.rtl .input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-right: -1px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  border-top-left-radius: 0.5rem;
  border-bottom-left-radius: 0.5rem;
  border-right: 0;
  border-left: 1px solid #d2d6da;
}

.rtl .input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.rtl .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}

/*# sourceMappingURL=dashboard-free.css.map */
/* Generated using nucleoapp.com */
/* --------------------------------

Icon colors

-------------------------------- */

.icon {
  display: inline-block;
  /* icon primary color */
  color: #111111;
  height: 1em;
  width: 1em;
}

.icon use {
  /* icon secondary color - fill */
  fill: #7ea6f6;
}

.icon.icon-outline use {
  /* icon secondary color - stroke */
  stroke: #7ea6f6;
}

/* --------------------------------

Change icon size

-------------------------------- */

.icon-xs {
  height: 0.5em;
  width: 0.5em;
}

.icon-sm {
  height: 0.8em;
  width: 0.8em;
}

.icon-lg {
  height: 1.6em;
  width: 1.6em;
}

.icon-xl {
  height: 2em;
  width: 2em;
}

/* -------------------------------- 

Align icon and text 

-------------------------------- */

.icon-text-aligner {
  /* add this class to parent element that contains icon + text */
  display: flex;
  align-items: center;
}

.icon-text-aligner .icon {
  color: inherit;
  margin-right: 0.4em;
}

.icon-text-aligner .icon use {
  color: inherit;
  fill: currentColor;
}

.icon-text-aligner .icon.icon-outline use {
  stroke: currentColor;
}

/* -------------------------------- 

Icon reset values - used to enable color customizations

-------------------------------- */

.icon {
  fill: currentColor;
  stroke: none;
}

.icon.icon-outline {
  fill: none;
  stroke: currentColor;
}

.icon use {
  stroke: none;
}

.icon.icon-outline use {
  fill: none;
}

/* -------------------------------- 

Stroke effects - Nucleo outline icons

- 16px icons -> up to 1px stroke (16px outline icons do not support stroke changes)
- 24px, 32px icons -> up to 2px stroke
- 48px, 64px icons -> up to 4px stroke

-------------------------------- */

.icon-outline.icon-stroke-1 {
  stroke-width: 1px;
}

.icon-outline.icon-stroke-2 {
  stroke-width: 2px;
}

.icon-outline.icon-stroke-3 {
  stroke-width: 3px;
}

.icon-outline.icon-stroke-4 {
  stroke-width: 4px;
}

.icon-outline.icon-stroke-1 use,
.icon-outline.icon-stroke-3 use {
  -webkit-transform: translateX(0.5px) translateY(0.5px);
  -moz-transform: translateX(0.5px) translateY(0.5px);
  -ms-transform: translateX(0.5px) translateY(0.5px);
  -o-transform: translateX(0.5px) translateY(0.5px);
  transform: translateX(0.5px) translateY(0.5px);
}

.demo{
    background: #99b977;
    transform: translate3d(0, 0, 0);
}
.navbarr{
    width: 150px;
    height: 150px;
    line-height: 150px;
    border-radius: 50%;
    background: #fff;
    margin: 70px auto;
    position: relative;
    cursor: pointer;
    text-align: center;
    font-size: 2.75em;
    font-weight: bold;
    color: #51aeec;
    transition: 0.24s 0.2s;
}
.navbarr:hover{
    background: rgba(255, 255, 255, 0.75);
}
.navbarr .menuu{
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: -75px;
    left: -75px;
    border: 150px solid transparent;
    cursor: default;
    border-radius: 50%;
    transform: scale(0);
    transition: transform 1.4s 0.07s;
    z-index: -1;
}
.navbarr:hover .menuu{
    transition: transform 0.4s 0.08s, z-index   0s  0.5s;
    transform: scale(1);
    z-index: 1;
}
.navbarr .menuu li{
    position: absolute;
    top: -100px;
    left: -100px;
    transform-origin: 100px 100px;
    transition: all 0.5s 0.1s;
}
.navbarr:hover .menuu li{
    transition: all 0.6s;
}
.navbarr .menuu li a{
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    background: #fff;
    position: absolute;
    font-size: 60%;
    color: #2b94e9;
    transition: 0.6s;
}
.navbarr:hover .menuu li:nth-child(1){
    transition-delay: 0.02s;
    transform: rotate(85deg);
}
.navbarr:hover .menuu li:nth-child(1) a{
    transition-delay: 0.04s;
    transform: rotate(635deg);
}
.navbarr:hover .menuu li:nth-child(2){
    transition-delay: 0.04s;
    transform: rotate(125deg);
}
.navbarr:hover .menuu li:nth-child(2) a{
    transition-delay: 0.08s;
    transform: rotate(595deg);
}
.navbarr:hover .menuu li:nth-child(3){
    transition-delay: 0.06s;
    transform: rotate(165deg);
}
.navbarr:hover .menuu li:nth-child(3) a{
    transition-delay: 0.12s;
    transform: rotate(555deg);
}
.navbarr:hover .menuu li:nth-child(4){
    transition-delay: 0.08s;
    transform: rotate(205deg);
}
.navbarr:hover .menuu li:nth-child(4) a{
    transition-delay: 0.16s;
    transform: rotate(515deg);
}
.navbarr:hover .menuu li:nth-child(5){
    transition-delay: 0.1s;
    transform: rotate(245deg);
}
.navbarr:hover .menuu li:nth-child(5) a{
    transition-delay: 0.2s;
    transform: rotate(475deg);
}
.navbarr:hover .menuu li:nth-child(6){
    transition-delay: 0.12s;
    transform: rotate(285deg);
}
.navbarr:hover .menuu li:nth-child(6) a{
    transition-delay: 0.24s;
    transform: rotate(435deg);
}
.navbarr:hover .menuu li:nth-child(7){
    transition-delay: 0.14s;
    transform: rotate(325deg);
}
.navbarr:hover .menuu li:nth-child(7) a{
    transition-delay: 0.28s;
    transform: rotate(395deg);
}
.navbarr:hover .menuu li:nth-child(8){
    transition-delay: 0.16s;
    transform: rotate(365deg);
}
.navbar:hover .menu li:nth-child(8) a{
    transition-delay: 0.32s;
    transform: rotate(355deg);
}
.navbarr:hover .menuu li:nth-child(9){
    transition-delay: 0.18s;
    transform: rotate(405deg);
}
.navbarr:hover .menuu li:nth-child(9) a{
    transition-delay: 0.36s;
    transform: rotate(315deg);
}
a:hover,
a:focus{
    text-decoration: none;
    outline: none;
}
.vertical-tab{
    background: linear-gradient(#fff,#f5f5f5,#fff);
    font-family: 'Poppins', sans-serif;
    display: table;
    padding: 10px;
    border-radius: 20px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}
.vertical-tab .nav-tabs{
    background-color: #fff;
    display: table-cell;
    width: 25%;
    min-width: 25%;
    padding: 10px;
    border: none;
    border-radius: 10px;
}
.vertical-tab .nav-tabs li{ float: none; }
.vertical-tab .nav-tabs li a{
    color: #2e86de;
    background: #fff;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-align: center;
    padding: 12px 10px 10px;
    margin: 0 0 10px;
    border-radius: 10px;
    border: none;
    overflow: hidden;
    position: relative;
    z-index: 1;
    transition: all 0.5s ease 0.1s;
}
.vertical-tab .nav-tabs li a:hover,
.vertical-tab .nav-tabs li.active a,
.vertical-tab .nav-tabs li.active a:hover{
    color: #fff;
    background: #2e86de;
    border: none;
    box-shadow: 0 0 10px -4px #2e86de;
}
.vertical-tab .nav-tabs li a:before{
    content: '';
    background-color: #2e86de;
    height: 100%;
    width: 0;
    border-radius: 10px;
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1;
    transition: all 0.4s ease 0s;
}
.vertical-tab .nav-tabs li a:hover:before,
.vertical-tab .nav-tabs li.active a:before,
.vertical-tab .nav-tabs li.active a:hover:before{
    width: 100%;
    opacity: 0;
}
.vertical-tab .tab-content{
    color: #888;
    background: transparent;
    font-size: 13px;
    letter-spacing: 0.5px;
    line-height: 21px;
    padding: 15px 15px 10px 15px;
    display: table-cell;
}
.vertical-tab .tab-content h3{
    color: #2e86de;
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 4px;
}
@media only screen and (max-width: 479px){
    .vertical-tab .nav-tabs{
        width: 100%;
        display: block;
    }
    .vertical-tab .nav-tabs li:last-child a{ margin: 0; }
    .vertical-tab .tab-content{
        font-size: 14px;
        display: block;
    }
}

.navvvv ul {
	margin-left: 0;
	padding-left: 0;
	width: 500px;
	list-style: none;
	position: relative;
	display: inline-table;
}

.navvvv ul ul {
	display: none;
}

.navvvv ul li:hover > ul {
	display: block;
}

.navvvv ul li {
	float: left;
	width: 500px;
	text-align: left;
	border-bottom: 3px solid #00BFFF; 
}
	
.navvvv ul li:hover {
	background: #f2f2f2;
}

.navvvv ul li a {
	display: block; 
	padding: 15px 10px;
	color: #00BFFF; 
	text-decoration: none;
}
					
.navvvv ul ul {
	border-radius: 0px; 
	padding: 0;
	position: absolute; 
	top: 100%;
}

.navvvv ul ul li {
	float: none;
	border-bottom: 2px solid #eaeaea; 
	position: relative;
}

.navvvv ul ul li a {
	padding: 15px 10px;
	color: #00BFFF;
}	

.navvvv ul ul li a:hover {
	background: #a7b5db;
	color: #242a2c;
}	

#down-triangle {
	float: right;
	width: 0; 
 	height: 0;
 	margin-top: 10px;
 	border-top: 10px solid #00BFFF;
  border-left: 10px solid transparent; 
  border-right: 10px solid transparent; 
}

.circle {
	float: right;
	display: inline;
	width: 10px;
 	height: 10px; 
 	margin-top: 5px;
  border: 3px solid #00BFFF;
  -moz-border-radius: 100%; 
  -webkit-border-radius: 100%; 
  border-radius: 100%;
}


    </style>
   
</head>

<body class="g-sidenav-show   bg-gray-100">
 
  
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-left ms-3" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute right-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../pages/dashboard.html">
        <img src="{{ URL::to('../assets/img/ests.png') }}" class="navbar-brand-img h-100" alt="...">
        <span class="ms-1 font-weight-bold">EST SAFI</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="../pages/dashboard.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="shop-" transform="translate(0.000000, 148.000000)">
                        <path class="color-background" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z" id="Path" opacity="0.598981585"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z" id="Path"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">HOME</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{URL::to('home')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>office</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="office" transform="translate(153.000000, 2.000000)">
                        <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path>
                        <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z" id="Shape"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{URL::to('calendar')}}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>credit-card</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="credit-card" transform="translate(453.000000, 454.000000)">
                        <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" id="Path" opacity="0.593633743"></path>
                        <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z" id="Shape"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">CALENDAR</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>customer-support</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="customer-support" transform="translate(1.000000, 0.000000)">
                        <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" id="Path" opacity="0.59858631"></path>
                        <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z" id="Path"></path>
                        <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z" id="Path"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>document</title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Rounded-Icons" transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                      <g id="document" transform="translate(154.000000, 300.000000)">
                        <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" id="Path" opacity="0.603585379"></path>
                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z" id="Shape"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">
             
          </span>
          </a>
        </li>
        
      </ul>
    </div>
    <div class="sidenav-footer mx-3 mt-3 pt-3">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
        <div class="card-body text-left p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">Ecole superieur de technologie </h6>
            <p class="text-xs font-weight-bold">Université Cadi Aayad</p>
            <a href="http://www.ests.uca.ma" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <main class="main-content mt-1 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">EST SAFI</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">ESTS</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">

                <span class="d-sm-inline d-none">

                  <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                        <div class="container">
                    
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto">
                
                                </ul>
                
                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif
                
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">

                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                              <i class="fa fa-user me-sm-1"></i>
                                                {{ Auth::user()->name }}

                                            </a>
                
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                
                </div>
                  
                </span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Rounded-Icons" transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                <g id="credit-card" transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" id="Path" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z" id="Shape"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
             @yield('content')
    
    
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="../assets/js/plugins/Chart.extension.js"></script>
    <script>
      var ctx = document.getElementById("chart-bars").getContext("2d");
  
      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          tooltips: {
            enabled: true,
            mode: "index",
            intersect: false,
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 0,
                fontSize: 14,
                lineHeight: 3,
                fontColor: "#fff",
                fontStyle: 'normal',
                fontFamily: "Open Sans",
              },
            }, ],
            xAxes: [{
              gridLines: {
                display: false,
              },
              ticks: {
                display: false,
                padding: 20,
              },
            }, ],
          },
        },
      });
  
      var ctx2 = document.getElementById("chart-line").getContext("2d");
  
      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
  
      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors
  
      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
  
      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
  
  
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6
  
            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
  
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          tooltips: {
            enabled: true,
            mode: "index",
            intersect: false,
          },
          scales: {
            yAxes: [{
              gridLines: {
                borderDash: [2],
                borderDashOffset: [2],
                color: '#dee2e6',
                zeroLineColor: '#dee2e6',
                zeroLineWidth: 1,
                zeroLineBorderDash: [2],
                drawBorder: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                fontSize: 11,
                fontColor: '#adb5bd',
                lineHeight: 3,
                fontStyle: 'normal',
                fontFamily: "Open Sans",
              },
            }, ],
            xAxes: [{
              gridLines: {
                zeroLineColor: 'rgba(0,0,0,0)',
                display: false,
              },
              ticks: {
                padding: 10,
                fontSize: 11,
                fontColor: '#adb5bd',
                lineHeight: 3,
                fontStyle: 'normal',
                fontFamily: "Open Sans",
              },
            }, ],
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.2"></script>
  </body>
</body>

</html>
