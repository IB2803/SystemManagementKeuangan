<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Savings</title>
    <meta
    content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    name="viewport"
  />
  <link
    rel="icon"
    href="{{ asset ('img/icon/Logo.svg') }}"
    type="image/x-icon"
  />

  <!-- Fonts and icons -->
  <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["asset('css/fonts.min.css')"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/plugins.min.css')}}" >

  <link rel="stylesheet" href="{{ asset('css/kaiadmin.min.css') }}">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{ asset('css/demo.css') }}" >
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
          <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="/transaction" class="logo">
                <img
                  src="{{ asset('img/icon/fintrack2.png') }}"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="29"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
              <ul class="nav nav-secondary">
                <li class="nav-item">
                  <a
                    href="/transaction"
                    class="collapsed"
                    aria-expanded="false"
                  >
                    <i class="fas fa-home">
                        <img src = "{{ asset('img/icon/Dashboard2.png') }}" alt="dashboard icon" style="width : 23px;" >
                    </i>

                    {{-- <i class="fas fa-th-large"></i> --}}
                    {{-- <span class="sub-item">Dashboard</span> --}}
                    <p>Dashboard</p>
                    {{-- <span class="caret"></span> --}}
                  </a>

                </li>

                <li class="nav-item">
                  <a  href= "/berita"
                    class="collapsed"
                    aria-expanded="false">
                    <i class="fas fa-th-list">
                        <img src = "{{ asset('img/icon/news.png') }}" style = "width : 24px;" alt= "budgeting icon">
                    </i>
                    <p>News</p>

                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="/savings"
                    class="collapsed"
                    aria-expanded="false">
                    <i class="fas fa-pen-square">
                        <img src = "{{ asset('img/icon/savings.png') }}" style = "width : 26px;" alt= "transaction icon">
                    </i>
                    <p>Smart Savings</p>
                    {{-- <span class="caret"></span> --}}
                  </a>
                  {{-- <div class="collapse" id="forms">
                    <ul class="nav nav-collapse">
                      <li>
                        <a href="forms/forms.html">
                          <span class="sub-item">Basic Form</span>
                        </a>
                      </li>
                    </ul>
                  </div> --}}
                </li>
                <li class="nav-item active">
                  <a  href="/spendings">
                    <i class="fas fa-table">
                        <img src = "{{ asset('img/icon/spend1.png') }}" alt="transaction icon" style="width : 26px;" >
                    </i>
                    <p>Smart Spendings</p>
                    {{-- <span class="caret"></span> --}}
                  </a>

                </li>

              </ul>
            </div>
          </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
          <div class="main-header">
            <div class="main-header-logo">
              <!-- Logo Header -->
              <div class="logo-header" data-background-color="dark">
                <a href="index.html" class="logo">
                  <img
                    {{-- src="{{ asset('img/icon/fintrack2.png') }}" --}}
                    src="{{ asset('img/icon/fintrack2.png') }}"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20"
                  />
                </a>
                <div class="nav-toggle">
                  <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                  </button>
                  <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                  </button>
                </div>
                <button class="topbar-toggler more">
                  <i class="gg-more-vertical-alt"></i>
                </button>
              </div>
              <!-- End Logo Header -->
            </div>
            <!-- Navbar Header -->
            <nav
              class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
            >
              <div class="container-fluid">
                <nav
                  class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
                >
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <button type="submit" class="btn btn-search pe-1">
                        <img src = "{{ asset('img/icon/search.png') }}" alt="search icon" style="width : 20px;" >

                      </button>
                    </div>
                    <input
                      type="text"
                      placeholder="Search ..."
                      class="form-control"
                    />
                  </div>
                </nav>

                <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                  <li
                    class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                  >
                    <a
                      class="nav-link dropdown-toggle"
                      data-bs-toggle="dropdown"
                      href="#"
                      role="button"
                      aria-expanded="false"
                      aria-haspopup="true"
                    >
                      <i class="fa fa-search"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-search animated fadeIn">
                      <form class="navbar-left navbar-form nav-search">
                        <div class="input-group">
                          <input
                            type="text"
                            placeholder="Search ..."
                            class="form-control"
                          />
                        </div>
                      </form>
                    </ul>
                  </li>
                  <li class="nav-item topbar-icon dropdown hidden-caret">

                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="messageDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                    <img
                    src="{{ asset('img/icon/message.png') }}"
                    alt="notification"
                    class="notification-icon"
                    width="23">

                      <i class="fa fa-envelope"></i>
                    </a>
                    <ul
                      class="dropdown-menu messages-notif-box animated fadeIn"
                      aria-labelledby="messageDropdown"
                    >

                      <li>
                        <div
                          class="dropdown-title d-flex justify-content-between align-items-center"
                        >
                          Messages
                          <a href="#" class="small">Mark all as read</a>
                        </div>
                      </li>
                      <li>
                        <div class="message-notif-scroll scrollbar-outer">
                          <div class="notif-center">
                            <a href="#">
                              <div class="notif-img">
                                <img
                                  src="{{ asset('img/jm_denis.jpg') }}"
                                  alt="Img Profile"
                                />
                              </div>
                              <div class="notif-content">
                                <span class="subject">Jimmy Denis</span>
                                <span class="block"> How are you ? </span>
                                <span class="time">5 minutes ago</span>
                              </div>
                            </a>

                          </div>
                        </div>
                      </li>
                      <li>
                        <a class="see-all" href="javascript:void(0);"
                          >See all messages<i class="fa fa-angle-right"></i>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item topbar-icon dropdown hidden-caret">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="notifDropdown"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                    <img
                    src="{{ asset('img/icon/notif.png') }}"
                    alt="notification"
                    class="notification-icon"
                    width="20">
                      <i class="fa fa-bell"></i>
                      <span class="notification">4</span>
                    </a>
                    <ul
                      class="dropdown-menu notif-box animated fadeIn"
                      aria-labelledby="notifDropdown"
                    >
                      <li>
                        <div class="dropdown-title">
                          You have 4 new notification
                        </div>
                      </li>
                      <li>
                        <div class="notif-scroll scrollbar-outer">
                          <div class="notif-center">
                            <a href="#">
                              <div class="notif-icon notif-primary">
                                <i class="fa fa-user-plus"></i>
                              </div>
                              <div class="notif-content">
                                <span class="block"> New user registered </span>
                                <span class="time">5 minutes ago</span>
                              </div>
                            </a>

                          </div>
                        </div>
                      </li>
                      <li>
                        <a class="see-all" href="javascript:void(0);"
                          >See all notifications<i class="fa fa-angle-right"></i>
                        </a>
                      </li>
                    </ul>
                  </li>


                  <li class="nav-item topbar-user dropdown hidden-caret">
                    <a
                      class="dropdown-toggle profile-pic"
                      data-bs-toggle="dropdown"
                      href="#"
                      aria-expanded="false"
                    >
                      <div class="avatar-sm">
                        <img
                          src="{{asset ('img/icon/profile1.png') }}"
                          alt="..."
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      <span class="profile-username">
                        <span class="op-7">Hi,</span>
                        <span class="fw-bold">Iqbal</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                      <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                          <div class="user-box">
                            <div class="avatar-lg">
                              <img
                                src="{{ asset('img/profile.jpg') }}"
                                alt="image profile"
                                class="avatar-img rounded"
                              />
                            </div>
                            <div class="u-text">
                              <h4>Hizrian</h4>
                              <p class="text-muted">hello@example.com</p>
                              <a
                                href="profile.html"
                                class="btn btn-xs btn-secondary btn-sm"
                                >View Profile</a
                              >
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">My Profile</a>
                          <a class="dropdown-item" href="#">My Balance</a>
                          <a class="dropdown-item" href="#">Inbox</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Account Setting</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Logout</a>
                        </li>
                      </div>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
            <!-- End Navbar -->
          </div>





        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Spendings</h3>
              <ul class="breadcrumbs mb-3">

            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Form</div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                        <form action="/spendings" method="POST">
                            @csrf
                          <label for="email2">Total Uang:</label>
                          <input
                            type="number"
                            class="form-control"
                            id="email2"
                            placeholder="Enter money"
                            name="total_uang" required
                          />
                          <small id="emailHelp2" class="form-text text-muted"
                            >total uang yang diinputkan akan dikalkulasikan sesuai hari</small
                          >
                        </div>
                        <div class="form-group">
                          <label for="password">Jumlah Hari:</label>
                          <input
                            type="number"
                            class="form-control"
                            id="password"
                            placeholder="Jumlah hari"
                            name="jumlah_hari" required
                          />
                        </div>









                        @if (isset($uangPerHari))
                            <div class="form-group">
                                <label class="form-label">Pembagian Harian</label>
                                <div class="selectgroup selectgroup-pills">
                                    @for($i = 1; $i<= $jumlahHari; $i++)
                                        <label class="selectgroup-item">
                                            <input
                                                type="checkbox"
                                                name="day{{ $i }}"
                                                class="selectgroup-input day-checkbox"
                                                data-amount="{{ number_format($uangPerHari, 0, ',' , '.') }}"
                                            />
                                            <span class="selectgroup-button">
                                                Day {{ $i }}: Rp. {{ number_format($uangPerHari, 0, ',', '.') }}
                                            </span>
                                        </label>
                                    @endfor
                                </div>
                            </div>

                            <h3 class="fw-bold mb-3">Total Pengeluaran: Rp. <span id="total-saved1">0</span></h3>
                            <h3 class="fw-bold mb-3">Total Tersisa: Rp. <span id="total-saved2">0</span></h3>
                        @endif



                      </div>
                    </div>
                  </div>
                  <div class="card-action">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <button class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>















    <script>
    const totalUang = {{ $totalUang ?? 0 }};
    </script>

      <script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.day-checkbox');
        const totalSavedDisplay1 = document.getElementById('total-saved1');
        const totalSavedDisplay2 = document.getElementById('total-saved2');

        function updateTotal1() {
            let total = 0;
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total += parseFloat(cb.dataset.amount);
                }
            });
            totalSavedDisplay1.textContent = total.toLocaleString('id-ID');
        }
        function updateTotal2() {
            let total = totalUang;
            checkboxes.forEach(cb => {
                if (cb.checked) {
                    total -= parseFloat(cb.dataset.amount);
                }
            });
            totalSavedDisplay2.textContent = total.toLocaleString('id-ID');
        }

        checkboxes.forEach(cb => {
            // cb.addEventListener('change', updateTotal1, updateTotal2);
            cb.addEventListener('change', () => {
            updateTotal1();
            updateTotal2();
            });
        });
    });
    </script>

</body>
</html>
