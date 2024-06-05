<?php

$stocks = json_decode(file_get_contents('stocks.json'), true);


$gainers = json_decode(file_get_contents('gainers.json'), true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stocks.css">
    <title>Projekt</title> 
    <style> 
        .navbar-nav .nav-link {
            color: #000;  
        }
        .navbar-nav .nav-link:hover {
            color: #fff; 
            background-color: green;  
            border-radius: 5px;  
        }
    </style>
</head>
<body> 

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container justify-content-center">
            <div class="navbar-nav">
                <a class="nav-link" href="news.php">News</a>
                <a class="nav-link" href="stocks.php">Stocks</a>
                <a class="nav-link" href="etfs.php">ETFs</a>
            </div>
        </div> 
    </nav> 
  
    
    <div class="containter text-center py-3">
        <h2 class="mb-4">Stocks: Most Actives</h2>
        <div class="table-responsive mx-auto bg-body-tertiary p-4 rounded" style="max-width: 950px;" >
            <table class="table table-striped table-hover table-bordered text-center ">
                <caption>Why Marathon Digital Stock Is a Great Value Play for Bitcoin Believers? Sure, you can buy a spot Bitcoin (BTC-USD) exchange-traded fund, but here's a much more interesting idea: Marathon Digital (NASDAQ:MARA) is a premier crypto miner with impressive financials. As you learn more about the company, you'll see why Marathon Digital stock is a prime pick for Bitcoin aficionados.

                Besides, Marathon Digital isn't too richly valued, so it's a great time for investors to apply a “buy low, sell high” strategy. But don't just take my word for it, as the data will support my bullish thesis about Marathon Digital.
                </caption>      
                <thead style="table-dark">
                    <tr>
                    <th scope="col">Symbol</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price(Intraday)</th>
                    <th scope="col">Change</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Market Cap</th>
                    <th scope="col">PE Ratio(TTM)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($stocks['stocks'] as $stock) { ?>
                    <tr>
                    <td><?php echo $stock['symbol']; ?></td>
                    <td><?php echo $stock['name']; ?></td> 
                    <td><?php echo $stock['price']; ?></td>
                    <td><?php echo $stock['change']; ?></td>
                    <td><?php echo $stock['volume']; ?></td>
                    <td><?php echo $stock['marketcap']; ?></td>
                    <td><?php echo $stock['peRatio']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>        
        </div>
        <div class="conatiner text-start py-2">
        </div>
    </div>


    <div class="containter text-center py-3">
        <h2 class="mb-4">Stocks: Gainers</h2>
        <div class="table-responsive mx-auto bg-body-tertiary p-4 rounded" style="max-width: 950px;" >
            <table class="table table-striped table-hover table-bordered text-center ">
                <caption>
                Nomura Pay for Top Executives Rises 150% as Profit Rebounds: Nomura Holdings Inc. more than doubled pay for its top managers last fiscal year, as earnings at Japan's largest brokerage rebounded on booming domestic markets.Total compensation paid to the firm's eight executive officers rose 150% in the year ended March 31 to 4.46 billion yen ($28.4 million), according to a recent notice for a planned annual shareholders general meeting next month.
                </caption>
               
                <thead style="table-dark">
                    <tr>
                    <th scope="col">Symbol</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price(Intraday)</th>
                    <th scope="col">Change</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Market Cap</th>
                    <th scope="col">PE Ratio(TTM)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($gainers['gainers'] as $gain) { ?>
                    <tr>
                    <td><?php echo $gain['symbol']; ?></td>
                    <td><?php echo $gain['name']; ?></td> 
                    <td><?php echo $gain['price']; ?></td>
                    <td><?php echo $gain['change']; ?></td>
                    <td><?php echo $gain['volume']; ?></td>
                    <td><?php echo $gain['marketcap']; ?></td>
                    <td><?php echo $gain['peRatio']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>        
        </div>
    </div>

    
     
    <p class="text-center">There results were taken from <a href="https://finance.yahoo.com/" target="_blank">finance.yahoo.com</a>  on June 5, 2024. Currency in USD.</p>
    <p class="text-center">&copy; David Grabovac. All rights reserved.</p>

   
</body>
</html>