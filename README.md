A JSON server to simulate REST service
======================================

A common task for front-end developers is to simulate a backend REST service to deliver some data in JSON format to the front-end application and make sure everything is working as expected at the front-end.

Setting up a full backend server takes some time. A much simpler approach can help to speed up front-end development time. This enables both frontend and backend development go parallel (Agile)

JSON Server is a simple project that helps you to setup a REST API with CRUD operations very fast. You can get a full fake REST API with zero coding in less than 30 seconds (seriously)!!!


I assume you have your HTTP server up and running and the docroot of your server is /var/www/html


How to install?
--------------
  git clone https://github.com/splogamurugan/phpjsonserver.git
  cp phpjsonserver /var/www/html (Change the docroot as per your HTTP server)
  chmod 755 -R /var/www/html/data


How to play around?
==================
You can access this server through http://localhost/phpjsonserver/ 


POST Request - CREATE an entry - (Copy paste the below code in your browser console)
------------------------------------------------------------------------------------
var data = "{\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\", \"updated_by\":\"splogamurugan@gmail.com\"}";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://localhost/phpjsonserver/index.php/justification/");
xhr.send(data);

* here "justification" is the table and "data" contains the row to be stored



GET Request (copy paste the below code in your browser console)
----------------------------------------------------------------
  var data = null;

  var xhr = new XMLHttpRequest();
  xhr.withCredentials = true;

  xhr.addEventListener("readystatechange", function () {
    if (this.readyState === 4) {
      console.log(this.responseText);
    }
  });

  xhr.open("GET", "http://localhost/phpjsonserver/index.php/justification/34");
  xhr.setRequestHeader("cache-control", "no-cache");
  xhr.send(data);

  sample response
  ---------------
  {\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\",\"updated_by\":\"splogamurugan@gmail.com\",\"id\":34}


PUT Request (UPDATE an entry
----------------------------

var data = "{\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\", \"updated_by\":\"splogamurugan@gmail.com\"}";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PUT", "http://localhost/phpjsonserver/index.php/justification/xxxxxxxxx");
xhr.send(data);

* here "justification" is the table and "data" contains the row to be stored, xxxxxxxxx is the primary key to update


DELETE Request (UPDATE an entry
-------------------------------

var data = "{\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\", \"updated_by\":\"splogamurugan@gmail.com\"}";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("DELETE", "http://localhost/phpjsonserver/index.php/justification/xxxxxxxxx");
xhr.send(data);

* here "justification" is the table and "data" contains the row to be stored, xxxxxxxxx is the primary key to update




Thanks!
