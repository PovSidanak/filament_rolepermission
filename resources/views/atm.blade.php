
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

                    <li class="nav-link drop-wrapper list_active" id="2">
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
                        <a href="atm" class="link1 sub-list-active">Atm</a>
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
                <div style="float: left;"> <p class="nameList">ATM</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <div style="float:right;" ><button class="create-lead btn-create-new-atm" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;ATM</button></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    

            <table>
  <tr>
    <th>ID</th>
    <th>Name Company</th>
    <th>Model</th>
    <th>Type</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Prince Bank</td>
    <td>Automated</td>
    <td>On Site</td>
    <td>
        <span>
        <button style="background-color: #423EFF; border-radius:4px;" class="btn-crud-list-atm btn-view-atm">
        <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>
            </button>
          </span>
        <span>
        <button style="background-color: #67A7CC;border-radius:4px;" class="btn-crud-list-atm ">
        <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>
            </button>
          </span>
          <span>
          <button style="background-color: #F60E0E;border-radius:4px;" class="btn-crud-list-atm btn-delete-atm">
          <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>
            </button>
          </span>
    </td>
  </tr>
</table>      
<!-- create atn -->
<div class="background-create-atm">
<div class="content-create-new-atm">
    <div>
        <div class="a">
            <div class="name-new-new-atm" style="float:left;">ADD ATM</div>
            <div class="icon-cancel-new-atm" style="float:right;"><span><i class="fa fa-times-circle-o close-create-atm" aria-hidden="true"></i></span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-atm" style="float:left; width:50% ">
            <label class="label" for="name-company">Name Company *</label>
            <input type="text" class="form-control-new-atm"  required>
        </div>
        <div class="form-group-new-atm" style="float:right;  width:50%  ">
            <label class="label" for="model">Model *</label>
            <input type="text" class="form-control-new-atm"  required>
        </div>
        <div class="form-group-new-atm" style="float:left;  width:50% ">
            <label  class="label" for="Classification">Classification *</label>
            <select name="Classification" class="form-control-new-atm">
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
            <div class="form-group-new-atm" style="float:right; width:50% ">
                <label  class="label" for="type">Type *</label>
                <select name="type" class="form-control-new-atm">
                  <option value=""></option>
                  <option value="Sale A">Sale A</option>
                  <option value="Sale B">Sale B</option>
                  <option value="Sale C">Sale C</option>
                </select></div>
                <div class="form-group-new-atm" style="float:left; width:50% ">
                    <label  class="label" for="Category">Category *</label>
                    <select name="Category" class="form-control-new-atm" required>
                      <option value=""></option>
                      <option value="Sale A">Sale A</option>
                      <option value="Sale B">Sale B</option>
                      <option value="Sale C">Sale C</option>
                    </select></div>
                <div class="form-group-new-atm" style="float:right;  width:50% ">
            <label class="label" for="address-company">Address *</label>
            <input type="text" class="form-control-new-atm" required>
        </div>
        <div class="form-group-new-atm" style="float:left; width:50% ">
            <label  class="label" for="City">City *</label>
            <select name="City" class="form-control-new-atm" required>
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
        <div class="form-group-new-atm" style="float:right; width:50% ">
            <label class="label" for="file">Upload logo *</label>
            <input type="file" class="form-control-new-atm" required>
        </div>
        <div>
            <button class="btn-submit-atm">SAVE</button>
        </div>
    </form>

</div>
</div>
<!-- end atm -->            
<!------------- Form delete atm ------------>
    <div class="background-delete-atm">
    <div class="delete-dev-atm">
        <div class="all-div-atm" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-atm" style="font-size: 20px;">Do you want to delete this ATM?</h2>
        <div class="btn-dev-atm">
        <button class="btn-cancel-delete-atm">Cancel</button>
        <button class="btn-confirm-delete-atm">Delete</button>
        </div>
        </div>
    </div>  
    </div>
        <!------------ end of delete atm ----------------->
        <!------------ start of view customer ----------------->
    <div class="background-view-atm" >
        <div class="col-lg-4 contain-atm-view "  >
          <div class="card mb-4">

              <div class="detail" style="float: left;"><p class="p-detail">ATM DETAILS</p></div>
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
                        <p class="mb-0">Name Company</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">ABA Bank</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Model</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Automated</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Classification</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Yellow Label</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Type</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">On site</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Category</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">Money deposit</p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Address</p>
                      </div>
                      <div class="col-sm-4">
                        <p class="text-muted mb-0">St12, Toul kork</p>
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
                  </div>
              </div>
            </div>
            <div class="">
              <button type="button" class="btn-exit-atm-view">Exit</button>
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
        //start popup create
        let pop_up11111 = document.querySelector(".background-create-atm")
    let create_atm_button = document.querySelector(".btn-create-new-atm")
    let close_create_atm = document.querySelector(".icon-cancel-new-atm")

    create_atm_button.onclick = () => {
      pop_up11111.style.display = "block"
      close_create_atm.onclick = () => pop_up11111.style.display = "none"
    }

    let pop_up22222 = document.querySelector(".background-delete-atm")
    let btn_delete_atm = document.querySelector(".btn-delete-atm")
    let btn_cancel_delete_atm = document.querySelector(".btn-cancel-delete-atm")

    btn_delete_atm.onclick = () => {
        pop_up22222.style.display = "block"
        btn_cancel_delete_atm.onclick = () => pop_up22222.style.display = "none"
    }



    let pop_up33333 = document.querySelector(".background-view-atm")
    let btn_view_atm = document.querySelector(".btn-view-atm")
    let btn_cancel_view_atm = document.querySelector(".btn-exit-atm-view")

    btn_view_atm.onclick = () => {
        pop_up33333.style.display = "block"
        btn_cancel_view_atm.onclick = () => pop_up33333.style.display = "none"
    }
            //end popup ncreate
    </script>
</body>

</html>