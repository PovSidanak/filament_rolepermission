
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
    <link rel="stylesheet" href="../css/sale.css">
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
                        <a href="ServiceRequest" class="link3">Service request</a>
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
                        <a href="sale" class="link1 sub-list-active">Sale</a>
                        <a href="technical" class="link2 ">Technical</a>
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
                <div style="float: left;"> <p class="nameList">SALE</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <div style="float:right;" ><button class="create-lead btn-create-sale" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;SALE</button></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    
                 
            <table>
  <tr>
    <th>ID</th>
    <th>Name Company</th>
    <th>Service</th>
    <th>Contact no</th>
    <th>Input by</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Prince Bank</td>
    <td>STMCRM purchased</td>
    <td>096785434</td>
    <td>Sale A</td>
    <td>
        <span>
        <button class="btn-crud-list-sale btn-view-sale" style="background-color: #423EFF; border-radius: 4px;">
        <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>            </button>
            </button>
          </span>
        <span>
        <button class="btn-crud-list-sale" style="background-color: #67A7CC; border-radius: 4px;">
        <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>            </button>
            </button>
          </span>
          <span>
          <button class="btn-crud-list-sale btn-delete-sale"style="background-color: #F60E0E;border-radius: 4px;">
          <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>            </button>
            </button>
          </span>
    </td>
  </tr>
</table>
<!-- start ctrate form -->
<div class="background-create-sale">
<div class="content-create-new-sale">
    <form action="">
        <div class="a">
            <div class="name-new-new-sale" style="float:left;">ADD REPORT</div>
            <div class="icon-cancel-new-sale" style="float:right;"><span><i class="fa fa-times-circle-o close-create-lead" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="form-group-new-sale" style="float:left; width: 50%;">
            <label  class="label" for="Department">Sale Person *</label>
            <select name="input-by" class="form-control-new-sale" required>
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
   
        <div class="form-group-new-sale" style="float:left; width:50% ">
            <label class="label" for="Username">Customer Name *</label>
            <input type="text" class="form-control-new-sale"  required>
        </div>
        <div class="form-group-new-sale" style="float:right;width:50% ">
            <label class="label" for="email-company">Contact Person *</label>
            <input type="number" class="form-control-new-sale"  required>
        </div>
        <div class="form-group-new-sale" style="float:left;width:50%">
            <label class="label" for="phone-number-company">Project Name *</label>
            <input type="text" class="form-control-new-sale"  required>
        </div>
        <div class="form-group-new-sale" style="float:right;width:50%">
            <label class="label" for="Confirm Password">Date of Prospect *</label>
            <input type="date" class="form-control-new-sale" required>
        </div>
        <div class="form-group-new-sale" style="float:left;width:50%">
            <label class="label" for="phone-number-company">Project Size Budget $ *</label>
            <input type="text" class="form-control-new-sale" required>
        </div>
        <div class="form-group-new-sale" style="float:right;width:50%">
            <label class="label" for="Confirm Password">Project Closing Date *</label>
            <input type="date" class="form-control-new-sale" required>
        </div>
        <div class="form-group-new-sale" style="float:left;width:50%">
            <label class="label" for="phone-number-company">Summary Engagement with clients *</label>
            <input type="text" class="form-control-new-sale" required>
        </div>
        <div class="form-group-new-sale" style="width: 100%;">
            <label class="label" for="description-company">Nos. of discussions *</label>
            <input  type="text" class="form-control-new-sale "  required>
        </div>
        <div class="form-group-new-sale" style="width: 100%;">
            <label class="label" for="description-company">Nos. of voice *</label>
            <input  type="text" class="form-control-new-sale"  required>
        </div>
        <div class="form-group-new-sale" style="width: 100%;">
            <label class="label" for="description-company">Notedt *</label>
            <input type="text" class="form-control-new-sale "  required>
        </div>
        <div class="form-group-new-sale" style="padding: 15px 12px 0px 0px;float:right;">
            <button class="btn-create-new-sale">SAVE</button>
        </div>

    </form>
</div>
</div>
<!-- end create form -->
        <!------------- Form delete lead ------------>
<div class="background-delete-sale">
    <div class="delete-dev-sale">
        <div class="all-div-sale" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-sale" style="font-size: 20px;">Do you want to delete this sale?</h2>
        <div class="btn-dev-sale">
        <button class="btn-cancel-delete-sale">Cancel</button>
        <button class="btn-confirm-delete-sale">Delete</button>
        </div>
        </div>
    </div>  
</div>
        <!------------ end of delete lead ----------------->
<!------------ start of view customer ----------------->
<div class="background-view-sale" >
        <div class="col-lg-4 contain-sale-view "  >
          <div class="card mb-4">

              <div class="detail" style="float: left;"><p class="p-detail">SALE DETAILS</p></div>
              <!-- <div style="float: right;">
              <button class="menu-view ">
                  <i class='bx bx-menu'></i>
              </button>
            </div> -->
         
            <div class="card-body text-center">
              <img src="../image/aba.webp" alt="avatar"
                class=" img-fluid" style="width: 90px;">
              <div>
                <div class="card-body form">
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Sale person</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Pov sidanak</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Customer name</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">ABA Bank</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Project nane</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Oracle HA</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Contact person</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">096784523</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Project size</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">$ 10000</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Summary engagement with client</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Zoom presentation</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Nos. of discussions</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">10</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Nos. of voice *</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">3</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Note</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Need management assistance</p>
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
              <button type="button" class="btn-exit-sale-view">Exit</button>
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
        let pop_up111111 = document.querySelector(".background-create-sale")
    let create_sale_button = document.querySelector(".btn-create-sale")
    let close_create_sale = document.querySelector(".icon-cancel-new-sale")

    create_sale_button.onclick = () => {
      pop_up111111.style.display = "block"
      close_create_sale.onclick = () => pop_up111111.style.display = "none"
    }

    let pop_up222222 = document.querySelector(".background-delete-sale")
    let btn_delete_sale = document.querySelector(".btn-delete-sale")
    let btn_cancel_delete_sale = document.querySelector(".btn-cancel-delete-sale")

    btn_delete_sale.onclick = () => {
        pop_up222222.style.display = "block"
        btn_cancel_delete_sale.onclick = () => pop_up222222.style.display = "none"
    }

    let pop_up333333 = document.querySelector(".background-view-sale")
    let btn_view_sale = document.querySelector(".btn-view-sale")
    let btn_cancel_view_sale = document.querySelector(".btn-exit-sale-view")

    btn_view_sale.onclick = () => {
        pop_up333333.style.display = "block"
        btn_cancel_view_sale.onclick = () => pop_up333333.style.display = "none"
    }

    </script>
</body>

</html>