var ws = require("nodejs-websocket")
var express = require('express')
var app = express()
var path = require('path')

var validator = require('validator');

var mysql = require('mysql')
var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "toor",
  database: "us_environmental"
})

global.Variable = {}

var getusers = "SELECT * FROM users";
var getlikeusers = "SELECT * FROM users WHERE user_name LIKE '";


// This is not really used, just sets up the connection.  In a big DB or site we would 
// A Pool of connections

con.connect(function(err) {
  if (err) throw err;
  con.query(getusers, function(err, result, fields) {
    if (err) throw err;
  for (var i in result){
    Variable[i] = (result[i].user_name);
  } 
  });
});


function cleanSQL(str) {
// clean sql exc here !!!! 
// We are escaping all input here
// Other ways to protect, but this is OK, but Just OK - Need to test

str = validator.escape(str) 

  return str;
}

function sqlQuery(searchType, searchString, table,  connection) { 
var querytemp = "SELECT * FROM " + table + " WHERE " + cleanSQL(searchType) + " LIKE '" + cleanSQL(searchString) + "%'" 
//var querytemp = "SELECT * FROM users  where user_name LIKE '" + cleanSQL(searchString) + "%'"
  console.log(querytemp); 

//    conn.sendText(str.toUpperCase()+"!!!")

    con.query(querytemp, function(err, result, fields) { //, fields) {
    if (err) throw err;
      var response = {};
      for (var i in result){
        response[i] = {};
        response[i].table = table;
        response[i].user_name = result[i].user_name;
        response[i].first_name = result[i].user_first_name;


   }
   connection.sendText(JSON.stringify(response));
  })
}


var server = ws.createServer(function (conn) {
     conn.on("text", function (str) {
     console.log("New connection")
     console.log("Reseived "+str)  
     var data = JSON.parse(str);

     console.log(data.searchType)
     console.log(data.searchString)


  //   sqlQuery(data.searchType, data.searchString, "users", conn);


 
//   conn.sendText(queryReturn[0])
 
  })
    conn.on("close", function (code, reason) {
        console.log("Connection closed")
    })
}).listen(8000)
