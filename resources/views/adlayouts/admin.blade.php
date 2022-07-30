<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>
  @yield('title')|EventPlanning Admin panel
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href='assets/css/mdb.min.css' />
  <!-- Custom styles -->
  <link rel="stylesheet" href='assets/css/mdb.min.css' />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
<style>
    body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 200px;
  }
}
th,td{
	width: 75%;
   text-align: center;
   padding: 20px;
}
tr:hover{
	
  color: grey;
}

     /* Sidebar */
    .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    padding: 58px 0 0; /* Height of navbar */
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
    width: 240px;
    z-index: 600;
    }

    @media (max-width: 991.98px) {
    .sidebar {
        width: 100%;
    }
    }
    .sidebar .active {
    border-radius: 5px;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: 0.5rem;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
    body{
    background-color:lightcyan;
  }
</style>
</head>

<body>
<header>
    @include('adlayouts.inc.admin-navbar')
    @include('adlayouts.inc.admin-sidenavbar')
</header>
<main>
@yield('content')
</main>
@include('adlayouts.inc.admin-footer')

  <!-- MDB -->
  <script type="text/javascript" src='assets/js/mdb.min.js'></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src='assets/js/admin.js'></script>

</body>

</html>
