<style>
html {
  scroll-behavior: smooth;
}

.intro {
	position: relative;
}
		
.intro, .intro .container > .row {
	height: 100vh;
	min-height: 750px;
}
		
.intro h1 {
	font-size: 2.5rem;
	font-weight: 700;
	color: #fff;
	margin-bottom: 1.5rem;
}
		
.description h4 {
	margin-top: 40px;
	margin-bottom: 15px;
}
		
.center {
	display: block;
	margin-left: 220px;
	margin-right: auto;
}

.title {
	background: #7971ea;
	color: #fff;
	text-align: center;
	padding: 12px 0px;
}

.popular-post-list {
	margin-top: 20px;
}

.single-post-list {
	margin-bottom: 20px;
}

.details {
	margin-left: 12px;
}

.details h6 {
	font-weight: 600;
	margin-bottom: 10px;
}

.details p {
	margin-bottom: 0px;
}

.border-dotted {
	border-bottom: 2px dotted #edf0f5 !important;
}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

#myBtn {
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	font-size: 12px;
	font-weight: 900;
	border: 1px solid transparent;
	outline: none;
	color: #fff;
	background-color: #7971ea;
	border-color: #7971ea;
	cursor: pointer;
	padding: 14px 30px;
	line-height: 1.5;
    border-radius: 0.25rem;
	text-transform: uppercase;
}


#myBtn:hover {
	color: #fff;
    background-color: #5a50e5;
    border-color: #4f45e3;
}
</style>