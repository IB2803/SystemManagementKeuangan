<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Transactions</title>
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
  {{-- <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    </style> --}}
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
                <li class="nav-item active">
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
                <li class="nav-item">
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
                                src="{{ asset('img/icon/profile.svg') }}"
                                alt="image profile"
                                class="avatar-img rounded"
                              />
                            </div>
                            <div class="u-text">
                              <h4>Username</h4>
                              <p class="text-muted">user@gmail.com</p>
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
                          <div  class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form-dropdown').submit();">
                                    Logout
                                </a>
                                <form id="logout-form-dropdown" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
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
              <div
                class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
              >
                <div>
                  <h3 class="fw-bold mb-3">Dashboard</h3>

                </div>




                <div class="ms-md-auto py-2 py-md-0">
                    @if(session('success'))
                    <p style="color: green">{{ session('success') }}</p>
                @endif
                  <a class="btn btn-label-info btn-round me-2" data-bs-toggle="modal" >
                    <img src = "{{ asset('img/icon/wallet.png') }}" style="width: 25px;">
                    Balance :  Rp. {{ number_format($Balance) }}
                </a>
                  <a  class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addTransactionModal">+ Add Transaction</a>



                  <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="{{ route('transaction.store') }}" method="POST">
                          @csrf
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Add Transaction</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                              <label for="type" class="form-label">Type</label>

                              {{-- <input type="text" class="form-control" name="type" required> --}}

                                <select name="type" class="form-control"  required>

                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                    </select>
                            </div>
                            <div class="mb-3">
                              <label for="amount" class="form-label">Amount</label>
                              <input type="number"  class="form-control" name="amount"  required>
                            </div>
                            <div class="mb-3">
                                <label for="date">Tanggal Transaksi</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                              <label for="description" class="form-label">Description</label>
                              <textarea class="form-control" name="description"></textarea>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="balance" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="{{ route('transaction.store') }}" method="POST">
                          @csrf
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Balance</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">

                            <div class="mb-3">
                              <label for="amount" class="form-label">Balance</label>
                              <input type="number"  class="form-control" name="Balance"  required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Save</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              </div>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>




                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="card card-stats card-round">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-icon">
                          <div
                            class="icon-big text-center  bubble-shadow-small"
                          >
                          <img src = "{{ asset('img/icon/income.png') }}" alt="income icon" style="width : 39px;" >
                            {{-- <i class="fas fa-users"></i> --}}
                          </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                          <div class="numbers">
                            <p class="card-category">Income</p>
                            <h4 class="card-title">Rp. {{ number_format($totalIncome) }}</h4>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8 col-md-4">
                  <div class="card card-stats card-round">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-icon">
                          <div
                            class="icon-big text-center  bubble-shadow-small"
                          >
                          <img src = "{{ asset('img/icon/expense.png') }}" alt="income icon" style="width : 39px;" >
                            {{-- <i class="fas fa-user-check"></i> --}}
                          </div>
                        </div>
                        <div class="col col-stats ms-3 ms-sm-0">
                          <div class="numbers">
                            <p class="card-category">Expense</p>
                            <h4 class="card-title">Rp. {{ number_format($totalExpense) }}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="col-md-12">
                <div class="card card-round">
                  <div class="card-header">
                    <div class="card-head-row card-tools-still-right">
                      <div class="card-title">Transaction History</div>

                      <div class="card-tools">

                        <div class="dropdown">
                            <a href="#" id="exportTableToExcel" class="btn btn-label-success btn-round btn-sm me-2">
                            <span class="btn-label">
                                <i class="fas fa-pencil"></i> {{-- Ganti ikon jika perlu --}}
                            </span>
                            Export Table
                            </a>
                          <button
                            class="btn btn-icon btn-clean me-0"
                            type="button"
                            id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="fas fa-ellipsis-h"></i>
                          </button>
                          <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#"
                              >Something else here</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <!-- Projects table -->
                      <table class="table align-items-center mb-0" id="transactionHistoryTable">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">Type</th>
                            <th scope="col" class="text-end">Date & Time</th>
                            <th scope="col" class="text-end">Amount</th>
                            <th scope="col" class="text-end">Description</th>
                            <th scope="col" class="text-end">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $t)
                          <tr>
                            <th scope="row">

                              {{-- <button
                                class="btn btn-icon btn-round btn-success btn-sm me-2"
                              >
                                <i class="fa fa-check"></i>
                              </button> --}}
                              @if($t['type'] === 'income')
                                <img src= "{{ asset('img/icon/income.png') }}" alt="income icon" style="width : 25px;" >
                              @elseif($t['type'] === "expense")
                                <img src= "{{ asset('img/icon/expense.png') }}" alt ="expense icon" style = "width : 25px;">


                              @endif
                              {{ ucfirst($t['type']) }}
                            </th>
                            <td class="text-end">{{ $t['date'] }}</td>
                            <td class="text-end">Rp. {{number_format($t['amount'] ) }}</td>
                            <td class="text-end text-truncate" style="max-width: 150px;">{{ $t['description'] }}</td>

                            <td class="text-end">
                                    {{-- Tombol Hapus --}}
                                <form action="{{ route('transaction.destroy', $t->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                        {{-- Di dalam card-tools atau lokasi yang sesuai --}}



                        </tbody>

                      </table>

                    </div>


                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-15">
                  <div class="card card-round">
                    <div class="card-header">
                      <div class="card-head-row">
                        <div class="card-title">User Statistics</div>
                        <div class="card-tools">

                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart-container" style="min-height: 375px">
                        <canvas id="myChart"></canvas>
                        {{-- <canvas id="myChart" width="400" height="200"></canvas> --}}

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script>
                            document.addEventListener('DOMContentLoaded', function () {
                            const ctx = document.getElementById('myChart').getContext('2d');
                            new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                datasets: [
                                    {
                                        label: 'Income',
                                        data: {!! json_encode($monthlyIncome) !!},
                                        backgroundColor: 'rgba(76, 175, 80, 0.3)',
                                        borderColor: '#4caf50',
                                        fill: true,
                                        tension: 0.4
                                    },
                                    {
                                        label: 'Expense',
                                        data: {!! json_encode($monthlyExpense) !!},
                                        backgroundColor: 'rgba(244, 67, 54, 0.3)',
                                        borderColor: '#f44336',
                                        fill: true,
                                        tension: 0.4
                                    }
                                ]
                            },
                            options: {
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                            });
                            });
                            </script>
                            <a
                            href="#"
                            id="exportChart"
                            class="btn btn-label-success btn-round btn-sm me-2"
                            >
                            <span class="btn-label">
                                <i class="fa fa-pencil"></i>
                            </span>
                            Export
                            </a>
                            <a href="#" id="printChart" class="btn btn-label-info btn-round btn-sm">
                            <span class="btn-label">
                                <i class="fa fa-print"></i>
                            </span>
                            Print
                            </a>


                      </div>
                      <div id="myChartLegend"></div>
                    </div>
                  </div>
                </div>

              </div>


            </div>
          </div>

          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <nav class="pull-left">
                <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="">

                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> Help </a>
                  </li>

                </ul>
              </nav>


            </div>
          </footer>
        </div>



        <!-- End Custom template -->
      </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>

    <script>
    document.getElementById('exportChart').addEventListener('click', function (e) {
        e.preventDefault();
        const chart = document.getElementById('myChart');
        const image = chart.toDataURL('image/png');

        const link = document.createElement('a');
        link.href = image;
        link.download = 'chart.png';
        link.click();
    });
    </script>

    <script>
    document.getElementById('printChart').addEventListener('click', function (e) {
        e.preventDefault();

        const canvas = document.getElementById('myChart');
        const imageData = canvas.toDataURL('image/png'); // Ubah canvas jadi gambar

        const win = window.open('', '', 'width=800,height=600');
        win.document.write(`
        <html>
            <head>
            <title>Print Chart</title>
            <style>
                body {
                text-align: center;
                margin: 0;
                padding: 20px;
                font-family: Arial, sans-serif;
                }
                img {
                max-width: 100%;
                height: auto;
                }
            </style>
            </head>
            <body>
            <h3>User Statistics</h3>
            <img src="${imageData}" alt="Chart Image"/>
            <script>
                window.onload = function () {
                window.print();
                window.onafterprint = function () {
                    window.close();
                };
                };
            <\/script>
            </body>
        </html>
        `);
        win.document.close();
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    <script>
    document.getElementById('exportTableToExcel').addEventListener('click', function() {
        // Dapatkan elemen tabel
        var table = document.getElementById("transactionHistoryTable");

        // Opsi untuk mengabaikan kolom "Actions" saat ekspor
        // Kita akan membuat tabel baru tanpa kolom terakhir untuk diekspor
        var table_clone = table.cloneNode(true);
        var rows = table_clone.getElementsByTagName('tr');
        for (var i = 0; i < rows.length; i++) {
            // Hapus sel terakhir (kolom "Actions") dari setiap baris
            if (rows[i].getElementsByTagName('td').length > 0) {
                rows[i].deleteCell(-1); // Hapus sel terakhir di body
            } else if (rows[i].getElementsByTagName('th').length > 0) {
                rows[i].deleteCell(-1); // Hapus sel terakhir di header
            }
        }

        // Ubah tabel HTML menjadi worksheet SheetJS
        var wb = XLSX.utils.table_to_book(table_clone, {sheet: "Transaction History"});

        // Buat file Excel dan picu download
        // Nama file bisa disesuaikan
        XLSX.writeFile(wb, "TransactionHistory.xlsx");
    });
    </script>


</body>

</html>
