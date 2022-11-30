<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazy Uncle Ben's Car Store</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="jumbotron text-center header">
        <h1>CRAZY UNCLE BEN'S CRAZY CAR DEALERSHIP</h1>
        <h2>The <b>CRAZIEST</b> dealership with the <b>CRAZIEST</b> prices!</h2>
    </div>
    <div class="full-container">
        <div class="items container">
            <div class="searchbar">
                <h5>Search fo' a car!</h5>
                <input id="search-box">
                <input type="submit" id="search-button" value="Search">
            </div>

            <div class="row">
                
                <script>
                    let query = $("#search-box").val();
                    console.log(query)
                $("#search-button").click(() => {
                    document.location.href = "/search.php?q=" + encodeURIComponent(query);
                });
                </script>
            </div>
        <!--
            <div class="row text-center">
                <div class="col-md-3 col-lg-3 col-sm-6 listing">
                    <h3 class="model">2022 Bugatti Chiron</h3>
                    <img src="img/chiron.jpg" class="car-img">
                    <h4>Price: <span class="price">$8.50</span> </h4>
                    <button>Add to Cart</button>

                    <div class="reviews">
                        <div> 
                            <h6 class="user">Joey P.</h6>
                            <p class="rating">3 stars</p>
                            <p class="review">Handling is good, but it's a little bit on the slower side. Top speed is only like 270 mph :/. </p>
                        </div>
                        <div>
                            <h6 class="user">Julian T.</h6>
                            <p class="rating">4 stars</p>
                            <p class="review">I love weaving through lanes and speeding in this thing. There's no replacement for a brand-new foreign. However, every time I hit a pedestrian, the windshield breaks, but I'm sure they'll fix that in the next model</p>
                        </div>
                        <div>
                            <h6 class="user">Adam S.</h6>
                            <p class="rating">5 stars</p>
                            <p class="review">I love this thing. The engine roars like a dinosaur, it handles beautifully, and it breaks 150 mph without breaking a sweat. And with these prices, I bought 15 of them. When I die, bury me with my Bugattis</p>
                        </div>
                        <div>
                            <h6 class="user">Hank S.</h6>
                            <p class="rating">5 stars</p>
                            <p class="review">I spent my last $8 on this. Now all I do is drive around in this all day, siphoning gas from Civic drivers. I love this car more than words can say. The second I get the money to buy another, I'm doing it.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-lg-3 col-sm-6 listing">
                    <h3 class="model">2004 Pontiac Aztek</h3>
                    <img src="img/aztek.jpg" class="car-img">
                    <h4>Price: <span class="price">$5,200</span> </h4>
                    <button onclick="alert('Great choice')">Add to Cart</button>

                    <div class="reviews">
                        <div>
                            <h6 class="user">Walter W.</h6>
                            <p class="rating">5 stars</p>
                            <p class="review">I love driving my Aztek. It's the best car for doing legal activities and following the law! Sleek, modern, stylish, and perfectly unsuspecting. I wish I had 2</p>
                        </div>
                        <div>
                            <h6 class="user">Jason T.</h6>
                            <p class="rating">1 star</p>
                            <p class="review">If this were the last car left in the world, I would walk everywhere. If I had to choose between setting myself on fire and driving a Pontiac Aztek, I would start covering myself in gasoline. I hate this car</p>
                        </div>
                        <div>
                            <h6 class="user">Roger R.</h6>
                            <p class="rating">5 stars</p>
                            <p class="review">The Aztek will go down in history as humanity's greatest achievement. It's a car with a cooler and a built-in tent, what else do you need?</p>
                        </div>
                        <div>
                            <h6 class="user">Michael P.</h6>
                            <p class="rating">1 star</p>
                            <p class="review">Really? People like this car? This is one of the ugliest, stupidest, and slowest cars I ever had the displeasure of driving. I would rather drive a smart car with spikes for seats instead of a Pontiac Aztek.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 listing" style="margin-top: 21px">
                    <h3 class="model">2020 Lamborghini Aventador SVJ</h3>
                    <img src="img/aventador_svj.png" class="car-img">
                    <h4>Price: <span class="price">$20</span> (plus $5.99 shipping + handling)</h4>
                    <button>Add to Cart</button>

                    <div class="reviews">
                        <div>
                            <h6 class="user">Jeff B.</h6>
                            <p class="rating">5 stars</p>
                            <p class="review">I love driving this thing! Handles like a dream, and I can tell it gets people's attention. At $20, Crazy Uncle Ben is absolutely GIVING this away!</p>
                        </div>
                        <div>
                            <h6 class="user">Alex K.</h6>
                            <p class="rating">4 stars</p>
                            <p class="review">By far, the best car I've ever driven. People's heads turn whenever I speed through the streets in this. My only gripe is that I get like 5 times as many speeding tickets now</p>
                        </div>
                        <div>
                            <h6 class="user">Dan B.</h6>
                            <p class="rating">5 stars</p>
                            <p class="review">Great car, and the price point is fantastic! I spent my entire paycheck on these, so now I own 31 of them, one for every day of the month. Could not recommend this car more</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-lg-3 col-sm-6 listing">
                    <h3 class="model">2017 Smart ForTwo</h3>
                    <img src="img/fortwo.jpg" class="car-img">
                    <h4>Price: <span class="price">$37,210</span></h4>
                    <button onclick="alert('Really?')">Add to Cart</button>
                    <div class="reviews">
                        <div>
                            <h6 class="user">Tyler K.</h6>
                            <p class="rating">1 star</p>
                            <p class="review">I got this car because I thought people would think I'm smart. Now I can't drive anywhere without people pointing and laughing at me. I've never been more embarrased and emasculated.</p>
                        </div>
                        <div>
                            <h6 class="user">Tony R.</h6>
                            <p class="rating">1 star</p>
                            <p class="review">I'm 7'2", so I had to buy two of them and ride these around like roller skates. Let me tell you, they are MURDER on my feet. If they weren't designed for human feet, what were they built for?</p>
                        </div>
                        <div>
                            <h6 class="user">Michael E.</h6>
                            <p class="rating">1 star</p>
                            <p class="review">I thought this would be a good car, but no! This thing is slower than a snail, it handles like garbage, and now I can't haul lumber and sheet metal like I used to. Not worth the price at all.</p>
                        </div>
                    </div>
                </div>
            </div>
        -->
        </div>
    </div>
</body>
</html>
