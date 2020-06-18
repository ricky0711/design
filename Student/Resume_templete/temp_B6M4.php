<?php
  include('../../Files/PDO/dbcon.php');
  session_start();
  $data5=$_SESSION['Userdata'];
  $sid=$data5["STUDENT_ID"];
  $stmt=$con->prepare("CALL CHECK_RESUME_DETAILS(:sid);");
  $stmt->bindParam(":sid",$sid);
  $stmt->execute();
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  $id = $data["aid"];
  if($data["aid"] == NULL){
      header('Location: ../academic_details.php');
  }elseif($data["rid"] == NULL){
      header('Location: ../resume_details.php');
  }else{
      $stmt1=$con->prepare("CALL GET_STUDENT_RESUME(:sid)");
      $stmt1->bindParam(":sid",$sid);
      $stmt1=$con->prepare("CALL GET_STUDENT_RESUME(:sid)");
      $stmt1->bindParam(":sid",$sid);
      $stmt1->execute();
      //print_r($stmt1->errorinfo());
      $data1 = $stmt1->fetch(PDO::FETCH_ASSOC);
      $fname = $data1['STUDENT_FIRST_NAME'];
  }  
?>
<html lang='en'>
<head></head>
        <title>Desmond Resume Template</title>

        <meta name='description' content=''>

        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <meta http-equiv='x-ua-compatible' content='ie=edge'>
        <style type='text/css'>
            html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  margin: 0;
  background: #2d2e2e;
  color: #979899;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: #a4a5a6;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block;
}

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}

audio:not([controls]) {
  display: none;
  height: 0;
}

[hidden],
template {
  display: none;
}

a {
  background-color: transparent;
}

a:active,
a:hover {
  outline: 0;
}

abbr[title] {
  border-bottom: 1px dotted;
}

b,
strong {
  font-weight: bold;
}

dfn {
  font-style: italic;
}

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

mark {
  background: #ff0;
  color: #000;
}

small {
  font-size: 80%;
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

img {
  border: 0;
}

svg:not(:root) {
  overflow: hidden;
}

figure {
  margin: 1em 40px;
}

hr {
  box-sizing: content-box;
  height: 0;
}

pre {
  overflow: auto;
}

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}

button {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html input[type='button'],
input[type='reset'],
input[type='submit'] {
  -webkit-appearance: button;
  cursor: pointer;
}

button[disabled],
html input[disabled] {
  cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

input {
  line-height: normal;
}

input[type='checkbox'],
input[type='radio'] {
  box-sizing: border-box;
  padding: 0;
}

input[type='number']::-webkit-inner-spin-button,
input[type='number']::-webkit-outer-spin-button {
  height: auto;
}

input[type='search'] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}

input[type='search']::-webkit-search-cancel-button,
input[type='search']::-webkit-search-decoration {
  -webkit-appearance: none;
}

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

legend {
  border: 0;
  padding: 0;
}

textarea {
  overflow: auto;
}

optgroup {
  font-weight: bold;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
}

body,
h1, h2, h3, h4, h5, h6,
p,
blockquote,
pre,
dl, dd,
ol, ul,
form, fieldset, legend,
figure,
table, th, td, caption,
hr {
  margin: 0;
  padding: 0;
}

abbr[title],
dfn[title] {
  cursor: help;
}

address {
  font-style: normal;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

img {
  font-style: italic;
  vertical-align: middle;
}

label {
  display: inline-block;
}

input,
button,
select,
textarea {
  line-height: inherit;
  border-radius: 0;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  line-height: inherit;
}

input[type='search'] {
  box-sizing: inherit;
  -webkit-appearance: none;
}

html {
  box-sizing: border-box;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

h1, h2, h3, h4, h5, h6,
p,
ul, ol,
dl,
blockquote,
address,
hr,
table,
fieldset,
figure,
pre,
.c-progress-bar {
  margin-bottom: 0.55rem;
}

html {
  font-size: 14px;
  min-height: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

body {
  font-size: 1rem;
  font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  line-height: 1.75;
  color: #a4a5a6;
  background: #fff;
}

html,
body {
  height: 100%;
}

body {
  font-weight: 400;
  -webkit-font-smoothing: subpixel-antialiased;
}

h1,
h2,
h3, .c-number,
h4,
h5,
h6 {
  font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-weight: 600;
}

h1 small,
h2 small,
h3 small, .c-number small,
h4 small,
h5 small,
h6 small {
  font-weight: 400;
  font-size: .7em;
}

h2,
h3, .c-number {
  font-size: 1.2rem;
  line-height: 1.45;
  text-transform: uppercase;
}

a {
  text-decoration: none;
}

hr {
  height: 2px;
  color: #ccc;
  background: #ccc;
  font-size: 0;
  border: 0;
}

ul,
ol,
dd {
  margin-left: 3.5rem;
  padding: 0;
}

[dir=rtl] ul, [dir=rtl]
ol, [dir=rtl]
dd {
  margin-right: 3.5rem;
}

img {
  max-width: 100%;
}

img[width],
img[height] {
  max-width: none;
}

.o-list-bare,
.c-social-buttons,
.c-clients {
  margin-left: 0;
  padding: 0;
  list-style: none;
}

[dir=rtl] .o-list-bare,
[dir=rtl] .c-social-buttons,
[dir=rtl] .c-clients {
  margin-right: 0;
}

.o-list-inline {
  margin-left: 0;
  padding: 0;
  list-style: none;
}

.o-list-inline > li {
  display: inline-block;
}

[dir=rtl] .o-list-inline {
  margin-right: 0;
}

.o-media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
      align-items: flex-start;
}

.o-media__figure {
  margin-right: 1rem;
}

.o-media__body {
  -ms-flex: 1;
      flex: 1;
}

.o-media__body,
.o-media__body :last-child {
  margin-bottom: 0;
}

.o-media--reverse > .o-media__figure {
  -ms-flex-order: 1;
      order: 1;
  margin-left: 1rem;
  margin-right: 0;
}

.o-media--flush > .o-media__figure {
  margin-left: 0;
  margin-right: 0;
}

.o-media--block > .o-media__figure {
  margin-left: 0;
  margin-right: 0;
  width: 2.8rem;
}

.o-container {
  max-width: 1276px;
  margin: 0 auto;
}

.o-content {
  padding-bottom: 1.75rem;
}

.o-content__body,
.o-content__body :last-child {
  margin-bottom: 0;
}

@media (min-width: 760px) {
  .o-content {
    padding-bottom: 1.75rem;
  }
}

@media (min-width: 1200px) {
  .o-content {
    padding-bottom: 2.7125rem;
  }
}

.o-grid {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  margin-right: -3.5rem;
  position: relative;
}

.o-grid--gallery {
  margin-right: -1.75rem;
  margin-bottom: -1.75rem;
}

.o-grid--gallery [class*='o-grid__col'] {
  padding-right: 1.75rem;
  margin-bottom: 1.75rem;
}

[class*='o-grid__col'] {
  width: 100%;
  padding-right: 3.5rem;
  margin-bottom: 0;
}

.o-grid__col-xs-1 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.08333);
}

.o-grid__col-xs-1:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-1:last-child{
  margin-right: 0;
}

.o-grid__col-xs-1:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-2 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.16667);
}

.o-grid__col-xs-2:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-2:last-child{
  margin-right: 0;
}

.o-grid__col-xs-2:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-3 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.25);
}

.o-grid__col-xs-3:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-3:last-child{
  margin-right: 0;
}

.o-grid__col-xs-3:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-4 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.33333);
}

.o-grid__col-xs-4:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-4:last-child{
  margin-right: 0;
}

.o-grid__col-xs-4:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-5 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.41667);
}

.o-grid__col-xs-5:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-5:last-child{
  margin-right: 0;
}

.o-grid__col-xs-5:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-6 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.5);
}

.o-grid__col-xs-6:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-6:last-child{
  margin-right: 0;
}

.o-grid__col-xs-6:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-7 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.58333);
}

.o-grid__col-xs-7:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-7:last-child{
  margin-right: 0;
}

.o-grid__col-xs-7:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-8 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.66667);
}

.o-grid__col-xs-8:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-8:last-child{
  margin-right: 0;
}

.o-grid__col-xs-8:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-9 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.75);
}

.o-grid__col-xs-9:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-9:last-child{
  margin-right: 0;
}

.o-grid__col-xs-9:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-10 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.83333);
}

.o-grid__col-xs-10:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-10:last-child{
  margin-right: 0;
}

.o-grid__col-xs-10:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-11 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 0.91667);
}

.o-grid__col-xs-11:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-11:last-child{
  margin-right: 0;
}

.o-grid__col-xs-11:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

.o-grid__col-xs-12 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: calc(99.999999% * 1);
}

.o-grid__col-xs-12:nth-child(1n){
  margin-right: 0;
  margin-left: 0;
}

.o-grid__col-xs-12:last-child{
  margin-right: 0;
}

.o-grid__col-xs-12:nth-child(0n){
  margin-right: 0;
  margin-left: auto;
}

@media (min-width: 600px) {
  .o-grid__col-sm-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.08333);
  }
  .o-grid__col-sm-1:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-1:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-1:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.16667);
  }
  .o-grid__col-sm-2:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-2:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-2:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.25);
  }
  .o-grid__col-sm-3:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-3:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-3:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.33333);
  }
  .o-grid__col-sm-4:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-4:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-4:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.41667);
  }
  .o-grid__col-sm-5:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-5:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-5:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.5);
  }
  .o-grid__col-sm-6:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-6:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-6:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.58333);
  }
  .o-grid__col-sm-7:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-7:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-7:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.66667);
  }
  .o-grid__col-sm-8:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-8:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-8:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.75);
  }
  .o-grid__col-sm-9:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-9:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-9:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.83333);
  }
  .o-grid__col-sm-10:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-10:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-10:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.91667);
  }
  .o-grid__col-sm-11:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-11:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-11:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-sm-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 1);
  }
  .o-grid__col-sm-12:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-sm-12:last-child{
    margin-right: 0;
  }
  .o-grid__col-sm-12:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
}

@media (min-width: 760px) {
  .o-grid__col-md-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.08333);
  }
  .o-grid__col-md-1:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-1:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-1:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.16667);
  }
  .o-grid__col-md-2:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-2:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-2:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.25);
  }
  .o-grid__col-md-3:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-3:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-3:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.33333);
  }
  .o-grid__col-md-4:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-4:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-4:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.41667);
  }
  .o-grid__col-md-5:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-5:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-5:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.5);
  }
  .o-grid__col-md-6:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-6:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-6:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.58333);
  }
  .o-grid__col-md-7:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-7:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-7:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.66667);
  }
  .o-grid__col-md-8:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-8:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-8:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.75);
  }
  .o-grid__col-md-9:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-9:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-9:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.83333);
  }
  .o-grid__col-md-10:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-10:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-10:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.91667);
  }
  .o-grid__col-md-11:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-11:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-11:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-md-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 1);
  }
  .o-grid__col-md-12:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-md-12:last-child{
    margin-right: 0;
  }
  .o-grid__col-md-12:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
}

@media (min-width: 1024px) {
  .o-grid__col-lg-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.08333);
  }
  .o-grid__col-lg-1:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-1:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-1:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.16667);
  }
  .o-grid__col-lg-2:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-2:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-2:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.25);
  }
  .o-grid__col-lg-3:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-3:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-3:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.33333);
  }
  .o-grid__col-lg-4:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-4:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-4:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.41667);
  }
  .o-grid__col-lg-5:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-5:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-5:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.5);
  }
  .o-grid__col-lg-6:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-6:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-6:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.58333);
  }
  .o-grid__col-lg-7:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-7:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-7:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.66667);
  }
  .o-grid__col-lg-8:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-8:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-8:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.75);
  }
  .o-grid__col-lg-9:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-9:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-9:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.83333);
  }
  .o-grid__col-lg-10:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-10:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-10:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.91667);
  }
  .o-grid__col-lg-11:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-11:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-11:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-lg-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 1);
  }
  .o-grid__col-lg-12:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-lg-12:last-child{
    margin-right: 0;
  }
  .o-grid__col-lg-12:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
}

@media (min-width: 1200px) {
  .o-grid__col-xl-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.08333);
  }
  .o-grid__col-xl-1:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-1:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-1:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.16667);
  }
  .o-grid__col-xl-2:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-2:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-2:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.25);
  }
  .o-grid__col-xl-3:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-3:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-3:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.33333);
  }
  .o-grid__col-xl-4:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-4:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-4:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.41667);
  }
  .o-grid__col-xl-5:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-5:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-5:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.5);
  }
  .o-grid__col-xl-6:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-6:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-6:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.58333);
  }
  .o-grid__col-xl-7:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-7:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-7:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.66667);
  }
  .o-grid__col-xl-8:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-8:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-8:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.75);
  }
  .o-grid__col-xl-9:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-9:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-9:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.83333);
  }
  .o-grid__col-xl-10:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-10:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-10:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 0.91667);
  }
  .o-grid__col-xl-11:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-11:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-11:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
  .o-grid__col-xl-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: calc(99.999999% * 1);
  }
  .o-grid__col-xl-12:nth-child(1n){
    margin-right: 0;
    margin-left: 0;
  }
  .o-grid__col-xl-12:last-child{
    margin-right: 0;
  }
  .o-grid__col-xl-12:nth-child(0n){
    margin-right: 0;
    margin-left: auto;
  }
}

.o-section__header-bg,
.o-section__content-bg {
  display: none;
}

.o-section__header {
  padding: 1.75rem 1.75rem 0rem;
}

.o-section__content {
  padding: 1.75rem 1.75rem 0rem;
}

.o-section__full-top-space {
  padding-top: 1.75rem;
}

.o-section__full-bottom-space {
  padding-bottom: 1.75rem;
}

@media (min-width: 760px) {
  .o-section__header {
    padding: 3.15rem 3.5rem 1.4rem;
  }
  .o-section--header .o-section__header {
    padding-bottom: 0;
  }
  .o-section__content {
    padding: 3.15rem 3.5rem 1.4rem;
  }
  .o-section__full-top-space {
    padding-top: 3.15rem;
  }
  .o-section__full-bottom-space {
    padding-bottom: 3.15rem;
  }
}

@media (min-width: 1024px) {
  .o-section {
    position: relative;
  }
  .o-section__container {
    z-index: 2;
    position: relative;
    display: -ms-flexbox;
    display: flex;
  }
  .o-section__header {
    width: 30%;
    text-align: right;
  }
  .o-section__content {
    width: 70%;
  }
  .o-section__header-bg,
  .o-section__content-bg {
    display: block;
    position: absolute;
    height: 100%;
    width: 50%;
    z-index: 1;
  }
  .o-section__content-bg {
    right: 0;
  }
}

@media (min-width: 1200px) {
  .o-section__header {
    padding: 4.375rem 5.25rem 1.6625rem;
  }
  .o-section__content {
    padding: 4.375rem 5.25rem 1.6625rem;
  }
  .o-section__full-top-space {
    padding-top: 4.375rem;
  }
  .o-section__full-bottom-space {
    padding-bottom: 4.375rem;
  }
}

.js-enabled .js-main-container {
  display: none;
}

.c-main-container {
  overflow-x: hidden;
}

.c-preloader {
  display: none;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  text-align: center;
  height: 100%;
}

.js-enabled .c-preloader {
  display: -ms-flexbox;
  display: flex;
}

.c-preloader__spinner {
  min-width: 70px;
  min-height: 70px;
}

.c-preloader__spinner:before {
  content: 'Loading…';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 70px;
  height: 70px;
  margin-top: -35px;
  margin-left: -35px;
}

@keyframes c-preloader__spinner {
  to {
    transform: rotate(360deg);
  }
}

.c-preloader__spinner:not(:required):before {
  content: '';
  border-radius: 50%;
  border: 4px solid transparent;
  animation: c-preloader__spinner .8s ease infinite;
  -webkit-animation: c-preloader__spinner .8s ease infinite;
}

.c-progress-bar {
  position: relative;
  height: 5px;
}

.c-progress-bar__filler {
  height: 100%;
}

.c-header__top,
.c-header__brand,
.c-header__contact-divider {
  margin-bottom: 1.75rem;
}

.c-header__brand,
.c-header__avatar,
.c-header__contact {
  text-align: center;
}

.c-header__social-buttons {
  -ms-flex-pack: center;
      justify-content: center;
}

@media (min-width: 760px) {
  .c-header__top,
  .c-header__brand {
    margin-bottom: 1.75rem;
  }
  .c-header__content {
    padding-top: 1.75rem;
  }
  .c-header__contact {
    text-align: left;
  }
}

@media (min-width: 1024px) {
  .c-header__header,
  .c-header__content {
    height: 100vh;
  }
  .c-header__inner-header,
  .c-header__inner-content {
    position: relative;
    height: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    -ms-flex-pack: center;
        justify-content: center;
  }
  .c-header__avatar,
  .c-header__top {
    top: -2vh;
    position: relative;
  }
  .c-header__avatar {
    margin-top: -5.8rem;
    text-align: right;
    position: relative;
  }
  /* IE11 hack */
  *::-ms-backdrop, .c-header__avatar {
    height: 18vw;
  }
  .c-header__brand {
    text-align: left;
    margin-bottom: 0;
  }
  .c-header__social-buttons {
    position: absolute;
    bottom: 0;
    right: 0;
  }
  .c-header__contact {
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
  }
}

.c-footer__contact-divider {
  margin-bottom: 3.5rem;
}

.c-footer__brand {
  margin-bottom: 1.75rem;
}

@media (min-width: 600px) {
  .c-footer__contact-divider {
    margin-bottom: 6.3rem;
  }
  .c-footer__bottom {
    position: relative;
  }
  .c-footer__brand {
    margin-bottom: 0;
  }
  .c-footer__social-buttons {
    position: absolute;
    right: 0;
    bottom: 0;
    margin-bottom: 0;
  }
}

@media (min-width: 760px) {
  .c-footer__contact {
    margin-bottom: 1.4rem;
  }
}

@media (min-width: 1200px) {
  .c-footer__contact-divider {
    margin-bottom: 8.75rem;
  }
}

.c-brand__title,
.c-brand__sub-title {
  font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-break: auto;
  line-height: 1.75;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  white-space: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
}

.c-brand__first-word,
.c-brand__second-word {
  display: block;
}

.c-brand__sub-title {
  margin-bottom: 0;
}

.c-brand__sizer {
  font-size: 65%;
}

@media (min-width: 1024px) {
  .c-brand__title {
    margin-bottom: .8rem;
  }
}

@media (min-width: 1200px) {
  .c-brand__title {
    margin-bottom: 1.4rem;
  }
  .c-brand__sizer {
    font-size: 100%;
  }
  .c-brand__sizer--sm {
    font-size: 80%;
  }
}

.c-avatar__img {
  border-radius: 50%;
  width: 11rem;
}

@media (min-width: 760px) {
  .c-avatar__img {
    width: 14rem;
  }
}

@media (min-width: 1200px) {
  .c-avatar__img {
    width: 100%;
  }
}

.c-intro p {
  margin-bottom: 1.1rem;
}

@media (min-width: 600px) {
  .c-intro p {
    font-size: 1.22rem;
    margin-bottom: 1.375rem;
  }
}

.c-deco-line {
  height: 5px;
  width: 30%;
  margin-top: 0.55rem;
  margin-bottom: 0.935rem;
  text-align: left;
}

.c-timeline {
  border-left-width: 2px;
  border-left-style: solid;
  margin-left: calc(1rem - 2px);
  padding-left: 25px;
  position: relative;
}

.c-timeline__item {
  position: relative;
}

.c-timeline__point {
  height: 10px;
  width: 10px;
  position: absolute;
  left: -31px;
  top: 3px;
  border-radius: 50%;
}

.c-timeline__end {
  height: 1px;
  width: 16px;
  position: absolute;
  left: -9px;
  bottom: 0;
  border-width: 1px;
  border-style: solid;
}

.c-work__timeframe,
.c-work__heading,
.c-work__title,
.c-work__location {
  margin-bottom: .4rem;
}

.c-work__timeframe,
.c-work__title,
.c-work__location {
  font-weight: 500;
}

.c-work__timeframe,
.c-work__location {
  opacity: .6;
  font-size: 0.7rem;
}

.c-work__title {
  font-size: 0.8rem;
}

.c-social-button {
  display: block;
  text-align: center;
  width: 33px;
  height: 33px;
  font-size: .8rem !important;
  line-height: 2.7 !important;
  border-radius: 2px;
  border: 2px solid;
}

@media (min-width: 1200px) {
  .c-social-button {
    width: 38px;
    height: 38px;
    font-size: 1rem !important;
    line-height: 2.6 !important;
    border-radius: 3px;
  }
}

.c-social-buttons {
  display: -ms-flexbox;
  display: flex;
}

.c-social-buttons li {
  margin-right: 6px;
}

.c-social-buttons li:last-child {
  margin-right: 0;
}

.c-image-overlay {
  position: relative;
  display: block;
  overflow: hidden;
}

.c-image-overlay img {
  width: 100%;
  transition: ease .6s;
}

.c-image-overlay .c-image-overlay__deco-line {
  height: 3px;
  width: 0;
  margin-top: 0.825rem;
  margin-bottom: 0.825rem;
  text-align: left;
  transition: width .65s ease-out;
}

.c-image-overlay:hover img {
  transition: ease .8s;
  transform: scale(1.012);
}

.c-image-overlay:hover .c-image-overlay__deco-line {
  width: 15%;
}

.c-image-overlay__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  max-width: 375px;
  opacity: 0;
  padding: 1.75rem 1.75rem;
  transition: ease .6s;
}

.c-image-overlay:hover .c-image-overlay__content {
  opacity: 1;
}

.c-clients {
  overflow: hidden;
  margin-right: -2.5rem;
  margin-bottom: -1.5rem;
}

.c-clients li {
  float: left;
  margin-right: 2.5rem;
  margin-bottom: 1.5rem;
}

.c-clients a {
  opacity: .6;
}

.c-clients a:hover {
  opacity: 1;
}

.c-clients img {
  max-height: 30px;
}

@media (min-width: 600px) {
  .c-clients img {
    max-height: 50px;
  }
}

.a-progress-bar {
  width: 0;
}

.a-progress-bar.in-view {
  transition: width 1.4s ease-in-out .5s;
}

.fa-lg {
  font-size: 1.5em;
  line-height: 0.75em;
  vertical-align: -15%;
}

.nivo-lightbox-theme-default .nivo-lightbox-close {
  width: 26px;
  height: 26px;
}

.nivo-lightbox-theme-default .nivo-lightbox-title {
  font-family: Lato, 'Helvetica Neue', Helvetica, Arial, sans-serif;
  background: none;
}

.u-pt-0 {
  padding-top: 0 !important;
}

.u-pb-0 {
  padding-bottom: 0 !important;
}

.u-mt-text {
  margin-top: 0.55rem;
}

.u-mb-text {
  margin-bottom: 0.55rem;
}

.u-hide-xs {
  display: none !important;
}

@media (max-width: 599px) {
  .u-show-xs {
    display: none !important;
  }
}

@media (min-width: 600px) {
  .u-hide-sm {
    display: none !important;
  }
}

@media (max-width: 759px) {
  .u-show-sm {
    display: none !important;
  }
}

@media (min-width: 760px) {
  .u-hide-md {
    display: none !important;
  }
}

@media (max-width: 1023px) {
  .u-show-md {
    display: none !important;
  }
}

@media (min-width: 1024px) {
  .u-hide-lg {
    display: none !important;
  }
}

@media (max-width: 1199px) {
  .u-show-lg {
    display: none !important;
  }
}

@media (min-width: 1200px) {
  .u-hide-xl {
    display: none !important;
  }
}

.u-show-xl {
  display: none !important;
}

.t-link-container {
  color: inherit;
  display: block;
}

.t-link-container:hover,
.t-link-container:focus,
.t-link-container:active {
  color: inherit;
}

.t-link-container .t-link-container__item--blended {
  color: inherit;
}

a,
.t-link-container .t-link-container__item,
.t-link-container:hover .t-link-container__item--blended {
  color: #e0a80d;
}

a:hover,
a:focus,
a:active,
.t-link-container:hover .t-link-container__item {
  color: #fefaee;
}

hr,
.t-border-color {
  border-color: #404242;
}

hr,
.t-border-color-bg {
  background: #404242;
}

.t-primary-color,
.t-primary-color-line {
  color: #e0a80d;
}

.t-primary-bg,
.t-primary-color-line {
  background: #e0a80d;
}

.t-title__first-word {
  color: #a4a5a6;
}

.t-title__second-word {
  color: #e0a80d;
}

.t-sub-title {
  color: #979899;
}

.t-title {
  font-size: 4.8rem;
  line-height: 0.91;
}

.t-title__first-word {
  text-transform: lowercase;
  font-weight: 300;
}

.t-title__second-word {
  text-transform: uppercase;
  font-weight: 700;
}

.t-sub-title {
  font-weight: 300;
  font-size: 1.5rem;
  margin-left: .3rem;
}

.fas,
.far,
.fal,
.fab {
  color: #575859;
}

.t-social-button {
  background: #3f4040;
  border-color: #3f4040;
}

.t-social-button .fas,
.t-social-button .far,
.t-social-button .fal,
.t-social-button .fab {
  color: #717273;
}

.t-social-button:hover {
  background: #323333;
}

.t-social-button:hover .fas,
.t-social-button:hover .far,
.t-social-button:hover .fal,
.t-social-button:hover .fab {
  color: #e0a80d;
}

.t-image-overlay {
  background: #2d2e2e;
}

.t-image-overlay * {
  color: #e4e5e5;
}

.t-image-overlay:hover img {
  opacity: 0.4;
}

.t-image-overlay__deco-line {
  color: #c0c1c1;
  background: #c0c1c1;
}

a,
button,
a .fa,
.t-link-container .t-link-container__item,
.t-link-container .t-link-container__item--blended {
  transition: all .15s linear;
}

.t-section__header {
  background: #282929;
}

.t-section__content,
.t-section--header .t-section__header {
  background: #2d2e2e;
}

.t-section__content-border-color {
  border-color: #2d2e2e;
}

.t-timeline__point {
  box-shadow: 0 0 0 6px #2d2e2e;
}

@media (max-width: 1023px) {
  .t-section__header {
    border-top: 1px solid #404242;
    border-bottom: 1px solid #404242;
  }
  .t-section--header .t-section__header {
    border-top: none;
    border-bottom: none;
  }
}

@media (min-width: 1024px) {

  .t-section,
  .t-section__header,
  .t-section--header .t-section__header {
    background: #2b2c2c;
  }
  .t-section__content {
    background: #2d2e2e;
  }

  .t-section:nth-child(even),
  .t-section:nth-child(even) .t-section__header {
    background: #292a2a;
  }
  .t-section:nth-child(even) .t-section__content {
    background: #2b2c2c;
  }
  .t-section:nth-child(even) .t-timeline__point {
    box-shadow: 0 0 0 6px #2b2c2c;
  }
}


        </style>
</head>
        <!-- <link rel='stylesheet' href='assets/css/main.css'> -->
        <!-- <link rel='stylesheet' href='assets/css/themes.dark.css'> -->
        <!-- <link rel='stylesheet' href='assets/css/x.css'> -->
<body>
        <div class='c-main-container  js-main-container'>

            <section class='o-section o-section--header  t-section  t-section--header' style='padding: -50px;'>
                <div class='c-header'>

                    <div class='o-section__header-bg  t-section__header'></div>
                    <div class='o-section__content-bg  t-section__content'></div>

                    <div class='o-container'>
                        <div class='o-section__container' >

                            <header class='o-section__header  c-header__header  t-section__header'>
                                <div class='c-header__inner-header'>

                                    <div class='c-header__avatar'>
                                        <div class='a-header  c-avatar'>
                                            <img class='c-avatar__img' src="../Profile_pic/<?php echo $data1['STUDENT_PROFILE_PIC'];?>" alt=''>
                                        </div>
                                    </div>

                                </div>
                            </header>

                            <div class='o-section__content  c-header__content  t-section__content'>
                                <div class='c-header__inner-content'>

                                    <div class='c-header__top'>

                                        <div class='c-header__brand'>

                                            <div class='c-brand'>
                                                <h1 class='c-brand__title  t-title'>
                                                    <span class='c-brand__sizer'>
                                                        <span class='a-header  c-brand__first-word  t-title__first-word'>
                                                            <?php echo $data1['STUDENT_FIRST_NAME'];  ?>  
                                                        </span>
                                                        <span class='a-header  c-brand__second-word  t-title__second-word'>
                                                            <?php echo $data1['STUDENT_LAST_NAME'];?>
                                                        </span>
                                                    </span>
                                                </h1>
                                                <hr class='c-deco-line' style='height: 1px; width: 75%;' />
                                                <hr class='c-deco-line  t-primary-color-line' style='height: 1px; width: 35%;'/>
                                                </h2>
                                            </div>

                                        </div>

                                    </div>
                                    <div class='c-footer__contact'>
                                    <div class='o-grid'>

                                    <div class='o-grid__col-md-3  o-grid__col-sm-6'>
                                        <div class='o-content'>
                                            <div class='o-content__body'>
                                                <h4>Location</h4>
                                                <address>
                                                    <?php echo $data1["STUDENT_ADDRESS"]; ?>
                                                </address>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='o-grid__col-md-3  o-grid__col-sm-6'>
                                        <div class='o-content'>
                                            <div class='o-content__body'>
                                                <h4>Phone</h4>
                                                <p>
                                                     <?php echo $data1["STUDENT_PHONE_NUMBER"]; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='o-grid__col-md-3  o-grid__col-sm-6'>
                                        <div class='o-content'>
                                            <div class='o-content__body'>
                                                
                                                    <h4>Email</h4>
                                                    <p>
                                                        <span class='t-link-container__item--blended'>
                                                             <?php echo $data1["STUDENT_EMAIL"]; ?>
                                                        </span>
                                                    </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <hr class='c-deco-line  t-primary-color-line' style='height: 1px; width: 75%;'/>
                                </div>

                                </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>


            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Introduction 
                                </h2>
                                <div class='o-content__body  o-section__description' style='margin-top: -10px;'>
                                    <small class='o-section__description'>Carrier Objective</small>
                                    <br>What I am all about.
                                </div>
                            </div>
                        </header>

                        <div class='o-section__content  t-section__content  '>
                            
                            <div class='o-content'>
                                <div class='c-intro'>
                                    <div class='o-content__body'>
                                        <p>
                                            <?php echo $data1["RESUME_CARRIER_OBJECTIVE"];?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Technical Skills
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    It's all the things I can do.
                                </div>
                            </div>
                        </header>

                        <div class='o-section__content  t-section__content  '>
                            
                            <div class='o-grid'>
                              <?php $ts=$data1["RESUME_TECHNICAL_SKILLS"]; 
                              $ts = explode('#', $ts);
                              $a=0;
                              foreach ($ts as $value) {
                                  $a+=1;?>
                                <div class='o-grid__col-sm-6'>
                                    <div class='o-content'>
                                        <div class='o-media  o-media--block'>
                                            <div class='o-media__figure'>
                                                <div class='c-number  t-primary-color'>
                                                    <?php echo $a; ?><small> )</small>
                                                </div>
                                            </div>
                                            <div class='o-media__body'>
                                                <h3>
                                                  <?php echo $value; ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class='c-progress-bar  o-content__body  t-border-color-bg  u-mt-text'>
                                            <hr class='c-deco-line  t-primary-color-line' />
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>

            </section>


            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Personal Skills
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    It's all about how I can do
                                </div>
                            </div>
                        </header>

                        <div class='o-section__content  t-section__content  '>
                            
                            <div class='o-grid'>
                              <?php $ps=$data1["RESUME_PERSONAL_SKILLS"]; 
                              $ps = explode('#', $ps);
                              $a=0;
                              foreach ($ps as $value) {
                                  $a+=1;?>
                                <div class='o-grid__col-sm-6'>
                                    <div class='o-content'>
                                        <div class='o-media  o-media--block'>
                                            <div class='o-media__figure'>
                                                <div class='c-number  t-primary-color'>
                                                    <?php echo $a; ?><small> )</small>
                                                </div>
                                            </div>
                                            <div class='o-media__body'>
                                                <h3>
                                                  <?php echo $value; ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class='c-progress-bar  o-content__body  t-border-color-bg  u-mt-text'>
                                            <hr class='c-deco-line  t-primary-color-line' />
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Education
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    It's how I was made to be.
                                </div>
                            </div>
                        </header>
                        <div class='o-section__content  t-section__content  u-pb-0'>
                            
                            <div class='a-experience-timeline  c-timeline  t-border-color'>
                                <div class='c-timeline__item'>
                                    <div class='c-timeline__point  t-timeline__point  t-primary-bg'></div>
                                    <div class='o-content'>
                                        <div class='o-grid'>
                                            <div class='o-grid__col-md-5'>
                                                <h3 class='c-work__heading'>
                                                    <?php echo $data1['ACADEMIC_10TH_SCHOOL']; ?>
                                                </h3>
                                                <h3 class='c-work__heading t-primary-color'>
                                                    10th (S.S.C)
                                                </h3>
                                                <h4 class='c-work__title'>
                                                    <?php echo $data1['ACADEMIC_10TH_BOARD']; ?>
                                                </h4>
                                                <div class='c-work__timeframe'>

                                                </div>
                                            </div>
                                            <div class='o-grid__col-md-7'>
                                                <div>
                                                    <h1 class='t-primary-color' style='font-size: 88px;'><?php echo round($data1['ACADEMIC_10TH_PERCENTAGE'], 1); ?><small>%</small></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='c-timeline__item'>
                                    <div class='c-timeline__point  t-timeline__point  t-primary-bg'></div>
                                    <div class='o-content'>
                                        <div class='o-grid'>
                                            <div class='o-grid__col-md-5'>
                                                <h3 class='c-work__heading'>
                                                    <?php echo $data1['ACADEMIC_12TH_SCHOOL']; ?>
                                                </h3>
                                                <h3 class='c-work__heading t-primary-color'>
                                                    12th (H.S.S.C)
                                                </h3>
                                                <h4 class='c-work__title'>
                                                    <?php echo $data1['ACADEMIC_12TH_STREAM']."<BR>"; ?>
                                                    <?php echo $data1['ACADEMIC_12TH_BOARD']; ?>
                                                </h4>
                                                <div class='c-work__timeframe'>
                                                </div>
                                            </div>
                                            <div class='o-grid__col-md-7'>
                                                <div>
                                                    <h1 class='t-primary-color' style='font-size: 88px;'><?php echo round($data1['ACADEMIC_12TH_PERCENTAGE'], 1); ?><small>%</small></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='c-timeline__item'>
                                    <div class='c-timeline__point  t-timeline__point  t-primary-bg'></div>
                                    <div class='o-content'>
                                        <div class='o-grid'>
                                            <div class='o-grid__col-md-5'>
                                                <h3 class='c-work__heading'>
                                                    <?php echo $data1['ACADEMIC_BACHELOR_UNIVERSITY']; ?>
                                                </h3>
                                                <h3 class='c-work__heading t-primary-color'>
                                                    <?php echo $data1['ACADEMIC_BACHELOR_DEGREE']; ?>
                                                    (<?php echo $data1['ACADEMIC_BACHELOR_SPECIALIZATION']; ?>)
                                                </h3>
                                                <h4 class='c-work__title'>
                                                    <?php echo $data1['ACADEMIC_BACHELOR_INSTITUTE']; ?>
                                                </h4>
                                                <div class='c-work__timeframe'>
                                                </div>
                                            </div>
                                            <div class='o-grid__col-md-7'>
                                                <div>
                                                    <h1 class='t-primary-color' style='font-size: 88px;'><?php 
                                                    $total=$data1['ACADEMIC_BACHELOR_SEM_1'];
                                                    $total+=$data1['ACADEMIC_BACHELOR_SEM_2'];
                                                    $total+=$data1['ACADEMIC_BACHELOR_SEM_3'];
                                                    $total+=$data1['ACADEMIC_BACHELOR_SEM_4'];
                                                    $total+=$data1['ACADEMIC_BACHELOR_SEM_5'];
                                                    $total+=$data1['ACADEMIC_BACHELOR_SEM_6']; 
                                                    $total/=6;
                                                    $total*=10;
                                                    echo round($total, 1);
                                                    ?><small>%</small></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='c-timeline__item'>
                                    <div class='c-timeline__point  t-timeline__point  t-primary-bg'></div>
                                    <div class='o-content'>
                                        <div class='o-grid'>
                                            <div class='o-grid__col-md-5'>
                                                <h3 class='c-work__heading'>
                                                    <?php echo $data1['ACADEMIC_MASTER_UNIVERSITY']; ?>
                                                </h3>
                                                <h3 class='c-work__heading t-primary-color'>
                                                    <?php echo $data1['ACADEMIC_MASTER_DEGREE']; ?>
                                                    (<?php echo $data1['ACADEMIC_MASTER_SPECIALIZATION']; ?>)
                                                </h3>
                                                <h4 class='c-work__title'>
                                                    <?php echo $data1['ACADEMIC_MASTER_INSTITUTE']; ?>
                                                </h4>
                                                <div class='c-work__timeframe'>
                                                </div>
                                            </div>
                                            <div class='o-grid__col-md-7'>
                                                <div>
                                                    <h1 class='t-primary-color' style='font-size: 88px;'><?php 
                                                    $total=$data1['ACADEMIC_MASTER_SEM_1'];
                                                    $total+=$data1['ACADEMIC_MASTER_SEM_2'];
                                                    $total+=$data1['ACADEMIC_MASTER_SEM_3'];
                                                    $total+=$data1['ACADEMIC_MASTER_SEM_4'];
                                                    $total/=4;
                                                    $total*=10;
                                                    echo round($total, 1);
                                                    ?><small>%</small></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Projects
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    Somethigs I did.
                                </div>
                            </div>
                        </header>

                        <div class='o-section__content  t-section__content  u-pt-0'>
                            
                            <div class='o-content'>
                                <div class='a-education-timeline  c-timeline  t-border-color  o-section__full-top-space'>
                                    <div class='c-timeline__end  t-border-color'></div>
                                    <?php 
                                    $prj=$data1['RSEUME_PROJECTS'];
                                    $prj=explode('#', $prj);
                                    foreach ($prj as $prjs) {
                                      $prjs=explode(',', $prjs);
                                       ?>
                                    <div class='c-timeline__item'>
                                        <div class='c-timeline__point  t-timeline__point  t-primary-bg'></div>
                                        <div class='o-content'>
                                            <div class='o-grid'>
                                                <div class='o-grid__col-md-5'>
                                                <h3 class='c-work__heading t-primary-color'>
                                                    <?php echo $prjs[0]; ?>
                                                </h3>
                                                <h4 class='c-work__title'>
                                                  <?php echo $prjs[2]; ?>
                                                </h4>
                                                <div class='c-work__timeframe'>

                                                </div>
                                            </div>
                                            <div class='o-grid__col-md-7'>
                                                <div>
                                                    <p><?php echo $prjs[1]; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <?php 
                                    }
                                  ?>

                        </div>

                    </div>
                </div>

            </section>
            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Lunguages known
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    Things I love to Write.
                                </div>
                            </div>
                        </header>

                       <div class='o-section__content  t-section__content  '>
                            
                            <div class='o-grid'>
                              <?php 
                               $ln=$data1['RESUME_LANGUAGES'];
                               $ln1=explode('#', $ln);
                               $a=0;
                              foreach ($ln1 as $value) {
                                  $a+=1;?>
                                <div class='o-grid__col-sm-6'>
                                    <div class='o-content'>
                                        <div class='o-media  o-media--block'>
                                            <div class='o-media__figure'>
                                                <div class='c-number  t-primary-color'>
                                                    <?php echo $a; ?><small> )</small>
                                                </div>
                                            </div>
                                            <div class='o-media__body'>
                                                <h3>
                                                  <?php echo $value; ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class='c-progress-bar  o-content__body  t-border-color-bg  u-mt-text'>
                                            <hr class='c-deco-line  t-primary-color-line' />
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>

            </section>
            
            <section class='o-section  t-section  '>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Achivments
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    Happy times!
                                </div>
                            </div>
                        </header>

                          <div class='o-section__content  t-section__content  '>
                            
                            <div class='o-grid'>
                              <?php 
                               $ra=$data1['RESUME_ACHIVEMENTS'];
                               $ra1=explode('#', $ra);
                               $a=0;
                              foreach ($ra1 as $value) {
                                  $a+=1;?>
                                <div class='o-grid__col-sm-6'>
                                    <div class='o-content'>
                                        <div class='o-media  o-media--block'>
                                            <div class='o-media__figure'>
                                                <div class='c-number  t-primary-color'>
                                                    <?php echo $a; ?><small> )</small>
                                                </div>
                                            </div>
                                            <div class='o-media__body'>
                                                <h3>
                                                  <?php echo $value; ?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class='c-progress-bar  o-content__body  t-border-color-bg  u-mt-text'>
                                            <hr class='c-deco-line  t-primary-color-line' />
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>

            </section>

            <section class='o-section  t-section  o-section--footer'>

                <div class='o-section__header-bg  t-section__header'></div>
                <div class='o-section__content-bg  t-section__content'></div>

                <div class='o-container'>
                    <div class='o-section__container'>

                        <header class='o-section__header  t-section__header'>
                            <div class='o-content'>
                                <h2 class='o-section__heading'>
                                    Contact
                                </h2>
                                <div class='o-content__body  o-section__description'>
                                    Call me, maybe.
                                </div>
                            </div>
                        </header>

                        <div class='o-section__content  t-section__content  '>
                            
                                <div class='c-footer__contact'>
                                    <div class='o-grid'>

                                    <div class='o-grid__col-md-3  o-grid__col-sm-6'>
                                        <div class='o-content'>
                                            <div class='o-content__body'>
                                                <h4>Location</h4>
                                                <address>
                                                       <?php echo $data1["STUDENT_ADDRESS"]; ?>
                                                </address>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='o-grid__col-md-3  o-grid__col-sm-6'>
                                        <div class='o-content'>
                                            <div class='o-content__body'>
                                                <h4>Phone</h4>
                                                <p>
                                                   <?php echo $data1["STUDENT_PHONE_NUMBER"]; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='o-grid__col-md-3  o-grid__col-sm-6'>
                                        <div class='o-content'>
                                            <div class='o-content__body'>
                                                
                                                    <h4>Email</h4>
                                                    <p>
                                                        <span class='t-link-container__item--blended'>
                                                                 <?php echo $data1["STUDENT_EMAIL"]; ?>
                                                        </span>
                                                    </p>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </div>

                                <hr class='c-footer__contact-divider' />

                                <div class='o-content'>
                                    <div class='c-footer__bottom'>
                                        <div class='c-footer__brand'>

                                            <div class='c-brand'>
                                                <div class='o-content__body'>
                                                    <h1 class='c-brand__title  t-title'>
                                                        <span class='c-brand__sizer  c-brand__sizer--sm'>
                                                            <span class='a-footer  c-brand__first-word  t-title__first-word'>
                                                                <?php echo $data1["STUDENT_FIRST_NAME"]; ?>
                                                            </span>
                                                            <span class='a-footer  c-brand__second-word  t-title__second-word'>
                                                                <?php echo $data1["STUDENT_LAST_NAME"]; ?>
                                                            </span>
                                                        </span>
                                                    </h1>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
              </div>
          </section>
        </div>
    </body>
</html>