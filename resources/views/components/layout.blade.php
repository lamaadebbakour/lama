<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link href="app.css" rel="stylesheet">

<body style="font-family: Open Sans, sans-serif ;background-color:rgb(209, 121, 62);">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
       
        <div class="mt-8 md:mt-0">
            <a href="/" class="text-xs font-bold uppercase" >
           <center> <h1 style="border:5px; width:200px;height:70px; font-size: 25px; padding: 20px;">
           Home Page</h1> </center></a> 
            
           <br><br><br><br><br><br><br><br><br>

            
        </div>
    </nav>

    {{ $slot }}


    
</section>
</body>
