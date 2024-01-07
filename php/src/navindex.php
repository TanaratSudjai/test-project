<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/seach.css">
</head>
<body>

<div class="navbar navbar-expand-lg navbar-light bg-light p-3 fixed-top" ">
    <a class=" navbar-brand " style="font-weight: bold; width:150px; color: #4965c9;"  href="index.php">CRADBOOK</a>
        <div class="nav2 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">HOMEPAGE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cradpage.php">CRADBOOK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert-form.php">INSERT BOOK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexS.php">EDIT & DELETE</a>
                </li>
            </ul>
            <form class="searchform form-inline my-2 my-lg-0" method="POST" action="displaybooksearch.php">
                    <div class="searchBox">

                        <input class="searchInput" type="text" name="query" placeholder="Search Books">

                        <button class="searchButton" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                                <g clip-path="url(#clip0_2_17)">
                                    <g filter="url(#filter0_d_2_17)">
                                    <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
                                    </g>
                                </g>
                                <defs>
                                    <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
                                    </filter>
                                    <clipPath id="clip0_2_17">
                                    <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                                                    

                        </button>
                    </div>
            </form>               
        </div>
        <div class="icon">
            <a class="cls" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" height="30" width="30"><g><path d="M27 12A5 5 0 1 1 22 7 5.02 5.02 0 0 1 27 12Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><g><path d="m47 9 -9 0" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m42 13 -4 -4 4 -4" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path></g><path d="M31 6V3a2 2 0 0 0 -2 -2h-26a2 2 0 0 0 -2 2v42a2 2 0 0 0 2 2H14" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path><path d="m41.72 33.82 -6 0.54a1 1 0 0 1 -0.98 -0.54l-4.48 -8.96a5.6 5.6 0 0 1 5.48 2 3 3 0 1 0 4.68 -3.76 11.64 11.64 0 0 0 -13.4 -3.56l-4.52 1.8a4 4 0 0 1 -4 -0.72l-1.76 -1.5a3 3 0 0 0 -3.9 4.56l1.76 1.5a10 10 0 0 0 10 1.76l1.78 3.54 -3.26 1.52a7.08 7.08 0 0 0 -3.84 6.96l0.54 5.26a3 3 0 1 0 6 -0.6l-0.52 -5.26a1 1 0 0 1 0.54 -0.98l3.18 -1.6 0.32 0.64a6.96 6.96 0 0 0 6.24 3.88c0.44 0 0 0 6.74 -0.6a3 3 0 0 0 -0.56 -6Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path></g></svg>
            </a>
        </div> 
</div>
    

</style>
</body>
</html>