<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--font-->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <!--own CSS-->
    <link rel="stylesheet" href="style.css" />
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <title>E-learning</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  bg-darkblue ">
      <!--burgermenu-->
      <button
        class="navbar-toggler "
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"> <i class="fas fa-bars"></i></span>
      </button>
      <!--logo-->
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" width="80%" alt="logo"
      /></a>
      <!--nav inside burgermenu and outside-->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <!--search-->
        <form class="form-inline  mx-auto my-4 my-lg-0 ">
          <div class="input-group ">
            <input
              type="text"
              class="form-control"
              placeholder="Search for courses"
            />
            <div class="input-group-append">
              <button class="btn btn-light" type="button">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <!--All the Links on the right side -->
        <ul class="navbar-nav  ">
          <!--about-->
          <li class="nav-item mr-4 my-2 my-lg-0  ">
            <a class="nav-link " href="#">About</a>
          </li>
          <!--courses-->
          <li class="nav-item dropdown mr-4 my-2 my-lg-0 ">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              My Courses
            </a>
            <div
              class="dropdown-menu dropdown-menu-right bg-darkblue"
              aria-labelledby="navbarDropdown"
            >
              <a class="dropdown-item" href="#">
                <div class="flex flex-column">
                  <p class="m-0">Topic 1</p>
                  <div class="progress">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      aria-valuenow="70"
                      aria-valuemin="0"
                      aria-valuemax="100"
                      style="width:70%"
                    >
                      <span class="sr-only">70% Complete</span>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <div class="flex flex-column">
                  <p class="m-0">Topic 2</p>
                  <div class="progress">
                    <div
                      class="progress-bar"
                      role="progressbar"
                      aria-valuenow="70"
                      aria-valuemin="0"
                      aria-valuemax="100"
                      style="width:70%"
                    >
                      <span class="sr-only">70% Complete</span>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <div class="flex flex-column">
                  <p class="m-0">Topic 3</p>
                  <div class="progress">
                    <div
                      class="progress-bar "
                      role="progressbar"
                      aria-valuenow="70"
                      aria-valuemin="0"
                      aria-valuemax="100"
                      style="width:70%"
                    >
                      <span class="sr-only">70% Complete</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </li>
          <!--heart-->
          <li class="nav-item dropdown mr-4 my-2 my-lg-0 ">
            <a
              class="nav-link"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="far fa-heart"></i>
              <!--filled out heart <i class='fas fa-heart'></i>-->
            </a>
            <div
              class="dropdown-menu dropdown-menu-right bg-darkblue"
              aria-labelledby="navbarDropdown"
            >
              <a class="dropdown-item" href="#"
                ><span class="neon-green">Topic 1:</span> Lesson 1</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"
                ><span class="neon-green">Topic 1:</span> Lesson 2</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"
                ><span class="neon-green">Topic 3:</span> Lesson 5</a
              >
            </div>
          </li>
          <!--signed in user-->
          <li class="nav-item dropdown mr-4 my-2 my-lg-0 ">
            <a
              class="nav-link"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="far fa-user"></i>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right bg-darkblue"
              aria-labelledby="navbarDropdown"
            >
              <a class="dropdown-item" href="#">Notifications</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Messages</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <button id="logout-btn" type="submit" class=" btn  ml-2">
                Log out
              </button>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  