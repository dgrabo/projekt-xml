<?php

$xml = simplexml_load_file('etfs.xml');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="etfs.css">
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


    <div class="container pb-5 bg-body-tertiary">
        <div class="row pt-3 text-center">


            <div class="container text-center py-3">
                <h2>Top ETFs</h2>
                <div class="table-responsive mx-auto bg-body-tertiary p-4 rounded" style="max-width: 1000px;" >
                    <table class="table table-striped table-hover table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Symbol</th>
                                <th>Name</th>
                                <th>Price(Intraday)</th>
                                <th>Change</th>
                                <th>Volume</th>
                                <th>50 Day Average</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($xml->ETF as $etf): ?>
                                <tr>
                                    <td><?php echo $etf->Symbol; ?></td>
                                    <td><?php echo $etf->Name; ?></td>
                                    <td><?php echo $etf->Price; ?></td>
                                    <td><?php echo $etf->Change; ?></td>
                                    <td><?php echo $etf->Volume; ?></td>
                                    <td><?php echo $etf->DaysAverage; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container text-center py-3 mx-auto" style="max-width: 900px">
            <h4 class="text-start">Markets Are Unhappy With Sheinbaum's Landslide Win in Mexico. Here's Why.</h4>
            <img src="imgs/mexico.png" alt="mexico">
            <p class="text-start mt-3">
                Claudia Sheinbaum's landmark election as Mexico's first female president didn't go over well with markets.
            </p>    
            <p class="text-start">                    
                Mexican stocks sank and the peso slid on concern that her landslide victory could give her the mandate to make changes to the constitution and pursue other policies that could rattle investors. The iShares MSCI Mexico EWW 2.66%
                exchange-traded fund slid 8% to $60 and the Mexican peso sank 3% against the dollar.
            </p>    
            <p class="text-start">
                Investors have flocked to Mexico in recent years. The country has benefited from rising tension between the U.S. and China, becoming a favored alternative for companies looking to diversify their supply chains. At the same time, the strength of the U.S. economy has helped its neighbor to the south, fueling increased exports, tourism, and remittances—a combination that has improved the outlook for Mexico's economic growth.
            </p>    
            <p class="text-start">                    
                But the wide margin of victory for Sheinbaum, departing President Andres Manuel Lopez Obrador's protégé, in a historic matchup between two women has rattled investors.
            </p>


            <h4 class="text-start">Amplify ETFs Earns Four Nominations for With Intelligence Mutual Fund and ETF Awards</h4>
            <img src="imgs/amplify.png" alt="amplify">

            <p class="text-start mt-3">
                CHICAGO, June 05, 2024 (GLOBE NEWSWIRE) -- Amplify ETFs, a leading provider of innovative exchange-traded funds, is proud to announce its nominations in four categories at this year's With Intelligence Mutual Fund and ETF Awards. 
            </p>
            <p class="text-start">
                Amplify funds are being recognized in the following categories:
            </p>
            <ul class="text-start">
                <li>ETF Innovation of the Year: Amplify Samsung SOFR ETF (SOF) - the first ETF aimed to deliver the closely-watched Secured Overnight Financing Rate yield to investors.</li>
                <li>Digital Assets ETF of the Year: Amplify Transformational Data Sharing ETF (BLOK) - the first actively-managed ETF focused on companies involved in blockchain and crypto.</li>
                <li>Thematic ETF of the Year: Amplify Transformational Data Sharing ETF (BLOK)</li>
                <li>Fund Leader of the Year: Christian Magoon, Founder & CEO, Amplify ETFs</li> 
            </ul>
            <p class="text-start">
                Amplify remains proactive in seeking out and capitalizing on opportunities to broaden its range of products and market presence. In 2023, Amplify ETFs entered into a definitive agreement to purchase 14 ETFs holding $3.6 billion from another US based ETF Sponsor. That acquisition closed in January of 2024. In addition, the firm recently launched the first index-based ETF to target weight loss drug and treatment stocks (THNR).
            </p>
            
            <p class="text-start">
                "Being shortlisted for these awards is an incredible honor after an eventful year filled with pursuing a major acquisition and launching new funds," said Magoon. "The recognition highlights our hard work and ongoing commitment to provide valuable products to investors and advisors. We are motivated to continue pioneering innovative developments in ETFs."
            </p>
            <p class="text-start">
            The winners of the With Intelligence Mutual Fund and ETF Awards will be announced on June 18 in New York City.
            </p>

            
            </div>
            
            <p class="text-center">There results were taken from <a href="https://finance.yahoo.com/" target="_blank">finance.yahoo.com</a>  on June 5, 2024. Currency in USD.</p>    
            <p>&copy; David Grabovac. All rights reserved.</p>      

        </div>

    </div>
     


</body>
</html>