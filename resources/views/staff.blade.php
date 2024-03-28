
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
    <link rel="stylesheet" href="../css/staff.css">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">





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

                    <li class="nav-link drop-wrapper list_active" id="4">
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
                        <a href="staff" class="link1 text sub-list-active">Staff</a>
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
                <div style="float: left;"> <p class="nameList">STAFF</p></div>
                <div style="float: right;">
                    <input class="search-box" type="search" placeholder="Search..."  />
                </div>
            </div>
        </div>
        <div style="float:right;" ><button class="create-lead btn-create-new-staff" ><i class='bx bxs-plus-circle'></i>&nbsp;&nbsp;STAFF</button></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">    

            <table>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Date to start work</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Pov sidanak</td>
                <td>danak@gmail.com</td>
                <td>HR</td>
                <td>096785434</td>
                <td>Admin</td>
                <td>2024-02-12</td>
                <td>
                    <span >
                        <button style="background-color: #423EFF; border-radius:4px;" class="btn-crud-list-staff btn-view-staff">
                        <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span >
                        <button style="background-color: #67A7CC;border-radius:4px;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span>
                        <button style="background-color: #F60E0E;border-radius:4px;" class="btn-crud-list-staff btn-delete-staff">
                        <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>
                        </button>
                    </span>
                </td>
              </tr>
              <!-- <tr>
                <td>2</td>
                <td>Sroy Seavmeng</td>
                <td>seavmeng@gmail.com</td>
                <td>HR</td>
                <td>087450989</td>
                <td>Admi</td>
                <td>2024-07-19</td>
                <td>
                    <span >
                        <button style="background-color: #423EFF; border-radius:4px;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span >
                        <button style="background-color: #67A7CC;border-radius:4px;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span>
                        <button style="background-color: #F60E0E;border-radius:4px;" class="btn-crud-list-staff btn-delete-staff">
                        <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>
                        </button>
                    </span>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Sopart chordaphea</td>
                <td>phea@gmail.com</td>
                <td>HR</td>
                <td>096738844</td>
                <td>Admin</td>
                <td>2024-02-12</td>
                <td>
                    <span >
                        <button style="background-color: #423EFF; border-radius:4px;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-eye" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span >
                        <button style="background-color: #67A7CC;border-radius:4px;" class="btn-crud-list-staff ">
                        <i style="color: white;" class="fa fa-pencil fa-solid" aria-hidden="true"></i>
                        </button>
                    </span>
                    <span>
                        <button style="background-color: #F60E0E;border-radius:4px;" class="btn-crud-list-staff btn-delete-staff">
                        <i  style="color: white;" class="fa fa-trash-o " aria-hidden="true"></i>
                        </button>
                    </span>
                </td>
              </tr> -->

            </table>
            
<!------------- Form Create staff ------------>
<div class="background-create-staff">
<div class="content-create-new-staff-create">
    <div>
        <div class="a">
            <div class="name-new-new-staff-create" style="float:left;">ADD STAFF</div>
            <div class="icon-cancel-new-staff-create" style="float:right;"><span><i class="fa fa-times-circle-o close-create-staff" aria-hidden="true"></i>
            </span>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <form action="#" class="signin-form">
        <div class="form-group-new-staff-create " style="float:left; ">
            <label class="label" for="Username">Username *</label>
            <input type="text" class="form-control-new-staff-create"  required>
        </div>
        <div class="form-group-new-staff-create" style="float:right; ">
            <label class="label" for="email-company">Email *</label>
            <input type="email" class="form-control-new-staff-create" required>
        </div>
        <div class="form-group-new-staff-create" style="float:left;">
            <label class="label" for="phone-number-company">Password *</label>
            <input type="password" class="form-control-new-staff-create"  required>
        </div>
        <div class="form-group-new-staff-create" style="float:right;">
            <label class="label" for="Confirm Password">Confirm Password *</label>
            <input type="password" class="form-control-new-staff-create"  required>
        </div>
        <div class="form-group-new-staff-create" style="float:left; width: 48%;">
            <label  class="label label1" for="Department">Department *</label>
            <select name="input-by" class="form-control-new-staff-create" required>
              <option value=""></option>
              <option value="Sale A">Sale A</option>
              <option value="Sale B">Sale B</option>
              <option value="Sale C">Sale C</option>
            </select></div>
            <div class="form-group-new-staff-create" style="float:right; width: 48%;">
                <label  class="label" for="Role">Role *</label>
                <select name="Role" class="form-control-new-staff-create" required>
                  <option value=""></option>
                  <option value="Sale A">Sale A</option>
                  <option value="Sale B">Sale B</option>
                  <option value="Sale C">Sale C</option>
                </select></div>    
        <div class="form-group-new-staff-create" style="float:left;">
            <label class="label" for="Address">Address *</label>
            <input type="text" class="form-control-new-staff-create"  required>
        </div>
        <div class="form-group-new-staff-create" style="float:right;">
            <label class="label" for="Phone Number">Phone Number *</label>
            <input type="number" class="form-control-new-staff-create"  required>
        </div>
        <div class="form-group-new-staff-create" style="width: 94%;">
            <label class="label" for="description-company">Description *</label>
            <input style="height: 80px;" type="text" class="form-control-des-new-staff-create "  required>
        </div>
        <div class="form-group-new-staff-create" style="padding: 18px 12px 0px 0px;float:right;">
            <button class="btn-create-new-staff-submit">SAVE</button>
        </div>

    </form>

</div>
</div>
        <!------------ end of create staff ----------------->

        <!------------- Form delete staff ------------>
<div class="background-delete-staff">
    <div class="delete-dev-staff">
        <div class="all-div-staff" style="padding:25px 0px 0px 0px ;">
        <h2 class="text-delete-staff" style="font-size: 20px;">Do you want to delete this staff?</h2>
        <div class="btn-dev-staff">
        <button class="btn-cancel-delete-staff">Cancel</button>
        <button class="btn-confirm-delete-staff">Delete</button>
        </div>
        </div>
    </div>  
</div>
 <!------------ end of delete staff ----------------->
 <!------------ start view staff ----------------->
 <div class="background-view-staff">
        <div class="card-staff">
            <div style="float: right;">
                <button class="btn-exit-view-staff">Exit</button>
            </div>
            <div class="card__border">
                <img src="../image/staff.png" alt="card-staff image" class="card__img" style="justify-content: center;">
            </div>
                <div class="card__social" id="card-social">
                    <div class="card__social-control">
                        <!-- Toggle button -->
                        <div class="card__social-toggle" id="card-toggle">
                            <i class="ri-add-line"></i>
                        </div>
    
                        <span class="card__social-text">Information</span>        
                        <!-- Card social -->
                        <ul class="card__social-list">
                            <div class="card-body form-staff">
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Name</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted ">Pov sidanak</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Email</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted ">neath@gmail.com</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Password</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted ">Neath99#1</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Address</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted ">street #210</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Department</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted">Sale</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Role</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted ">Admin</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                  <div class="col-sm-3-staff">
                                    <p class="">Srart date</p>
                                  </div>
                                  <div class="col-sm-4-staff">
                                    <p class="text-muted ">18/02/2024</p>
                                  </div>
                                </div>
                                <hr>
                                <div class="row-staff">
                                    <div class="col-sm-3-staff">
                                      <p class="">Phone</p>
                                    </div>
                                    <div class="col-sm-4-staff">
                                      <p class="text-muted">012874576</p>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
        </div>
</div>
 <!------------ end of dview staff ----------------->


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
// start view
/*=============== SHOW SOCIAL NETWORKS ===============*/
const showSocial = (toggleCard, socialCard) =>{
   const toggle = document.getElementById(toggleCard),
         social = document.getElementById(socialCard)
   
   toggle.addEventListener('click', ()=>{
       // If the animation class exists, we add the down-animation class
       if(social.classList.contains('animation')){
           social.classList.add('down-animation')

           // We remove the down-animation class
           setTimeout(() =>{
               social.classList.remove('down-animation')
           }, 1000)
       }

       // We add the animation class to the div tag with the card__social class
       social.classList.toggle('animation')
   })
}
showSocial('card-toggle','card-social')
// end view



        //start popup create
        let pop_up1 = document.querySelector(".background-create-staff")
    let create_staff_button = document.querySelector(".btn-create-new-staff")
    let close_create_staff = document.querySelector(".close-create-staff")

    create_staff_button.onclick = () => {
      pop_up1.style.display = "block"
      close_create_staff.onclick = () => pop_up1.style.display = "none"
    }

    let pop_up2 = document.querySelector(".background-delete-staff")
    let btn_delete_staff = document.querySelector(".btn-delete-staff")
    let btn_cancel_delete_staff = document.querySelector(".btn-cancel-delete-staff")

    btn_delete_staff.onclick = () => {
        pop_up2.style.display = "block"
        btn_cancel_delete_staff.onclick = () => pop_up2.style.display = "none"
    }

    let pop_up3 = document.querySelector(".background-view-staff")
    let btn_view_staff = document.querySelector(".btn-view-staff")
    let btn_cancel_view_staff  = document.querySelector(".btn-exit-view-staff")

    btn_view_staff .onclick = () => {
        pop_up3.style.display = "block"
        btn_cancel_view_staff .onclick = () => pop_up3.style.display = "none"
    }

            //end popup ncreate

    </script>
</body>

</html>