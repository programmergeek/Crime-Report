<!DOCTYPE html>
<link rel="stylesheet" href="css/styles.css">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <div style="display: grid; grid-template-columns: 300px auto;">
        <div id="sidebar" class="grid sidebar">
            <button class="btn secondary-btn icon-btn">
                <img src="images/home.png" alt="home" class="icon"> Home
            </button>
            <button class="btn secondary-btn icon-btn">
                <img src="images/stats.png" alt="statistics" class="icon"> Stats
            </button>
            <button class="btn primary-btn">
                Report Crime
            </button>
        </div>
        <div id="reports" style="display:grid; grid-template-rows: auto 1fr; row-gap: 10px;">
            <div id="filter" class="bg-white" style="width: 925px; height: 50px; border-radius: 15px;">
                <form action="" method="get" class="flex">
                    <h3 style="display: flex; margin-left: 25px; margin-top: 12px;">Filter by
                        <div style="border-bottom: 1px solid black; text-align: center; min-width: 75px; cursor: pointer;">
                            Crime
                            <div></div>
                        </div>or
                        <div style="border-bottom: 1px solid black; text-align: center; min-width: 75px; cursor: pointer;">
                            Date
                            <div></div>
                        </div>
                    </h3>
                </form>
            </div>
            <div style="display: grid; grid-template-columns: 380px 545px; gap: 10px;">
                <div id="card-snippets" class="flex flex-col" style="height: 87vh; width: 360px; overflow: auto; padding: 15px;">
                    <div class="card center" style="height: 130px; width: 305px; padding: 15px; margin-top: 5px; margin-left: auto; margin-right: auto;">
                        <h3 style="margin: 0;">Theft in Block 8</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan orci eget urna vehicula, vitae aliquam felis luctus.</p>
                    </div>
                    <div class="card center" style="height: 130px; width: 305px; padding: 15px; margin-top: 5px;">
                        <h3 style="margin: 0;">Theft in Block 8</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan orci eget urna vehicula, vitae aliquam felis luctus.</p>
                    </div>
                </div>
                <div id="full-report" class="bg-white rounded-md" style="height: 87vh; width: 535px; overflow: auto;">
                    <h2 id="report-title" style="padding: 20px; margin-top: 10px; margin-bottom: 5px; padding-bottom: 5px;"></h2>
                    <h5 id="date-time" style="margin-top: 5px; margin-bottom: 5px; color:gray; margin-left: 20px;"></h5>
                    <p style="padding: 20px; padding-top: 5px; margin: 0;" id="description"></p>
                    <h4 style="padding-left: 20px; margin-top: 5px;">Location</h4>
                    <div id="map" class="center"></div>
                    <div id="comments">
                        <form action="" method="post" class="p-md">
                            <h4>Leave a comment</h4>
                            <input type="text" name="comment" class="text-input w-90percent">
                            <button type="submit" class="btn primary-btn" style="margin-top: 10px;">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div hidden id="lat"></div>
    <div hidden id="long"></div>
    <script type="module" src="js/report.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFaRccGoN_KDZXuSRtO1PLvD51uWDZ1aA&callback=initMap&v=weekly" defer></script>
    <script src="js/maps.js"></script>
</body>

</html>