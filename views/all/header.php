<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff" rel="stylesheet">
<link rel="stylesheet" href="assets/app/app.css"/>
</head>

<body>

    <ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
      <div style="background-color: #ffb74d!important" class="indigo darken-2 white-text" style="height: 180px;">
        <div class="row">
          <img style="margin-top: 5%;" width="100" height="100" src="https://res.cloudinary.com/dacg0wegv/image/upload/t_media_lib_thumb/v1463990208/photo_dkkrxc.png" class="circle responsive-img"/>

          <a href='?c=index&m=home' style="color: #FFF"><p style="margin-top: -5%;">
            Amoblando tu hogar
          </p></a>
        </div>
      </div>
    </li>

    <li id="dash_dashboard"><a class="waves-effect" href="#!"><b>Dashboard</b></a></li>

    <ul class="collapsible" data-collapsible="accordion">
      <li id="dash_users">
        <div id="dash_users_header" class="collapsible-header waves-effect"><b>Users</b></div>
        <div id="dash_users_body" class="collapsible-body">
          <ul>
            <li id="users_seller">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Seller</a>
            </li>

            <li id="users_customer">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Customer</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_products">
        <div id="dash_products_header" class="collapsible-header waves-effect"><b>Products</b></div>
        <div id="dash_products_body" class="collapsible-body">
          <ul>
            <li id="products_product">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Products</a>
              <a class="waves-effect" style="text-decoration: none;" href="#!">Orders</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_categories">
        <div id="dash_categories_header" class="collapsible-header waves-effect"><b>Categories</b></div>
        <div id="dash_categories_body" class="collapsible-body">
          <ul>
            <li id="categories_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
            </li>

            <li id="categories_sub_category">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
            </li>
          </ul>
        </div>
      </li>

      <li id="dash_brands">
        <div id="dash_brands_header" class="collapsible-header waves-effect"><b>Brands</b></div>
        <div id="dash_brands_body" class="collapsible-body">
          <ul>
            <li id="brands_brand">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Brand</a>
            </li>

            <li id="brands_sub_brand">
              <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Brand</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </ul>