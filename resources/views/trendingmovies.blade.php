<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ url ('assets/css/style.css')}}>
    <title>Movie App</title>
</head>
<body>

    <header>
        <form  id="form" action="/search" method="GET" >
            <input type="text" name="search"  placeholder="Search" id="search" class="search">
        </form>
    </header>



    <div id="tags">
        @foreach ($showgenres as $genre)

        <div class=tag onclick="window.location='/genres/{{$genre['id']}}'" name="genretag">
            {{$genre['name']}}
        </div>

        @endforeach
    </div>


    <div id="myNav" class="overlay">


        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>

        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a>

        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>

    <main id="main">

    @foreach ($movies as $movie)
    <div class="movie" onclick="window.location='/genres/{{movie['id']}}'" >
        <img src ="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}">
        <div class="movie-info">
            <h3>{{$movie['title']}}</h3>
            <span class="green">{{$movie['vote_average']}}</span>
        </div>
        <div class="overview">
            <h3>Overview</h3>
            {{$movie['overview']}}
            <br/>
            <button class="know-more" id="{{$movie['id']}}">Know More</button>
        </div>
    </div>
    @endforeach
</main>

<main id="main"></main>
<div class="pagination">
    <div class="page" id="prev">Previous Page</div>
    <div class="current" id="current">1</div>
    <div class="page" id="next">Next Page</div>

</div>
    </body>
</html>
