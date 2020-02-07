<!DOCTYPE html>

<html>
 <head>
  <meta charset="utf-8">
  <title>Horoscoptic</title>
  <style type = "text/css">
        body {
		      color: magenta;
			  font-weight: bold;
			  font-family: times new roman;
			  text-align: center;
			  background-image: url('astrology3.jpg');
			  background-position:center;
			  background-attachment:scroll;
              background-repeat: no-repeat;
			  background-size: cover;
              background-color: lightgrey; 
			  margin-left: 50px;
			  margin-right: 50px;
			  margin-bottom:50px;
			  margin-top: 1pt;
			  
			}
		h1 {
		      font-size: 500%;
		      padding-bottom:1em;
			  padding-top: 0.1em;
			 
			}
        h2 { font-size: large;	
			 padding-bottom:1em;
			  padding-top: 1em;
			 
		   }	
		h3 { font-size: 15pt;
		    padding-bottom:3em;
			padding-top: 3em;
		   } 
		h4{
			flow:right;
			text-align:right;
		    padding-top:0.01ex;
            font-family: times new roman;	
            font-size:20px;	
			}
        p  {
		    padding-bottom:2em;
			padding-top: 2em;
		   }
		.button,.button1 {
                background-color: magenta;
                font-family: times new roman;
                color: lightgrey;
				text-align: center;
				-webkit-transition-duration: 1s; 
				transition-duration: 1s;
				}
		.button{font-size: 6mm;
		        padding-right: 0.15cm;
				padding-left: 0.15cm;
				padding-top: 0.3cm;
				padding-bottom: 0.3cm;
				border-radius: 3in;
                border: 2px solid lightgrey;
				box-shadow: 0 9px #999;
                width: 150px;
				}
		.button1{font-size: 4mm;
		        padding-right: 0.15cm;
				padding-left: 0.15cm;
				padding-top: 0.3cm;
				padding-bottom: 0.3cm;
				border-radius: 3in;
                border: 1px solid lightgrey;
				box-shadow: 0 3px #999;
                width: 60px;
			
		}
		
		.button:hover
           		{
		        background-color: purple
				}

        .button:active {
                background-color: purple;
                box-shadow: 0 5px #666;
                
						}
		.button1:hover
           		{
		        background-color: purple
				}

        .button1:active {
                background-color: purple;
                box-shadow: 0 5px #666;
                
						}
		input[type=search] {
              width: 10%;
              padding: 2px 2px;
              margin: 2px;
              box-sizing: border-box;
              border: inset;
              background-color: lightgrey;
              color: white;
            }
		
		
    </style>

    <script>
    </script>

 </head>

 <body>
        <h4> <form method="post" action="kërkim.php">
		  <p><label>Kërko 
             <input name = "kërkim" type = "search"  placeholder = "Kërko shenjën..." />
             </label
		     <label><input name= "submit1" type = "submit" class = "button1" value = "Kërko" /> </label></p>
		 </form> 
		 </h4>
    <h1> Horoscoptic </h1>
    <h2> Fill the form , just so you can find yourself <br/>
      You may find things about yourself, you didn't thought you had <br/>
	  Give it a try...
    </h2>
 

    <h3>

        <form method = "post"  autocomplete = "on" action = "formhoroskopi.php" >
 
          <p><label>Emri:
            <input name = "name" type = "text" size = "25" autofocus placeholder = "Iris Kelmendi">
          </label></p>

          <p><label>Data e lindjes:
             <input name="date" type = "date"  required />
             </label></p>
 
          <p><label>Ora e lindjes:
             <input name= "ora" type = "time"  />
             </label></p>
 

          <p><label>Qyteti i lindjes:
             <input name = "qytetilindjes" type = "text" size = "25" placeholder = "Tiranë" />
             </label></p>
 
 
          <p> <input name= "submit" type = "submit" type class = "button" value = "Ruaj" />
              <input name= "reset" type = "reset" class = "button" value = "Fshi" />
		  </p>
          </form> 
		  
		  
       
    </h3>
 </body>
</html>