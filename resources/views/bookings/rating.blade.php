<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CabHUB</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap" rel="stylesheet"> 
</head>
<body class="font-sans">
    <header id="page_header" class="flex items-center justify-between py-4 px-6 bg-yellow-500 text-white">
        <nav id="nav_bar">
            <ul id="nav_list" class="flex">
                <li class="nav_link"><a href="#" class="px-4 py-2">HOME</a></li>
                <li class="nav_link"><a href="#" class="px-4 py-2">BOOK</a></li>
            </ul>
        </nav>
    </header>
<body>
    
<style>
    
</style>  
        @if(!empty($value->star_rating))
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                        <p class="font-weight-bold ">Review</p>
                        <div class="form-group row">
                        <input type="hidden" name="booking_id" value="{{ $value->id }}">
                        <div class="col">
                            <div class="rated">
                            @for($i=1; $i<=$value->star_rating; $i++)
                                <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/>
                                <label class="star-rating-complete" title="text">{{$i}} stars</label>
                            @endfor
                            </div>
                        </div>
                        </div>
                        <div class="form-group row mt-4">
                        <div class="col">
                            <p>{{ $value->comments }}</p>
                        </div>
                        </div>
                </div>
            </div>
            </div>
        @else
        <div class="container">
            <div class="row">
                <div class="col mt-4">
                    <form class="py-2 px-4" action="{{ route('bookings.store', ['id' => 1]) }}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                        <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                        @csrf
                        <p class="font-weight-bold ">Review</p>
                        <div class="form-group row">
                        <div class="col">
                            <div class="rate">
                                <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                <label for="star5" title="text">5 stars</label>
                                <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                <label for="star4" title="text">4 stars</label>
                                <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                <label for="star3" title="text">3 stars</label>
                                <input type="radio" id="star2" class="rate" name="rating" value="2">
                                <label for="star2" title="text">2 stars</label>
                                <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                <label for="star1" title="text">1 star</label>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row mt-4">
                        <div class="col">
                            <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                        </div>
                        </div>
                        <div class="mt-3 text-right">
                        <button type="submit" class="btn btn-sm py-2 px-3 btn-info">Submit
                        </button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            @endif
</body>
</html>