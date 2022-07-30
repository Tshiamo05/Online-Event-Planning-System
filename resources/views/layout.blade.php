<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online event planning system</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
crossorigin="anonymous">



<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script>
  <style>
  body{
    background-color:lightcyan;
  }
  @media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  
}
h1 {color:Tomato;
}

th,td{
   text-align: center;
   padding: 10px;
}
tr:hover{
	
  color: grey;
}


/* Style the category */
.cate {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

.side{
	float:left;
	width:20%;
}
article{
	float: left;
	width: 80%;
}
  .article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: #f1f1f1;
  height: 300px; 
}
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .custom-login{
    height:500px;
    padding-top: 100px;
  }
  img.slider-img{
    height:400px !important
  }
  .custom-product{
    height:600px;
  }
  .custom-addproduct{
    height:700px;
  }
  .slider-text{
    background-color:#35443585;
  }
  /*.carousel-caption{
    background-color:#35443585;
  }*/
  .trending-image{
    height:200px;
  }
  .trending-item{
    float:left;
    width:30%;
  }
  .trending-wrapper{
    margin:40px;
  }
  .detail-img{
    height:200px;
  }
  .search-box{
    width:400px !important
  }
  .cart-list-divider{
    border-bottom:1px solid #ccc;
    margin-bottom:20px;
    padding-bottom:20px;
  }
  .checked {
  color: orange;
}
  .checklist{
    width:300px;
  }
  .rating-product{

    background:#35443585;
    padding:50px;
    width:300px;
  }
  .justify-content-center{
    height:300px;
  }

  </style>
</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<script>
if(response.latest !== 0) {
$('#notifier').html('<i class="fas fa-bell"></i>' + '1')
} else {
$('#notifier').html('0')
}
</script>
</html>
