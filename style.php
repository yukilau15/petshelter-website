<style>
ul li ul {
	position: absolute;
	background: #fff;
	top: 120%;
	list-style: none;
	visibility: hidden;
	opacity: 0;
	.box-shadow: 0 0 10px 3px rgba(0,0,0,0.05);
	padding:20px 20px;
	border-top: 5px solid #4f45e3;
	-webkit-transition: all .3s ease-out 0s;
	-moz-transition: all .3s ease-out 0s;
	-ms-transition: all .3s ease-out 0s;
	-o-transition: all .3s ease-out 0s;
	transition: all .3s ease-out 0s
}
			
ul li:hover > ul, ul li ul:hover {
	visibility: visible;
	opacity: 1;
	display: block;
}
	
ul li ul li {
	clear: both;
	width: 100%;
	text-align: left;
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