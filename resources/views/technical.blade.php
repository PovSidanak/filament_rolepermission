
<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <!-- <link rel="stylesheet" href="../../public/css/style.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/customer.css">
    <link rel="stylesheet" href="../css/atm.css">
    <link rel="stylesheet" href="../css/technical.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Dashboard Sidebar Menu</title>
</head>
<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../image/deam.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="logo">CRM</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="home">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link drop-wrapper" id="1">
                        <a href="#">
                            <i class='bx bx-user icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Client</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-1" style="padding-left: 60px; display: none;">
                        <a href="lead" class="link1 ">Lead</a>
                        <a href="customer" class="link2">Customer</a>
                        <a href="service" class="link2">Service</a>
                    </div>

                    <li class="nav-link drop-wrapper" id="2">
                        <a href="#">
                            <i class='bx bx-notepad icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Ticket</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-2" style="padding-left: 60px; display: none;">
                        <a href="atm" class="link1">Atm</a>
                        <a href="ticket" class="link2">Ticket</a>
                    </div>
                    
                    <li class="nav-link drop-wrapper list_active" id="3">
                        <a href="#">
                            <i class='bx bxs-report icon' ></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Report</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-3" style="padding-left: 60px; display: none;">
                        <a href="sale" class="link1">Sale</a>
                        <a href="technical" class="link2 sub-list-active">Technical</a>
                    </div>

                    <li class="nav-link drop-wrapper" id="4">
                        <a href="#">
                            <i class='bx bx-user-circle icon'></i>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; width: 100%; padding: 0 10px 0 0;">
                                <span class="text nav-text">Staff</span>
                                <i class='bx bxs-chevron-down icon'></i>
                            </div>
                        </a>
                    </li>
                    <div class="text" id="drop-container-4" style="padding-left: 60px; display: none;">
                        <a href="staff" class="link1 text">Staff</a>
                        <a href="manage" class="link2">Role</a>
                        <a href="permission" class="link3">Permission</a>
                    </div>


                    <li class="nav-link">
                        <a href="calendar">
                            <i class='bx bx-calendar icon' ></i>
                            <span class="text nav-text">Calender</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home" >
        <div class="sidebar-on">
            <div>
                <div style="float: left;"> <p class="nameList">TECHNICAL</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">    
            <div class="all">
                <div class="container-conReport1" style="float: left;">
                    <div class="on1">
                        <div style="float: left;">
                            <p class="p1">PM request</p>
                        </div>
                        <div style="float: right;">
                            <a href=" listreportPM">
                            <button class="btn-list-rep-pm">LIST REPORT</button>
                            </a>
                        </div>
                    </div>
                    <div class="under1">
                        <div style="float: left;" >
                            <img  class="img-payment" src="../image/BTI.jpg" alt="">
                        </div>
                        <div style="float: right;">
                        <a href=" createPM">
                            <button class="btn-create-pm">NEW REPORT</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-conReport2" style="float: right;">
                    <div class="on2">
                        <div style="float: left;">
                            <p class="p2">BTI request</p>
                        </div>
                        <div style="float: right;">
                        <a href="listreportBTI">
                            <button class="btn-list-rep-bti">LIST REPORT</button>
                            </a>
                        </div>
                    </div>
                    <div class="under2">
                        <div style="float: left;">
                            <img class="img-payment" src="../image/BTI.jpg" alt="">
                        </div>
                        <div style="float: right;">
                        <a href=" createBTI">
                            <button class="btn-create-bti">NEW REPORT</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </div>
    </nav>
    </section>
    <script>

    //     const dropWrapper = document.querySelectorAll('.drop-wrapper')
    //     dropWrapper.forEach((element) => {
    //         const dropElementId = 'drop-container-' + element.getAttribute('id').toString()
    //         const dropElement = document.getElementById(dropElementId)
    //         element.addEventListener('click', function () {
    //             dropElement.classList.toggle('show');
    //         });
    //     })
    //     // start sidebar
    //     const body = document.querySelector('body'),
    //   sidebar = body.querySelector('nav'),
    //   toggle = body.querySelector(".toggle"),
    //   searchBtn = body.querySelector(".search-box"),
    //   modeSwitch = body.querySelector(".toggle-switch"),
    //   modeText = body.querySelector(".mode-text");
    //     toggle.addEventListener("click" , () =>{
    //         sidebar.classList.toggle("close");
    //     })
    //     searchBtn.addEventListener("click" , () =>{
    //         sidebar.classList.remove("close");
    //     })
    //     modeSwitch.addEventListener("click" , () =>{
    //         body.classList.toggle("dark");
            
    //         if(body.classList.contains("dark")){
    //             modeText.innerText = "Light mode";
    //         }else{
    //             modeText.innerText = "Dark mode";
    //         }
    //     });

    </script>
    <script src="{{ asset('js/sidebarIntech.js')}}" ></script>
</body>

</html>