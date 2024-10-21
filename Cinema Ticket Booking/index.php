<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Ticket Booking</title>
    
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="navbar gradient-background">
        <a href="">Home</a>
        <a href="">Movies</a>
        <a href="">Booking</a>
        <a href="">Contact Us</a>
    </div>

    <div class="hero gradient-background">
        <h1>Welcome to Cinema Ticket Booking</h1>
        <p>Book your tickets now for the latest movies!</p>
    </div>

    <section id="movies" class="movie-list">
        <div class="movie">
            <img src="https://th.bing.com/th/id/OIP.cDWz2koa_HRVKtEs06G0ogHaK-?w=186&h=276&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Movie 1 Poster">
            <h3></h3>
            <p></p>
            <button>Book Now</button>
        </div>
        <div class="movie">
            <img src="https://th.bing.com/th/id/OIP.pV3VBmxyDDAVaerE8IIMnwHaK9?w=186&h=276&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Movie 2 Poster">
            <h3></h3>
            <p></p>
            <button >Book Now</button>
        </div>
        <div class="movie">
            <img src="data:image/jpeg;base64,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" alt="Movie 3 Poster">
            <h3></h3>-
            <p></p>
            <button ><a href="./booking.html">Book Now</a></button>
        </div>
    </section>

    <footer class="gradient-background">
        <p>&copy; 2024 Cinema Ticket Booking. All rights reserved.</p>
    </footer>

</body>
</html>