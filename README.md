A simple JSON server for API mocking
====================================


How to get an entry
===================
var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("GET", "http://localhost:8080/phprest/index.php/justification/34");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.send(data);

sample response
---------------
{\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\",\"updated_by\":\"splogamurugan@gmail.com\",\"id\":34}



How create an entry 
===================
var data = "{\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\", \"updated_by\":\"splogamurugan@gmail.com\"}";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "http://localhost:8080/phprest/index.php/justification/");
xhr.send(data);

* here "justification" is the table and "data" contains the row to be stored


How to edit an entry
====================

var data = "{\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\", \"updated_by\":\"splogamurugan@gmail.com\"}";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("PUT", "http://localhost:8080/phprest/index.php/justification/xxxxxxxxx");
xhr.send(data);

* here "justification" is the table and "data" contains the row to be stored, xxxxxxxxx is the primary key to update



Installation 
============
wget https://github.com/splogamurugan/phpjsonserver/archive/initialversion.zip

chmod 777 -R db/*


Thanks!