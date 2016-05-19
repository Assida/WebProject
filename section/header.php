
	
	<meta charset="utf8">
	<link href="boot/css/bootstrap.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet" type="text/css" />
	<link href="styleknopki.css" rel="stylesheet">
	<meta name="viewport"  content="width=device-width,minimumscale=1.0,
	maximum-scale=1.0" />
	<style type="text/css">  
		body {
         background: url('img/logo.png');
          background-size: cover;
        }
        a { 
    		text-decoration: none; 
   		} 
      .bgvideo {
          position: fixed;
          right: 0;
          bottom: 0;
          min-width: 100%;
          min-height: 100%;
          width: auto;
          height: auto;
          z-index: -9999;
        }</style>
</head>

<body> 
    <video autoplay loop muted class="bgvideo" id="bgvideo"><source src="img/a.mp4" type="video/mp4"></source></video>   
   <div id="wrapping" class="shadow">
	<header class="shadow">
	    <img id="menu" class="invisible" src="img/icon.png"  onclick="menu();">
        <img id="logo" src="img/logo.png" height="50px" width="50px">
         <div class="header">   <img src="img/copy.png"> </div>
        <div class="header">  <img src="img/456.png" >  </div>
        <div class="header">   <img src="img/copy.png"> </div>
	</header>

	<aside id="aside"   class="shadow">  
		<ul>
			
			<a href="index.php" > <li> Main page </li> </a> 
			<a href="log.php"> <li> Login </li> </a>  
			<a href="sovet.php"> <li> Your page</li> </a>
			<a href="opasity.php" > <li> Work !</li> </a>
			<a href="contacts.php"> <li> Our ontacts</li> </a>
			<a href="adminim.php"> <li> Admin's gallery</li> </a>
			

			
	</aside>