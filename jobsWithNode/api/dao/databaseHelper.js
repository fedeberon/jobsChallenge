require("dotenv").config();

var mysql = require('mysql');

exports.doQuery = function(sqlQuery, values,  callback) {
    var con = mysql.createConnection({
        host: process.env.DB_HOST,
        user: process.env.DB_USERNAME,
        password: process.env.DB_PASSWORD,
        database: process.env.DB_NAME,
        port: process.env.DB_PORT,
    });

    con.connect(function(err) {
        if (err) throw err;
        console.log("Connected!");
        con.query(sqlQuery, values , function (err, result) {
            if (err) throw err;
            console.log("Query completed");
            callback(result);
        });
    });
};