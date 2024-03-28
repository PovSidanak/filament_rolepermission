
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
                    <li class="nav-link drop-wrapper list_active" id="1">
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
                        <a href="lead" class="link1 sub-list-active">Lead</a>
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
                    
                    <li class="nav-link drop-wrapper" id="3">
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
                        <a href="technical" class="link2">Technical</a>
                        <a href="ServiceRequest" class="link3">Service request</a>
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
                        <a href="permission" class="link2">Permission</a>
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
                <div style="float: left;"> <p class="nameList">LEAD</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <div style="float:right;" ><button class="create-lead btn-create-lead" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;LEAD</button></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Name Company</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Sold by</th>
                      <th>Action</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Prince Bank</td>
                      <td>Prince@gmail.com</td>
                      <td>096785434</td>
                      <td>Sale A</td>
                      <td>
                          <span>
                              <button class="btn-crud-list-lead btn-view-lead" style="background-color: #423EFF; border-radius: 4px;">
                              <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
                            </span>
                          <span>
                              <button class="btn-crud-list-lead" style="background-color: #67A7CC; border-radius: 4px;">
                              <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>            </button>
                            </span>
                            <span>
                              <button class="btn-crud-list-lead btn-delete-lead"style="background-color: #F60E0E;border-radius: 4px;">
                              <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
                            </span>
                      </td>
                    </tr>
                  </table>
                  <!-- form create Lead -->
<div class="background-create-lead">
<div class="content-create-new-lead-create">
    <div>
        <div class="a">
            <div class="name-new-new-lead-create" style="float:left;">NEW LEAD</div>
            <div class="icon-cancel-new-lead-create" style="float:right;"><span><i class="fa fa-times-circle-o close-create-lead" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-lead-create" style="float:left; ">
            <label class="label" for="name-company">Name Company *</label>
            <input type="text" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="float:right; ">
            <label class="label" for="email-company">Email *</label>
            <input type="email" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="float:left;">
            <label class="label" for="phone-number-company">Phone Number *</label>
            <input type="number" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="float:right;">
            <label class="label" for="address-company">Address *</label>
            <input type="text" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="float:left;">
            <label class="label" for="city-company">City *</label>
            <input type="text" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="float:right;">
            <label class="label" for="service">Service *</label>
            <input type="text" class="form-control-new-lead-create"  required>
        </div>
        <div class="form-group-new-lead-create" style="float:left;">
            <label class="label" for="designation-company">Designation *</label>
            <input type="text" class="form-control-new-lead-create"  required>
        </div>
        <div class="form-group-new-lead-create" style="float:right; width: 50%;">
            <label class="label" for="create-date-company">Create Date *</label>
            <input type="date" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="float:left; width: 50%;">
            <label  class="label" for="input-by">Sold by *</label>
            <select name="input-by" class="form-control-new-lead-create">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
            <div class="form-group-new-lead-create" style="float:right; width: 50%;">
            <label class="label" for="">Upload logo *</label>
            <input type="file" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="width: 100%; " >
            <label class="label" for="">Description *</label>
            <input type="text" class="form-control-new-lead-create" required>
        </div>
        <div class="form-group-new-lead-create" style="padding: 20px 0px 0px 335px;" >
            <button class="btn-create-new-lead-create">SAVE</button>
        </div>

    </form>
    
</div>
</div> 
<!-- end of create lead -->
        <!------------- Form delete lead ------------>
    <div class="background-delete-lead">
    <div class="delete-dev-lead">
        <div class="all-div-lead" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-lead" style="font-size: 20px;">Do you want to delete this lead?</h2>
        <div class="btn-dev-lead">
        <button class="btn-cancel-delete-lead">Cancel</button>
        <button class="btn-confirm-delete-lead">Delete</button>
        </div>
        </div>
    </div>  
    </div>
        <!------------ end of delete lead ----------------->
        <!------------ start of view customer ----------------->
    <div class="background-view-lead" >
        <div class="col-lg-4 contain-lead-view "  >
          <div class="card mb-4">

              <div class="detail" style="float: left;"><p class="p-detail">LEAD DETAILS</p></div>
              <div style="float: right;">
              <!-- <button class="menu-view ">
                  <i class='bx bx-menu'></i>
              </button> -->
            </div>
         
            <div class="card-body text-center">
              <img src="../image/aba.webp" alt="avatar"
                class=" img-fluid" style="width: 110px;">
              <div>
                <div class="card-body form">
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="pp">Name Company</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted">ABA</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="pp">Email</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted">ABA@gmail.com</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="">Phone</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted">0162345678</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">street #210</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">City</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Phnom Penh</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Service</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Service support</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Designation</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Manager</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Created date</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">2024/02/29</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Assign to</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Jupi</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Description</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Start its business operations in 2015 as a private microfinance instiution.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="">
              <button type="button" class="btn-exit-lead-view">Exit</button>
            </div>
          </div>
        </div>
    </div>
    <!------------ end of view customer ----------------->


                  
                  
              </div>
            </div>
        </nav>
    </section>
    <script>

        const dropWrapper = document.querySelectorAll('.drop-wrapper')
        dropWrapper.forEach((element) => {
            const dropElementId = 'drop-container-' + element.getAttribute('id').toString()
            const dropElement = document.getElementById(dropElementId)
            element.addEventListener('click', function () {
                dropElement.classList.toggle('show');
            });
        })
        // start sidebar
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})


searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
        // end sidebar
        let pop_up11 = document.querySelector(".background-create-lead")
    let create_lead_button = document.querySelector(".btn-create-lead")
    let close_create_lead = document.querySelector(".icon-cancel-new-lead-create")

    create_lead_button.onclick = () => {
      pop_up11.style.display = "block"
      close_create_lead.onclick = () => pop_up11.style.display = "none"
    }

    let pop_up22 = document.querySelector(".background-delete-lead")
    let btn_delete_lead = document.querySelector(".btn-delete-lead")
    let btn_cancel_delete_lead = document.querySelector(".btn-cancel-delete-lead")

    btn_delete_lead.onclick = () => {
        pop_up22.style.display = "block"
        btn_cancel_delete_lead.onclick = () => pop_up22.style.display = "none"
    }


    let pop_up33 = document.querySelector(".background-view-lead")
    let btn_view_lead = document.querySelector(".btn-view-lead")
    let btn_cancel_view_lead = document.querySelector(".btn-exit-lead-view")

    btn_view_lead.onclick = () => {
        pop_up33.style.display = "block"
        btn_cancel_view_lead.onclick = () => pop_up33.style.display = "none"
    }


    </script>
</body>

</html>