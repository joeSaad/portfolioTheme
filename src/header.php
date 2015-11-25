<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Name</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat|Raleway|Arimo|Poiret+One|Dosis|Varela+Round|Questrial|Comfortaa|Varela|Mallanna' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Mallanna' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">

	<style>
	body {
	/*font-family: 'Roboto', sans-serif;*/
	font-family: 'Mallanna', sans-serif;
	background-color: #eaeaea;

}


#page {
 background-color: #fff;
    box-shadow: 0 1px 1px 1px #ddd;
    max-width: 768px;
    margin: 0 auto;
}

h1 a:hover {
	text-decoration: none;
}

.biopanel {
    clear: both;
}

.biopanel h2 {
	margin: 0;
	padding: 5px;
	border-bottom: 1px solid #ccc;
}

.panelcontent {
    margin: 20px 0;
    padding: 0 10px;
}

h2 span.glyphicon {
	color: #ddd;
	font-size: smaller;
	margin-right: 5px
}

h2.expanded {
	border-bottom: 1px solid;
}

h2 {
    font-size: 1.4rem;
}
h2 span.fa {
    font-size: 2.5rem;
    margin-right: 15px;
}

.connect {
	width: 40%;
}

.connect-list li {
    float: left;
    list-style-type: none;
    width: 10%;
    margin: 0;
    font-size: 1.6rem;
    border: 1px solid saddlebrown;
    text-align: center;
    /*border: 1px solid saddlebrown;*/
}


.connect-list a {
	width: 100%;
	display: inline-block;
	cursor: hand;
}

@media(max-width:767px){
	#page {

	}
	.connect {
		width: 100%;
	}
	.connect-list li {
		width: 10%;
    	margin: 0 12px;
    	font-size: 35px;
	}
}

#projects {
    padding-left: 0;
}

.project-details {
	list-style-type: none;
}

.project-details li { 
    padding-left: 1em; 
    text-indent: -.7em;
}

.project-details li:before {
    content: "■ ";
    color: #ccc; /* or whatever color you prefer */
}

.project {
	float: left;
	width: 100%;
	border: 1px solid #eee;
	list-style-type: none;
	clear: both;
	margin: 10px;
}

.project h3 {
	padding-left: 3%;
}

.project img {
	margin: 10px 0;
	clear: left;
	max-width: 100%;
    height: auto;
    border-radius: 3px;
    border: 1px;
}

.project-details {
	float: left;
	width: 68%;
	margin-top: 10px;
}

.project-images {
	width: 18%;
	float: left;
	text-align: center;
}

.plabel {
	width: 16%;
	display: none;
}

.url {
    background: antiquewhite;
    padding: 0 5px;
    border: 1px;
    border-radius: 5px;
}

.fa-ellipsis-v, .fa-minus {
    display: none;
}




/* Document level adjustments */
/*html {
  font-size: 17px;
}*/
@media (max-width: 900px) {
  html { font-size: 15px; }
}
@media (max-width: 400px) {
  html { font-size: 15px; }
}

@media (max-width: 768px){
	html, body {
		font-size: 20px; 
	}
	#page {
		max-width: 100%;
	}
}

/*@media (max-width: 768px) {
	html, body { 
		font-size: 23px;
		background: #fff;
	}
	#page {
	    max-width: 100%;	    
	}
}*/

a {
	color: #4b1a1a;
}

a:hover {
	text-decoration: none;
}

.site-title {
	text-align: center;
}

#projectImages {
	display: none;
}

@media (max-width: 414px) {
	.project-details {
		float: left;
		width: 100%;
	}
	.project-images {
		float: none;
		width: 100%;
	}

}

/* Type will scale with document */
h1 {
  font-size: 3rem;
}
h2 {
  font-size: 2.5rem;
}
h3 {
  font-size: 2rem;
}
p {
	text-align: justify;
	/*font-size: 1rem;*/
}



.red {
	color: red;
}
	
	</style>


    <!-- <link rel="stylesheet" href="css/scss/style.scss"> -->
    <link rel="author" href="humans.txt">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>

    
</head>

<body <?php body_class(); ?>>
    <div id="page" class="container-fluid">
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <header>
                    <h1 class="site-title">
                            <a href="">
                                <img src="images/logo.png" alt="">
                            </a>                
                        </h1>

                    <h1 class="site-description">Joe Saad</h1>
                     <p>Software Engineer / UI Architect</p>
                    <div class="connect pull-right">
                        <ul class="connect-list">
                            <li><a href="#"><span class="glyphicon glyphicon glyphicon-phone"></span></a></li>
                            <li><a href="#"><span class="fa fa-envelope"></span></a></li>
                            <li><a href="#"><span class="fa fa-github"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-chrome"></span></a></li>
                            <li><a href="#"><span class="fa fa-jsfiddle"></span></a></li>
                            <li><a href="#"><span class="fa fa-wordpress"></span></a></li>
                            <li><a href="#"><span class="fa fa-stack-overflow"></span></a></li>
                        </ul>
                    </div>
                </header>

		<div id="main" class="site-main">
