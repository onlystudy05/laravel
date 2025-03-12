
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>App Name - @yield('title')</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 </head>
 <body>
   <nav style="display: flex; justify-content: center; align-items: center; padding: 20px; gap:30px ;">
      <a href="">Accueil</a>
      <a href="">Presentation</a>
      <a href="">Resultat</a>
      <a href="">Contact</a>
      <button type="button">Rechercher</button>
   </nav>

   <div >
       @yield('hero') 
   </div>
   <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; padding: 20px; gap:30px; width: 50%;">
       @yield('content') 
   </div>

<footer style="border:1px black solid ; margin-top: 30px; display: flex; justify-content: center; flex-direction: column; align-items: center; padding: 20px; ">
      <a href="">Accueil</a>
      <a href="">Presentation</a>
      <a href="">Contact</a>
      <p >@ copyright 2025</p>
      <p >tele:06060606060</p>
</footer>
 </body>
 </html>