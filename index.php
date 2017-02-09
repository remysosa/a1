<?php
$quotes = [
  'Good design is making something intelligible and memorable. Great design is making something memorable and meaningful. - Dieter Rams',
  'One chord is fine. Two chords are pushing it. Three chords and you&#39;re into jazz - Lou Reed',
  'The world is a stage, but the play is badly cast. - Oscar Wilde'
];
shuffle($quotes);
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Assignment 1: Intro</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
      <h1>Ruben Sosa</h1>
      <img src = "images/IMG_0090.jpg" alt="Me">
      <h2>About Me</h2>
      <p>Hi y'all, My name is Ruben Sosa and I just recently graduated from Northeastern University with a degree in Music Business, where I focused on both music recording/technology and ethnomusicology. I interned with and now work for the IT department at the Law School as front-line support. While in high school and college I worked occasionally as a freelance graphic designer, for which I learned, among other things, HTML and CSS. I also took introductory computer science courses at Northeastern. I'm hoping to build skills in development as I think they could give me an opportunity to tie together my different interests.<p>
      <h1>Quote of the Day</h1>
      <p><?php echo $quotes[0]?></p>
    </body>
</html>
