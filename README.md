PHP Json Server
===============

A common task for front-end developers is to simulate a backend REST service to deliver some data in JSON format to the front-end application in order to ensure the front-end is working as expected.

Setting up a full back-end server is time consuming and an impediment for parallel development. This simpler approach can help fasten the front-end development time and enable front-end and back-end development go in parallel (The Agile Way)

JSON Server is a simple project that helps you to setup a REST API with CRUD operations very fast by leveraging this one can get a full fake REST API with zero coding in less than 30 seconds (How Awesome Is That)!!!

Only prerequisite is for you to have HTTP server (Apache) up and running



Installation
============
I assume docroot of your server is /var/www/html. Please change the docroot (/var/www/html) as per your HTTP server
```shell
  git clone https://github.com/splogamurugan/phpjsonserver.git
  cp -R phpjsonserver /var/www/html
  chmod 755 -R /var/www/html/phpjsonserver/data
```

Usage
===============

POST Request - (CREATE an entry)
--------------------------------
Copy paste the below code in your browser console

```javascript
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
```

* here "justification" is the table and "data" contains the row to be stored



GET Request
------------
Copy paste the below code in your browser console

```javascript
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
```

Sample response
```javascript
  {\"justification\":\"this is the content\",\"ceid\":\"sdf3434,343434,4545454,454232,565656\",\"updated_by\":\"splogamurugan@gmail.com\",\"id\":34}
```

PUT Request (UPDATE an entry)
----------------------------
Copy paste the below code in your browser console
```javascript
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
```
* here "justification" is the table and "data" contains the row to be stored, xxxxxxxxx is the primary key to update


DELETE Request (UPDATE an entry)
-------------------------------
Copy paste the below code in your browser
```javascript
var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    console.log(this.responseText);
  }
});

xhr.open("DELETE", "http://localhost/phpjsonserver/index.php/justification/xxxxxxxxx");
xhr.send(data);
```
* here "justification" is the table and xxxxxxxxx is the primary key of a record to be deleted!




Thanks!
