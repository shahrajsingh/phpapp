<!DOCTYPE HTML>
<html>

<head>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style>
        body {
  width: 100%;
  height: 100vh;
  display: flex;
  overflow: auto;
  flex-flow: column;
  flex-grow: 1;
  font-family: "Open Sans", sans-serif;
}

.nbr-top {
  box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.2),
    0px 2px 2px 2px rgb(0, 0, 0, 0.1);
}

.brand-img {
  margin-top: -10px;
  border-radius: 50%;
  box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.2),
    2px 2px 2px 2px rgba(0, 0, 0, 0.1);
}

.container-fluid {
  flex-grow: 1;
  margin-top: 64px;
  display: flex;
  flex-flow: column;
}

.row {
  flex-grow: 1;
  flex-wrap: nowrap;
}

.sidebar {
  transition: all 0.2s;
  display: flex;
  flex-flow: column;
  z-index: 1;
  max-width: 300px;
  width: 250px;
  height: 100%;
  padding: 1rem 0rem;
  background-color: #f4f4f4;
  box-shadow: 1px 0px 1px 1px rgba(0, 0, 0, 0.2),
    2px 0px 2px 0px rgba(0, 0, 0, 0.1);
}

.sidebar ul,
li {
  margin-left: auto;
  margin-right: auto;
}

.site-content {
  flex-grow: 1;
}

.menu-btn {
  width: 48px;
  height: 42px;
  padding: 8px;
  margin-left: 7px;
}

.menu-btn i {
  font-size: 26px;
}

#sidebar-nav {
  padding: 1rem 0rem;
  text-align: left;

  width: 100%;
}
.sidebar li {
  width: 100%;
  padding: 0.5rem;
  text-align: left;
}
.sidebar li:hover {
  background-color: #ffffff;
}
.sidebar li a {
  color: black;
  font-weight: 500;
}
.available-sample {
  padding: 1rem 1rem;
}

table {
  max-width: 900px;
  margin: 1rem auto;
  border: 12px solid white;

  box-shadow: 1px 2px 2px 1px rgba(0, 0, 0, 0.15),
    2px 3.5px 2px 0px rgba(0, 0, 0, 0.1), 0px 5px 5px 3px rgba(0, 0, 0, 0.08);
}
table a {
  color: white;
}
table a:hover {
  text-decoration: none;
  color: black;
}
.signup {
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  display: flex;
  flex-flow: column;
  justify-content: center;
}

.signup-card {
  background-image: linear-gradient(
    top,
    #007bff,
    #007bff 20%,
    transparent 20%,
    transparent 100%
  );
  background-image: -webkit-linear-gradient(
    top,
    #007bff,
    #007bff 20%,
    transparent 20%,
    transparent 100%
  );
  max-width: 450px;
  width: 95%;
  margin: auto;
  height: 300px;
}

.hospital-signup-card {
  background-image: linear-gradient(
    top,
    #ffc107,
    #ffc107 18%,
    transparent 18%,
    transparent 100%
  );
  background-image: -webkit-linear-gradient(
    top,
    #ffc107,
    #ffc107 18%,
    transparent 18%,
    transparent 100%
  );
  max-width: 450px;
  width: 95%;
  margin: 2rem auto;
  position: relative;
}

.hospital-logo {
  position: absolute;
  top: 1.5%;
  right: 0%;
  width: 100px;
  height: 80px;
}

.receiver-signup-card {
  background-image: linear-gradient(
    top,
    #6c757d,
    #6c757d 14.5%,
    transparent 14.5%,
    transparent 100%
  );
  background-image: -webkit-linear-gradient(
    top,
    #6c757d,
    #6c757d 14.5%,
    transparent 14.5%,
    transparent 100%
  );
  max-width: 450px;
  width: 95%;
  margin: 2rem auto;
  position: relative;
}

.view-request {
  padding: 1rem 2rem;
}
.add-sample-card {
  max-width: 450px;
  width: 95%;
  margin: 2rem auto;
}
#footer {
  width: 100%;
  height: 48px;
  font-size: 16px;
  font-weight: 600;
  font-family: "Open Sans";
  text-align: center;
  background-color: #f4f4f4;
  line-height: 48px;
  z-index: 0;
}
.overlay {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.67);
}
@media screen and (max-width: 991px) {
  .container-fluid {
    margin-top: 60px;
  }
}
@media screen and (max-width: 692px) {
  .sidebar {
    width: 64px;
  }

  #sidebar-nav {
    visibility: hidden;
  }
}

  </style>
</head>

<body onload="check()">

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary nbr-top">

    <a class="navbar-brand" href="index.php">
      <img class="brand-img" src="https://imgsto.s3.ap-south-1.amazonaws.com/donate-blood.gif" width="30" height="30" class="d-inline-block align-top" loding="lazy">
      <span class="h3 brand">Blood Bank</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">