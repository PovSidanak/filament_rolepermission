
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
                        <a href="lead" class="link1 ">Lead</a>
                        <a href="customer" class="link2 sub-list-active">Customer</a>
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
                        <a href="ServiceRequest" class="link3">Service request</a>
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
                <div style="float: left;"> <p class="nameList">CUSTOMER</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <div style="float:right;" ><button class="create-lead btn-create-customer" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;CUSTOMER</button></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    
            <table>
  <tr>
    <th>ID</th>
    <th>Name Company</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Input by</th>
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
            <button class="btn-crud-list-customer btn-view-customer" style="background-color: #423EFF; border-radius: 4px;">
            <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
          </span>
        <span>
            <button class="btn-crud-list-customer " style="background-color: #67A7CC; border-radius: 4px;">
            <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>            </button>
          </span>
          <span>
            <button class="btn-crud-list-customer btn-delete-customer"style="background-color: #F60E0E;border-radius: 4px;">
            <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
          </span>
    </td>
  </tr>
</table>
<!-- form create Lead -->
<div class="background-create-customer">
<div class="content-create-new-customer-create">
    <div>
        <div class="a">
            <div class="name-new-new-customer-create" style="float:left;">ADD CUSTOMER</div>
            <div class="icon-cancel-new-customer-create" style="float:right;"><span><i class="fa fa-times-circle-o close-create-customer" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-customer-create" style="float:left; ">
            <label class="label" for="name-company">Name Company *</label>
            <input type="text" class="form-control-new-customer-create" required>
        </div>
        <div class="form-group-new-customer-create" style="float:right; ">
            <label class="label" for="email-company">Email *</label>
            <input type="email" class="form-control-new-customer-create" required>
        </div>
        <div class="form-group-new-customer-create" style="float:left;">
            <label class="label" for="phone-number-company">Phone Number *</label>
            <input type="number" class="form-control-new-customer-create"  required>
        </div>
        <div class="form-group-new-customer-create" style="float:right;">
            <label class="label" for="address-company">Address *</label>
            <input type="text" class="form-control-new-customer-create"  required>
        </div>
        <div class="form-group-new-customer-create" style="float:left;">
            <label class="label" for="city-company">City *</label>
            <input type="text" class="form-control-new-customer-create" required>
        </div>
        <div class="form-group-new-customer-create" style="float:right;">
            <label class="label" for="service">Service *</label>
            <input type="text" class="form-control-new-customer-create"required>
        </div>
        <div class="form-group-new-customer-create" style="float:left;">
            <label class="label" for="designation-company">Designation *</label>
            <input type="text" class="form-control-new-customer-create"  required>
        </div>
        <div class="form-group-new-customer-create" style="float:right; width: 50%;">
            <label class="label" for="create-date-company">Create Date *</label>
            <input type="date" class="form-control-new-customer-create" required>
        </div>
        <div class="form-group-new-customer-create" style="float:left; width: 50%;">
            <label  class="label" for="input-by">Input by *</label>
            <select name="input-by" class="form-control-new-customer-create" required>
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
            <div class="form-group-new-customer-create" style="float:right; width: 50%;">
            <label class="label" for="">Upload logo *</label>
            <input type="file" class="form-control-new-customer-create" required>
        </div>
        <div class="form-group-new-customer-create" style="width: 100%; " >
            <label class="label" for="">Description *</label>
            <input type="text" class="form-control-new-customer-create"  required>
        </div>
        <div class="form-group-new-customer-create" style="padding: 20px 0px 0px 335px;" >
            <button class="btn-create-new-customer-create">SAVE</button>
        </div>

    </form>
</div>
</div>
<!-- end of create customer -->
        <!------------- Form delete customer ------------>
  <div class="background-delete-customer">
    <div class="delete-dev-customer">
        <div class="all-div-customer" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-customer" style="font-size: 20px;">Do you want to delete this customer?</h2>
        <div class="btn-dev-customer">
        <button class="btn-cancel-delete-customer">Cancel</button>
        <button class="btn-confirm-delete-customer">Delete</button>
        </div>
        </div>
    </div>  
  </div>
        <!------------ end of delete customer ----------------->
        <!------------ start of view customer ----------------->
      <div class="background" >
        <div class="col-lg-4 contain-customer-view "  >
          <div class="card mb-4">

              <div class="detail" style="float: left;"><p class="p-detail">CUSTOMER DETAILS</p></div>
              <div style="float: right;">
              <button class="menu-view ">
                  <i class='bx bx-menu'></i>
              </button>
            </div>
         
            <div class="card-body text-center">
              <img src="../image/aba.webp" alt="avatar"
                class=" img-fluid" style="width: 110px;">
              <div>
                <div class="card-body form">
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Name Company</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">ABA</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">ABA@gmail.com</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Phone</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">0162345678</p>
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
              <button type="button" class="btn-exit-customer-view">Exit</button>
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
    let pop_up111 = document.querySelector(".background-create-customer")
    let create_customer_button = document.querySelector(".btn-create-customer")
    let close_create_customer = document.querySelector(".icon-cancel-new-customer-create")

    create_customer_button.onclick = () => {
      pop_up111.style.display = "block"
      close_create_customer.onclick = () => pop_up111.style.display = "none"
    }

    let pop_up222 = document.querySelector(".background-delete-customer")
    let btn_delete_customer = document.querySelector(".btn-delete-customer")
    let btn_cancel_delete_customer = document.querySelector(".btn-cancel-delete-customer")

    btn_delete_customer.onclick = () => {
        pop_up222.style.display = "block"
        btn_cancel_delete_customer.onclick = () => pop_up222.style.display = "none"
    }

    let pop_up333 = document.querySelector(".background")
    let btn_view_customer = document.querySelector(".btn-view-customer")
    let btn_cancel_view_customer = document.querySelector(".btn-exit-customer-view")

    btn_view_customer.onclick = () => {
        pop_up333.style.display = "block"
        btn_cancel_view_customer.onclick = () => pop_up333.style.display = "none"
    }

  

    </script>
</body>

</html>