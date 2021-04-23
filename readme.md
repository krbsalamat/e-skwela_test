Once repository has been already pulled<---**important, pull first!!!**
 **1. Setup XAMPP**
	
 - open XAMPP 	go to Apache - config - httpd.conf - change Listen 80 to Listen 8080
	 ![ ](https://snipboard.io/pLr2vM.jpg)
 - go to Apache - config - httpd-ssl.conf - change Listen 443 to Listen 4430
 ![enter image description here](https://snipboard.io/Kou6Fq.jpg)
 - go to Apache - config - httpd-conf again - change DocumentRoot and Directory to your C:/users/%username%
 ![enter image description here](https://snipboard.io/L0E4d7.jpg)
 -  Start Apache, MySQL and FileZilla
 -  done!
 
2. **Setup database**
- go to localhost:8080/phpmyadmin
- create eskwela database
![enter image description here](https://snipboard.io/0OBivF.jpg)
- click SQL
![enter image description here](https://snipboard.io/0Aa7LX.jpg)
-enter values of eskwela.sql in the field and click GO:
![enter image description here](https://snipboard.io/kRaHDe.jpg)**3. Setup variables**


 > open config.php - edit $eskwela_home value to "/%filelocation%",
![enter image description here](https://snipboard.io/H6eREs.jpg)



 filelocation is where your index.php is found. In my case, it's found in */e-skwela_bootstap2/e-skwela_test*
![enter image description here](https://snipboard.io/3pi6eV.jpg)

You can now check your access by entering localhost:8080/e-skwela_test or localhost:8080/%whatever your set file location%


