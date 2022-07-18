.caja{
	border: 1px solid black;

	height: 50px;
	width: 100px;
}
body {
	background: rgb(125,185,232); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(125,185,232,1) 71%, rgba(125,185,232,1) 99%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(71%,rgba(125,185,232,1)), color-stop(99%,rgba(125,185,232,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(125,185,232,1) 71%,rgba(125,185,232,1) 99%); /* W3C */


filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7db9e8', endColorstr='#7db9e8',GradientType=0 ); /* IE6-9 */
	color: #000;
	font-family: "Century Gothic";
	font-size: 16px;
	line-height: 1.6;
}
h2 {
	color: #000
    font-family: Verdana, Geneva, sans-serif;
	font-size: 22px;
	margin: 15px;
	text-align: center;
	
}
.grupo {
	border: 3px solid #999999;
	padding: 20px;
	width: 100px;
	color: #006;
border-radius: 8px;
border-color:#036;
	
	background: rgb(255,255,255); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(209,238,255,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(209,238,255,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(209,238,255,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(209,238,255,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(209,238,255,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(209,238,255,1) 100%); /* W3C */

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#d1eeff',GradientType=0 ); /* IE6-9 */
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
}
.contact-form {
	width: 400px;
	text-align: left;

}

/* Form input box style */
.form-input {
	display: block;
	width: 200px;
	height: 15px;
	margin-bottom: 15px;
	color: #000;
	background-color: #FF9;
	border: 1px solid #999;
	box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);
	-moz-transition: all 0.4s ease-in-out;
	-webkit-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
	behavior: url(PIE.htc);
	font-family: "Century Gothic";
	font-size: 14px;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
}

/* Focus style */
.form-input:focus {
	border: 1px solid #7fbbf9;
	-moz-box-shadow:    inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #7fbbf9;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #7fbbf9;
	box-shadow:         inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #7fbbf9;
}

/* Error style */
.form-input:-moz-ui-invalid {
	border: 1px solid #e00;
	-moz-box-shadow:    inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
	box-shadow:         inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
}

.form-input.invalid {
	border: 1px solid #e00;
	-moz-box-shadow:    inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
	-webkit-box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
	box-shadow:         inset 0 0 1px rgba(0, 0, 0, 0.7), 0 0 1px #e00;
}

/* Form submit button */
.form-btn {
	padding: 0 15px;
	height: 30px;
	font: bold 12px 'Helvetica Neue', Helvetica, Arial, sans-serif;
	text-align: center;
	color: #fff;
	text-shadow: 0 1px 0 rgba(0, 0, 0, 0.7);
	cursor: pointer;
	border: 1px solid #0d3d6a;
	outline: none;
	position: relative;
	background-color: #1d83e2;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#1d83e2), to(#0d3d6a)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(top, #1d83e2, #0d3d6a); /* Chrome 10+, Saf5.1+, iOS 5+ */
	background-image:    -moz-linear-gradient(top, #1d83e2, #0d3d6a); /* FF3.6 */
	background-image:     -ms-linear-gradient(top, #1d83e2, #0d3d6a); /* IE10 */
	background-image:      -o-linear-gradient(top, #1d83e2, #0d3d6a); /* Opera 11.10+ */
	background-image:         linear-gradient(top, #1d83e2, #0d3d6a);
	-pie-background:          linear-gradient(top, #1d83e2, #0d3d6a); /* IE6-IE9 */
	-moz-box-shadow:    inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
	box-shadow:         inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.7);
	-moz-background-clip:    padding;
	-webkit-background-clip: padding-box;
	background-clip:         padding-box;
	behavior: url(PIE.htc);
}

.form-btn:active {
	border: 1px solid #1d83e2;
	background-color: #0d3d6a;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#0d3d6a), to(#1d83e2)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(top, #0d3d6a, #1d83e2); /* Chrome 10+, Saf5.1+, iOS 5+ */
	background-image:    -moz-linear-gradient(top, #0d3d6a, #1d83e2); /* FF3.6 */
	background-image:     -ms-linear-gradient(top, #0d3d6a, #1d83e2); /* IE10 */
	background-image:      -o-linear-gradient(top, #0d3d6a, #1d83e2); /* Opera 11.10+ */
	background-image:         linear-gradient(top, #0d3d6a, #1d83e2);
	-pie-background:          linear-gradient(top, #0d3d6a, #1d83e2); /* IE6-IE9 */
	-moz-box-shadow:    inset 0 0 2px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);
	-webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);

	box-shadow:         inset 0 0 2px rgba(0, 0, 0, 0.7), 0 1px 0 rgba(255, 255, 255, 0.1);
	behavior: url(PIE.htc);
}

label {
	margin-bottom: 8px;
	width: 300px;
	color: #003;
	font-size: 14px;
	font-weight: bold;
	text-align: left;
}

label span {
	font-size: 12px;
	color:#333;
	font-weight: normal;
}

.contact-form.frame {
    background-color: #444444;
    border: 1px solid #CCCCCC;
    padding: 20px;
}
.titulo{
	top: -10px;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
	margin:1rem; 
	background-color: #BDBDBD;
	border: 2px solid black;
	height: 15px;
	width: 900px;
	top:  10px;
}
select{
	margin-bottom: 8px;
	display: block;
	height: 20px;
	width: 500px;
	color: #003;
	font-size: 14px;
	font-weight: bold;
	color:#333;
}
input{
	display: inline-block;
	padding: 1rem;
	margin: 1rem;
}
.caja{
	display: inline-block;
	text-align: left;
	position: relative;
}
.raya{
	display: inline;
	background-color: red;
	height: 50px;
	width: 50px;
}
.barra{
	border: 2px solid black;
	background-color: #BDBDBD;
	size: auto;
	display: inline-block;
}