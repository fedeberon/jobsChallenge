/**
 * Created by federicoberon on 09/04/2019.
 */
var databaseHelper = require('../dao/databaseHelper');

exports.save = function(job, callback) {
    var sqlQuery = "INSERT INTO jobs (name, startTime) VALUES ( ? , SYSDATE())";

    var name = job.name;

    databaseHelper.doQuery(sqlQuery, name, function(jobRequest) {
        callback(jobRequest[0]);
    });
};

exports.get = function(id, callback) {
    var sqlQuery = "SELECT * FROM jobs WHERE id =  ? ";
    databaseHelper.doQuery(sqlQuery, id,  function(jobRequest) {
        callback(jobRequest[0]);
    });
};

